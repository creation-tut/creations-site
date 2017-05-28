<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="/default.css" />
<title>Creation's Graffiti</title>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/header.php") ?>
	<div class="article">
		<div class="section">
			<h1 id="renraku">連絡フォーム</h1>
				<p>下記フォームに必要事項を入力後、確認ボタンを押してください。</p>
				<form method="post" action="mail.php">
				<table cellpadding="5">
					<tr>
						<td class="l_Cel">■ご用件</td>
						<td>
							<select name="ご用件">
								<option value="ご質問・お問い合わせ">その他ご質問・お問い合わせ</option>
								<option value="サイトについて">サイトについて</option>
								<option value="サークルについて">サークルについて</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="l_Cel">■お名前</td>
						<td><input size="20" type="text" name="お名前" />※必須</td>
					</tr>
					<tr>
						<td>■電話番号（半角）</td>
						<td><input size="30" type="text" name="電話番号" /></td>
					</tr>
					<tr>
						<td>■Mail（半角）</td>
						<td><input size="30" type="text" name="Email" />※必須</td>
					</tr>
					<tr>
						<td>■返信不要</td>
						<td>
							<input name="返信の有無[]" type="checkbox" value="返信不要" />
						</td>
					</tr>
					<tr>
						<td colspan="2">■お問い合わせ内容<br />
						<textarea name="お問い合わせ内容" cols="60" rows="5"></textarea></td>
					</tr>
				</table>
				<p>
					<input type="submit" value="確認する" />
					<input type="reset" value="リセット" />
				</p>
				</form>
		 		<p><small>※IPアドレスを記録しております。いたずらや嫌がらせ等はご遠慮ください</small></p>
		 		<p><small>※連絡に時間がかかる場合、ツイッターなどを活用いただくとすぐご返事が返せる可能性もあります</small></p>
				</p>
		</div>
		<div class="footer">Copyright 2000-2016 Creation all rights reserved.</div>
	</div>
</body>
</html>
