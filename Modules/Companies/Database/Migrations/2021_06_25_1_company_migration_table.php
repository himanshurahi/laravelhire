<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('companies', function (Blueprint $table) {

        $table->increments('id');

    
        $table->string('name')->nullable();

    
        $table->nullableMorphs('owned_by');

    
        $table->string('employees')->nullable();

    
        $table->integer('company_type_id')->nullable();

    
        $table->integer('company_industry_id')->nullable();

    
        $table->integer('company_rating_id')->nullable();

        
        $table->string('street')->nullable();

    
        $table->string('city')->nullable();

    
        $table->string('state')->nullable();

    
        $table->string('country')->nullable();

    
        $table->string('zip_code')->nullable();

        
        $table->text('notes')->nullable();

    



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

        Schema::dropIfExists('companies');
    }
}
