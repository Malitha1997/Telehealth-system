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
            $table->increments('id');
            $table->string('l_name');
            $table->string('f_name');
            $table->string('house_no');
            $table->string('street');
            $table->string('city');
            $table->string('age');
            $table->unique('p_email');
            $table->string('p_telno');
            $table->unique('NIC');
            $table->foreignId('user_ID')->constrained('users');
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
