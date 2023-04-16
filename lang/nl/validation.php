<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validatie Taalregels
    |--------------------------------------------------------------------------
    |
    | De volgende taalregels bevatten de standaard foutmeldingen die worden gebruikt door
    | de validatieklasse. Sommige van deze regels hebben meerdere versies,
    | zoals de grootteregels. Voel je vrij om elk van deze berichten hier aan te passen.
    |
    */

    'accepted' => ':attribute moet worden geaccepteerd.',
    'accepted_if' => ':attribute moet worden geaccepteerd wanneer :other is :value.',
    'active_url' => ':attribute is geen geldige URL.',
    'after' => ':attribute moet een datum zijn na :date.',
    'after_or_equal' => ':attribute moet een datum zijn na of gelijk aan :date.',
    'alpha' => ':attribute mag alleen letters bevatten.',
    'alpha_dash' => ':attribute mag alleen letters, cijfers, streepjes en underscores bevatten.',
    'alpha_num' => ':attribute mag alleen letters en cijfers bevatten.',
    'array' => ':attribute moet een array zijn.',
    'ascii' => ':attribute mag alleen enkele-byte alfanumerieke tekens en symbolen bevatten.',
    'before' => ':attribute moet een datum zijn voor :date.',
    'before_or_equal' => ':attribute moet een datum zijn voor of gelijk aan :date.',
    'between' => [
        'array' => ':attribute moet tussen :min en :max items hebben.',
        'file' => ':attribute moet tussen :min en :max kilobytes zijn.',
        'numeric' => ':attribute moet tussen :min en :max zijn.',
        'string' => ':attribute moet tussen :min en :max tekens zijn.',
    ],
    'boolean' => ':attribute veld moet waar of onwaar zijn.',
    'confirmed' => ':attribute bevestiging komt niet overeen.',
    'current_password' => 'Het wachtwoord is incorrect.',
    'date' => ':attribute is geen geldige datum.',
    'date_equals' => ':attribute moet een datum zijn gelijk aan :date.',
    'date_format' => ':attribute komt niet overeen met het formaat :format.',
    'decimal' => ':attribute moet :decimal decimalen hebben.',
    'declined' => ':attribute moet worden afgewezen.',
    'declined_if' => ':attribute moet worden afgewezen wanneer :other is :value.',
    'different' => ':attribute en :other moeten verschillend zijn.',
    'digits' => ':attribute moet :digits cijfers bevatten.',
    'digits_between' => ':attribute moet tussen :min en :max cijfers bevatten.',
    'dimensions' => ':attribute heeft ongeldige afbeeldingsdimensies.',
    'distinct' => 'Het :attribute veld heeft een duplicaat waarde.',
    'doesnt_end_with' => ':attribute mag niet eindigen met één van de volgende waarden: :values.',
    'doesnt_start_with' => ':attribute mag niet beginnen met één van de volgende waarden: :values.',
    'email' => ':attribute moet een geldig e-mailadres zijn.',
    'ends_with' => ':attribute moet eindigen met één van de volgende waarden: :values.',
    'enum' => 'De geselecteerde :attribute is ongeldig.',
    'exists' => 'De geselecteerde :attribute is ongeldig.',
    'file' => ':attribute moet een bestand zijn.',
    'filled' => 'Het :attribute veld moet een waarde bevatten.',
    'gt' => [
        'array' => 'Het :attribute moet meer dan :value items hebben.',
        'file' => 'Het :attribute moet groter zijn dan :value kilobytes.',
        'numeric' => 'Het :attribute moet groter zijn dan :value.',
        'string' => 'Het :attribute moet groter zijn dan :value tekens.',
    ],
    'gte' => [
        'array' => 'De :attribute moet meer dan :value items hebben.',
        'file' => 'Het :attribute moet groter zijn dan of gelijk zijn aan :value kilobytes.',
        'numeric' => 'Het :attribute moet groter zijn dan of gelijk zijn aan :value.',
        'string' => 'De :attribute moet meer dan of gelijk zijn aan :value karakters.',
    ],
    'image' => 'De :attribute moet een afbeelding zijn.',
    'in' => 'De geselecteerde :attribute is ongeldig.',
    'in_array' => 'Het :attribute-veld bestaat niet in :other.',
    'integer' => 'Het :attribute moet een geheel getal zijn.',
    'ip' => 'Het :attribute moet een geldig IP-adres zijn.',
    'ipv4' => 'Het :attribute moet een geldig IPv4-adres zijn.',
    'ipv6' => 'Het :attribute moet een geldig IPv6-adres zijn.',
    'json' => 'Het :attribute moet een geldige JSON-string zijn.',
    'lowercase' => 'De :attribute moet kleine letters bevatten.',
    'lt' => [
        'array' => 'De :attribute moet minder dan :value items hebben.',
        'file' => 'Het :attribute moet kleiner zijn dan :value kilobytes.',
        'numeric' => 'Het :attribute moet kleiner zijn dan :value.',
        'string' => 'De :attribute moet minder zijn dan :value karakters.',
    ],
    'lte' => [
        'array' => 'De :attribute mag niet meer dan :value items hebben.',
        'file' => 'Het :attribute moet kleiner zijn dan of gelijk zijn aan :value kilobytes.',
        'numeric' => 'Het :attribute moet kleiner zijn dan of gelijk zijn aan :value.',
        'string' => 'De :attribute moet kleiner zijn dan of gelijk zijn aan :value karakters.',
    ],
    'mac_address' => 'Het :attribute moet een geldig MAC-adres zijn.',
    'max' => [
        'array' => 'Het :attribute mag niet meer dan :max items bevatten.',
        'file' => 'Het :attribute mag niet groter zijn dan :max kilobytes.',
        'numeric' => 'Het :attribute mag niet groter zijn dan :max.',
        'string' => 'Het :attribute mag niet meer dan :max tekens bevatten.',
    ],
    'max_digits' => 'Het :attribute mag niet meer dan :max cijfers bevatten.',
    'mimes' => 'Het :attribute moet een bestand van het type :values zijn.',
    'mimetypes' => 'Het :attribute moet een bestand van het type :values zijn.',
    'min' => [
        'array' => 'Het :attribute moet ten minste :min items bevatten.',
        'file' => 'Het :attribute moet ten minste :min kilobytes zijn.',
        'numeric' => 'Het :attribute moet ten minste :min zijn.',
        'string' => 'Het :attribute moet ten minste :min tekens bevatten.',
    ],
    'min_digits' => 'Het :attribute moet ten minste :min cijfers bevatten.',
    'multiple_of' => 'Het :attribute moet een veelvoud zijn van :value.',
    'not_in' => 'De geselecteerde :attribute is ongeldig.',
    'not_regex' => 'Het formaat van :attribute is ongeldig.',
    'numeric' => 'Het :attribute moet een getal zijn.',
    'password' => [
        'letters' => 'Het :attribute moet ten minste één letter bevatten.',
        'mixed' => 'Het :attribute moet ten minste één hoofdletter en één kleine letter bevatten.',
        'numbers' => 'Het :attribute moet ten minste één cijfer bevatten.',
        'symbols' => 'Het :attribute moet ten minste één symbool bevatten.',
        'uncompromised' => 'Het gegeven :attribute is in een data-lek verschenen. Kies een ander :attribute.',
    ],
    'present' => 'Het :attribute veld moet aanwezig zijn.',
    'prohibited' => 'Het :attribute veld is verboden.',
    'prohibited_if' => 'Het :attribute veld is verboden wanneer :other is :value.',
    'prohibited_unless' => 'Het :attribute veld is verboden tenzij :other zich in :values bevindt.',
    'prohibits' => 'Het :attribute veld verbiedt dat :other aanwezig is.',
    'regex' => 'Het :attribute formaat is ongeldig.',
    'required' => 'Het :attribute veld is verplicht.',
    'required_array_keys' => 'Het :attribute veld moet vermeldingen bevatten voor: :values.',
    'required_if' => 'Het :attribute veld is verplicht wanneer :other is :value.',
    'required_if_accepted' => 'Het :attribute veld is verplicht wanneer :other is geaccepteerd.',
    'required_unless' => 'Het :attribute veld is verplicht tenzij :other zich in :values bevindt.',
    'required_with' => 'Het :attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all' => 'Het :attribute veld is verplicht wanneer :values aanwezig zijn.',
    'required_without' => 'Het :attribute veld is verplicht wanneer :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute veld is verplicht wanneer geen enkele :values aanwezig zijn.',
    'same' => 'Het :attribute en :other moeten overeenkomen.',
    'size' => [
        'array' => 'Het :attribute moet :size items bevatten.',
        'file' => 'Het :attribute moet :size kilobytes zijn.',
        'numeric' => 'Het :attribute moet :size zijn.',
        'string' => 'Het :attribute moet :size tekens bevatten.',
    ],
    'starts_with' => 'Het :attribute moet beginnen met één van de volgende: :values.',
    'string' => 'Het :attribute moet een tekenreeks zijn.',
    'timezone' => 'Het :attribute moet een geldige tijdzone zijn.',
    'unique' => 'Het :attribute is al in gebruik.',
    'uploaded' => 'Het :attribute is mislukt bij het uploaden.',
    'uppercase' => 'Het :attribute moet hoofdletters bevatten.',
    'url' => 'Het :attribute moet een geldige URL zijn.',
    'ulid' => 'Het :attribute moet een geldige ULID zijn.',
    'uuid' => 'Het :attribute moet een geldige UUID zijn.',

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
