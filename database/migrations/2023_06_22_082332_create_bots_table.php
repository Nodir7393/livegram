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
        Schema::create('bots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('token');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('telegram_users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bots');
    }
};
