<?
$title = "Download";
$cvs_author = '$Author: chrisp $';
$cvs_date = '$Date: 2001/09/27 06:44:13 $';

include "header.inc";
?>


<h1>Download Fink</h1>

<h2>Source Release</h2>

<p>
The "source release" contains the fink package manager plus package
descriptions and patches.
It will download the source code from the original distribution sites
and build them on your local machine.
This is the native release of Fink; other distribution forms are
derived from it.
</p>

<p>
Fink 0.2.6 was released on 4 September 2001.
</p>
<ul>
<li><a
href="http://prdownloads.sourceforge.net/fink/fink-0.2.6-full.tar.gz">Fink
0.2.6</a> - 566K, .tar.gz format</li>
</ul>
<p>
<b>Important:</b>
Don't extract the archive with StuffIt, it will corrupt some file
names.
Use the command line <tt>tar</tt> utility instead.
Instructions are in the Installation document.
</p>

<p>
Installation and usage instructions are inside the distribution
tarball.
Please read them - Fink is not a one-click-and-done thing.
The documents README, INSTALL and USAGE are provided as pure text (for
reading from the command line) and as HTML (for reading in a browser
and for printing).
They are also available online in the <a
href="doc/index.php">documentation section</a>.
</p>
<p>
To be informed of new releases, subscribe to the <a
href="lists/fink-announce.php">fink-announce mailinglist</a>.
</p>


<h2>Binary Release</h2>

<p>
The "binary release" of Fink saves you the burden of compiling the
programs on your local machine.
After installing a base system using the installer package, you can
download pre-compiled binary packages from this site with the dselect
and apt-get tools.
</p>
<p>
Only a part of the packages are actually available as binary packages;
the others can only be built from source as with the source release.
The binary distribution is now up to date with the 0.2.6 source
release.
</p>
<ul>
<li><a href="bindist/install/fink-0.2.6-installer.dmg">Fink 0.2.6 Binary
Installer</a> - 6.4 MB, .dmg disk image</li>
<li><a href="bindist/">Browse the Distribution Directory</a> - here
you will find the binary packages and the corresponding source.</li>
</ul>
<p>
<b>Important:</b>
The binary distribution currently doesn't work on Mac OS X 10.1.
An updated installer will be posted this weekend.
</p>
<p>
Documentation is sparse at the moment.
The installer disk image contains some hints (Fink ReadMe.rtf), plus
the documentation from the source release in HTML (in the Other Docs
folder).
</p>

<h2>Old Stuff</h2>

<p>
Older releases are always available from the Fink <a
href="http://sourceforge.net/project/showfiles.php?group_id=17203">download
area</a> at SourceForge.
</p>


<?
include "footer.inc";
?>
