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

    'accepted'             => ':attribute должен быть принят',
    'active_url'           => ':attribute не является валидным URL',
    'after'                => ':attribute должна быть датой, следующей после :date.',
    'after_or_equal'       => ':attribute должна быть датой, равной или следующей за :date.',
    'alpha'                => ':attribute может содержать только буквы.',
    'alpha_dash'           => ':attribute может содержать только буквы, числа и подчеркивания.',
    'alpha_num'            => ':attribute может содержать только буквы и числа.',
    'array'                => ':attribute должен быть массивом.',
    'before'               => ':attribute должна быть датой, предшествующей :date.',
    'before_or_equal'      => ':attribute должна быть датой, равной или предшествующей :date.',
    'between'              => [
        'numeric' => ':attribute должен быть между :min и :max.',
        'file'    => ':attribute должен быть между :min и :max килобайт.',
        'string'  => ':attribute должен быть между :min и :max символов.',
        'array'   => ':attribute должен содержать :min и :max элементов.',
    ],
    'boolean'              => ':attribute поле должно быть либо истиной, либо ложью.',
    'confirmed'            => 'Подтверждение :attribute не совпадает с введенным ранее.',
    'date'                 => ':attribute невалидная дата.',
    'date_format'          => ':attribute не совпадает с форматом :format.',
    'different'            => ':attribute и :other должны отличаться.',
    'digits'               => ':attribute должен быть :digits цифрами.',
    'digits_between'       => ':attribute должен быть между :min и :max цифрами.',
    'dimensions'           => ':attribute имеет неверный размер изображения.',
    'distinct'             => ':attribute поле имеет дублирующееся значение.',
    'email'                => ':attribute должен быть валидным e-mail адресом.',
    'exists'               => 'Выбранный :attribute невалиден.',
    'file'                 => ':attribute должен быть файлом.',
    'filled'               => ':attribute поле ддолэжен быть больше чем.',
    'gt'                   => [
        'numeric' => ':attribute долэжен быть больше, чем :value.',
        'file'    => ':attribute долэжен быть больше, чем :value килобайт.',
        'string'  => ':attribute долэжен быть больше, чем :value символов.',
        'array'   => ':attribute должен иметь больше, чем :value элементов.',
    ],
    'gte'                  => [
        'numeric' => ':attribute должен быть больше или равен :value.',
        'file'    => ':attribute должен быть больше или равен :value килобайт.',
        'string'  => ':attribute должен быть больше или равен :value символам.',
        'array'   => ':attribute должен содержать :value элементов или больше.',
    ],
    'image'                => ':attribute должно быть изображением.',
    'in'                   => 'Выбранный :attribute невалиден.',
    'in_array'             => ':attribute поле не существует в :other.',
    'integer'              => ':attribute должен иметь тип integer.',
    'ip'                   => ':attribute должен быть валидным IP адресом.',
    'ipv4'                 => ':attribute должен быть валидным IPv4 адресом.',
    'ipv6'                 => ':attribute должен быть валидным IPv6 адресом.',
    'json'                 => ':attribute должен быть валидным JSON\'м.',
    'lt'                   => [
        'numeric' => ':attribute должен быть меньше, чем :value.',
        'file'    => ':attribute должен быть меньше, чем :value килобайт.',
        'string'  => ':attribute должен быть меньше, чем :value символов.',
        'array'   => ':attribute должен иметь меньше, чем :value элементов.',
    ],
    'lte'                  => [
        'numeric' => ':attribute должен быть меньше, или равен :value.',
        'file'    => ':attribute должен быть меньше, или равен :value килобайт.',
        'string'  => ':attribute должен быть меньше, или равен :value символам.',
        'array'   => ':attribute не должен содержать меньше, чем :value элементов.',
    ],
    'max'                  => [
        'numeric' => ':attribute не должен превышать максимальное значение в :max.',
        'file'    => ':attribute не должен превышать максимальное значение в :max килобайт.',
        'string'  => ':attribute не должен превышать максимальное значение в :max символов.',
        'array'   => ':attribute не должен превышать максимальное количество в :max элементов.',
    ],
    'mimes'                => ':attribute должен быть файлом типа: :values.',
    'mimetypes'            => ':attribute должен быть файлом типа: :values.',
    'min'                  => [
        'numeric' => ':attribute должен быть не меньше, чем :min.',
        'file'    => ':attribute должен быть не меньше, чем :min килобайт.',
        'string'  => ':attribute должен быть не меньше, чем :min символов.',
        'array'   => ':attribute должен содержать минимум :min элементов.',
    ],
    'not_in'               => 'Выбранный :attribute невалиден.',
    'not_regex'            => ':attribute имеет невалидный формат.',
    'numeric'              => ':attribute должен быть числом.',
    'present'              => ':attribute поле должно сущестовать.',
    'regex'                => ':attribute имеет невалидный формат.',
    'required'             => 'Поле :attribute обязательно.',
    'required_if'          => 'Поле :attribute обязательно, если :other - :value.',
    'required_unless'      => 'Поле :attribute обязательно, пока :other в :values.',
    'required_with'        => 'Поле :attribute обязательно, если :values существует.',
    'required_with_all'    => 'Поле :attribute обязательно, если :values существует.',
    'required_without'     => 'Поле :attribute обязательно, если :values не существует.',
    'required_without_all' => 'Поле :attribute обязательно, если ни одно of :values не существует.',
    'same'                 => ':attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => ':attribute должен быть :size.',
        'file'    => ':attribute должен быть :size килобайт.',
        'string'  => ':attribute должен быть :size символов.',
        'array'   => ':attribute должен содержать :size элементов.',
    ],
    'string'               => ':attribute должна быть строкой.',
    'timezone'             => ':attribute должен быть валидным часовым поясом.',
    'unique'               => ':attribute уже был использован.',
    'uploaded'             => ':attribute не может быть загружен.',
    'url'                  => ':attribute невалидный формат.',

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

    'custom' => [],

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

    'attributes' => [
        'code' => 'Код регистрации',
        'email' => 'E-mail',
        'video' => 'Видео',
        'videoSpeciality' => 'Специализация',
        'codes' => 'Количество кодов',
        'videoName' => 'Название видео',
        'password' => 'Пароль'
    ],

];
