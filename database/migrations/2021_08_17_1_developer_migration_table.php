<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeveloperMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('developers', function (Blueprint $table) {

        $table->increments('id');

    
        $table->string('first_name')->nullable();

    
        $table->string('last_name')->nullable();

    
        $table->string('phone_number')->nullable();

    
        $table->string('email')->nullable();

    
        $table->string('rate')->nullable();

    
        $table->string('about')->nullable();

    
        $table->text('profile_picture')->nullable();

    
        $table->string('portfolio_links')->nullable();

    
        $table->string('portfolio_images')->nullable();

    
        $table->string('skills')->nullable();

    



$table->timestamps();
$table->softDeletes();

        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('developers');
    }
}
