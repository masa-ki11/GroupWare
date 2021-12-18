<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_groups', function (Blueprint $table) {
            $table->id();
            // $table->integer('group_id');
            $table->string('name');
            $table->timestamps();

            // $table->foreign('group_id')
            // ->references('id')
            // ->on('groups')
            // ->onDelete('cascade');
            $table->foreignId('group_id')->constrained('groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_groups');
    }
}
