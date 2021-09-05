<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('store_id');
            $table->string('title',60);
            $table->string('description',255);
            $table->decimal('price',4);
            $table->decimal('sale_price',4)->nullable();
            $table->date('available_day_from');
            $table->date('available_day_to');
            $table->time('available_hour_from');
            $table->time('available_hour_to');
            $table->integer('stock');
            $table->string('picture',60)->nullable();

            $table->foreign('store_id')->references('id')->on('stores')
                ->onDelete('restrict')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packs');
    }
}
