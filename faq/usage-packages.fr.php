<?
$title = "Q.F.P. - Utilisation (2)";
$cvs_author = 'Author: michga';
$cvs_date = 'Date: 2004/05/29 14:34:11';
$metatags = '<link rel="contents" href="index.php?phpLang=fr" title="Q.F.P. Contents"><link rel="prev" href="usage-general.php?phpLang=fr" title="Problème généraux d\'utilisation de paquets">';

include_once "header.inc";
?>

<h1>Q.F.P. - 9 Problèmes d'utilisation spécifiques à certains paquets</h1>
    
    
    <a name="xmms-quiet">
      <div class="question"><p><b>Q9.1: Aucun son n'est disponible avec XMMS</b></p></div>
      <div class="answer"><p><b>A:</b> Vérifiez que vous avez sélectionné "eSound Output Plugin" dans les préférences de XMMS. Pour d'obscures raisons, c'est le plugin d'écriture sur le disque qui est sélectionné par défaut.</p><p>Si cela ne résout pas le problème ou si XMMS se plaint qu'il ne peut trouver votre carte son, essayez ceci :</p><ul>
          <li>Vérifiez que la sortie son n'est pas réglée sur silence dans Mac OS X.</li>
          <li>Lancez <code>esdcat /usr/libexec/config.guess</code> (ou choisissez n'importe quel autre fichier de taille significative). Si vous entendez un petit bruit, cela signifie que eSound fonctionne et que XMMS devrait fonctionner, lui aussi, à condition d'être configuré correctement. Si vous n'entendez rien, esd ne fonctionne pas pour une raison indéterminée. Vous pouvez tenter de le lancer manuellement via <code>esd &amp;</code>, puis analysez les messages.</li>
          <li>S'il ne fonctionne toujours pas, vérifiez les permissions de <code>/tmp/.esd</code> et <code>/tmp/.esd/socket</code>. Le possesseur doit être votre compte utilisateur. Si ce n'est pas le cas, tuez esd s'il est en cours de fonctionnement, supprimez le répertoire en tant que super-utilisateur (<code>sudo rm -rf /tmp/.esd</code>), puis redémarrez esd (en tant qu'utilisateur lambda, pas en tant que super-utilisateur).</li>
        </ul><p>Notez que esd est conçu pour être lancé par un utilisateur lambda, pas par le super-utilisateur. Il communique, en général, via la socket système <code>/tmp/.esd/socket</code>. Vous n'avez besoin des options <code>-tcp</code> et <code>-port</code> que si vous voulez lancer des clients esd sur une autre machine du réseau.</p><p>Certains personnes ont signalé que XMMS se plantait ou se bloquait sur 10.1. Il n'y a pas eu d'analyse ou de solution à ce phénomène à ce jour.</p></div>
    </a>
    <a name="nedit-window-locks">
      <div class="question"><p><b>Q9.2: Lors de la modification d'un fichier dans nedit, si l'on tente d'ouvrir un autre fichier, sa fenêtre apparaît mais elle ne répond pas.</b></p></div>
      <div class="answer"><p><b>A:</b> C'est un problème connu qui se produit avec des versions récentes de <code>nedit</code> et <code>lesstif</code> sur toutes les plates-formes. La solution est d'ouvrir une nouvelle fenêtre avec File--&gt;New, puis d'ouvrir le nouveau fichier sur lequel vous voulez travailler.</p><p>Ce problème est résolu dans la version <code>nedit-5.3-6</code>, qui dépend d'<code>openmotif3</code> et non plus de <code>lesstif</code>.</p></div>
    </a>
    <a name="xdarwin-start">
      <div class="question"><p><b>Q9.3: XDarwin quitte immédiatement après lancement.</b></p></div>
      <div class="answer"><p><b>A:</b> Pas de panique. Vous trouverez dans le document Utilisation de X11 une large section <a href="http://fink.sourceforge.net/doc/x11/trouble.php#immediate-quit">résolution de problèmes</a> à ce sujet.</p></div>
    </a>
    <a name="no-server">
      <div class="question"><p><b>Q9.4: Au démarrage de XDarwin, le message suivant apparaît : "xinit: No such file or directory (errno 2): no server "/usr/X11R6/bin/X" in PATH".</b></p></div>
      <div class="answer"><p><b>A:</b> Tout d'abord, vérifiez que vous sourcez init.sh dans le fichier de démarrage de X <code>~/.xinitrc</code>.</p><p>Sous Jaguar, il arrive parfois que tous les paquets <code>xfree86</code> soient compilés, mais que seuls les paquets <code>xfree86-base</code> et <code>xfree86-base-shlibs</code> soient installés. Vérifiez que les paquets <code>xfree86-rootless</code> et <code>xfree86-rootless-shlibs</code> sont installés. Si ce n'est pas le cas, lancez <code>fink install xfree86-rootless</code>. Cela devrait résoudre le problème.</p><p>Si ces paquets sont installés, essayez <code>fink rebuild xfree86-rootless</code>. Si cela ne marche pas, vérifiez que <code>/usr/bin/X11R6</code> est dans votre PATH.</p></div>
    </a>
    
    <a name="xterm-error">
      <div class="question"><p><b>Q9.5: Le lancement de xterm échoue avec le message suivant : "dyld: xterm Undefined symbols: xterm undefined reference to _tgetent expected to be defined in /usr/lib/libSystem.B.dylib".</b></p></div>
      <div class="answer"><p><b>A:</b> Cela se produit lorsque l'on utilise une version 10.1 de XFree86 sur 10.2. Vous devez passer à une version 10.2.</p><p>Si vous utilisez les paquets Fink <code>xfree86</code>, vous pouvez passer à une version plus récente de la façon habituelle ("<code>fink selfupdate-cvs ; fink update-all</code>" pour une installation à partir du source,  <code>fink selfupdate ; ; sudo apt-get update; sudo apt-get dist-upgrade</code>" pour une installation à partir des binaires.</p><p>Si vous avez installé XFree86 par d'autres moyens, vous trouverez les rustines qui vous permettront de faire la mise à jour sur le <a href="http://mrcla.com/XonX">site web de XonX</a>.</p></div>
    </a>
    <a name="libXmuu">
      <div class="question"><p><b>Q9.6: Au démarrage de XFree86, l'un des messages d'erreur suivants apparaît : "dyld: xinit can't open library: /usr/X11R6/lib/libXmuu.1.dylib" ou "dyld: xinit can't open library: /usr/X11R6/lib/libXext.6.dylib"</b></p></div>
      <div class="answer"><p><b>A:</b> Un fichier censé être installé par <code>xfree86-base-(threaded)-shlibs</code> manque. Vous devez l'installer via <code>fink reinstall xfree86-base-shlibs</code> (<code>fink reinstall xfree86-base-threaded-shlibs</code> si vous utilisez les paquets XFree86 avec gestion des processus légers) pour les utilisateurs des sources, ou <code>sudo apt-get install --reinstall xfree86-base-shlibs</code> pour les utilisateurs de binaires.</p></div>
    </a>
    <a name="apple-x-bugs">
      <div class="question"><p><b>Q9.7: Après installation de XFree86 et son remplacement par X11 d'Apple, tous les programmes se plantent.</b></p></div>
      <div class="answer"><p><b>A:</b> Premièrement, si vous aviez installé précédemment les versions "avec processus légers" (threaded) des paquets Fink XFree86, vous devez recompiler l'application qui se plante. Certains programmes vérifie la disponibilité des processus légers lors de la compilation et à partir de là supputent que les processus légers sont toujours disponibles.</p><p>Deuxièmement, il se peut que vous soyez tombé sur un bogue d'Apple X11. Au moment où cette page a été écrite, un certain nombre de bogues étaient connus d'Apple et en en cours de résolution.</p><p>Si vous vous posez des questions sur X11 d'Apple qui ne sont pas liées à Fink, voyez la <a href="http://www.lists.apple.com/x11-users">liste de discussion officielle d'Apple sur X11</a>. Il est aussi conseillé de soumettre les bogues découverts dans X11 via le <a href="http://developer.apple.com/bugreporter">moteur de rapport de bogues</a> d'Apple.</p></div>
    </a>
    <a name="apple-x-delete">
      <div class="question"><p><b>Q9.8: Comment avoir sous X11 d'Apple le même comportement de la touche suppr que sous XDarwin ?</b></p></div>
      <div class="answer"><p><b>A:</b> Certains utilisateurs ont signalé que la touche <code>suppr</code> se comporte différemment sous XDarwin et sous X11 d'Apple. On peut rectifier cela en ajoutant les lignes suivantes au fichier de démarrage approprié de X :</p><p>
          <b>.Xmodmap :</b>
        </p><pre>keycode 59 = Delete</pre><p>
          <b>.Xresources :</b>
        </p><pre>xterm*.deleteIsDEL: true 
