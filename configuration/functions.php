<? 
function debug($arr){
	print("<pre>");
	print_r($arr);
	print("<pre>");
}

function addCookie($name, $value){
	setcookie($name, "", time()-30, "/");
	setcookie($name, $value, time()+60*60*24*365*10, "/");
}

function deleteCookie($name){
	setcookie($name, "0", time()-20, "/");
}

function generateString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function getAddress() {
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

function alert($text, $type = "success"){
    ?>
    <div class="alert alert-<?=$type?>" role="alert">
        <?=$text?>
    </div>
    <?
}

function linkScripts($hrefs){
    global $time;
    foreach ($hrefs as $href) {
        echo "<script src='/js/{$href}?{$time}'></script>";
    }
}

function linkStyles($hrefs){
    global $time;
    foreach ($hrefs as $href) {
        echo "<link rel='stylesheet' href='/css/{$href}?{$time}'>";
    }
}

function get_header($title){
    global $site_title;
    require_once $_SERVER['DOCUMENT_ROOT']."/templates/header.php";
}

function get_footer(){
    require_once $_SERVER['DOCUMENT_ROOT']."/templates/footer.php";
}