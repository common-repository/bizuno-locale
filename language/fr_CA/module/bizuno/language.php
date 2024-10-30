<?php
/*
 * Langue de traduction pour le module Bizuno
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
 * @filesource /locale/fr_CA/module/bizuno/language.php
 */

$lang = [
    	'title' => 'ERP de Bizuno',
    	'description' => 'Application centrale d&rsquo;ERP de Bizuno. <b>NOTE: Ceci est un module de base et ne peut pas être retiré!</b>',
    // Installation
    	'email_new_user_subject' => 'Bienvenue à Bizuno',
	'email_new_portal_body' => 'Bienvenue à Bizuno,<br /><br />%s vous a ajouté à la liste des utilisateurs qui ont accès à leur entreprise, %s. Vous devez définir votre mot de passe avant de pouvoir vous connecter à Bizuno. Veuillez aller à <a href="%s">%s</a> pour initialiser votre compte.<br />vous devrez entrer votre code de confirmation et un nouveau mot de passe. Votre code de confirmation expirera dans 48 hours: <br /><b>%s</b>',
	'email_new_user_body' => 'Bienvenue à Bizuno,<br /><br />%svous a ajouté à la liste des utilisateurs qui ont accès à leur entreprise, %s. Puisque vous avez déjà un nom d&rsquo;utilisateur Bizuno, tout ce que vous avez à faire est d&rsquo;aller sur le portail <a href="%s">%s</a> et vous connecter en utilisant vos informations d&rsquo;identification actuelles.',
    	'note_inventory_install_1'  => 'PRIORITÉ MOYENNE: Définir par défaut des comptes du grand livre général pour les types d&rsquo;inventaire, après le chargement de comptes GL (Mon entreprise -> Paramètres -> Onglet Bizuno -> Inventaire (Paramètres)',
	'note_phreebooks_install_1' => 'PRIORITÉ ÉLEVÉE: Modifiez ou importez un plan comptable avec les paramètres par défaut (Mon entreprise -> Paramètres -> Onglet Bizuno -> PhreeBooks (Paramètres) -> onglet Plan comptable)',
	'note_phreebooks_install_2' => 'PRIORITÉ MOYENNE: Saisir les informations de l&rsquo;entreprise (Mon entreprise -> Settings -> Onglet Bizuno -> ERP Bizuno (Paramètres)',
	'note_phreebooks_install_3' => 'PRIORITÉ MOYENNE: Mise à jour des comptes du grand livre général par défaut pour les clients et les fournisseurs, après le chargement des comptes GL  (Mon entreprise -> Paramètres -> Onglet Bizuno -> PhreeBooks (Paramètres) -> Customers/Vendors Accordion',
    // Settings
        'set_password_min' => 'Définir la longueur minimale du mot de passe. Les mots de passe longs conduisent à un site web plus sécurisé. La valeur minimale est 8.',
	'set_max_rows' => 'Définir le nombre par défaut de lignes à afficher pour les listes de table. Valeur minimale 10, valeur maximale 100.',
	'set_session_max' => 'Définir la durée maximale d&rsquo;une session pour déconnecter automatiquement lorsque l&rsquo;utilisateur est inactif un certain temps. Une valeur de zéro maintient indéfiniment la session active automatiquement. La valeur minimale est de 5 minutes et la valeur maximale est de 300 minutes.',
	'set_number_precision' => 'Précision pour les valeurs décimales [Par défaut: 2]',
	'set_number_prefix' => 'Définir le préfixe pour les valeurs numériques positives',
	'set_number_suffix' => 'Définir le suffixe pour les valeurs numériques positives',
	'set_number_decimal' => 'Séparateur de décimal pour les valeurs numériques',
	'set_number_thousand' => 'Séparateur des milliers pour les valeurs numériques',
	'set_number_neg_pfx' => 'Définir le préfixe pour les valeurs numériques négatives',
	'set_number_neg_sfx' => 'Définir le suffixe pour les valeurs numériques négatives',
	'set_date_short' => 'Définir le format utilisé pour les dates du calendrier',
	'set_newLogo' => 'Choisissez une image à télécharger pour l&rsquo;utiliser comme nouveau logo',
	'set_gl_receivables' => 'Compte des recevables par défaut pour importer les commandes de l&rsquo;API. Généralement un compte de type débiteur. Si ce champ est laissé vide, le compte clients sera alors défini par défaut pour le compte des recevables dans le module PhreeBooks.',
	'set_gl_sales' => 'Compte par défaut à utiliser pour les transactions de ventes. Généralement un compte de type revenu. Si ce champ est laissé vide, le compte de vente pour les clients sera alors défini par défaut dans le module PhreeBook.',
    // Labels
    'edit_dashboard' => 'Ajouter/Enlever des éléments au tableau de bord du menu: %s',
    'next_cust_id_num' => 'Prochain numéro d&rsquo;ID de client',
    'next_shipment_num'=> 'Prochain numéro d&rsquo;expédition',
	'next_vend_id_num' => 'Prochain numéro d&rsquo;ID de fournisseur',
    'password_now' => 'Mot de passe actuel',
    'desc_security_fill' => 'Remplir tous les paramètres de sécurité pour:',
    // Messages
	'roles_restrict' => 'Ne pas autoriser l&rsquo;accès via le portail www.bizuno.com. C&rsquo;est-à-dire pour usage interne uniquement, les membres de ce rôle ne peuvent pas accéder à votre entreprise.',
	'msg_replace_existing' => 'Remplacer le dossier existant, si présent',
	'msg_module_delete_confirm' => 'Êtes-vous sûr de vouloir désinstaller ce module. Toutes les données de base de données et des fichiers associés à ce module seront perdus!',
	'msg_module_upgraded' => 'Mise à jour avec succès du module %s à la version %s',
	'msg_encryption_changed' => 'La clé de cryptage a été changée.',
	'msg_restore_confirm' => 'Attention! Cette opération va supprimer et réécrire la base de données. Êtes-vous sûr de vouloir continuer?',
	'msg_restore_success' => 'Restauration terminée! Appuyez sur l&rsquo;un ou l&rsquo;autre bouton pour quitter et retourner à l&rsquo;écran de connexion.',
	'msg_backup_success' => 'Votre sauvegarde est prête à télécharger dans la liste ci-dessous.',
	'msg_add_dashboards' => 'Ajouter des éléments au menu du tableau de bord..',
	'msg_no_shipments_found' => 'Aucune expédition n&rsquo;a été trouvées à cette date!',
    'msg_new_user' => 'Félicitations! Votre entreprise a été créé.<br /><br />
        Puisque vous avez déjà un compte, cliquer  <a href="%s">ICI</a> pour accéder au portail, connectez-vous et commencez. Votre nouvelle entreprise sera nommée «Mon entreprise» et doit être changée lors de l&rsquo;installation. Si vous avez des questions, veuillez remplir un billet d&rsquo;assistance (si connecté à Bizuno) ou envoyez-nous un courriel à biznerds@phreesoft.com.<br />
        Nous espérons que vous apprécierez l&rsquo;application.<br /><br />l&rsquo;équipe de développement PhreeSoft.',
    // Error Messages
    'err_install_module_exists' => 'Le module %s est déjà installé! L&rsquo;installation a été ignorée.',
	'err_role_undefined' => 'Le rôle est un champ obligatoire! Veuillez sélectionner un rôle pour cet utilisateur.',
	'err_delete_user' => 'Vous ne pouvez pas supprimer le compte utilisateur sur lequel vous êtes connecté actuellement!',
    // General
   	'table_stats' => 'Tableau statistique',
	'dashboard_columns' => 'Colonnes de tableau de bord',
    'icon_set' => 'Attribuer une icône',
    'default_gl_account' => 'Compte GL par défaut',
    // Buttons
	'btn_security_clean' => 'Nettoyer les valeurs de sécurité des données',
    // Portal
    	'intro'       => 'Nous avons juste besoin d&rsquo;un peu plus d&rsquo;informations pour vous aider à tout mettre en place. Veuillez sélectionner une option parmi les choix ci-dessous et appuyez sur l&rsquo;icône Suivant. Si vous n&rsquo;êtes pas sûr, ne vous inquiétez pas, la plupart d&rsquo;entre elles peuvent être modifiées par les paramètres de l&rsquo;administrateur. Il faut environ 10 secondes pour construire vos bases de données et vous serez prêt à commencer.',
    	'bizuno_install_title' => 'Bienvenue à Bizuno',
    	'biz_title'   => 'Entrez un nom abrégé pour votre entreprise: ',
    	'biz_lang'    => 'Configurez votre langue par défaut: ',
    	'biz_currency'=> 'Définissez votre devise par défaut: ',
    	'biz_chart'   => 'Choisissez un plan comptable par défaut à utiliser:',
    	'biz_fy'      => 'Choisissez un exercice financier pour débuter:',
    	'wrong_email' => 'Impossible de trouver l&rsquo;adresse courriel pour votre utilisateur.',
    	'request_pass'=> 'Votre demande de réinitialisation de mot a été envoyée à votre adresse courriel!',
    	'email_sub_request' => 'Réinitialisation du mot de passe perdu',
    	'email_request_pass' => 'Cher(e) %s,<br /> Nous avons reçu une demande de réinitialisation de votre mot de passe veuillez aller à <a href="%s">%s</a> et saisissez le code de réinitialisation.<br />Si vous n&rsquo;avez pas envoyé cette demande ignorer cet courriel.<br />Votre code de réinitialisation: %s',
    	'pass_does_not_match' => 'Les mots de passe ne correspondent pas.',
    	'plz_fill' => 'Veuillez remplir le formulaire en entier.',
    	'wrong_code_time' => "C'est un mauvais code ou le délai est expiré.",
    	'password_changed' => 'Votre mot de passe a été modifié avec succès.',
    // PhreeForm processing/separators
    	'pf_proc_neg' => 'Nier',
	'pf_proc_lc' => 'Minuscule',
	'pf_proc_uc' => 'Majuscule',
	'pf_proc_date' => 'Date formatée',
	'pf_proc_today' => "Date d'aujourd'hui",
	'pf_proc_rnd2d' => 'Arrondi (2 décimales)',
	'pf_proc_n2wrd' => 'Nombre de mots',
	'pf_proc_blank' => 'Vider les données',
	'pf_proc_yesbno' => 'Oui - Vide interdi',
	'pf_proc_printed' => 'Signaler imprimés',
	'pf_proc_precise' => 'Précis',
	'pf_proc_rep_id' => 'Vendeur',
    	'pf_cur_null_zero' => 'Devise (valeur null si zéro)',
	'pf_sep_comma'  => 'Virgule (,)',
	'pf_sep_commasp'=> 'Virgule espace',
	'pf_sep_newline'=> 'Saut de ligne',
	'pf_sep_semisp' => 'Point-virgule espace',
	'pf_sep_delnl'  => 'Ignorer Saut de ligne vide',
	'pf_sep_space1' => 'Simple interligne',
	'pf_sep_space2' => 'Double interligne',
    // Extra fields
	'custom_field_manager' => 'Gestionnaire de champs personnalisés',
	'xf_lbl_field' => 'Nom de champ',
	'xf_lbl_field_tip' => 'Les noms de champs doivent être conformes aux normes de base de données, ils ne peuvent pas contenir des espaces ou des caractères spéciaux et doivent être de 64 caractères ou moins.',
	'xf_lbl_label' => 'Libellé à afficher pour le champ',
    	'xf_lbl_tag' => 'Nom du fichier à utilisée pour importer/exporter',
	'xf_lbl_tab' => 'Onglet de membre (la sélection doit se faire à partir de la liste déroulante, ajouter de nouveaux onglets dans les paramètres Bizuno)',
	'xf_lbl_tab_tip' => 'Des onglets supplémentaires peuvent être créés dans Mon entreprise -> Paramètres -> Onglets supplémentaires',
	'xf_lbl_group' => 'Membre du groupe',
	'xf_lbl_order' => 'Ordre de tri (dans onglet/groupe)',
	'xf_lbl_text' => 'Champ format texte',
    	'xf_lbl_html' => 'Champ format HTML',
	'xf_lbl_text_length' => 'Nombre maximum de caractères',
	'xf_lbl_link_url' => 'Lien (URL)',
	'xf_lbl_link_image' => 'Lien (Image)',
	'xf_lbl_link_inventory' => 'Lien (Image d&rsquo;inventaire)',
	'xf_lbl_int' => 'Nombre entier',
	'xf_lbl_float' => 'Nombre à virgule flottante',
	'xf_lbl_db_float' => 'Précision simple',
	'xf_lbl_db_double' => 'Précision double',
	'xf_lbl_checkbox_multi' => 'Case à cocher (entrée multiple)',
	'xf_lbl_select' => 'Liste déroulante',
	'xf_lbl_data_list' => 'Liste de données (champ de texte avec des suggestions)',
	'xf_lbl_radio' => 'Bouton de radio',
	'xf_lbl_radio_default' => 'Entrez les choix formatés comme suit:<br />opt1:desc1;opt2:desc2;opt3:desc3<br />Clé:<br />optX = La valeur à placer dans la base de données<br />descX = Description textuelle du choix<br />Note: La première entrée sera la valeur par défaut.',
	'xf_lbl_checkbox' => 'Case à cocher (oui ou aucun choix)',
	'xf_lbl_datetime' => 'Date et heure',
	'xf_lbl_timestamp' => 'Horodatage de BD',
	'xf_err_field_exists' => 'Vous ne pouvez pas renommer ce champ puisque le nom existe déjà dans la table!',
	'xf_msg_edit_warn' => 'ATTENTION: Si le type de champ ou des propriétés du type de champ sont modifiés, la perte de données peut se produire! Plus précisément, le raccourcissement de la longueur de texte du champ (tronquera des données) ou en modifiant des types (ex.: en passant de texte à entier cela aura pour effet de supprimer tous les caractères non numériques) peut entraîner la perte de données.',
    // API Settings
    	'cart_sync' => '%s Produit',
    	'cart_cat' => '%s Chemin de catégorie',
    // API and Import/Export
    	'upload_all' => 'Plus lent - Toutes les données (y compris des images)',
    	'upload_images' => 'Plus rapide - Toutes les données (à l&rsquo;exception des images)',
    	'sync_title' => 'Synchroniser les produits',
    	'sync_delete' => 'Supprimez des articles du chariot',
    	'status_title' => 'Confirmer expéditions',
    	'upload_title' => 'Téléversement en masse de produit',
    	'upload_item' => 'Téléversement à %s',
    	'upload_info' => 'Téléversement en masse de tous les produits sélectionnés pour être affichés dans le %s site de commerce en ligne. Les images ne sont pas incluses, sauf si la case est cochée.',
    	'sync_info' => 'Synchroniser les produits actifs de la base de données Bizuno (configurés pour s&rsquo;afficher dans le catalogue et active)avec les enregistrements actuels de %s. Les SKU qui ne devraient pas être listés dans le panier sont affichés. Ils doivent être retirés du panier manuellement via l&rsquo;interface d&rsquo;administration.',
    	'status_info' => 'Confirme toutes les expéditions à la date choisie dans le Gestionnaire de livraison et définit l&rsquo;état dans %s. Les commandes terminées et expédiées partiellement sont mises à jour. Les notifications par courriel au client ne sont pas envoyées.',
    	'status_date' => 'Pour les commandes expédiées sur:',
    	'price_sheet_desc' => 'Feuille de prix à utiliser, le cas échéant, pour le téléversement du prix du produit.',
    	'test_cart' => 'Tester si Bizuno peut se connecter à votre panier.',
   	'default_mode' => 'Serveur par défaut à utiliser.',
    	'url_desc' => 'URL du panier Administrateur. Aucune barre oblique autorisée.',
    	'tax_id_desc' => 'Taux de la taxe de vente perçue à appliquer.',
	'api_desc' => 'Les modules suivants ont défini des scripts pour gérer l&rsquo;importation et l&rsquo;exportation de données dans Bizuno. Chaque module contient des informations plus détaillées sur les capacités informatiques.',
	'desc_encrypt_config' => 'Définissez la clé de cryptage à utiliser si \'Cryptage activé\' est activée. Si vous le définissez pour la première fois, l&rsquo;ancienne clé de cryptage sera vide.',
	'desc_security_clean' => 'Cet outil nettoie toutes les valeurs de sécurité des données avec une date d&rsquo;expiration antérieure à une date sélectionnée. AVERTISSEMENT: cette opération ne peut pas être annulée!',
	'desc_backup' => 'La sauvegarde crée un fichier de téléchargement compressé (zip) qui contient les informations de la base de données de votre entreprise. Si cette option est sélectionnée, les fichiers de données d&rsquo;entreprise peuvent également être inclus. Note: en incluant les fichiers de données de l&rsquo;entreprise augmentera la taille du fichier à télécharger et prendre plus de temps à traiter.',
	'desc_backup_all' => 'Inclure les fichiers de données d&rsquo;entreprise (un plus grand téléchargement, une plus longue attente)',
	'desc_audit_log_clean' => 'Nettoyage du journal d&rsquo;audit supprimera tous les enregistrements  jusqu&rsquo;à la date sélectionnée inclusivement. Il est recommandé que le journal d&rsquo;audit soit sauvegardé avant le nettoyage des données historiques.',
	'desc_status_seq_change' => 'Les modifications apportées à la séquence peuvent être faites ici.<br />NOTE 1: Bizuno ne permet pas de séquences en double, assurez-vous que la nouvelle séquence de démarrage ne sera pas en conflit avec les valeurs actuellement enregistrée.<br />Note 2: The next_deposit_num is generated by the system and uses the current date.<br />Note 3: The next_check_num can be set at the payment screen prior to posting a payment and will continue from the entered value.',
	'desc_security_clean_date' => 'Effacer toutes les valeurs avant la date d&rsquo;expiration du:',
    // Backup/Restore
    	'queries' => 'Requêtes',
    	'audit_log_backup' => 'Sauvegarde et nettoyage de l&rsquo;historique des transactions',
	'audit_log_backup_desc' => 'Cette opération crée un téléchargement de sauvegarde de l&rsquo;historique des transactions stockées dans votre fichier de base de données du journal d&rsquo;audit. Le téléchargement et le nettoyage de cette table de la base de données, permettra une réduction de la taille de la base de données et ainsi réduire la taille des fichiers de sauvegarde de l&rsquo;entreprise. La sauvegarde de ce journal est recommandée avant le nettoyage afin de préserver l&rsquo;historique de transaction PhreeBooks.',
    // Profile
    	'gmail_address' => 'Entrez votre adresse courriel Google si vous prévoyez d&rsquo;utiliser l&rsquo;intégration de Google (Calendrier, etc.)',
    	'gmail_zone' => 'Sélectionnez la zone géographique à utiliser par défaut dans le calendrier Google',
    // Reminder dashboard
    	'reminders' => 'Rappels',
    	'frequency' => 'Fréquence',
    	'start_date' => 'Date de création',
    	'next_date' => 'Prochain rappel',
    	'reminder_edit' => 'Éditeur de rappel',
    	'reminder_desc' => 'Saisissez les informations ci-dessous. (tous les champs sont obligatoires).',
    // Support Ticket
    	'ticket_desc' => 'Utilisez ce formulaire pour demander le soutien de l&rsquo;équipe d&rsquo;assistance PhreeSoft. Veuillez sélectionner une raison pour nous aider à acheminer correctement votre demande.',
	'ticket_attachment' => 'Un document ou une image peuvent être joints pour aider à clarifier votre demande.',
	'ticket_question' => 'Question',
	'ticket_bug' => 'Trouvé un bug',
	'ticket_suggestion' => 'Suggestion',
	'ticket_my_account' => 'Mon compte',
    // Tools
    	'admin_status_update' => 'Changer divers numéros de référence',
	'admin_encrypt_update' => 'Créer/Modifier la clé de cryptage',
	'admin_encrypt_old' => 'Clé de cryptage actuelle',
	'admin_encrypt_new' => 'Nouvelle clé de cryptage',
	'admin_encrypt_confirm' => 'Réintroduisez une nouvelle clé ',
	'db_engine' => 'Moteur de BD',
	'db_rows' => 'Nombre de lignes',
	'db_collation' => 'Collation',
	'db_next_id'   => 'Prochain n° de ligne ',
	'new_tab' => 'Nouvel onglet personnalisé',
	'new_tab_desc' => 'Sélectionnez le module/table pour créer un nouvel onglet et cliquez sur Suivant.',
];

