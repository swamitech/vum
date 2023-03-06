<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStuddataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studdata', function (Blueprint $table) {
            $table->id();
            $table->string("mem_no")->nullable();
            $table->string("division")->nullable();
            $table->string("course")->nullable();
            $table->string("doj")->nullable();
            $table->string("name")->nullable();
            $table->string("address")->nullable();
            $table->string("phone")->nullable();
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
        Schema::dropIfExists('studdata');
    }
}
