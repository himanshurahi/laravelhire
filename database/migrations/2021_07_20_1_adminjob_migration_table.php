<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminJobMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('jobs', function (Blueprint $table) {

        $table->increments('id');

    
        $table->string('job_title')->nullable();

    
        $table->string('job_description')->nullable();

    
        $table->string('skills')->nullable();

    
        $table->integer('job_duration')->nullable();

    
        $table->string('budget')->nullable();

    
        $table->text('social_links')->nullable();

    



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

        Schema::dropIfExists('jobs');
    }
}
