<?
$title = "User's Guide";
$cvs_author = 'Author: alexkhansen';
$cvs_date = 'Date: 2003/07/06 00:04:23';

$metatags = '<link rel="contents" href="index.php" title="User\'s Guide Contents"><link rel="next" href="intro.php" title="Introduction">';

include "header.inc";
?>

<h1>Fink User's Guide</h1>
<p>
<b>This document is a work in progress.</b>
The following older documents may offer a broader view:
<a href="http://fink.sourceforge.net/doc/bundled/install.php">Installation</a>,
<a href="http://fink.sourceforge.net/doc/bundled/usage.php">Usage</a>
and the ReadMe.rtf included in the binary distribution disk image.
Also check out the
<a href="http://fink.sourceforge.net/doc/">documentation
section</a> of the web site, it has some other useful documents
beyond that.
</p>
<p>
Welcome to the Fink User's Guide.
This guide covers first time installation and upgrade procedures for
both the source and the binary distribution.
Package installation and maintenance is covered as well.
</p>
<h2>Contents</h2><ul>
<li><a href="intro.php"><b>1 Introduction</b></a></li>
<ul>
<li><a href="intro.php#what">1.1 What is Fink?</a></li>
<li><a href="intro.php#req">1.2 Requirements</a></li>
<li><a href="intro.php#supported-os">1.3 Supported Systems</a></li>
<li><a href="intro.php#src-vs-bin">1.4 Source vs. Binary</a></li>
</ul>
<li><a href="install.php"><b>2 First Time Installation</b></a></li>
<ul>
<li><a href="install.php#bin">2.1 Installing the Binary Distribution</a></li>
<li><a href="install.php#src">2.2 Installing the Source Distribution</a></li>
<li><a href="install.php#setup">2.3 Setting Up Your Environment</a></li>
</ul>
<li><a href="packages.php"><b>3 Installing Packages</b></a></li>
<ul>
<li><a href="packages.php#x11">3.1 Getting X11 Sorted Out</a></li>
<li><a href="packages.php#bin-dselect">3.2 Installing Binary Packages with
dselect</a></li>
<li><a href="packages.php#bin-apt">3.3 Installing Binary Packages with
apt-get</a></li>
<li><a href="packages.php#bin-exceptions">3.4 Installing Dependent Packages that are Unvailable in the Binary Distribution</a></li>
<li><a href="packages.php#src">3.5 Installing Packages from Source</a></li>
<li><a href="packages.php#">3.6 Available versions</a></li>
</ul>
<li><a href="upgrade.php"><b>4 Upgrading Fink</b></a></li>
<ul>
<li><a href="upgrade.php#bin">4.1 Upgrading using Binary Packages</a></li>
<li><a href="upgrade.php#src">4.2 Upgrading the Source Distribution</a></li>
<li><a href="upgrade.php#mix">4.3 Mixing Binaries and Source</a></li>
</ul>
<li><a href="conf.php"><b>5 The Fink Configuration File</b></a></li>
<ul>
<li><a href="conf.php#about">5.1 About fink.conf</a></li>
<li><a href="conf.php#syntax">5.2 fink.conf syntax</a></li>
<li><a href="conf.php#required">5.3 Required Settings</a></li>
<li><a href="conf.php#optional">5.4 Optional User Settings</a></li>
<li><a href="conf.php#downloding">5.5 Download Settings</a></li>
<li><a href="conf.php#mirrors">5.6 Mirror Settings</a></li>
<li><a href="conf.php#developer">5.7 Developer Settings</a></li>
</ul>
<li><a href="usage.php"><b>6 Controlling Fink from the command line</b></a></li>
<ul>
<li><a href="usage.php#using">6.1 Using Fink</a></li>
<li><a href="usage.php#install">6.2 install</a></li>
<li><a href="usage.php#remove">6.3 remove</a></li>
<li><a href="usage.php#update-all">6.4 update-all</a></li>
<li><a href="usage.php#list">6.5 list</a></li>
<li><a href="usage.php#apropos">6.6 apropos</a></li>
<li><a href="usage.php#describe">6.7 describe</a></li>
<li><a href="usage.php#fetch">6.8 fetch</a></li>
<li><a href="usage.php#fetch-all">6.9 fetch-all</a></li>
<li><a href="usage.php#fetch-missing">6.10 fetch-missing</a></li>
<li><a href="usage.php#build">6.11 build</a></li>
<li><a href="usage.php#rebuild">6.12 rebuild</a></li>
<li><a href="usage.php#reinstall">6.13 reinstall</a></li>
<li><a href="usage.php#configure">6.14 configure</a></li>
<li><a href="usage.php#selfupdate">6.15 selfupdate</a></li>
<li><a href="usage.php#index">6.16 index</a></li>
<li><a href="usage.php#validate">6.17 validate</a></li>
<li><a href="usage.php#scanpackages">6.18 scanpackages</a></li>
<li><a href="usage.php#checksums">6.19 checksums</a></li>
<li><a href="usage.php#cleanup">6.20 cleanup</a></li>
</ul>
</ul><p>Generated from <i>$Fink: uguide.xml,v 1.26 2003/07/06 00:04:23 alexkhansen Exp $</i></p>


<?
include "footer.inc";
?>

