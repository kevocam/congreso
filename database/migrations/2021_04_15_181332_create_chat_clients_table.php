<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_clients', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->unsignedBigInteger('id_user');           
            $table->foreign('id_user')->references('id')->on('users'); 
            $table->boolean("close")->default(0);            
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
        Schema::dropIfExists('chat_clients');
    }
}
