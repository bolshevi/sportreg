<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Миграция для создания таблицы "sports".
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
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->string('title');//Название
            $table->string('date');//Дата
            $table->string('start_time');//Время начала
            $table->integer('duration'); // Продолжительность
            $table->text('description');//Описание
            $table->string('coach');//Тренер
            $table->string('price');//Стоимость занятия
            $table->string('img'); //Фотография занятия
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
        Schema::dropIfExists('sports');
    }
};
