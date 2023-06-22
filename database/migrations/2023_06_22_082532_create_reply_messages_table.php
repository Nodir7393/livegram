<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reply_messages', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->unsignedBigInteger('client_tel_user_id');
            $table->unsignedBigInteger('bot_id');
            $table->unsignedBigInteger('message_id');
            $table->timestamps();

            $table->foreign('bot_id')
                ->references('id')
                ->on('bots')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('message_id')
                ->references('id')
                ->on('messages')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reply_messages');
    }
};
