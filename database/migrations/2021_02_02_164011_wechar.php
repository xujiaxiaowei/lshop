<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wechar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('wechar', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->integer("user_id_send")->default("0")->comment("发送人id");
            $table->integer("user_id_receive")->default("0")->comment("接受人id");
            $table->string("content")->default("")->comment("发送内容");
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
        //
    }
}
