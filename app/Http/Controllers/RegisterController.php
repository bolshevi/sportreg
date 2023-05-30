<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

/**
 * Контроллер бронирования.
 */
class RegisterController extends Controller
{
    /**
     * Отображает страницу Регистрации.
     *
     * @param  string $sport Спорт, для которого отображается страница регистрации.
     * @return \Illuminate\View\View
     */
    public function index(Sport $sport)
    {
        return view('register', compact('sport'));
    }

    /**
     * Создает новое бронирование для указанного фильма.
     *
     * @param  Request $request Входные данные запроса.
     * @param  Movie   $movie   Фильм, для которого создается бронирование.
     * @param  Store   $session Объект сессии.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Registration $registration, Store $session)
    {
        // Валидация входных данных
        $validatedData = $request->all();

        // Создание нового бронирования
        Registration::create($validatedData);
        

        // Возвращение ответа или редирект на другую страницу
        return redirect()->back()->with('success', 'Бронирование успешно сохранено!');
    }
}
