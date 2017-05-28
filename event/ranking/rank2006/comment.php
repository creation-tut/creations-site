<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/htm:charset=Shift_JIS">
		<title>
		commment
		</title>
	</head>
	<body>
	<table border="1" align="center">
		<tr><td>作者名を選択して下さい。</td></tr>
		<tr><td align="center">
		<table border="1" BGcolor="#FFFFAA"><tr><td>
		<FORM action='comment.php' method='post' >
			<SELECT NAME='pulldown' SIZE=1>
				<OPTION VALUE=1>ぽっぽ（´・ω・｀）
				<OPTION VALUE=2>jin
				<OPTION VALUE=3>矢
				<OPTION VALUE=4>勝俣
				<OPTION VALUE=5>上岡　空助
				<OPTION VALUE=6>中田　英輔
				<OPTION VALUE=7>山本　智士
				<OPTION VALUE=8>YY
				<OPTION VALUE=9>戸田
				<OPTION VALUE=10>Y/N
				<OPTION VALUE=11>月
				<OPTION VALUE=12>ガゼル（バルーンアート）
				<OPTION VALUE=13>個人向け感想
				<OPTION VALUE=14>展示会全体
				<OPTION VALUE=15>宛先不明
			</SELECT>
			</td></tr></table>
			<br>
			<input type='submit' value="選択">
		</FORM>
		</td></tr>
	</table>
	<hr>
	</body>
</html>

<?php

$pdown = $_POST["pulldown"];

