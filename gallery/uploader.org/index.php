<?php
/**
 * public upload page
 *
 * @version 0.2
 * @author __akai
 * @author konoiz <izumi@konome.org>
 */

require_once('config.inc.php');

// open theme database
$err = '';
$theme = array();
try {
    $db = new SQLite3(TEIKI_DB_NAME);
    $query = "SELECT count(*) FROM sqlite_master WHERE type='table' AND name='theme'";
    $res = $db->query($query);
    $res = $res->fetchArray();
    if ($res[0] !== 1) {
        $err .= "<p class=\"error\">問題が発生しました。管理者に連絡してください。(".__LINE__.")</p>\n";
    } else {
        $query = "SELECT * FROM \"theme\" WHERE \"isOpen\"=1 ";
        $res = $db->query($query);
        $res = $res->fetchArray();
        if ($res == false) {
            $err .= "<p class=\"error\">現在、投稿を受け付けていません。</p>\n";
        } else {
            $theme = array(
                'id'        => $res['id'],
                'name'      => $res['theme'],
                'year'      => $res['year'],
                'month'     => $res['month'],
                'ttl'       => $res['ttl'],
                'isRemake'  => $res['isRemake'],
            );
        }

    }
} catch (Exception $e) {
    $err .= "<p class=\"error\">問題が発生しました。管理者に連絡してください。(".__LINE__.")</p>\n";
}

