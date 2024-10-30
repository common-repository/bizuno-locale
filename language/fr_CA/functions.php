<?php
/*
 * Fonctions pour convertir la monnaie en mots
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
 * @version    4.x Last Update: 2020-09-05
 * @filesource /locale/fr_CA/functions.php
 */
namespace bizuno;


// Les fonctions ci-dessous sont utilisées pour convertir un nombre en langue pour la devise CAD (Principalement pour les chèques)
function viewCurrencyToWords($number)
{
	$number   = round($number, 2);
	$position = array('', ' mille', ' million', ' billion');
	$dollars  = intval($number);
	$cents    = round(($number - $dollars) * 100);
    if (strlen($cents) == 1) { $cents = '0'.$cents; }
    if ($dollars < 1) { $output = TEXT_ZERO; }
      else { $output = build_1000_words($dollars, $position); }
	return strtoupper("$output ".lang('dollars').' '.lang('et')." $cents/100");
}

function build_1000_words($number, $position)
{
	$output   = '';
	$suffix   = array_shift($position);
	$tens     = $number % 100;
	$number   = intval($number / 100);
	$hundreds = $number % 10;
	$number   = intval($number / 10);
    if ($number >= 1) { $output = build_1000_words($number, $position); }
	switch ($hundreds) {
		case 1: $output .= ' cent';   break;
		case 2: $output .= ' deux cent';   break;
		case 3: $output .= ' trois cent'; break;
		case 4: $output .= ' quatre cent';  break;
		case 5: $output .= ' cinq cent';  break;
		case 6: $output .= ' six cent';   break;
		case 7: $output .= ' sept cent'; break;
		case 8: $output .= ' huit cent'; break;
		case 9: $output .= ' neuf cent';  break;
	}
	$output .= build_100_words($tens);
	return $output . $suffix;
}

function build_100_words($number)
{
	if ($number > 9 && $number < 20) {
		switch ($number) {
			case 10: return ' dix';
			case 11: return ' onze';
			case 12: return ' douze';
			case 13: return ' treize';
			case 14: return ' quatorze';
			case 15: return ' quinze';
			case 16: return ' seize';
			case 17: return ' dix-sept';
			case 18: return ' dix-huit';
			case 19: return ' dix-neuf';
		}
	}
	$output = '';
	$tens = intval($number / 10);
	switch ($tens) {
		case 2: $output .= ' vingt'; break;
		case 3: $output .= ' trente'; break;
		case 4: $output .= ' quarante'; break;
		case 5: $output .= ' cinquante'; break;
		case 6: $output .= ' soixante'; break;
		case 7: $output .= ' soixante-dix'; break;
		case 8: $output .= ' quatre-vingts'; break;
		case 9: $output .= ' quatre-vingt-dix'; break;
	}
	$ones = $number % 10;
	switch ($ones) {
		case 1: $output .= ($output ? '-' : ' ') . 'un';   break;
		case 2: $output .= ($output ? '-' : ' ') . 'deux';   break;
		case 3: $output .= ($output ? '-' : ' ') . 'trois'; break;
		case 4: $output .= ($output ? '-' : ' ') . 'quatre';  break;
		case 5: $output .= ($output ? '-' : ' ') . 'cinq';  break;
		case 6: $output .= ($output ? '-' : ' ') . 'six';   break;
		case 7: $output .= ($output ? '-' : ' ') . 'sept'; break;
		case 8: $output .= ($output ? '-' : ' ') . 'huit'; break;
		case 9: $output .= ($output ? '-' : ' ') . 'neuf';  break;
	}
	return $output;
}
