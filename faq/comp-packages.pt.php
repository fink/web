<?
$title = "Perguntas frequentes - Compilação (2)";
$cvs_author = 'Author: alexkhansen';
$cvs_date = 'Date: 2009/03/12 17:49:31';
$metatags = '<link rel="contents" href="index.php?phpLang=pt" title="Perguntas frequentes Contents"><link rel="next" href="usage-general.php?phpLang=pt" title="Problemas no uso de pacotes - Geral"><link rel="prev" href="comp-general.php?phpLang=pt" title="Problemas de Compilação - Geral">';


include_once "header.pt.inc";
?>
<h1>Perguntas frequentes - 7. Problemas de compilação - Pacotes específicos</h1>
    
    
    <a name="libgtop">
      <div class="question"><p><b><? echo FINK_Q ; ?>7.1: Um pacote não compila devido a erros em relação ao
        <code>sed</code>.</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Isto pode acontecer caso seu script de login (por exemplo,
        <code>~/.profile</code>) imprima algo no terminal, por exemplo
        "<code>echo Hello</code>" ou <code>xttitle</code>. Para livrar-se do
        problema, a solução fácil é comentar as linhas que imprimam na
        tela.</p><p>Se você quiser manter a impressão na tela, então você pode fazer
        algo parecido com</p><pre>if ( $?prompt) then 
	echo Hello 
endif</pre></div>
    </a>
    <a name="cant-install-xfree">
      <div class="question"><p><b><? echo FINK_Q ; ?>7.2: Eu quero mudar para os pacotes XFree86 do Fink mas não consigo
        instalar <code>xfree86-base</code> | <code>xfree86</code> devido a
        conflito com <code>system-xfree86</code>.</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Infelizmente, todas as variantes do X11 realmente precisam ser
        instaladas em /usr/X11R6. Por causa disto, o pacote
        <code>xfree86-base</code> do Fink também é instalado lá. Entretanto,
        como o Fink não remove arquivos que não estejam em seu banco de dados,
        ele não irá substituir automaticamente uma instalação do X11 que não
        foi feita pelo Fink.</p><p>Proceda da seguinte forma:</p><p>1. Remova manualmente tudo relacionado ao XFree86. Isto pode ser
        feito com o comando</p><pre>sudo rm -rf /Applications/XDarwin.app /usr/X11R6 /etc/X11</pre><p>Se você está mudando do Apple X11, remova também o aplicativo
        X11.</p><p>2. Para obter o XFree86-4.2.1, instale o pacote
        <code>xfree86-base</code> da forma tradicional: "<code>fink
        install</code>" caso use códigos fontes, "<code>apt-get install</code>"
        or <code>dselect</code> para binários.</p><p>-ou-</p><p>2a. Para obter o XFree86-4.3.x ou mais recentes, instale o pacote
        <code>xfree86</code> através do comando <code>fink install
        xfree86</code> -- a versão mais recente (XFree86-4.4.x de 25/maio/2004)
        ainda não está na distribuição de binários e só está disponível na
        árvore unstable (veja <a href="http://www.finkproject.org/faq/usage-fink.php#unstable%5C">como
        instalar pacotes instáveis</a>).</p></div>
    </a>
    <a name="change-thread-nothread">
      <div class="question"><p><b><? echo FINK_Q ; ?>7.3: Como faço para mudar de uma versão sem threads do pacote XFree86 do
        Fink para uma versão com threads (ou vice-versa)?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Se você está rodando a versão do XFree86 do Fink e quer trocar entre
        versões do Fink com ou sem threads, você precisa remover manualmente a
        versão antiga. Isto é feito através dos seguintes comandos:</p><pre>sudo dpkg -r --force-depends xfree86-base 
