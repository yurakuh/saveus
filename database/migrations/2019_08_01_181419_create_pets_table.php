<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('company_id');
            $table->string('title');
            $table->string('subtitle');
                $table->integer('status');
             $table->string('slug');
             $table->integer('amount')->nullable();
             $table->integer('old')->nullable();
             $table->integer('inv')->nullable();
             $table->integer('hands')->nullable();
             $table->integer('auto')->nullable();
             $table->integer('piar')->nullable();
             $table->integer('photo')->nullable();
             $table->integer('perederzka')->nullable();
             $table->integer('kurator')->nullable();
             $table->integer('donor')->nullable();
             $table->integer('gurskogo')->nullable();
             $table->integer('naiden')->nullable();
             $table->string('city');
              $table->text('description');
              $table->string('stories_id')->nullable();
              $table->string('transactions_id')->nullable();
              $table->string('category_id')->nullable();
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
        Schema::dropIfExists('pets');
    }
}
