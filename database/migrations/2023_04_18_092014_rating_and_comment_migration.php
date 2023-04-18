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
        Schema::create('rating_and_comment', function (Blueprint $table) {
            $table->id();
            $table->string('card_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('comment')->nullable();
            $table->string('rating')->nullable();

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
