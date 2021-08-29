<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar',60)->nullable();

            $table->foreignId('role_id')->default('2');
            $table->foreignId('store_id')->nullable();

            $table->foreign('role_id')->references('id')->on('roles')
                ->onDelete('restrict')->onUpdate('cascade');
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
        //
    }
}
