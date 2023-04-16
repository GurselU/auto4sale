<?php

return [
    /*
|--------------------------------------------------------------------------
| Lignes de validation de la langue
|--------------------------------------------------------------------------
|
| Les lignes de langue suivantes contiennent les messages d'erreur par défaut
| utilisé par la classe de validateur. Certaines de ces règles ont plusieurs versions
| comme les règles de taille. N'hésitez pas à ajuster chacun de ces messages ici.
|
*/

    'accepted' => 'Le :attribute doit être accepté.',
    'accepted_if' => 'Le :attribute doit être accepté lorsque :other est :value.',
    'active_url' => 'Le :attribute n\'est pas une URL valide.',
    'after' => 'Le :attribute doit être une date après :date.',
    'after_or_equal' => 'Le :attribute doit être une date après ou égale à :date.',
    'alpha' => 'Le :attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'Le :attribute ne doit contenir que des lettres, des nombres, des tirets et des tirets bas.',
    'alpha_num' => 'Le :attribute ne doit contenir que des lettres et des nombres.',
    'array' => 'Le :attribute doit être un tableau.',
    'ascii' => 'Le :attribute ne doit contenir que des caractères alphanumériques et des symboles à octet unique.',
    'before' => 'Le :attribute doit être une date avant :date.',
    'before_or_equal' => 'Le :attribute doit être une date avant ou égale à :date.',
    'between' => [
        'array' => 'Le :attribute doit avoir entre :min et :max articles.',
        'file' => 'Le :attribute doit être entre :min et :max kilo-octets.',
        'numeric' => 'Le :attribute doit être compris entre :min et :max.',
        'string' => 'Le :attribute doit être compris entre :min et :max caractères.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Le :attribute n\'est pas une date valide.',
    'date_equals' => 'Le :attribute doit être une date égale à :date.',
    'date_format' => 'Le :attribute ne correspond pas au format :format.',
    'decimal' => 'Le :attribute doit avoir :decimal décimales.',
    'declined' => 'Le :attribute doit être refusé.',
    'declined_if' => ':attribute doit être décliné lorsque :other est :value.',
    'different' => ':attribute et :other doivent être différents.',
    'digits' => ':attribute doit comporter :digits chiffres.',
    'digits_between' => ':attribute doit comporter entre :min et :max chiffres.',
    'dimensions' => 'Les dimensions de l\'image :attribute sont incorrectes . ',
    'distinct' => 'Le champ :attribute a une valeur en double . ',
    'doesnt_end_with' => ':attribute ne peut pas se terminer par l\'un des éléments suivants : :values.',
    'doesnt_start_with' => ':attribute ne peut pas commencer par l\'un des éléments suivants : :values . ',
    'email' => ':attribute doit être une adresse email valide . ',
    'ends_with' => ':attribute doit se terminer par l\'un des éléments suivants : :values.',
    'enum' => 'La valeur sélectionnée pour :attribute n\'est pas valide . ',
    'exists' => 'La valeur sélectionnée pour :attribute n\'est pas valide.',
    'file' => ':attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'array' => ':attribute doit comporter plus de :value éléments.',
        'file' => ':attribute doit être supérieur à :value kilo-octets.',
        'numeric' => ':attribute doit être supérieur à :value.',
        'string' => ':attribute doit comporter plus de :value caractères.',
    ],
    'gte' => [
        'array' => ':attribute doit comporter au moins :value éléments.',
        'file' => ':attribute doit être supérieur ou égal à :value kilo-octets.',
        'numeric' => ':attribute doit être supérieur ou égal à :value.',
        'string' => ':attribute doit comporter au moins :value caractères.',
    ],
    'image' => ':attribute doit être une image.',
    'in' => 'La valeur sélectionnée pour :attribute n\'est pas valide . ',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => ':attribute doit être un entier.',
    'ip' => ':attribute doit être une adresse IP valide.',
    'ipv4' => ':attribute doit être une adresse IPv4 valide.',
    'ipv6' => ':attribute doit être une adresse IPv6 valide.',
    'json' => 'L\'attribut :attribute doit être une chaîne JSON valide.',
    'lowercase' => 'L\'attribut :attribute doit être en minuscules.',
    'lt' => [
        'array' => 'L\'attribut :attribute doit avoir moins de :value éléments.',
        'file' => 'L\'attribut :attribute doit être inférieur à :value kilo-octets.',
        'numeric' => 'L\'attribut :attribute doit être inférieur à :value.',
        'string' => 'L\'attribut :attribute doit avoir moins de :value caractères.',
    ],
    'lte' => [
        'array' => 'L\'attribut :attribute ne doit pas avoir plus de :value éléments.',
        'file' => 'L\'attribut :attribute doit être inférieur ou égal à :value kilo-octets.',
        'numeric' => 'L\'attribut :attribute doit être inférieur ou égal à :value.',
        'string' => 'L\'attribut :attribute doit avoir au plus :value caractères.',
    ],
    'mac_address' => 'L\'attribut :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => 'L\'attribut :attribute ne doit pas avoir plus de :max éléments.',
        'file' => 'L\'attribut :attribute ne doit pas dépasser :max kilo-octets.',
        'numeric' => 'L\'attribut :attribute ne doit pas dépasser :max.',
        'string' => 'L\'attribut :attribute ne doit pas dépasser :max caractères.',
    ],
    'max_digits' => 'L\'attribut :attribute ne doit pas avoir plus de :max chiffres.',
    'mimes' => 'L\'attribut :attribute doit être un fichier de type :values.',
    'mimetypes' => 'L\'attribut :attribute doit être un fichier de type :values.',
    'min' => [
        'array' => 'L\'attribut :attribute doit avoir au moins :min éléments.',
        'file' => 'L\'attribut :attribute doit être d\'au moins :min kilo-octets.',
        'numeric' => 'L\'attribut :attribute doit être d\'au moins :min.',
        'string' => 'L\'attribut :attribute doit avoir au moins :min caractères.',
    ],
    'min_digits' => 'L\'attribut :attribute doit avoir au moins :min chiffres.',
    'multiple_of' => 'L\'attribut :attribute doit être un multiple de :value.',
    'not_in' => 'L\'attribut :attribute sélectionné n\'est pas valide.',
    'not_regex' => 'Le format de L\'attribut :attribute est invalide.',
    'numeric' => 'L\'attribut :attribute doit être un nombre.',
    'password' => [
        'letters' => 'L\'attribut :attribute doit contenir au moins une lettre.',
        'mixed' => 'L\'attribut :attribute doit contenir au moins une lettre majuscule et une lettre minuscule.',
        'numbers' => 'L\'attribut :attribute doit contenir au moins un nombre.',
        'symbols' => 'L\'attribut :attribute doit contenir au moins un symbole.',
        'uncompromised' => 'L\'attribut :attribute donné a été trouvé dans une fuite de données. Veuillez choisir un autre attribut :attribute.',
    ],
    'present' => 'Le champ d\'attribut :attribute doit être présent.',
    'prohibited' => 'Le champ d\'attribut :attribute est interdit.',
    'prohibited_if' => 'Le champ d\'attribut :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le champ d\'attribut :attribute est interdit à moins que :other soit dans :values.',
    'prohibits' => 'Le champ d\'attribut :attribute interdit la présence de :other.',
    'regex' => 'Le format de L\'attribut :attribute est invalide.',
    'required' => 'Le champ d\'attribut :attribute est requis.',
    'required_array_keys' => 'Le champ d\'attribut :attribute doit contenir des entrées pour: :values.',
    'required_if' => 'Le champ d\'attribut :attribute est requis lorsque :other est :value.',
    'required_if_accepted' => 'Le champ d\'attribut :attribute est requis lorsque :other est accepté.',
    'required_unless' => 'Le champ d\'attribut :attribute est requis à moins que :other soit dans :values.',
    'required_with' => 'Le champ d\'attribut :attribute est requis lorsque :values est présent.',
    'required_with_all' => 'Le champ d\'attribut :attribute est requis lorsque :values sont présents.',
    'required_without' => 'Le champ d\'attribut :attribute est requis lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ d\'attribut :attribute est requis lorsque aucun de :values n\'est présent.',
    'same' => 'L\'attribut :attribute et :other doivent correspondre.',
    'size' => [
        'array' => 'L\'attribut :attribute doit contenir :size éléments.',
        'file' => 'L\'attribut :attribute doit être de :size kilo-octets.',
        'numeric' => 'L\'attribut :attribute doit être :size.',
        'string' => 'L\'attribut :attribute doit être de :size caractères.',
    ],
    'starts_with' => 'Le champ :attribute doit débuter avec l\'un des éléments suivants : :values.',
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le champ :attribute doit être une zone horaire valide.',
    'unique' => 'Le champ :attribute est déjà pris.',
    'uploaded' => 'Le chargement du champ :attribute a échoué.',
    'uppercase' => 'Le champ :attribute doit être en majuscules.',
    'url' => 'Le champ :attribute doit être une URL valide.',
    'ulid' => 'Le champ :attribute doit être un ULID valide.',
    'uuid' => 'Le champ :attribute doit être un UUID valide.',

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
