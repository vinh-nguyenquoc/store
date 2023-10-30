<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCuaHangIdFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('cua_hang', function(Blueprint $table){

                $table->unsignedBigInteger('manager_id');
                $table->foreign('manager_id')->references('id')->on('id');
            });
            Schema::table('users', function (Blueprint $table) {

                $table->unsignedBigInteger('cua_hang_id')->nullable();
                // $table->foreign('cua_hang_id')->references('id')->on('cua_hang');
    
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    
    }
}
