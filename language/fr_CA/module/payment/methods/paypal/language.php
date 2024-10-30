<?php
/*
 * Langue de traduction pour l'extension de paiement - méthode PayPal
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
 * @filesource /locale/fr_CA/module/payment/methods/paypal/language.php
 */

$lang = [
    'title' => 'PayPal',
    'description'=> 'Interface de PayPal, couvre les deux PayPal Express et PayPal Pro.',
    'at_paypal' => '@PayPal',
    'user' => 'ID utilisateur (fournis par PayPal)',
    'pass' => 'Mot de passe (fournis par PayPal)',
    'signature' => 'Signature (fournis par PayPal)',
    'auth_type' => 'Type d&rsquo;autorisation',
    'prefix_amex' => 'Préfixe à utiliser pour les cartes de crédit American Express. (Ces cartes sont traitées et conciliées par American Express)',
    'allow_refund' => 'Autoriser Annuler/Remboursements? Cela doit être activé par PayPal Pro pour sur compte marchand sinon le remboursement ne sera pas autorisé.',
    'msg_approval_success' => '%s - Code d&rsquo;approbation: %s --> Résultats CVV2: %s',
    'msg_address_result' => 'Résultats de la vérification d&rsquo;adresse: %s',
    'msg_website' => 'Cela doit être fait manuellement sur le site PayPal.',
    'msg_capture_manual' => 'Le paiement n&rsquo;a pas été traitée par la passerelle PayPal.',
    'msg_delete_manual' =>'Le paiement n&rsquo;a pas été supprimé par la passerelle PayPal.',
    'msg_refund_manual' =>'Le paiement n&rsquo;a pas été remboursé par la passerelle PayPal.',
    'err_process_decline' => 'Message de refus: %s',
    'err_process_failed' => 'La carte de crédit n&rsquo;a pas été traitée, voici la réponse de PayPal Pro:'];

