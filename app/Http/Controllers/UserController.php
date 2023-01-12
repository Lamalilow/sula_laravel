<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrRequest;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\UserSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registrationView()
    {
        return view('users.register');
    }

    public function registrationPost(RegistrRequest $request)
    {
        $requests = $request->validated();
        $requests['password'] = Hash::make($requests['password']);
        $photo = $request->file('photo')->store('public');
        $requests['photo'] = explode('/', $photo)[1];
        $user = User::create([
            'login' => $requests['login'],
            'password' => $requests['password'],
        ]);
        UserInfo::create([
            'user_id' => $user->id,
            'name' => $requests['name'],
            'age' => $requests['age'],
            'gender' => $requests['gender'],
            'city' => $requests['city'],
            'description' => $requests['description'],
            'photo' => $requests['photo'],
        ]);
        return redirect(route('login'));

    }
    public function loginView()
    {
        return view('users.login');
    }
    public function loginPost(LoginRequest $request)
    {
        if(Auth::attempt($request->validated())){
            $request->session()->regenerate();
            return redirect()->route('/');
        }
        return back()->with(['errorSuccess' => 'Неверный логин или пароль']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }

    public function warningView()
    {
        return view('warning');
    }

}
