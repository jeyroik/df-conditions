<?php

use deflou\components\langs\ELangs;
use deflou\interfaces\langs\phrases\IPhrase;
use deflou\interfaces\triggers\events\conditions\IConditionPlugin;
use deflou\interfaces\triggers\events\conditions\IConditionPluginTypical;
use extas\interfaces\parameters\IHaveParams;
use extas\interfaces\parameters\IParam;

return [
    'phrases' => [
        ////////////////////////// Строки ////////////////////////////////
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.empty',
            IPhrase::FIELD__VALUE => 'Пустая строка'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.empty',
            IPhrase::FIELD__VALUE => 'Пустая строка'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.equal_alphabet',
            IPhrase::FIELD__VALUE => '='
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.equal_alphabet',
            IPhrase::FIELD__VALUE => 'Равно, с учётом регистра'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.equal_length',
            IPhrase::FIELD__VALUE => 'длина ='
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.equal_length',
            IPhrase::FIELD__VALUE => 'В значении укажите любую строку, длина которой и будет сравниваться с длиной значения параметра'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.greater_alphabet',
            IPhrase::FIELD__VALUE => '>'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.greater_alphabet',
            IPhrase::FIELD__VALUE => 'Строка больше, если её буквы расположены дальше по алфавиту, например абв > аббревиатура'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.greater_length',
            IPhrase::FIELD__VALUE => 'длина >'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.greater_length',
            IPhrase::FIELD__VALUE => 'В значении укажите любую строку, длина которой и будет сравниваться с длиной значения параметра'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.greater_or_equal_alphabet',
            IPhrase::FIELD__VALUE => '>='
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.greater_or_equal_alphabet',
            IPhrase::FIELD__VALUE => 'Строка больше, если её буквы расположены дальше по алфавиту, например абв > аббревиатура'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.greater_or_equal_length',
            IPhrase::FIELD__VALUE => 'длина >='
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.greater_or_equal_length',
            IPhrase::FIELD__VALUE => 'В значении укажите любую строку, длина которой и будет сравниваться с длиной значения параметра'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.like',
            IPhrase::FIELD__VALUE => '~'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.like',
            IPhrase::FIELD__VALUE => 'Поиск подстроки (like)'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.lower_alphabet',
            IPhrase::FIELD__VALUE => '<'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.lower_alphabet',
            IPhrase::FIELD__VALUE => 'Строка меньше, если её буквы расположены раньше по алфавиту, например аба < абб'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.lower_length',
            IPhrase::FIELD__VALUE => 'длина <'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.lower_length',
            IPhrase::FIELD__VALUE => 'В значении укажите любую строку, длина которой и будет сравниваться с длиной значения параметра'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.lower_or_equal_alphabet',
            IPhrase::FIELD__VALUE => '<='
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.lower_or_equal_alphabet',
            IPhrase::FIELD__VALUE => 'Строка меньше, если её буквы расположены раньше по алфавиту, например аба < абб'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.lower_or_equal_length',
            IPhrase::FIELD__VALUE => 'длина <='
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.lower_or_equal_length',
            IPhrase::FIELD__VALUE => 'В значении укажите любую строку, длина которой и будет сравниваться с длиной значения параметра'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.not_empty',
            IPhrase::FIELD__VALUE => 'Не пусто'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.not_empty',
            IPhrase::FIELD__VALUE => 'Есть хоть какое-то строкове значение'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.not_equal_alphabet',
            IPhrase::FIELD__VALUE => '!='
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.not_equal_alphabet',
            IPhrase::FIELD__VALUE => 'Строка не равна'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.not_equal_length',
            IPhrase::FIELD__VALUE => 'длина !='
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.not_equal_length',
            IPhrase::FIELD__VALUE => 'В значении укажите любую строку, длина которой и будет сравниваться с длиной значения параметра'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.title.not_like',
            IPhrase::FIELD__VALUE => '!~'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'string.description.not_like',
            IPhrase::FIELD__VALUE => 'Отсутствует подстрока (not like)'
        ],
        ////////////////////////// Числа ////////////////////////////////
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.title.empty',
            IPhrase::FIELD__VALUE => '_'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.description.empty',
            IPhrase::FIELD__VALUE => 'Значение отсутствует'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.title.equal',
            IPhrase::FIELD__VALUE => '='
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.description.equal',
            IPhrase::FIELD__VALUE => 'Равно'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.title.greater',
            IPhrase::FIELD__VALUE => '>'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.description.greater',
            IPhrase::FIELD__VALUE => 'Больше'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.title.greater_or_equal',
            IPhrase::FIELD__VALUE => '>='
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.description.greater_or_equal',
            IPhrase::FIELD__VALUE => 'Больше или равно'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.title.like',
            IPhrase::FIELD__VALUE => '~'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.description.like',
            IPhrase::FIELD__VALUE => 'Число содержит'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.title.lower',
            IPhrase::FIELD__VALUE => '<'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.description.lower',
            IPhrase::FIELD__VALUE => 'Меньше'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.title.lower_or_equal',
            IPhrase::FIELD__VALUE => '<='
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.description.lower_or_equal',
            IPhrase::FIELD__VALUE => 'Меньше или равно'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.title.not_empty',
            IPhrase::FIELD__VALUE => 'Есть значение'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.description.not_empty',
            IPhrase::FIELD__VALUE => 'Значение присутствует (любое число, включая 0)'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.title.not_equal',
            IPhrase::FIELD__VALUE => '!='
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.description.not_equal',
            IPhrase::FIELD__VALUE => 'Не равно'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.title.not_like',
            IPhrase::FIELD__VALUE => '!~'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'number.description.not_like',
            IPhrase::FIELD__VALUE => 'Число не содержит'
        ],
        ////////////////////////// Списки ////////////////////////////////
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'list.title.in',
            IPhrase::FIELD__VALUE => 'из'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'list.description.in',
            IPhrase::FIELD__VALUE => 'Из списка значений'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'list.title.not_in',
            IPhrase::FIELD__VALUE => 'не из'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'list.description.not_in',
            IPhrase::FIELD__VALUE => 'Не из списка значений'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'list.title.like_on_in',
            IPhrase::FIELD__VALUE => '~ из'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'list.description.like_on_in',
            IPhrase::FIELD__VALUE => 'Содержится хотя бы в одном элементе списка'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'list.title.like_on_in',
            IPhrase::FIELD__VALUE => '!~ из'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'list.description.like_on_in',
            IPhrase::FIELD__VALUE => 'Не содержится ни в одном элементе списка'
        ],
        ////////////////////////// Регулярные выражения ////////////////////////////////
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'regex.title.regex',
            IPhrase::FIELD__VALUE => '#'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'regex.description.regex',
            IPhrase::FIELD__VALUE => 'Значение соответствует регулярному выражению'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'regex.title.not_regex',
            IPhrase::FIELD__VALUE => '!#'
        ],
        [
            IPhrase::FIELD__LANG => ELangs::Russian->value,
            IPhrase::FIELD__NAME => 'regex.description.not_regex',
            IPhrase::FIELD__VALUE => 'Значение не соответствует регулярному выражению'
        ],
    ],
    'trigger_event_condition_plugins' => [
        [
            IConditionPlugin::FIELD__NAME => 'regex',
            IConditionPlugin::FIELD__TITLE => 'Регулярные выражения',
            IConditionPlugin::FIELD__DESCRIPTION => 'Сравнение с использованием регулярных выражений',
            IConditionPlugin::FIELD__CLASS => '',
            IConditionPlugin::FIELD__PARAMS => [
                IConditionPluginTypical::PARAM__ITEMS => [
                    IParam::FIELD__NAME => IConditionPluginTypical::PARAM__ITEMS,
                    IParam::FIELD__VALUE => [
                        'regex', 'not_regex'
                    ]
                ]
            ]
        ],
        [
            IConditionPlugin::FIELD__NAME => 'list',
            IConditionPlugin::FIELD__TITLE => 'Списки',
            IConditionPlugin::FIELD__DESCRIPTION => 'Сравнение со списками значений',
            IConditionPlugin::FIELD__CLASS => '',
            IConditionPlugin::FIELD__PARAMS => [
                IConditionPluginTypical::PARAM__ITEMS => [
                    IParam::FIELD__NAME => IConditionPluginTypical::PARAM__ITEMS,
                    IParam::FIELD__VALUE => [
                        'in', 'like_on_in', 'not_in', 'not_like_one_in'
                    ]
                ]
            ]
        ],
        [
            IConditionPlugin::FIELD__NAME => 'number',
            IConditionPlugin::FIELD__TITLE => 'Числа',
            IConditionPlugin::FIELD__DESCRIPTION => 'Базовые условия для работы с числами',
            IConditionPlugin::FIELD__CLASS => '',
            IConditionPlugin::FIELD__PARAMS => [
                IConditionPluginTypical::PARAM__ITEMS => [
                    IParam::FIELD__NAME => IConditionPluginTypical::PARAM__ITEMS,
                    IParam::FIELD__VALUE => [
                        'empty', 'equal', 'greater', 'greater_or_equal', 'like',  'lower', 'lower_or_equal',
                        'not_empty', 'not_equal', 'not_like'
                    ]
                ]
            ]
        ],
        [
            IConditionPlugin::FIELD__NAME => 'string',
            IConditionPlugin::FIELD__TITLE => 'Строки',
            IConditionPlugin::FIELD__DESCRIPTION => 'Базовые условия для работы со строками',
            IConditionPlugin::FIELD__CLASS => '',
            IConditionPlugin::FIELD__PARAMS => [
                IConditionPluginTypical::PARAM__ITEMS => [
                    IParam::FIELD__NAME => IConditionPluginTypical::PARAM__ITEMS,
                    IParam::FIELD__VALUE => [
                        'empty', 'equal_alphabet', 'equal_length', 'greater_alphabet',
                        'greater_length', 'greater_or_equal_alphabet', 'greater_or_equal_length',
                        'like',  'lower_alphabet', 'lower_length', 'lower_or_equal_alphabet',
                        'lower_or_equal_length', 'not_empty', 'not_equal_alphabet',
                        'not_equal_length', 'not_like'
                    ]
                ]
            ]
        ]
    ]
];