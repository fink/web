<?
$title = "Home";
$cvs_author = '$Author: dmalloc $';
$cvs_date = '$Date: 2004/08/27 18:14:36 $';
$is_home = 1;

$metatags = '<meta name="description" content="Fink, eine Distribution von Unix Software für den Mac OS X und Darwin">
<meta name="keywords" content="Mac OS X, Darwin, GNU, Unix, GNOME, KDE, software, distribution, Fink">
';

include "header.inc";
?>

<!-- Remove leading // to activate custom variables -->
<script language="Javascript">
//var DOCUMENTGROUP='';
var DOCUMENTNAME='de_Front';
//var ACTION='';
</script>
<!-- End of Customization Code -->
<!-- Tracking Code v3.01 - All rights reserved -->
<script language="javascript1.1" src="http://fink.sourceforge.net/tracking.js"></script>
<noscript>
<img src="http://statistics.dynamicsitestats.com/p.pl?a=1000998514042&js=no" width="1" height="1">
</noscript><!--//-->
<!-- End of Tracking Code -->

<p>
Fink hat es sich zur Aufgabe gemacht, ein System zur Verfügung zu stellen, das es einfach macht,
<a href="http://www.opensource.org/">Open Source</a> Software auf
<a href="http://www.opensource.apple.com/">Darwin</a> und
<a href="http://www.apple.com/macosx/">Mac OS X</a> zu verwalten und zu installieren. 
Hierzu kommen bekannte <a href="http://www.debian.org/">Debian</a> Tools wie dpkg und apt-get zum Einsatz. 
Die freiwilligen Mitarbeiter dieses Projektes kümmern sich auch um die Anpassung von Software, so daß diese ohne Probleme auf Mac OS X nutzbar wird. 
Dabei überlassen wir es dem Nutzer, ob er die Software selber kompiliert oder schon fertige Pakete installiert. 
<a href="about.php">Mehr zum Thema...</a>

</p>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr valign="top"><td width="50%">

<h1>News</h1>

<?
// Include news items
include $fsroot."news/news.de.inc";
?>
<div align="right"><a href="<? print $root; ?>news/index.php">Ältere News...</a></div>


</td><td>&nbsp;&nbsp;&nbsp;</td><td width="50%">

<h1>Status</h1>
<? 
include "fink_version.inc";
?>

<p>
Fink 0.6.3 (für OS X 10.2) und Fink <? print $fink_version ?> wurden am <? print $release_date ?> veröffentlicht.  
Diese Versionen beinhalten Source- und vorkompilierte Pakete, sowie ein Installationsprogramm.
</p>

<h1>Ressourcen</h1>

<p>
Wie Sie Hilfe bekommen, aber auch selbst helfen können, erfahren Sie auf unserer <a
href="help/index.php">Hilfe-Seite</a>.
</p>

<p>
Das Fink-Projekt wird von 
<a href="http://sourceforge.net/">SourceForge</a> unterstützt.
Von SourceForge werden uns eine Reihe Dienste zur Verfügung gestellt.
</p>
<ul>
<li><a href="http://sourceforge.net/projects/fink/">SourceForge Projekt Übersicht</a></li>
<li><a
href="http://sourceforge.net/tracker/?atid=117203&amp;group_id=17203">Bugs anschauen oder mitteilen.</a></li>
<li><a
href="http://sourceforge.net/tracker/?atid=371315&amp;group_id=17203">Eine bestimmte Software fehlt?</a></li>
<li><a
href="http://sourceforge.net/tracker/?atid=367203&amp;group_id=17203">Funktionalität fehlt?</a></li>
<li><a
href="http://sourceforge.net/tracker/?atid=414256&amp;group_id=17203">Ein neues Fink-Paket abgeben</a></li>
<li><a
href="http://sourceforge.net/tracker/?atid=317203&amp;group_id=17203">Einen Patch für fink (das Programm) abgeben</a></li>
<li><a href="lists/index.php">Mailing Listen</a></li>
<li>CVS (<a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/fink">online lesen
</a>, <a href="doc/cvsaccess/index.php">Zugangsdaten</a>)</li>
</ul>
<p>
Um uns Bugs zu melden oder manche der anderen Dienste nutzen zu können, brauchen Sie eine Mitgliedschaft bei <a href="http://sourceforge.net/">SourceForge</a>. Diese ist kostenlos und sobald Sie sich angemeldet haben, können Sie schon loslegen. Wir freu
en uns auf Ihre Mitarbeit!
</p>

</td></tr></table>

<script type="text/javascript" language="JavaScript" src="http://db3.net-filter.com/script/13500.js"></script>
<noscript><img src="http://db3.net-filter.com/db.php?id=13500&amp;page=unknown" alt=""></noscript>

<?
include "footer.inc";
?>
