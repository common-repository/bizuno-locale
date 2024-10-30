<?php
/*
 * Language translation for Walmart Interface extension
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
 * @version    4.x Last Update: 2020-12-21
 * @filesource /lib/locale/en_US/ext/ifWalmart/language.php
 */

$lang = [
    'title' => 'Walmart Interface',
    'description' => 'The Walmart interface provides capability to download orders, upload product feeds and help reconcile payments.',
    'walmart_maps' => 'Walmart Templates',
    'walmart_template_desc' => 'Walmart templates are how your Bizuno inventory database fields map to Walmart fields.
        Creating these templates is required for a successful feed to Walmart. To create a template, select the category
        from the pull down and press the `Create Template` button. This will load the fields available to send to Walmart and create a list below.
        You will need to assign a Bizuno field to all the required Walmart fields. The preferred and optional enhance your product descriptions.
        Once your fields have been assigend, press the Save icon to save you changes.
        You should now be able to create upload feeds to Walmart through the Customer -> Walmart Interface menu.',
    'auto_detect' => 'Auto Detect',
    'walmart_field' => 'Walmart Feed Index',
    'bizuno_field' => 'Bizuno Inventory Field',
    'walmart_post_success' => 'Successfully posted %3 Walmart orders!',
    'build_inventory' => 'Generate Inventory Feed',
    'import_orders' => 'Import Orders',
    'confirm_shipments' => 'Confirm Shipments',
    'import_payment' => 'Process Payment File',
    'walmart_sales_orders' => 'Open Walmart Sales Orders',
    'build_inventory_desc' => 'Select a Map file and press Go to to build your Walmart product upload feed file and download it to your computer. From there it can be uploaded to Walmart through Seller Central. If no feed files are listed, you need to build one through Module Administration -> Walmart Interface (Settings) -> Walmart Templates.',
    'import_orders_desc' => 'Select order file to import from Walmart and press Go:',
    'confirm_shipments_desc' => 'Select the date to build the Walmart ship confirmation on and press Go:',
    'import_payment_desc' => 'Please select the Walmart payment file to process:',
    'msg_confirm_success' => 'Walmart order confirmation generated.',
    'msg_template_created' => 'Your template file has been written, you may now assign Bizuno fields to the Walmart fields.',
    'msg_order_long_data' => 'Either the primary name or an address has been truncated to fit the journal database field size. Check the ship to information for order # %s and Customer: %s to make sure the lost information is not critical. You will have to reformat the address manually.',
    'err_no_inv_map' => 'Cannot find the Walmart map file for template: %s',
    'err_no_inv_sku' => 'Missing UPC code and Walmart ASIN ID for SKU: %s',
    'err_no_inv_tpl' => 'Cannot find Walmart template file for template: %s',
    'err_no_contact' => "Could not find Walmart contact ID, please make sure you have selected a customer contact in Module Administration -> Walmart Module settings.",
    'err_dup_order' => 'Walmart order # %s is already posted to Bizuno, it will be skipped!',
    'err_confirm_no_contact' => 'Contact ID/Ship date could not be found, no file was generated!',
    'err_no_confirm_found' => 'No valid Walmart orders have been shipped on the date selected!',
    'err_sku_no_weight' => 'SKU %s has no weight. Please edit the inventory record and add a non-zero weight!',
    'err_missing_image' => 'Image at path: %s for sku: %s must be of type jpg or gif for Walmart!',
    'err_no_inv_rows' => 'No inventory items found to be uploaded!',
    'err_inv_no_price' => 'No price was determined for SKU: %s',
    'err_feed_needs_fix' => 'There are errors in your feed file, please fix them before submitting your feed to Walmart.',
    // settings
    'consumer_id_lbl' => 'Consumer ID',
    'private_key_lbl' => 'Private Key',
    'channel_type_lbl' => 'Channel Type',
    'ship_calc_lbl'    => 'Shipping Method',
    'contact_id_lbl'   => 'Contact ID',
    'catalog_field_lbl'=> 'Inv Link Field',
    'gl_acct_sales_lbl'=> 'Sales GL Account',
    'gl_acct_disc_lbl' => 'Discount GL Account',
    'gl_acct_ship_lbl' => 'Freight GL Account',
    'auto_journal_lbl' => 'Post Type',
    'consumer_id_tip' => 'Enter the Consumer ID as supplied by Walmart in response to generating your API access credentials',
    'private_key_tip' => 'Enter the Private Key as supplied by Walmart in response to generating your API access credentials',
    'channel_type_tip' => 'Hidden field, this should be static for Bizuno, if not change type to text and update this description',
    'ship_calc_tip'    => 'Set the shipping method to use to calculate the freight charge and add to product price to generate the Free Freight selling price.',
    'contact_id_tip'   => 'Determines the Customer contact ID to assign all Walmart sales.',
    'catalog_field_tip'=> 'Determines which database field name to use to select items to be uploaded to Walmart, typically a checkbox type',
    'gl_acct_sales_tip'=> 'GL Account to use for recording sales',
    'gl_acct_disc_tip' => 'GL Account to use for recording sales discounts',
    'gl_acct_ship_tip' => 'GL Account to use for recording freight charges',
    'auto_journal_tip' => 'Determines how to post each sale, choices are Sales Orders, Sales, or Auto (Sales if in stock, Sales Order if not)'];
