<?php
/*
 * Langue de traduction pour l'extension Options d'inventaire
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
 * @version    4.x Last Update: 2020-10-14
 * @filesource /lib/locale/fr_CA/ext/invOptions/language.php
 */

$lang = [
    'title' => 'Options d&rsquo;inventaire',
    'description' => 'L&rsquo;extension pour les options d’inventaire permet les  options / attributs des produits d&rsquo;inventaire d&rsquo;être assigné à un SKU. Cette fonctionnalité facilite les articles qui sont disponibles dans des tailles, couleurs, etc. différentes, mais qui sont reliés à un SKU spécifique.',
    'msg_sel_ms'  => 'Pour la marchandise avec des d&rsquo;options inventaire , cet enregistrement doit d&rsquo;abord être enregistré pour créer l&rsquo;enregistrement principal dans la base de données. Une fois enregistrée, modifier l&rsquo;article et l&rsquo;onglet Options sv&rsquo;affichera pour l&rsquo;ajout d&rsquo;options disponibles. NOTE: Les options doivent être ajoutées avant toute activité de journal, car une fois qu&rsquo;une écriture a été reportée, les options ne peuvent plus être modifiées.',
    'skus_created' => 'Les références SKU suivantes seront générées par Bizuno ce qui représente chaque combinaison du produit disponible avec les options données. Une fois créée chaque SKU peut être édité séparément de modifier les détails pour la variante spécifique.',
    'sku_suffix' => 'Suffixe SKU (Maximum 2 caractères)',
    'err_sku_too_long' => 'Le SKU: %s est supérieur au champ de base de données. Pour résoudre ce problème, utiliser un SKU plus court et/ou moins/plus petites options attributs. Le SKU nouvellement créé n&rsquo;a pas été enregistré.'];
