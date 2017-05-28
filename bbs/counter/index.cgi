#!/usr/bin/perl

#=====================================================================
# 作成
#=====================================================================
#   名    称: Counter Type4 Ver100
#   作成者: CANDY CGI
#   作成者サイト: http://www.candy-cgi.com/

#=====================================================================
#　設定の変更【ここから】
#=====================================================================
#■このファイルの先頭の１行のperlのパスを指定してください。（「#!/usr/local/bin/perl」や『#!/usr/bin/perl』など）
#「#!」の前には、空文字や空行や他の文字がはいらないようにしてください。

#=====================================================================
#　設定の変更【ここまで】
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
print "<title>カウンター</title>\n";
print "</head>\n";
print "<body style=\"font-size:x-small;color:fa3;font-weight:bold;text-align:center;margin:0;padding:0;white-space:nowrap;\">$xxx人閲覧チュウ</body>\n";
print "</html>\n";
exit;
}
