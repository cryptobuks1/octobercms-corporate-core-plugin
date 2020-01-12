<?php

namespace EEV\CorpCore\Models;

class ContactType
{
    public static function get()
    {
        return [
            'none' => 'eev.corpcore::lang.not_defined',
            'phone' => 'eev.corpcore::lang.phone',
            'email' => 'eev.corpcore::lang.email',
        ];
    }
}