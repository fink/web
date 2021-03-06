<?
$title = "Package Database - Section Listing";
$cvs_author = '$Author: rangerrick $';
$cvs_date = '$Date: 2009/09/07 04:12:00 $';

include_once "header.inc";
include_once "sections.inc";
?>


<h1>Archive Sections</h1>

<p>
The package archive is divided into thematic sections.
That makes it easier to find the package you want.
Here are the sections:
</p>


<ul>
<?
foreach ($sections as $_name => $_description) {
	$_desctext = ($_description ? (' - ' . $_description) : '');
?>
<li><a href="<?= $pdbroot ?>browse.php?sec=<?= $_name ?>"><?= $_name ?></a><?= $_desctext ?></li>
<? } ?>
</ul>

<?
include_once "footer.inc";
?>
