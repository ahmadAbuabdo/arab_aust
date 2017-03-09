<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('en_relation');
            $table->longText('ar_relation');
            $table->string('updated_by');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *php
     * @return void
     */
    public function down()
    {
        Schema::drop('relation');
    }
}