<?php
/*
 * Langue de traduction pour le module PhreeForm
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
 * @filesource /locale/fr_CA/module/phreeform/language.php
 */

$lang = [
    	'title' => 'PhreeForm',
    	'description' => 'Le module phreeform contient tous les outils nécessaires pour créer et générer des rapports et formulaires. <b>NOTE: Ceci est un module de base et ne peut pas être retiré!</b>',
    // Settings
    	'set_default_font' => '[Défaut: Helvetica] Définit la police par défaut à utiliser pour les rapports standard. Ce paramètre devra être modifié pour utiliser des jeux de caractères UTF-8 et autres polices utilisant des caractères spéciaux.',
	'set_column_width' => 'Définit la largeur d&rsquo;une colonne par défaut sur les rapports. Ce paramètre tronquera les données trop longues pour un meilleur aspect visuel des rapports.',
	'set_margin' => 'Définit la marge par défaut lors de la création de nouveaux rapports. ',
	'set_title1' => 'Définit la première ligne d&rsquo;en-tête de rapport. Voir la table de substitution pour les champs dynamiquement remplaçables. Par défaut: %reportname%',
	'set_title2' => 'Définit la seconde ligne d&rsquo;en-tête de rapport. Voir la table de substitution pour les champs dynamiquement remplaçables. Par défaut: Rapport généré %date%',
	'set_paper_size' => 'Définit le format de papier par défaut à utiliser lors de la création de rapports et formulaires.',
	'set_orientation' => 'Définit l&rsquo;orientation du papier par défaut lors de la création de nouveaux rapports et formulaires.',
	'set_truncate_len' => 'Définit le nombre maximal de caractères à afficher dans une colonne de rapport. Ce paramètre tronquera les données trop longues pour un meilleur aspect visuel des rapports.',
    // Labels
    	'lbl_serial_form' => 'Vérifiez si ceci est un formulaire en série (c.-à-d reçu)',
	'lbl_set_printed_flag' => 'Définir un marqueur',
	'lbl_phreeform_contact' => 'Journaliser sur courriel',
    	'lbl_phreeform_email' => 'Adresse courriel par défaut',
	'lbl_skip_null' => 'Ignorer si aucun champ de donné',
    	'date_default_selected' => 'Date par défaut sélectionnée',
    	'group_total' => 'Total du groupe:',
	'report_total' => 'Total du rapport:',
    	'new_form' => 'Nouveau formulaire',
	'new_report' => 'Nouveau rapport',
    // Messages
	'msg_printed_set' => 'Définit le champ sélectionné à 1 après chaque formulaire généré. Le champ doit être dans la même table que le champ de saut de page du formulaire .',
	'msg_recently_added_docs' => 'Documents ajoutés récemment',
	'msg_download_filename' => 'Télécharger le nom de fichier source:',
    // Error Messages
    	'err_phreeform_title_dup' => 'Rapport (%s) existe déjà dans PhreeForm. Veuillez entrer un nouveau titre, cochez la case Remplacer ou retirer le rapport d&rsquo;origine avant d&rsquo;importer celui-ci.',
    	'err_pf_field_empty' => 'Le champ n&rsquo;a aucune information, ceci est un problème de composition du rapport! Veuillez modifier le rapport et vérifiez que tous les champs sont valides. Le champ qui a échoué est : ',
    // Buttons
    	'btn_import_all' => 'Importez tous de cette liste',
	'btn_import_selected' => 'Importer le rapport sélectionné',
    // General
    	'name_business' => 'Nom de l&rsquo;entreprise',
    	'filter_list' => 'Liste de filtres',
	'use_periods' => 'Utiliser les périodes comptables',
	'align' => 'Aligner',
    	'mail_out' => 'Courriel envoyé',
	'show_total_only' => 'Afficher uniquement les totaux de groupe',
	'sort_list' => 'Liste de tri',
	'encoded_table_title' => 'Pour les tables de données encodées dans un seul champ de BD, le champ ci-dessous est requis',
    // Form element types
    	'fld_type_barcode' => 'Image de code barres',
	'fld_type_data_block' => 'Bloc de données',
	'fld_type_data_line' => 'Ligne de données',
	'fld_type_data_table' => 'Table de données',
	'fld_type_data_table_dup' => 'Copie de table de données',
	'fld_type_data_total' => 'Total des données',
	'fld_type_letter_tpl' => 'Modèle de lettre',
	'fld_type_letter_data' => 'Lettre de données',
	'fld_type_fixed_txt' => 'Champ de texte fixe',
	'fld_type_image' => 'Image - JPG ou PNG',
	'fld_type_image_link' => 'Lien image',
	'fld_type_line' => 'Ligne',
	'fld_type_page_num' => 'Numéro de page',
	'fld_type_rectangle' => 'Rectangle',
	'fld_type_biz_data' => 'Données d&rsquo;entreprise',
	'fld_type_biz_block' => 'Bloc d&rsquo;entreprise',
    'color' => 'Couleur',
	'color_red' => 'Rouge',
	'color_green' => 'Vert',
	'color_blue' => 'Bleu',
	'color_black' => 'Noir',
	'color_orange' => 'Orange',
	'color_yellow' => 'Jaune',
	'color_white' => 'Blanc',
	'abscissa' => 'Abscisse',
	'ordinate' => 'Axe vertical',
	'border' => 'Bordure',
	'column_break' => 'Saut de colonne',
	'display_on' => 'Afficher sur',
	'end_position' => 'Position de fin personnalisée',
	'fill_area' => 'Remplir l&rsquo;espace',
    	'formatting' => 'Formatage',
	'horizontal' => 'Horizontal',
	'join_type' => 'Type de jointure',
	'table_name' => 'Nom de table',
    	'page_break' => 'Saut de page',
	'page_break_field' => 'Champ de formulaire de saut de page',
    	'page_all' => 'Toutes les pages',
    	'page_first' => 'Première page',
    	'page_last' => 'Dernière page',
	'points' => 'Points',
	'processing' => 'Traitement',
    	'total_width' => 'Largeur totale',
    	'truncate_fit' => 'Tronquer pour s&rsquo;adapter',
	'vertical' => 'Vertical',
    // Report General
	'phreeform_import' => 'Outil d&rsquo;importation de rapport/formulaire',
	'phreeform_title_edit' => 'Éditeur Phreeform',
	'phreeform_title_db' => 'Base de données',
	'phreeform_title_field' => 'Champs',
	'phreeform_title_page' => 'Page',
	'phreeform_paper_size' => 'Taille du papier',
	'phreeform_orientation' => 'Orientation',
	'orient_portrait' => 'Portrait',
	'orient_landscape' => 'Paysage',
	'paper_legal' => 'Légal',
	'paper_letter' => 'Lettre',
	'paper_tabloid' => 'Tabloïd',
    // PhreeForm Page setup
	'phreeform_barcode_type' => 'Sélectionnez le type de code barres',
	'phreeform_heading_2' => 'Rapport généré %date%',
	'phreeform_groups' => 'Regroupés par',
	'phreeform_sorts' => 'Trié par',
	'phreeform_filter' => 'Filtres',
	'phreeform_criteria_type' => 'Type de critères',
    	'phreeform_current_user' => 'L&rsquo;utilisateur actuel',
	'phreeform_date_field' => 'Nom du champ Date',
	'phreeform_date_info' => 'Information de rapport par date',
	'phreeform_field_break' => 'Formulaire de champs de saut de page',
	'phreeform_date_list' => 'Liste de champs dates (cocher tout ce qui s&rsquo;applique). Pour des rapports par date indépendante, parcourez la liste déroulante et sélectionnez seulement l’option TOUTES périodes..',
	'phreeform_line_end' => 'Ou sélectionnez la position de fin de ligne (mm)',
	'phreeform_line_type' => 'Sélectionnez la ligne mise en page',
	'phreeform_filter_desc' => 'Description de filtre de rapport',
	'phreeform_header_info' => 'Informations d&rsquo;en-tête / Mise en forme',
	'phreeform_page_layout' => 'Mise en page',
	'phreeform_margin_top' => 'Marge du haut',
	'phreeform_margin_bottom' => 'Marge inférieure',
	'phreeform_margin_left' => 'Marge de gauche',
	'phreeform_margin_right' => 'Marge de droite',
	'phreeform_margin_page' => 'Marges de page',
	'phreeform_page_title1' => 'Titre du rapport 1',
	'phreeform_page_title2' => 'Titre du rapport 2',
	'phreeform_heading' => 'En-tête des données du rapport',
	'phreeform_text_disp' => 'Texte à afficher',
	'phreeform_reports_available' => 'Rapports/Formulaires disponibles à l&rsquo;importation',
	'phreeform_special_class' => 'Rapport spécial (programmeurs seulement)',
	'phreeform_page_break' => 'Insérer un saut de page après chaque groupe',
	'phreeform_form_select' => 'Sélectionnez le formulaire à produire:',
	'phreeform_email_subject'=> "%s de %s",
	'in_list' => 'Dans la liste (Délimitées par des virgules)',
];
