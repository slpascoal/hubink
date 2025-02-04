<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /** @var User $user */
        $user = auth()->user();

        dump(
            $user->links(),
            $user->links()->get()
        );

        return view('dashboard', [
            'links' => $user->links(),
        ]);
    }
}
