<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


use Illuminate\View\View;

class ContactController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email', // Ensure email is unique
            'phone'   => 'required|max:20',
            'message' => 'required|string|max:2000',
        ]);
    
        // Save data in the users table
        User::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone, // Assuming 'phone' column exists in 'users' table
            
        ]);
    
        // Redirect with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
