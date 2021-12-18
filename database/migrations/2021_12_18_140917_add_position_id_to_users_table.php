<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPositionIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            // $table->foreign('position_id')
            // ->references('id')
            // ->on('positions')
            // ->onDelete('cascade');
            $table->foreignId('position_id')->constrained('positions')->onDelete('cascade');
        });
        Schema::table('chats', function (Blueprint $table) {
            
            $table->foreignId('child_group_id')->constrained('child_groups')->onDelete('cascade');
        });
        Schema::table('work_flows', function (Blueprint $table) {
            
            $table->foreignId('status_id')->constrained('statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
        Schema::table('chats', function (Blueprint $table) {
            //
        });
        Schema::table('work_flows', function (Blueprint $table) {
            //
        });
    }
}
