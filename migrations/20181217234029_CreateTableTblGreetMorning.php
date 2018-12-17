<?php

use Phpmig\Migration\Migration;

class CreateTableTblGreetMorning extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $c = $this->getContainer()['db'];

        $c::schema()->create('tbl_greet_morning', function ($table) {
            $table->increments('id');
            $table->string('greet');
            $table->timestamps();
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $c = $this->getContainer()['db'];

        $c::schema()->dropIfExists('tbl_greet_morning');
    }
}
