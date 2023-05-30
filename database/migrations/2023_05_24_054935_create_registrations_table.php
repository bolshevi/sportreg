<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Миграция для создания таблицы "registrations".
 */
return new class extends Migration
{
    /**
     * Применение миграции.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); //Имя 
            $table->string('last_name'); //Фамилия
            $table->string('phone_number'); //Номер телефона
            $table->string('email'); //Почта
            $table->timestamps();
        });
    }

    /**
     * Отмена миграции.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
};
