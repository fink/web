                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                86-base-threaded</code> and <code>xfree86-rootless-threaded</code>
</p><p>by the usual means: "<code>fink install</code>" for source users, "<code>apt-get install</code>" or <code>dselect</code> for binaries.</p></div>
</a>
<a name="apple-x11">
<div class="question"><p><b>Q6.4: I've installed the Apple X11 package, but system-xfree86 won't install.</b></p></div>
<div class="answer"><p><b>A:</b> If you get error messages like the following:</p><pre>- missing /usr/X11R6/lib/libX11.dylib
- missing /usr/X11R6/lib/libXpm.dylib
- missing /usr/X11R6/lib/libXaw.dylib
- missing /usr/X11R6/include/X11/Xlib.h

Your XFree86 installation is missing or incomplete. Please make sure you have
an XFree86 release installed and retry the installation of the system-xfree86
package.
</pre><p>then you need to install the SDK package as well as the User package. The SDK is available from <a href="http://www.apple.com/macosx/x11/download/">the Apple X11 downoad page</a> (the link is in a box at the lower right corner labeled <b>X11 for Mac OS X Public Beta SDK</b>).</p><p>If, on the other hand, you get the following message:</p><pre>An error occurred trying to find your XFree86 installation's
version.  This really shouldn't happen, so I'm bailing.  :(</pre><p>then you need to update your package descriptions and install a newer version of system-xfree86.  If you are installing Apple X11 Beta 3, then you will need <code>system-xfree86-4.2-11</code> or later.</p></div>
</a>
<a name="cctools">
<div class="question"><p><b>Q6.5: "When I try to install KDE, I get the following message:  'Can't resolve dependency "cctools (&gt;= 446-1)"'</b></p></div>
<div class="answer"><p><b>A:</b> This somewhat cryptic message means you need to install the December 2002 Developer Tools (but not the <code>gcc 3.3</code> update).</p></div>
</a>
<a name="system-xfree86-upgrade">
<div class="question"><p><b>Q6.6: I can't update system-xfree86, because of a conflict with x11.</b></p></div>
<div class="answer"><p><b>A:</b> This problem has come about because of changes needed to allow for externally installed XFree86-4.3 .  Originally,  <code>system-xfree86</code> provided the <code>x11</code> virtual package when an externally installed XFree86 was present.  Because it only worked for XFree86-4.2, it was decided to have two separate packages:</p><ul>
<li>
<code>system-xfree86-42</code>, for XFree86 4.2.x and Apple X11 beta 3</li>
<li>
<code>system-xfree86-43</code>, for XFree86 4.3.x and Apple X11 1.0</li>
</ul><p>Either of these will provide <code>x11</code>.  <code>System-xfree86</code> is now a bundle that installs the appropriate one of the above packages, depending on the version of XFree86 / Apple X11 that is installed.  Unfortunately, switching the provider of a virtual package is sufficiently complicated that the automatic upgrade procedure can't deal with it (currently).  Do an additional <code>selfupdate-cvs</code> to get the latest version of the package:  <b>1.0-2</b> as of this writing.  Then try to update again. </p></div>
</a>
<p align="right">
Next: <a href="usage-general.php">7 Package Usage Problems - General</a></p>


<?
include "footer.inc";
?>

