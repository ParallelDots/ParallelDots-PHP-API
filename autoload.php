<?php

function set_api_key($api_key)
{
	putenv("pd_api_key=$api_key");
	return "api_key set";
}

function get_api_key()
{	
	if(getenv("pd_api_key")){
	$api_key = getenv("pd_api_key");
	return $api_key;}
	else{
		return "Set an api key";
	}

}

function sentiment($text)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v2/sentiment?text='.$text.'&api_key='.$api_key;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}

function similarity($text1,$text2)
{
$text1 = urlencode($text1);
$text2 = urlencode($text2);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v2/similarity?text_1='.$text1.'&text_2='.$text2.'&api_key='.$api_key;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}


function ner($text)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v2/ner?text='.$text.'&api_key='.$api_key;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}

function keywords($text)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v2/keywords?text='.$text.'&api_key='.$api_key;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}

function taxonomy($text)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v2/taxonomy?text='.$text.'&api_key='.$api_key;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}

function emotion($text)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v2/emotion?text='.$text.'&api_key='.$api_key;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}

function intent($text)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v2/intent?text='.$text.'&api_key='.$api_key;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}

function multilang($text,$lang_code)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$lang_code = urlencode($lang_code);
$url = 'https://apis.paralleldots.com/v2/multilang?text='.$text.'&lang_code='.$lang_code.'&api_key='.$api_key;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}


function abuse($text)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v2/abuse?text='.$text.'&api_key='.$api_key;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}

?>


