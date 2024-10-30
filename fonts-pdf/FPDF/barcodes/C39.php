<?php
/*
 * Include file to generate Code 39 barcodes as modified from fpdf.org
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
 * @filesource /apps/FPDF/barcodes/C39.php
 */

class C39 {

    protected $T128;
    protected $ABCset  = "";
    protected $Aset    = "";
    protected $Bset    = "";
    protected $Cset    = "";
    protected $SetFrom;
    protected $SetTo;
    protected $JStart  = ["A"=>103, "B"=>104, "C"=>105];
    protected $JSwap   = ["A"=>101, "B"=>100, "C"=>99];

    function Barcode(&$PDF, $code, $xpos, $ypos, $width=40, $height=15)
    {
        $height  -= 5; // correction to allow text to show
        $baseline = $width / 50; // correction factor to get a reasonably close dimension
        $wide     = $baseline;
        $narrow   = $baseline / 3;
        $gap      = $narrow;
        $barChar['0'] = 'nnnwwnwnn';
        $barChar['1'] = 'wnnwnnnnw';
        $barChar['2'] = 'nnwwnnnnw';
        $barChar['3'] = 'wnwwnnnnn';
        $barChar['4'] = 'nnnwwnnnw';
        $barChar['5'] = 'wnnwwnnnn';
        $barChar['6'] = 'nnwwwnnnn';
        $barChar['7'] = 'nnnwnnwnw';
        $barChar['8'] = 'wnnwnnwnn';
        $barChar['9'] = 'nnwwnnwnn';
        $barChar['A'] = 'wnnnnwnnw';
        $barChar['B'] = 'nnwnnwnnw';
        $barChar['C'] = 'wnwnnwnnn';
        $barChar['D'] = 'nnnnwwnnw';
        $barChar['E'] = 'wnnnwwnnn';
        $barChar['F'] = 'nnwnwwnnn';
        $barChar['G'] = 'nnnnnwwnw';
        $barChar['H'] = 'wnnnnwwnn';
        $barChar['I'] = 'nnwnnwwnn';
        $barChar['J'] = 'nnnnwwwnn';
        $barChar['K'] = 'wnnnnnnww';
        $barChar['L'] = 'nnwnnnnww';
        $barChar['M'] = 'wnwnnnnwn';
        $barChar['N'] = 'nnnnwnnww';
        $barChar['O'] = 'wnnnwnnwn';
        $barChar['P'] = 'nnwnwnnwn';
        $barChar['Q'] = 'nnnnnnwww';
        $barChar['R'] = 'wnnnnnwwn';
        $barChar['S'] = 'nnwnnnwwn';
        $barChar['T'] = 'nnnnwnwwn';
        $barChar['U'] = 'wwnnnnnnw';
        $barChar['V'] = 'nwwnnnnnw';
        $barChar['W'] = 'wwwnnnnnn';
        $barChar['X'] = 'nwnnwnnnw';
        $barChar['Y'] = 'wwnnwnnnn';
        $barChar['Z'] = 'nwwnwnnnn';
        $barChar['-'] = 'nwnnnnwnw';
        $barChar['.'] = 'wwnnnnwnn';
        $barChar[' '] = 'nwwnnnwnn';
        $barChar['*'] = 'nwnnwnwnn';
        $barChar['$'] = 'nwnwnwnnn';
        $barChar['/'] = 'nwnwnnnwn';
        $barChar['+'] = 'nwnnnwnwn';
        $barChar['%'] = 'nnnwnwnwn';

        $PDF->SetFont('Arial','',10);
        $PDF->Text($xpos, $ypos + $height + 4, $code);
        $PDF->SetFillColor(0);

        $code = '*'.strtoupper($code).'*';
        for ($i=0; $i<strlen($code); $i++){
            $char = $code[$i];
            if (!isset($barChar[$char])) { $PDF->Error('Invalid character in barcode: '.$char); }
            $seq = $barChar[$char];
            for ($bar=0; $bar<9; $bar++) {
                if ($seq[$bar] == 'n') { $lineWidth = $narrow; }
                else                   { $lineWidth = $wide; }
                if ($bar % 2 == 0) { $PDF->Rect($xpos, $ypos, $lineWidth, $height, 'F'); }
                $xpos += $lineWidth;
            }
            $xpos += $gap;
        }
    }
}