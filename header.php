<?php
function marker($key) {
  if (strpos($_SERVER['SCRIPT_NAME'], $key) !== false) {
    return ' id="this_page"';
  }
}
?>
		<div class="header">
			<h1><a href="/"><img src="/img/logo.jpg" alt="Creation's Graffiti ホームページ" /></a></h1>
			<ul class="nav">
				<li><a href="/">index</a></li>
				<li<?php echo marker('about'); ?>><a href="/about.php">about</a></li>
				<li<?php echo marker('gallery'); ?>><a href="/gallery.php">gallery</a></li>
				<li<?php echo marker('event'); ?>><a href="/event.php">events</a></li>
				<li<?php echo marker('study'); ?>><a href="/study.php">study</a></li>
				<li<?php echo marker('bbs'); ?>><a href="/bbs.php">bbs</a></li>
				<li<?php echo marker('contact'); ?>><a href="/contact.php">contact</a></li>
				<li<?php echo marker('link'); ?>><a href="/link.php">link</a></li>
			</ul>
			<iframe src="http://creations-site.sakura.ne.jp/bbs/counter/index.cgi" title="counter" style="border:none;margin-top:2em;width:120px;height:15px;"></iframe>
		</div>
