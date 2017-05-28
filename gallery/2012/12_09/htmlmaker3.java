
import java.io.*;

class remakemaker3 {

	public static void main(String args[]) throws IOException {
		System.out.println("Making....");

		File dirs = new File("hp");
		if (!dirs.exists()) {
			dirs.mkdirs();	//make folders
		}

		String people[][];//作品データの文字列を格納するString型の配列を初期化

		try {
			//テキストファイルの読み込み//
			BufferedReader br =
					new BufferedReader(new FileReader(args[0]));

			System.out.println("Read....");

			//テキストファイルの最初に記述した人数を代入//
			String stlp = br.readLine();
			int n = Integer.parseInt(stlp);

			//人数分×4（タイトル、HN、コメント、改行）の配列と文字列型変数を宣言//
			people = new String[n][3];
			String spe;

			//人数の次の空白行を読み込み//
			spe = br.readLine();

			//配列にデータを格納（テキストファイル二行目以降）//
			for (int i = 0; i < n; i++) {
				for (int j = 0; j < 3; j++) {
					people[i][j] = br.readLine();
				}
				spe = br.readLine();
			}

			//格納したデータと、コマンドラインを元にHTMLファイルを作成//
			for (int k = 0; k < n; k++) {

				int kex = k + 1;//ページ送り、戻し用計算

				String na;//1^9までのhtmlの名前の先頭に0を付けるための文字列型変数

				if (k < 9) {
					na = "0" + (kex) + ".html";
				} else {
					na = (kex) + ".html";
				}

				PrintWriter pw1 = new PrintWriter(new BufferedWriter(new FileWriter("hp/" + na)));

				System.out.println("Write(" + kex + "人目)");//人数カウント(デバッグ含む)


				pw1.println("<?xml version=\"1.0 \" encodeing=\"shift_jis\"?>");//ここからhtml内のヘッダとか
				pw1.println("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">");
				pw1.println("<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"ja\" lang=\"ja\"><head>");
				pw1.println("\t<script type=\"text/javascript\" src=\"highslide/highslide-with-gallery.js\"></script>");
				pw1.println("\t<link rel=\"stylesheet\" type=\"text/css\" href=\"highslide/highslide.css\" />");
				pw1.println("\t<link rel=\"stylesheet\" type=\"text/css\" href=\"highslide/highslide-ie6.css\" />");
				pw1.println("\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://creations-site.sakura.ne.jp/base.css\" />");

				pw1.println("<script type=\"text/javascript\">");//ここからhtml内のjavasclipt
				pw1.println("\ths.graphicsDir = 'highslide/graphics/';");
				pw1.println("\ths.align = 'center';");
				pw1.println("\ths.transitions = ['expand', 'crossfade'];");
				pw1.println("\ths.fadeInOut = true;");
				pw1.println("\ths.dimmingOpacity = 0.8;");
				pw1.println("\ths.wrapperClassName = 'borderless floating-caption';");
				pw1.println("\ths.captionEval = 'this.thumb.alt';");
				pw1.println("\ths.marginLeft = 100; // make room for the thumbstrip");
				pw1.println("\ths.marginBottom = 80 // make room for the controls and the floating caption");
				pw1.println("\ths.numberPosition = 'caption';");
				pw1.println("\ths.lang.number = '%1/%2';");
				pw1.println("\t// Add the slideshow providing the controlbar and the thumbstrip");
				pw1.println("\ths.addSlideshow({");
				pw1.println("\t\t//slideshowGroup: 'group1',");
				pw1.println("\t\tinterval: 5000,");
				pw1.println("\t\trepeat: false,");
				pw1.println("\t\tuseControls: true,");
				pw1.println("\t\toverlayOptions: {");
				pw1.println("\t\t\tclassName: 'text-controls',");
				pw1.println("\t\t\tposition: 'bottom center',");
				pw1.println("\t\t\trelativeTo: 'viewport',");
				pw1.println("\t\t\toffsetX: 50,");
				pw1.println("\t\t\toffsetY: -5");
				pw1.println("\t\t},");
				pw1.println("\t\tthumbstrip: {");
				pw1.println("\t\t\tposition: 'middle left',");
				pw1.println("\t\t\tmode: 'vertical',");
				pw1.println("\t\t\trelativeTo: 'viewport'");
				pw1.println("\t\t}");
				pw1.println("\t});");
				pw1.println("\t// Add the simple close button");
				pw1.println("\ths.registerOverlay({");
				pw1.println("\t\thtml: '<div class=\"closebutton\" onclick=\"return hs.close(this)\" title=\"Close\"></div>',");
				pw1.println("\t\tposition: 'top right',");
				pw1.println("\t\tfade: 2 // fading the semi-transparent overlay looks bad in IE");
				pw1.println("\t});");
				pw1.println("\t//<![CDATA[");
				pw1.println("\t\t\tvar maxWidth = 640;");
				pw1.println("\t\t\twindow.onload = function(){");
				pw1.println("\t\t\t\tvar elements = document.getElementsByTagName(\"img\");");
				pw1.println("\t\t\t\tfor(i=0;i<elements.length;i++){");
				pw1.println("\t\t\t\t\t\tif(elements[i].width > maxWidth){");
				pw1.println("\t\t\t\t\t\t\telements[i].width = maxWidth;}}}");
				pw1.println("\t//]]>");
				pw1.println("</script>");

				pw1.println("<style type=\"text/css\">");//ここからhtml内のスタイル
				pw1.println("/* Center the text in the caption */");
				pw1.println(".highslide-caption\t{width: 100%;text-align: center;}");
				pw1.println("/* Remove the close button from the controls since we already have one in the corner of the image */");
				pw1.println(".highslide-close\t{display: none !important;}");
				pw1.println("/* Put the image number in front of the caption */");
				pw1.println("/* 朱いデザインスタイルこのへん */");
				pw1.println(".textarea\t\t\t{text-align:center;}");
				pw1.println("h3\t\t\t\t\t{margin:1em 2em 0em;text-align:center;}");
				pw1.println("/* 朱いデザインスタイル */");
				pw1.println("</style>");


				pw1.println("<title>Creation's Graffiti</title>\n</head>");
				pw1.println("<body>");
				pw1.println("\t<div id=\"contents\">");
				pw1.println("\t\t<div id=\"header\">");
				pw1.println("\t\t\t<h1><a href=\"http://creations-site.sakura.ne.jp/\"><img src=\"http://creations-site.sakura.ne.jp/img/logo.jpg\" width=\"200\" height=\"130\" alt=\"Creation's Graffiti\"></a></h1>");
				pw1.println("\t\t\t<div id=\"menu\">");
				pw1.println("\t\t\t\t<ul>");
				pw1.println("\t\t\t\t\t<center>");
				pw1.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/index.html\">index</a></li>");
				pw1.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/about.html\">about</a></li>");
				pw1.println("\t\t\t\t\t\t<li id=\"this_page\"><a href=\"http://creations-site.sakura.ne.jp/gallery.html\">gallery</a></li>");
				pw1.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/event.html\">events</a></li>");
				pw1.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/study.html\">study</a></li>");
				pw1.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/bbs.html\">bbs</a></li>");
				pw1.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/contact.html\">contact</a></li>");
				pw1.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/link.html\">link</a></li>");
				pw1.println("\t\t\t\t\t</center>");
				pw1.println("\t\t\t\t</ul>");
				pw1.println("\t\t\t</div>");
				pw1.println("\t\t</div>");
				pw1.println("\t\t<div id=\"main\"><h2>■2012年" + args[1] + "月定期作品</h2>");
				pw1.println("\t\t\t<div class=\"textarea\">");

				if (k == 0) {
					pw1.println("\t\t\t\t<h3>\n\t\t\t\t\t<a href=\"" + n + ".html\">&lt;&lt;前のイラストへ■</a>");
				} else if (k < 10) {
					pw1.println("\t\t\t\t<h3>\n\t\t\t\t\t<a href=\"0" + (kex - 1) + ".html\">&lt;&lt;前のイラストへ■</a>");
				} else {
					pw1.println("\t\t\t\t<h3>\n\t\t\t\t\t<a href=\"" + (kex - 1) + ".html\">&lt;&lt;前のイラストへ■</a>");
				}
				pw1.println("\t\t\t\t\t&nbsp;&nbsp;　<a href=\"../index.html\">▲</a>　&nbsp;&nbsp;");
				if (k == n - 1) {
					pw1.println("\t\t\t\t\t<a href=\"01.html\">■次のイラストへ&gt;&gt;</a>\n\t\t\t\t</h3>");
				} else if (k < 8) {
					pw1.println("\t\t\t\t\t<a href=\"0" + (kex + 1) + ".html\">■次のイラストへ&gt;&gt;</a>\n\t\t\t\t</h3>");
				} else {
					pw1.println("\t\t\t\t\t<a href=\"" + (kex + 1) + ".html\">■次のイラストへ&gt;&gt;</a>\n\t\t\t\t</h3>");
				}

				pw1.println("\t\t\t\t<div class=\"highslide-gallery\" >");
				pw1.println("\t\t\t\t\t<div id=\"listhead\">▼" + people[k][0] + "</div>");//作品タイトルを書き込む

				if (kex == 1) {
					pw1.println("\t\t\t\t\t<a class=\"highslide\" id=\"thumb1\" href=\"../" + args[2] + "/01/teiki.jpg\" title=\"teiki\" onclick=\"return hs.expand(this)\"><img src=\"../" + args[2] + "/01/teiki.jpg\" alt=\"pic\" /></a>");
					pw1.println("\t\t\t\t\t\t<div class=\"hidden-container\">");
					for (int p = 2; p <= n; p++) {
						if (p <= 9) {
							pw1.println("\t\t\t\t\t\t<a class=\"highslide\" id=\"thumb1\" href=\"../" + args[2] + "/0" + p + "/teiki.jpg\" title=\"teiki\" onclick=\"return hs.expand(this)\"><img src=\"../" + args[2] + "/0" + p + "/teiki_s.jpg\" alt=\"pic\"/></a>");
						} else {
							pw1.println("\t\t\t\t\t\t<a class=\"highslide\" id=\"thumb1\" href=\"../" + args[2] + "/" + p + "/teiki.jpg\" title=\"teiki\" onclick=\"return hs.expand(this)\"><img src=\"../" + args[2] + "/" + p + "/teiki_s.jpg\" alt=\"pic\"/></a>");
						}
					}
					pw1.println("\t\t\t\t\t</div>");


				} else if (kex == n) {
					pw1.println("\t\t\t\t\t\t<div class=\"hidden-container\">");
					for (int p = 1; p < n; p++) {
						if (p <= 9) {
							pw1.println("\t\t\t\t\t\t<a class=\"highslide\" id=\"thumb1\" href=\"../" + args[2] + "/0" + p + "/teiki.jpg\" title=\"teiki\" onclick=\"return hs.expand(this)\"><img src=\"../" + args[2] + "/0" + p + "/teiki_s.jpg\" alt=\"pic\"/></a>");
						} else {
							pw1.println("\t\t\t\t\t\t<a class=\"highslide\" id=\"thumb1\" href=\"../" + args[2] + "/" + p + "/teiki.jpg\" title=\"teiki\" onclick=\"return hs.expand(this)\"><img src=\"../" + args[2] + "/" + p + "/teiki_s.jpg\" alt=\"pic\"/></a>");
						}
					}
					pw1.println("\t\t\t\t\t</div>");
					if (n <= 9) {
						pw1.println("\t\t\t\t\t\t<a class=\"highslide\" id=\"thumb1\" href=\"../" + args[2] + "/0" + n + "/teiki.jpg\" title=\"teiki\" onclick=\"return hs.expand(this)\"><img src=\"../" + args[2] + "/0" + n + "/teiki.jpg\" alt=\"pic\" /></a>");
					} else {
						pw1.println("\t\t\t\t\t\t<a class=\"highslide\" id=\"thumb1\" href=\"../" + args[2] + "/" + n + "/teiki.jpg\" title=\"teiki\" onclick=\"return hs.expand(this)\"><img src=\"../" + args[2] + "/" + n + "/teiki.jpg\" alt=\"pic\" /></a>");
					}


				} else {
					pw1.println("\t\t\t\t\t<div class=\"hidden-container\">");
					for (int p = 1; p <= n; p++) {
						if (p <= 9 && p != kex) {
							pw1.println("\t\t\t\t\t\t<a class=\"highslide\" id=\"thumb1\" href=\"../" + args[2] + "/0" + p + "/teiki.jpg\" title=\"teiki\" onclick=\"return hs.expand(this)\"><img src=\"../" + args[2] + "/0" + p + "/teiki_s.jpg\" alt=\"pic\"/></a>");
						} else if (p != kex) {
							pw1.println("\t\t\t\t\t\t<a class=\"highslide\" id=\"thumb1\" href=\"../" + args[2] + "/" + p + "/teiki.jpg\" title=\"teiki\" onclick=\"return hs.expand(this)\"><img src=\"../" + args[2] + "/" + p + "/teiki_s.jpg\" alt=\"pic\"/></a>");
						} else if (p <= 9) {
							pw1.println("\t\t\t\t\t</div>");
							pw1.println("\t\t\t\t\t\t<a class=\"highslide\" id=\"thumb1\" href=\"../" + args[2] + "/0" + p + "/teiki.jpg\" title=\"teiki\" onclick=\"return hs.expand(this)\"><img src=\"../" + args[2] + "/0" + p + "/teiki.jpg\" alt=\"pic\" /></a>");
							pw1.println("\t\t\t\t\t\t<div class=\"hidden-container\">");
						} else {
							pw1.println("\t\t\t\t\t</div>");
							pw1.println("\t\t\t\t\t\t<a class=\"highslide\" id=\"thumb1\" href=\"../" + args[2] + "/" + p + "/teiki.jpg\" title=\"teiki\" onclick=\"return hs.expand(this)\"><img src=\"../" + args[2] + "/" + p + "/teiki.jpg\" alt=\"pic\" /></a>");
							pw1.println("\t\t\t\t\t<div class=\"hidden-container\">");
						}
					}
					pw1.println("\t\t\t\t\t</div>");
				}

				pw1.println("\t\t\t\t\t<div id=\"listfoot\">Created by " + people[k][1] + "▲</div>");//HNを書き込む
				pw1.println("\t\t\t\t</div>");

				if (k == 0) {
					pw1.println("\t\t\t\t<h3>\n\t\t\t\t\t<a href=\"" + n + ".html\">&lt;&lt;前のイラストへ■</a>");
				} else if (k < 10) {
					pw1.println("\t\t\t\t<h3>\n\t\t\t\t\t<a href=\"0" + (kex - 1) + ".html\">&lt;&lt;前のイラストへ■</a>");
				} else {
					pw1.println("\t\t\t\t<h3>\n\t\t\t\t\t<a href=\"" + (kex - 1) + ".html\">&lt;&lt;前のイラストへ■</a>");
				}
				pw1.println("\t\t\t\t\t&nbsp;&nbsp;　<a href=\"../index.html\">▲</a>　&nbsp;&nbsp;");
				if (k == n - 1) {
					pw1.println("\t\t\t\t\t<a href=\"01.html\">■次のイラストへ&gt;&gt;</a>\n\t\t\t\t</h3>");
				} else if (k < 8) {
					pw1.println("\t\t\t\t\t<a href=\"0" + (kex + 1) + ".html\">■次のイラストへ&gt;&gt;</a>\n\t\t\t\t</h3>");
				} else {
					pw1.println("\t\t\t\t\t<a href=\"" + (kex + 1) + ".html\">■次のイラストへ&gt;&gt;</a>\n\t\t\t\t</h3>");
				}

				pw1.println("\t\t\t\t<p style=\"font-weight:bold;\">▼：comment：▼</p><p>" + people[k][2] + "</p>");//コメントを書き込む
				pw1.println("\t\t\t</div><div id=\"footer\"><div id=\"copy\">Copyright 2000-2012 Creation all rights reserved.</div></div>");
				pw1.println("\t\t</div>");
				pw1.println("\t</div>");
				pw1.println("</body></html>");

				pw1.close();//ファイルを閉じる
			}

			//index.html(サムネイル表示のページ)作成//
			PrintWriter pw2 = new PrintWriter(new BufferedWriter(new FileWriter("index.html")));

			System.out.println("Write index.html");

			pw2.println("<?xml version=\"1.0 \" encodeing=\"shift_jis\"?>");
			pw2.println("<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\"><html lang=\"ja-JP\"><head>");
			pw2.println("\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=shift_jis\">");
			pw2.println("\t<meta http-equiv=\"Content-Style-Type\" content=\"text/css\">");
			pw2.println("\t<meta http-equiv=\"Content-Script-Type\" content=\"text/javascript\">");
			pw2.println("\t<link rel=\"stylesheet\" href=\"http://creations-site.sakura.ne.jp/base.css\" type=\"text/css\">");
			pw2.println("\t<script type=\"text/javascript\">");
			pw2.println("\t<!--");
			pw2.println("\t\tfunction pic(id, image) {");
			pw2.println("\t\t\tdocument.images[id].src = image;");
			pw2.println("\t\t\tdocument.images[id].alt = image;");
			pw2.println("\t\t}");
			pw2.println("\t\timgnum=1;");
			pw2.println("\t\tfunction changeImage(){");
			pw2.println("\t\t\tif(imgnum==1){");
			pw2.println("\t\t\t\tdocument.title.src=\".jpg\";");
			pw2.println("\t\t\t\timgnum=2;");
			pw2.println("\t\t\t}else if(imgnum==2){");
			pw2.println("\t\t\t\tdocument.title.src=\"title_2.jpg\";");
			pw2.println("\t\t\t\timgnum=1;}}");
			pw2.println("\t\t// -->");
			pw2.println("\t</script>");
			pw2.println("<title>Creation's Graffiti</title></head>");
			pw2.println("<body>");

			pw2.println("\t<div id=\"contents\">");
			pw2.println("\t\t<div id=\"header\">");
			pw2.println("\t\t\t<h1><a href=\"http://creations-site.sakura.ne.jp/\"><img src=\"http://creations-site.sakura.ne.jp/img/logo.jpg\" width=\"200\" height=\"130\" alt=\"Creation's Graffiti\"></a></h1>");
			pw2.println("\t\t\t<div id=\"menu\">");
			pw2.println("\t\t\t\t<ul>");
			pw2.println("\t\t\t\t\t<center>");
			pw2.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/index.html\">index</a></li>");
			pw2.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/about.html\">about</a></li>");
			pw2.println("\t\t\t\t\t\t<li id=\"this_page\"><a href=\"http://creations-site.sakura.ne.jp/gallery.html\">gallery</a></li>");
			pw2.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/event.html\">events</a></li>");
			pw2.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/study.html\">study</a></li>");
			pw2.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/bbs.html\">bbs</a></li>");
			pw2.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/contact.html\">contact</a></li>");
			pw2.println("\t\t\t\t\t\t<li><a href=\"http://creations-site.sakura.ne.jp/link.html\">link</a></li>");
			pw2.println("\t\t\t\t\t</center>");
			pw2.println("\t\t\t\t</ul>");
			pw2.println("\t\t\t</div>");
			pw2.println("\t\t</div>");

			pw2.println("\t\t<div id=\"main\"><h2>■2012年" + args[1] + "月定期作品</h2>");
			pw2.println("\t\t\t<div class=\"textarea\" style=\"font: bold x-large 'serif','ＭＳ 明朝';margin:0px;\"><h3 style=\"margin:1em 2em 0em;font-family:\'HG行書体\';\">テーマ : " + args[3] + "</h3>");
			pw2.println("\t\t\t\t<div id=\"member-list\">");
			pw2.println("\t\t\t\t\t<div id=\"listhead\">▼Creators List</div>");
			pw2.println("\t\t\t\t\t<img src=\"../../thumbnail.jpg\" alt=\"thumbnail.jpg\"  name=\"myimg\" id=\"id0\" />");
			//各個人ページへのリンク作成//
			for (int l = 0; l < n; l++) {
				int lex = l + 1;
				if (l < 9) {
					pw2.println("\t\t\t\t\t<div class=\"member\"><a href=\"hp/0" + lex + ".html\" target=\"_top\" onMouseover=\"pic('id0', '" + args[2] + "/0" + lex + "/teiki_s.jpg');\" onMouseout=\"pic('id0', '../../thumbnail.jpg');\">" + people[l][1] + "</a></div>");
				} else {
					pw2.println("\t\t\t\t\t<div class=\"member\"><a href=\"hp/" + lex + ".html\" target=\"_top\" onMouseover=\"pic('id0', '" + args[2] + "/" + lex + "/teiki_s.jpg');\" onMouseout=\"pic('id0', '../../thumbnail.jpg');\">" + people[l][1] + "</a></div>");
				}
				}
			pw2.println("\t\t\t\t\t<div id=\"listfoot\">Thumbnail▲</div>");
			pw2.println("\t\t\t\t</div>");
			pw2.println("\t\t\t</div><div id=\"footer\"><div id=\"copy\">Copyright 2000-2012 Creation all rights reserved.</div></div>");
			pw2.println("\t\t</div>\n\t</div>\n</body></html>");

			pw2.close();//ファイルを閉じる

			System.out.println("All Making success!!");//成功時表示

		} //エラー//
		catch (Exception e) {
			System.out.println("Miss...orz");
		}
	}
}
