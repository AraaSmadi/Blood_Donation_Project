<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodDonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_doners', function (Blueprint $table) {
            $table->increments("b_d_id"); 
            $table->string("b_d_name"); 
            $table->string("b_d_gender"); 
            $table->biginteger("b_d_phone"); 
            $table->string("b_d_address"); 
            $table->string("b_d_email");  
            $table->string("b_d_reprt");  
            $table->biginteger("b_d_age"); 
            $table->boolean("status"); 
            $table->integer('b_d_blood_type')->unsigned();
            $table->foreign("b_d_blood_type")->referances('id')->on('blood_types')->ondelete('CASCADE'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_doners');
    }
}
