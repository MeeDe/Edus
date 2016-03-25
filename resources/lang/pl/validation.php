<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | following language lines contain default error messages used by
    | validator class. Some of these rules have multiple versions such
    | as size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute musi zostać zaakceptowany.',
    'active_url'           => ':attribute nie jest poprawnym linkiem.',
    'after'                => ':attribute musi być datą późniejszą niż :date.',
    'alpha'                => ':attribute może zawierać jedynie litery.',
    'alpha_dash'           => ':attribute może zawierać jedynie litery, liczby, i ukośniki.',
    'alpha_num'            => ':attribute może zawierać jedynie litery i liczby.',
    'array'                => ':attribute musi być tablicą.',
    'before'               => ':attribute musi być datą wcześniejszą niż :date.',
    'between'              => [
        'numeric' => ':attribute musi być pomiędzy :min a :max.',
        'file'    => ':attribute musi być pomiędzy :min a :max kilobajtami.',
        'string'  => ':attribute musi być pomiędzy :min a :max znakami.',
        'array'   => ':attribute musi mieć pomiędzy :min a :max elementami.',
    ],
    'boolean'              => ':attribute musi zawierać prawdę lub fałsz.',
    'confirmed'            => ':attribute pole potwierdzenia się nie zgadza.',
    'date'                 => ':attribute nie jest prawidłową datą.',
    'date_format'          => ':attribute nie pokrywa się z formatem: :format.',
    'different'            => ':attribute musi być inne niż :other.',
    'digits'               => ':attribute musi mieć :digits cyfr.',
    'digits_between'       => ':attribute musi być pomiędzy :min a :max cyframi.',
    'email'                => ':attribute musi być poprawnym adresem email.',
    'exists'               => 'wybrany :attribute jest nieprawidłowy.',
    'filled'               => ':attribute jest wymagany.',
    'image'                => ':attribute musi być obrazem.',
    'in'                   => 'wybrany :attribute jest nieprawidłowy.',
    'integer'              => ':attribute musi być typu integer.',
    'ip'                   => ':attribute musi być poprawnym adresem IP.',
    'json'                 => ':attribute musi być poprawnym stringiem JSON.',
    'max'                  => [
        'numeric' => ':attribute nie może być większe niż :max.',
        'file'    => ':attribute nie może być większe niż :max kilobajtów.',
        'string'  => ':attribute nie może być większe niż :max znaków.',
        'array'   => ':attribute nie może mieć więcej niż :max elementów.',
    ],
    'mimes'                => ':attribute musi być plikiem typu: :values.',
    'min'                  => [
        'numeric' => ':attribute musi być przynajmniej :min.',
        'file'    => ':attribute musi być przynajmniej :min kilobajtów.',
        'string'  => ':attribute musi być przynajmniej :min znaków.',
        'array'   => ':attribute musi mieć przynajmniej :min elementów.',
    ],
    'not_in'               => 'wybrany :attribute jest nieprawidłowy.',
    'numeric'              => ':attribute musi być numeryczny.',
    'regex'                => ':attribute format nieprawidłowy.',
    'required'             => ':attribute jest wymagany.',
    'required_if'          => ':attribute jest wymagany kiedy :other wynosi :value.',
    'required_unless'      => ':attribute jest wymagany, chyba że :other znajduje się w :values.',
    'required_with'        => ':attribute jest wymagany kiedy :values jest obecna.',
    'required_with_all'    => ':attribute jest wymagany kiedy :values jest obecna.',
    'required_without'     => ':attribute jest wymagany kiedy :values nie jest obecna.',
    'required_without_all' => ':attribute jest wymagany kiedy każda z :values nie jest obecna.',
    'same'                 => ':attribute i :other muszą być identyczne.',
    'size'                 => [
        'numeric' => ':attribute musi wynosić :size.',
        'file'    => ':attribute musi wynosić :size kilobajtów.',
        'string'  => ':attribute musi wynosić :size znaków.',
        'array'   => ':attribute musi zawierać :size elementów.',
    ],
    'string'               => ':attribute musi być tekstem.',
    'timezone'             => ':attribute musi być poprawną strefą czasową.',
    'unique'               => ':attribute nie jest unikalny.',
    'url'                  => ':attribute nie jest prawidłowy.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    'input_error'   => 'Niepoprawne dane',

];
