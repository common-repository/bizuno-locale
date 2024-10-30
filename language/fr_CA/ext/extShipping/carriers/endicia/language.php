<?php
/*
 * Langue de traduction pour l'extension expédition- transporteur Endicia
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
 * @version    4.x Last Update: 2020-05-26
 * @filesource /lib/locale/fr_CA/ext/extShipping/carriers/endicia/language.php
 */

    $lang = [
        'title'      => 'Service postal des USA (Endicia)',
        'acronym'    => 'USPS',
        'description'=> 'Service expédition postal E-U avec des taux tiré directement des servers d&rsquo;USPS en temps réel (Endicia). (Nécessite un compte/validation avec Endicia)',
        'instructions' => '<h3>Step 1. Register for an account</h3>
    <p>Open the Endicia registration application form and follow the instructions to create an account. Usually the basic service is all that is needed (about $15.95 per month). <a href="http://www.endicia.com/labelserver/login.cfm?partid=lpst" target="_blank"><b>Click HERE to Signup</b></a></p>
    <h3>Step 2. Wait for Confirmation</h3><p>Check you email for a confirmation from Endicia with your account number. Enter it in the field below, save the changes. Also enter your temporary Pass Phrase you used during registration.</p>
    <h3>Step 3. Change Pass Phrase to Activate Account</h3><p>Navigate to Tools -> Shipping Manager -> US Postal Service tab. Click the <b>Change Pass Phrase</b> button to change your temporary pass phrase used to sign up for the account to a new pass phrase. The new pass phrase will be automatically updated in the field below.</p>
    <h3>Step 4. Buy Postage</h3><p>Navigate to Tools -> Shipping Manager -> US Postal Service tab. Select an amount and click the <b>Buy Postage</b> button to add a balance to your postage account.</p>
    <h3>Step 5. Configure Options</h3><p>Make sure the mode is set to Production for rate estimation and label printing. Contact PhreeSoft for the Dial-A-Zip password as it is a shared account with PhreeSoft and we would like to know who is using this service. You should now be able to retrieve rates, and print labels using the service. NOTE: PhreeSoft has performed all label testing on a Zebra ZP 505 printer. Older Eltron/Zebra 2442 and 2844 printers don\'t support the bar code types necessary for USPS postage printing.</p>',
        // configuration
        'acct_number' => 'Enter the Endicia account number to use',
        'auth_pass' => 'Enter your Endicia account pass phrase',
        'test_mode' => 'Test/Production mode used for testing shipping labels',
        'printer_type' => 'Type of printer to use for printing labels. PDF for plain paper, Thermal for Eltron/Zebra Label Printer',
        'printer_name' => 'Sets then name of the printer to use for printing labels as defined in the printer preferences for the local workstation',
        // general
        'reference1' => 'Reference 1',
        'endicia_weight' => 'Total Weight',
        'endicia_value' => 'Total Value',
        'endicia_pkg' => 'Package Type',
        'endicia_pickup' => 'Pickup Method',
        'endicia_delivery_conf' => 'Delivery Confirmation',
        'endicia_ins_1' => 'Insured Mail',
        'endicia_cod' => 'COD',
        'label_thermal' => 'Label Material',
        'doc_tab' => '4x6 Thermal with DocTab',
        'weight_lbs' => 'lbs',
        'weight_kgs' => 'kgs',
        'dim_in' => 'in',
        'dim_cm' => 'cm',
        // General defines
        'ship_pkg_title' => 'Ship Package',
        'ship_pkg_desc' => 'To generate a label to ship a package via FedEx, Click GO and fill out the form.',
        'postage_buy_title' => 'Buy Postage',
        'postage_buy_desc' => 'To add more postage to your account with Endicia, select an amount to purchase and press Go.',
        'passphrase_change' => 'Change Pass Phrase',
        'passphrase_current' => 'Enter Current Passphrase',
        'passphrase_new' => 'Enter New Passphrase',
        'passphrase_validate' => 'Re-enter Passphrase',
        'partner_id' => 'Partner ID',
        'msg_label_retrieve' => 'Successfully retrieved the USPS label, tracking # %s. Your postage balance is: %s',
        'err_postal_weight_zero' => 'The package weight must be greater than zero!',
        'err_pkg_too_heavy' => 'The package weight exceeds the maximum supported by this carrier!',
        'msg_purchase_success' => 'Your purchase was successful, your balance is now %s (transaction reference %s)',
        'msg_passphrase_desc' => 'Pass Phrase must be at least 5 characters long with a maximum of 64 characters. For added security, the Pass Phrase should be at least 10 characters long and include more than one word, use at least one uppercase and lowercase letter, one number and one non-text character (for example, punctuation). A Pass Phrase which has been used previously will be rejected.',
        'err_passphrase_wrong' => 'Your current Pass Phrase does not match what is stored in the system!',
        'err_passphrase_not_match' => 'Your new Pass Phrase does not match the confirmed Pass Phrase or is too short!',
        'msg_passphrase_change' => 'Your passphrase was successfully changed!',
        'msg_refund_approved' => 'Endicia tracking # %s refund approved: %s - %s',
        'err_postal_code_blank' => 'Postal Code is required to use the Endicia module!',
        'msg_tracking_results' => 'Tracking results from USPS for shipment id %s, tracking # %s is: %s',
        'msg_signup_confirm' => 'Signup confirmation from Endicia servers: %s. You will receive an email shortly to complete your activation.',
        'err_zip_not_match' => 'Address Validation (%s) %s. The address must be corrected before a label can be generated.',
        '1DM' => 'Priority',
        '1DA' => 'Express',
        '1DP' => 'First Class',
        '2DA' => 'Critical Mail',
        '2DP' => 'Library Mail',
        '3DA' => 'Sender Paid Economy',
        '3DP' => 'Sender Paid Economy',
        'GND' => 'Standard Mail',
        'GDR' => 'Media Mail',
        'MPS_01' => 'Card',
        'MPS_02' => 'Letter',
        'MPS_03' => 'Flat',
        'MPS_04' => 'Parcel',
        'MPS_05' => 'Large Parcel',
        'MPS_06' => 'Irregular Parcel',
        'MPS_07' => 'Oversized Parcel',
        'MPS_08' => 'Flat Rate Envelope',
        'MPS_09' => 'Flat Rate Legal Envelope',
        'MPS_10' => 'Flat Rate Padded Envelope',
        'MPS_11' => 'Flat Rate Gift Card Envelope',
        'MPS_12' => 'Flat Rate Window Envelope',
        'MPS_13' => 'Flat Rate Cardboard Envelope',
        'MPS_14' => 'Small Flat Rate Envelope',
        'MPS_15' => 'Small Flat Rate Box',
        'MPS_16' => 'Medium Flat Rate Box',
        'MPS_17' => 'Large Flat Rate Box',
        'MPS_18' => 'DVD Flat Rate Box',
        'MPS_19' => 'Large Video Flat Rate Box',
        'MPS_20' => 'Regional Rate Box A',
        'MPS_21' => 'Regional Rate Box B',// Buy Postage Amounts
        '0010_dollars' => '$10.00',
        '0025_dollars' => '$25.00',
        '0100_dollars' => '$100.00',
        '0250_dollars' => '$250.00',
        '0500_dollars' => '$500.00',
        '1000_dollars' => '$1000.00',
        ];
