<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameThreeLetterCodeToNameEgOnAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('airlines', function (Blueprint $table) {
           $table->renameColumn('three_letter_code', 'name_en' ); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('airlines', function (Blueprint $table) {
           $table->renameColumn('name_en', 'three_letter_code' ); 
        });
    }
}
