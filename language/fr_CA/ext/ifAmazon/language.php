<?php
/*
 * Langue de traduction pour l'extension Interface Amazon
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
 * @filesource /lib/locale/fr_CA/ext/ifAmazon/language.php
 */

$lang = [
    'title' => 'Interface d&rsquo;Amazon',
    'description' => 'L&rsquo;interface d&rsquo;Amazon permet de télécharger les commandes, téléverser des flux de produits et aider à concilier les paiements.',
    'amazon_maps' => 'Modèles Amazon',
    'amazon_template_desc' => 'Les modèles d&rsquo;Amazon font en sorte que vos champs de la base de données d&rsquo;inventaire de Bizuno s&rsquo;allient aux champs d&rsquo;Amazone.
        La création de ces modèles est requise pour réussir un flux à Amazon. Pour créer un modèle, sélectionnez la catégorie
        du menu déroulant et appuyez sur le bouton «Créer un modèle». Ceci chargera les champs disponibles à envoyer à Amazone et créer une liste ci-dessous.
        vous devrez assigner un champ Bizuno à tous les champs requis d&rsquo;Amazon. Les champs préféré et facultatif améliorer vos descriptions de produits.
        Une fois vos champs assignés, appuyez sur l&rsquo;icône Enregistrer pour enregistrer vos modifications.
        Vous devriez maintenant être en mesure de créer des flux de téléversement à Amazon par le client -> Menu Interface Amazon.',
    'auto_detect' => 'Détection automatique',
    'amazon_field' => 'Index flux d&rsquo;Amazone',
    'bizuno_field' => 'Champ d&rsquo;inventaire Bizuno',
    'amazon_post_success' => 'Publié avec succès %3 commandes amazon!',
    'build_inventory' => 'Générer un flux d&rsquo;inventaire ',
    'import_orders' => 'Importer des commandes',
    'confirm_shipments' => 'Confirmer l&rsquo;expéditions',
    'import_payment' => 'Fichier de processus de paiement',
    'amazon_sales_orders' => 'Ouvrez les bulletins de ventes d&rsquo;Amazon ',
    'build_inventory_desc' => 'Sélectionnez un fichier de correspondance et appuyez sur Aller pour construire votre fichier de flux de produit Amazon à téléverser et téléchargez-le sur votre ordinateur. De là, il peut être téléversé sur Amazon en passant par le centre vendeur. Si aucun fichier de flux n’est répertorié, vous devez en construire un par le module Administration ->  Interface Amazon (Paramètres) -> Modèles Amazon.',
    'import_orders_desc' => 'Sélectionnez le fichier de commandes pour importer à partir d&rsquo;Amazon et appuyez sur Aller:',
    'confirm_shipments_desc' => 'Sélectionner une date pour créer une confirmation d&rsquo;expédition d&rsquo;Amazon et appuyer sur Aller:',
    'import_payment_desc' => 'Veuillez sélectionner le fichier de paiement Amazon à traiter:',
    'msg_confirm_success' => 'confirmation de commande d&rsquo;Amazon générée.',
    'msg_template_created' => 'Votre fichier de modèle a été écrit, vous pouvez maintenant assigner des champs Bizuno aux champs Amazon.',
    'msg_order_long_data' => 'Le nom primaire et/ou l&rsquo;adresse ont été tronqués pour adapter la taille du champ de la base de données du journal. Vérifier l&rsquo;information «Expédier à» pour la commande n° %s et le client: %s pour vous assurer que la perte d&rsquo;informations n&rsquo;est pas critique. Vous devrez reformater l&rsquo;adresse manuellement.',
    'err_no_inv_map' => 'Impossible de trouver le fichier de correspondance d&rsquo;Amazon pour le modèle: %s',
    'err_no_inv_sku' => 'Code UPC manquant et n° ASIN d&rsquo;Amazon pour le SKU: %s',
    'err_no_inv_tpl' => 'Impossible de trouver le fichier de modèle d&rsquo;Amazon pour le modèle: %s',
    'err_no_contact' => "Impossible de trouver le n° de contact d&rsquo;Amazon, Assurez-vous que vous avez sélectionné un contact client dans le module Administration -> Paramètres du module Amazon.",
    'err_dup_order' => 'Commande Amazon n° %s est déjà publié sur Bizuno, il sera ignoré!',
    'err_confirm_no_contact' => 'La date pour n° contact/Expédié n&rsquo;a pu être trouvé, aucun fichier n&rsquo;a été généré!',
    'err_no_confirm_found' => 'Aucune commande valide d&rsquo;Amazone n&rsquo;a été expédiée à la date sélectionnée!',
    'err_sku_no_weight' => 'SKU %s n&rsquo;a pas de poids. Veuillez modifier l&rsquo;inventaire et ajouter un poids non nul!',
    'err_missing_image' => 'Chemin de l&rsquo;image: %s pour le sku: %s doit être de type JPG ou GIF pour Amazon!',
    'err_no_inv_rows' => 'Aucun article d&rsquo;inventaire trouvé à être téléversé!',
    'err_inv_no_price' => 'Aucun prix n&rsquo;a été déterminé pour le SKU: %s',
    'err_feed_needs_fix' => 'Il y a des erreurs dans votre fichier de flux, Veuillez les corriger avant de soumettre votre flux à Amazon.',
    // settings
    'contact_id'   => 'Détermine le n° de contact client pour lui attribuer toutes les ventes d&rsquo;Amazon.',
    'catalog_field'=> 'Détermine quel nom du champ de base de données à utiliser pour sélectionner des articles à être téléversés sur Amazon, Généralement de type case à cocher',
    'price_sheet'  => 'Détermine quelle feuille de prix à utiliser pour déterminer le prix de l&rsquo;article',
    'ship_std'     => 'Transporteur/Méthode à utiliser pour les Expéditions standard',
    'ship_exp'     => 'Transporteur/Méthode à utiliser pour les Expéditions accélérées',
    'gift_wrap_sku'=> 'SKU à utiliser pour option emballage cadeau',
    'notes_sku'    => 'SKU à utiliser pour les notes de commande',
    'gl_acct_sales'=> 'Compte GL à utiliser pour l&rsquo;enregistrement des ventes',
    'gl_acct_disc' => 'Compte GL à utiliser pour l&rsquo;enregistrement des réductions sur les ventes',
    'gl_acct_ship' => 'Compte GL à utiliser pour l&rsquo;enregistrement des frais de transport',
    'auto_journal' => 'Détermine comment publier chaque vente, les choix sont bulletin de ventes, Ventes ou Auto (Ventes si en stock, sinon Bulletins de ventes)'];

