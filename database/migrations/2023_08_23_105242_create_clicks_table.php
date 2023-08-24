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
        Schema::create('clicks', static function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')
                ->nullable()
                ->comment('id пользователя, который сделал клик');

            $table->string('ip')->comment('ip адрес, с которого пришел запрос');
            $table->string('browser');
            $table->string('os');
            $table->string('page')->comment('url страницы, с которой пришел запрос');
            $table->string('button_name')->nullable();
            $table->string('button_group')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clicks');
    }
};
