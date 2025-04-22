<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Удаляем старое поле urgent (SQLite не поддерживает изменение столбцов напрямую)
        Schema::table('todos', function (Blueprint $table) {
            $table->dropColumn('urgent');
        });

        // Добавляем новое поле urgent с правильными настройками
        Schema::table('todos', function (Blueprint $table) {
            $table->boolean('urgent')->default(false);
        });
    }

    public function down()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->dropColumn('urgent');
        });

        Schema::table('todos', function (Blueprint $table) {
            $table->boolean('urgent')->nullable();
        });
    }
};
