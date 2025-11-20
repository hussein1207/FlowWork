<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
	/**
	 * Update authenticated user's settings (name, email, optional password).
	 */
	public function update(Request $request)
	{
		$user = Auth::user();

		$rules = [
			'name' => 'required|string|max:255',
			'email' => 'required|email|max:255|unique:users,email,' . ($user ? $user->id : 'NULL'),
			'password' => 'nullable|min:6',
		];

		$data = $request->validate($rules);

		$user->name = $data['name'];
		$user->email = $data['email'];

		$passwordChanged = false;
		if (!empty($data['password'])) {
			$user->password = Hash::make($data['password']);
			$passwordChanged = true;
		}

		$user->save();

		// regenerate session if password changed for extra safety
		if ($passwordChanged) {
			$request->session()->regenerate();
		}

		return redirect()->back()->with('status', 'Settings updated successfully.');
	}
}

