<?php
/*
 * Langue de traduction pour l'extension expédition - transporteur fedex
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
 * @filesource /lib/locale/fr_CA/ext/extShipping/carriers/fedex/language.php
 */

$lang = [
    'title'        => 'Federal Express',
    'acronym'      => 'FedEx',
    'description'  => 'Federal Express expédition avec des taux tiré directement depuis les serveurs de FedEx. (Nécessite une validation avec FedEx)',
    'instructions' => '<h3>Étape 1. Développer et tester les applications activées des services Web</h3>
Cette étape a été achevée par PhreeSoft. Les étapes suivantes doivent être suivies pour activer la génération d’étiquette.
<h3>Étape 2. Enregistrer pour passer à la production</h3>
Démarrer le processus de certification en appliquant pour un compteur du nombre de productions FedEx au centre de ressources développeur FedEx. <a href="http://www.fedex.com/developer">http://www.fedex.com/developer</a>
<h3>Étape 3. Obtenir votre autorisation de production</h3>
Obtenir vos informations d&rsquo;identification de production (Numéro de compteur de production, Clé d&rsquo;authentification de production et la production de clé de sécurité) au cours du processus d&rsquo;inscription en ligne. Votre mot de passe a été envoyé via une communication de courrier électronique distinct.
Note: Un nombre de compteurs de production est requis pour chacun de vos emplacements. Il est acceptable d&rsquo;utiliser
la même clé d&rsquo;authentification entre plusieurs emplacements. Numéros de compteurs supplémentaires peuvent être obtenues en s&rsquo;abonnant à (Avancé) Service Web.
<br />Remarque importante: En raison de la sensibilité de ces informations, La production la clé d&rsquo;authentification n&rsquo;est pas fourni dans le courriel de confirmation. Veuillez conserver ces informations dans vos dossiers personnels.
<h3>Étape 4. Recevoir un courriel de confirmation</h3>
Vous recevrez la confirmation de votre inscription par courriel.
<h3>Étape 5. Contacter le bureau régional d&rsquo;intégration Web Solutions (WIS) Équipe de soutien</h3>
Contactez l&rsquo;équipe des Solutions d&rsquo;intégration Web de votre région avec les informations de votre application et des informations d&rsquo;identification de production. Demander que votre demande soit activée à l&rsquo;aide de services Web avancés avec des étiquettes d&rsquo;expédition. (US &amp; Canada - 1.877.339.2774)
<h3>Étape 6. Équipe régionale WIS fournit des instructions pour présenter les étiquettes</h3>
L&rsquo;équipe de soutien de votre région envoie un courriel avec les instructions pour la certification des étiquettes générées par votre application.
<h3>Étape 7. Générer et soumettre les étiquettes de test</h3>
Générer des étiquettes de test associés à l&rsquo;application et soumettre les étiquettes de test  de test à l&rsquo;équipe d&rsquo;évaluation d&rsquo;étiquette FedEx pour approbation.
<br />Note: L&rsquo;équipe d&rsquo;évaluation d&rsquo;étiquette FedEx nécessitent une durée de cinq jours, pour l&rsquo;évaluation de l&rsquo;étiquette.
<h3>Étape 8. Évaluation d&rsquo;étiquette</h3>
L&rsquo;équipe d&rsquo;évaluation des l&rsquo;étiquettes FedEx évaluent les étiquettes de test qui ont été présentées et approuvent ou rejette les étiquettes. Un des membres de l&rsquo;équipe de soutien de votre région vous contactera concernant l&rsquo;approbation ou le rejet des étiquettes présentées. Si les étiquettes sont approuvées, passez à l&rsquo;étape suivante. Si les étiquettes sont rejetées, corriger les étiquettes selon les instructions et soumettre à nouveau pour approbation.
<h3>Étape 9. Équipe régionale WIS  active l&rsquo;application</h3>
Une fois les étiquettes de test sont approuvées pour la production par l&rsquo;équipe d&rsquo;évaluation d&rsquo;étiquette, un des membres de l&rsquo;équipe de soutien de votre région autorise votre profil à transmettre l&rsquo;étiquette d&rsquo;expédition et vous notifie la réussite de la certification.
<h3>Étape 10. Remplacez l&rsquo;URL et les informations d&rsquo;identification</h3>
Remplacer l&rsquo;URL et la qualification TEST avec l&rsquo;URL et qualification pour la production.',
    'ship_pkg_desc' => 'Pour générer une étiquette pour expédier un colis via Fedex, cliquez sur Accéder et renseignez le formulaire.',
    // General
    'fedex_weight' => 'Poids total',
    'fedex_value' => 'Valeur totale',
    'fedex_pkg' => 'Type de colis',
    'fedex_resi' => 'Résidentiel',
    'fedex_handling' => 'Frais de manutention',
    'fedex_pickup' => 'Méthode de ramassage',
    'fedex_saturday' => 'Livraison le samedi',
    'fedex_confirm' => 'Confirmation de livraison',
    'fedex_cod' => 'COD',
    'fedex_cod_cur' => 'Devise',
    'fedex_return' => 'Retour de marchandise',
    'ship_bill_to' => 'Facturer à',
    'ship_bill_acct_num' => 'Récep/Compte tiers n°',
    'pkg_envelope' => 'Envelope/Lettre',
    'pkg_your_box' => 'Fourni par le client',
    'pkg_tube' => 'Tube du transporteur',
    'pkg_pak' => 'Paquet du transporteur',
    'pkg_box' => 'Boîte du transporteur',
    'pkg_10kg_box' => 'Boîte 25kg',
    'pkg_25kg_box' => 'Boîte 10kg',
    'service_center' => 'Rammasage sur appel',
    'station' => 'Tarifs de détail suggérés',
    // Configuration
    'acct_number'  => 'Entrez le numéro de compte FedEx à utiliser pour les estimations de taux',
    'ltl_acct_num' => 'Entrez le numéro de compte FedEx Freight à utiliser pour les estimations de taux. Laissez ce champ vide si aucun fret LTL ne sera utilisé.',
    'auth_key'     => 'Entrez la clé de FedEx développeur fourni par FedEx.',
    'auth_pw'      => 'Entrez le mot de passe de FedEx développeur fourni par FedEx.',
    'meter_number' => 'Entrez le numéro du compteur qui vous est fournie par FedEx.',
    'sp_hub'       => 'SmartPost hub ID (fournis par FedEx) <a href="http://www.fedex.com/us/smart-post/network.html" target="_blank">Cliquez ici pour la liste de Fedex</a>',
    'test_mode'    => 'Mode Test/Production utilisé pour des étiquettes d’expédition d’essais',
    'printer_type' => 'Type d’imprimante à utiliser pour l’impression d’étiquettes. PDF pour le papier ordinaire, Thermique pour imprimante d’étiquettes thermiques Fedex (Reportez-vous au fichier d’aide avant de sélectionner l’imprimante thermique)',
    'printer_name' => 'Définir le nom de l’imprimante à utiliser pour l’impression d’étiquettes tel que défini dans les préférences de l’imprimante pour le poste de travail local.',
    'max_weight'   => 'Le poids maximal autorisée de la boîte est limité par Fedex à 150 livres.',
    'max_sp_weight'=> 'Le poids maximal autorisée de la boîte pour les expéditions SmartPost, généralement pas plus de 7 livres.',
    'def_ltl_class'=> 'Classe de poids par défaut à utiliser pour les chargements incomplets (LTL).',
    'def_ltl_desc' => 'Description de la marchandise par défaut à utiliser pour les chargements incomplets (LTL).',
    'label_thermal'=> 'Taille de l&rsquo;étiquette pour l&rsquo;impression thermique.',
    'label_pdf'    => 'Taille de l&rsquo;étiquette pour l&rsquo;impression de papier ordinaire.',
    'recon_fee'    => 'Le montant de la constante à ajouter au taux d&rsquo;expédition pour la réconciliation pour éviter des alertes de frais supérieur à l&rsquo;estimation.',
    'recon_percent'=> 'Pourcentage de la marge d&rsquo;erreur pour la réconciliation pour éviter des alertes de disparité d&rsquo;expédition.',
    // Settings
    'GND' => 'Ground', // service options
    'GDR' => 'Home Delivery',
    '1DM' => 'First Overnight',
    '1DA' => 'Priority Overnight',
    '1DP' => 'Standard Overnight',
    '2DA' => 'Express 2 Day A.M.',
    '2DP' => 'Express 2 Day',
    '3DA' => 'Smart Post',
    '3DP' => 'Express Saver',
    'I1D' => 'Int. First',
    'I2D' => 'Int. Priority',
    'IGD' => 'Int. Economy',
    '1DF' => '1 Day Freight',
    '2DF' => '2 Day Freight',
    '3DF' => '3 Day Freight',
    'GDF' => 'Gnd Priority Freight',
    'ECF' => 'Gnd Economy Freight',
    'IP1' => 'Europe First',
    'IFE' => 'Int. Economy Freight',
    'IFP' => 'Int. Priority Freight',
    // General defines
    'RATE_ERROR' => 'Réponse d&rsquo;erreur de taux FedEx: ',
    'RATE_CITY_MATCH' => 'La ville ne correspond pas au code postal.',
    'RATE_TRANSIT' => ' Jour(s) de transit, arriver ',
    'TNT_ERROR' => ' Erreur de temps de transit FedEx N° ',
    'DEL_ERROR' => 'Erreur de suppression d&rsquo;étiquette Fedex: ',
    'DEL_SUCCESS' => 'Suppression d&rsquo;étiquette d&rsquo;expédition de Fedex avec succès. Suivi N° ',
    'TRACK_ERROR' => 'Erreur de suivi de colis FedEx: ',
    'TRACK_SUCCESS' => 'Suivi du colis avec succès en référence avec le N°',
    'track_status' => 'Le colis référence: %s n&rsquo;est pas livrée, l&rsquo;état est: (Code %s) %s.',
    'TRACK_FAIL' => 'Le numéro de référence de package suivant a été livré après la date/heure prévue: ',
    'CLOSE_SUCCESS' => 'Fermé les expéditions Fedex avec succès pour aujourd&rsquo;hui.',
    'err_address_val_country' => 'L&rsquo;outil de validation d&rsquo;adresse Fedex fonctionne uniquement dans les É.-U.',
    // Label manager
    'error_postal_code' => 'Le code postal est requis pour utiliser le module de Fedex',
   ];
