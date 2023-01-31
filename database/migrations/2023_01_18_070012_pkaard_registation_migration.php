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
        Schema::create('card_registation', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('card_id')->nullable();
            $table->string('cda_address_details')->nullable();
            $table->string('cda_apartment_no')->nullable();
            $table->string('cda_district')->nullable();
            $table->string('cda_division')->nullable();
            $table->string('cda_house_no')->nullable();
            $table->string('cda_road_no')->nullable();
            $table->string('cda_upzilla')->nullable();
            $table->string('cda_Thana')->nullable();
            $table->string('cda_village')->nullable();
            $table->string('date_of_birth')->nullable();   
            $table->string('district')->nullable();
            $table->string('division')->nullable();
            $table->string('email')->unique();
            $table->string('full_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('phone_number')->unique();
            $table->string('reference_code')->nullable(); 
            $table->string('mediam')->nullable(); 
            $table->string('profession')->nullable(); 
            $table->string('register_date')->nullable();
            $table->bigInteger('invoice_number')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->tinyInteger('role')->default('1');   
         

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
