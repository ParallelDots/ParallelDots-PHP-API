<?php
$host='https://apis.paralleldots.com/v4/';
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
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'abuse';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function abuse_batch($text_list)
{
// $text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'abuse_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}


function custom_classifier($text, $category){
// $text = urlencode($text);
// $category = urlencode($category);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'custom_classifier';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$data['category'] = $category;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function emotion($text)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'emotion';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function emotion_multilang($text, $lang_code)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'emotion';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$data['lang_code'] = $lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function emotion_batch($text_list)
{
// $text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'emotion_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function emotion_multilang_batch($text_list, $lang_code)
{
// $text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'emotion_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$data['lang_code'] = $lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
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
$url = $GLOBALS['host'].'facial_emotion';
$cFile = new CURLFile($fileName, $finfo, basename($fileName));
$data = array();
$data['api_key'] = $api_key;
$data['file'] = $cFile;
$data['filename'] = $cFile->postname;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function facial_emotion_url($url_to_image)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'facial_emotion';
$data = array();
$data['api_key'] = $api_key;
$data['url'] = $url_to_image;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function intent($text)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'intent';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function intent_batch($text_list)
{
// $text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'intent_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function keywords($text)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'keywords';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function keywords_batch($text_list)
{
// $text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'keywords_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function language_detection($text)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'language_detection';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function language_detection_batch($text_list)
{
// $text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'language_detection_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function multilang_keywords($text,$lang_code)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$lang_code = urlencode($lang_code);
$url = $GLOBALS['host'].'multilang_keywords';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$data['lang_code'] = $lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function ner($text)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'ner';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function ner_multilang($text,$lang_code)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'ner';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$data['lang_code'] = $lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function ner_batch($text_list)
{
// $text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'ner_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function ner_multilang_batch($text_list,$lang_code)
{
// $text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'ner_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$data['lang_code'] = $lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
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
$url = $GLOBALS['host'].'nsfw';
$cFile = new CURLFile($fileName, $finfo, basename($fileName));
$data = array();
$data['api_key'] = $api_key;
$data['file'] = $cFile;
$data['filename'] = $cFile->postname;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); 
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function nsfw_url($url_to_image)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'nsfw';
$data = array();
$data['api_key'] = $api_key;
$data['url'] = $url_to_image;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); 
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
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
$url = $GLOBALS['host'].'object_recognizer';
$cFile = new CURLFile($fileName, $finfo, basename($fileName));
$data = array();
$data['api_key'] = $api_key;
$data['file'] = $cFile;
$data['filename'] = $cFile->postname;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function object_recognizer_url($url_to_image)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'object_recognizer';
$data = array();
$data['api_key'] = $api_key;
$data['url'] = $url_to_image;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}


function phrase_extractor($text)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'phrase_extractor';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function phrase_extractor_batch($text_list)
{
// $text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'phrase_extractor_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
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
$url = $GLOBALS['host'].'popularity';
$cFile = new CURLFile($fileName, $finfo, basename($fileName));
$data = array();
$data['api_key'] = $api_key;
$data['file'] = $cFile;
$data['filename'] = $cFile->postname;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
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
$url = $GLOBALS['host'].'popularity';
$data = array();
$data['api_key'] = $api_key;
$data['url'] = $url_to_image;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); 
curl_setopt($ch, CURLOPT_TIMEOUT, 60); //timeout in seconds
$result = curl_exec($ch);
return $result;
}

function sentiment($text)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'sentiment';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function sentiment_multilang($text, $lang_code)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'sentiment';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$data['lang_code'] = $lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function sentiment_batch($text_list)
{
// $text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'sentiment_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}


function target_sentiment($text, $aspect,$lang_code)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'target_sentiment';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$data['aspect'] = $aspect;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function target_sentiment_batch($text_list, $entity, $lang_code )
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'target/sentiment_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$data['entity'] = $entity;
$data['lang_code'] = $lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}


function sarcasm($text)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'sarcasm';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function sarcasm_batch($text_list)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'sarcasm_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}


function sentiment_multilang_batch($text_list, $lang_code)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'sentiment_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$data['lang_code'] = $lang_code;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function similarity($text1,$text2)
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'similarity';
$data = array();
$data['api_key'] = $api_key;
$data['text_1'] = $text1;
$data['text_2'] = $text2;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function taxonomy($text)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'taxonomy';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function taxonomy_batch($text_list)
{
// $text_list = urlencode($text_list);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'taxonomy_batch';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text_list;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function text_parser($text)
{
// $text = urlencode($text);
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = $GLOBALS['host'].'text_parser';
$data = array();
$data['api_key'] = $api_key;
$data['text'] = $text;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

function usage()
{
if(getenv("pd_api_key"))
$api_key = getenv("pd_api_key");
else
return "Set an api key";
$url = 'http://104.154.213.9/usage';
$data = array();
$data['api_key'] = $api_key;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: multipart/form-data"));
$result = curl_exec($ch);
return $result;
}

?>
