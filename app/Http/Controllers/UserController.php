<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function update(Request $request, $slug)
    {
    	$user = User::where('slug', $slug)->first();

    	$user->name = $request->name;
    	$user->slug = Str::slug($request->name);
    	$user->email = $request->email;
    	$user->save();

    	return back()->with('success', 'Usuario actualizado correctamente');
    }
}
