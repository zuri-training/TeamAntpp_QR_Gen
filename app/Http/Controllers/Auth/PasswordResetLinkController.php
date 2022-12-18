<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Models\User;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('msg', 'not exist');
        }

        $token = Str::random(70);
        $password_reset = new PasswordReset();
        $password_reset->email = $user->email;
        $password_reset->token = $token;
        $reset = $password_reset->save();

        if($reset) return view('auth.reset-password', ['token' => $token, 'email' => $user->email]);
        else return back()->with('msg2', 'reset error');
    }
}
