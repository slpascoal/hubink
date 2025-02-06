<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HubinkController extends Controller
{
    public function __invoke(User $user)
    {
        return view('hubink', compact('user'));
    }
}
