<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function __invoke(Request $request, $slug)
    {
    	$user = User::where('slug', $slug)->first();

    	$path = Storage::disk('public')->put('images/users/avatars', $request->file('avatar'));

    	$user->avatar = $path;
    	$user->save();

    	return back()->with('success', 'Foto de perfil actualizada correctamente');
    }
}
