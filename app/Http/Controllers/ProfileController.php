<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'user' => auth()->user()
        ]);
    }

    public function update(ProfileRequest $request)
    {
        /** @var User $user */
        $user = auth()->user();

        $data = $request->validated();

        if($file = $request->photo)
        {
            $data['photo'] = $file->store('photos', 'public');
        }

        $data['handler'] = "@" . $data['handler'];

        $user->fill($data)->save();

        return back()->with('message', 'Perfil atualizado com sucesso!');
    }


}
