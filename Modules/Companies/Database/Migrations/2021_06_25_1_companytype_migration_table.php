<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyTypeMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('companies_dict_type', function (Blueprint $table) {

        $table->increments('id');

    
        $table->string('name')->nullable();

    



$table->timestamps();
$table->softDeletes();

        });

        $dictValues = [
            ['id' => 1, 'name' => 'small_company'],
            ['id' => 2, 'name' => 'medium_company'],
            ['id' => 3, 'name' => 'big_company'],
        ];

    DB::table('companies_dict_type')->insert($dictValues);



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('companies_dict_type');
    }
}
