<?php

set_time_limit (0);

$dBanner="

                                                      
,------.          ,---. ,---.          ,--.  ,--.     
|  .-.  \  ,---. /  .-'/  .-',--. ,--./    \ |  ,---. 
|  |  \  :| .-. :|  `-,|  `-, \  '  /|  ()  ||  .-.  |
|  '--'  /\   --.|  .-'|  .-'  \   '  \    / |  | |  |
`-------'  `----'`--'  `--'  .-'  /    `--'  `--' `--'
                             `---'                    
-====================================================-
\t \t   fuckBot - View Bot
-====================================================-

";

$url="";

if(isset($argv[1])){
$url=$argv[1];
}

if($url==""){
echo "\nuse: php fuckBot.php 'url'\n";
exit;
}


echo $dBanner;

$useAgent=array(
"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:2.0) Treco/20110515 Fireweb Navigator/2.4",
"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36",
"Opera/9.80 (X11; Linux i686; Ubuntu/14.10) Presto/2.12.388 Version/12.16",
"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.75.14 (KHTML, like Gecko) Version/7.0.3 Safari/7046A194A",
"Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko",
"Mozilla/5.0 (X11; U; UNICOS lcLinux; en-US) Gecko/20140730 (KHTML, like Gecko, Safari/419.3) Arora/0.8.0",
"Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30",
"Mozilla/5.0 (PLAYSTATION 3; 3.55)",
"PSP (PlayStation Portable); 2.00"
);

$n=0;

#create connection;
while(1){

$ch=curl_init();
print "[+] $url\n";
$age=$useAgent[rand(0,(count($useAgent)-1))];
print "[+] $age \n";
curl_setopt($ch,CURLOPT_URL,$url);
#curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
#curl_setopt($ch,CURLOPT_TIMEOUT,120);
#curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1 );
#curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
#curl_setopt($ch, CURLOPT_PROXY, $proxy);
#curl_setopt($ch, CURLOPT_PROXYPORT, $port);
curl_setopt($ch,CURLOPT_USERAGENT,$age);
$r=curl_exec($ch);
curl_close($ch);

if($r){
$n++;
echo "[+] $n connection with Bot \n\n";
}else{
echo "[-] ERRO\n\n";
}

}

/* Banner: http://www.kammerl.de/ascii/AsciiSignature.php */
/* Canal: https://www.youtube.com/channel/UC9kMfNPD3dgMO94JeFdTVBA */

?>
