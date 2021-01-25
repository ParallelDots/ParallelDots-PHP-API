# ParallelDots-PHP-API
Php Wrapper for ParallelDots APIs

#### Requirement :
1. Install cUrl on your system if not present.
- For ubuntu use sudo apt-get install php-curl

#### Installation
1. Create a composer.json file in your project's directory.
2. Write the following in the file: 
```sh
{
  "require": {
    "paralleldots/apis": "*"
  },
  "minimum-stability": "dev"
}
```
3. Run the following command in the same directory (NOTE: You must have composer installed): 
``` sh
composer install
```
#### Languages Supported
	- Portuguese ( pt )
	- Simplified Chinese ( zh )
	- Spanish ( es )
	- German ( de )
	- French ( fr )
	- Dutch ( nl )
	- Italian (it)
	- Japanese ( ja )
	- Russian ( ru )
	- Thai ( th )
	- Danish ( da )
	- Finish ( fi )
	- Arabic (ar)
	- Greek (el)
  
  
### API Keys & Setup
Sign up for ParallelDots APIs account to get your free API key [here](https://user.apis.paralleldots.com/signing-up). You will receive an email with the details to access your API key.
Configuration:
```sh
<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
# Setting your API key
set_api_key("YOUR API KEY");
# Viewing your API key
get_api_key();
?>
```
#### Examples
```sh
<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo abuse("you f**king ass hole");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = "[\"you f**king ass hole\",\"fuck this shit\"]";
echo abuse_batch($text_list);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$obj = json_encode(array("world politics", "news"));
echo custom_classifier("Donald Trump is the President of the United States of America.", $obj);
?>
{"taxonomy":[{"category":"world politics","confidence_score":0.5382496715},{"category":"news","confidence_score":0.1232979}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo sarcasm("Did you hear the latest Porcupine Tree song ? It's rocking !");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo sarcasm_multilang("Avez-vous entendu la dernière chanson de Porcupine Tree? Ça berce!", "fr");
?>

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = "[\"I am trying to imagine you with a personality\",\"This is shit\"]";
echo sarcasm_batch($text_list);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list_multilang = "[\"les drogues sont amusantes\",\"ne pas faire de la drogue reste à l'école\",\"lol vous un fils de fag\",\"J'ai une infection de la gorge\"]";
echo sarcasm_multilang_batch($text_list_multilang, "fr");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo emotion("I am trying to imagine you with a personality");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo emotion_multilang("Avez-vous entendu la dernière chanson de Porcupine Tree? Ça berce!", "fr");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = "[\"I am trying to imagine you with a personality\",\"This is shit\"]";
echo emotion_batch($text_list);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list_multilang = "[\"les drogues sont amusantes\",\"ne pas faire de la drogue reste à l'école\",\"lol vous un fils de fag\",\"J'ai une infection de la gorge\"]";
echo emotion_multilang_batch($text_list_multilang, "fr");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$path_to_image = "<path_to_image>";
echo facial_emotion($path_to_image);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$url_to_image = "<url_to_image>";
echo facial_emotion_url($url_to_image);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo intent("How do I cancel my ticket from the app?");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = "[\"How do I cancel my ticket from the app?\",\"20% off on your next Uber ride\"]";
echo intent_batch($text_list);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo keywords("Prime Minister Narendra Modi tweeted a link to the speech Human Resource Development Minister Smriti Irani made in the Lok Sabha during the debate on the ongoing JNU row and the suicide of Dalit scholar Rohith Vemula at the Hyderabad Central University.");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = "[\"For the Yankees, it took a stunning comeback after being down 2-0 to the Indians in the American League Division Series. For the Astros, it took beating Chris Sale to top the Red Sox\",\"U.S. stocks edged higher on Friday, with the S&P 500 hitting a more than five-month high, as gains in industrials and other areas offset a drop in financials. Fred Katayama reports.\"]";
echo keywords_batch($text_list);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo multilang_keywords("C'est un environnement très hostile, si vous choisissez de débattre ici, vous serez vicieusement attaqué par l'opposition.", "fr");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo ner("Narendra Modi is the prime minister of India");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = "[ \"Apple was founded by Steve Jobs\", \"Apple Inc. is an American multinational technology company headquartered in Cupertino.\"]";
echo ner_batch($text_list);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo ner_multilang("Lionel Andrés Messi vuelve a ser el gran protagonista en las portadas de la prensa deportiva internacional al día siguiente de un partido de Champions.","es");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = "[ \"Lionel Andrés Messi vuelve a ser el gran protagonista en las portadas de la prensa deportiva internacional al día siguiente de un partido de Champions.\", \"Lionel Andrés Messi vuelve a ser el gran protagonista en las portadas de la prensa deportiva internacional al día siguiente de un partido de Champions.\"]";
echo ner_multilang_batch($text_list,"es");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$path_to_image = "<path_to_image>";
echo object_recognizer($path_to_image);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$url_to_image = "<url_to_image>";
echo object_recognizer_url($url_to_image);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo phrase_extractor("For the Yankees, it took a stunning comeback after being down 2-0 to the Indians in the American League Division Series. For the Astros, it took beating Chris Sale to top the Red Sox..");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = "[\"For the Yankees, it took a stunning comeback after being down 2-0 to the Indians in the American League Division Series. For the Astros, it took beating Chris Sale to top the Red Sox.\",\"U.S. stocks edged higher on Friday, with the S&P 500 hitting a more than five-month high, as gains in industrials and other areas offset a drop in financials. Fred Katayama reports.\"]";
echo phrase_extractor_batch($text_list);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo sentiment("Come on, lets play together");
?>




<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo sentiment_multilang("Allez, jouons ensemble", "fr");
?>



<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = "[ \"Come on, lets play together\",\"Team performed well overall\" ]";
echo sentiment_batch($text_list);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list_multilang = "[\"les drogues sont amusantes\",\"ne pas faire de la drogue reste à l'école\",\"lol vous un fils de fag\",\"J'ai une infection de la gorge\"]";
echo sentiment_multilang_batch($text_list_multilang, "fr");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo similarity("Sachin is the greatest batsman", "Tendulkar is the finest cricketer");
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo taxonomy("Narendra Modi is the prime minister of India");
?>

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = "[ \"Apple was founded by Steve Jobs\", \"Apple Inc. is an American multinational technology company headquartered in Cupertino.\"]";
echo taxonomy_batch($text_list);
?>


<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo usage();
?>

```

