
ReadMe？（私を読むの？）



HtmlMaker Ver1.02
HtmlMaker Ver2.00



作成人：多里(CS学部)
作成日：2010年7月9日4限目+α

ver.2は翌年CS中原が改良
元が素晴らしいプログラムでした




・HtmlMakerについて・

Creationの定期作品個人ページを簡単に作れちゃうと思うよ。
適当に作ったんであんまり実用性はないと思われ。
でもまあ、時間短縮にはなると思うよ。



・実行方法・

まずは提出人数、作品タイトル、HN、コメントをまとめたtxtファイル（下に記述法を記載）をhtmlmaker.classと一緒に置く
その後コマンドプロンプトで以下のコマンド実行

java htmlmaker [テキストファイル名] [年度の定期回数] [作品がまとめて入っているフォルダ名][作品テーマ]

hpというフォルダが自動生成され、その中に個人のHTMLファイルが作成される。
また、サムネイルのページは作業フォルダ内にlist.htmlで作成される。

＊例
フォルダ内内容
	name.txt
	09ai(各個人フォルダが入っているフォルダ)

仮に第4回目の定期発表作品とし、テーマは自由とする（コマンドプロンプトでの全角の打ち込みはAlt+半角全角キー）。

java_htmlmaker_name.txt_4_09ai_自由(アンダーバーはスペース)



・読み込ませるtxtの中身について・

必ずテキストの1行目にHTMLを作成する人数（定期作品を提出した人数）を記入。
その後は一行ごと、タイトル、HN、コメントを記述していく。
途中に空白な改行を入れるとコメントなどがずれてしまう。

提出人数
[改行]
1人目のタイトル(作品が入っているフォルダは01)
1人目の名前
1人目のコメント
[改行]
2人目のタイトル(作品が入っているフォルダは02)
2人目の名前
2人目のコメント
[改行]
…
……
10人目のタイトル(作品が入っているフォルダは10)
10人目の名前
10人目のコメント
[改行]
11人目のタイトル(作品が入っているフォルダは11)
11人目の名前
11人目のコメント
[改行]
――以降繰り返し――

＊例
-teiki.txt-
3

愛
工科太郎
愛は正義!!

夢
工科次郎
愛と夢は泡沫！！

そして、結末
工科三郎
みつどもえのゆくへは？
・・・・・・



・実行時に表示されるコメントについて・

Making....            :実行時に必ず表示されます。
Read                  :読み込ませるテキストが正常に読み込まれたとき表示されます（ほぼデバッグ用）。
Write(1人目)          :HTMLファイルを作成しているときに表示されます（ほぼデバッグ用）。
All Making success!!  :出力が正常終了したときに表示されます。
Miss...orz            :入出力がどこかで失敗した場合に表示されます。エラー表示です。

例えば、

Making....
Miss...orz

と表示された場合、コマンドラインで読み込ませるファイル名を間違えているか、テキストの1行目の人数より、
タイトル、HN、コメントを1セットとした場合の数が少ない場合のどちらかです（たぶん）。
修正しても戻らない場合、プログラムのミスです、自分で修正してください←

おそらくエラー表示はこの場合しか表示されないと思います。


・フォルダ構成と作成されるファイル構成

以下のようにする必要があります。


[作業フォルダ]
|――読み込ませるテキストファイル(.txt）
|――[各作品フォルダの入ったフォルダ](フォルダの中身は図のようにする)
|	|――[01]
|	|	|―	teiki.jpg
|	|	 ―	teiki_s.jpg
|	|――[02]
|	|――[03]
|	|	…
|	|	……
|	|――[10]
|	 ――[11]
|――[hp](実行すると自動生成)
|	|――01.html
|	|――02.html
|	|	…
|	|	……
|	|――10.html
|	 ――11.html
|	     以降繰り返し――
|
|――list1.html(定期回数がlistの後に付く.サムネイルページ)
 ――htmlmaker.class

＊[]はフォルダ

各作品フォルダの入ったフォルダは1桁の場合前に0を付ける必要があります。
2桁以降は必要ありません。
この仕様は、ファイル名をソートした場合に綺麗に見えるという、作者の個人的こだわりです。

---------Ver.2を使用する場合-------------
多里さんのプログラムにjavascriptを追加しました
基本的な使い方は同じですが、生成後にhpフォルダ内に同梱のhighslideフォルダを入れてください
また、クリックする前の（原寸でない）画像は元画像を高さ60％（モニターの）で表示するようにしています
横長の絵などは手動で適宜対応してください



・更新靴歴・
ver2.00:
クリックで原寸画像参照可能
javascriptの導入、原寸で表示する際にウィンドウに合わせて自動リサイズされる。
スライドショーの導入
ver1.02:
読み込ませるテキストファイルに空白改行を入れるようにし、見やすくした。

ver1.00:
とりあえず完成。