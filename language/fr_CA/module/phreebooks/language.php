<?php
/*
 * Langue de traduction pour le module PhreeBooks
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
 * @filesource /locale/fr_CA/module/phreebooks/language.php
 */

$lang = [
    'title' => 'Comptabilité PhreeBooks',
    'description' => 'Le module de phreebooks fournit la comptabilité à doubles écritures. Les fonctions incluent les commandes d’achat, Bulletins de ventes, Facturation, écritures comptable et plus. <b>NOTE: Ceci est un module de base et ne peut pas être retiré!</b>',
    // Settings
    'set_round_tax_auth' => '[Non par défaut] Arrondir les taxes calculées par autorité avant d’additionner toutes les autorités pertinentes. Pour les taux de taxe avec une autorité unique, cela permettera seulement des erreurs de précision d’être enregistré au journal.Pour les taux de taxe multi-autorité, cela pourrait recueillir trop ou pas assez de taxe. Si vous n’êtes pas sûr, laissez réglé sur Non.',
	'set_isolate_stores' => '[Non par défaut] Si vous utilisez plus d&rsquo;une boutique, cette option va calculer le coût des marchandises vendues indépendamment par boutique. Si elle est définie sur Oui, l&rsquo;inventaire doit être présent dans la boutique et l&rsquo;achat/vente est comptabilisé. Si le stock n&rsquo;est pas présent dans la boutique, La transaction du coût des marchandises vendues sera mise en file d&rsquo;attente dans la table due pour le reporter lorsque l&rsquo;inventaire devient de nouveau disponible. En cas de doute, laissez ce paramètre réglé sur Non.',
    'set_auto_currency' => 'Détermine si les taux de change devraient être automatiquement mis à jour lors de la connexion sur Bizuno.',
	'set_gl_payables' => 'Compte par défaut pour les articles reçus. Peut être modifié individuellement dans la fiche de l’article. Généralement un type de compte inventaire ou dépense.',
	'set_gl_receivables' => 'Compte recevable par défaut. Généralement, un compte clients.',
	'set_gl_purchases' => 'Compte par défaut à utiliser pour tous les achats sauf indication contraire dans la fiche individuelle du fournisseur. Généralement un type de comptes fournisseurs.',
	'set_gl_sales' => 'Compte par défaut à utiliser pour les transactions de vente. Généralement un compte de type de revenu.',
	'set_gl_cash' => 'Compte par défaut à utiliser pour les transactions en espèces impliquant le paiement de factures. Généralement un type de compte trésorerie (compte de banque).',
	'set_gl_discount' => 'Compte par défaut à utiliser pour les remises à utiliser lorsque les factures sont payées sur les premiers termes. Généralement un type de compte revenu pour les clients, un type de compte payable pour les fournisseurs.',
	'set_gl_deposit_cash' => 'Compte par défaut à utiliser pour les dépôts en espèces. Généralement un type de compte trésorerie.',
	'set_gl_liability' => 'Compte par défaut à utiliser pour les paiements anticipés et réductions sur achats. Généralement, un type de compte passif à court terme.',
	'set_gl_expense' => 'Compte à utiliser par défaut pour les frais. Généralement, un type de compte dépense.',
	'set_terms_text' => 'Conditions de paiement par défaut et limite de crédit.',
	'set_auto_add' => 'Si définie à Oui, cette option va automatiquement créer un nouveau contact lorsque l&rsquo;entrée est reportée.',
	'set_show_status' => 'Cette fonction déploie une fenêtre contextuelle affichant l&rsquo;état du contact lorsqu&rsquo;un client/fournisseur est sélectionné dans le champ de recherche lors de la préparation d&rsquo;une commande. Il affiche les soldes, la chronologie du compte ainsi que l&rsquo;état actif du contact.',
	'set_include_all'=> 'Inclure toutes les lignes qui ont un SKU lorsque vous complétez un bulletin de vente, peu importe s&rsquo;ils sont remplis avec cette facture. Non - seulement les lignes d&rsquo;articles qui ont une quantité supérieure à zéro seront ajoutées à la facture. Oui - toutes les lignes d&rsquo;articles avec un SKU attribué seront incluses dans la facture, pratique pour l&rsquo;affichage d&rsquo;information sur Expédition antérieur / Soldes due sur les bons de commande avec limites.',
    // Messages
    'msg_gl_fiscal_year_edit' => 'Les dates du calendrier de la période fiscale peuvent être modifiées ici. Veuillez noter que la date de début de l&rsquo;exercice ne peut pas être modifiée pour toutes périodes incluant la dernière écriture du journal général dans le système.',
	'msg_gl_fiscal_year_confirm' => 'Êtes-vous sûr de vouloir ajouter l&rsquo;exercice financier %s',
    'del_fiscal_year_btn' => 'Fermer/Supprimer l&rsquo;exercice',
    'fy_del_title' => 'Fermer l&rsquo;exercice',
    'fy_del_desc' => 'Cet outil supprime un exercice de la base de données.<br /><br />NOTE: TOUTES LES DONNÉES SERONT PERDUES! Vous devriez faire une sauvegarde avant d&rsquo;effectuer cette opération.<br /><br />Ce processus peut prendre plusieurs minutes et nul ne doit accéder à vos données d&rsquo;entreprise lorsqu&rsquo;il est en cours d&rsquo;exécution. De plus amples instructions vous seront fournies avec des options pour chaque module qui pourrait être affecté.',
    'fy_del_instr' => '<p style="color:red">AVERTISSEMENT : CETTE OPÉRATION CLÔTURERA L&rsquo;EXERCICE FINANCIER %s.</p><p>Veuillez vérifier les paramètres de chaque onglet ci-dessous et ajuster en conséquence. Bizuno a sélectionné des paramètres par défaut pour chaque module qui est touché par l&rsquo;exercice, Vous pouvez les changer pour répondre vos préférences d&rsquo;affaires.</p><p><b>Lorsque vous êtes prêt, appuyez sur le bouton Démarrer dans la barre d&rsquo;outils.</b></p>',
    'fy_del_btn_go' => 'Oui, je suis prêt, permettre la procédure',
    'fy_del_btn_cancel' => 'Pas maintenant, merci.',
	'msg_gl_repost_journals_confirm' => '<b>ASSUREZ-VOUS DE SAUVEGARDER VOS DONNÉES AVANT DE TRANSFÉRER TOUT JOURNAL!</b><br />Note 1: Transférer les journaux peut prendre un certain temps, Vous pouvez limiter le transfert, en saisissant une plage de dates plus petite ou un nombre limité de journaux.',
	'msg_gl_db_purge' => 'Purger toutes les Transactions de journal (conserve les contacts et paramètres)',
	'msg_gl_db_purge_confirm' => 'Êtes-vous sûr de vouloir effacer toutes les écritures de journal? Inscrire "purge" dans la boîte et appuyer sur le bouton "Purge écritures journal".',
    'msg_attach_clean_success' => 'À retiré les pièces jointes %s avec succès',
    'msg_attach_clean_empty' => 'Aucune pièce jointe n’a été trouvée avant vos critères de date!',
    'msg_pb_admin_roles' => 'Sélectionnez les rôles PhreeBooks qui s&rsquo;appliquent à ce rôle Bizuno. Si elle est sélectionnée, les utilisateurs s&rsquo;affichent dans les menus déroulants ID Rep dans les ventes, les achats, etc..',
	'msg_gl_replace_confirm' => 'Êtes-vous sûr de vouloir remplacer vos comptes GL?',
	'msg_gl_replace_success' => 'Vos comptes GL ont été remplacés, vous devez vous déconnecter et vous reconnecter pour recharger les paramètres.',
    'phreebooks_purge_success' => 'Les écritures de journal ont été correctement purgées!',
    'coa_import_blocked' => 'L&rsquo;importation / Téléversement du plan comptable a été désactivée, car il y a des écritures de journal présentes. Cette opération peut seulement être effectuée sur un journal général propre au démarrage. Pour supprimer votre journal et commencer à neuf, effectuer l&rsquo;opération de purge sur l&rsquo;onglet Outils Journal.',
    'recur_desc' => 'Cette transaction peut être dupliquée à l&rsquo;avenir en sélectionnant le nombre d&rsquo;entrées à créer et la fréquence pour laquelle ils sont reportés. L&rsquo;enregistrement actuel est considérée comme la première récurrence, les autres dates inscrites seront calculées automatiquement.',
	'recur_times' => 'Nombre total d&rsquo;écritures créées',
	'recur_frequency' => 'Sélectionnez la fréquence à reporter les écritures, les dates inscrites ne peuvent dépasser tout exercice défini dans Bizuno.',
	'msg_currency_update' => 'Le taux de change pour %s (%s) a été mis à jour avec succès à %s via %s.',
	'msg_contact_status_good' => 'Le compte en règle',
	'msg_contact_status_over_limit' => 'Le compte dépasse la limite de crédit',
	'msg_contact_status_past_due' => 'Le compte a un solde passé dû',
	'msg_contact_past_due_amount' => 'Solde passé dû: %s',
    // Error Messages
    'err_gl_chart_delete' => 'Le compte GL ne peut pas être supprimé s&rsquo;il y a des écritures affectées au compte. Il y a au moins une écriture dans la table %s utilisant ce compte!',
	'err_currency_change' => 'La devise par défaut ne peut pas être changée une fois que des écritures ont été saisies dans le système!',
	'err_currency_delete_default' => 'La devise par défaut ne peut pas être supprimé! Définir une autre devise par défaut, puis réessayer de supprimer celui-ci.',
	'err_currency_cannot_delete' => 'La devise ne peut pas être supprimée s&rsquo;il y a des écritures dans le système utilisant cette devise!',
    'err_pb_repost_empty' => 'Veuillez sélectionner au moins un journal à traiter.',
	'err_currency_bad_iso' => 'Le taux de change pour %s (%s) n&rsquo;a pas été mis à jour via %s. Est-ce un code de devise valide?',
	'err_gl_xfr_same_store' => 'La source et la boutique de destination ne peuvent pas être la même!',
    // Buttons
    'title_gl_test' => 'Valider et réparer les soldes de compte du grand livre général',
	'new_currency' => 'Nouvelle devise',
	'new_currency_desc' => 'Sélectionnez une nouvelle devise dans le menu déroulant et appuyez sur la touche Suivant.',
	'restrict_period' => 'Restreindre les opérations de cet utilisateur à la période actuelle.',
	'desc_import_journal' => 'Reportez-vous au fichier d&rsquo;aide pour les exigences de format.',
    'phreebooks_import_inv' => 'Importer l&rsquo;inventaire',
	'phreebooks_import_ap' => 'Importer comptes fournisseurs',
	'phreebooks_import_ar' => 'Importer comptes clients',
	'phreebooks_import_po' => 'Importer bons de commande',
	'phreebooks_import_so' => 'Importer bulletins de vente',
    'phreebooks_purge_db_journal' => 'Purger écritures de journal
',
    // labels
    'new_gl_account' => 'Nouveau compte GL',
    'bal_decrease' => 'Soldes descendants',
    'bal_increase' => 'Soldes ascendants',
    'phreebooks_repost_title' => 'Transférer les écritures de journal',
    'phreebooks_fiscal_years' => 'Exercices finaciers',
	'phreebooks_journal_periods' => 'Périodes comptables',
    'expected_delivery_dates' => 'Dates de livraison prévues',
    // General
    'pb_gl_age_00' => 'Périodes chronologiques',
	'pb_gl_age_30' => '30 jours',
	'pb_gl_age_60' => '60 jours',
	'pb_gl_age_90' => '+90 jours',
    'over_90' => 'Plus de 90',
	'pb_is_ytd' => 'Revenu CDA',
	'pb_is_budget_ytd' => 'Budget CDA',
	'ly_actual' => 'L&rsquo;année dernière',
	'pb_is_last_ytd' => 'Dernier CDA',
	'ly_budget' => 'Le budget de l&rsquo;année dernière',
	'pb_is_last_bdgt_ytd' => 'Budget AD CDA',
	'fiscal_dates' => 'Dates d&rsquo;exercice',
	'desc_gl_db_purge' => 'Supprimer toutes les écritures du journal (type \'purge\' dans la zone de texte et appuyez sur le bouton de purge)<br />',
    // Currency
    'neg_prefix' => 'Préfixe négatif',
	'neg_suffix' => 'Suffixe négatif',
    'dec_point' => 'Virgule décimale',
	'dec_length' => 'Chiffres après la virgule',
    // Tools
    'pb_prune_cogs_title' => 'Élaguer le journal coût des marchandises vendues dues',
    'pb_prune_cogs_desc' => 'Si vous vendez des produits d&rsquo;inventaire contrôlés qui ne sont pas en stock, les produits passeront en négatif et les écritures du journal seront mise en file d&rsquo;attente pour les reporter lorsqu&rsquo;ils seront de retour en stock. Cet outil reporte toutes les écritures de journal qui ont des valeurs dans le coût des marchandises vendues en attente. Lorsque votre système enregistre correctement les CMV dues, la table ne contiendra que des marchandises avec une valeur en quantité négative en stock.',
    'pb_attach_clean_title' => 'Nettoyez les pièces jointes de journal dans PhreeBooks',
    'pb_attach_clean_desc' => 'Cet outil supprime les pièces jointes à partir des entrées de journal antérieures à une date spécifique. L&rsquo;outil est utile pour réduire la taille du fichier de sauvegarde, accélérez des recherches de pièce jointe et retirez les documents qui ne sont plus nécessaires.',
	'pb_attach_clean_btn' => 'Sélectionnez une date de nettoyage pour lequel tous les fichiers avant cette date seront supprimés',
    'pb_attach_clean_confirm' => 'Êtes-vous sûr de vouloir supprimer toutes les pièces jointes avant cette date? Cette opération ne peut pas être annulée.',
    'pb_admin_totals_desc' => 'Le séquencement pour le total des achats peut être changé ici. Les commandes sont totalisées séquentiellement par l&rsquo;ordre de la séquence indiqué ici. Pour ajouter une méthode de totalisation, faites-le glisser depuis la liste gauche et placer à la position désirée. Pour retirer une séquence, faites-le glisser depuis la liste à droite et déposer sur la liste à gauche.',
	'pb_admin_totals_dup' => 'Une seule méthode totale peut être utilisée sur chaque colonne,!',
	'phreebooks_budget_wizard_desc' => 'Cet assistant va prendre les données de l&rsquo;exercice sélectionné et les transférer dans l&rsquo;exercice suivant. Sélectionnez les options pour ajuster les résultats comme vous le désirez.',
	'build_next_fy_desc' => 'Si le prochain exercice n&rsquo;est pas disponible, il peut être créé ici. NOTE: Ne pas générer plus d&rsquo;années d&rsquo;exercices pour lesquels vous travaillez. Chaque écriture de journal est reportée tous les mois à venir à partir de la date inscrite et sera plus lente avec des exercices inutiles.',
	'budget_dest_fy' => 'Transfert au budget de l&rsquo;exercice ',
	'budget_src_fy' => ' de l&rsquo;exercice ',
	'budget_using' => ' utilisant la source de données ',
	'budget_adjust' => ' augmenter de ',
	'budget_average' => ' Vérifiez pour établir une moyenne des valeurs à l&rsquo;intérieur d&rsquo;un compte GL pour chaque période dans le nouvel exercice et appuyez sur => ',
	'journal_tools' => 'Outils Journal',
	'primary_gl_acct' => 'Compte GL primaire',
	'coa_import_title' => 'Changez votre plan comptable',
	'btn_coa_upload' => 'Téléverser et remplacer',
	'btn_coa_preview' => 'Aperçu du plan GL',
	'coa_upload_file' => 'ou parcourir votre ordinateur pour télécharger un plan comptable personnalisé',
	'coa_import_desc' => 'Votre plan comptable d&rsquo;entreprise peut être importé/téléverser ici pour répondre aux besoins de votre entreprise et à se conformer aux réglementations locales.<br />NOTE: Votre plan comptable actuel ne peut pas être remplacé une fois que des écritures de journal sont présentes!',
	'phreebooks_new_fiscal_year' => 'Générer le prochain exercice',
	'pbtools_gl_test_desc' => 'Cette opération valide et répare les soldes du plan comptable. Si la balance de vérification ou le bilan ne sont pas en équilibre, c&rsquo;est ici l&rsquo;endroit où débuter. D&rsquo;abord valider les soldes pour voir s&rsquo;il y a une erreur et réparer si nécessaire.<br /><br />Avant la réparation, VOUS DEVRIEZ D&rsquo;ABORD IMPRIMER LES ÉTATS FINANCIERS ET SAUVEGARDER VOTRE ENTREPRISE!',
];
