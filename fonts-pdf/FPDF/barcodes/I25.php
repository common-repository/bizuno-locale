<?php
/*
 * Include file to generate Interleaved 2 of 5 barcodes as modified from fpdf.org
 *
 * NOTICE OF LICENSE
 * This software may be used only for one installation of Bizuno when
 * purchased through the PhreeSoft.com website store. This software may
 * not be re-sold or re-distrubuted without written consent of Phreesoft.
 * Please contact us for further information or clarification of you have
 * any questions.
 *
 * DISCLAIMER
 * Do not edit or add to this file if you wish to automatically upgrade to
 * a newer version in the future. If you wish to customize this module, you
 * do so at your own risk, PhreeSoft will not support this extension if it
 * has been modified from its original content.
 *
 * @name       Bizuno ERP
 * @author     Dave Premo, PhreeSoft <support@phreesoft.com>
 * @copyright  2008-2020, PhreeSoft, Inc.
 * @license    PhreeSoft Proprietary
 * @version    4.x Last Update: 2020-03-18
 * @filesource /apps/FPDF/barcodes/I25.php
 */

class I25
{
    function Barcode(&$PDF, $code, $xpos, $ypos, $width=40, $height=15) // i25($xpos, $ypos, $code, $basewidth=1, $height=10)
    {
        $basewidth= 1;
        $wide     = $basewidth;
        $narrow   = $basewidth / 3 ;
        // wide/narrow codes for the digits
        $barChar['0'] = 'nnwwn';
        $barChar['1'] = 'wnnnw';
        $barChar['2'] = 'nwnnw';
        $barChar['3'] = 'wwnnn';
        $barChar['4'] = 'nnwnw';
        $barChar['5'] = 'wnwnn';
        $barChar['6'] = 'nwwnn';
        $barChar['7'] = 'nnnww';
        $barChar['8'] = 'wnnwn';
        $barChar['9'] = 'nwnwn';
        $barChar['A'] = 'nn';
        $barChar['Z'] = 'wn';
        // add leading zero if code-length is odd
        if(strlen($code) % 2 != 0) { $code = '0' . $code; }
        $PDF->SetFont('Arial','',10);
        $PDF->Text($xpos, $ypos + $height + 4, $code);
        $PDF->SetFillColor(0);
        // add start and stop codes
        $code = 'AA'.strtolower($code).'ZA';
        for ($i=0; $i<strlen($code); $i=$i+2){
            // choose next pair of digits
            $charBar = $code[$i];
            $charSpace = $code[$i+1];
            // check whether it is a valid digit
            if (!isset($barChar[$charBar]))  { $PDF->Error('Invalid character in barcode: '.$charBar); }
            if (!isset($barChar[$charSpace])){ $PDF->Error('Invalid character in barcode: '.$charSpace); }
            // create a wide/narrow-sequence (first digit=bars, second digit=spaces)
            $seq = '';
            for ($s=0; $s<strlen($barChar[$charBar]); $s++) { $seq .= $barChar[$charBar][$s] . $barChar[$charSpace][$s]; }
            for($bar=0; $bar<strlen($seq); $bar++){
                // set lineWidth depending on value
                if ($seq[$bar] == 'n'){ $lineWidth = $narrow; }
                else { $lineWidth = $wide; }
                // draw every second value, because the second digit of the pair is represented by the spaces
                if($bar % 2 == 0) { $PDF->Rect($xpos, $ypos, $lineWidth, $height, 'F'); }
                $xpos += $lineWidth;
            }
        }
    }
}