<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
             $table->string('slug');
             $table->string('vklink')->nullable();
             $table->string('fblink')->nullable();
              $table->string('instlink')->nullable();
              $table->text('bio')->nullable();
            $table->string('logo')->nullable();
           $table->integer('verify')->nullable();
           $table->integer('organisation')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
