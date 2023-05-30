<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель регистрации.
 *
 * @property int $id Идентификатор бронирования.
 * @property string $first_name Имя клиента.
 * @property string $last_name Фамилия клиента.
 * @property string $phone_number Номер телефона клиента.
 * @property string $email Адрес электронной почты клиента.
 * @property array $selected_seats Выбранные места.
 * @property float $total_price Общая стоимость бронирования.
 * @property int $movie_id Идентификатор фильма.
 * @property \Illuminate\Support\Carbon $created_at Дата и время создания бронирования.
 * @property \Illuminate\Support\Carbon $updated_at Дата и время обновления бронирования.
 * @property \App\Models\Movie $movie Связанный фильм.
 */
class Registration extends Model
{
    use HasFactory;

    /**
     * Атрибуты, которые можно массово назначать.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'sport_id',
    ];

    /**
     * Получить связанный фильм.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }
}
