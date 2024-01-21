<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function AllUser(){
        $users = User::all();
        return view('backend.user.all_users', compact('users'));

    }

    public function EditUser($id)
    {
        $users = User::findOrFail($id);
        return view('backend.user.edit_user', compact('users'));
    }

    public function DeleteUser($id)
    {


        $user = User::findOrFail($id); // Fetch the category by ID

        $destination = 'uploads/user/' . $user->image;
        if (File::exists($destination)) {
            File::delete($destination); // Delete the associated image file
        }

        $user->delete(); // Delete the post

        $notification = [
            'message' => 'User deleted successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

    public function UpdateUser(Request $request)
    {
        $user = User::find($request->id);

        $data = $request->validate([
            'name' => 'required|max:200',
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'status' => 'required',
            'password' => 'required'
        ]);

        // Check if a new password is provided before updating
        if ($request->filled('password')) {
            // Hash the new password
            $data['password'] = bcrypt($data['password']);
        } else {
            // Remove password from the data array if not provided
            unset($data['password']);
        }

        $user->fill($data);
        $user->update();

        $notification = array(
            'message' => 'User updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.user')->with($notification);
    }


    public function AddUser()
    {
        return view('backend.user.add_user');
    }

    public function SaveUser(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|max:200',
            'username' => 'required',
            'email' => 'required|unique:users,email', // Add unique validation rule
            'phone' => 'required',
            'role' => 'required',
            'status' => 'required',
            'password' => 'required'
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = new User($data);

        $user->status = $request->has('status') ? '1' : '0';

        $user->save();
        
        $notification = array(
            'message' => 'User created successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.user')->with($notification);

    }

}
