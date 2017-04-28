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

    'accepted'             => 'Der :attribute muss akzeptiert werden.',
    'active_url'           => 'Der :attribute ist keine gültige URL.',
    'after'                => 'Der :attribute muss ein Datum nach: date.',
    'alpha'                => 'Der :attribute kann nur Buchstaben enthalten.',
    'alpha_dash'           => 'Der :attribute darf nur Buchstaben, Zahlen und Bindestriche enthalten.',
    'alpha_num'            => 'Der :attribute darf nur Buchstaben und Ziffern enthalten.',
    'array'                => 'Der :attribute muss ein Array sein.',
    'before'               => 'Der :attribute muss ein Datum vor :date.',
    'between'              => [
        'numeric' => 'Der :attribute muss zwischen :min und :max sein',
        'file'    => 'Der :attribute muss zwischen :min and :max Kilobytes sein.',
        'string'  => 'Der :attribute muss zwischen :min and :max Zeichen sein.',
        'array'   => 'Der :attribute musste zwischen :min und :max Artikeln sein.',
    ],
    'boolean'              => 'Das :attribute Feld muss wahr oder falsch sein.',
    'confirmed'            => 'Die :attribute Bestätigung stimmt nicht.',
    'date'                 => 'Der :attribute ist kein gültiges Datum.',
    'date_format'          => 'Der :attribute stimmt nicht mit dem Format format: überein.',
    'different'            => 'Der :attribute und :other müssen unterschiedlich sein.',
    'digits'               => 'Der :attribute muss :digits Ziffern sein.',
    'digits_between'       => 'Der :attribute muss zwischen :min and :max Ziffern sein.',
    'dimensions'           => 'Der :attribute hat ungültiges Bild Abmessungen.',
    'distinct'             => 'Der :attribute Feld hat einen doppelten Wert',
    'email'                => 'Der :attribute muss eine gültige E-Mail-Adresse sein.',
    'exists'               => 'Der ausgewählten :attribute ist ungültig.',
    'file'                 => 'Der :attribute muss eine Datei sein.',
    'filled'               => 'Das :attribute Feld ist erforderlich.',
    'image'                => 'Der :attribute muss ein Bild sein.',
    'in'                   => 'Der ausgewählten :attribute ist ungültig.',
    'in_array'             => 'Das :attribute Feld ist nicht vorhanden in :other.',
    'integer'              => 'Der :attribute muss eine Ganzzahl sein.',
    'ip'                   => 'Der :attribute muss eine gültige IP-Adresse sein.',
    'json'                 => 'Der :attribute muss eine gültige JSON-Zeichenfolge sein.',
    'max'                  => [
        'numeric' => 'Der :attribute kann nicht grösser als :max sein.',
        'file'    => 'Der :attribute kann nicht grösser als :max Kilobytes sein.',
        'string'  => 'Der :attribute kann nicht grösser als :max Zeichen sein.',
        'array'   => 'Der :attribute darf nicht mehr als :max Artikeln haben.',
    ],
    'mimes'                => 'Der :attribute muss eine Datei des Typs: :values sein.',
    'mimetypes'            => 'Der :attribute muss eine Datei des Typs: :values sein.',
    'min'                  => [
        'numeric' => 'Der :attribute muss mindestens :min lang sein.',
        'file'    => 'Der :attribute muss mindestens :min Kilobytes haben.',
        'string'  => 'Der :attribute muss mindestens :min Zeichen haben.',
        'array'   => 'Der :attribute muss mindestens :min Artikilen haben.',
    ],
    'not_in'               => 'Der ausgewählten :attribute ist ungültig.',
    'numeric'              => 'Der :attribute muss ein Zahl sein.',
    'present'              => 'Das :attribute Feld kann nicht leer sein.',
    'regex'                => 'Der :attribute format is invalid.',
    'required'             => 'Das :attribute Feld ist erforderlich.',
    'required_if'          => 'Das :attribute Feld ist erforderlich falls :other ist :value.',
    'required_unless'      => 'Das :attribute Feld ist erforderlich nur wenn  :other in :values liegt.',
    'required_with'        => 'Das :attribute Feld ist erforderlich wenn :values nicht leer ist.',
    'required_with_all'    => 'Das :attribute Feld ist erforderlich wenn alle  :values nicht leer ist.',
    'required_without'     => 'Das :attribute Feld ist erforderlich wenn :values nicht leer ist.',
    'required_without_all' => 'Das :attribute Feld ist erforderlich wenn keine von diese Werten :values leer sind.',
    'same'                 => 'Das :attribute und :other müßen identisch sein.',
    'size'                 => [
        'numeric' => 'Der :attribute muss die Größe haben :size.',
        'file'    => 'Der :attribute muss mindestens :size Kilobytes sein.',
        'string'  => 'Der :attribute muss :size Zeichen haben.',
        'array'   => 'Der :attribute must :size Artiklen enthalten.',
    ],
    'string'               => 'Der :attribute muss eine Zeichenfolge sein.',
    'timezone'             => 'Der :attribute muss eine gültige Zone sein.',
    'unique'               => 'Der :attribute wird bereits verwendet.',
    'uploaded'             => 'Der :attribute konnte nicht hochgeladen werden.',
    'url'                  => 'Der :attribute Format ist ungültig.',

    'no_spaces'            => 'Der :attribute darf keine Leerzeichen enthalten.',
    'hash'                 => 'Das alte Kennzeichen ist mit dem neuen Kennzeichen nicht identisch.',
    'unique_slug_title'    => 'Dieses Thema ist mit vorhanden Themen identisch. Wählen Sie bitte einen anderen Titel.',
    'user_exists'          => 'Der @Benutzername den Sie eigegeben haben gibt es nicht.',
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
            'rule-name' => 'spezifisch-nachricht',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
