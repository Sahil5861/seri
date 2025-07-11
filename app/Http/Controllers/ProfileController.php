<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('admin.profile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',            
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),            
        ]);
        
        
        $user = User::where('id', $request->input('id'))->first();        

        if ($user) {
            $user->name = $request->username;
            $user->email = $request->email;
            $user->save();
            return redirect()->back()->with('message', 'User Updated Successfully !');
        }


    }


    public function update_password(Request $request){
        $request->validate([
            'cur_password' => 'required',
            'new_password' => 'required',
            'confirm_password'  => 'required|same:new_password',        
        ]);

        $user = User::where('id', $request->id)->first();

        if (!$user) {
            return back()->with('error', 'User not found.');
        }
            
        if (!Hash::check($request->cur_password, $user->password)) {
            return back()->with('error', 'Incorrect Password.');
        }
        
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('message', 'Password updated successfully.');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
