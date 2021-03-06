<?php namespace EEV\CorpCore\Models;

use Illuminate\Support\Facades\Lang;
use Model;

/**
 * Model
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'eev_corpcore_contacts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function getTypeOptions()
    {
        return ContactType::get();
    }

    public function getTypeNameAttribute()
    {
        if (isset(ContactType::get()[$this->type])) {
            return trans(ContactType::get()[$this->type]);
        }
        return $this->type;
    }
}