xterm*.backarrowKey: false
xterm*.ttyModes: erase ^?</pre><p>
          <b>.xinitrc :</b>
        </p><pre>xrdb -load $HOME/.Xresources 
xmodmap $HOME/.Xmodmap</pre><p></p></div>
    </a>
    <a name="gnome-two">
      <div class="question"><p><b>Q9.9: Après passage de GNOME 1.x à GNOME 2.x, <code>gnome-session</code> n'ouvre plus de gestionnaire de fenêtres.</b></p></div>
      <div class="answer"><p><b>A:</b> Alors que, sous GNOME 1.x, <code>gnome-session</code> invoque automatiquement le gestionnaire de fenêtres <code>sawfish</code>, sous GNOME 2.x, vous devez vous-même appeler un gestionnaire de fenêtres dans le fichier <code>~/.xinitrc</code> avant de lancer <code>gnome-session</code>, par exemple :</p><pre>... 
exec metacity &amp; exec gnome-session</pre><p>Note : ceci n'est plus vrai pour <b>GNOME 2.4</b>. Le lancement de <code>gnome-session</code> invoque un gestionnaire de fenêtres.</p></div>
    </a>
    <a name="apple-x11-no-windowbar">
      <div class="question"><p><b>Q9.10: Après passage à X11 d'Apple sous Panther, les barres de titre de fenêtre n'apparaissent plus.</b></p></div>
      <div class="answer"><p><b>A:</b> Vous n'êtes pas passé à la version "X11 1.0 - XFree86 4.3.0" incluse dans Panther. Vous devez installer X11 à partir de X11.pkg qui est situé sur le disque 3.</p></div>
    </a>
    <a name="apple-x11-wants-xfree86">
      <div class="question"><p><b>Q9.11: Après installation de X11 d'Apple sous Panther, Fink continue à vouloir installer xfree86.</b></p></div>
      <div class="answer"><p><b>A:</b> Il faut envisager deux hypothèses :</p><ul>
          <li>
            <b>Vous faites une installation à partir des binaires :</b> si vous utilisez une version du paquet <code>fink</code> antérieure à la version 0.17.0 (par exemple celle qui est fournie par l'installeur Fink-0.6.2), il suffit, en général, de mettre à jour fink, par exemple via :
            <pre>sudo apt-get update
sudo apt-get install fink</pre>
          </li>
          <li>
            <b>Vous faites une installation à partir du source :</b> vous devez d'abord mettre à jour <code>fink</code>, par exemple :
            <pre>fink selfupdate</pre> Ensuite vous devez réinstaller ou installer le X11SDK, situé sur le CD Xcode et qui <b>n'est pas</b> installé par défaut. Même si vous avez installé XCode, le X11SDK <b>n'est pas</b> installé par défaut. Il doit être installé soit en utilisant une installation personnalisée de Xcode, soit en cliquant sur le pkg <code>X11SDK</code> situé dans le répertoire <code>Packages</code>.</li>
        </ul><p>Dans les deux cas, vous pouvez vérifier votre installation en lançant  :</p><pre>fink-virtual-pkgs</pre><p>et vous assurer que les sections <code>Package: system-xfree86 </code> et <code>Package: system-xfree86-shlibs</code> (ainsi que <code>Package: system-xfree86-dev</code>, si vous avez installé le SDK) sont présentes et que les lignes <code>Provides:</code> contiennent <code>x11 </code> et <code>x11-shlibs</code> (ainsi que <code>x11-dev</code>).</p><p>Si l'installation ne semble pas correcte, la meilleure façon de résoudre le problème est de supprimer toutes les versions anciennes de xfree86 ou de system-xfree86 et de réinstaller X11 d'Apple (et X11SDK, si vous envisagez d'installer des paquets à partir du source). Il se peut que vous voyez apparaître des messages, vous pouvez les ignorer :</p><pre>sudo dpkg -r --force-all system-xfree86 system-xfree86-42 system-xfree86-43 \ 
xfree86-base xfree86-base-shlibs; rm -rf /Library/Receipts/X11SDK.pkg \
/Library/Receipts/X11User.pkg; fink selfupdate; fink index</pre><p>Puis réinstallez X11 à partir du troisième CD de Panther (et le X11SDK à partir du CD de Xcode).</p><p>Note : <code>system-xfree86</code> ne nécessite plus le X11SDK pour les installations binaires si vous utilisez <code>fink-0.17.0</code> ou une version postérieure.</p><p>Si les problèmes persistent et que vous utilisez <code>fink-0.19.0</code> ou une version postérieure, vous pouvez lancer  :</p><pre>fink-virtual-pkgs --debug</pre><p>pour savoir ce qui manque.</p><p>Si vous utilisez une version antérieure de <code>fink</code>, vous pouvez télécharger et lancer un script Perl, écrit par Martin Costabel, qui fournit les mêmes informations.</p><ul>
          <li>Vous le trouverez ici : <a href="http://perso.wanadoo.fr/costabel/fink-x11-debug">http://perso.wanadoo.fr/costabel/fink-x11-debug</a>
          </li>
          <li>Sauvegardez-le où vous voulez.</li>
          <li>Lancez-le dans une fenêtre de terminal ainsi :
          <pre>perl fink-x11-debug</pre>
          </li>
        </ul></div>
    </a>
    <a name="apple-x11-beta-wants-xfree86">
      <div class="question"><p><b>Q9.12: Après installation de X11 d'Apple avec la version 10.2-gcc3.3 de Fink, il continue à vouloir installer xfree86.</b></p></div>
      <div class="answer"><p><b>A:</b> Il faut envisager deux hypothèses :</p><ul>
          <li>
            <b>Vous faites une installation à partir des binaires :</b> si vous utilisez une version du paquet <code>fink</code> antérieure à la version 0.17.0 (par exemple celle qui est fournie par l'installeur Fink-0.6.2), il vous suffit, en général, de mettre à jour fink, par exemple via :
            <pre>sudo apt-get update 
sudo apt-get install fink</pre>
          </li>
          <li>
            <b>Vous faites une installation à partir du source :</b> vous devez d'abord mettre à jour <code>fink</code>, par exemple via :
            <pre>fink selfupdate</pre>
            Puis vous devez réinstaller (ou installer) le X11SDK, que vous avez téléchargé en même temps que la version bêta de X11 d'Apple.</li>
        </ul><p>Dans les deux cas, vous pouvez vérifier votre installation en lançant :</p><pre>fink-virtual-pkgs</pre><p>et vous assurer que les sections <code>Package: system-xfree86</code> et <code>Package: system-xfree86-shlibs</code> (ainsi que <code>Package: system-xfree86-dev</code>, si vous avez installé le SDK) sont présentes et que les lignes <code>provides:</code> contiennent <code>x11 </code> et <code>x11-shlibs</code> (ainsi que <code>x11-dev</code>).</p><p>Si l'installation ne semble pas correcte, la meilleure façon de résoudre le problème est de supprimer les anciennes versions de xfree86 ou de system-xfree86 et de réinstaller X11 d'Apple (et X11SDK, si vous envisagez d'installer des paquets à partir des sources). Il se peut que des messages apparaissent, vous pouvez les ignorer :</p><pre>sudo dpkg -r --force-all system-xfree86 system-xfree86-42 system-xfree86-43 \
xfree86-base xfree86-base-shlibs; rm -rf /Library/Receipts/X11SDK.pkg \
/Library/Receipts/X11User.pkg; fink selfupdate; fink index</pre><p>Puis réinstallez X11 (et X11DSK, si besoin est).</p><p>Note : <code>system-xfree86</code> ne nécessite plus X11DSK pour l'installation des binaires si vous utilisez <code>fink-0.17.0</code> ou une version postérieure.</p><p>Si le problème persiste et que vous utilisez <code>fink-0.19.0</code> ou une version postérieure, vous pouvez lancer :</p><pre>fink-virtual-pkgs --debug</pre><p>pour savoir ce qu'il manque.</p><p>Si vous utilisez une version antérieure de <code>fink</code>, vous pouvez télécharger et lancer un script Perl, écrit par Martin Costabel, qui fournit les mêmes informations.</p><ul>
          <li>Vous le trouverez ici : <a href="http://perso.wanadoo.fr/costabel/fink-x11-debug">http://perso.wanadoo.fr/costabel/fink-x11-debug</a>
          </li>
          <li>Sauvegardez-le où vous voulez.</li>
          <li>Exécutez-le dans une fenêtre de terminal via :
          <pre>perl fink-x11-debug</pre>
          </li>
        </ul></div>
    </a>
    <a name="wants-xfree86-on-upgrade">
      <div class="question"><p><b>Q9.13: Après passage de la version 10.2 de Fink à la version 10.2-gcc3.3 ou 10.3, Fink veut installer XFree86 alors que X11 d'Apple est déjà installé.</b></p></div>
      <div class="answer"><p><b>A:</b> Il se peut que vous deviez supprimer un des paquets fantômes antérieurs : <code>system-xfree86</code>, <code>system-xfree86-42</code> ou <code>system-xfree86-43</code>. Fink sait maintenant reconnaître si vous avez une version de X11 installée manuellement, par exemple celle d'Apple, et génère des paquets virtuels. Comme d'autres paquets dépendent de <code>system-xfree86</code>, vous devez utiliser la commande :</p><pre>sudo dpkg -r --force-all system-xfree86 system-xfree86-42 system-xfree86-43</pre><p>pour supprimer les versions obsolètes. Vous pouvez vérifier votre installation en lançant :</p><pre>fink-virtual-pkgs</pre><p>et vous assurer que les sections <code>Package: system-xfree86</code> et <code>Package: system-xfree86-shlibs</code> sont présentes et que les lignes provides: contiennent <code>x11</code> et <code>x11-shlibs</code>. Si vous avez installé X11SDK, vous devez aussi avoir <code>Package: system-xfree86-dev</code>.</p><p>Si le problème persiste, voir plus haut <a href="#apple-x11-wants-xfree86">Fink veut installer XFree86 sous 10.3</a> ou <a href="#apple-x11-beta-wants-xfree86">Fink veut installer Xfree86 sous 10.2-gcc3.3</a>.</p></div>
    </a>
  

<? include_once "footer.inc"; ?>
