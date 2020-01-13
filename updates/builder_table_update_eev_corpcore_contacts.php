<?php namespace EEV\CorpCore\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEevCorpcoreContacts extends Migration
{
    public function up()
    {
        Schema::table('eev_corpcore_contacts', function($table)
        {
            $table->string('title', 1024)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('eev_corpcore_contacts', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
