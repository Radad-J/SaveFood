<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('avatar',60);
            $table->string('website',60);
            $table->string('GSM',60);
            $table->string('country',60);
            $table->string('city',60);
            $table->string('postal_code',60);
            $table->string('street_name',60);
            $table->string('building_number',60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
