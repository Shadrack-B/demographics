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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->integer("age");
            $table->date("date_of_birth")->nullable();
            $table->string("sex");
            $table->string("race");
            $table->string("ethnicity");
            $table->string("country_of_birth")->nullable();           
            $table->date("emigration_year")->nullable();
            $table->foreignId("address")->nullable();
            $table->string("phone")->nullable();
            $table->string("phone2")->nullable();
            $table->foreignId("facility")->nullable();
            $table->string("facility_room_no")->nullable();
            $table->date("date_of_illness")->nullable();
            $table->boolean("evaluated_by_physicians")->nullable();
            $table->boolean("evaluated_at_emergency_room")->nullable();
            $table->boolean("hospitalized")->nullable();
            $table->date("date_hospitalized")->nullable();
            $table->boolean("discharged")->nullable();
            $table->date("date_discharged")->nullable();
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
        Schema::dropIfExists('patients');
    }
};
