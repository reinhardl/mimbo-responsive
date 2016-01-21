<?php
@define('MIMBO_INSTR','<b>Hinweis:</b> Das Mimbo-Template unterst�tzt - nur auf der Startseite - je ein begleitendes Bild zu einem Eintrag. Damit dieses Feature funktioniert, muss das s9y-Event-Plugin <i>Erweiterte Eigenschaften von Artikeln</i> installiert sein. Zus�tzlich m�ssen in der Konfiguration dieses Plugins unter <i>Freie Felder</i> zwei Felder namens MimboImage und MimboImageAlt (Gro�-/Kleinschreibung beachten!) angelegt werden. Dann kann beim Erstellen eines Eintrags diesem unter <i>Erweiterte Optionen</i> ein Bild aus der Mediendatenbank inklusive passendem alt-Text zugewiesen werden. Die empfohlene Gr��e f�r ein solches Bild h�ngt von der Mimbo-Kategorie (siehe unten) ab, welcher der betreffende Eintrag zugeordnet ist.<br /><br /><b>Mimbo-Kategorien:</b> Das Mimbo-Template stellt Eintr�ge auf der Startseite in drei Bereichen dar. Mit den folgenden Auswahllisten k�nnen diesen Mimbo-Kategorien s9y-Kategorien zugeordnet werden. Dabei wird aus der Lead-Kategorie (empfohlene Breite des begleitenden Bildes: maximal 270 Pixel) jeweils der aktuellste Eintrag angezeigt. Aus der Features-Kategorie (empfohlene Breite des begleitenden Bildes: maximal 255 Pixel) werden die drei aktuellsten Eintr�ge als Link angezeigt. Schlie�lich k�nnen drei News-Kategorien ausgew�hlt werden, aus denen jeweils der aktuellste Eintrag (empfohlene Breite des begleitenden Bildes: maximal 60 Pixel) als verk�rzter Teaser angezeigt wird.<br /><br />');
@define('MIMBO_CAT_LEAD','Lead-Kategorie ausw�hlen');
@define('MIMBO_CAT_FEAT','Features-Kategorie ausw�hlen');
@define('MIMBO_CAT_X1','1. News-Kategorie ausw�hlen');
@define('MIMBO_CAT_X2','2. News-Kategorie ausw�hlen');
@define('MIMBO_CAT_X3','3. News-Kategorie ausw�hlen');
@define('NAVLINK_AMOUNT', 'Anzahl der Links in der Navigationsleiste (Styles verwalten-Seite muss danach neu geladen werden; Link zur Startseite des Blogs wird automatisch eingef�gt)');
@define('NAV_LINK_TEXT', 'Text des Navigationsleisten-Links');
@define('NAV_LINK_URL', 'URL des Navigationsleisten-Links');
@define('SITENAV_LEFT','Links');
@define('SITENAV_RIGHT','Rechts');
@define('NAV_LINK_POS','Position im Men�');