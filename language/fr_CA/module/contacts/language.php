<?php
/*
 * Langue de traduction pour le module contacts
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
 * @filesource /locale/fr_CA/module/contacts/language.php
 */

$lang = [
    'title' => 'Contacts',
    'description' => 'Le module gère tous les contacts clients, les fournisseurs, les employés, les branches et les projets utilisés dans le Bizuno Business Toolkit. <b>NOTE: ceci est un module de base et ne doit pas être retiré!</b>',
    // Settings
    'set_auto_add' => 'Ajoute automatiquement le contact quand une entrée de journal est reporté si le contact ne se trouve pas dans la base de données. Si non activé, le contact doit exister dans la base de données ou le report va échouer.',
	'set_book_primary_name' => 'Le Nom primaire est requis lors de la création d&rsquo;une nouvelle adresse',
	'set_address1' => 'Exiger nom primaire lors de la création d&rsquo;une nouvelle adresse',
	'set_city' => 'Exiger Ville/village lors de la création d&rsquo;une nouvelle adresse',
	'set_book_state' => 'Exiger État/Province lors de la création d&rsquo;une nouvelle adresse',
	'set_book_postal_code' => 'Exiger le Code postal lors de la création d&rsquo;une nouvelle adresse',
	'set_telephone1' => 'Exiger Téléphone lors de la création d&rsquo;une nouvelle adresse',
	'set_email' => 'Exiger Adresse courriel lors de la création d&rsquo;une nouvelle adresse',
    // Titles
    'contacts_merge' => 'Fusionner les contacts',
    'sales_by_month' => 'Ventes par mois',
    'purchases_by_month' => 'Achats par mois',
    // Messages
	'msg_contacts_merge_src' => '<h4>Fusionner les contacts</h4>Sélectionner un contact comme source de contact. Ce contact sera supprimée après la fusion:',
	'msg_contacts_merge_dest' => 'Sélectionner un contact comme destination contact. Ce contact restera après la fusion:',
    // Error Messages
	'err_contacts_delete' => 'Cet enregistrement ne peut pas être supprimé parce qu&rsquo;il existe des entrées de journal impliquant ce contact. Essayez de définir à INACTIF.',
	'err_contacts_delete_address' => 'L&rsquo;adresse ne peut pas être supprimé car il s&rsquo;agit d&rsquo;une adresse principale, supprimer le contact à la place!',
	// CRM Defines
    'crm_dg_notes' => 'Pour saisir une entrée de contact valide, le N° de contact et le Nom/Entreprise doivent être présents. Si l&rsquo;un ou l&rsquo;autre est laissé vide, l&rsquo;enregistrement ne sera pas sauvegardé.',
	'contacts_crm_new_call' =>'Nouvel appel',
	'contacts_crm_call_back' =>'Retour d&rsquo;appel',
	'contacts_crm_follow_up' =>'Suivi',
	'contacts_crm_new_lead' =>'Nouveau prospect',
    // API
    'conapi_desc' => 'L&rsquo;API de Contacts prend actuellement en charge la table des contacts de base, une adresse principale et une adresse d&rsquo;expédition pour les insertions et les mises à jour. Les champs personnalisés supplémentaires sont pris en charge. Pour importer un fichier de contacts:<br>1. Télécharger le modèle de contacts qui répertorie les en-têtes de champs et descriptions.<br>2. Ajouter vos données à votre fichier .csv.<br>3. Sélectionnez le fichier et appuyez sur l&rsquo;icône importer.<br>Les résultats sera affiché après l&rsquo;exécution du script terminée. Toutes les erreurs seront également affichés.',
	'conapi_template' => 'Étape 1 : Télécharger le modèle de contacts => ',
	'conapi_import' => 'Étape 3 : Ajoutez vos contacts au modèle, parcourez l&rsquo;arborescence pour sélectionner le fichier et appuyer sur Importer. ',
	'conapi_export' => 'Facultatif : Exporter votre table de base de données de contacts au format .csv pour la sauvegarde => ',
    // Tools
    'close_j9_title' => 'Fermer les devis du client en lot',
    'close_j9_desc' => 'Cet outil ferme tous les devis des clients avant la date spécifiée. ',
    'close_j9_label' => 'Fermez tous les devis des clients Avant: ',
    'close_j9_success' => 'Le nombre d&rsquo;écritures fermées était: %s',
];