$uidOptions = '<option value="1" selected="selected">作品番号1</option>';
for ($i=2; $i<=IMAGE_MAX_UID; ++$i) {
    $uidOptions .= "<option value=\"{$i}\">作品番号{$i}</option>";
}
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../../../default.css" type="text/css">
		<title>Creation's Graffiti</title>
		<style type="text/css">
			<!--
				#qa dt {
					background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAMCAYAAACA0IaCAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAB3RJTUUH3QQUDB87PcTdhwAAADF0RVh0Q29tbWVudABDcmVhdGVkIGJ5IEFLQUkuCmh0dHA6Ly9ha2Fpbm8uaWluYWEubmV0L+kOkZgAAADHSURBVCjP3ZI9DgFhEIaf+dZKBI29gMYZ0DkGLmBLB0A2DiG2VUhcQOMCOkcQJaG1icUo1iYrsUKovN38PTOZGQEIx9QsYSJQ4U2psr5A23ZZxj4BuPrsBZynRXBIGFkRiolYcAwoF7rsADJ3opPSfWZcmg8+H01MkrNtShDBDD/Un8A8LzpYmjLvQMIRVctigNJ4lRe9xpizCNaTa26ABdASIZ/yOnOUlXHpxbChCP1v9iUdxAAYl8FZqasyVWX7KUiVE7/WDYhrOGZjqyLbAAAAAElFTkSuQmCC) no-repeat left center;color:orange;padding-left: 30px;
				}
				#qa dd {
					background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAMCAYAAACA0IaCAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAB3RJTUUH3QQUDB8zMx9VtQAAADF0RVh0Q29tbWVudABDcmVhdGVkIGJ5IEFLQUkuCmh0dHA6Ly9ha2Fpbm8uaWluYWEubmV0L+kOkZgAAAD/SURBVCjPrZCxSgNhEIS//e8KEYJiCsHG69JfIL6CYOUbWIiVvoPPYOUDpBEkWFiIVRrbJHAglim0CQgKFpHzv7G43CUEz6DcNMuyM7Oza8yQxvFeACeY7RvsUAFBBjwh9aZpermeJC/FzACyOL4wszP+CElTSUfBcHgFEOaWdlol8HAg7yfldue2A7PbXGZrwDEwN7NZwp/w4f3D5mj0XvSvnU5jy/s5wazUhqtO2QiCN7XbC1F9JddRI1Ym89Khsuy53O5cy5l1/2UWDgY3i/04ipLdZrNby5njKPqq7WeTfl+1mT3C72aS7rVEEmSSrpcF5yBBT3n9lHRXzL4B9cRajmpwJ7sAAAAASUVORK5CYII=) no-repeat left center;
					border-bottom: 1px #c0c0c0 solid;margin-bottom:1em;color:crimson;padding-left: 30px;
				}
				form legend{font-size:large;margin:.5em;}
				form label{display:block;}
				form input[type='submit']{display:block;height:3em;margin:1em auto;}
			-->
		</style>
	</head>
	<body>
		<div class="article">
			<div class="header">
				<h1>
					<a href="http://creations-site.sakura.ne.jp/"><img src="http://creations-site.sakura.ne.jp/img/logo.jpg" alt="Creation's Graffiti" /></a>
				</h1>
				<div class="navi">
					<h2><a href="../../">index</a></h2>
					<h2><a href="../../about.html">about</a></h2>
					<h2 id="this_page"><a href="../../gallery.html">gallery</a></h2>
					<h2><a href="../../event.html">events</a></h2>
					<h2><a href="../../study.html">study</a></h2>
					<h2><a href="../../bbs.html">bbs</a></h2>
					<h2><a href="../../contact.html">contact</a></h2>
					<h2><a href="../../link.html">link</a></h2>
				</div>
			</div>
			<div class="section">
			<h1>定期作品アップローダー</h1>
			<!--
				<div style="border:thick dashed cyan;font-weight:bold;text-align:center;margin:1em;padding:1ex;max-width:30em;">
					<strong>作品jpg画像（画像名はteiki.jpg）</strong><br>
					＋<br>
					<strong>リメイク前の作品jpg画像（画像名はteiki2.jpg）</strong><br>
					＋<br>
					<strong>100pxの正方形jpg画像（画像名はteiki_s.jpg）</strong><br>
				</div>
				<p>
					上記ファイルを入れたフォルダーの名前を<font color="RED">1_中原</font>や<font color="RED">2_にぱ</font>のような、学年とHNで構成された名前にし、<br>
					そのフォルダを<font color="RED">ZIP</font>で圧縮してまとめ、提出してください。</p>
				<p>
					作品が複数ある人は別名のZIPにまとめて、それぞれ提出しましょう。<br>
					<small>例：一つ目のZIP→2_中原#1.zip　　2つ目のZIP→2_中原#22.zip</small>
				</p>
				<p>
			-->
				<p>作品のサイズは、大きくても長辺が1000px前後にとどまるようにし、容量は最大で700kb程度に抑えましょう。</p>
				<p>サムネイル画像は、100px*100pxのjpgです。</p>
                <?php if ($err === '') : ?>
				<form action="upload.php" method="post" id="data" enctype="multipart/form-data">
					<fieldset>
						<legend>作品情報</legend>
                        <label for="title">作品のタイトル</label><input type="text" id="title" name="title" size="20" autofocus="autofocus" value="" />&nbsp;<select name="uid" title="同じ番号の作品を提出した場合、上書きされます"><?php echo $uidOptions; ?></select>&nbsp;<select name="touchup"><option value="0">新規</option><option value="1">修正</option></select>
						<label for="text">ハンドルネーム</label><input type="text" id="text" name="handle" size="20" />&nbsp;<select name="grade"><option value="0" selected="selected">学年を選択</option><option value="1">1学年</option><option value="2">2学年</option><option value="3">3学年</option><option value="4">4学年</option><option value="5">その他</option></select>						<label for="comment">コメント</label><textarea id="comment" name="comment" cols="50" rows="5" ></textarea>
					</fieldset>
					<fieldset>
						<legend>ファイル選択</legend>
						<label for="img">作品画像<small>(teiki.jpg)</small></label><input type="file" name="img" />
                        <?php if ($theme['isRemake']): ?>
                        <label for="orig">リメイク前作品画像<small>(teiki2.jpg)</small></label><input type="file" name="orig" />
                        <?php endif; ?>
						<label for="thm">サムネイル[100px * 100px]<small>(teiki_s.jpg)</small></label><input type="file" name="thm" />
					</fieldset>
					<input type="submit" value="送信する" />
                </form>
                <?php else: ?>
                <?php echo $err; ?>
                <?php endif; ?>
			</div>
			<div class="section" id="qa">
				<h1>よくある質問</h1>
				<dl>
					<dt>昔制作した作品を定期イラストとして提出していいの？</dt>
					<dd><p>提出する作品は、なるべく未発表で、定期のために描いた作品を提出するようにしてください。</p></dd>
					<dt>定期作品として発表した作品をCreationとは無関係の場で公表してもいいの？</dt>
					<dd><p>ご自身の作品であれば構いません。</p></dd>
					<dt>模写作品の投稿はしていいの？</dt>
					<dd><p>他人の絵の構図などを<strong>トレス(構図などを全く同じように描く)</strong>した作品などは、Creationでの投稿はお控えください。しかし、ある程度参考にしたり、風景の模写だったりは許されるかもしれません。</p><p>こちらは非常に難しい質問です。公開しても問題にならないかどうかをよく考えた上、個人の裁量で投稿の是非をお決めください。</p></dd>
					<dt>ちょっと過激な表現なんだけど大丈夫かな。</dt>
					<dd><p>ギャラリーは公に公開されています。どのくらいの表現が許されるかは過去ギャラリーを眺め、ご自身でお考えください。少しでも「あぶないかな？」と感じましたら、投稿はお控えください。</p></dd>
					<dt>二次創作作品を提出したいです。</dt>
					<dd><p>構いません。しかし、何か問題があった場合は削除されるかもしれません。</p></dd>
					<dt>友達と一緒に描いた作品を提出しても大丈夫？</dt>
					<dd><p>作品を作る時、他人の線画に色を塗ったり、作業を分担したりして制作することがあるかもしれません。こういった<strong>合作作品</strong>は、合作をした相手からの許可があればCreationで公開しても構いません。その際は、コメントや名前などで情報を記載しておくといいでしょう。</p></dd>
					<dt>サークルに行けないので定期作品が提出できない！！</dt>
					<dd><p><em>定期作品アップローダー</em>は学外でも動作いたします。なので、あらかじめ学外からアップロードしてもらっても構いません。</p><p>しかし、アップロードしたからには、二日ある発表日のどちらか片方でもいいので、<strong>発表には参加するようにしましょう</strong>。</p></dd>
					<dt>作品を複数投稿してもいいの？</dt>
					<dd><p>今のところ構いません。しかし、多くても3枚程度にしましょう。</p><p>また、これから先、多くの部員が複数投稿をするようになると、処理の煩雑化や規模の問題などから複数投稿を禁止するようになるかもしれません。</p></dd>
					<dt>この作品全然時間かけてないんですけど提出してもいいですか？</dt>
					<dd><p>構いません。</p><p>定期で提出する作品には、かかった時間よりも、ちゃんと力を入れて描いたかどうかが問題です。あなたのできる限りの力を出して描きあげるようにしましょう。</p></dd>
					<dt>○○の形式でギャラリーに載せてもらいたい！</dt>
					<dd><p>web担当に個人相談をお願いします。</p></dd>
				</dl>
			<div class="footer">Copyright 2000-2014 Creation all rights reserved.</div>
		</div>
	</body>
</html>

