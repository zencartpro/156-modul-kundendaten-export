<?php
/**
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: export_customerdata.php 2019-06-27 17:05:14Z webchills $
 */
define('BOX_TOOLS_EXPORT_CUSTOMERDATA', 'Kundendatenexport');
define('EXPORT_CUSTOMERDATA_HEADING', 'Kundendaten im csv Format exportieren - Version 1.4.0');
define('TEXT_EXPORT_CUSTOMERDATA_OVERVIEW', 'Dieses Tool exportiert die aktuellen Kundendaten in eine csv Datei zur Übersicht oder Bearbeitung in Microsoft Excel oder Open Office.<br/>Generiert wird eine csv Datei mit Trennzeichen Komma.<br/>Exportiert werden:<ul><li>Vorname</li><li>Nachname</li><li>Emailadresse</li><li>Firma</li><li>Strasse</li><li>Adresszeile 2</li><li>Postleitzahl</li><li>Ort</li><li>Land</li><li>Telefonnummer</li></ul>Klicken Sie auf den Download Button, um eine csv Datei aus dem aktuellen Datenbestand zu erzeugen und herunterzuladen:<br/>');
define('TEXT_EXPORT_CUSTOMERDATA_INFO', '<b>Hinweis:</b><br/>Sollten Sie in Microsoft Excel die Umlaute und/oder die Spaltenzuordnungen nicht korrekt angezeigt bekommen, dann gehen Sie folgendermassen vor:<br/>Excel öffnen<br/>>> Menü Daten >> aus Text<br/>>> Heruntergeladene Datei kundendaten.csv auswählen<br/>>> Es startet der Textkonvertierungsassistent<br/>>>Dateiursprung: Umstellen auf: Unicode (UTF-8)<br/>>> Trennzeichen: Umstellen auf: Komma<br/>>> Fertig stellen<br/><br/>Alternativ verwenden Sie doch einfach das kostenlose OpenOffice und wählen beim Öffnen als Codierung utf-8 aus.<br/>kostenloser Download von Open Office auf: <br/><a href="http://de.openoffice.org" target="_blank">http://de.openoffice.org</a>');