<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateDentistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentists', function (Blueprint $table) {
            $table->bigIncrements('dentist_id');
            $table->string('user_name');
            $table->string('password');
            $table->string('user_email');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('address')->nullable();
            $table->string('bio')->nullable();
            $table->string('avatar');
            $table->string('specialities');
            $table->date('timetable')->nullable();
            $table->bigInteger('phone');
            $table->bigInteger('cellphone');
            $table->bigInteger('gender');
            $table->date('birthdate')->nullable();
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
        Schema::dropIfExists('dentists');
    }
}
