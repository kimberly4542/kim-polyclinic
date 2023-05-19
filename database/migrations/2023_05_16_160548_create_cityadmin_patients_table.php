<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityadminPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cityadmin_patients', function (Blueprint $table) {
            $table->increments('patient_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('mname');
            $table->string('suffix');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('contact_no');
            $table->date('birth_date');
            $table->string('address1');
            $table->string('citizenship');
            $table->string('civil_status');
            $table->string('height');
            $table->string('weight');
            $table->string('diagnosis');
            $table->date('diagnosed_date');
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
        Schema::dropIfExists('cityadmin_patients');
    }
}
