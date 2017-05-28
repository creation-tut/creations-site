<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><HTML lang="ja-JP">
<HEAD>
	<META http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
	<META http-equiv="Content-Style-Type" content="text/css">
	<link rel="stylesheet" href="http://creations-site.sakura.ne.jp/base.css" type="text/css">

	<TITLE>Creation's Graffiti</TITLE>
</HEAD>
<BODY>
	<div id="contents">
		<div id="header">
			<h1><a href="http://creations-site.sakura.ne.jp/"><img src="http://creations-site.sakura.ne.jp/img/logo.jpg" width="200" height="130" alt="Creation's Graffiti"></a></h1>
			<div id="menu">
				<ul><center>
					<li><a href="http://creations-site.sakura.ne.jp/.html">index</a></li>
					<li><a href="http://creations-site.sakura.ne.jp/about.html">about</a></li>
					<li><a href="http://creations-site.sakura.ne.jp/gallery.html">gallery</a></li>
					<li id="this_page"><a href="http://creations-site.sakura.ne.jp/event.html">events</a></li>
					<li><a href="http://creations-site.sakura.ne.jp/study.html">study</a></li>
					<li><a href="http://creations-site.sakura.ne.jp/bbs.html">bbs</a></li>
					<li><a href="http://creations-site.sakura.ne.jp/contact.html">contact</a></li>
					<li><a href="http://creations-site.sakura.ne.jp/link.html">link</a></li>
        		</center></ul>
			</div>
		</div>
		<div id="main">
			<p>
				大学祭にて使われた作品タイトルを入力して下さい。<br>
				作品に対応した作者のアンケート結果が表示されます。
			</p>
			<FORM action='comment.php' method='post' >
				<p>
					<input type='text' name='title'><input type='submit' value="選択">
				</p>
			</FORM>
			<p>
				<a href="rank.html" title="戻る">back</a>
			</p>
			<?php

			$title = $_POST["title"];

			/*
				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>エイスケ</td>";
				echo "		<th>NO</th><td>17</td><td>17</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>1100ps</td><td>1100ps</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>144</td><td>144</td>";
				echo "	</tr>";
				echo "</table>";
				echo "</div>";
			*/


			if ( $title == '1100ps'){//------------------------------------------------------------------
				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>エイスケ</td>";
				echo "		<th>NO</th><td>17</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>1100ps</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>144</td>";
				echo "	</tr>";
				echo "</table>";

			}else if ( $title == '赤：青'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>月</td>";
				echo "		<th>NO</th><td>28</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>赤：青</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>103</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '宵の明星' || $title == 'OS SphereLinks' ){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>YY</td>";
				echo "		<th>NO</th><td>26</td><td>27</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D/3D複合</td><td>2D/3D複合</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>OS SphereLinks</td><td>宵の明星</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>23</td><td>81</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == 'POE'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>くろ</td>";
				echo "		<th>NO</th><td>15</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>POE</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>78</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == 'Lexus LF-A 2007' || $title == 'Half-Orc' ){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>Sat</td>";
				echo "		<th>NO</th><td>29</td><td>30</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>3D</td><td>3D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>Half-Orc</td><td>Lexus LF-A 2007</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>30</td><td>55</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '天と地の二重奏'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>戸田</td>";
				echo "		<th>NO</th><td>20</td><td>21</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>天と地の二重奏</td><td>天と地の二重奏</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>36</td><td>23</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '陽浴' || $title == '腐盲' ){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>ぢん</td>";
				echo "		<th>NO</th><td>22</td><td>23</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>陽浴</td><td>腐盲</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>28</td><td>13</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '蒼の木'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>ガゼル</td>";
				echo "		<th>NO</th><td>25</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>蒼の木</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>27</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '翼'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>グミタロー</td>";
				echo "		<th>NO</th><td>16</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>翼</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>26</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == 'ドロセラ・システィフロラ'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>ぽっぽ（´・ω・｀）</td>";
				echo "		<th>NO</th><td>14</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>ドロセラ・システィフロラ</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>21</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '永夜'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>Y/N</td>";
				echo "		<th>NO</th><td>18</td><td>19</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>永夜</td><td>永夜</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>18</td><td>17</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '紅の花'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>那月</td>";
				echo "		<th>NO</th><td>24</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>紅の花</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>18</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == 'UFOきゃちゃ子'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>ドア</td>";
				echo "		<th>NO</th><td>11</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>UFOきゃちゃ子</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>17</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '歌姫姉妹～ミクとメイコ～'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>七神</td>";
				echo "		<th>NO</th><td>12</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>歌姫姉妹～ミクとメイコ～</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>8</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == 'Not Enough Memory.' || $title == 'Not Enough Memory' ){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>作者名</th><td>Macky</td>";
				echo "		<th>NO</th><td>13</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>所属</th><td>Creation</td>";
				echo "		<th>ジャンル</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>タイトル</th><td>Not Enough Memory.</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>票数</th><td>4</td>";
				echo "	</tr>";
				echo "</table>";

			}else if( $title == '' ){//------------------------------------------------------------------

				echo "<table border='0' align='center'>";
				echo "	<tr>";
				echo "		<th><h1>Please input a title.</h1></th>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<td align='center'>";
				echo "			<hr>";
				echo "			作品のタイトルを入力して下さい。";
				echo "		</td>";
				echo "	</tr>";
				echo "</table>";

	
			}else{//------------------------------------------------------------------

				echo "<table border='0' align='center'>";
				echo "	<tr>";
				echo "		<th><h1>Not Found</h1></th>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<td align='center'>";
				echo "			<hr>";
				echo "			お探しの作品が見つかりませんでした。";
				echo "		</td>";
				echo "	</tr>";
				echo "</table>";
			}
			?>
			<div id="footer">Copyright 2000-2011 Creation all rights reserved.</div>
		</div>
	</div>
</BODY></HTML>
