<?php

namespace EEV\CorpCore;

use EEV\CorpCore\Components\Contact;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function boot()
    {
        parent::boot();
    }

    public function registerComponents()
    {
        return [
            Contact::class => 'contact',
        ];
    }

}