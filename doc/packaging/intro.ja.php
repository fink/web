<?
$title = "パッケージ化 - 序章";
$cvs_author = 'Author: babayoshihiko';
$cvs_date = 'Date: 2004/03/09 15:29:17';
$metatags = '<link rel="contents" href="index.php?phpLang=ja" title="パッケージ化 Contents"><link rel="next" href="format.php?phpLang=ja" title="パッケージ詳細"><link rel="prev" href="index.php?phpLang=ja" title="パッケージ化 Contents">';

include_once "header.inc";
?>

<h1>パッケージ化 - 1 序章</h1>
		
		


		<h2><a name="def1">1.1 パッケージとは何か?</a></h2>
			
			<p>
				パッケージとは、ある単位を構成するソフトウェアを指します。
				パッケージの典型的な例としては、実行可能ファイル必要なデータファイル、国際化やドキュメントの
				ためのメッセージカタログなどがあります。
				Fink においてはパッケージはパッケージ詳細とインストール可能なバイナリパッケージファイルの２種類があります。
			</p>
			<p>
				パッケージ詳細は人間が読むことができるテキストファイルで、パッケージをビルドするために必要な全ての情報を含んでいます。
				バイナリパッケージファイルの他、メタデータ (パッケージ名や目的など) 、ソースコードの URL 、
				configure やコンパイル、インストールの方法が書かれています。
				この詳細にはパッチが付随することもあります。
			</p>
			<p>
				バイナリパッケージファイルとは、パッケージを構成する各ファイルのアーカイブを指します。
				これには実行可能ファイル、データファイル、メッセージカタログ、ライブラリ、インクルードなどのファイルを含みます。
				また、メタデータも含まれています。
				バイナリパッケージは既に使用できる形式ですので、インストールとは主にファイルを展開することです。
				Fink は dpkg パッケージ管理を使用しているので、バイナリファイルは dpkg 形式で .deb 拡張子がつきます。
			</p>
		


		<h2><a name="ident">1.2 パッケージの特定</a></h2>
			
			<p>
				パッケージは３つの言葉で特定されます。
				この３つとは、パッケージ名、バージョン、リビジョンです。
				いずれも英語の小文字 (a から z)、数字 (0-9)、 ダッシュ記号 (-)、プラス記号 (+)、ドット (.) のみ使えます。
				この他の字は使えません。
				特に、大文字とアンダースコアも使えないので注意指定ください。
			</p>
			<p>
				パッケージ名とは、 openssh などソフトウェアの名称を際します。
				バージョン、あるいは上流のバージョンとは元となるソフトウェアパッケージのバージョンを指します。
				バージョンには 2.9p1 など英小文字を含んでもかまいません。
				fink も dpkg も正しく認識します。
				他方、リビジョンとは、１から始まり、パッケージ詳細の変更回数に応じて一つづつ大きくなる整数です。
				これは上流のバージョンが変わると 1 に戻ります。
				リビジョンはダッシュを含みません。
				パッケージの完全な名称は、この３つの言葉をダッシュでつないだもので、
				openssh-2.9p1-2 というような形式になります。
			</p>
		

	<p align="right">
Next: <a href="format.php?phpLang=ja">2 パッケージ詳細</a></p>

<? include_once "footer.inc"; ?>