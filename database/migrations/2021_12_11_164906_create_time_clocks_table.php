<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeClocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_clocks', function (Blueprint $table) {
            $table->id();
            // $table->integer('use_id');
            $table->date('start_date')->nullable(true);
            $table->date('end_date')->nullable(true);
            $table->time('start')->nullable(true);
            $table->time('end')->nullable(true);
            $table->timestamps();

            // $table->foreign('user_id')
            // ->references('id')
            // ->on('users')
            // ->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_clocks');
    }
}
