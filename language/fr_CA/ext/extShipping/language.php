<?php
/*
 * Langue de traduction pour l'extension expédition
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
 * @filesource /lib/locale/fr_CA/ext/extShipping/language.php
 */

$lang = [
    'title' => 'Expédition',
    'description' => 'Le module d&rsquo;expédition est un ensemble de méthode de transport configurable par l&rsquo;utilisateur. Certaines méthodes sont incluses dans le forfait de base et d&rsquo;autres sont disponibles en téléchargement à partir du site Web de PhreeSoft.',
    //
    'shipping_title_methods' => 'Méthodes d&rsquo;expédition',
    'shipping_title_methods_all' => 'Transporteurs disponibles pour la livraison',
    'shipping_entry' => 'Entrée d&rsquo;expédition',
    'label_generator' => 'Générateur d&rsquo;étiquettes',
    'ship_invoice' => 'Expédier par facture',
    'ship_invoice_desc' => 'Rechercher et sélectionner une facture dans le menu déroulant pour générer une étiquette d&rsquo;expédition. Note: La longueur de la liste est limitée au nombre de résultats configurer pour l&rsquo;affichage.',
    'carriers' => 'Transporteurs',
    'new_entry_desc' => 'Pour créer une écriture de journal d&rsquo;expédition manuellement, appuyez sur l&rsquo;icône Nouveau dans la grille des données du journal d&rsquo;expédition.',
    'sync_shipments_title' => 'Synchroniser les expéditions avec journal',
    'sync_shipments_desc' => 'Le temps d&rsquo;attente pour les alertes d&rsquo;expédition sera défini pour les entrées, et non pas dans le journal d&rsquo;expédition et sera effacé si le journal indique une expédition et que l&rsquo;alerte est toujours définie. NOTE: Cette action passera en revue seulement les 3 derniers mois!',
    'error_cannot_delete' => 'Cette expédition ne peut pas être supprimée avec le transporteur, car la date d&rsquo;expédition a eu lieu antérieurement! La date d&rsquo;expédition pour ce colis est: %s',
    'reconcile_bill_title' => 'Concilier la facture Fedex',
    'reconcile_bill_desc' => 'Pour concilier votre facture Fedex avec le journal d&rsquo;expédition, connectez-vous à votre compte Fedex.com et télécharger la facture sous Gérer -> Affichage/Payer des factures -> Liste des factures -> Facture n° -> Télécharger la facture -> Modèle de rapport détaillé (Express & Ground - Outil de fichier ) SUR votre bureau. Sélectionnez le fichier à l&rsquo;aide du bouton Parcourir ci-dessous et cliquez sur Aller. Un rapport sera généré Et téléchargé sur votre ordinateur.',
    'track_shipments_title' => 'Suivre les expéditions quotidiennes',
    'track_shipments_desc' => 'Cette option suit l&rsquo;état de l&rsquo;envoi de toutes les expéditions pour une journée particulière. Sélectionnez une date pour suivre tous vos envois de Fedex et cliquez sur Aller. La table du journal d&rsquo;expédition sera mise à jour avec les résultats.',
    'ship_pkg_title' => 'Colis d&rsquo;expédition',
    'reference1' => 'Référence 1',
    'reference2' => 'Référence 2',
    'regular_pickup' => 'Ramassage quotidien',
    'request_courier' => 'Comptoir client du transporteur',
    'drop_box' => 'Demande/One Time Pickup',
    'print_return_label' => 'Imprimer l&rsquo;étiquette de retour ici',
    'carrier_print_return' => 'Le transporteur imprimer de l&rsquo;étiquette de retour',
    'guaranteed_funds' => 'Chèque de banque',
    'sender' => 'Expéditeur',
    'recipient' => 'Destinataire',
    'third_party' => 'Tiers',
    'collect' => 'Collecter',
    'no_sig_rqd' => 'Aucune signature requise',
    'sig_rqd' => 'Signature requise',
    'adult_sig' => 'Signature d&rsquo;un adulte requise',
    'ltl_details' => 'Chargements incomplets (LTL >150 lbs)',
    'ltl_desc' => 'Description du produit',
    'ltl_cnt' => 'Nbre de pièces',
    'ltl_class' => 'Classe',
    'weight_each' => 'Poids (chaque)',
    'weight_uom' => 'UDM Poids',
    'weight_lbs' => 'lbs',
    'weight_kgs' => 'kgs',
    'dim_uom' => 'Dim UDM',
    'dim_in' => 'po',
    'dim_cm' => 'cm',
    'label_01' => 'Papier 4x6', // label paper types
    'label_02' => 'Papier 4x8',
    'label_03' => 'Papier 4x9',
    'label_04' => 'Papier 7x4.75',
    'label_05' => 'Papier 8.5x11 Étiquette en bas',
    'label_06' => 'Papier 8.5x11 Étiquette supérieure',
    'label_07' => 'Étiquette  4x6',
    'label_08' => 'Étiquette 4x6.75 Onglet doc. principal',
    'label_09' => 'Étiquette  4x6.75 Trailing Doc Tab',
    'label_10' => 'Étiquette  4x8',
    'label_11' => 'Étiquette  4x9 Onglet doc. principal',
    'label_12' => 'Étiquette  4x9 Onglet doc. secondaire',
    'transit_01' => 'Transit un jour', // transit delivery days
    'transit_02' => 'Transit deux jours',
    'transit_03' => 'Transit trois jours',
    'transit_04' => 'Transit quatre jours',
    'transit_05' => 'Transit cinq jours',
    'transit_06' => 'Transit six jours',
    'transit_07' => 'Transit sept jours',
    'transit_08' => 'Transit huit jours',
    'transit_09' => 'Transit neuf jours',
    'transit_10' => 'Transit dix jours',
    'transit_11' => 'Transit onze jours',
    'transit_12' => 'Transit douze jours',
    'transit_13' => 'Transit treize jours',
    'transit_14' => 'Transit quatorze jours',
    'transit_15' => 'Transit quinze jours',
    'transit_16' => 'Transit seize jours',
    'transit_17' => 'Transit dix-sept jours',
    'transit_18' => 'Transit dix-huit jours',
    'transit_19' => 'Transit dix-neuf jours',
    'transit_20' => 'Transit vingt jours',
    'transit_un' => 'Temps de transit inconnu',
    'del_time_A1' => '08:00:00', // Delivery time of day
    'del_time_A2' => '08:30:00',
    'del_time_A4' => '09:00:00',
    'del_time_A5' => '10:00:00',
    'del_time_P1' => '10:30:00',
    'del_time_PR' => '12:00:00',
    'del_time_CM' => '15:00:00',
    'del_time_2D' => '16:30:00',
    'del_time_GD' => '17:00:00',
    'del_time_RE' => '19:00:00',
    // settings
    'shipping_settings_default_rate' => 'L&rsquo;opportunité d&rsquo;inclure ceci par défaut dans les estimations de taux.',
    'shipping_settings_default_service' => 'Sélectionnez les services devant être offerts par défaut.',
    'weight_uom_desc' => 'Unité de mesure du poids par défaut.',
    'dim_uom_desc' => 'Unité de mesure de dimension par défaut.',
    'max_pkg_weight_desc' => 'Poids maximal pour une seule boîte',
    'pallet_weight_desc' => 'Poids de la palette. Pour les expéditions LTL et camions à chargement complet.',
    'contact_req_desc' => 'Champ est exigé ou non: À l&rsquo;Attention, pour une nouvelle adresse de livraison',
    'address1_req_desc' => 'Champ est exigé ou non: Adresse 1, pour une nouvelle adresse de livraison',
    'address2_req_desc' => 'Champ est exigé ou non: Adresse 2, pour une nouvelle adresse de livraison',
    'city_req_desc' => 'Champ est exigé ou non: Ville, pour une nouvelle adresse de livraison',
    'state_req_desc' => 'Champ est exigé ou non: Province, pour une nouvelle adresse de livraison',
    'postal_code_req_desc' => 'Champ est exigé ou non: Code postal, pour une nouvelle adresse de livraison',
    // Table shipping_log
    'extShipping' => 'Journal d&rsquo;expédition',
    'extShipping_shipment_id' => 'ID d&rsquo;expédition',
    'extShipping_deliver_date' => 'Date de livraison Est.',
    'extShipping_actual_date' => 'Date réelle',
    'extShipping_deliver_late' => 'En retard?',
    'extShipping_tracking_id' => 'Suivi N°',
    'extShipping_cost' => 'Coût &rsquo;expédition',
    // tools
    'log_backup' => 'Sauvegarde/Supprimer le fichier de l&rsquo;historique d&rsquo;étiquette d&rsquo;expédition',
    'log_backup_desc' => 'Cet outil sauvegarde votre table de base de données de journal d&rsquo;expédition Pour que vous puissiez le télécharger et le sauvegarder sur votre ordinateur. En général, ce n&rsquo;est pas nécessaire que la table de base de données, car elle est incluse dans la sauvegarde de l&rsquo;entreprise.',
    'log_clean_desc' => 'Cet outil supprime les données d&rsquo;étiquette d&rsquo;expédition avant la date sélectionnée. En pratique, cet outil devrait être exécuté mensuellement. Si vous souhaitez enregistrer une copie archivée des données d&rsquo;étiquette d&rsquo;expédition, Exécutez l&rsquo;outil de sauvegarde au-dessus et téléchargez le fichier sur votre ordinateur.',
    'log_clean_success' => 'Supprimé toutes les étiquettes d&rsquo;expédition par %s',
    'log_clean_status' => 'Suppression du dossier: %s',
    // reconciliation
    'recon_title' => 'Rapport de rapprochement généré: ',
    'recon_intro' => 'Numéro de facture: %s daté %s',
    'recon_no_records' => 'Date d&rsquo;expédition: %s Référence %s, suivi N° %s - Aucun enregistrement n&rsquo;a été trouvé, expédition à partir de %s à %s coûtant %s',
    'recon_too_many' => 'Date d&rsquo;expédition: %s Référence %s, suivi N° %s - Trop de références ont été trouvées, expédition à partir de %s à %s coûtant %s',
    'recon_cost_over' => 'Date d&rsquo;expédition: %s Référence %s, suivi N° %s - Le coût facturé: (%s) coût du devis: (%s)',
    'recon_cost_over_inv' => 'Date d&rsquo;expédition: %s Référence %s, suivi N° %s - Le coût facturé: (%s) est plus grand que le coût de la facture: (%s)',
    'recon_summary' => 'Nombre total d&rsquo;enregistrements conciliés: %s',
    ];
