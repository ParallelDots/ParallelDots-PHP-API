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

function abuse($text)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/abuse?api_key='.$api_key.'&text='.$text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}

function abuse_batch($text_list)
{
$text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/abuse_batch?api_key='.$api_key.'&text='.$text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}


function custom_classifier($text, $category){
$text = urlencode($text);
$category = urlencode($category);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/custom_classifier?api_key='.$api_key.'&text='.$text.'&category='.$category;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
$url = 'https://apis.paralleldots.com/v3/emotion?api_key='.$api_key.'&text='.$text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function emotion_multilang($text, $lang_code)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/emotion?api_key='.$api_key.'&text='.$text.'&lang_code='.$lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function emotion_batch($text_list)
{
$text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/emotion_batch?api_key='.$api_key.'&text='.$text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function emotion_multilang_batch($text_list, $lang_code)
{
$text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/emotion_batch?api_key='.$api_key.'&text='.$text_list.'&lang_code='.$lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function facial_emotion($path)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$fileName = $path;
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$finfo = finfo_file($finfo, $fileName);
$baseName = basename($fileName);
$url = 'https://apis.paralleldots.com/v3/facial_emotion?api_key='.$api_key;
$ch = curl_init($url);
$cFile = new CURLFile($fileName, $finfo, basename($fileName));
$data = array( "file" => $cFile, "filename" => $cFile->postname);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
return $result;
}

function facial_emotion_url($url_to_image)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/facial_emotion?api_key='.$api_key.'&url='.$url_to_image;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
$url = 'https://apis.paralleldots.com/v3/intent?api_key='.$api_key.'&text='.$text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function intent_batch($text_list)
{
$text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/intent_batch?api_key='.$api_key.'&text='.$text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
$url = 'https://apis.paralleldots.com/v3/keywords?api_key='.$api_key.'&text='.$text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function keywords_batch($text_list)
{
$text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/keywords_batch?api_key='.$api_key.'&text='.$text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function language_detection($text)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/language_detection?api_key='.$api_key.'&text='.$text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function language_detection_batch($text_list)
{
$text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/language_detection_batch?api_key='.$api_key.'&text='.$text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function multilang_keywords($text,$lang_code)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$lang_code = urlencode($lang_code);
$url = 'https://apis.paralleldots.com/v3/multilang_keywords?api_key='.$api_key.'&text='.$text.'&lang_code='.$lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
$url = 'https://apis.paralleldots.com/v3/ner?api_key='.$api_key.'&text='.$text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function ner_batch($text_list)
{
$text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/ner_batch?api_key='.$api_key.'&text='.$text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}


function nsfw($path)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$fileName = $path;
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$finfo = finfo_file($finfo, $fileName);
$baseName = basename($fileName);
$url = 'https://apis.paralleldots.com/v3/nsfw?api_key='.$api_key;
$ch = curl_init($url);
$cFile = new CURLFile($fileName, $finfo, basename($fileName));
$data = array( "file" => $cFile, "filename" => $cFile->postname);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); 
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
return $result;
}

function nsfw_url($url_to_image)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/nsfw?api_key='.$api_key.'&url='.$url_to_image;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); 
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function object_recognizer($path)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$fileName = $path;
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$finfo = finfo_file($finfo, $fileName);
$baseName = basename($fileName);
$url = 'https://apis.paralleldots.com/v3/object_recognizer?api_key='.$api_key;
$ch = curl_init($url);
$cFile = new CURLFile($fileName, $finfo, basename($fileName));
$data = array( "file" => $cFile, "filename" => $cFile->postname);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
return $result;
}

function object_recognizer_url($url_to_image)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/object_recognizer?api_key='.$api_key.'&url='.$url_to_image;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}


function phrase_extractor($text)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/phrase_extractor?api_key='.$api_key.'&text='.$text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function phrase_extractor_batch($text_list)
{
$text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/phrase_extractor_batch?api_key='.$api_key.'&text='.$text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}


function popularity($path)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$fileName = $path;
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$finfo = finfo_file($finfo, $fileName);
$baseName = basename($fileName);
$url = 'https://apis.paralleldots.com/v3/popularity?api_key='.$api_key;
$ch = curl_init($url);
$cFile = new CURLFile($fileName, $finfo, basename($fileName));
$data = array( "file" => $cFile, "filename" => $cFile->postname);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); 
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
$result = curl_exec($ch);
return $result;
}

function popularity_url($url_to_image)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/popularity?api_key='.$api_key.'&url='.$url_to_image;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); 
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
$result = curl_exec($ch);
return $result;
}

function sentiment($text)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/sentiment?api_key='.$api_key.'&text='.$text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}

function sentiment_multilang($text, $lang_code)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/sentiment?api_key='.$api_key.'&text='.$text.'&lang_code='.$lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function sentiment_batch($text_list)
{
$text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/sentiment_batch?api_key='.$api_key.'&text='.$text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function sentiment_multilang_batch($text_list, $lang_code)
{
$text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/sentiment_batch?api_key='.$api_key.'&text='.$text_list.'&lang_code='.$lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
$url = 'https://apis.paralleldots.com/v3/similarity?api_key='.$api_key.'&text_1='.$text1.'&text_2='.$text2;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
$url = 'https://apis.paralleldots.com/v3/taxonomy?api_key='.$api_key.'&text='.$text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}

function taxonomy_batch($text_list)
{
$text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/taxonomy_batch?api_key='.$api_key.'&text='.$text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function text_parser($text)
{
$text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'https://apis.paralleldots.com/v3/text_parser?api_key='.$api_key.'&text='.$text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
return $result;
}

function usage()
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'http://apis.paralleldots.com/usage?api_key='.$api_key;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
return $result;
}

?>