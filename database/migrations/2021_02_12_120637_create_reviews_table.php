<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('comment',150);
            $table->string('rate')->nullable();
            $table->string('comments_id')->nullable();
            $table->string('userid',150)->nullable();
            $table->string('ip',150)->nullable();
            $table->string('status',5)->nullable()->default('False');
            $table->timestamps();
            $table->string('relation_id',75)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
