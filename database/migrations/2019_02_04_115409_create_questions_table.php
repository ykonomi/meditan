<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
// TODO この出題は何回目
// TODO 何回目の問題セットか
// TODO user
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->comment('問題番号');
            $table->string('question', 100)->comment('問題');
            $table->boolean('success')->comment('正解したかどうか');
            $table->dateTime('success_datetime')->comment('正解したかどうか');
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
        Schema::dropIfExists('questions');
    }
}