sudo dpkg -r --force-depends xfree86-shlibs 
sudo dpkg -r --force-depends xfree86-rootless 
sudo dpkg -r --force-depends xfree86-rootless-shlibs</pre><p>ou para remover as versões com threads:</p><pre>sudo dpkg -r --force-depends xfree86-base-threaded 
sudo dpkg -r --force-depends xfree86-shlibs-threaded 
sudo dpkg -r --force-depends xfree86-rootless-threaded 
sudo dpkg -r --force-depends xfree86-rootless-threaded-shlibs</pre><p>O Fink Commander também possui uma forma de remover pacotes. Na
        janela de fontes, selecione um pacote e então use a opção "<code>Force
        Remove</code>" do menu <code>Source Menu</code>.</p><p>Caso esteja usando o system-xfree86, veja como removê-lo na pergunta
        anterior.</p><p>Instale a versão do xfree86 que você deseja:</p><p><code>xfree86-base</code></p><p><code>xfree86-base-threaded</code></p><p>da forma usual: "<code>fink install</code>" para usuários de códigos
        fontes, "<code>apt-get install</code>" ou "<code>dselect</code>" para
        binários.</p></div>
    </a>
    
    <a name="cctools">
      <div class="question"><p><b><? echo FINK_Q ; ?>7.4: "Quando tento instalar o KDE, recebo a seguinte mensagem 'Can't
        resolve dependency "cctools (&gt;= 446-1)"'"</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Esta mensagem meio obscura significa que você precisa instalar o
        December 2002 Developer Tools.</p></div>
    </a>
    
    <a name="libiconv-gettext">
      <div class="question"><p><b><? echo FINK_Q ; ?>7.5: Não consigo atualizar a <code>libiconv</code>.</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Caso esteja recebendo erros no formato:</p><pre>libtool: link: cannot find the library `/sw/lib/libiconv.la'</pre><p>você pode resolver o problema executando os comandos</p><pre>fink remove gettext-dev
fink install libiconv</pre></div>
    </a>
    <a name="cplusplus-filt">
      <div class="question"><p><b><? echo FINK_Q ; ?>7.6: Não consigo instalar o <code>g77</code> porque está faltando o
        <code>c++filt</code>. De onde posso obtê-lo?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Caso esteja recebendo erros no formato</p><pre>xgcc: installation problem, cannot exec `c++filt': No such file or directory</pre><p>desde que atualizou para o Tiger, então você precisa fazer o
        seguinte:</p><ul>
          <li>Elimine suas versões antigas do Developer Tools através do comando
          <pre>/Developer/Tools/uninstall-devtools.pl</pre> em um
          terminal. Instale então o Xcode (2.0 ou mais recente).</li>
          <li>Reinstale o <code>BSD.pkg</code> (do disco de instalação do
          Tiger). Se <code>/usr/bin/c++filt</code> não aparecer, continue
          tentando.</li>
        </ul></div>
    </a>
    <a name="gettext-tools">
      <div class="question"><p><b><? echo FINK_Q ; ?>7.7: O Fink se recusa a atualizar o pacote <code>gettext</code>,
        reclamando que as dependências estão em um estado inconsistente.</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Após executar o comando <code>fink selfupdate</code> para garantir
        que tenha as últimas versões, execute o comando <code>fink update
        gettext-tools</code>. Uma versão mais antiga do pacote
        <code>gettext-tools</code> pode estar impedindo a atualização do
        <code>gettext</code>.</p></div>
    </a>
  <a name="Leopard-libXrandr">
    <div class="question"><p><b><? echo FINK_Q ; ?>7.8: Não consigo instalar o <b>gtk+2</b> no OS 10.5.</b></p></div>
    <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Há algumas variantes deste erro. Uma delas envolve bibliotecas
      ausentes: <code>/usr/X11/lib/libXrandr.2.0.0.dylib</code> ou
      <code>/usr/X11/lib/libXdamage.1.1.0.dylib</code>. O melhor
      entendimento para corrigir este erro é instalar o Xcode 3.1 e aplicar a
      última atualização de versão do <a href="http://xquartz.macosforge.org/trac/wiki">macosforge.org</a>.</p><p>Uma outra possibilidade é em relação a símbolos indefinidos:
      "<code>_gdk_threads_add_idle referenced from libgtk-x11-2 expected to be
      defined in libgdk-x11-2</code>" etc.</p><p>A remoção do pacote <code>gtk+2-dev</code> existente permitirá que a
      compilação siga em frente.</p></div>
  </a>
    <a name="all-others">
      <div class="question"><p><b><? echo FINK_Q ; ?>7.9: Estou tendo problemas com um pacote que não está listado aqui.</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Dado que problemas com pacotes tendem a ser transientes, decidimos
        colocá-los no wiki do Fink. Veja a <a href="http://wiki.finkproject.org/index.php/Fink:Package_issues">página
        de Problemas em pacotes (package issues)</a>.</p></div>
    </a>
  <p align="right"><? echo FINK_NEXT ; ?>:
<a href="usage-general.php?phpLang=pt">8. Problemas no uso de pacotes - Geral</a></p>
<? include_once "../footer.inc"; ?>

