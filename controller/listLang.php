<?php
    class ListLangTable{
        static function tableLanguage(){
            $languages = [
                [
                    'lang'    => 'PHP',
                    'type'    => 'Interprété',
                    'version' => '8.1'
                ],
                [
                    'lang'    => 'JavaScript',
                    'type'    => 'Interprété',
                    'version' => 'ES2021'
                ],
                [
                    'lang'    => 'Python',
                    'type'    => 'Interprété',
                    'version' => '3.10'
                ],
                [
                    'lang'    => 'Java',
                    'type'    => 'Compilé (bytecode)',
                    'version' => '17'
                ],
                [
                    'lang'    => 'C++',
                    'type'    => 'Compilé',
                    'version' => 'C++20'
                ],
                [
                    'lang'    => 'XML',
                    'type'    => 'Non Compilé',
                    'version' => '2'
                ]
            ];
            return  $languages;
        }

    }

/* $newTable = new ListLangTable();
$languages = $newTable->tableLanguage(); */

$languages = ListLangTable::tableLanguage();
 
# print_r($languages);

# print_r(table)
