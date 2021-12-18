<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorageInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storage_information', function (Blueprint $table) {
            $table->id();
            // $table->integer('use_id');
            $table->date('date')->nullable(true);
            $table->string('title')->nullable(true);
            $table->integer('amount')->nullable(true);
            $table->string('customer')->nullable(true);
            $table->string('file')->nullable(true);
            $table->timestamps();

            // $table->foreign('user_id')
            // ->references('id')
            // ->on('users')
            // ->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->index(['date','amount','customer']);
            // $table->index('amount');
            // $table->index('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storage_information');
    }
}
