#!/usr/bin/perl

#=====================================================================
# �쐬
#=====================================================================
#   ��    ��: Counter Type4 Ver100
#   �쐬��: CANDY CGI
#   �쐬�҃T�C�g: http://www.candy-cgi.com/

#=====================================================================
#�@�ݒ�̕ύX�y��������z
#=====================================================================
#�����̃t�@�C���̐擪�̂P�s��perl�̃p�X���w�肵�Ă��������B�i�u#!/usr/local/bin/perl�v��w#!/usr/bin/perl�x�Ȃǁj
#�u#!�v�̑O�ɂ́A�󕶎����s�⑼�̕������͂���Ȃ��悤�ɂ��Ă��������B

#=====================================================================
#�@�ݒ�̕ύX�y�����܂Łz
#=====================================================================

$file = 'log.cgi';

$ip = $ENV{'REMOTE_ADDR'};

$time = time;
$time45 = $time + 45;

&main;


sub main{
open(IN,"<$file");
eval{flock(IN, 2);};
@log = <IN>;
close(IN);

foreach $data (@log) {
($ip_x,$time_x) = split(/<>/, $data);

chomp($time_x);

if ($ip_x ne $ip && $time <= $time_x) {unshift @logx, "$ip_x<>$time_x\n";}
}

unshift @logx, "$ip<>$time45\n";

open(OUT,"+< $file");
eval{flock(OUT, 2);};
eval{truncate(OUT, 0);};
seek(OUT, 0, 0);
print OUT @logx;
eval{flock(OUT, 8);};
close(OUT);

$xxx = @logx;

&print;} 


sub print{
print "Content-type: text/html; charset=Shift_JIS\n\n"; 
print "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n";
print "<html lang=\"ja\">\n";
print "<head>\n";
print "<meta http-equiv=\"Content-type\" content=\"text/html; charset=Shift_JIS\">\n";
print "<meta http-equiv=\"Refresh\" content=\"30\">\n";
print "<title>�J�E���^�[</title>\n";
print "</head>\n";
print "<body style=\"font-size:x-small;color:fa3;font-weight:bold;text-align:center;margin:0;padding:0;white-space:nowrap;\">$xxx�l�{���`���E</body>\n";
print "</html>\n";
exit;
}
