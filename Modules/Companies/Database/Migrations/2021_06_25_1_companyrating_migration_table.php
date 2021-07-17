<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyRatingMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('companies_dict_rating', function (Blueprint $table) {

        $table->increments('id');

    
        $table->string('name')->nullable();

    



$table->timestamps();
$table->softDeletes();

        });

        $dictValues = [
            ['id' => 1, 'name' => 'acquired'],
            ['id' => 2, 'name' => 'active'],
            ['id' => 3, 'name' => 'market_failed'],
            ['id' => 4, 'name' => 'project_cancelled'],
            ['id' => 5, 'name' => 'shut_down'],
        ];

    DB::table('companies_dict_rating')->insert($dictValues);



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('companies_dict_rating');
    }
}
