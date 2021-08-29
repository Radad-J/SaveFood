<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryPackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_pack', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('pack_id');

            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('pack_id')->references('id')->on('packs')
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
        Schema::dropIfExists('category_pack');
    }
}
