<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminCompaniesMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('admin_companies', function (Blueprint $table) {

        $table->increments('id');

    
        $table->string('company_name')->nullable();

    
        $table->string('company_email')->nullable();

    
        $table->longText('company_details')->nullable();

    



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

        Schema::dropIfExists('admin_companies');
    }
}
