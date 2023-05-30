<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

/**
 * Контроллер административной панели.
 */
class AdminController extends Controller
{
    /**
     * Отображает страницу административной панели со всеми бронированиями.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $registrations = Registration::all();
        return view('admin', ['registrations' => $registrations]);
    }

    /**
     * Удаляет бронирование по указанному идентификатору.
     *
     * @param  int $id Идентификатор бронирования.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteRegister($id)
    {
        $registrations = Registration::findOrFail($id);
        $registrations->delete();

        return redirect()->route('admin')->with('success', 'Запись успешно удалена');
    }
}
