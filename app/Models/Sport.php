<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель спорта.
 *
 * @property int $id Идентификатор фильма.
 * @property string $title Название фильма.
 * @property string $date Дата показа фильма.
 * @property string $start_time Время начала показа фильма.
 * @property int $duration Продолжительность фильма (в минутах).
 * @property string $description Описание фильма.
 * @property string $img Путь к изображению фильма.
 * @property \Illuminate\Support\Carbon $created_at Дата и время создания фильма.
 * @property \Illuminate\Support\Carbon $updated_at Дата и время обновления фильма.
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Booking[] $bookings Связанные бронирования фильма.
 */
class Sport extends Model
{
    use HasFactory;

    /**
     * Атрибуты, которые можно массово назначать.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'date',
        'start_time',
        'duration',
        'description',
        'coach',
        'price',
        'img',
    ];

    /**
     * Получить связанные бронирования фильма.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registration()
    {
        return $this->hasMany(Registration::class);
    }
}
