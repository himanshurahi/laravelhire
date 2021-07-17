<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyIndustryMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('companies_dict_industry', function (Blueprint $table) {

        $table->increments('id');

    
        $table->string('name')->nullable();

    



$table->timestamps();
$table->softDeletes();

        });

        $dictValues = [
            ['id' => 1, 'name' => 'communications'],
            ['id' => 2, 'name' => 'technology'],
            ['id' => 3, 'name' => 'manufacturing'],
        ];

    DB::table('companies_dict_industry')->insert($dictValues);



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('companies_dict_industry');
    }
}
