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
				��w�ՂɂĎg��ꂽ��i�^�C�g������͂��ĉ������B<br>
				��i�ɑΉ�������҂̃A���P�[�g���ʂ��\������܂��B
			</p>
			<FORM action='comment.php' method='post' >
				<p>
					<input type='text' name='title'><input type='submit' value="�I��">
				</p>
			</FORM>
			<p>
				<a href="rank.html" title="�߂�">back</a>
			</p>
			<?php

			$title = $_POST["title"];

			/*
				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>�G�C�X�P</td>";
				echo "		<th>NO</th><td>17</td><td>17</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>1100ps</td><td>1100ps</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>144</td><td>144</td>";
				echo "	</tr>";
				echo "</table>";
				echo "</div>";
			*/


			if ( $title == '1100ps'){//------------------------------------------------------------------
				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>�G�C�X�P</td>";
				echo "		<th>NO</th><td>17</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>1100ps</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>144</td>";
				echo "	</tr>";
				echo "</table>";

			}else if ( $title == '�ԁF��'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>��</td>";
				echo "		<th>NO</th><td>28</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>�ԁF��</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>103</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '���̖���' || $title == 'OS SphereLinks' ){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>YY</td>";
				echo "		<th>NO</th><td>26</td><td>27</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D/3D����</td><td>2D/3D����</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>OS SphereLinks</td><td>���̖���</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>23</td><td>81</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == 'POE'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>����</td>";
				echo "		<th>NO</th><td>15</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>POE</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>78</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == 'Lexus LF-A 2007' || $title == 'Half-Orc' ){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>Sat</td>";
				echo "		<th>NO</th><td>29</td><td>30</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>3D</td><td>3D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>Half-Orc</td><td>Lexus LF-A 2007</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>30</td><td>55</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '�V�ƒn�̓�d�t'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>�˓c</td>";
				echo "		<th>NO</th><td>20</td><td>21</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>�V�ƒn�̓�d�t</td><td>�V�ƒn�̓�d�t</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>36</td><td>23</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '�z��' || $title == '����' ){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>����</td>";
				echo "		<th>NO</th><td>22</td><td>23</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>�z��</td><td>����</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>28</td><td>13</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '���̖�'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>�K�[��</td>";
				echo "		<th>NO</th><td>25</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>���̖�</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>27</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '��'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>�O�~�^���[</td>";
				echo "		<th>NO</th><td>16</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>��</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>26</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '�h���Z���E�V�X�e�B�t����'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>�ۂ��ہi�L�E�ցE�M�j</td>";
				echo "		<th>NO</th><td>14</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>�h���Z���E�V�X�e�B�t����</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>21</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '�i��'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>Y/N</td>";
				echo "		<th>NO</th><td>18</td><td>19</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>�i��</td><td>�i��</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>18</td><td>17</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '�g�̉�'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>�ߌ�</td>";
				echo "		<th>NO</th><td>24</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>�g�̉�</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>18</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == 'UFO���Ⴟ��q'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>�h�A</td>";
				echo "		<th>NO</th><td>11</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>UFO���Ⴟ��q</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>17</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == '�̕P�o���`�~�N�ƃ��C�R�`'){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>���_</td>";
				echo "		<th>NO</th><td>12</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>�̕P�o���`�~�N�ƃ��C�R�`</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>8</td>";
				echo "	</tr>";
				echo "</table>";
	
			}else if ( $title == 'Not Enough Memory.' || $title == 'Not Enough Memory' ){//------------------------------------------------------------------

				echo "<table border='1' align='center'>";
				echo "	<tr>";
				echo "		<th>��Җ�</th><td>Macky</td>";
				echo "		<th>NO</th><td>13</td>";
				echo "	</tr>";
				echo "	<tr>";
				echo "		<th>����</th><td>Creation</td>";
				echo "		<th>�W������</th><td>2D</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�^�C�g��</th><td>Not Enough Memory.</td>";
				echo "	</tr>";
				echo "	<tr><td></td><td></td>";
				echo "		<th>�[��</th><td>4</td>";
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
				echo "			��i�̃^�C�g������͂��ĉ������B";
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
				echo "			���T���̍�i��������܂���ł����B";
				echo "		</td>";
				echo "	</tr>";
				echo "</table>";
			}
			?>
			<div id="footer">Copyright 2000-2011 Creation all rights reserved.</div>
		</div>
	</div>
</BODY></HTML>
