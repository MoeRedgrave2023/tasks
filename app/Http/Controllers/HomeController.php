<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * 
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 
     *
     * @return 
     */
    public function index()
    {

        
    $usersWithMessagesCount = Contact::distinct('user_id')->count('user_id');

    return view('home', compact('usersWithMessagesCount'));
    }
}
