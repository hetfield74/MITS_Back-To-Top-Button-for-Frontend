# MITS Back-To-Top-Button for Frontend für modified eCommerce Shopsoftware
(c) Copyright 2017 by Hetfield - MerZ IT-SerVice

- Author: 	Hetfield - https://www.merz-it-service.de
- Version: 	modified eCommerce Shopsoftware ab der Version 2.x

<hr />

Dieses Mini-Modul fügt im Shopfrontend einen "Scroll-To-Top"-Button ein, der beim Scrollen nach unten automatisch eingeblendet wird. 
So entfällt für den Shopbesucher das lästige Scrollen mit der Maus, wenn er wieder nach oben an den Anfang der Seite möchte.
<hr />

## Lizenzinformationen:

Diese Erweiterung ist unter der GNU/GPL lizensiert. Eine Kopie der Lizenz liegt diesem Modul bei 
oder kann unter der URL http://www.gnu.org/licenses/gpl-2.0.txt heruntergeladen werden. Die 
Copyrighthinweise müssen erhalten bleiben, bzw. mit eingebaut werden. Zuwiderhandlungen verstoßen 
gegen das Urheberrecht und die GPL und werden zivil- und strafrechtlich verfolgt!

<hr />

## Anleitung für das Modul MITS Back-To-Top-Button for Frontend

### Installation

Systemvoraussetzung: Funktionsfähige modified eCommerce Shopsoftware ab der Version 2.0.0.0 rev 9678

Vor der Installation des Moduls sichern sie bitte komplett ihre aktuelle Shopinstallation (Dateien und Datenbank)!
Für eventuelle Schäden übernehmen wir keine Haftung!
Die Installation und Nutzung des Moduls MITS Back-To-Top-Button for Frontend erfolgt auf eigene Gefahr!

Die Installation des Modul MITS Back-To-Top-Button for Frontend ist in der aktuellen Shopversion ab 2.x ziemlich einfach.

1. Kopieren Sie anschließend einfach alle Dateien in dem Verzeichnis _shoproot_ aus dem Modulpaket 
   MITS Back-To-Top-Button for Frontend in das Hauptverzeichnis ihrer bestehenden 
   modified eCommerce Shopsoftware 2.x Installation. Es werden dabei keine Dateien überschrieben!

2. FERTIG!

Optional: Stylesheet in das Template verlagern:

1. Löschen Sie NACH dem Hochladen des Moduls den Ordner _includes/external/mits_totop_ wieder.

2. Fügen Sie in die _stylesheet.css_ ihres Templates (z.B. _templates/tpl_modified_responsive/stylesheet.css_)
   folgendes an das Ende der Datei ein:

       /** BOF - MITS - Back To Top Button **/
       .mits_scrollicon{padding:0.4em;text-align:center;text-decoration:none;-moz-border-radius:0.2em;-webkit-border-radius:0.2em;border-radius:0.2em;position:fixed;bottom:5em;right:2em;display:none;border:0.1em solid #888;background-color:#fff !important;}
       .mits_scrollicon img{height:2em;width:2em;}
       .mits_scrollicon i{font-size:20px;color:#888}
       @media print{.mits_scrollicon{display:none !important}}
       /** EOF - MITS - Back To Top Button **/

3. FERTIG!

Das Icon zur "Nach oben"-Navigation sollte nun automatisch beim Scrollen nach unten in der unteren rechten Ecke
des Browserfensters auftauchen. Beim Klick darauf sollten Sie sofort wieder auf der Seite nach oben scrollen.

Zum Entfernen der Erweiterung einfach die Datei aus dem Paket wieder vom Webserver löschen.

<hr />

Wir hoffen, das Modul **MITS Back-To-Top-Button for Frontend** für die modified eCommerce Shopsoftware 2.x gefällt ihnen!
Benötigen sie Unterstützung bei der individuellen Anpassung des Moduls oder haben sie eventuell doch Probleme beim Einbau?
Gerne können sie unseren kostenpflichtigen Support in Anspruch nehmen.
Kontaktieren sie uns einfach unter <a href="https://www.merz-it-service.de/Kontakt.html">info(at)merz-it-service.de</a>

<hr />

<img src="https://www.merz-it-service.de/images/logo.png" alt="MerZ IT-SerVice" title="MerZ IT-SerVice" />

**MerZ IT-SerVice** Nicole Grewe - Am Berndebach 35a - D-57439 Attendorn
Telefon: 0 27 22 - 63 13 63 - Telefax: 0 27 22 - 63 14 00
E-Mail: <a href="https://www.merz-it-service.de/Kontakt.html">Info(at)MerZ-IT-SerVice.de</a> - Internet: <a href="https://www.merz-it-service.de">www.MerZ-IT-SerVice.de</a>

<hr />
