<?php
/* Translated file created by toolXlate on 2020-09-12 for iso code: nl_NL */
$lang = [
	'note_inventory_install_1' => 'PRIORITY MEDIUM: Standaard grootboekrekeningen instellen voor voorraadtypen, na het laden van GB-rekeningen (Mijn bedrijf -> Instellingen -> Bizuno-tabblad -> Voorraad (instellingen)',
	'msg_inv_median' => 'Controleer maandelijks gebruik, mediaanwaarde (%s) is buiten bereik tot gemiddelde omzet ( %s).',
	'msg_no_price_sheets' => '<b>Opmerking: </b> er zijn geen prijslijsten geselecteerd om te maken / bewerken. Druk op het pictogram Nieuw op de werkbalk Beheer om een ​​nieuw prijsoverzicht te maken of een bestaand prijsoverzicht te bewerken.',
	'invapi_export' => 'OPTIONEEL: exporteer uw voorraad database tabel in .csv-indeling voor back-up =>',
	'invapi_template' => 'Stap 1: Download de inventarisatiesjabloon =>',
	'invapi_import' => 'Stap 2: Voeg uw voorraad toe aan de sjabloon, blader om het bestand te selecteren en druk op Importeren.',
	'inv_tools_price_assy_desc' => 'Herbereken de kosten van alle assemblages en seriële assemblages op basis van de stuklijst en hun huidige artikelkosten. Herhaalt alle items en werkt de database van het assembly-item bij.',
	'invapi_desc' => 'De voorraad-API ondersteunt momenteel de basisinventaristabel voor zowel invoegingen als updates. Extra aangepaste velden worden ondersteund. Om een ​​inventarisbestand te importeren: <br> 1. Download de inventarisatiesjabloon met de veldkoppen en beschrijvingen. <br> 2. Voeg uw gegevens toe aan uw .csv-bestand. <br> 3. Selecteer het bestand en druk op het importpictogram. <br> De resultaten worden weergegeven nadat het script is voltooid. Eventuele fouten worden ook weergegeven.',
	'inv_tools_btn_so_po_fix' => 'Begin met testen en repareren',
	'inv_tools_so_po_result' => 'Voltooide controle voorraad mbt orderhoeveelheden zonder fouten.',
	'inv_tools_price_assy' => 'Herbereken de kosten van samenstellingen',
	'inv_tools_repair_so_po' => 'Voorraadhoeveelheid testen en repareren op bestelwaarden',
	'inv_tools_balance_corrected' => 'SKU: %s -> De aanwezige voorraad is gewijzigd in %s.',
	'inv_tools_validate_so_po_desc' => 'Deze bewerking test om ervoor te zorgen dat uw voorraadhoeveelheid op inkooporder en het aantal verkooporders overeenkomt met de journaalboekingen. De berekende waarden uit de journaalboekingen overschrijven de waarde in de voorraadtabel.',
	'inv_tools_in_balance' => 'Uw voorraad balans is in orde.',
	'inv_tools_stock_rounding_error' => 'SKU: %s -> Voorraad geeft %s op voorraad aan, maar is minder dan uw nauwkeurigheid. Repareer alstublieft uw voorraadbalansi, de voorraad zal worden afgerond naar %s.',
	'inv_tools_out_of_balance' => 'SKU: %s -> voorraad geeft %s op voorraad, maar COGS-geschiedenislijst geeft %s beschikbaar',
	'inv_tools_qty_alloc_label' => 'Synchroniseer Voorraad aantallen op Toewijzing',
	'inv_tools_btn_test' => 'Controleer voorraad balans',
	'inv_tools_btn_repair' => 'Sync aantal op voorraad',
	'inv_tools_qty_alloc_desc' => 'Met deze tool wordt de voorraadhoeveelheid op toewijzingswaarden gesynchroniseerd met journaalboekingen van open activiteiten.',
	'inv_tools_qty_alloc' => 'Voorraadtoewijzing',
	'inv_tools_repair_test' => 'Test inventarisbalansen met COGS geschiedenis',
	'inv_tools_repair_fix' => 'Herstel voorraadbalansen met COGS geschiedenis',
	'err_inv_assy_low_list' => '(%s) %s: Voorraad: %s, %s zijn nodig.',
	'inv_tools_val_inv' => 'Valideren weergegeven inventaris voorraad',
	'inv_tools_val_inv_desc' => 'Deze bewerking test om ervoor te zorgen dat uw voorraadhoeveelheden in de voorraaddatabase en weergegeven in de inventarisschermen dezelfde zijn als de hoeveelheden in de inventarisgeschiedenisdatabase zoals berekend door PhreeBooks wanneer voorraadbewegingen optreden. De enige geteste items zijn die worden gevolgd in de kosten van verkochte goederen berekening. Het herstellen van voorraadsaldi corrigeert de hoeveelheid in voorraad en laat de voorraadgeschiedenisgegevens met rust.',
	'err_inv_assy_error' => 'Of dit is geen assembly of nee, er zitten geen onderdelen in deze assembly!',
	'err_inv_assy_low_stock' => 'Er zijn niet genoeg onderdelen om %s van deze SKU te bouwen!',
	'err_inv_sku_blank' => 'Het SKU-veld is verplicht!',
	'err_inv_delete_gl_entry' => 'Het voorraaditem kan niet worden verwijderd als er journaalboekingen aan zijn toegewezen. Of plaats de items die aan dit item zijn toegewezen opnieuw of stel het item inactief in.',
	'err_inv_delete_assy' => 'Het voorraaditem kan niet worden verwijderd omdat het deel uitmaakt van een assembly. Deze SKU moet uit de assembly worden verwijderd voordat deze kan worden verwijderd.',
	'msg_inv_qty_min' => 'Voorraadvoorraadniveaus moeten worden aangepast. Nieuwe minimumvoorraad = %s',
	'msg_inventory_sku_usage' => 'Deze SKU maakt deel uit van de volgende assemblages:',
	'msg_inventory_assy_cost' => 'De huidige kosten voor het samenstellen van deze sku zijn: %s',
	'msg_inv_assy_stock_good' => 'Er zijn genoeg onderdelen om deze sku te bouwen!',
	'inv_hst_cst' => 'Gemiddelde kosten',
	'msg_sku_entry_copy' => 'Voer een SKU in die uit deze record moet worden gemaakt:',
	'msg_sku_entry_rename' => 'Voer een nieuwe SKU in voor dit record:',
	'inv_hst_val' => 'Fact Waarde',
	'inv_hst_qty' => 'Vrd Aantal',
	'rnd_value' => 'Afr. waarde',
	'adj_value' => 'Aanp waarde',
	'12month' => '12  maanden gemiddeld',
	'06month' => '6 maanden gemiddeld',
	'03month' => '3 maanden gemiddeld',
	'01month' => '1 maand gemiddeld',
	'store_stock' => 'Winkelvoorraad',
	'inv_sales_' => 'Standaard grootboekrekening voor verkoop- / inkomstenactiviteiten voor voorraadtype:',
	'inv_inv_' => 'Standaard grootboekrekening voor inventaris / loonactiviteiten voor voorraadtype:',
	'inv_cogs_' => 'Standaard grootboekrekening voor verkoopkosten (COGS) voor voorraadtype:',
	'inv_meth_' => 'Standaardcalculatiemethode om te gebruiken voor voorraadtype:',
	'price_sheet_to_override' => 'Selecteer een prijslijst om toe te passen:',
	'inv_sales_lbl' => 'Verkoop GB Rekening:',
	'inv_inv_lbl' => 'Voorraad GB Rekening:',
	'inv_cogs_lbl' => 'Kosten GB Rekening',
	'inv_meth_lbl' => 'Kostprijs Methode:',
	'stock_usage_tip' => 'Deze functie berekent het gemiddelde en mediaan itemgebruik van de afgelopen 12 maanden en geeft de resultaten weer in een pop-up wanneer het voorraaditem wordt bewerkt.',
	'auto_cost_tip' => 'Indien ingesteld, worden de laatste bekende prijzen in de voorraaddatabase ingesteld wanneer (IO) inkooporders worden geboekt, (PR) Voorraaditems worden ontvangen. Met deze functie kunt u uw Eenheidskosten actueel houden met de nieuwste prijzen.',
	'allow_neg_stock_tip' => 'Ja - verkoop toestaan ​​van artikelen die niet op voorraad zijn. Nee - voldoende voorraad nodig om in het algemeen dagboek te plaatsen.',
	'auto_add_tip' => 'Ja - Schakel automatisch nieuwe items toevoegen aan voorraad in, het standaardtype is Voorraad Item. Nee - SKU\'s moeten in de voorraaddatabase bestaan ​​om in het grootboek te worden geplaatst.',
	'auto_cost_lbl' => 'Prijzen bijwerken',
	'allow_neg_stock_lbl' => 'Sta geen voorraad verkoop toe',
	'stock_usage_lbl' => 'Voorraad gebruik',
	'weight_uom_tip' => 'Standaard gewichtseenheid.',
	'dim_uom_tip' => 'Standaard maateenheid.',
	'tax_rate_id_c_tip' => 'Standaard BTW-tarief dat moet worden gebruikt voor alle voorraadartikelen voor Verkoop.',
	'tax_rate_id_v_tip' => 'Standaard btw-tarief dat moet worden gebruikt voor alle voorraadartikelen voor aankopen.',
	'tax_rate_id_c_lbl' => 'Verkoop Btw - Klanten',
	'auto_add_lbl' => 'Automatisch SKU toevoegen',
	'dim_uom_lbl' => 'Afmeting eenh.',
	'description' => 'De voorraadmodule beheert alle producten en services die worden gebruikt in de PhreeSoft Business Toolkit. <b> OPMERKING: dit is een kernmodule en kan niet worden verwijderd! </b>',
	'tax_rate_id_v_lbl' => 'Inkoop Btw - Leveranciers',
	'weight_uom_lbl' => 'Gewicht eenh.',
	'title' => 'Voorraad',
];