if ( $pdown == 1){//------------------------------------------------------------------
	echo "<table border='1' align='left'>";
	echo "<tr><th>NO</th><th>所属</th><th>ジャンル</th><th>タイトル</th><th>作者名</th></tr>";
	echo "<tr>";

	echo "<td>01</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>夏の海</td>";
	echo "<td>ぽっぽ（´・ω・｀）</td>";

	echo "</tr>";
	echo "</table><br><br><br><br>";
	echo "・上手くなってるねー。エロスエロス。太陽の光みたいな環境光入れるともっと深みが出ると思うよ。<br>";
	echo "・全体的にまとまっていて良い感じです。パーツ単位で見ると違和感があるかも。<br>";
	echo "・スク水<br>";
	echo "・水の波紋<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	echo "<tr><th>NO</th><th>所属</th><th>ジャンル</th><th>タイトル</th><th>作者名</th></tr>";
	echo "<tr>";

	echo "<td>02</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>月ふたつ</td>";
	echo "<td>ぽっぽ（´・ω・｀）</td>";

	echo "</tr>";
	echo "</table><br><br><br><br>";
	echo "・コントラストは悪くないと思うよ。微妙な紅みもエロス。もっと陰だけでなく、影も入れるといいかも。<br>";
	echo "・雰囲気は好き。体のバランスもしっかりしているように思います。背景にもう少し遠近感があるともっとよいかも。<br>";
	echo "・もえ<br>";
	echo "・2の絵がシンプル（？）で好きです。<br>";
	echo "・キレイな作品だと思いました。<br>";
	echo "・構成がいい感じ。もうちょっと色に深みが欲しいかな<br>";
	echo "<br>";


}elseif ( $pdown == 2){//------------------------------------------------------------------
	echo "<table border='1' align='left'>";
	echo "<tr><th>NO</th><th>所属</th><th>ジャンル</th><th>タイトル</th><th>作者名</th></tr>";

	echo "<tr>";
	echo "<td>03</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>アカツキ</td>";
	echo "<td>jin<td>";
	echo "</tr>";

	echo "</table><br><br><br><br>";
	echo "・きれいに描けてると思います。もっとラフっぽさを出すと、インパクトが強くなりそう。<br>";
	echo "・色使い等完成度が高いです。足のみ切れが残念。<br>";
	echo "・ウホ<br>";
	echo "・女の子の体の模様がかっこいいです。<br>";
	echo "・絵がすごい好きな絵で選びました。<br>";
	echo "・色があまりあかるくないのでキャラが目立つ色使いもすてき	<br>";
	echo "<br>";


//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>04</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>空</td>";
	echo "<td>jin</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・構成がいいですね。夏らしい絵なので、コントラストを強調すると良さげ<br>";
	echo "・空気感とか奥行き感とかステキ。右手が残念。<br>";
	echo "・○○をだきしめて。<br>";
	echo "・とても元気になりそうな絵だとかんじました。光の加減もちょうどいいと思います。<br>";
	echo "・海と空、光の使い方が見事です。<br>";
	echo "・思い出は大切に<br>";
	echo "・空の開放感がすごいと思った。<br>";
	echo "・空の構図が素敵です。<br>";
	echo "・さわやか<br>";
	echo "・とてもすずしげでキレイでキャラもうごきがあっていい<br>";
	echo "・空と海？の境界<br>";
	echo "・空の表現がすごいの一言<br>";
	echo "・すきとおった感があってみていて楽しいと思いました<br>";
	echo "・遠近感が素晴らしいと思います<br>";
	echo "・空間がとてもさわやかで好きです。<br>";
	echo "・やはり、アニメ絵にも1票。<br>";
	echo "<br>";


}elseif ( $pdown == 3){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>05</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>避暑</td>";
	echo "<td>矢</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・緑が少し強いかな。彩度を下げてコントラストを強めるとホラーっぽくなるよ。ノイズとかもオススメ。<br>";
	echo "・涼しげな感じがよい。しわの表現がステキ。人物の手と顔に違和感がある。髪の毛はウマス。<br>";
	echo "・（・∀・）<br>";
	echo "・うちの部屋でホラーナイトやるよ～<br>";
	echo "・顔が見たい<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>10</td>";
	echo "<td>C</td>";
	echo "<td>3D</td>";
	echo "<td>Creation</td>";
	echo "<td>矢</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・楽に、かっこよくできるからねー、鏡面は。時計の文字盤をもっとこだわると、かっこいいポスターになるよ。<br>";
	echo "・質感設定等よくできていると思う。若干機能に頼った感がある。<br>";
	echo "・きれい<br>";
	echo "・おもしろい。反射は、もっと黒を強調した方がメリハリがつきます。<br>";
	echo "・とてもきれいで鏡面反射はすばらしいものだと思いました。<br>";
	echo "<br>";



}elseif ( $pdown == 4){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>06</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>ひまわりうむ</td>";
	echo "<td>勝俣</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・おもしろい構成。手前の上とヒマワリが少し浮いてるかな？さっぱりと塗ってよさそう。<br>";
	echo "・世界観がおもしろい。ヒマワリのロボット(？)に最初気付かなかったw背景のヒマワリが淡すぎるかも。<br>";
	echo "・ひまわりたん<br>";
	echo "・個人的にひまわりはスキなので<br>";
	echo "・６番を描いた人が１年っていうのがすごいです。<br>";
	echo "・さわやかで、発想がとても良いと思いました。<br>";
	echo "・前のヒマワリの色の強さに対し、後ろのヒマワリが生きてないのが残念<br>";
	echo "<br>";



}elseif ( $pdown == 5){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>07</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>ゴシック</td>";
	echo "<td>上岡　空助</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・ツールは何を使っているんでしょう？表情や並び方、ポーズを変えれば背景なんて必要ないよ。<br>";
	echo "・人体の基本はできてそう。あとはひたすら描くべし！！描くべし！<br>";
	echo "・ロリかもん<br>";
	echo "<br>";



}elseif ( $pdown == 6){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>08</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>狼</td>";
	echo "<td>中田　英輔</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・よく途中で力尽きなかった。背景も主人公である狼が強調されてて良いと思います。<br>";
	echo "・雰囲気がとてもいい。狼の骨格に違和感があるかも。<br>";
	echo "・もふもふ<br>";
	echo "・狼さんが良いかと<br>";
	echo "・狼の毛の表現がステキです。<br>";
	echo "・月がきれい<br>";
	echo "・喰われてもいいから抱きたい<br>";
	echo "・毛の書き込みがていねいです<br>";
	echo "・オオカミの毛が細かく描かれていたのは感動です。<br>";
	echo "・狼と背景があってる。<br>";
	echo "・狼と月、合ってます！<br>";
	echo "<br>";



}elseif ( $pdown == 7){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>09</td>";
	echo "<td>C</td>";
	echo "<td>複合</td>";
	echo "<td>夏</td>";
	echo "<td>山本　智士</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・上手く描けてると思います。着物の柄をもっと派手にすると、絵の印象が強くなると思います。<br>";
	echo "・雰囲気やよし。所々パースがあってないかも。<br>";
	echo "・傘がいい<br>";
	echo "・カサが良い。背景も良くできてます。<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>15</td>";
	echo "<td>C</td>";
	echo "<td>複合</td>";
	echo "<td>DarkStalker</td>";
	echo "<td>山本　智士</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・よくなじんでいると思いますよ。2Dと3Dをなじませたいときは一緒にグラデーションをかけたり、2Dのハイライトの色を変えるだけでかなり効果があるよ。<br>";
	echo "・細々したものまで作りこんであっていい感じ。見切れているのがおしい。<br>";
	echo "・2Dと3Dがいいかんじ<br>";
	echo "・2D部分だけぼやけたカンジがします<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>16</td>";
	echo "<td>C</td>";
	echo "<td>3D</td>";
	echo "<td>DrugStar 400</td>";
	echo "<td>山本　智士</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・これはスゴイ。Photoshopなどで色調の調整をやるともっと重厚になるかも。<br>";
	echo "・モデリングも細かく、背景もあったり全体的に良い。金属の質感がおしい。もう少し重々しくても良いかも。<br>";
	echo "・自己発光？<br>";
	echo "・マシンの金属の質感が良く出来ていると思います。背景の雰囲気も良く出ています。<br>";
	echo "・ハレーションを起こしてはいるがモデリングは細かいですね。パイプとか、もっとテッセレーション上げてもいいかも。<br>";
	echo "<br>";



}elseif ( $pdown == 8){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>11</td>";
	echo "<td>C</td>";
	echo "<td>複合</td>";
	echo "<td>Analysis</td>";
	echo "<td>YY</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・球体の上下のギザギザが痛いね。シルバーっぽい2D部分の色を変えると印象も変わると思います。<br>";
	echo "・イメージしたものが表現できていると思う。背景・球・その他がバラバラすぎるかも。<br>";
	echo "・まるまる<br>";
	echo "・涼しげでシンプルな色合いが好きです。<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>12</td>";
	echo "<td>C</td>";
	echo "<td>複合</td>";
	echo "<td>夏の終わり</td>";
	echo "<td>YY</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・きれいな色づかいだね。コントラストを強めると夏の夕日らしくなるよ。<br>";
	echo "・抽象的な雰囲気が良い。球の立体感が少ないかも。影に違和感がある。<br>";
	echo "・きれいで、海がリアルで感動！<br>";
	echo "・秋だよ<br>";
	echo "・水の質感と光の加減がGOOD！！<br>";
	echo "・１２番の方の風景はとてもリアルでした。<br>";
	echo "・非現実ながらもリアルな部分を追求の所に共感<br>";
	echo "・全体のバランスがいい。<br>";
	echo "<br>";



}elseif ( $pdown == 9){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>13</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>餅つき</td>";
	echo "<td>戸田</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・戸田くんの個展がやりたい。マジで。<br>";
	echo "・シュールでステキ。所々ボケてるのが気になる。<br>";
	echo "・先生すてき<br>";
	echo "・とてもかわいかったです。<br>";
	echo "・カワユイ<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>12</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>オーロラ</td>";
	echo "<td>戸田</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・セリフ入れて。お願いします。<br>";
	echo "・ちゃんとオーロラっぽく見える。ナイス。空気感があればもっと良いかも。<br>";
	echo "・すごくよくなった<br>";
	echo "・オーロラの感じが良く描けている<br>";
	echo "<br>";



}elseif ( $pdown == 10){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>17</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>砂海</td>";
	echo "<td>Y/N</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・かっこいいタッチだね。空の雲も合わせるとさらにいいかも。<br>";
	echo "・完成度が高くてとても良い。もう一つ何かアクセントが欲しいかも。<br>";
	echo "・モンハー<br>";
	echo "・趣味ドンピシャで、こんな場所があったら実際に思うくらいすてきなかんじ。<br>";
	echo "・光が描けていていいですねー<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>18</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>兵士</td>";
	echo "<td>Y/N</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・よろいっぽさや力強さがよく表現できてるよ。シンプルな構成もgood。<br>";
	echo "・背景が無いのに空気感が伝わってきてよい。もう少し構図にこだわったものが見てみたい。<br>";
	echo "・ふんいきいいね<br>";
	echo "・18は妙に寂しく見えて目をひかれました。<br>";
	echo "・メイスに惹かれた。<br>";
	echo "・金属感。あと影。<br>";
	echo "・兵士がスゴクイイ質感がスキ<br>";
	echo "・質感が好きです。<br>";
	echo "・ペンツール独特のザカザカ感が良い味出してます。<br>";
	echo "・デザインがすごくいいと思いました。<br>";
	echo "・光が描けていていいですねー<br>";
	echo "・18の兵士の荒々しい質感が好き<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>39</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>藤江（仮）</td>";
	echo "<td>Y/N</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・こういう絵好き。もう少し細かいのも見てみたい。<br>";
	echo "・ツンデレ<br>";
	echo "<br>";

}elseif ( $pdown == 11){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>38</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>堤（仮）</td>";
	echo "<td>月</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・すばらしすぎ。黒つぶれが残念かも。<br>";
	echo "・こまかい<br>";
	echo "・なんか背景の水がいいと思いました。<br>";
	echo "・さすが。<br>";
	echo "・絵がとてもかっこよくて気に入りました。<br>";
	echo "・色とてもあっていたので良かったです。<br>";
	echo "・大学院ってみえねーよ！<br>";
	echo "・うまい<br>";
	echo "・背景がリアルでキャラもキレイ<br>";
	echo "<br>";

}elseif ( $pdown == 12){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>UNKNOWN</td>";
	echo "<td>C</td>";
	echo "<td>バルーンアート</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>ガゼル</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・バルーンアートがかわいかった。<br>";
	echo "・風せんがほしかったのじゃ～～～！！<br>";
	echo "・エルモかわいー<br>";
	echo "・ピンクパンサーすごい<br>";
	echo "<br>";

}elseif ( $pdown == 13){//------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>UNKNOWN</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>個人向けコメント</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・じぇんさんの3DCGがどうみても写真にしか見えないんですが。<br>";
	echo "・さとしくんここにいたのね。来年はぜひ美部にもだしてね（ハート）　　美部　ぶちょう<br>";
	echo "・作田さん（本人）がかっこよかった<br>";
	echo "・じぇんさんのサインがほしいです<br>";
	echo "・じぇんさんの作品はどう見ても本物にしか見えません……。<br>";
	echo "・じぇんさんは神。<br>";
	echo "<br>";

}elseif ( $pdown == 14){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>所属</th>";
	echo "<th>ジャンル</th>";
	echo "<th>タイトル</th>";
	echo "<th>作者名</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>UNKNOWN</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>展示会全体宛コメント</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・デジタル画なら使用したソフトを明記してくれると（自分的には）うれしいです。<br>";
	echo "・アニメーションが見たいです。<br>";
	echo "・全部にコメントできませんが、がんばって下さい。これからも！Creation　OBより<br>";
	echo "・皆様の技量にビックリです。<br>";
	echo "・全体的に良いと思います。版権モノよりはオリジナル作品の方がよいかなとも思いますが。<br>";
	echo "　あと文字入れてあるのは、フォントから付くらないといけない（著作権的にも）と思いますが、<br>";
	echo "　ちゃんとオリジナルでしょうか？<br>";
	echo "・みんな絵がきれいです。<br>";
	echo "・サークル内でもいくつかのテーマをもって、エリア毎に展示してると面白いのかなと思いました。<br>";
	echo "・お疲れ様でした。<br>";
	echo "・どれもレベルが高くて驚きました。<br>";
	echo "・去年に比べてレベルが全体的に段違いにアップしていて驚いた。<br>";
	echo "・OGです。１年生とかでも私の現在よりはるかにうまい人が多くて困ります（汗）<br>";
	echo "・みなさんステキでした。CGすごいです。<br>";
	echo "・クオリティーの高い作品がとても多くて感動した！<br>";
	echo "・イイと思います<br>";
	echo "・美術っぽい作品が少ない。<br>";
	echo "・どの作品も立体感がでていてとても良かった。オリジナリティがでていて見張えがあり見ごたえがあった。<br>";
	echo "・とてもキレイな作品ばかりで、ステキでした。<br>";
	echo "・皆さん上手ですね。<br>";
	echo "・どの作品もすばらしかったです。<br>";
	echo "・2D、3D、CGは奥が深いと思った。色々な作品がありとてもすばらしいと思った。<br>";
	echo "・どのソフトで作ったのかなども書いてあると面白かったかも。<br>";
	echo "・みなさんがんばっているようで、良かったです。どれもステキでしたよ～♪これからもがんばって下さいませ！！<br>";
	echo "・今年の１年は皆、うまいな・・・。僕は・・・。（汗）<br>";
	echo "・みんな上達していて驚きました。サークル全然来れなくてすいません　by４年<br>";
	echo "・どれも素敵な作品で３つにするというのが難しかったです・・・。<br>";
	echo "・1枚の絵の中にひとつの世界観がある作品が良いと思います。自然の中にある色を観察すると良いと思います。<br>";
	echo "・3Dの作品は丸みを出す大変さがわかった。<br>";
	echo "<br>";

}elseif ( $pdown == 15){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	

	echo "<tr>";
	echo "<th>宛先不明</th>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "・意外性と、リアリティの両立をポイントに選びました。<br>";
	echo "・ID.4 ID.5 ID.9 夏を思い起こさせる作品が好きなので、この様なランク付けになりました。<br>";
	echo "　あとはバイクの作品は非常に細かく出来ているので、3Dのすごさを新めて感じました。<br>";
	echo "・ガンバリマシタ<br>";
	echo "・CG部分が細部まで行き届く様な描き方をされてて良いと思います。<br>";
	echo "・子供が選びました<br>";
	echo "・作りかけっぽいのが多い気が……。その中でまだ良かったのが上の3つ<br>";
	echo "・すごいキレイなCGでとても驚きました。さわやかなふんいきがGoodでした。<br>";
	echo "・どれも素晴らしいです。上記のはとくに　〃＾＾〃<br>";
	echo "・すてきな物がたくさんあって、選ぶのに考えてしまいました。<br>";
	echo "・テラジェンってやっぱりすごいですね。Ｗ<br>";
	echo "・もっと余白をうまくつかった作品にすると見栄えがさらによくなると思う<br>";
	echo "・3Dの細部までつくっていて、素晴らしいです。これからもがんばってください。<br>";
	echo "・神秘的で美れいでした。<br>";
	echo "・ウリクペン<br>";
	echo "・どれも素晴らしい<br>";
	echo "・作者の趣味がでていたと思います。<br>";
	echo "・どの作品もとてもよかったです。<br>";
	echo "・Cool<br>";
	echo "・マシーンがすごくリアルだった。ひまわり（06）個人的にすきです。みてて、どれもひきこまれました。<br>";
	echo "・既存のテクスチャーを感じさせない点が良い……<br>";
	echo "・心癒されますた　（*´ω`）<br>";
	echo "・これからもがんばって下さい<br>";
	echo "・すごいです<br>";
	echo "・とてもよかったです。<br>";
	echo "・完成度が高くて、キレイな絵（３D?） でした。<br>";
	echo "・夏が好きです。海が好きです。水着が好きです。うはｗｗｗオレキモスｗｗｗｗうぇうぇうぇｗｗｗｗ<br>";
	echo "・単品シリーズ系がとても面白かったです。<br>";
	echo "<br>";

}

?>
