<?php
/*
 * Langue de traduction pour l'extension de paiement - m�thode Elavon/Converge
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
 * @filesource /locale/fr_CA/module/payment/methods/converge/language.php
 */

$lang     = [
    'title'       => 'Converge',
    'description' => 'Accepter les paiements par carte de crédit via la passerelle de paiement Converge.',
    'at_converge' => '@Converge',
    'merchant_id' => 'ID de commerçant (fourni par Converge)',
    'user_id'     => 'ID de l&rsquo;utilisateur (fourni par Converge)',
    'pin'         => 'PIN (fourni par Converge)',
    'auth_type'   => 'Type d&rsquo;autorisation',
    'prefix_amex' => 'Préfixe à utiliser pour les cartes de crédit American Express. (Ces cartes sont traitées et conciliées par American Express)',
    'allow_refund'=> 'Autoriser Annuler/Remboursements? Cela doit être activé sur votre compte marchand Converge ou les remboursement ne seront pas autorisé.',
    'msg_website' => 'Cela doit être fait manuellement le site web de Converge.',
    'msg_capture_manual' => 'Le paiement n&rsquo;a pas été traitée par la passerelle Converge.',
    'msg_approval_success' => '%s - Code d&rsquo;approbation: %s --> Résultats CVV2: %s',
    'msg_address_result' => 'Résultats de la vérification d&rsquo;adresse: %s',
    'err_process_decline' => 'Code de refus  #%s: %s',
    'err_process_failed' => 'La carte de crédit n&rsquo;a pas été traité, la réponse de Converge:',
   ];
