<?php
$title = "Package Database - Help Needed";
$cvs_author = '$Author: rangerrick $';
$cvs_date = '$Date: 2007/12/07 14:50:32 $';

$have_key = isset($maintainer);

include_once "header.inc";
?>

<h1>Packages in Testing</h1>

<p>
Help is needed for testing packages with a version in
unstable that is newer than the version in stable.
The list is based on the latest <a
href="<?= $linkroot ?>doc/cvsaccess/index.php">packages from CVS</a>.
</p>

<p>
<a
href="<?= $pdbroot ?>browse.php?tree=testing&nochildren=on">
Browse the full list
</a> of packages that need testing.
</p>

<h1>Packages without Maintainer</h1>

<p>
Help is also needed for packages without an active maintainer.
</p>

<p>
<a
href="<?= $pdbroot ?>browse.php?maintainer=None&nochildren=on">
Browse the full list
</a> of packages without maintainer.
</p>

<?php
include_once "footer.inc";
?>
