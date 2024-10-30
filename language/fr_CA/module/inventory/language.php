<?php
/*
 * Langue de traduction pour le module inventaire
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
 * @filesource /locale/fr_CA/module/inventory/language.php
 * TRADUIT PAR L'ÉQUIPE AL-PROMÉDIA (al.promedia@gmail.com) SERVICES WEB MULTIMÉDIA
 */

$lang = [
    'title' => 'Inventaire',
    'description' => 'Le module Inventaire gère tous les produits et services utilisés dans la PhreeSoft Business Toolkit. <b>NOTE: Ceci est un module de base et ne peut pas être retiré!</b>',
    // Settings
    'set_weight_uom'     => 'Unité de mesure du poids par défaut.',
    'set_dim_uom'        => 'Unité de mesure de la dimension par défaut.',
	'set_tax_rate_id_c'  => 'Taux de la taxe de vente par défaut à utiliser pour tous les articles d&rsquo;inventaire pour les ventes.',
	'set_tax_rate_id_v'  => 'Taux de la taxe de vente par défaut à utiliser pour tous les articles d&rsquo;inventaire pour les achats.',
	'set_auto_add'       => 'Oui - Activer auto-ajout de nouveaux articles à l&rsquo;inventaire, le type par défaut sera article de tock. Non - Le SKU doit exister dans la base de données d&rsquo;inventaire pour l&rsquo;écriture au grand livre.',
	'set_auto_cost'      => 'Si elle est définie, fixera les nouveaux coûts dans la base de données d&rsquo;inventaire lorsque (BC) les bons de commande sont reportés, les (AC) achats d&rsquo;articles d&rsquo;inventaire sont reçus. Cette fonction vous aide à garder votre coût unitaire à jour avec les derniers établissements des coûts.',
	'set_allow_neg_stock'=> 'Oui - Autoriser les ventes d&rsquo;articles qui ne sont pas en stock. Non - exiger un stock suffisant pour reporter au journal général.',
	'set_stock_usage'    => 'Cette fonctionnalité permet de calculer la moyenne et la médiane de l&rsquo;article au cours des 12 derniers mois et affiche les résultats dans une fenêtre contextuelle lorsque l&rsquo;article de stock est édité.',
	'set_barcode_length' => 'Définit la longueur prévus des scanneurs de code à barres pour sélectionner automatiquement les articles en stock. Défini sur zéro (0) pour désactiver le scanneur de code à barres auto = sélectionnez une valeur.',
	'set_inv_sales_' => 'Compte GL par défaut pour les activités de Ventes/Revenu pour le type d&rsquo;inventaire : ',
	'set_inv_inv_'   => 'Compte GL par défaut pour les activités de Stock/Salaire pour le type d&rsquo;inventaire : ',
	'set_inv_cogs_'  => 'Compte GL par défaut pour le coût des ventes (CMV) pour le type d&rsquo;inventaire : ',
	'set_inv_meth_'  => 'Méthode du coût par défaut à utiliser pour le type d&rsquo;inventaire : ',
    // Labels
        '01month' => 'Moyenne de 1 mois',
	'03month' => 'Moyenne de 3 mois',
	'06month' => 'Moyenne de 6 mois',
	'12month' => 'Moyenne de 12 mois',
        'adj_value' => 'Ajout valeur',
        'rnd_value' => 'Arrondir valeur',
    // Messages
	'msg_sku_entry_copy' => 'Entrez un SKU à être créées à partir de cet enregistrement :',
	'msg_sku_entry_rename' => 'Entrez un nouveau SKU pour cet enregistrement :',
	'msg_inventory_sku_usage' => 'Ce SKU fait partie des assemblages suivants :',
	'msg_inventory_assy_cost' => 'Le coût actuel pour assembler ce sku est : %s',
	'msg_inv_assy_stock_good' => 'Il y a suffisamment de pièces pour construire ce sku!',
	'msg_no_price_sheets' => '<b>Note:</b> Aucune feuille de prix n&rsquo;a été sélectionnée pour créer/édité. ppuyez sur la nouvelle icône sur la barre d&rsquo;outils d&rsquo;administration pour créer une nouvelle feuille de prix ou modifier une feuille de prix existantes.',
	'msg_inv_qty_min' => 'Il est nécessaire d&rsquo;ajuster les niveaux de stock. Nouveau stock minimal = %s',
	'msg_inv_median' => 'Vérifiez l&rsquo;utilisation mensuelle, la valeur médiane (%s) est hors de la plage autorisée aux ventes moyennes (%s).',
    // Error Messages
    'err_inv_sku_blank' => 'Le champ SKU est nécessaire!',
	'err_inv_delete_assy' => 'L&rsquo;article d&rsquo;inventaire ne peut pas être supprimé, car il fait partie d&rsquo;un assemblage. Ce SKU doit être retiré de l&rsquo;assemblage avant de pouvoir être supprimé.',
	'err_inv_delete_gl_entry' => 'L&rsquo;article d&rsquo;inventaire ne peut pas être supprimé s&rsquo;il y a des écritures de journal qui lui sont assignées. Soit repasser les écriture affectées pour cet article ou mettez l&rsquo;article inactif.',
	'err_inv_assy_error' => 'Soit ce n&rsquo;est pas un assemblage ou il n&rsquo;y a pas de pièces dans cette assemblage!',
	'err_inv_assy_low_stock' => 'Il n&rsquo;y a pas suffisamment de pièces pour construire %s de ce SKU!',
	'err_inv_assy_low_list' => '(%s) %s : Stock : %s, %s sont nécessaires.',
    // Tools
	'inv_tools_val_inv' => 'Valider le stock d&rsquo;inventaire affiché',
	'inv_tools_val_inv_desc' => 'Cette opération fait des tests pour s&rsquo;assurer que la quantité de votre inventaire figurant dans la base de données et affichée dans les écrans de l&rsquo;inventaire sont les mêmes que les quantités dans la base de données d&rsquo;historique de stock calculée par PhreeBooks lorsque des déplacements d&rsquo;inventaire se produisent. Les seuls éléments testés sont ceux qui sont suivis dans le calcul du coût des marchandises vendues. La réparation des soldes des stocks va corriger la quantité en stock et n&rsquo;affectera pas les données d&rsquo;historique de l&rsquo;inventaire.',
	'inv_tools_repair_test' => 'Tester les soldes de marchandises avec l&rsquo;historique des CMV',
	'inv_tools_repair_fix' => 'Réparer les soldes de marchandises avec l&rsquo;historique des CMV',
	'inv_tools_qty_alloc' => 'Attribution d&rsquo;inventaire',
	'inv_tools_qty_alloc_desc' => 'Cet outil permettra de synchroniser la quantité en inventaire sur des valeurs d&rsquo;attribution des écritures comptables des activités ouvertes.',
	'inv_tools_qty_alloc_label' => 'Synchroniser les quantités de marchandises sur l&rsquo;attribution',
	'inv_tools_btn_test' => 'Vérifiez les soldes de stocks',
	'inv_tools_btn_repair' => 'Sync qté en stock',
	'inv_tools_out_of_balance' => 'SKU: %s -> l&rsquo;inventaire indique %s disponible, mais l&rsquo;historique du CMV indique %s disponible',
	'inv_tools_in_balance' => 'Vos soldes de marchandises sont OK.',
	'inv_tools_stock_rounding_error' => 'SKU: %s -> l&rsquo;inventaire indique %s disponible, mais est inférieure à votre précision. Veuillez réparer vos soldes d&rsquo;inventaire, la marchandises disponible sera arrondi à %s.',
	'inv_tools_balance_corrected' => 'SKU: %s -> Le stock d&rsquo;inventaires disponible a été changé à %s.',
	'inv_tools_validate_so_po_desc' => 'Cette opération teste pour s&rsquo;assurer que votre quantité en stock sur bon de commande et la quantité de bulletins de ventes concordent avec les écritures comptables. Les valeurs calculées provenant des écritures comptables remplacent la valeur dans la table Inventaire.',
	'inv_tools_repair_so_po' => 'Tester et réparer la quantité de stock sur les valeurs de commande',
	'inv_tools_btn_so_po_fix' => 'Commencer le test et la réparation',
	'inv_tools_so_po_result' => 'Terminé le traitement de l&rsquo;inventaire sur commande avec aucune erreur de quantités.',
	// API and Import/Export
    'invapi_desc' => 'L&rsquo;API d&rsquo;inventaire prend actuellement en charge la table Inventaire de base pour les insertions et les mises à jour. Extra custom fields are supported. To import an inventory file:<br>1. Download the inventory template which lists the field headers and descriptions.<br>2. Add your data to your .csv file.<br>3. Select the file and press the import icon.<br>The results will be displayed after the script completes. Any errors will also be displayed.',
	'invapi_template' => 'Étape 1 : Télécharger le modèle d&rsquo;inventaire => ',
	'invapi_import' => 'Étape 3 : Ajouter votre inventaire au modèle, parcourez l&rsquo;arborescence pour sélectionner le fichier et appuyez sur Importer. ',
	'invapi_export' => 'Facultatif : Exporter votre table d&rsquo;inventaire de la base de données au format .csv pour la sauvegarde => ',
];
