<?php
require(__DIR__ . '/autoload.php');

set_api_key("paste here api_key");




$text="Donald Trump is the President of the United States of America.";
$text1="Donald Trump is the President of the United States of America.";
$text2="C'est un environnement très hostile, si vous choisissez de débattre ici, vous serez vicieusement attaqué par l'opposition";
$url="https://i.imgur.com/klb812s.jpg";
$path="aish.jpeg";
$obj = "{\"world politics\":[\"diplomacy\",\"UN\",\"war\"],\"finance\":[\"markets\",\"economy\",\"shares\"]}";
echo similarity($text,$text1);
$text_list = json_encode(array("drugs are fun", "don\'t do drugs, stay in school", "lol you a fag son", "I have a throat infection"));
$text_list1 = "[ \"Donald Trump is the President of the United States of America.\",\"Donald Trump is the President of the United States of America.\" ]";
echo taxonomy_batch($text_list1);
echo taxonomy($text);
echo emotion_multilang($text2, "fr");
echo ner($text);
echo ner_batch($text_list1);
echo abuse($text);
echo abuse_batch($text_list1);
echo emotion($text);
echo emotion_batch($text_list1);
echo keywords($text);
echo keywords_batch($text_list1);
echo phrase_extractor($text);
echo phrase_extractor_batch($text_list1);
echo sentiment($text);
echo sentiment_batch($text_list1);
echo custom_classifier($text,$obj);
echo multilang_keywords($text2,"fr");
echo facial_emotion_url($url);
echo facial_emotion($path);
echo object_recognizer_url($url);
echo object_recognizer($path);
echo sarcasm($text);
echo sarcasm_batch ($text_list1);
?>





