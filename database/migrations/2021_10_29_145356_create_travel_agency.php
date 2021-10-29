<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelAgency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_agency', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30); 
            $table->string('city', 30); 
            $table->string('address', 50); 
            $table->string('postal_code', 10); 
            $table->string('state', 30); 
            $table->string('mail', 50); 
            $table->integer('phone'); 
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
        Schema::dropIfExists('travel_agency');
    }
}
