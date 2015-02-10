<?php
require('../fpdf/fpdf.php');

class FPDF_CellFit extends FPDF {

    //Cell with horizontal scaling if text is too wide
    function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $scale=0, $force=1)
    {
        //Get string width
        $str_width=$this->GetStringWidth($txt);

        //Calculate ratio to fit cell
        if($w==0)
            $w=$this->w-$this->rMargin-$this->x;
        $ratio=($w-$this->cMargin*2)/$str_width;

        $fit=($ratio < 1 || ($ratio > 1 && $force == 1));
        if ($fit)
        {
            switch ($scale)
            {

                //Character spacing
                case 0:
                    //Calculate character spacing in points
                    $char_space=($w-$this->cMargin*2-$str_width)/max($this->MBGetStringLength($txt)-1, 1)*$this->k;
                    //Set character spacing
                    $this->_out(sprintf('BT %.2f Tc ET', $char_space));
                    break;

                //Horizontal scaling
                case 1:
                    //Calculate horizontal scaling
                    $horiz_scale=$ratio*100.0;
                    //Set horizontal scaling
                    $this->_out(sprintf('BT %.2f Tz ET', $horiz_scale));
                    break;

            }
            //Override user alignment (since text will fill up cell)
            $align='';
        }

        //Pass on to Cell method
        $this->Cell($w, $h, $txt, $border, $ln, $align, $fill, $link);

        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT '.($scale==0 ? '0 Tc' : '100 Tz').' ET');
    }

    //Cell with horizontal scaling only if necessary
    function CellFitScale($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='')
    {
        $this->CellFit($w, $h, $txt, $border, $ln, $align, $fill, $link, 1, 0);
    }

    //Cell with horizontal scaling always
    function CellFitScaleForce($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='')
    {
        $this->CellFit($w, $h, $txt, $border, $ln, $align, $fill, $link, 1, 1);
    }

    //Cell with character spacing only if necessary
    function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='')
    {
        $this->CellFit($w, $h, $txt, $border, $ln, $align, $fill, $link, 0, 0);
    }

    //Cell with character spacing always
    function CellFitSpaceForce($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='')
    {
        //Same as calling CellFit directly
        $this->CellFit($w, $h, $txt, $border, $ln, $align, $fill, $link, 0, 1);
    }

    //Patch to also work with CJK double-byte text
    function MBGetStringLength($s)
    {
        if($this->CurrentFont['type']=='Type0')
        {
            $len = 0;
            $nbbytes = strlen($s);
            for ($i = 0; $i < $nbbytes; $i++)
            {
                if (ord($s[$i])<128)
                    $len++;
                else
                {
                    $len++;
                    $i++;
                }
            }
            return $len;
        }
        else
            return strlen($s);
    }

}
?>