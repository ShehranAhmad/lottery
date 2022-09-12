<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function inquiries()
    {
        $inquiries=Inquiry::where('status','active')->orderBy('created_at','DESC')->get();
        return view('admin.inquiry.list',get_defined_vars());
    }

    public function inquiriesDetail($id)
    {
        $inquiry=Inquiry::where('id',$id)->first();
        return view('admin.inquiry.detail',get_defined_vars());
    }

    public function inquiriesClose($id)
    {
        $inquiry=Inquiry::where('id',$id)->update([
            'status'=>'inactive',
        ]);
        return redirect()->route('admin.inquiries')->with('message','Inquiry has been closed');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::User()->id);

        $request->validate([
            'name'=>'required',
            'email'=>'required',
        ]);
        if ($request->email != $user->email) {
            $request->validate([
                'email' =>'required|email|unique:users',
            ]);
        }
        if($request->password)
        {
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        if($request->hasfile('image')){
            $image = $request->file('image');
            $filename = 'uploads/users/'.time() . '.' . $image->getClientOriginalExtension();
            $movedFile = $image->move('uploads/users/', $filename);
            $user->avatar = $filename;
            $user->save();
        }else {
            $user->save();
        }
        return redirect()->back()->with('message', 'Profile has been updated');
    }
}
