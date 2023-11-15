<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function showContactForm()
    {
        
        $usersWithMessagesCount = Contact::distinct('user_id')->count('user_id');

        return view('contact', compact('usersWithMessagesCount'));
    }

    public function submitContactForm(ContactRequest $request)
    {
        
        $userId = Auth::id();

        
        Contact::create(array_merge($request->validated(), ['user_id' => $userId]));

        
        return redirect()->back()->with('success', 'Contact form submitted successfully!');
    }
}

