<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
{
    $user = auth()->user();
    return view('dashboard', ['user' => $user]);
}

public function logout(Request $request)
{
    Auth::logout(); // Clear the user's login session
    $request->session()->invalidate(); // Invalidate the user's session
    $request->session()->regenerateToken(); // Regenerate the CSRF token

    // Optionally, you can delete any data related to the user's login here
    // For example, you could delete any temporary data that was stored in the session

    return redirect('/login'); // Redirect the user to the login page
}


}
