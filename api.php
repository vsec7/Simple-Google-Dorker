
<?php
// viloid ~ Sec7or Team
// ide dari ArRay ( ExploreCrew - Surabaya Hacker Link )
// POST/GET d={string}&p={int}

header('Content-Type: application/json');
if(isset($_REQUEST['d'])){
$p = $_REQUEST['p']*10;
$f = file_get_contents("https://www.google.com/search?q=".urlencode($_REQUEST['d'])."&start=".$p);
@preg_match_all('/\/url\?q=(.*?)&amp/', $f, $d);
        foreach($d[1] as $k){
                if(preg_match('/google|youtube|bing|wikipedia|microsoft|facebook/', $k)){}else
                $v[] = urldecode($k);
        }
echo json_encode($v);
}

