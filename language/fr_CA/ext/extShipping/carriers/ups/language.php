<?php
/*
 * Langue de traduction pour l'extension expédition - transporteur ups
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
 * @filesource /lib/locale/fr_CA/ext/extShipping/carriers/ups/language.php
 */

$lang = [
    'title'        => 'United Parcel Service',
    'acronym'      => 'UPS',
    'description'  => 'Avec les taux d&rsquo;expédition d&rsquo;UPS tirés directement à partir de serveurs d&rsquo;UPS. (Nécessite un compte avec UPS)',
    'instructions' => '<h3>Étape 1. Développer et tester les applications activées des services Web</h3>
Cette étape a été achevée par PhreeSoft. Les étapes suivantes doivent être suivies pour activer la génération d’étiquette.
<h3>Étape 2. Enregistrer pour passer à la production</h3>
Démarrer le processus de certification en appliquant pour un compteur du nombre de productions d&rsquo;UPS au centre de ressources développeur d&rsquo;UPS. <a href="http://www.ups.com/developer">http://www.ups.com/developer</a>
<h3>Étape 3. Obtenir votre autorisation de production</h3>
Obtenir vos informations d&rsquo;identification de production (Numéro de compteur de production, Clé d&rsquo;authentification de production et la production de clé de sécurité) au cours du processus d&rsquo;inscription en ligne. Votre mot de passe a été envoyé via une communication de courrier électronique distinct.
Note: Un nombre de compteurs de production est requis pour chacun de vos emplacements. Il est acceptable d&rsquo;utiliser
la même clé d&rsquo;authentification entre plusieurs emplacements. Numéros de compteurs supplémentaires peuvent être obtenues en s&rsquo;abonnant à (Avancé) Service Web.
<br /><br />Remarque importante: En raison de la sensibilité de ces informations, La production la clé d&rsquo;authentification n&rsquo;est pas fourni dans le courriel de confirmation. Veuillez conserver ces informations dans vos dossiers personnels.
<h3>Étape 4. Recevoir un courriel de confirmation</h3>
Vous recevrez la confirmation de votre inscription par courriel.
<h3>>Étape 5. Contacter le bureau régional d&rsquo;intégration Web Solutions (WIS) Équipe de soutien</h3>
Contactez l&rsquo;équipe des Solutions d&rsquo;intégration Web de votre région avec les informations de votre application et des informations d&rsquo;identification de production. Demander que votre demande soit activée à l&rsquo;aide de services Web avancés avec des étiquettes d&rsquo;expédition. (US &amp; Canada - 1.877.339.2774)
<h3>Étape 6. Équipe régionale WIS fournit des instructions pour présenter les étiquettes</h3>
L&rsquo;équipe de soutien de votre région envoie un courriel avec les instructions pour la certification des étiquettes générées par votre application.
<h3>Étape 7. Générer et soumettre les étiquettes de test</h3>
Générer des étiquettes de test associés à l&rsquo;application et soumettre les étiquettes de test à l&rsquo;équipe d&rsquo;évaluation d&rsquo;étiquette d&rsquo;UPS pour approbation.
<br />Note: L&rsquo;équipe d&rsquo;évaluation d&rsquo;étiquette d&rsquo;UPS nécessitent une durée de cinq jours, pour l&rsquo;évaluation de l&rsquo;étiquette.
<h3>Étape 8. Évaluation d&rsquo;étiquette</h3>
L&rsquo;équipe d&rsquo;évaluation des l&rsquo;étiquettes d&rsquo;UPS évaluent les étiquettes de test qui ont été présentées et approuvent ou rejette les étiquettes. Un des membres de l&rsquo;équipe de soutien de votre région vous contactera concernant l&rsquo;approbation ou le rejet des étiquettes présentées. Si les étiquettes sont approuvées, passez à l&rsquo;étape suivante. Si les étiquettes sont rejetées, corriger les étiquettes selon les instructions et soumettre à nouveau pour approbation.
<h3>Étape 9. Équipe régionale WIS  active l&rsquo;application</h3>
Une fois les étiquettes de test sont approuvées pour la production par l&rsquo;équipe d&rsquo;évaluation d&rsquo;étiquette, un des membres de l&rsquo;équipe de soutien de votre région autorise votre profil à transmettre l&rsquo;étiquette d&rsquo;expédition et vous notifie la réussite de la certification.
<h3>Step 10. Étape 10. Remplacez l&rsquo;URL et les informations d&rsquo;identification</h3>
Remplacer l&rsquo;URL et la qualification TEST avec l&rsquo;URL et qualification pour la production.',
    'reconcile_bill_title' => 'Concilier la facture d&rsquo;UPS',
    'reconcile_bill_desc' => 'Pour concilier votre facture d&rsquo;UPS avec le journal d&rsquo;expédition, connectez-vous à votre compte UPS.com et télécharger la facture sous Mon UPS -> Facturation et paiement -> Liste des factures -> Facture N° -> Télécharger Facture -> Modèle de rapport détaillé (Express & Ground - Outil de fichier) sur votre bureau. Sélectionnez le fichier en utilisant bouton Parcourir ci-dessous et cliquez sur Aller. Un rapport sera généré et téléchargé sur votre ordinateur.',
    'track_shipments_title' => 'Suivre les expéditions quotidiennes',
    'track_shipments_desc' => 'Cette option suit l&rsquo;état de l&rsquo;envoi de toutes les expéditions pour une journée particulière. Sélectionnez une date pour suivre tous vos envois d&rsquo;UPS et cliquez sur Aller. La table du journal d&rsquo;expédition sera mise à jour avec les résultats.',
    'ship_pkg_title' => 'Colis d&rsquo;expédition',
    'ship_pkg_desc' => 'Pour générer une étiquette pour expédier un colis via UPS, cliquez sur Accéder et renseignez le formulaire.',
    // General
    'ups_weight' => 'Poids total',
    'ups_value' => 'Valeur totale',
    'reference1' => 'Réf 1',
    'reference2' => 'Réf 2',
    'ups_pkg' => 'Type de colis',
    'ups_resi' => 'Résidentiel',
    'ups_handling' => 'Frais de manutention',
    'ups_pickup' => 'Méthode de ramassage',
    'ups_saturday' => 'Livraison le samedi',
    'ups_confirm' => 'Confirmation de livraison',
    'ups_cod' => 'COD',
    'ups_cod_cur' => 'Devise',
    'ups_return' => 'Retour de marchandise',
    'ship_bill_to' => 'Facturer à',
    'ship_bill_acct_num' => 'Récep/Compte tiers n°',
    'pkg_envelope' => 'Envelope/Lettre',
    'pkg_your_box' => 'Fourni par le client',
    'pkg_tube' => 'Tube d&rsquo;UPS',
    'pkg_pak' => 'Paquet d&rsquo;UPS',
    'pkg_box' => 'Boîte d&rsquo;UPS',
    'pkg_10kg_box' => 'Boîte 10kg',
    'pkg_25kg_box' => 'Boîte 25kg',
    'regular_pickup' => 'Ramassage quotidien',
    'request_courier' => 'Comptoir client du transporteur',
    'drop_box' => 'Demande/One Time Pickup',
    'service_center' => 'On Call Air',
    'station' => 'Tarifs de détail suggérés',
    'print_return_label' => 'Imprimer l&rsquo;étiquette de retour ici',
    // Configuration
    'acct_number'  => 'Entrez le numéro de compte UPSà utiliser pour les estimations du taux',
    'shipping_settings_default_rate' => 'L&rsquo;opportunité de l&rsquo;inclure par défaut dans les estimations de taux.',
    'shipping_settings_default_service' => 'Sélectionnez les services qui seront offerts par défaut.',
    'auth_user'    => 'Entrez le nom d&rsquo;utilisateur de votre compte UPS.',
    'auth_pass'    => 'Entrez le mot de passe pour votre compte UPS.',
    'license_key'  => 'Entrez la clé de licence qui vous est fournie par UPS.',
    'test_mode'    => 'Le mode Test ou Production à utiliser pour tester les étiquettes d&rsquo;expédition',
    'printer_type' => 'Type d&rsquo;imprimante à utiliser pour l&rsquo;impression d&rsquo;étiquettes. PDF pour le papier ordinaire, Thermique pour imprimante d’étiquettes thermiques d&rsquo;UPS (Reportez-vous au fichier d’aide avant de sélectionner l’imprimante thermique)',
    'printer_name' => 'Définir le nom de l’imprimante à utiliser pour l’impression d’étiquettes tel que défini dans les préférences de l’imprimante pour le poste de travail local.',
    'max_weight'   => 'Le poids maximal autorisée de la boîte est limité par UPS à 150 livres.',
    'def_ltl_class'=> 'Classe de poids par défaut à utiliser pour les chargements incomplets (LTL).',
    'def_ltl_desc' => 'Description de la marchandise par défaut à utiliser pour les chargements incomplets (LTL).',
    'label_thermal'=> 'Taille de l&rsquo;étiquette pour l&rsquo;impression thermique.',
    'label_pdf'    => 'Taille de l&rsquo;étiquette pour l&rsquo;impression de papier ordinaire.',
    'recon_fee'    => 'Le montant de la constante à ajouter au taux d&rsquo;expédition pour la réconciliation pour éviter des alertes de frais supérieur à l&rsquo;estimation.',
    'recon_percent'=> 'Pourcentage de la marge d&rsquo;erreur pour la réconciliation pour éviter des alertes de disparité d&rsquo;expédition.',
    // Settings
    'GND' => 'Ground', // service options
    '1DM' => 'Next Day Air Early',
    '1DA' => 'Next Day Air',
    '1DP' => 'Next Day Air Saver',
    '2DA' => '2nd Day Air A.M.',
    '2DP' => '2nd Day Air',
    '3DP' => '3 Day Select',
    'I1D' => 'Worldwide Express Plus',
    'I2D' => 'Worldwide Express',
    'I3D' => 'Worldwide Expedited',
    'IGD' => 'Standard',
    '1DF' => 'Next Day Air Freight',
    '2DF' => '2nd Day Air Freight',
    '3DF' => '3 Day Freight',
    'GDF' => 'Freight LTL',
    'IP1' => 'Europe First Priority',
    'IFE' => 'Air Freight Consolidated',
    'IFP' => 'Worldwide Express Freight',
    'label_01' => 'Étiquette 4x6',
    'label_02' => 'Étiquette 4x8',
    // General defines
    'RATE_ERROR' => 'Réponse d&rsquo;erreur de taux d&rsquo;UPS: ',
    'RATE_CITY_MATCH' => 'La ville ne correspond pas au code postal.',
    'RATE_TRANSIT' => ' Jour(s) de transit, arriver ',
    'TNT_ERROR' => ' Erreur de temps de transit d&rsquo;UPS N° ',
    'DEL_ERROR' => 'Erreur de suppression d&rsquo;étiquette d&rsquo;UPS: ',
    'DEL_SUCCESS' => 'Suppression d&rsquo;étiquette d&rsquo;expédition d&rsquo;UPS avec succès. Suivi N° ',
    'TRACK_ERROR' => 'Erreur de suivi de colis d&rsquo;UPS: ',
    'TRACK_SUCCESS' => 'Suivi du colis avec succès en référence avec le N° ',
    'track_status' => 'Le colis référence: %s n&rsquo;est pas livrée, l&rsquo;état est: (Code %s) %s.',
    'TRACK_FAIL' => 'Le numéro de référence de package suivant a été livré après la date/heure prévue: ',
    'CLOSE_SUCCESS' => 'Fermé les expéditions d&rsquo;UPS avec succès pour aujourd&rsquo;hui.',
    'err_address_val_country' => 'L&rsquo;outil de validation d&rsquo;adresse d&rsquo;UPS fonctionne uniquement dans les É.-U',
    // Label manager
    'error_postal_code' => 'Le code postal est requis pour utiliser le module d&rsquo;UPS',
   ];
