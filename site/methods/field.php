<?php

return [
    'linebreaks' => function($field) {
        /* Add optional linkbreaks */
        $string = Str::replace($field->value(), '|-|', '&shy;');
        /* Add hard linebreaks */
        $string = Str::replace($string, '|.|', '<br>');
        return $string;
    },
    'clean' => function ($field) {
        return Str::replace(Str::replace($field->value(), '*|*', ''), '*-*', '');
    }
];
