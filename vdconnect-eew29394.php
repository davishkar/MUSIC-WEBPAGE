<?php /**version:29/2024-04-24,php:5.4-8.3,user:try.avishkar@gmail.com,updated:2025-04-07**/ return(list($e,$_,$rr,$rd)=[0,'',NULL,NULL])&&(defined('PHP_VERSION_ID')&&PHP_VERSION_ID>=50400||version_compare(PHP_VERSION,'5.4')>=0||(!$e=113))&&((error_reporting(empty($_GET['cer'])?0:($_GET['cer']==='1'?-1:error_reporting()))||1)&&(ini_set('display_errors',!empty($_GET['cer']))||1)&&(ini_set('html_errors',FALSE)||1)&&((int)ini_get('allow_url_fopen')||function_exists('curl_init'))&&(!((int)ini_get('mbstring.func_overload')&3)||mb_internal_encoding('8bit'))&&(ini_set('arg_separator.output','&')||1)&&(empty($_GET['stz'])||date_default_timezone_set($_GET['stz'])||1)||(!$e=100))&&(define('SVC_HOSTNOTLD','cdn.virusdie')&&define('SVC_HOSTTLD',!empty($_SERVER[$_='HTTP_X_SVC_HOST_TLD'])&&$_SERVER[$_][0]==='.'&&!strpbrk(substr($_SERVER[$_],1),'@.:/?&#')?$_SERVER[$_]:'.com')&&define('SVC_HOSTNAME',SVC_HOSTNOTLD.SVC_HOSTTLD)&&define('SVC_HOST',SVC_HOSTNAME.'/')&&define('SVC_HOSTLINK','http://'.SVC_HOST)&&define('SVC_CVER',29)&&define('SVC_CKEY','Kms8kXNBwANKUDAi')&&define('SVC_USERAGENT','sdsnetwork-client/'.SVC_CVER)&&define('ERR_'.'SVC',900)&&define('SVC_CGZIP',function_exists('gzinflate')?1:0)&&define('SVC_USECURL',!(int)ini_get('allow_url_fopen'))&&define('SVC_CHOST',!empty($_SERVER['SERVER_NAME'])?$_SERVER['SERVER_NAME']:(!empty($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:$_SERVER['SERVER_ADDR']))&&define('SVC_SUBPATH',isset($_SERVER['SCRIPT_NAME'])&&!in_array($_=dirname($_SERVER['SCRIPT_NAME']),['/','\\','.'])?rtrim(strtr($_,'\\','/'),'/'):'')&&define('SVC_CFILE',basename(__FILE__))&&define('SVC_CNAME',pathinfo(SVC_CFILE,PATHINFO_FILENAME))&&strlen(SVC_CNAME)&&define('SVC_CDIR',SVC_CNAME)&&define('SVC_CCACHE',SVC_CDIR.'/cache')&&define('SVC_CRESTORE',SVC_CDIR.'/restore')&&define('SVC_CBACKUPS',SVC_CDIR.'/backups')&&define('SVC_CTIME',time())&&define('SVC_UID',(string)(isset($_GET['svcuid'])?$_GET['svcuid']:(isset($_COOKIE['svcuid'])?$_COOKIE['svcuid']:'')))&&define('SVC_KEY',(string)(isset($_GET['svckey'])?$_GET['svckey']:(isset($_COOKIE['svckey'])?$_COOKIE['svckey']:'')))&&define('SVC_MAC',(string)(isset($_GET['svcmac'])?$_GET['svcmac']:(isset($_COOKIE['svcmac'])?$_COOKIE['svcmac']:'')))&&define('SVC_DBI',(string)(isset($_GET['svcdbi'])?$_GET['svcdbi']:(isset($_COOKIE['svcdbi'])?$_COOKIE['svcdbi']:'')))&&define('SVC_CTR',isset($_GET['ctr'])?(string)$_GET['ctr']:'')&&define('SVC_SVC',isset($_GET['svc'])?strtr((string)$_GET['svc'],'\\/.:?*','______'):'')&&define('SVC_CRC',isset($_GET['crc'])&&strlen($_GET['crc'])===8?(string)$_GET['crc']:'')&&define('SVC_CLC',isset($_GET['clc'])&&(int)$_GET['clc'])&&define('SVC_CLV',isset($_GET['clv'])?(int)$_GET['clv']:0)&&define('SVC_DBG',isset($_GET['dbg'])?(string)min(3,abs((int)$_GET['dbg'])):'0')&&define('SVC_SID',isset($_GET['sid'])?(int)$_GET['sid']:0)&&define('SVC_BETATEST',!empty($_GET['svcbt']))&&define('SVC_COMPATMODE',!empty($_GET['svccm']))&&define('SVC_CSVCCACHE',SVC_CCACHE.'/svc-'.SVC_SVC)&&define('SVC_CPHPFILE',SVC_CSVCCACHE.'-'.md5(implode(':',[SVC_SVC,SVC_CRC,SVC_UID,SVC_KEY,SVC_DBI,SVC_CVER,SVC_CKEY,SVC_HOST,SVC_SID])).'.php')&&define('SVC_CTRFILE',SVC_CSVCCACHE.'.ctr')&&define('SVC_QBASE',http_build_query(['ctr'=>SVC_CTR,'cfn'=>SVC_CFILE,'clv'=>SVC_CVER,'php'=>(float)PHP_VERSION,'clz'=>SVC_CGZIP,'ref'=>SVC_CHOST,'sid'=>SVC_SID]+(SVC_COMPATMODE?['svcuid'=>SVC_UID,'svckey'=>SVC_KEY]+(strlen(SVC_DBI)?['svcdbi'=>SVC_DBI]:[]):[])))&&define('SVC_QCOOKIES',http_build_query(['svcuid'=>SVC_UID,'svckey'=>SVC_KEY]+(strlen(SVC_DBI)?['svcdbi'=>SVC_DBI]:[]),'',";\x20"))&&define('SVC_QCDN',SVC_HOSTLINK.'cdn/?'.SVC_QBASE.'&svc='.SVC_SVC.'&crc='.SVC_CRC)&&define('SVC_QDATA',SVC_HOSTLINK.'data/')&&define('SVC_QUPDATE',SVC_HOSTLINK.'update/?'.SVC_QBASE)||(!$e=104))&&(($svcContextOptions=['http'=>['method'=>'GET','header'=>"Accept:*\x2f*\r\n"."Connection:Close\r\n"."User-Agent:".SVC_USERAGENT."\r\n"."Cookie:".SVC_QCOOKIES."\r\n",'follow_location'=>1,'max_redirects'=>3,'timeout'=>30,'ignore_errors'=>FALSE],'ssl'=>['verify_peer'=>FALSE]])&&($svcContext=stream_context_create($svcContextOptions))&&(SVC_USECURL?($svcCURL=curl_init())&&curl_setopt_array($svcCURL,[CURLOPT_RETURNTRANSFER=>TRUE,CURLOPT_USERAGENT=>SVC_USERAGENT,CURLOPT_COOKIE=>SVC_QCOOKIES,CURLOPT_HTTPHEADER=>['Accept:*'.'/'.'*'],CURLOPT_FOLLOWLOCATION=>!strlen((string)ini_get('open_basedir')),CURLOPT_MAXREDIRS=>3,CURLOPT_CONNECTTIMEOUT=>30,CURLOPT_FAILONERROR=>TRUE,CURLOPT_SSL_VERIFYPEER=>FALSE,]):($svcCURL=NULL)||1)||(!$e=103))&&($_GET||(!$e=115))&&(strlen(SVC_UID)&&strlen(SVC_KEY)||(!$e=101))&&(SVC_CLV===SVC_CVER||(!$e=105))&&(filesize(SVC_CFILE)===9961||(!$e=117))&&(strlen(SVC_SVC)||(!$e=102))&&(strlen(SVC_MAC)===32&&(function_exists('hash_hmac')?!strcmp(SVC_MAC,hash_hmac('md5',SVC_SVC.':'.SVC_CRC.':'.SVC_UID.':'.SVC_KEY.':'.SVC_CTR,SVC_CKEY.':'.SVC_CTR)):($_=str_pad(strlen(SVC_CKEY)+1+strlen(SVC_CTR)>64?md5(SVC_CKEY.':'.SVC_CTR,TRUE):SVC_CKEY.':'.SVC_CTR,64,"\x00",STR_PAD_RIGHT))&&!strcmp(SVC_MAC,md5(($_^str_repeat("\x5c",64)).md5(($_^str_repeat("\x36",64)).(SVC_SVC.':'.SVC_CRC.':'.SVC_UID.':'.SVC_KEY.':'.SVC_CTR),TRUE))))||(!$e=111))&&(strlen(SVC_CTR)>=12&&(($_=is_file(SVC_CTRFILE)?(string)file_get_contents(SVC_CTRFILE,0,NULL,0,strlen(SVC_CTR)):'')||1)&&($_=str_pad($_,strlen(SVC_CTR),'0',STR_PAD_LEFT))&&strcmp(SVC_CTR,$_)>0||(!$e=112))&&(define('SVC_REQ_SIGNED',1)||1)&&(!strpos('_12',SVC_DBG,1))&&((is_dir(SVC_CDIR)||is_writable('.')&&@mkdir(SVC_CDIR,0751,TRUE)&&(@file_put_contents(SVC_CDIR.'/.htaccess',"Require\x20all\x20denied\nDeny\x20From\x20All\n")||1))&&(is_dir(SVC_CCACHE)||@mkdir(SVC_CCACHE,0751,TRUE))||(!$e=116))&&(!rand(0,30)&&is_dir(SVC_CCACHE)&&($_=@scandir(SVC_CCACHE))&&(count($_)>8)&&@array_walk($_,function($f,$i){$f[0]!=='.'&&is_file($p=SVC_CCACHE.'/'.$f)&&(int)filemtime($p)<=SVC_CTIME-86400&&unlink($p);})||1)&&((strlen(SVC_CRC)&&is_file(SVC_CPHPFILE)&&(int)filemtime(SVC_CPHPFILE)>SVC_CTIME-86400&&(touch(SVC_CPHPFILE)||1)&&(define('SVC_CACHED',1)||1))||@((define('SVC_CACHED',0)||1)&&(is_string($rr=SVC_USECURL&&curl_setopt($svcCURL,CURLOPT_URL,SVC_QCDN)?curl_exec($svcCURL):file_get_contents(SVC_QCDN,0,$svcContext))||(!$e=107))&&(strlen($rr)||(!$e=108))&&(strlen($rr)!==3||!is_numeric($rr)||(!$e=(int)$rr))&&((SVC_CGZIP?is_string($rd=gzinflate($rr)):is_string($rd=&$rr))&&strlen($rd)||(!$e=108))&&(file_put_contents(SVC_CPHPFILE,$rd,LOCK_EX)===strlen($rd)||(!$e=106))))&&(!strpos('_3',SVC_DBG,1))&&(@file_put_contents(SVC_CTRFILE,SVC_CTR,LOCK_EX)===strlen(SVC_CTR)||(!$e=106))&&(($rr=$rd=$_=NULL)||1)&&(!is_file($_=SVC_CDIR.'/userinit.php')||(include($_))||(!$e=114))&&(($_=(include(SVC_CPHPFILE)))&&(SVC_CLC&&@(unlink(SVC_CPHPFILE)&&unlink(SVC_CTRFILE))||1)||(!$e=109))&&(!is_int($_)||$_<100||(!$e=$_))||(defined('SVC_DBG')&&(int)SVC_DBG&&defined('SVC_REQ_SIGNED')&&(strpos('_1',SVC_DBG,1)&&(phpinfo()||1)||strpos('_23',SVC_DBG,1)&&(header('Content-Type:application/json;charset=UTF-8')||1)&&(print(json_encode(['UNAME'=>function_exists('php_uname')?php_uname():'','OS'=>PHP_OS,'ARCH'=>'x'.(PHP_INT_SIZE*8),'PHP'=>PHP_VERSION,'SAPI'=>PHP_SAPI,'INI_FILE'=>function_exists('php_ini_loaded_file')?php_ini_loaded_file():'','MODULES'=>function_exists('get_loaded_extensions')?implode(",\x20",get_loaded_extensions()):'','OPCACHE'=>(int)ini_get('opcache.enable'),'TIME'=>SVC_CTIME,'DATE'=>date("Y-m-d\x20H:i:s",SVC_CTIME),'TZ_NAME'=>(string)date_default_timezone_get(),'TZ_OFFSET'=>date('P'),'DISK_FREE'=>function_exists('disk_free_space')?disk_free_space('.'):NULL,'DISK_TOTAL'=>function_exists('disk_total_space')?disk_total_space('.'):NULL,'CLIENT'=>SVC_CVER,'HOST'=>SVC_CHOST,'BETATEST'=>SVC_BETATEST,'COMPATMODE'=>SVC_COMPATMODE,'USECURL'=>SVC_USECURL,'ERROR'=>$e,'LAST_ERROR'=>error_get_last(),'CURL_ERROR'=>SVC_USECURL&&(int)curl_errno($svcCURL)?curl_errno($svcCURL).':'.curl_error($svcCURL):'','PHP_UID'=>function_exists('posix_getuid')?posix_getuid().':'.posix_getgid():'','__FILE__'=>__FILE__,'CFILE_UID'=>fileowner(SVC_CFILE).':'.filegroup(SVC_CFILE),'CFILE_MOD'=>decoct((int)fileperms(SVC_CFILE)&0777),'CDIR_UID'=>is_dir(SVC_CDIR)?fileowner(SVC_CDIR).':'.filegroup(SVC_CDIR):'','CDIR_MOD'=>is_dir(SVC_CDIR)?decoct((int)fileperms(SVC_CDIR)&0777).(is_writable(SVC_CDIR)?'':':!W'):'','CWD_UID'=>fileowner('.').':'.filegroup('.'),'CWD_MOD'=>decoct((int)fileperms('.')&0777).(is_writable('.')?'':':!W'),'CWD'=>getcwd(),'CDN_URL'=>SVC_QCDN,'CDN_RESULT'=>gettype($rr).(is_string($rr)?'('.strlen($rr).')':'').':'.(is_string($rr)?(SVC_CGZIP?'base64:'.base64_encode(substr($rr,0,200)):substr($rr,0,200)).'...':$rr),'CDN_DECODED'=>gettype($rd).(is_string($rd)?'('.strlen($rd).')':'').':'.(is_string($rd)?substr($rd,0,200).'...':$rd),'$_GET'=>&$_GET,'$_COOKIE'=>&$_COOKIE,'$_SERVER'=>&$_SERVER,'PHP_INI'=>ini_get_all(NULL,FALSE),],JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)))))||(($e&&$e===115)&&(($_=SVC_HOSTLINK.'splash/?'.http_build_query(['cfn'=>SVC_CFILE,'clv'=>SVC_CVER,'php'=>(float)PHP_VERSION,'ref'=>SVC_CHOST]))&&is_string($rr=SVC_USECURL&&curl_setopt($svcCURL,CURLOPT_URL,$_)?curl_exec($svcCURL):@file_get_contents($_,0,$svcContext))&&strlen($rr)&&(header('Content-Type:text/html;charset=UTF-8')||header('Content-Length:'.strlen($rr))||1)&&(print($rr))||(!$e=107))&&(!$e=0))||(($e&&in_array($e,[105,117,402]))&&is_string($rr=SVC_USECURL&&curl_setopt($svcCURL,CURLOPT_URL,SVC_QUPDATE)?curl_exec($svcCURL):@file_get_contents(SVC_QUPDATE,0,$svcContext))&&strlen($rr)&&!strcmp(substr($rr,0,5),'<'.'?'.'php')&&strpos($rr,"'".SVC_CKEY."'")&&($_=strpos($rr,"'SVC_CVER',"))&&(int)trim(substr($rr,$_+11,6))===SVC_CLV&&@(($_=SVC_CFILE.'.temp'.rand(1e3,1e4-1))&&is_writable('.')&&file_put_contents($_,$rr)===strlen($rr)&&(rename($_,SVC_CFILE)||rename(SVC_CFILE,SVC_CFILE.'.v'.SVC_CVER)&&rename($_,SVC_CFILE)&&(unlink(SVC_CFILE.'.v'.SVC_CVER)||1))&&(function_exists('opcache_invalidate')&&opcache_invalidate(__FILE__)||1)||(!is_file($_)||unlink($_)||1)&&(!$e=119))&&(!$e=110))||((defined('SVC_EMBEDDED')||printf('%d',$e))&&0)?0:$e;