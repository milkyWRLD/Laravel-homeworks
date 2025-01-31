<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Защищаем доступ к этому методу только для авторизованных пользователей
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Метод для отображения данных пользователя
    public function show()
    {
        // Получаем авторизованного пользователя
        $user = Auth::user();

        // Возвращаем представление и передаем данные
        return view('user.show', compact('user'));
    }
}
