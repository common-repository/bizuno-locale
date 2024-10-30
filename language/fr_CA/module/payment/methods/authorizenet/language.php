<?php
/*
 * Traduction de langue pour l'extension de paiement - méthode Authorize.net
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
 * @filesource /locale/fr_CA/module/payment/methods/authorizenet/language.php
 */

$lang = [
    'title'       => 'Authorize.net',
    'description' => 'Accepter les paiements par carte de crédit via la passerelle de paiement Authorize.net.',
    'at_authorizenet' => '@Authorize.net',
//    'merchant_id' => 'ID de commerçant (fourni par AuthorizeNet)',
    'user_id'     => 'ID de l&rsquo;utilisateur (fourni par AuthorizeNet)',
    'txn_key'     => 'Clé de transaction',
    'auth_type'   => 'Type d&rsquo;autorisation',
    'prefix_amex' => 'Préfixe à utiliser pour les cartes de crédit American Express. (Ces cartes sont traitées et conciliées par American Express)',
    'allow_refund'=> 'Autoriser Annuler/Remboursements? Cette fonction doit être activée sur votre compte commerçant d&rsquo;Authorize.net ou les remboursements ne seront pas autorisés.',
    'msg_website' => 'Cela doit être fait manuellement sur le site web Authorize.net.',
    'msg_capture_manual' => 'Le paiement n&rsquo;a pas été traitée par la passerelle Authorize.net.',
    'msg_approval_success' => '%s - Code d&rsquo;approbation: %s --> résultats CVV2: %s',
    'msg_address_result' => 'Résultats de la vérification d&rsquo;adresse: %s',
    'err_process_decline' => 'Code de refus #%s: %s',
    'err_process_failed' => 'La carte de crédit n&rsquo;a pas été traitée, la réponse d&rsquo;Authorize.net:',
   ];
