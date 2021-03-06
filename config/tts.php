<?php 
return [
	'engine' => env('TTS_ENGINE', 'NUANCE'),
	'app_id' => env('TTS_APP_ID', ''),
	'app_key' => env('TTS_APP_KEY', ''),
	'device_id' => env('TTS_DEVICE_ID', ''),
	'codec' => env('TTS_CODEC', ''),

	'bing_client_id' => env('BING_CLIENT_ID', 'ppEdTNGQhrLjYLdsC20HuulLcpkPU9sStO'),
	'bing_client_secret' => env('BING_CLIENT_SECRET', 'rQXgAg/wxHnZBpiNRR9ad6mAL74TWHc9VXEBk3DzuiU='),

	'nuance_codes' => [
		['languageCode' => '' ,'languageName' => 'Arabic',  'languageId' => 'ara-XWW', 'ttsEngine' => 'Laila' ],
		['languageCode' => '' ,'languageName' => 'Arabic',  'languageId' => 'ara-XWW', 'ttsEngine' => 'Maged' ],
		['languageCode' => '' ,'languageName' => 'Arabic',  'languageId' => 'ara-XWW', 'ttsEngine' => 'Tarik' ],
		['languageCode' => '' ,'languageName' => 'Bahasa (Indonesia)',  'languageId' => 'ind-IDN', 'ttsEngine' => 'Damayanti' ],
		['languageCode' => '' ,'languageName' => 'Basque',  'languageId' => 'baq-ESP', 'ttsEngine' => 'Miren' ],
		['languageCode' => '' ,'languageName' => 'Cantonese',  'languageId' => 'yue-CHN', 'ttsEngine' => 'Sin-Ji' ],
		['languageCode' => '' ,'languageName' => 'Catalan',  'languageId' => 'cat-ESP', 'ttsEngine' => 'Jordi' ],
		['languageCode' => '' ,'languageName' => 'Catalan',  'languageId' => 'cat-ESP', 'ttsEngine' => 'Montserrat' ],
		['languageCode' => '' ,'languageName' => 'Czech',  'languageId' => 'ces-CZE', 'ttsEngine' => 'Iveta' ],
		['languageCode' => '' ,'languageName' => 'Czech',  'languageId' => 'ces-CZE', 'ttsEngine' => 'Zuzana' ],
		['languageCode' => '' ,'languageName' => 'Danish',  'languageId' => 'dan-DNK', 'ttsEngine' => 'Ida' ],
		['languageCode' => '' ,'languageName' => 'Danish',  'languageId' => 'dan-DNK', 'ttsEngine' => 'Magnus' ],
		['languageCode' => '' ,'languageName' => 'Dutch',  'languageId' => 'nld-NLD', 'ttsEngine' => 'Claire' ],
		['languageCode' => '' ,'languageName' => 'Dutch',  'languageId' => 'nld-NLD', 'ttsEngine' => 'Xander' ],
		['languageCode' => '' ,'languageName' => 'Dutch (Belgium)',  'languageId' => 'nld-BEL', 'ttsEngine' => 'Ellen' ],
		['languageCode' => 'en' ,'languageName' => 'English (Australia)',  'languageId' => 'eng-AUS', 'ttsEngine' => 'Karen' ],
		['languageCode' => 'en' ,'languageName' => 'English (Australia)',  'languageId' => 'eng-AUS', 'ttsEngine' => 'Lee' ],
		['languageCode' => 'en' ,'languageName' => 'English (GB)',  'languageId' => 'eng-GBR', 'ttsEngine' => 'Kate' ],
		['languageCode' => 'en' ,'languageName' => 'English (GB)',  'languageId' => 'eng-GBR', 'ttsEngine' => 'Serena' ],
		['languageCode' => 'en' ,'languageName' => 'English (GB)',  'languageId' => 'eng-GBR', 'ttsEngine' => 'Daniel' ],
		['languageCode' => 'en' ,'languageName' => 'English (GB)',  'languageId' => 'eng-GBR', 'ttsEngine' => 'Oliver' ],
		['languageCode' => 'en' ,'languageName' => 'English (India)',  'languageId' => 'eng-IND', 'ttsEngine' => 'Veena' ],
		['languageCode' => 'en' ,'languageName' => 'English (Ireland)',  'languageId' => 'eng-IRL', 'ttsEngine' => 'Moira' ],
		['languageCode' => 'en' ,'languageName' => 'English (Scotland)',  'languageId' => 'eng-SCT', 'ttsEngine' => 'Fiona' ],
		['languageCode' => 'en' ,'languageName' => 'English (South Africa)',  'languageId' => 'eng-ZAF', 'ttsEngine' => 'Tessa' ],
		['languageCode' => 'en' ,'languageName' => 'English (US)',  'languageId' => 'eng-USA', 'ttsEngine' => 'Ava' ],
		['languageCode' => 'en' ,'languageName' => 'English (US)',  'languageId' => 'eng-USA', 'ttsEngine' => 'Allison' ],
		['languageCode' => 'en' ,'languageName' => 'English (US)',  'languageId' => 'eng-USA', 'ttsEngine' => 'Samantha' ],
		['languageCode' => 'en' ,'languageName' => 'English (US)',  'languageId' => 'eng-USA', 'ttsEngine' => 'Susan' ],
		['languageCode' => 'en' ,'languageName' => 'English (US)',  'languageId' => 'eng-USA', 'ttsEngine' => 'Zoe' ],
		['languageCode' => 'en' ,'languageName' => 'English (US)',  'languageId' => 'eng-USA', 'ttsEngine' => 'Tom' ],
		['languageCode' => '' ,'languageName' => 'Finnish',  'languageId' => 'fin-FIN', 'ttsEngine' => 'Satu' ],
		['languageCode' => '' ,'languageName' => 'French',  'languageId' => 'fra-FRA', 'ttsEngine' => 'Audrey-ML' ],
		['languageCode' => '' ,'languageName' => 'French',  'languageId' => 'fra-FRA', 'ttsEngine' => 'Thomas' ],
		['languageCode' => '' ,'languageName' => 'French',  'languageId' => 'fra-FRA', 'ttsEngine' => 'Aurelie' ],
		['languageCode' => '' ,'languageName' => 'French (Canada)',  'languageId' => 'fra-CAN', 'ttsEngine' => 'Amelie' ],
		['languageCode' => '' ,'languageName' => 'French (Canada)',  'languageId' => 'fra-CAN', 'ttsEngine' => 'Chantal' ],
		['languageCode' => '' ,'languageName' => 'French (Canada)',  'languageId' => 'fra-CAN', 'ttsEngine' => 'Nicolas' ],
		['languageCode' => '' ,'languageName' => 'Galician',  'languageId' => 'glg-ESP', 'ttsEngine' => 'Carmela' ],
		['languageCode' => '' ,'languageName' => 'German',  'languageId' => 'deu-DEU', 'ttsEngine' => 'Anna-ML' ],
		['languageCode' => '' ,'languageName' => 'German',  'languageId' => 'deu-DEU', 'ttsEngine' => 'Petra-ML' ],
		['languageCode' => '' ,'languageName' => 'German',  'languageId' => 'deu-DEU', 'ttsEngine' => 'Markus' ],
		['languageCode' => '' ,'languageName' => 'German',  'languageId' => 'deu-DEU', 'ttsEngine' => 'Yannick' ],
		['languageCode' => '' ,'languageName' => 'Greek',  'languageId' => 'ell-GRC', 'ttsEngine' => 'Melina' ],
		['languageCode' => '' ,'languageName' => 'Greek',  'languageId' => 'ell-GRC', 'ttsEngine' => 'Nikos' ],
		['languageCode' => '' ,'languageName' => 'Hebrew',  'languageId' => 'heb-ISR', 'ttsEngine' => 'Carmit' ],
		['languageCode' => '' ,'languageName' => 'Hindi',  'languageId' => 'hin-IND', 'ttsEngine' => 'Lekha' ],
		['languageCode' => '' ,'languageName' => 'Hungarian',  'languageId' => 'hun-HUN', 'ttsEngine' => 'Mariska' ],
		['languageCode' => 'it','languageName' => 'Italian',  'languageId' => 'ita-ITA', 'ttsEngine' => 'Alice-ML' ],
		['languageCode' => 'it','languageName' => 'Italian',  'languageId' => 'ita-ITA', 'ttsEngine' => 'Federica' ],
		['languageCode' => 'it','languageName' => 'Italian',  'languageId' => 'ita-ITA', 'ttsEngine' => 'Paola' ],
		['languageCode' => 'it','languageName' => 'Italian',  'languageId' => 'ita-ITA', 'ttsEngine' => 'Luca' ],
		['languageCode' => '', 'languageName' => 'Japanese',  'languageId' => 'jpn-JPN', 'ttsEngine' => 'Kyoko' ],
		['languageCode' => '', 'languageName' => 'Japanese',  'languageId' => 'jpn-JPN', 'ttsEngine' => 'Otoya' ],
		['languageCode' => '', 'languageName' => 'Korean',  'languageId' => 'kor-KOR', 'ttsEngine' => 'Sora' ],
		['languageCode' => '', 'languageName' => 'Mandarin (China)',  'languageId' => 'cmn-CHN', 'ttsEngine' => 'Tian-Tian' ],
		['languageCode' => '', 'languageName' => 'Mandarin (Taiwan)',  'languageId' => 'cmn-TWN', 'ttsEngine' => 'Mei-Jia' ],
		['languageCode' => '', 'languageName' => 'Norwegian',  'languageId' => 'nor-NOR', 'ttsEngine' => 'Nora' ],
		['languageCode' => '', 'languageName' => 'Norwegian',  'languageId' => 'nor-NOR', 'ttsEngine' => 'Henrik' ],
		['languageCode' => '', 'languageName' => 'Polish',  'languageId' => 'pol-POL', 'ttsEngine' => 'Ewa' ],
		['languageCode' => '', 'languageName' => 'Polish',  'languageId' => 'pol-POL', 'ttsEngine' => 'Zosia' ],
		['languageCode' => '', 'languageName' => 'Portuguese (Brazil)',  'languageId' => 'por-BRA', 'ttsEngine' => 'Luciana' ],
		['languageCode' => '', 'languageName' => 'Portuguese (Brazil)',  'languageId' => 'por-BRA', 'ttsEngine' => 'Felipe' ],
		['languageCode' => '', 'languageName' => 'Portuguese (Portugal)',  'languageId' => 'por-PRT', 'ttsEngine' => 'Catarina' ],
		['languageCode' => '', 'languageName' => 'Portuguese (Portugal)',  'languageId' => 'por-PRT', 'ttsEngine' => 'Joana' ],
		['languageCode' => '', 'languageName' => 'Romanian',  'languageId' => 'ron-ROU', 'ttsEngine' => 'Ioana' ],
		['languageCode' => '', 'languageName' => 'Russian',  'languageId' => 'rus-RUS', 'ttsEngine' => 'Katya' ],
		['languageCode' => '', 'languageName' => 'Russian',  'languageId' => 'rus-RUS', 'ttsEngine' => 'Milena' ],
		['languageCode' => '', 'languageName' => 'Russian',  'languageId' => 'rus-RUS', 'ttsEngine' => 'Yuri' ],
		['languageCode' => '', 'languageName' => 'Slovak',  'languageId' => 'slk-SVK', 'ttsEngine' => 'Laura' ],
		['languageCode' => 'es', 'languageName' => 'Spanish (Castilian)',  'languageId' => 'spa-ESP', 'ttsEngine' => 'Monica' ],
		['languageCode' => 'es', 'languageName' => 'Spanish (Castilian)',  'languageId' => 'spa-ESP', 'ttsEngine' => 'Jorge' ],
		['languageCode' => 'es', 'languageName' => 'Spanish (Columbia)',  'languageId' => 'spa-COL', 'ttsEngine' => 'Soledad' ],
		['languageCode' => 'es', 'languageName' => 'Spanish (Columbia)',  'languageId' => 'spa-COL', 'ttsEngine' => 'Carlos' ],
		['languageCode' => 'es', 'languageName' => 'Spanish (Mexico)',  'languageId' => 'spa-MEX', 'ttsEngine' => 'Angelica' ],
		['languageCode' => 'es', 'languageName' => 'Spanish (Mexico)',  'languageId' => 'spa-MEX', 'ttsEngine' => 'Paulina' ],
		['languageCode' => 'es', 'languageName' => 'Spanish (Mexico)',  'languageId' => 'spa-MEX', 'ttsEngine' => 'Juan' ],
		['languageCode' => '', 'languageName' => 'Swedish',  'languageId' => 'swe-SWE', 'ttsEngine' => 'Alva' ],
		['languageCode' => '', 'languageName' => 'Swedish',  'languageId' => 'swe-SWE', 'ttsEngine' => 'Oskar' ],
		['languageCode' => '', 'languageName' => 'Thai',  'languageId' => 'tha-THA', 'ttsEngine' => 'Kanya' ],
		['languageCode' => '', 'languageName' => 'Turkish',  'languageId' => 'tur-TUR', 'ttsEngine' => 'Cem' ],
		['languageCode' => '', 'languageName' => 'Turkish',  'languageId' => 'tur-TUR', 'ttsEngine' => 'Yelda' ],
		['languageCode' => '', 'languageName' => 'Valencian',  'languageId' => 'spa-ESP', 'ttsEngine' => 'Empar' ],
	],
	// 'google_codes' => [
	// 	['ttsEngine' => 'af',	'languageId' => 'af',	'languageName' => 'Afrikaans'],
	// 	['ttsEngine' => 'sq',	'languageId' => 'sq',	'languageName' => 'Albanian'],
	// 	['ttsEngine' => 'am',	'languageId' => 'am',	'languageName' => 'Amharic'],
	// 	['ttsEngine' => 'ar',	'languageId' => 'ar',	'languageName' => 'Arabic'],
	// 	['ttsEngine' => 'hy',	'languageId' => 'hy',	'languageName' => 'Armenian'],
	// 	['ttsEngine' => 'az',	'languageId' => 'az',	'languageName' => 'Azerbaijani'],
	// 	['ttsEngine' => 'eu',	'languageId' => 'eu',	'languageName' => 'Basque'],
	// 	['ttsEngine' => 'be',	'languageId' => 'be',	'languageName' => 'Belarusian'],
	// 	['ttsEngine' => 'bn',	'languageId' => 'bn',	'languageName' => 'Bengali'],
	// 	['ttsEngine' => 'bh',	'languageId' => 'bh',	'languageName' => 'Bihari'],
	// 	['ttsEngine' => 'bs',	'languageId' => 'bs',	'languageName' => 'Bosnian'],
	// 	['ttsEngine' => 'br',	'languageId' => 'br',	'languageName' => 'Breton'],
	// 	['ttsEngine' => 'bg',	'languageId' => 'bg',	'languageName' => 'Bulgarian'],
	// 	['ttsEngine' => 'km',	'languageId' => 'km',	'languageName' => 'Cambodian'],
	// 	['ttsEngine' => 'ca',	'languageId' => 'ca',	'languageName' => 'Catalan'],
	// 	['ttsEngine' => 'zh-CN','languageId' => 'zh-CN',	'languageName' => 'Chinese (Simplified)'],
	// 	['ttsEngine' => 'zh-TW','languageId' => 'zh-TW',	'languageName' => 'Chinese (Traditional)'],
	// 	['ttsEngine' => 'co',	'languageId' => 'co',	'languageName' => 'Corsican'],
	// 	['ttsEngine' => 'hr',	'languageId' => 'hr',	'languageName' => 'Croatian'],
	// 	['ttsEngine' => 'cs',	'languageId' => 'cs',	'languageName' => 'Czech'],
	// 	['ttsEngine' => 'da',	'languageId' => 'da',	'languageName' => 'Danish'],
	// 	['ttsEngine' => 'nl',	'languageId' => 'nl',	'languageName' => 'Dutch'],
	// 	['ttsEngine' => 'en',	'languageId' => 'en',	'languageName' => 'English'],
	// 	['ttsEngine' => 'eo',	'languageId' => 'eo',	'languageName' => 'Esperanto'],
	// 	['ttsEngine' => 'et',	'languageId' => 'et',	'languageName' => 'Estonian'],
	// 	['ttsEngine' => 'fo',	'languageId' => 'fo',	'languageName' => 'Faroese'],
	// 	['ttsEngine' => 'tl',	'languageId' => 'tl',	'languageName' => 'Filipino'],
	// 	['ttsEngine' => 'fi',	'languageId' => 'fi',	'languageName' => 'Finnish'],
	// 	['ttsEngine' => 'fr',	'languageId' => 'fr',	'languageName' => 'French'],
	// 	['ttsEngine' => 'fy',	'languageId' => 'fy',	'languageName' => 'Frisian'],
	// 	['ttsEngine' => 'gl',	'languageId' => 'gl',	'languageName' => 'Galician'],
	// 	['ttsEngine' => 'ka',	'languageId' => 'ka',	'languageName' => 'Georgian'],
	// 	['ttsEngine' => 'de',	'languageId' => 'de',	'languageName' => 'German'],
	// 	['ttsEngine' => 'el',	'languageId' => 'el',	'languageName' => 'Greek'],
	// 	['ttsEngine' => 'gn',	'languageId' => 'gn',	'languageName' => 'Guarani'],
	// 	['ttsEngine' => 'gu',	'languageId' => 'gu',	'languageName' => 'Gujarati'],
	// 	['ttsEngine' => 'ha',	'languageId' => 'ha',	'languageName' => 'Hausa'],
	// 	['ttsEngine' => 'iw',	'languageId' => 'iw',	'languageName' => 'Hebrew'],
	// 	['ttsEngine' => 'hi',	'languageId' => 'hi',	'languageName' => 'Hindi'],
	// 	['ttsEngine' => 'hu',	'languageId' => 'hu',	'languageName' => 'Hungarian'],
	// 	['ttsEngine' => 'is',	'languageId' => 'is',	'languageName' => 'Icelandic'],
	// 	['ttsEngine' => 'id',	'languageId' => 'id',	'languageName' => 'Indonesian'],
	// 	['ttsEngine' => 'ia',	'languageId' => 'ia',	'languageName' => 'Interlingua'],
	// 	['ttsEngine' => 'ga',	'languageId' => 'ga',	'languageName' => 'Irish'],
	// 	['ttsEngine' => 'it',	'languageId' => 'it',	'languageName' => 'Italian'],
	// 	['ttsEngine' => 'ja',	'languageId' => 'ja',	'languageName' => 'Japanese'],
	// 	['ttsEngine' => 'jw',	'languageId' => 'jw',	'languageName' => 'Javanese'],
	// 	['ttsEngine' => 'kn',	'languageId' => 'kn',	'languageName' => 'Kannada'],
	// 	['ttsEngine' => 'kk',	'languageId' => 'kk',	'languageName' => 'Kazakh'],
	// 	['ttsEngine' => 'rw',	'languageId' => 'rw',	'languageName' => 'Kinyarwanda'],
	// 	['ttsEngine' => 'rn',	'languageId' => 'rn',	'languageName' => 'Kirundi'],
	// 	['ttsEngine' => 'ko',	'languageId' => 'ko',	'languageName' => 'Korean'],
	// 	['ttsEngine' => 'ku',	'languageId' => 'ku',	'languageName' => 'Kurdish'],
	// 	['ttsEngine' => 'ky',	'languageId' => 'ky',	'languageName' => 'Kyrgyz'],
	// 	['ttsEngine' => 'lo',	'languageId' => 'lo',	'languageName' => 'Laothian'],
	// 	['ttsEngine' => 'la',	'languageId' => 'la',	'languageName' => 'Latin'],
	// 	['ttsEngine' => 'lv',	'languageId' => 'lv',	'languageName' => 'Latvian'],
	// 	['ttsEngine' => 'ln',	'languageId' => 'ln',	'languageName' => 'Lingala'],
	// 	['ttsEngine' => 'lt',	'languageId' => 'lt',	'languageName' => 'Lithuanian'],
	// 	['ttsEngine' => 'mk',	'languageId' => 'mk',	'languageName' => 'Macedonian'],
	// 	['ttsEngine' => 'mg',	'languageId' => 'mg',	'languageName' => 'Malagasy'],
	// 	['ttsEngine' => 'ms',	'languageId' => 'ms',	'languageName' => 'Malay'],
	// 	['ttsEngine' => 'ml',	'languageId' => 'ml',	'languageName' => 'Malayalam'],
	// 	['ttsEngine' => 'mt',	'languageId' => 'mt',	'languageName' => 'Maltese'],
	// 	['ttsEngine' => 'mi',	'languageId' => 'mi',	'languageName' => 'Maori'],
	// 	['ttsEngine' => 'mr',	'languageId' => 'mr',	'languageName' => 'Marathi'],
	// 	['ttsEngine' => 'mo',	'languageId' => 'mo',	'languageName' => 'Moldavian'],
	// 	['ttsEngine' => 'mn',	'languageId' => 'mn',	'languageName' => 'Mongolian'],
	// 	['ttsEngine' => 'sr-ME','languageId' => 'sr-ME',	'languageName' => 'Montenegrin'],
	// 	['ttsEngine' => 'ne',	'languageId' => 'ne',	'languageName' => 'Nepali'],
	// 	['ttsEngine' => 'no',	'languageId' => 'no',	'languageName' => 'Norwegian'],
	// 	['ttsEngine' => 'nn',	'languageId' => 'nn',	'languageName' => 'Norwegian (Nynorsk)'],
	// 	['ttsEngine' => 'oc',	'languageId' => 'oc',	'languageName' => 'Occitan'],
	// 	['ttsEngine' => 'or',	'languageId' => 'or',	'languageName' => 'Oriya'],
	// 	['ttsEngine' => 'om',	'languageId' => 'om',	'languageName' => 'Oromo'],
	// 	['ttsEngine' => 'ps',	'languageId' => 'ps',	'languageName' => 'Pashto'],
	// 	['ttsEngine' => 'fa',	'languageId' => 'fa',	'languageName' => 'Persian'],
	// 	['ttsEngine' => 'pl',	'languageId' => 'pl',	'languageName' => 'Polish'],
	// 	['ttsEngine' => 'pt-BR','languageId' => 'pt-BR',	'languageName' => 'Portuguese (Brazil)'],
	// 	['ttsEngine' => 'pt-PT','languageId' => 'pt-PT',	'languageName' => 'Portuguese (Portugal)'],
	// 	['ttsEngine' => 'pa',	'languageId' => 'pa',	'languageName' => 'Punjabi'],
	// 	['ttsEngine' => 'qu',	'languageId' => 'qu',	'languageName' => 'Quechua'],
	// 	['ttsEngine' => 'ro',	'languageId' => 'ro',	'languageName' => 'Romanian'],
	// 	['ttsEngine' => 'rm',	'languageId' => 'rm',	'languageName' => 'Romansh'],
	// 	['ttsEngine' => 'ru',	'languageId' => 'ru',	'languageName' => 'Russian'],
	// 	['ttsEngine' => 'gd',	'languageId' => 'gd',	'languageName' => 'Scots Gaelic'],
	// 	['ttsEngine' => 'sr',	'languageId' => 'sr',	'languageName' => 'Serbian'],
	// 	['ttsEngine' => 'sh',	'languageId' => 'sh',	'languageName' => 'Serbo-Croatian'],
	// 	['ttsEngine' => 'st',	'languageId' => 'st',	'languageName' => 'Sesotho'],
	// 	['ttsEngine' => 'sn',	'languageId' => 'sn',	'languageName' => 'Shona'],
	// 	['ttsEngine' => 'sd',	'languageId' => 'sd',	'languageName' => 'Sindhi'],
	// 	['ttsEngine' => 'si',	'languageId' => 'si',	'languageName' => 'Sinhalese'],
	// 	['ttsEngine' => 'sk',	'languageId' => 'sk',	'languageName' => 'Slovak'],
	// 	['ttsEngine' => 'sl',	'languageId' => 'sl',	'languageName' => 'Slovenian'],
	// 	['ttsEngine' => 'so',	'languageId' => 'so',	'languageName' => 'Somali'],
	// 	['ttsEngine' => 'es',	'languageId' => 'es',	'languageName' => 'Spanish'],
	// 	['ttsEngine' => 'su',	'languageId' => 'su',	'languageName' => 'Sundanese'],
	// 	['ttsEngine' => 'sw',	'languageId' => 'sw',	'languageName' => 'Swahili'],
	// 	['ttsEngine' => 'sv',	'languageId' => 'sv',	'languageName' => 'Swedish'],
	// 	['ttsEngine' => 'tg',	'languageId' => 'tg',	'languageName' => 'Tajik'],
	// 	['ttsEngine' => 'ta',	'languageId' => 'ta',	'languageName' => 'Tamil'],
	// 	['ttsEngine' => 'tt',	'languageId' => 'tt',	'languageName' => 'Tatar'],
	// 	['ttsEngine' => 'te',	'languageId' => 'te',	'languageName' => 'Telugu'],
	// 	['ttsEngine' => 'th',	'languageId' => 'th',	'languageName' => 'Thai'],
	// 	['ttsEngine' => 'ti',	'languageId' => 'ti',	'languageName' => 'Tigrinya'],
	// 	['ttsEngine' => 'to',	'languageId' => 'to',	'languageName' => 'Tonga'],
	// 	['ttsEngine' => 'tr',	'languageId' => 'tr',	'languageName' => 'Turkish'],
	// 	['ttsEngine' => 'tk',	'languageId' => 'tk',	'languageName' => 'Turkmen'],
	// 	['ttsEngine' => 'tw',	'languageId' => 'tw',	'languageName' => 'Twi'],
	// 	['ttsEngine' => 'ug',	'languageId' => 'ug',	'languageName' => 'Uighur'],
	// 	['ttsEngine' => 'uk',	'languageId' => 'uk',	'languageName' => 'Ukrainian'],
	// 	['ttsEngine' => 'ur',	'languageId' => 'ur',	'languageName' => 'Urdu'],
	// 	['ttsEngine' => 'uz',	'languageId' => 'uz',	'languageName' => 'Uzbek'],
	// 	['ttsEngine' => 'vi',	'languageId' => 'vi',	'languageName' => 'Vietnamese'],
	// 	['ttsEngine' => 'cy',	'languageId' => 'cy',	'languageName' => 'Welsh'],
	// 	['ttsEngine' => 'xh',	'languageId' => 'xh',	'languageName' => 'Xhosa'],
	// 	['ttsEngine' => 'yi',	'languageId' => 'yi',	'languageName' => 'Yiddish'],
	// 	['ttsEngine' => 'yo',	'languageId' => 'yo',	'languageName' => 'Yoruba'],
	// 	['ttsEngine' => 'zu',	'languageId' => 'zu',	'languageName' => 'Zulu '],
	// ],
	// 'bing_codes' => [
	// 	['languageId' => "ca",			'ttsEngine' =>  "ca"],
	// 	['languageId' => "ca-es",		'ttsEngine' =>  "ca-es"		],
	// 	['languageId' => "da",			'ttsEngine' =>  "da"		],
	// 	['languageId' => "da-dk",		'ttsEngine' =>  "da-dk" 	],
	// 	['languageId' => "de",			'ttsEngine' =>  "de" 		],
	// 	['languageId' => "de-de",		'ttsEngine' =>  "de-de"		],
	// 	['languageId' => "en",			'ttsEngine' =>  "en"		],
	// 	['languageId' => "en-au",		'ttsEngine' =>  "en-au"		],
	// 	['languageId' => "en-ca",		'ttsEngine' =>  "en-ca"		],
	// 	['languageId' => "en-gb",		'ttsEngine' =>  "en-gb"		],
	// 	['languageId' => "en-in",		'ttsEngine' =>  "en-in"		],
	// 	['languageId' => "en-us",		'ttsEngine' =>  "en-us"		],
	// 	['languageId' => "es",			'ttsEngine' =>  "es"		],
	// 	['languageId' => "es-es",		'ttsEngine' =>  "es-es"		],
	// 	['languageId' => "es-mx",		'ttsEngine' =>  "es-mx"		],
	// 	['languageId' => "fi",			'ttsEngine' =>  "fi"		],
	// 	['languageId' => "fi-fi",		'ttsEngine' =>  "fi-fi"		],
	// 	['languageId' => "fr",			'ttsEngine' =>  "fr"		],
	// 	['languageId' => "fr-ca",		'ttsEngine' =>  "fr-ca"		],
	// 	['languageId' => "fr-fr",		'ttsEngine' =>  "fr-fr"		],
	// 	['languageId' => "it",			'ttsEngine' =>  "it"		],
	// 	['languageId' => "it-it",		'ttsEngine' =>  "it-it"		],
	// 	['languageId' => "ja",			'ttsEngine' =>  "ja"		],
	// 	['languageId' => "ja-jp",		'ttsEngine' =>  "ja-jp"		],
	// 	['languageId' => "ko",			'ttsEngine' =>  "ko"		],
	// 	['languageId' => "ko-kr",		'ttsEngine' =>  "ko-kr"		],
	// 	['languageId' => "nb-no",		'ttsEngine' =>  "nb-no"		],
	// 	['languageId' => "nl",			'ttsEngine' =>  "nl"		],
	// 	['languageId' => "nl-nl",		'ttsEngine' =>  "nl-nl"		],
	// 	['languageId' => "no",			'ttsEngine' =>  "no"		],
	// 	['languageId' => "pl",			'ttsEngine' =>  "pl"		],
	// 	['languageId' => "pl-pl",		'ttsEngine' =>  "pl-pl"		],
	// 	['languageId' => "pt",			'ttsEngine' =>  "pt"		],
	// 	['languageId' => "pt-br",		'ttsEngine' =>  "pt-br"		],
	// 	['languageId' => "pt-pt",		'ttsEngine' =>  "pt-pt"		],
	// 	['languageId' => "ru",			'ttsEngine' =>  "ru"		],
	// 	['languageId' => "ru-ru",		'ttsEngine' =>  "ru-ru"		],
	// 	['languageId' => "sv",			'ttsEngine' =>  "sv"		],
	// 	['languageId' => "sv-se",		'ttsEngine' =>  "sv-se"		],
	// 	['languageId' => "zh-chs",		'ttsEngine' =>  "zh-chs"	],
	// 	['languageId' => "zh-cht",		'ttsEngine' =>  "zh-cht"	],
	// 	['languageId' => "zh-cn",		'ttsEngine' =>  "zh-cn"		],
	// 	['languageId' => "zh-hk",		'ttsEngine' =>  "zh-hk"		],
	// 	['languageId' => "zh-tw",		'ttsEngine' =>  "zh-tw"		],
	// ]
];