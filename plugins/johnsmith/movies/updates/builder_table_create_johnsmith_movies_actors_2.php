<?php namespace JohnSmith\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJohnsmithMoviesActors2 extends Migration
{
    public function up()
    {
        Schema::create('johnsmith_movies_actors', function($table)
        {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('last_name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('johnsmith_movies_actors');
    }
}
