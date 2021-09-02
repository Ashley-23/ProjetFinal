<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'min:2', 'max:255'],
            'prenom' => ['required', 'string', 'min:2', 'max:255'],
            'login' => ['required', 'string', 'max:255', 'unique:users'],
            'datenaiss' => ['required', 'date'],
            'sexe' => ['required', 'String', 'min:1', 'max:1'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'adresse' => ['required', 'string', 'max:255'],
            // 'active' => ['required', 'string', 'min:1', 'max:1'],
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'login' => $request->login,
            'datenaiss' => $request->datenaiss,
            'sexe' => $request->sexe,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'adresse' => $request->adresse,
            // 'active' => $request->active,
        ]);

        event(new Registered($user));

        Auth::login($user);
        $user->attachRole($request->role_id);

        return redirect(RouteServiceProvider::HOME);
    }
}
