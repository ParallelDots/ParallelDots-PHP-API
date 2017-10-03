# ParallelDots-Php-API
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
sentiment("Come on, lets play together");
?>
{"probabilities"=>{"positive"=>0.568817, "neutral"=>0.400776, "negative"=>0.030407}, "sentiment"=>"positive"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
similarity("Sachin is the greatest batsman", "Tendulkar is the finest cricketer");
?>
{"actual_score": 0.8429316084125629, "normalized_score": 4.931468682744329, "similarity": 4.931468682744329}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
ner("Narendra Modi is the prime minister of India");
?>
{"entities": [{"category": ["place"], "name": "India", "confidence_score": 1.0}, {"category": ["person"], "name": "Narendra Modi", "confidence_score": 1.0}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
keywords("Prime Minister Narendra Modi tweeted a link to the speech Human Resource Development Minister Smriti Irani made in the Lok Sabha during the debate on the ongoing JNU row and the suicide of Dalit scholar Rohith Vemula at the Hyderabad Central University.");
?>
{"keywords": [{"relevance_score": 6, "keyword": "Human Resource Development Minister Smriti Irani"}, {"relevance_score": 4, "keyword": "Prime Minister Narendra Modi"}, {"relevance_score": 3, "keyword": "Hyderabad Central University"}, {"relevance_score": 3, "keyword": "ongoing JNU row"}, {"relevance_score": 2, "keyword": "Dalit scholar"}, {"relevance_score": 2, "keyword": "Lok Sabha"}, {"relevance_score": 2, "keyword": "Rohith Vemula"}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
taxonomy("Narendra Modi is the prime minister of India");
?>
{"taxonomy": [{"tag": "finance", "confidence_score": 4.088}, {"tag": "government", "confidence_score": 3.4284}, {"tag": "business", "confidence_score": 1.2719}]}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
emotion("Did you hear the latest Porcupine Tree song ? It's rocking !");
?>
{"emotion": "happy"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
intent("Finance ministry calls banks to discuss new facility to drain cash");
?>
{"intent": "news"}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
multilang("La ville de Paris est trÃ¨s belle", "fr");
?>
{"sentiment": "positive", "confidence_score": 0.845703}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
abuse("you f**king a$$hole");
?>
{"sentence_type": "Abusive", "confidence_score": 0.953125}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
sentiment_social("I left my camera at home");
?>
{"probabilities": {"positive": 0.040374, "neutral": 0.491032, "negative": 0.468594}}

<?php
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
usage();
?>
{
"emotion": 100,
"sentiment": 100,
"similarity": 100,
"taxonomy": 100,
"abuse": 100,
"intent": 100,
"keywords": 100,
"ner": 100,
"multilang": 100,
"sentiment_social": 100
}
```

