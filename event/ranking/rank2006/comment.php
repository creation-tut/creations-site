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
		<tr><td>��Җ���I�����ĉ������B</td></tr>
		<tr><td align="center">
		<table border="1" BGcolor="#FFFFAA"><tr><td>
		<FORM action='comment.php' method='post' >
			<SELECT NAME='pulldown' SIZE=1>
				<OPTION VALUE=1>�ۂ��ہi�L�E�ցE�M�j
				<OPTION VALUE=2>jin
				<OPTION VALUE=3>��
				<OPTION VALUE=4>����
				<OPTION VALUE=5>�㉪�@��
				<OPTION VALUE=6>���c�@�p��
				<OPTION VALUE=7>�R�{�@�q�m
				<OPTION VALUE=8>YY
				<OPTION VALUE=9>�˓c
				<OPTION VALUE=10>Y/N
				<OPTION VALUE=11>��
				<OPTION VALUE=12>�K�[���i�o���[���A�[�g�j
				<OPTION VALUE=13>�l�������z
				<OPTION VALUE=14>�W����S��
				<OPTION VALUE=15>����s��
			</SELECT>
			</td></tr></table>
			<br>
			<input type='submit' value="�I��">
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
	echo "<tr><th>NO</th><th>����</th><th>�W������</th><th>�^�C�g��</th><th>��Җ�</th></tr>";
	echo "<tr>";

	echo "<td>01</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>�Ă̊C</td>";
	echo "<td>�ۂ��ہi�L�E�ցE�M�j</td>";

	echo "</tr>";
	echo "</table><br><br><br><br>";
	echo "�E��肭�Ȃ��Ă�ˁ[�B�G���X�G���X�B���z�̌��݂����Ȋ��������Ƃ����Ɛ[�݂��o��Ǝv����B<br>";
	echo "�E�S�̓I�ɂ܂Ƃ܂��Ă��ėǂ������ł��B�p�[�c�P�ʂŌ���ƈ�a�������邩���B<br>";
	echo "�E�X�N��<br>";
	echo "�E���̔g��<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	echo "<tr><th>NO</th><th>����</th><th>�W������</th><th>�^�C�g��</th><th>��Җ�</th></tr>";
	echo "<tr>";

	echo "<td>02</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>���ӂ���</td>";
	echo "<td>�ۂ��ہi�L�E�ցE�M�j</td>";

	echo "</tr>";
	echo "</table><br><br><br><br>";
	echo "�E�R���g���X�g�͈����Ȃ��Ǝv����B�����ȍg�݂��G���X�B�����ƉA�����łȂ��A�e�������Ƃ��������B<br>";
	echo "�E���͋C�͍D���B�̂̃o�����X���������肵�Ă���悤�Ɏv���܂��B�w�i�ɂ����������ߊ�������Ƃ����Ƃ悢�����B<br>";
	echo "�E����<br>";
	echo "�E2�̊G���V���v���i�H�j�ōD���ł��B<br>";
	echo "�E�L���C�ȍ�i���Ǝv���܂����B<br>";
	echo "�E�\�������������B����������ƐF�ɐ[�݂��~��������<br>";
	echo "<br>";


}elseif ( $pdown == 2){//------------------------------------------------------------------
	echo "<table border='1' align='left'>";
	echo "<tr><th>NO</th><th>����</th><th>�W������</th><th>�^�C�g��</th><th>��Җ�</th></tr>";

	echo "<tr>";
	echo "<td>03</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>�A�J�c�L</td>";
	echo "<td>jin<td>";
	echo "</tr>";

	echo "</table><br><br><br><br>";
	echo "�E���ꂢ�ɕ`���Ă�Ǝv���܂��B�����ƃ��t���ۂ����o���ƁA�C���p�N�g�������Ȃ肻���B<br>";
	echo "�E�F�g���������x�������ł��B���̂ݐ؂ꂪ�c�O�B<br>";
	echo "�E�E�z<br>";
	echo "�E���̎q�̖̑̂͗l�������������ł��B<br>";
	echo "�E�G���������D���ȊG�őI�т܂����B<br>";
	echo "�E�F�����܂肠���邭�Ȃ��̂ŃL�������ڗ��F�g�������Ă�	<br>";
	echo "<br>";


//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>04</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>��</td>";
	echo "<td>jin</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�\���������ł��ˁB�Ă炵���G�Ȃ̂ŁA�R���g���X�g����������Ɨǂ���<br>";
	echo "�E��C���Ƃ����s�����Ƃ��X�e�L�B�E�肪�c�O�B<br>";
	echo "�E�������������߂āB<br>";
	echo "�E�ƂĂ����C�ɂȂ肻���ȊG���Ƃ��񂶂܂����B���̉��������傤�ǂ����Ǝv���܂��B<br>";
	echo "�E�C�Ƌ�A���̎g�����������ł��B<br>";
	echo "�E�v���o�͑�؂�<br>";
	echo "�E��̊J�������������Ǝv�����B<br>";
	echo "�E��̍\�}���f�G�ł��B<br>";
	echo "�E����₩<br>";
	echo "�E�ƂĂ����������ŃL���C�ŃL�������������������Ă���<br>";
	echo "�E��ƊC�H�̋��E<br>";
	echo "�E��̕\�����������̈ꌾ<br>";
	echo "�E�����Ƃ��������������Ă݂Ă��Ċy�����Ǝv���܂���<br>";
	echo "�E���ߊ����f���炵���Ǝv���܂�<br>";
	echo "�E��Ԃ��ƂĂ�����₩�ōD���ł��B<br>";
	echo "�E��͂�A�A�j���G�ɂ�1�[�B<br>";
	echo "<br>";


}elseif ( $pdown == 3){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>05</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>����</td>";
	echo "<td>��</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�΂������������ȁB�ʓx�������ăR���g���X�g�����߂�ƃz���[���ۂ��Ȃ��B�m�C�Y�Ƃ����I�X�X���B<br>";
	echo "�E�������Ȋ������悢�B����̕\�����X�e�L�B�l���̎�Ɗ�Ɉ�a��������B���̖т̓E�}�X�B<br>";
	echo "�E�i�E�́E�j<br>";
	echo "�E�����̕����Ńz���[�i�C�g����`<br>";
	echo "�E�炪������<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>10</td>";
	echo "<td>C</td>";
	echo "<td>3D</td>";
	echo "<td>Creation</td>";
	echo "<td>��</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�y�ɁA�������悭�ł��邩��ˁ[�A���ʂ́B���v�̕����Ղ������Ƃ������ƁA�����������|�X�^�[�ɂȂ��B<br>";
	echo "�E�����ݒ蓙�悭�ł��Ă���Ǝv���B�኱�@�\�ɗ�������������B<br>";
	echo "�E���ꂢ<br>";
	echo "�E�������낢�B���˂́A�����ƍ��������������������n�������܂��B<br>";
	echo "�E�ƂĂ����ꂢ�ŋ��ʔ��˂͂��΂炵�����̂��Ǝv���܂����B<br>";
	echo "<br>";



}elseif ( $pdown == 4){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>06</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>�Ђ܂�肤��</td>";
	echo "<td>����</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�������낢�\���B��O�̏�ƃq�}���������������Ă邩�ȁH�����ς�Ɠh���Ă悳�����B<br>";
	echo "�E���E�ς��������낢�B�q�}�����̃��{�b�g(�H)�ɍŏ��C�t���Ȃ�����w�w�i�̃q�}�������W�����邩���B<br>";
	echo "�E�Ђ܂�肽��<br>";
	echo "�E�l�I�ɂЂ܂��̓X�L�Ȃ̂�<br>";
	echo "�E�U�Ԃ�`�����l���P�N���Ă����̂��������ł��B<br>";
	echo "�E����₩�ŁA���z���ƂĂ��ǂ��Ǝv���܂����B<br>";
	echo "�E�O�̃q�}�����̐F�̋����ɑ΂��A���̃q�}�����������ĂȂ��̂��c�O<br>";
	echo "<br>";



}elseif ( $pdown == 5){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>07</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>�S�V�b�N</td>";
	echo "<td>�㉪�@��</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�c�[���͉����g���Ă����ł��傤�H�\�����ѕ��A�|�[�Y��ς���Δw�i�Ȃ�ĕK�v�Ȃ���B<br>";
	echo "�E�l�̂̊�{�͂ł��Ă����B���Ƃ͂Ђ�����`���ׂ��I�I�`���ׂ��I<br>";
	echo "�E����������<br>";
	echo "<br>";



}elseif ( $pdown == 6){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>08</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>�T</td>";
	echo "<td>���c�@�p��</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�悭�r���ŗ͐s���Ȃ������B�w�i����l���ł���T����������Ăėǂ��Ǝv���܂��B<br>";
	echo "�E���͋C���ƂĂ������B�T�̍��i�Ɉ�a�������邩���B<br>";
	echo "�E���ӂ���<br>";
	echo "�E�T���񂪗ǂ�����<br>";
	echo "�E�T�̖т̕\�����X�e�L�ł��B<br>";
	echo "�E�������ꂢ<br>";
	echo "�E����Ă����������������<br>";
	echo "�E�т̏������݂��Ă��˂��ł�<br>";
	echo "�E�I�I�J�~�̖т��ׂ����`����Ă����̂͊����ł��B<br>";
	echo "�E�T�Ɣw�i�������Ă�B<br>";
	echo "�E�T�ƌ��A�����Ă܂��I<br>";
	echo "<br>";



}elseif ( $pdown == 7){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>09</td>";
	echo "<td>C</td>";
	echo "<td>����</td>";
	echo "<td>��</td>";
	echo "<td>�R�{�@�q�m</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E��肭�`���Ă�Ǝv���܂��B�����̕��������Ɣh��ɂ���ƁA�G�̈�ۂ������Ȃ�Ǝv���܂��B<br>";
	echo "�E���͋C��悵�B���X�p�[�X�������ĂȂ������B<br>";
	echo "�E�P������<br>";
	echo "�E�J�T���ǂ��B�w�i���ǂ��ł��Ă܂��B<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>15</td>";
	echo "<td>C</td>";
	echo "<td>����</td>";
	echo "<td>DarkStalker</td>";
	echo "<td>�R�{�@�q�m</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�悭�Ȃ���ł���Ǝv���܂���B2D��3D���Ȃ��܂������Ƃ��͈ꏏ�ɃO���f�[�V��������������A2D�̃n�C���C�g�̐F��ς��邾���ł��Ȃ���ʂ������B<br>";
	echo "�E�ׁX�������̂܂ō�肱��ł����Ă��������B���؂�Ă���̂��������B<br>";
	echo "�E2D��3D����������<br>";
	echo "�E2D���������ڂ₯���J���W�����܂�<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>16</td>";
	echo "<td>C</td>";
	echo "<td>3D</td>";
	echo "<td>DrugStar 400</td>";
	echo "<td>�R�{�@�q�m</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E����̓X�S�C�BPhotoshop�ȂǂŐF���̒��������Ƃ����Əd���ɂȂ邩���B<br>";
	echo "�E���f�����O���ׂ����A�w�i����������S�̓I�ɗǂ��B�����̎������������B���������d�X�����Ă��ǂ������B<br>";
	echo "�E���Ȕ����H<br>";
	echo "�E�}�V���̋����̎������ǂ��o���Ă���Ǝv���܂��B�w�i�̕��͋C���ǂ��o�Ă��܂��B<br>";
	echo "�E�n���[�V�������N�����Ă͂��邪���f�����O�ׂ͍����ł��ˁB�p�C�v�Ƃ��A�����ƃe�b�Z���[�V�����グ�Ă����������B<br>";
	echo "<br>";



}elseif ( $pdown == 8){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>11</td>";
	echo "<td>C</td>";
	echo "<td>����</td>";
	echo "<td>Analysis</td>";
	echo "<td>YY</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E���̂̏㉺�̃M�U�M�U���ɂ��ˁB�V���o�[���ۂ�2D�����̐F��ς���ƈ�ۂ��ς��Ǝv���܂��B<br>";
	echo "�E�C���[�W�������̂��\���ł��Ă���Ǝv���B�w�i�E���E���̑����o���o�������邩���B<br>";
	echo "�E�܂�܂�<br>";
	echo "�E�������ŃV���v���ȐF�������D���ł��B<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>12</td>";
	echo "<td>C</td>";
	echo "<td>����</td>";
	echo "<td>�Ă̏I���</td>";
	echo "<td>YY</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E���ꂢ�ȐF�Â������ˁB�R���g���X�g�����߂�ƉĂ̗[���炵���Ȃ��B<br>";
	echo "�E���ۓI�ȕ��͋C���ǂ��B���̗��̊������Ȃ������B�e�Ɉ�a��������B<br>";
	echo "�E���ꂢ�ŁA�C�����A���Ŋ����I<br>";
	echo "�E�H����<br>";
	echo "�E���̎����ƌ��̉�����GOOD�I�I<br>";
	echo "�E�P�Q�Ԃ̕��̕��i�͂ƂĂ����A���ł����B<br>";
	echo "�E�񌻎��Ȃ�������A���ȕ�����ǋ��̏��ɋ���<br>";
	echo "�E�S�̂̃o�����X�������B<br>";
	echo "<br>";



}elseif ( $pdown == 9){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>13</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>�݂�</td>";
	echo "<td>�˓c</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�˓c����̌W����肽���B�}�W�ŁB<br>";
	echo "�E�V���[���ŃX�e�L�B���X�{�P�Ă�̂��C�ɂȂ�B<br>";
	echo "�E�搶���Ă�<br>";
	echo "�E�ƂĂ����킢�������ł��B<br>";
	echo "�E�J�����C<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>12</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>�I�[����</td>";
	echo "<td>�˓c</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�Z���t����āB���肢���܂��B<br>";
	echo "�E�����ƃI�[�������ۂ�������B�i�C�X�B��C��������΂����Ɨǂ������B<br>";
	echo "�E�������悭�Ȃ���<br>";
	echo "�E�I�[�����̊������ǂ��`���Ă���<br>";
	echo "<br>";



}elseif ( $pdown == 10){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>17</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>���C</td>";
	echo "<td>Y/N</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�����������^�b�`���ˁB��̉_�����킹��Ƃ���ɂ��������B<br>";
	echo "�E�����x�������ĂƂĂ��ǂ��B����������A�N�Z���g���~���������B<br>";
	echo "�E�����n�[<br>";
	echo "�E��h���s�V���ŁA����ȏꏊ������������ۂɎv�����炢���Ă��Ȃ��񂶁B<br>";
	echo "�E�����`���Ă��Ă����ł��ˁ[<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>18</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>���m</td>";
	echo "<td>Y/N</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E��낢���ۂ���͋������悭�\���ł��Ă��B�V���v���ȍ\����good�B<br>";
	echo "�E�w�i�������̂ɋ�C�����`����Ă��Ă悢�B���������\�}�ɂ�����������̂����Ă݂����B<br>";
	echo "�E�ӂ񂢂�������<br>";
	echo "�E18�͖��Ɏ₵�������Ėڂ��Ђ���܂����B<br>";
	echo "�E���C�X�Ɏ䂩�ꂽ�B<br>";
	echo "�E�������B���Ɖe�B<br>";
	echo "�E���m���X�S�N�C�C�������X�L<br>";
	echo "�E�������D���ł��B<br>";
	echo "�E�y���c�[���Ɠ��̃U�J�U�J�����ǂ����o���Ă܂��B<br>";
	echo "�E�f�U�C���������������Ǝv���܂����B<br>";
	echo "�E�����`���Ă��Ă����ł��ˁ[<br>";
	echo "�E18�̕��m�̍r�X�����������D��<br>";
	echo "<br>";

//--------------------------------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>39</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>���]�i���j</td>";
	echo "<td>Y/N</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E���������G�D���B���������ׂ����̂����Ă݂����B<br>";
	echo "�E�c���f��<br>";
	echo "<br>";

}elseif ( $pdown == 11){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>38</td>";
	echo "<td>C</td>";
	echo "<td>2D</td>";
	echo "<td>��i���j</td>";
	echo "<td>��</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E���΂炵�����B���Ԃꂪ�c�O�����B<br>";
	echo "�E���܂���<br>";
	echo "�E�Ȃ񂩔w�i�̐��������Ǝv���܂����B<br>";
	echo "�E�������B<br>";
	echo "�E�G���ƂĂ��������悭�ċC�ɓ���܂����B<br>";
	echo "�E�F�ƂĂ������Ă����̂ŗǂ������ł��B<br>";
	echo "�E��w�@���Ă݂��ˁ[��I<br>";
	echo "�E���܂�<br>";
	echo "�E�w�i�����A���ŃL�������L���C<br>";
	echo "<br>";

}elseif ( $pdown == 12){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>UNKNOWN</td>";
	echo "<td>C</td>";
	echo "<td>�o���[���A�[�g</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>�K�[��</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�o���[���A�[�g�����킢�������B<br>";
	echo "�E�����񂪂ق��������̂���`�`�`�I�I<br>";
	echo "�E�G�������킢�[<br>";
	echo "�E�s���N�p���T�[������<br>";
	echo "<br>";

}elseif ( $pdown == 13){//------------------------------------------------------------------

	echo "<hr>";
	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>UNKNOWN</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>�l�����R�����g</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�����񂳂��3DCG���ǂ��݂Ă��ʐ^�ɂ��������Ȃ���ł����B<br>";
	echo "�E���Ƃ����񂱂��ɂ����̂ˁB���N�͂��Д����ɂ������Ăˁi�n�[�g�j�@�@�����@�Ԃ��傤<br>";
	echo "�E��c����i�{�l�j���������悩����<br>";
	echo "�E�����񂳂�̃T�C�����ق����ł�<br>";
	echo "�E�����񂳂�̍�i�͂ǂ����Ă��{���ɂ��������܂���c�c�B<br>";
	echo "�E�����񂳂�͐_�B<br>";
	echo "<br>";

}elseif ( $pdown == 14){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	
	echo "<tr>";
	echo "<th>NO</th>";
	echo "<th>����</th>";
	echo "<th>�W������</th>";
	echo "<th>�^�C�g��</th>";
	echo "<th>��Җ�</th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>UNKNOWN</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>UNKNOWN</td>";
	echo "<td>�W����S�̈��R�����g</td>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�f�W�^����Ȃ�g�p�����\�t�g�𖾋L���Ă����Ɓi�����I�ɂ́j���ꂵ���ł��B<br>";
	echo "�E�A�j���[�V�������������ł��B<br>";
	echo "�E�S���ɃR�����g�ł��܂��񂪁A����΂��ĉ������B���ꂩ����ICreation�@OB���<br>";
	echo "�E�F�l�̋Z�ʂɃr�b�N���ł��B<br>";
	echo "�E�S�̓I�ɗǂ��Ǝv���܂��B�Ō����m���̓I���W�i����i�̕����悢���ȂƂ��v���܂����B<br>";
	echo "�@���ƕ�������Ă���̂́A�t�H���g����t����Ȃ��Ƃ����Ȃ��i���쌠�I�ɂ��j�Ǝv���܂����A<br>";
	echo "�@�����ƃI���W�i���ł��傤���H<br>";
	echo "�E�݂�ȊG�����ꂢ�ł��B<br>";
	echo "�E�T�[�N�����ł��������̃e�[�}�������āA�G���A���ɓW�����Ă�Ɩʔ����̂��ȂƎv���܂����B<br>";
	echo "�E�����l�ł����B<br>";
	echo "�E�ǂ�����x���������ċ����܂����B<br>";
	echo "�E���N�ɔ�ׂă��x�����S�̓I�ɒi�Ⴂ�ɃA�b�v���Ă��ċ������B<br>";
	echo "�EOG�ł��B�P�N���Ƃ��ł����̌��݂��͂邩�ɂ��܂��l�������č���܂��i���j<br>";
	echo "�E�݂Ȃ���X�e�L�ł����BCG�������ł��B<br>";
	echo "�E�N�I���e�B�[�̍�����i���ƂĂ������Ċ��������I<br>";
	echo "�E�C�C�Ǝv���܂�<br>";
	echo "�E���p���ۂ���i�����Ȃ��B<br>";
	echo "�E�ǂ̍�i�����̊����łĂ��ĂƂĂ��ǂ������B�I���W�i���e�B���łĂ��Č����������茩���������������B<br>";
	echo "�E�ƂĂ��L���C�ȍ�i�΂���ŁA�X�e�L�ł����B<br>";
	echo "�E�F������ł��ˁB<br>";
	echo "�E�ǂ̍�i�����΂炵�������ł��B<br>";
	echo "�E2D�A3D�ACG�͉����[���Ǝv�����B�F�X�ȍ�i������ƂĂ����΂炵���Ǝv�����B<br>";
	echo "�E�ǂ̃\�t�g�ō�����̂��Ȃǂ������Ă���Ɩʔ������������B<br>";
	echo "�E�݂Ȃ��񂪂�΂��Ă���悤�ŁA�ǂ������ł��B�ǂ���X�e�L�ł�����`�􂱂ꂩ�������΂��ĉ������܂��I�I<br>";
	echo "�E���N�̂P�N�͊F�A���܂��ȁE�E�E�B�l�́E�E�E�B�i���j<br>";
	echo "�E�݂�ȏ�B���Ă��ċ����܂����B�T�[�N���S�R����Ȃ��Ă����܂���@by�S�N<br>";
	echo "�E�ǂ���f�G�ȍ�i�łR�ɂ���Ƃ����̂���������ł��E�E�E�B<br>";
	echo "�E1���̊G�̒��ɂЂƂ̐��E�ς������i���ǂ��Ǝv���܂��B���R�̒��ɂ���F���ώ@����Ɨǂ��Ǝv���܂��B<br>";
	echo "�E3D�̍�i�͊ۂ݂��o����ς����킩�����B<br>";
	echo "<br>";

}elseif ( $pdown == 15){//------------------------------------------------------------------

	echo "<table border='1' align='left'>";
	

	echo "<tr>";
	echo "<th>����s��</th>";
	echo "</tr>";
	
	echo "</table><br><br><br><br>";
	echo "�E�ӊO���ƁA���A���e�B�̗������|�C���g�ɑI�т܂����B<br>";
	echo "�EID.4 ID.5 ID.9 �Ă��v���N���������i���D���Ȃ̂ŁA���̗l�ȃ����N�t���ɂȂ�܂����B<br>";
	echo "�@���Ƃ̓o�C�N�̍�i�͔��ɍׂ����o���Ă���̂ŁA3D�̂�������V�߂Ċ����܂����B<br>";
	echo "�E�K���o���}�V�^<br>";
	echo "�ECG�������ו��܂ōs���͂��l�ȕ`����������Ăėǂ��Ǝv���܂��B<br>";
	echo "�E�q�����I�т܂���<br>";
	echo "�E��肩�����ۂ��̂������C���c�c�B���̒��ł܂��ǂ������̂����3��<br>";
	echo "�E�������L���C��CG�łƂĂ������܂����B����₩�Ȃӂ񂢂���Good�ł����B<br>";
	echo "�E�ǂ���f���炵���ł��B��L�̂͂Ƃ��Ɂ@�V�O�O�V<br>";
	echo "�E���Ă��ȕ����������񂠂��āA�I�Ԃ̂ɍl���Ă��܂��܂����B<br>";
	echo "�E�e���W�F�����Ă���ς肷�����ł��ˁB�v<br>";
	echo "�E�����Ɨ]�������܂���������i�ɂ���ƌ��h��������ɂ悭�Ȃ�Ǝv��<br>";
	echo "�E3D�̍ו��܂ł����Ă��āA�f���炵���ł��B���ꂩ�������΂��Ă��������B<br>";
	echo "�E�_��I�Ŕ��ꂢ�ł����B<br>";
	echo "�E�E���N�y��<br>";
	echo "�E�ǂ���f���炵��<br>";
	echo "�E��҂̎���łĂ����Ǝv���܂��B<br>";
	echo "�E�ǂ̍�i���ƂĂ��悩�����ł��B<br>";
	echo "�ECool<br>";
	echo "�E�}�V�[�������������A���������B�Ђ܂��i06�j�l�I�ɂ����ł��B�݂ĂāA�ǂ���Ђ����܂�܂����B<br>";
	echo "�E�����̃e�N�X�`���[�����������Ȃ��_���ǂ��c�c<br>";
	echo "�E�S������܂����@�i*�L��`�j<br>";
	echo "�E���ꂩ�������΂��ĉ�����<br>";
	echo "�E�������ł�<br>";
	echo "�E�ƂĂ��悩�����ł��B<br>";
	echo "�E�����x�������āA�L���C�ȊG�i�RD?�j �ł����B<br>";
	echo "�E�Ă��D���ł��B�C���D���ł��B�������D���ł��B���͂������I���L���X����������������������������<br>";
	echo "�E�P�i�V���[�Y�n���ƂĂ��ʔ��������ł��B<br>";
	echo "<br>";

}

?>
