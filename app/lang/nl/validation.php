<?php 

return array(

        /*
        |--------------------------------------------------------------------------
        | Dutch validation language file
        |--------------------------------------------------------------------------
        |
        */

        "accepted"       => ":attribute moet geaccepteerd zijn.",
        "active_url"     => ":attribute is geen geldig URL.",
        "after"          => ":attribute moet een datum na :date zijn.",
        "alpha"          => ":attribute mag alleen letters bevatten.",
        "alpha_dash"     => ":attribute mag alleen letters, nummers, onderstreep(_) en strepen(-) bevatten.",
        "alpha_num"      => ":attribute mag alleen letters en nummers",
        "array"            => "The :attribute must be an array.",
        "before"         => ":attribute moet een datum voor :date zijn.",
        "between"        => array(
                "numeric" => ":attribute moet tussen :min en :max zijn.",
                "file"    => ":attribute moet tussen :min en :max kilobytes zijn.",
                "string"  => ":attribute moet tussen :min en :max tekens zijn.",
                "array"   => "The :attribute must have between :min - :max items.",
        ),
        "confirmed"      => ":attribute bevestiging komt niet overeen.",
        "date"           => "The :attribute is not a valid date.",
        "date_format"    => "The :attribute does not match the format :format.",
        "different"      => ":attribute en :other moeten verschillend zijn.",
        "digits"           => "The :attribute must be :digits digits.",
        "digits_between"   => "The :attribute must be between :min and :max digits.",
        "email"          => ":attribute formaat is ongeldig.",
        "exists"         => "gekozen :attribute is al ingebruik.",
        "image"          => ":attribute moet een afbeelding zijn.",
        "in"             => "gekozen :attribute is ongeldig.",
        "integer"        => ":attribute moet een getal zijn.",
        "ip"             => ":attribute moet een geldig IP adres bevatten.",
        "match"          => ":attribute formaat is ongeldig.",
        "max"            => array(
                "numeric" => ":attribute moet minder dan :max zijn.",
                "file"    => ":attribute moet minder dan :max kilobytes zijn.",
                "string"  => ":attribute moet minder dan :max tekens zijn.",
                "array"   => "The :attribute may not have more than :max items.",
        ),
        "mimes"          => ":attribute moet een bestand zijn van het bestandstype :values.",
        "min"            => array(
                "numeric" => ":attribute moet minimaal :min zijn.",
                "file"    => ":attribute moet minimaal :min kilobytes zijn.",
                "string"  => ":attribute moet minimaal :min characters zijn.",
                "array"   => "The :attribute must have at least :min items.",
        ),
        "not_in"         => ":attribute formaat is ongeldig.",
        "numeric"        => ":attribute moet een nummer zijn.",
        "regex"            => "The :attribute format is invalid.",
        "required"       => ":attribute veld is verplicht.",
        "required_if"      => "The :attribute field is required when :other is :value.",
        "required_with"    => "The :attribute field is required when :values is present.",
        "required_without" => "The :attribute field is required when :values is not present.",
        "same"           => ":attribute en :other moeten overeenkomen.",
        "size"           => array(
                "numeric" => ":attribute moet :size zijn.",
                "file"    => ":attribute moet :size kilobyte zijn.",
                "string"  => ":attribute moet :size characters zijn.",
                "array"   => "The :attribute must contain :size items.",
        ),
        "unique"         => ":attribute is al in gebruik.",
        "url"            => ":attribute formaat is ongeldig.",

        /*
        |--------------------------------------------------------------------------
        | Custom Validation Language Lines
        |--------------------------------------------------------------------------
        |
        | Here you may specify custom validation messages for attributes using the
        | convention "attribute_rule" to name the lines. This helps keep your
        | custom validation clean and tidy.
        |
        | So, say you want to use a custom validation message when validating that
        | the "email" attribute is unique. Just add "email_unique" to this array
        | with your custom message. The Validator will handle the rest!
        |
        */

        'custom' => array(),

        /*
        |--------------------------------------------------------------------------
        | Validation Attributes
        |--------------------------------------------------------------------------
        |
        | The following language lines are used to swap attribute place-holders
        | with something more reader friendly such as "E-Mail Address" instead
        | of "email". Your users will thank you.
        |
        | The Validator class will automatically search this array of lines it
        | is attempting to replace the :attribute place-holder in messages.
        | It's pretty slick. We think you'll like it.
        |
        */

        'attributes' => array(),

);