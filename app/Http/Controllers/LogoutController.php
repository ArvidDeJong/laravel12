<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Log de gebruiker uit van alle guards.
     */
    public function logout(Request $request)
    {
        // Uitloggen van de web guard (standaard gebruikers)
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        }

        // Uitloggen van de staff guard
        if (Auth::guard('staff')->check()) {
            Auth::guard('staff')->logout();
        }

        // Sessie invalideren en token regenereren
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect naar de homepage
        return redirect('/');
    }
}
