<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute doit être accepté.',
    'accepted_if' => ':attribute doit être accepté lorsque :other vaut :value.',
    'active_url' => ':attribute n\'est pas une URL valide',
    'after' => ':attribute doit être une date après :date.',
    'after_or_equal' => ':attribute doit être une date postérieure ou égale à :date.',
    'alpha' => ':attribute ne doit contenir que des lettres.',
    'alpha_dash' => ':attribute ne doit contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num' => ':attribute ne doit contenir que des lettres et des chiffres.',
    'array' => ':attribute doit être un tableau.',
    'ascii' => ':attribute ne doit contenir que des caractères alphanumériques à un octet et des symboles.',
    'before' => ':attribute doit être une date avant :date.',
    'before_or_equal' => ':attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'array' => ':attribute doit avoir entre :min et :max éléments.',
        'file' => ':attribute doit être compris entre :min et :max kilo-octets.',
        'numeric' => ':attribute doit être compris entre :min et :max.',
        'string' => ':attribute doit être compris entre :min et :max caractères.',
    ],
    'boolean' => ':attribute champ doit être vrai ou faux.',
    'confirmed' => ':attribute confirmation ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => ':attribute Ce n\'est pas une date valide.',
    'date_equals' => ':attribute doit être une date égale à :date.',
    'date_format' => ':attribute ne correspond pas au format :format.',
    'decimal' => ':attribute doit avoir : décimales après la virgule.',
    'declined' => ':attribute doit être refusé.',
    'declined_if' => ':attribute doit être refusé lorsque :other vaut :value.',
    'different' => ':attribute et :other doit être différent.',
    'digits' => ':attribute doit être :chiffres chiffres.',
    'digits_between' => ':attribute doit être compris entre :min et :max chiffres.',
    'dimensions' => ':attribute a des dimensions d\'image non valides.',
    'distinct' => ':attribute champ a une valeur en double.',
    'doesnt_end_with' => ':attribute ne peut pas se terminer par l\'un des éléments suivants : :values.',
    'doesnt_start_with' => ':attribute ne doit pas commencer par l\'un des éléments suivants : :values.',
    'email' => ':attribute doit être une adresse e-mail valide.',
    'ends_with' => ':attribute doit se terminer par l\'un des éléments suivants : :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => ':attribute must be a file.',
    'filled' => ':attribute field must have a value.',
    'gt' => [
        'array' => ':attribute must have more than :value items.',
        'file' => ':attribute must be greater than :value kilobytes.',
        'numeric' => ':attribute must be greater than :value.',
        'string' => ':attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => ':attribute must have :value items or more.',
        'file' => ':attribute must be greater than or equal to :value kilobytes.',
        'numeric' => ':attribute must be greater than or equal to :value.',
        'string' => ':attribute must be greater than or equal to :value characters.',
    ],
    'image' => ':attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => ':attribute field does not exist in :other.',
    'integer' => ':attribute must be an integer.',
    'ip' => ':attribute must be a valid IP address.',
    'ipv4' => ':attribute must be a valid IPv4 address.',
    'ipv6' => ':attribute must be a valid IPv6 address.',
    'json' => ':attribute must be a valid JSON string.',
    'lowercase' => ':attribute must be lowercase.',
    'lt' => [
        'array' => ':attribute must have less than :value items.',
        'file' => ':attribute must be less than :value kilobytes.',
        'numeric' => ':attribute must be less than :value.',
        'string' => ':attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => ':attribute must not have more than :value items.',
        'file' => ':attribute must be less than or equal to :value kilobytes.',
        'numeric' => ':attribute must be less than or equal to :value.',
        'string' => ':attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => ':attribute must be a valid MAC address.',
    'max' => [
        'array' => ':attribute must not have more than :max items.',
        'file' => ':attribute must not be greater than :max kilobytes.',
        'numeric' => ':attribute must not be greater than :max.',
        'string' => ':attribute must not be greater than :max characters.',
    ],
    'max_digits' => ':attribute must not have more than :max digits.',
    'mimes' => ':attribute must be a file of type: :values.',
    'mimetypes' => ':attribute must be a file of type: :values.',
    'min' => [
        'array' => ':attribute must have at least :min items.',
        'file' => ':attribute must be at least :min kilobytes.',
        'numeric' => ':attribute must be at least :min.',
        'string' => ':attribute doit contenir au moins :min caractères',
    ],
    'min_digits' => ':attribute doit avoir au moins :min chiffres..',
    'multiple_of' => ':attribute doit être un multiple de :value',
    'not_in' => ':attribute sélectionné n\'est pas valide.',
    'not_regex' => ':attribute format is invalid.',
    'numeric' => ':attribute must be a number.',
    'password' => [
        'letters' => ':attribute must contain at least one letter.',
        'mixed' => ':attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => ':attribute must contain at least one number.',
        'symbols' => ':attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => ':attribute field must be present.',
    'prohibited' => ':attribute field is prohibited.',
    'prohibited_if' => ':attribute field is prohibited when :other is :value.',
    'prohibited_unless' => ':attribute field is prohibited unless :other is in :values.',
    'prohibits' => ':attribute field prohibits :other from being present.',
    'regex' => ':attribute format is invalid.',
    'required' => ':attribute field is required.',
    'required_array_keys' => ':attribute field must contain entries for: :values.',
    'required_if' => ':attribute field is required when :other is :value.',
    'required_if_accepted' => ':attribute field is required when :other is accepted.',
    'required_unless' => ':attribute field is required unless :other is in :values.',
    'required_with' => ':attribute field is required when :values is present.',
    'required_with_all' => ':attribute field is required when :values are present.',
    'required_without' => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same' => ':attribute and :other must match.',
    'size' => [
        'array' => ':attribute must contain :size items.',
        'file' => ':attribute must be :size kilobytes.',
        'numeric' => ':attribute must be :size.',
        'string' => ':attribute must be :size characters.',
    ],
    'starts_with' => ':attribute must start with one of the following: :values.',
    'string' => ':attribute must be a string.',
    'timezone' => ':attribute must be a valid timezone.',
    'unique' => ':attribute has already been taken.',
    'uploaded' => ':attribute failed to upload.',
    'uppercase' => ':attribute must be uppercase.',
    'url' => ':attribute must be a valid URL.',
    'ulid' => ':attribute must be a valid ULID.',
    'uuid' => ':attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
