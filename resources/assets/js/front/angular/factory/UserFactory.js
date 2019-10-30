angular.module('frontCallburnApp').factory('UserFactory',
     function (Restangular) {
          return {
               getLocaleDateString: function (LocalStorageKey,LanguageList) {
                    var formats = {
                         "ar-SA" : "d/m/y",
                         "bg-BG" : "d.n.Y",
                         "ca-ES" : "d/m/Y",
                         "zh-TW" : "Y/n/j",
                         "cs-CZ" : "j.n.Y",
                         "da-DK" : "d-m-Y",
                         "de-DE" : "d.m.Y",
                         "el-GR" : "j/n/Y",
                         "en-US" : "n/j/Y",
                         "fi-FI" : "j.n.Y",
                         "fr-FR" : "d/m/Y",
                         "he-IL" : "d/m/Y",
                         "hu-HU" : "Y. m. d.",
                         "is-IS" : "j.n.Y",
                         "it-IT" : "d/m/Y",
                         "ja-JP" : "Y/m/d",
                         "ko-KR" : "Y-m-d",
                         "nl-NL" : "j-n-Y",
                         "nb-NO" : "d.m.Y",
                         "pl-PL" : "Y-m-d",
                         "pt-BR" : "j/n/Y",
                         "ro-RO" : "d.m.Y",
                         "ru-RU" : "d.m.Y",
                         "hr-HR" : "j.n.Y",
                         "sk-SK" : "j. n. Y",
                         "sq-AL" : "Y-m-d",
                         "sv-SE" : "Y-m-d",
                         "th-TH" : "j/n/Y",
                         "tr-TR" : "d.m.Y",
                         "ur-PK" : "d/m/Y",
                         "id-ID" : "d/m/Y",
                         "uk-UA" : "d.m.Y",
                         "be-BY" : "d.m.Y",
                         "sl-SI" : "j.n.Y",
                         "et-EE" : "j.m.Y",
                         "lv-LV" : "Y.m.d.",
                         "lt-LT" : "Y.m.d",
                         "fa-IR" : "m/d/Y",
                         "vi-VN" : "d/m/Y",
                         "hy-AM" : "d.m.Y",
                         "az-Latn-AZ" : "d.m.Y",
                         "eu-ES" : "Y/m/d",
                         "mk-MK" : "d.m.Y",
                         "af-ZA" : "Y/m/d",
                         "ka-GE" : "d.m.Y",
                         "fo-FO" : "d-m-Y",
                         "hi-IN" : "d-m-Y",
                         "ms-MY" : "d/m/Y",
                         "kk-KZ" : "d.m.Y",
                         "ky-KG" : "d.m.y",
                         "sw-KE" : "n/j/Y",
                         "uz-Latn-UZ" : "d/m Y",
                         "tt-RU" : "d.m.Y",
                         "pa-IN" : "d-m-y",
                         "gu-IN" : "d-m-y",
                         "ta-IN" : "d-m-Y",
                         "te-IN" : "d-m-y",
                         "kn-IN" : "d-m-y",
                         "mr-IN" : "d-m-Y",
                         "sa-IN" : "d-m-Y",
                         "mn-MN" : "y.m.d",
                         "gl-ES" : "d/m/y",
                         "kok-IN" : "d-m-Y",
                         "syr-SY" : "d/m/Y",
                         "dv-MV" : "d/m/y",
                         "ar-IQ" : "d/m/Y",
                         "zh-CN" : "Y/n/j",
                         "de-CH" : "d.m.Y",
                         "en-GB" : "d/m/Y",
                         "es-MX" : "d/m/Y",
                         "fr-BE" : "j/m/Y",
                         "it-CH" : "d.m.Y",
                         "nl-BE" : "j/m/Y",
                         "nn-NO" : "d.m.Y",
                         "pt-PT" : "d-m-Y",
                         "sr-Latn-CS" : "j.n.Y",
                         "sv-FI" : "j.n.Y",
                         "az-Cyrl-AZ" : "d.m.Y",
                         "ms-BN" : "d/m/Y",
                         "uz-Cyrl-UZ" : "d.m.Y",
                         "ar-EG" : "d/m/Y",
                         "zh-HK" : "j/n/Y",
                         "de-AT" : "d.m.Y",
                         "en-AU" : "j/m/Y",
                         "es-ES" : "d/m/Y",
                         "fr-CA" : "Y-m-d",
                         "sr-Cyrl-CS" : "j.n.Y",
                         "ar-LY" : "d/m/Y",
                         "zh-SG" : "j/n/Y",
                         "de-LU" : "d.m.Y",
                         "en-CA" : "d/m/Y",
                         "es-GT" : "d/m/Y",
                         "fr-CH" : "d.m.Y",
                         "ar-DZ" : "d-m-Y",
                         "zh-MO" : "j/n/Y",
                         "de-LI" : "d.m.Y",
                         "en-NZ" : "j/m/Y",
                         "es-CR" : "d/m/Y",
                         "fr-LU" : "d/m/Y",
                         "ar-MA" : "d-m-Y",
                         "en-IE" : "d/m/Y",
                         "es-PA" : "m/d/Y",
                         "fr-MC" : "d/m/Y",
                         "ar-TN" : "d-m-Y",
                         "en-ZA" : "Y/m/d",
                         "es-DO" : "d/m/Y",
                         "ar-OM" : "d/m/Y",
                         "en-JM" : "d/m/Y",
                         "es-VE" : "d/m/Y",
                         "ar-YE" : "d/m/Y",
                         "en-029" : "m/d/Y",
                         "es-CO" : "d/m/Y",
                         "ar-SY" : "d/m/Y",
                         "en-BZ" : "d/m/Y",
                         "es-PE" : "d/m/Y",
                         "ar-JO" : "d/m/Y",
                         "en-TT" : "d/m/Y",
                         "es-AR" : "d/m/Y",
                         "ar-LB" : "d/m/Y",
                         "en-ZW" : "n/j/Y",
                         "es-EC" : "d/m/Y",
                         "ar-KW" : "d/m/Y",
                         "en-PH" : "n/j/Y",
                         "es-CL" : "d-m-Y",
                         "ar-AE" : "d/m/Y",
                         "es-UY" : "d/m/Y",
                         "ar-BH" : "d/m/Y",
                         "es-PY" : "d/m/Y",
                         "ar-QA" : "d/m/Y",
                         "es-BO" : "d/m/Y",
                         "es-SV" : "d/m/Y",
                         "es-HN" : "d/m/Y",
                         "es-NI" : "d/m/Y",
                         "es-PR" : "d/m/Y",
                         "am-ET" : "j/n/Y",
                         "tzm-Latn-DZ" : "d-m-Y",
                         "iu-Latn-CA" : "j/m/Y",
                         "sma-NO" : "d.m.Y",
                         "mn-Mong-CN" : "Y/n/j",
                         "gd-GB" : "d/m/Y",
                         "en-MY" : "j/n/Y",
                         "prs-AF" : "d/m/y",
                         "bn-BD" : "d-m-y",
                         "wo-SN" : "d/m/Y",
                         "rw-RW" : "n/j/Y",
                         "qut-GT" : "d/m/Y",
                         "sah-RU" : "m.d.Y",
                         "gsw-FR" : "d/m/Y",
                         "co-FR" : "d/m/Y",
                         "oc-FR" : "d/m/Y",
                         "mi-NZ" : "d/m/Y",
                         "ga-IE" : "d/m/Y",
                         "se-SE" : "Y-m-d",
                         "br-FR" : "d/m/Y",
                         "smn-FI" : "j.n.Y",
                         "moh-CA" : "n/j/Y",
                         "arn-CL" : "d-m-Y",
                         "ii-CN" : "Y/n/j",
                         "dsb-DE" : "j. n. Y",
                         "ig-NG" : "j/n/Y",
                         "kl-GL" : "d-m-Y",
                         "lb-LU" : "d/m/Y",
                         "ba-RU" : "d.m.y",
                         "nso-ZA" : "Y/m/d",
                         "quz-BO" : "d/m/Y",
                         "yo-NG" : "j/n/Y",
                         "ha-Latn-NG" : "j/n/Y",
                         "fil-PH" : "n/j/Y",
                         "ps-AF" : "d/m/y",
                         "fy-NL" : "j-n-Y",
                         "ne-NP" : "n/j/Y",
                         "se-NO" : "d.m.Y",
                         "iu-Cans-CA" : "j/n/Y",
                         "sr-Latn-RS" : "j.n.Y",
                         "si-LK" : "Y-m-d",
                         "sr-Cyrl-RS" : "j.n.Y",
                         "lo-LA" : "d/m/Y",
                         "km-KH" : "Y-m-d",
                         "cy-GB" : "d/m/Y",
                         "bo-CN" : "Y/n/j",
                         "sms-FI" : "j.n.Y",
                         "as-IN" : "d-m-Y",
                         "ml-IN" : "d-m-y",
                         "en-IN" : "d-m-Y",
                         "or-IN" : "d-m-y",
                         "bn-IN" : "d-m-y",
                         "tk-TM" : "d.m.y",
                         "bs-Latn-BA" : "j.n.Y",
                         "mt-MT" : "d/m/Y",
                         "sr-Cyrl-ME" : "j.n.Y",
                         "se-FI" : "j.n.Y",
                         "zu-ZA" : "Y/m/d",
                         "xh-ZA" : "Y/m/d",
                         "tn-ZA" : "Y/m/d",
                         "hsb-DE" : "j. n. Y",
                         "bs-Cyrl-BA" : "j.n.Y",
                         "tg-Cyrl-TJ" : "d.m.y",
                         "sr-Latn-BA" : "j.n.Y",
                         "smj-NO" : "d.m.Y",
                         "rm-CH" : "d/m/Y",
                         "smj-SE" : "Y-m-d",
                         "quz-EC" : "d/m/Y",
                         "quz-PE" : "d/m/Y",
                         "hr-BA" : "j.n.Y.",
                         "sr-Latn-ME" : "j.n.Y",
                         "sma-SE" : "Y-m-d",
                         "en-SG" : "j/n/Y",
                         "ug-CN" : "Y-n-j",
                         "sr-Cyrl-BA" : "j.n.Y",
                         "es-US" : "n/j/Y"
                    }
                    if (navigator.languages) {
                         return formats[navigator.languages[0]]
                    } else {
                         return formats[navigator.language]
                    // 'd/m/Y';
                    }
               }
          }
     }
);