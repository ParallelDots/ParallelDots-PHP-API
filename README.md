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
### API Keys & Setup
Signup and get your free API key from [ParallelDots](https://www.paralleldots.com/pricing). You will receive a mail containing the API key at the registered email id.
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
{"usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions", "sentence_type": "Abusive", "confidence_score": 0.998047}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$obj = json_encode((object) [
    'world politics' => ["diplomacy", "UN", "war"],
    'india' => ["congress", "india", "bjp"],
    'finance' => ["markets", "economy","shares"]
]);
echo custom_classifier("Narendra Modi is the Prime Minister of India", $obj);
?>
{"usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions", "taxonomy": [{"tag": "india", "confidence_score": 0.758248}, {"tag": "world politics", "confidence_score": 0.610343}, {"tag": "finance", "confidence_score": 0.371018}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo emotion("Did you hear the latest Porcupine Tree song ? It's rocking !");
?>
{"emotion": {"emotion": "Happy", "probabilities": {"Sarcasm": 0.0, "Angry": 0.0, "Sad": 0.0, "Fear": 0.0, "Bored": 0.0, "Excited": 0.04793506860733032, "Happy": 0.1406149665514628}}, "usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo emotion_multilang("Avez-vous entendu la dernière chanson de Porcupine Tree? Ça berce!", "fr");
?>
{"emotion": {"emotion": "Happy", "probabilities": {"Sarcasm": 0.0, "Angry": 0.0, "Sad": 0.03206148371100426, "Fear": 0.0, "Bored": 0.0, "Excited": 0.03780654817819595, "Happy": 0.0580072949330012}}, "usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo intent("Finance ministry calls banks to discuss new facility to drain cash");
?>
{"probabilities": {"marketing": 0.059, "spam/junk": 0.039, "news": 0.773, "feedback/opinion": 0.097, "query": 0.032}, "usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions", "intent": "news"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo keywords("Prime Minister Narendra Modi tweeted a link to the speech Human Resource Development Minister Smriti Irani made in the Lok Sabha during the debate on the ongoing JNU row and the suicide of Dalit scholar Rohith Vemula at the Hyderabad Central University.");
?>
{"keywords": [{"keyword": "Prime Minister Narendra Modi", "confidence_score": 0.857594}, {"keyword": "link", "confidence_score": 0.913924}, {"keyword": "speech Human Resource", "confidence_score": 0.70655}, {"keyword": "Smriti", "confidence_score": 0.860351}, {"keyword": "Lok", "confidence_score": 0.945534}], "usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo multilang_keywords("La ville de Paris est trÃ¨s belle", "fr");
?>
{"keywords": ["paris", "ville", "belle", "tr\u00e8s"], "usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo ner("Narendra Modi is the prime minister of India");
?>
{"usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions", "entities": [{"category": "name", "name": "Narendra Modi", "confidence_score": 0.951439}, {"category": "place", "name": "India", "confidence_score": 0.9263}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$path_to_image = "<path_to_image>";
echo nsfw($path_to_image);
?>
{"usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions", "output": "not safe to open at work", "prob": 0.9670518040657043}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo phrase_extractor("The girls giggling and playing in the park never seemed to tire");
?>
{"keywords": [{"relevance_score": 1, "keyword": "tire"}], "usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
$path_to_image = "<path_to_image>";
echo popularity($path_to_image);
?>
{"Popular": "22.5975677371", "usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions", "Not Popular": "77.4024307728"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo sentiment("Come on, lets play together");
?>
{"probabilities": {"positive": 0.096, "neutral": 0.891, "negative": 0.013}, "usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions", "sentiment": "neutral"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo sentiment_multilang("Allez, jouons ensemble", "fr");
?>
{"probabilities": {"positive": 0.223, "neutral": 0.764, "negative": 0.013}, "usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions", "sentiment": "neutral"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo similarity("Sachin is the greatest batsman", "Tendulkar is the finest cricketer");
?>
{"usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions", "actual_score": 0.842932, "normalized_score": 4.931469}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo taxonomy("Narendra Modi is the prime minister of India");
?>
{"usage": "By accessing ParallelDots API or using information generated by ParallelDots API, you are agreeing to be bound by the ParallelDots API Terms of Use: http://www.paralleldots.com/terms-and-conditions", "taxonomy": [{"tag": "News and Politics/International News", "confidence_score": 0.729859}, {"tag": "Business and Finance/Economy", "confidence_score": 0.738674}, {"tag": "Sports/Cricket", "confidence_score": 0.875686}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
echo usage();
?>
{"emotion": 200, "paying": true, "visual_monthly_quota": 921, "sentiment": 200, "similarity": 200, "taxonomy": 200, "popularity": 100, "monthly_quota": 5749.0, "daily_quota": 1000, "abuse": 200, "intent": 200, "visual_daily_quota": 100, "keywords": 200, "ner": 200, "multilang": 200, "sentiment_social": 200}
```

