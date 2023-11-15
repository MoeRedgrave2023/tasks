<?php

namespace App\Http\Controllers;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; 
use App\Models\User; 
use App\Http\Requests\ContactUsRequest;





class CustomAuthController extends Controller
{
    
    public function showLoginForm()
    {
        $usersWithMessagesCount = Contact::distinct('user_id')->count('user_id');
        return view('login',compact('usersWithMessagesCount'));
    }

    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            
            return redirect()->intended('/home');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function signup(SignupRequest $request)
    {
        
        $newUser = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        Auth::login($newUser);

        return redirect('/home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login'); 
    }

    public function showSignupForm()
    {
        $usersWithMessagesCount = Contact::distinct('user_id')->count('user_id');
        return view('signup',compact('usersWithMessagesCount'));
    }

    public function showContactForm()
    {
        return view('contact-us');
    }

    public function submitContactForm(ContactFormRequest $request)
    {
        
        $contact = new Contact([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'user_id' => Auth::id(), 
        ]);

        $contact->save();

        return redirect()->back()->with('success', 'Contact form submitted successfully!');
    }
    
}


