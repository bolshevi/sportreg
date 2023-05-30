<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Sport;
use Illuminate\Http\Request;

/**
 * Контроллер домашней страницы.
 */
class HomeController extends Controller
{
    /**
     * Отображение главной страницы.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $sports = Sport::all();
        return view('index', [
            'sports' => $sports
        ]);
    }
}
