<?
$title = "Installation - Upgrade from 0.1";
$cvs_author = 'Author: dmrrsn';
$cvs_date = 'Date: 2008/06/27 00:55:33';
$metatags = '<link rel="contents" href="install.php" title="Installation Contents"><link rel="prev" href="install-up02.php" title="Upgrading From Fink 0.2.x">';

include_once "header.inc";
?>

<h1>Installation - 5 Upgrading From Fink 0.1.x</h1>



<h2><a name="upgrade-01">5.1 Clean cut</a></h2>
<p>
There is no direct upgrade path from Fink 0.1.x to Fink 0.2.x, because
they use different methods for underlying package management (stow
vs. dpkg). The only way to upgrade is to do a complete reinstall. The
procedure is as follows:
</p>
<ul>
<li><p>
Save any changes you have made to configuration files etc.
</p></li>
<li><p>
Save a list of packages you had installed. Hint: Try
<code>ls /sw/var/fink-stamp</code>.
</p></li>
<li><p>
If you have the source tarballs still lying around in /sw/src and
don't want to download them again, move them to another directory.
</p></li>
<li><p>
Wipe out the /sw directory, i.e. <code>cd / ; rm -rf /sw</code>.
Do this as root if necessary.
</p></li>
<li><p>
Follow the procedures for a first time installation above.
</p></li>
<li><p>
When you're asked for an 'additional directory for downloaded
tarballs', enter the directory you moved the tarballs to.
</p></li>
<li><p>
Reinstall the packages you need.
</p></li>
</ul>




<? include_once "footer.inc"; ?>
