<?
$title = "F.A.Q. - Compiling (2)";
$cvs_author = 'Author: benh57';
$cvs_date = 'Date: 2002/12/09 21:30:03';

$metatags = '<link rel="contents" href="index.php" title="F.A.Q. Contents"><link rel="next" href="usage-general.php" title="Package Usage Problems - General"><link rel="prev" href="comp-general.php" title="Compile Problems - General">';

include "header.inc";
?>

<h1>F.A.Q. - 5 Compile Problems - Specific Packages</h1>



<a name="libgtop"><div class="question"><p><b>Q5.1: libgtop fails to build with errors involving sed.</b></p></div>
<div class="answer"><p><b>A:</b> This can happen if your login script (e.g. <tt><nobr>~/.cshrc</nobr></tt>) does something that writes to the terminal, e.g &quot;<tt><nobr>echo Hello</nobr></tt>&quot; or <tt><nobr>xttitle</nobr></tt>.  To get rid of the problem, the easy solution is to comment out the offending lines.</p><p>If you want to keep the echo, then you can do something like the following:</p><pre>
if ( $?prompt) then
echo Hello
endif
</pre></div></a>

<a name="cant-install-xfree"><div class="question"><p><b>Q5.2: I want to switch to fink's xfree86 packages, but I can't install xfree86-base, because it conflicts with system-xfree86.</b></p></div>
<div class="answer"><p><b>A:</b> XFree86, unfortunately, really needs to be installed in /usr/X11R6.  Because of this the fink <tt><nobr>xfree86-base</nobr></tt> and <tt><nobr>xfree86-rootless</nobr></tt> packages install there, too.  However, since fink won't remove any files that aren't in its database, it won't automatically replace a non-fink installation of XFree86.</p><p><b>Here's how to proceed:</b></p><p>1. Uninstall <tt><nobr>xaw3d</nobr></tt> and <tt><nobr>xaw3d-shlibs</nobr></tt> if you installed them with fink, and their version is 1.5-4 or earlier, because they also install in /usr/X11R6 (this is no longer the case for 1.5-5 and later versions).</p><p>2. Remove <tt><nobr>system-xfree86</nobr></tt>.  If you don't have any packages that depend on X11, this is straightforward.  Frequently, however, many packages that depend on X11 are installed.  Rather than uninstalling all of them, you can use</p><p><tt><nobr>sudo dpkg --remove --force-depends system-xfree86</nobr></tt></p><p>to remove it, leaving everything in place.  If you don't have <tt><nobr>system-xfree86</nobr></tt> installed then proceed to step 3.</p><p>3. Manually remove all of XFree86.  This can be done with</p><p><tt><nobr>sudo rm -rf /Applications/XDarwin.app /usr/X11R6 /etc/X11</nobr></tt></p><p>4. Install fink's <tt><nobr>xfree86-base</nobr></tt> and <tt><nobr>xfree86-rootless</nobr></tt> by the usual means:  &quot;<tt><nobr>fink install</nobr></tt>&quot; for source users, &quot;<tt><nobr>apt-get install</nobr></tt>&quot; or <tt><nobr>dselect</nobr></tt> for binaries (binary not available on Jaguar as of this writing).</p><p>5. If you had <tt><nobr>xaw3d</nobr></tt> and <tt><nobr>xaw3d-shlibs</nobr></tt> installed originally, then reinstall them (since some other package on your system likely depends on them).  If by some chance you installed them through other means than fink, install the fink packages.</p></div></a>

<a name="change-thread-nothread"><div class="question"><p><b>Q5.3: How do I change from the non-threaded version of fink to the threaded version (or vice-versa)?</b></p></div>
<div class="answer"><p><b>A:</b> If you are running the fink version of XFree86 and you want to switch between the threaded and non-threaded versions of fink, you need to manually remove the old version. This is done at the command-line with the commands:</p><pre>
sudo dpkg -r --force-depends xfree86-base
sudo dpkg -r --force-depends xfree86-shlibs
sudo dpkg -r --force-depends xfree86-rootless
sudo dpkg -r --force-depends xfree86-rootless-shlibs
	</pre><p>or to delete the threaded versions:</p><pre>
sudo dpkg -r --force-depends xfree86-base-threaded
sudo dpkg -r --force-depends xfree86-shlibs-threaded
sudo dpkg -r --force-depends xfree86-rootless-threaded
sudo dpkg -r --force-depends xfree86-rootless-threaded-shlibs
	</pre><p>FinkCommander also has a way to remove packages. In the source window, select a package, and then in the <tt><nobr>Source Menu</nobr></tt> use &quot;<tt><nobr>Force Remove</nobr></tt>.&quot;</p><p>If you are using system-xfree86, see the previous question for removing it.</p><p>Install the version of xfree86 you want: </p><p><tt><nobr>xfree86-base</nobr></tt> and <tt><nobr>xfree86-rootless</nobr></tt></p><p><tt><nobr>xfree86-base-threaded</nobr></tt> and <tt><nobr>xfree86-rootless-threaded</nobr></tt></p><p>by the usual means: &quot;<tt><nobr>fink install</nobr></tt>&quot; for source users, &quot;<tt><nobr>apt-get install</nobr></tt>&quot; or <tt><nobr>dselect</nobr></tt> for binaries.</p></div></a>

<p align="right">
Next: <a href="usage-general.php">6 Package Usage Problems - General</a></p>


<?
include "footer.inc";
?>

