<?php
/*
 * Langue de traduction pour le module
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
 * @filesource /locale/fr_CA/module/payment/language.php
 */

$lang = [
    	'title' => 'Paiement',
    	'description' => 'Le module de paiement est une solution globale pour les méthodes de paiement configurables par l&rsquo;utilisateur. Certaines méthodes sont incluses avec le forfait de base et d&rsquo;autres sont disponibles en téléchargement sur le site web PhreeSoft. <b>NOTE: Ceci est un module de base et ne peut pas être retiré!</b>',
    	'payment_settings_discount_gl' => 'Compte GL par défaut à utiliser pour les remises pour ce mode de paiement.',
	'payment_settings_deposit_prefix' => 'Préfixe par défaut à utiliser pour les bordereaux de dépôt.',
    // Settings
	'set_gl_payment_c' => 'Compte GL par défaut à utiliser pour recevoir les paiements des clients. Généralement un compte de type Actif.',
	'set_gl_discount_c' => 'Compte GL par défaut à utiliser pour recevoir les paiements anticipés et des remises sur ventes par les clients. Généralement un compte de type Produits.',
	'set_gl_payment_v' => 'Compte GL par défaut à utiliser pour le paiement aux fournisseurs. Généralement un compte de type Passif.',
	'set_gl_discount_v' => 'Compte GL par défaut à utiliser pour les paiements anticipés et des remises sur achat aux fournisseurs. Généralement un compte de type Charges.',
	'set_prefix' => 'Préfixe par défaut pour les dépôts. Les dépôts ayant le même préfix sont regroupés et simplifie le rapprochement des comptes bancaires.',
    // Error Messages
	'err_payment_dup' => 'Ce paiement a déjà été traitée, la resoumission à la passerelle à été ignoré!',
    // AVS Codes
    'AVS_A' => 'Correspondance d&rsquo;adresse - Le code postal ne correspond pas.',
	'AVS_B' => 'Correspondance d&rsquo;adresse, le code postal en format incorrect. (Émetteur international)',
	'AVS_C' => 'L&rsquo;adresse et le code postal dans des formats incorrects.',
	'AVS_D' => 'L&rsquo;adresse et le code postal correspondent. (Émetteur international)',
	'AVS_E' => 'Erreur du SVA (Système de vérification d&rsquo;adresse).',
	'AVS_G' => 'Service non pris en charge par des non-US émetteur.',
	'AVS_I' => 'Information d&rsquo;adresse n&rsquo;a pas été vérifiée par émetteur international.',
	'AVS_M' => 'L&rsquo;adresse et le code postal correspondent. (Émetteur international)',
	'AVS_N' => 'Pas de correspondance avec l&rsquo;adresse (rue) ou code postal.',
	'AVS_O' => 'Aucune réponse envoyée.',
	'AVS_P' => 'Le code postal correspond à l&rsquo;adresse de rue qui n&rsquo;a pas été vérifiée en raison de formats incompatibles.',
	'AVS_R' => 'Réessayer, le système n&rsquo;est pas disponible ou expiré.',
	'AVS_S' => 'Service non pris en charge par l&rsquo;émetteur.',
	'AVS_U' => 'Information d&rsquo;adresse n&rsquo;est pas disponible.',
	'AVS_W' => 'Les 9 chiffres du code postal correspondent, mais l&rsquo;adresse (rue) ne correspond pas.',
	'AVS_X' => 'Le SVA corespond parfaitement.',
	'AVS_Y' => 'L&rsquo;adresse (rue) et 5 chiffres du code postal correspondent.',
	'AVS_Z' => 'Les 5 chiffres du code postal correspond, mais l&rsquo;adresse (rue) ne correspond pas.',
    // CCV Codes
	'CVV_M' => 'CVV2 correspond',
	'CVV_N' => 'CVV2 ne correspond pas',
	'CVV_P' => 'Non traité',
	'CVV_S' => 'L&rsquo;émetteur indique que les données CVV2 doivent être présentes sur la carte, mais le commerçant a indiqué que les données CVV2 ne sont pas présentes sur la carte.',
	'CVV_U' => 'L&rsquo;émetteur n&rsquo;a pas certifié le CVV2 ou l&rsquo;émetteur n&rsquo;a pas fourni de Visa avec les clés de chiffrement CVV2.',
    ];
