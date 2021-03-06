<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key')->unique()->index();
            $table->string('name');
            $table->string('color');
            $table->string('icon');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
