<?
$title = "Documentation";
$cvs_author = '$Author: chrisp $';
$cvs_date = '$Date: 2001/11/04 19:15:12 $';

include "header.inc";
?>


<h1>Fink Documentation</h1>

<p>
This is a collection of various documents written for Fink.
Some of the documents may also be useful to people who use Mac OS X
or Darwin without Fink and want to learn about porting Unix software.
</p>

<h2>User Documentation</h2>

<p>
The current user documentation for Fink:
</p>
<ul>
<li><a href="users-guide/index.php">Fink User's Guide</a> -
this covers installing Fink itself, installing packages, and upgrading
to a new Fink release. It contains instructions for both the source
and the binary release.
<b>Work in Progress!</b></li>
<li><a href="x11/index.php">Running X11 on Darwin and Mac OS X</a> -
covers concepts, installation and launching (also intended for Darwin
and Mac OS X users in general)</li>
</ul>

<p>
A bunch of documents that are more complete, but slightly outdated and
no longer maintained:
</p>
<ul>
<li><a href="bundled/install.php">Installation and Upgrading</a> - how
to install Fink or upgrade to a new version</li>
<li><a href="bundled/usage.php">Usage</a> - how to use Fink
and the installed software</li>
<li><a href="bundled/readme.php">Fink ReadMe</a> - the ReadMe for the
source distribution</li>
<li><a href="cvsaccess/index.php">CVS Access</a> - how to access the
Fink CVS repository to get the latest source packages between
releases</li>
</ul>

<h2>Developer Documentation</h2>

<ul>
<li><a href="porting/index.php">Porting Tips</a> - notes for porting
Unix applications to Darwin</li>
<li><a href="packaging/index.php">Packaging Manual</a> - how to create and
maintain Fink packages</li>
</ul>


<?
include "footer.inc";
?>
