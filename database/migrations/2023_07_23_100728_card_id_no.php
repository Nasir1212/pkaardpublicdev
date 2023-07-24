<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_card_no', function (Blueprint $table) {

        $table->id();
        $table->string('card_no')->nullable();
        $table->string('registation_no')->nullable();
        $table->string('phone_no')->nullable();

        $table->date('date')->nullable(); 
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
