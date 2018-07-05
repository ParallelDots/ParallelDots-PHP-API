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
{"code": 200, "sentence_type": "Abusive", "confidence_score": 0.998047}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = json_encode(array("drugs are fun", "don\'t do drugs, stay in school", "lol you a fag son", "I have a throat infection"));
echo abuse_batch($text_list);
?>
{"code": 200, "abuse": [{"sentence_type": "Non Abusive", "confidence_score": 0.904297}, {"sentence_type": "Non Abusive", "confidence_score": 0.939453}, {"sentence_type": "Abusive", "confidence_score": 0.884766}, {"sentence_type": "Non Abusive", "confidence_score": 0.859375}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$obj = json_encode((object) [
    'world politics' => ["diplomacy", "UN", "war"],
    'india' => ["congress", "india", "bjp"],
    'finance' => ["markets", "economy","shares"]
]);
echo custom_classifier("Narendra Modi is the Prime Minister of India", $obj);
?>
{"code": 200, "taxonomy": [{"confidence_score": 0.929256021976471, "tag": "india"}, {"confidence_score": 0.9066339731216431, "tag": "world politics"}, {"confidence_score": 0.5557219982147217, "tag": "finance"}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo emotion("Did you hear the latest Porcupine Tree song ? It's rocking !");
?>
{"code": 200, "emotion": {"probabilities": {"Excited": 0.35946185611995524, "Angry": 0.047388801553766284, "Sarcasm": 0.11246225260033746, "Sad": 0.008463515319536615, "Happy": 0.38386026259527695, "Fear": 0.0832442102790067, "Bored": 0.005119101532120664}, "emotion": "Happy"}}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo emotion_multilang("Avez-vous entendu la dernière chanson de Porcupine Tree? Ça berce!", "fr");
?>
{"code": 200, "emotion": {"probabilities": {"Excited": 0.22379238991339617, "Angry": 0.06747602813321307, "Sarcasm": 0.129273083404285, "Sad": 0.1666631471181756, "Happy": 0.2766871542748692, "Fear": 0.13610819715606104, "Bored": 0.0}, "emotion": "Happy"}}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = json_encode(array("drugs are fun", "don\'t do drugs, stay in school", "lol you a fag son", "I have a throat infection"));
echo emotion_batch($text_list);
?>
{"code": 200, "emotion": [{"Excited": 0.2082173830066366, "Angry": 0.08368749025924326, "Sarcasm": 0.14361357966835644, "Sad": 0.025132654797074747, "Happy": 0.1269828871815771, "Fear": 0.344180628127824, "Bored": 0.06818537695928778}, {"Excited": 0.16285099790681773, "Angry": 0.15343815844211714, "Sarcasm": 0.12351721393519076, "Sad": 0.09262522781839527, "Happy": 0.1941499715581231, "Fear": 0.18145158393897357, "Bored": 0.09196684640038236}, {"Excited": 0.16457090063285224, "Angry": 0.1216389498218648, "Sarcasm": 0.11124312097614852, "Sad": 0.05410169293913279, "Happy": 0.07598588202024392, "Fear": 0.18020579627989994, "Bored": 0.2922536573298578}, {"Excited": 0.004337021311595699, "Angry": 0.46982189055546925, "Sarcasm": 0.05327575096045899, "Sad": 0.3672790882763135, "Happy": 0.005119673993076841, "Fear": 0.09443579921654321, "Bored": 0.005730775686542725}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list_multilang = json_encode(array("les drogues sont amusantes", "ne pas faire de la drogue reste à l'école", "lol vous un fils de fag", "J'ai une infection de la gorge"));
echo emotion_multilang_batch($text_list_multilang, "fr");
?>
{"code": 200, "emotion": [{"Excited": 0.2082173830066366, "Angry": 0.08368749025924326, "Sarcasm": 0.14361357966835644, "Sad": 0.025132654797074747, "Happy": 0.1269828871815771, "Fear": 0.344180628127824, "Bored": 0.06818537695928778}, {"Excited": 0.04239430417791154, "Angry": 0.5973252487701952, "Sarcasm": 0.07606870827400262, "Sad": 0.05560273629943171, "Happy": 0.048649541948481326, "Fear": 0.09433366519047207, "Bored": 0.08562579533950584}, {"Excited": 0.20433981731805748, "Angry": 0.1220104704524655, "Sarcasm": 0.13830145223523543, "Sad": 0.04597934708090136, "Happy": 0.0987838892687481, "Fear": 0.16393978751891622, "Bored": 0.22664523612567564}, {"Excited": 0.004337021311595699, "Angry": 0.46982189055546925, "Sarcasm": 0.05327575096045899, "Sad": 0.3672790882763135, "Happy": 0.005119673993076841, "Fear": 0.09443579921654321, "Bored": 0.005730775686542725}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$path_to_image = "<path_to_image>";
echo facial_emotion($path_to_image);
?>
{"code": 200, "facial_emotion": [{"tag": "Happy", "score": 0.9499974846839905}, {"tag": "Neutral", "score": 0.00833375658839941}, {"tag": "Surprise", "score": 0.00833375658839941}, {"tag": "Sad", "score": 0.00833375658839941}, {"tag": "Fear", "score": 0.00833375658839941}, {"tag": "Disgust", "score": 0.00833375658839941}, {"tag": "Angry", "score": 0.00833375658839941}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$url_to_image = "<url_to_image>";
echo facial_emotion_url($url_to_image);
?>
{"code": 200, "facial_emotion": [{"tag": "Happy", "score": 0.9499974846839905}, {"tag": "Neutral", "score": 0.00833375658839941}, {"tag": "Surprise", "score": 0.00833375658839941}, {"tag": "Sad", "score": 0.00833375658839941}, {"tag": "Fear", "score": 0.00833375658839941}, {"tag": "Disgust", "score": 0.00833375658839941}, {"tag": "Angry", "score": 0.00833375658839941}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo intent("Finance ministry calls banks to discuss new facility to drain cash");
?>
{"code": 200, "probabilities": {"feedback/opinion": 0.097, "query": 0.032, "spam/junk": 0.039, "marketing": 0.059, "news": 0.773}, "intent": "news"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = json_encode(array("drugs are fun", "don\'t do drugs, stay in school", "lol you a fag son", "I have a throat infection"));
echo intent_batch($text_list);
?>
{"code": 200, "intent": [{"feedback/opinion": 0.141, "query": 0.002, "spam/junk": 0.66, "marketing": 0.116, "news": 0.08}, {"feedback/opinion": 0.289, "query": 0.013, "spam/junk": 0.482, "marketing": 0.096, "news": 0.12}, {"feedback/opinion": 0.333, "query": 0.001, "spam/junk": 0.664, "marketing": 0.001, "news": 0.001}, {"feedback/opinion": 0.469, "query": 0.404, "spam/junk": 0.124, "marketing": 0.0, "news": 0.004}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo keywords("Prime Minister Narendra Modi tweeted a link to the speech Human Resource Development Minister Smriti Irani made in the Lok Sabha during the debate on the ongoing JNU row and the suicide of Dalit scholar Rohith Vemula at the Hyderabad Central University.");
?>
{"code": 200, "keywords": [{"keyword": "Prime Minister Narendra Modi", "confidence_score": 0.874473}, {"keyword": "link", "confidence_score": 0.940891}, {"keyword": "speech Human Resource Development", "confidence_score": 0.906034}, {"keyword": "Smriti Irani", "confidence_score": 0.966651}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = json_encode(array("drugs are fun", "don\'t do drugs, stay in school", "lol you a fag son", "I have a throat infection"));
echo keywords_batch($text_list);
?>
{"code": 200, "keywords": [[{"keyword": "fun", "confidence_score": 0.560126}], [{"keyword": "drugs", "confidence_score": 0.894901}, {"keyword": "school", "confidence_score": 0.509218}], [{"keyword": "fag", "confidence_score": 0.791485}], [{"keyword": "throat infection", "confidence_score": 0.849233}]]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$lang_text = "La ville de Paris est trÃ¨s belle";
echo language_detection($lang_text);
?>
{"output": "French", "code": 200, "prob": 0.9999958872795105}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = json_encode(array("drugs are fun", "don\'t do drugs, stay in school", "lol you a fag son", "I have a throat infection"));
echo language_detection_batch($text_list);
?>
{"code": 200, "lang_detection": [{"output": "French", "prob": 0.9990742802619934}, {"output": "French", "prob": 0.9999998807907104}, {"output": "French", "prob": 0.996209442615509}, {"output": "French", "prob": 0.9985631108283997}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo multilang_keywords("La ville de Paris est trÃ¨s belle", "fr");
?>
{"code": 200, "keywords": [{"confidence_score": 4.0, "keyword": "tr\u00e3\u00a8s belle"}, {"confidence_score": 1.0, "keyword": "ville"}, {"confidence_score": 1.0, "keyword": "paris"}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo ner("Narendra Modi is the prime minister of India");
?>
{"entities": [{"name": "Narendra Modi", "category": "name", "confidence_score": 0.951439}, {"name": "India", "category": "place", "confidence_score": 0.9263}], "code": 200}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = json_encode(array("drugs are fun", "don\'t do drugs, stay in school", "lol you a fag son", "I have a throat infection"));
echo ner_batch($text_list);
?>
{"entities": [[], [{"name": "don", "category": "name", "confidence_score": 0.671695}], [], []], "code": 200}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$path_to_image = "<path_to_image>";
echo nsfw($path_to_image);
?>
{"code": 200, "nsfw": "safe to open at work", "probability": 0.99995}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$url_to_image = "<url_to_image>";
echo nsfw_url($url_to_image);
?>
{"code": 200, "nsfw": "safe to open at work", "probability": 0.99995}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$path_to_image = "<path_to_image>";
echo object_recognizer($path_to_image);
?>
{"code": 200, "output": [{"score": 0.44762882590293884, "tag": "Brand"}, {"score": 0.4309701919555664, "tag": "Person"}, {"score": 0.307409405708313, "tag": "Clothing"}, {"score": 0.1471368819475174, "tag": "T-shirt"}, {"score": 0.1348528116941452, "tag": "Hairstyle"}, {"score": 0.1298481822013855, "tag": "Font"}, {"score": 0.11203251779079437, "tag": "Man"}, {"score": 0.10691165924072266, "tag": "Photo shoot"}, {"score": 0.10481810569763184, "tag": "Album cover"}, {"score": 0.10019328445196152, "tag": "Hand"}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$url_to_image = "<url_to_image>";
echo object_recognizer_url($url_to_image);
?>
{"code": 200, "output": [{"score": 0.44762882590293884, "tag": "Brand"}, {"score": 0.4309701919555664, "tag": "Person"}, {"score": 0.307409405708313, "tag": "Clothing"}, {"score": 0.1471368819475174, "tag": "T-shirt"}, {"score": 0.1348528116941452, "tag": "Hairstyle"}, {"score": 0.1298481822013855, "tag": "Font"}, {"score": 0.11203251779079437, "tag": "Man"}, {"score": 0.10691165924072266, "tag": "Photo shoot"}, {"score": 0.10481810569763184, "tag": "Album cover"}, {"score": 0.10019328445196152, "tag": "Hand"}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo phrase_extractor("The girls giggling and playing in the park never seemed to tire");
?>
{"keywords": [{"relevance_score": 1, "keyword": "tire"}], "code": 200}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = json_encode(array("drugs are fun", "don\'t do drugs, stay in school", "lol you a fag son", "I have a throat infection"));
echo phrase_extractor_batch($text_list);
?>
{"code": 200, "phrases": [[], [{"relevance_score": 1, "keyword": "school"}], [{"relevance_score": 2, "keyword": "fag son"}], [{"relevance_score": 2, "keyword": "throat infection"}]]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$path_to_image = "<path_to_image>";
echo popularity($path_to_image);
?>
{"Not Popular": "15.0209337473", "code": 200, "Popular": "84.9790692329"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$url_to_image = "<url_to_image>";
echo popularity_url($url_to_image);
?>
{"Not Popular": "15.0209337473", "code": 200, "Popular": "84.9790692329"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo sentiment("Come on, lets play together");
?>
{"code": 200, "sentiment": "neutral", "probabilities": {"positive": 0.096, "negative": 0.013, "neutral": 0.891}}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo sentiment_multilang("Allez, jouons ensemble", "fr");
?>
{"code": 200, "sentiment": "neutral", "probabilities": {"positive": 0.223, "negative": 0.013, "neutral": 0.764}}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = json_encode(array("drugs are fun", "don\'t do drugs, stay in school", "lol you a fag son", "I have a throat infection"));
echo sentiment_batch($text_list);
?>
{"sentiment": [{"positive": 0.69, "negative": 0.046, "neutral": 0.265}, {"positive": 0.192, "negative": 0.187, "neutral": 0.621}, {"positive": 0.527, "negative": 0.275, "neutral": 0.198}, {"positive": 0.077, "negative": 0.908, "neutral": 0.015}], "code": 200}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list_multilang = json_encode(array("les drogues sont amusantes", "ne pas faire de la drogue reste à l'école", "lol vous un fils de fag", "J'ai une infection de la gorge"));
echo sentiment_multilang_batch($text_list_multilang, "fr");
?>
{"sentiment": [{"positive": 0.69, "negative": 0.046, "neutral": 0.265}, {"positive": 0.021, "negative": 0.492, "neutral": 0.487}, {"positive": 0.564, "negative": 0.194, "neutral": 0.242}, {"positive": 0.077, "negative": 0.908, "neutral": 0.015}], "code": 200}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo similarity("Sachin is the greatest batsman", "Tendulkar is the finest cricketer");
?>
{"actual_score": 0.842932, "normalized_score": 4.931469, "code": 200}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo taxonomy("Narendra Modi is the prime minister of India");
?>
{"taxonomy": [{"confidence_score": 0.9171473383903503, "tag": "hobbies and interests/inventors and patents"}, {"confidence_score": 0.792364, "tag": "law, govt and politics/government"}, {"confidence_score": 0.916781, "tag": "business and industrial/business news"}], "code": 200}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$text_list = json_encode(array("drugs are fun", "don\'t do drugs, stay in school", "lol you a fag son", "I have a throat infection"));
echo taxonomy_batch($text_list);
?>
{"taxonomy": [[{"confidence_score": 0.996437, "tag": "health and fitness/drugs"}, {"confidence_score": 0.967404, "tag": "family and parenting/babies and toddlers"}, {"confidence_score": 0.6848993897438049, "tag": "automotive and vehicles/motor shows"}], [{"confidence_score": 0.970658, "tag": "health and fitness/drugs"}, {"confidence_score": 0.9462, "tag": "family and parenting/adoption"}, {"confidence_score": 0.967469, "tag": "education/school"}], [{"confidence_score": 0.9779467582702637, "tag": "family and parenting/parenting teens"}, {"confidence_score": 0.972425, "tag": "health and fitness/therapy"}, {"confidence_score": 0.9049649834632874, "tag": "pets/cats"}], [{"confidence_score": 0.985712, "tag": "health and fitness/disease"}, {"confidence_score": 0.974752, "tag": "family and parenting/adoption"}, {"confidence_score": 0.97041, "tag": "pets/cats"}]], "code": 200}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo text_parser("Thrilling contest between Manchester City and Manchester United ends in a draw.");
?>
{"code": 200, "output": [{"text": "Thrilling", "Dependency": "compound", "Tags": "noun"}, {"text": "contest", "Dependency": "nominal subject", "Tags": "noun"}, {"text": "between", "Dependency": "prepositional modifier", "Tags": "preposition or conjunction"}, {"text": "Manchester", "Dependency": "compound", "Tags": "noun"}, {"text": "City", "Dependency": "object of a preposition", "Tags": "noun"}, {"text": "and", "Dependency": "coordinating conjunction", "Tags": "conjuction"}, {"text": "Manchester", "Dependency": "compound", "Tags": "noun"}, {"text": "United", "Dependency": "conjunct", "Tags": "noun"}, {"text": "ends", "Dependency": "root", "Tags": "verb"}, {"text": "in", "Dependency": "prepositional modifier", "Tags": "preposition or conjunction"}, {"text": "a", "Dependency": "determiner", "Tags": "determiner"}, {"text": "draw", "Dependency": "object of a preposition", "Tags": "noun"}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo usage();
?>
{"monthly_billable_hits_breakdown": {"facial_emotion": 4, "emotion": 25, "sentiment": 25, "similarity": 2, "language_detection": 10, "taxonomy": 10, "popularity": 28, "text_parser": 3, "ner": 14, "custom_classifier": 2, "abuse": 16, "nsfw": 4, "keywords": 36, "intent": 10, "object_recognizer": 4, "multilang_keywords": 2, "phrase_extractor": 10}, "daily_billable_hits_breakdown": {"facial_emotion": 4, "emotion": 20, "sentiment": 20, "similarity": 2, "language_detection": 10, "taxonomy": 10, "popularity": 4, "text_parser": 3, "ner": 14, "custom_classifier": 2, "abuse": 15, "nsfw": 4, "keywords": 10, "intent": 10, "object_recognizer": 4, "multilang_keywords": 2, "phrase_extractor": 10}, "daily_billable_hits": 144, "monthly_billable_hits": 205}
```

