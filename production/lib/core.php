<?php

function base_url() {
    //return "http://localhost/ProjectWeb/mktru/suntaracondo.com/production";
    return "http://localhost/Vanlop/sesubsea.com/production";
}

function base_path() {
    return $_SERVER['DOCUMENT_ROOT'] . "/";
}

function salt_pass($pass) {
    return md5("sesubsea" . $pass);
}

function permalink_create($oldstring){

$string_to_replace     = array ('+' , '/' , '*' , '!' , '(' , ')' , '&' , '%' , '$' , '#' , '@' , '>' , '<' , '?' , ' ', '"', "'");
$string_after_replace  = array ('-' , '-' , '-' , '-' , '-' , '-' , '-' , '-percent-' , '-' , '-' , '-' , '-' , '-' , '-' , '-', '-', '-');
return $newstring         = str_replace($string_to_replace , $string_after_replace , $oldstring , $count); 

}

function lang_path(){
	
	$languages = array('th', 'en');
	$lang = isset($_GET['lang']) ? $_GET['lang'] : "th";
	// handle language selection
	if(in_array($lang, $languages)) {
		return $_SESSION['lang'] = $lang;
	}
	
	// define LANG constant only if it exists in $languages array, otherwise default to "th"
	return isset($_SESSION['lang'], $languages) ? $_SESSION['lang'] : 'th';
}

function switch_lg($text)
{
	
	$url = isset($_GET['url']) ? "/".$_GET['url'] : "";
	$page = isset($_GET['page']) ? "/".$_GET['page'] : "";
    $a = isset($_GET['a']) ? "/".$_GET['a'] : "";

    if($a == '/index'){
        $index == '';
    } else {
        $index == $a;
    }

	$dpm = isset($_GET['dpm']) ? "/".$_GET['dpm'] : "";
	$id = isset($_GET['id']) ? "/".$_GET['id'] : "";
	if($_GET['url'] == "home"){
		return base_url().$dpm."/".$text;
	} else {
		return base_url().$dpm."/".$text.$url.$index.$page.$id;
	}
	
}
