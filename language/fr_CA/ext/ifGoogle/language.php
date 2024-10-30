<?php
/*
 * Langue de traduction pour l'extension Interface Google
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
 * @filesource /lib/locale/fr_CA/ext/ifGoogle/language.php
 */

$lang = [
    'title' => 'Interface Google',
    'acronym' => 'Google',
    'description' => 'L&rsquo;interface Google offre la possibilité de téléverser le produit saisi.',
    // settings
    'sftp_url' => 'URL FTP sécuritaire pour envoyer des flux RRS',
    'sftp_user' => 'Nom d&rsquo;utilisateur sFTP',
    'sftp_pass' => 'Mot de passe sFTP',
    'build_inventory' => 'Générer un flux RSS de l&rsquo;inventaire ',
    'build_inventory_desc' => 'Appuyer sur «Aller à» pour créer votre fichier de flux RSS des produits commercial de Google et le télécharger sur votre ordinateur. De là, il peut être téléversé sur Google via Google Merchant.',
    'err_no_inv_sku' => 'Article %s n&rsquo;a pas de n° GTIN d&rsquo;assigné!',
    'err_sku_no_weight' => 'SKU %s n&rsquo;a pas de poids. Veuillez modifier l&rsquo;inventaire et ajouter un poids non nul!',
    'err_missing_image' => 'Chemin de l&rsquo;image: %s pour le sku: %s doit être de type JPG ou GIF pour Google!',
    'err_no_inv_rows' => 'Aucun article d&rsquo;inventaire trouvé à être téléversé!',
    'err_inv_no_price' => 'Aucun prix n&rsquo;a été déterminé pour le SKU: %s',
    'err_feed_needs_fix' => 'Il y a des erreurs dans votre fichier de flux, Veuillez les corriger avant de soumettre votre flux à Google.'];

