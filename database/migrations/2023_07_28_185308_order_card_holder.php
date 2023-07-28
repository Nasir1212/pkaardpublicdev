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
        Schema::create('order_card_holder', function (Blueprint $table) {

            $table->id();
            $table->string('card_holder')->nullable();
            $table->string('product_table_id')->nullable();
            $table->string('affiliation_id')->nullable();
            $table->string('discount_promo_code')->nullable();
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
