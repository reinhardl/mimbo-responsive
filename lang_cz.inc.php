<?php

/**
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/08/14
 */@define('MIMBO_INSTR','<b>Pozn�mka:</b> �ablona podporuje - pouze na v�choz� str�nce - jeden doprovodn� obr�zek ke ka�d�mu p��sp�vku. Aby tato funkce spr�vn� pracovala, mus� b�t nainstalov�n plugin serendipity <i>Roz���en� vlastnosti p��sp�vk�</i>. V nastaven� tohoto pluginu mus� b�t vytvo�eno pole MimboImage (pozor na velk� p�smena!) v nastaven� <i>Vlastn� pole</i>. P�i psan� nov�ho p��sp�vku pak m��e b�t p��sp�vku p�i�azen obr�zek z knihovny m�di� pomoc� volby <i>Roz���en� mo�nosti</i>. Doporu�en� ���ka t�chto obr�zk� z�le�� na kategorii Mimbo category (viz n�e), do kter� n�le�� p��sp�vek.<br /><br /><b>Kategorie Mimbo:</b> �ablona Mimbo zobrazuje p��sp�vky na v�choz� str�nce ve t�ech oblastech. Pou�ijte n�sleduj�c� rozbalovac� tla��tka k p�i�azen� serendipity kategori� k t�mto Mimbo kategori�m. Hlavn� kategorie bude zobrazovat nejnov�j�� p��sp�vky (doporu�en� ���ka doprovodn�ho obr�zku: max 270 pixel�). Kategorie "features" zobrazuje odkazy na t�i jej� nejnov�j�� p��sp�vky (doporu�en� ���ka doprovodn�ho obr�zku: max 255 pixel�). A nakonec m��ete vybrat a� t�i kategorie s novinkami. Ka�d� z nich bude zobrazovat nejnov�j�� p��sp�vky jako zkr�cen� l�kac� �l�nek (doporu�en� ���ka doprovodn�ho obr�zku: max 60 pixel�).<br /><br />');
@define('MIMBO_CAT_LEAD','Vyberte hlavn� kategorii');
@define('MIMBO_CAT_FEAT','Vyberte kategorii "features"');
@define('MIMBO_CAT_X1','Vyberte prvn� kategorii novinek');
@define('MIMBO_CAT_X2','Vyberte druhou kategorii novinek');
@define('MIMBO_CAT_X3','Vyberte t�et� kategorii novinek');
@define('NAVLINK_AMOUNT', 'Zadejte po�et naviga�n�ch odkaz� do naviga�nho pruhu (po zm�n� t�to hodnoty je t�eba znovu na��st tuto str�nku "Spr�va stylu")');
@define('NAV_LINK_TEXT', 'Odkaz v naviga�n�m pruhu');
@define('NAV_LINK_URL', 'URL adresa odkazu');