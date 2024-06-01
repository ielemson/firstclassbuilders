<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

// use Brian2694\Toastr\Facades\Toastr;
class SettingController extends Controller
{
    function __construct()
	{
		// $this->middleware('auth');
		// $this->middleware('permission:websetting-edit', ['only' => ['edit','update']]);

        // $setting_edit = Permission::get()->filter(function($item) {
        //     return $item->name == 'websetting-edit';
        // })->first();


        // if ($setting_edit == null) {
        //     Permission::create(['name'=>'websetting-edit']);
        // }
	}

	public function edit()
	{
        $setting = Setting::find(1);
        // $currencies = Currency::where('status',1)->get();
		return view("back.settings.edit",compact('setting'));
	}

	public function update(Request $request, $id=1)
	{
        // dd($request->all());
		$rules = [
            'website_title' 			=> 'nullable|string',
            'website_logo_dark'         => 'nullable',
            'website_logo_light'        => 'nullable',
            // 'website_logo_small'        => 'nullable|string',
            'website_favicon'           => 'nullable|string',
            'meta_title'                => 'nullable|string',
            'meta_description'          => 'nullable|string',
            'meta_tag'                  => 'nullable|string',
            'currency'                  => 'nullable|string',
            'address'                   => 'nullable|string',
            'phone'                     => 'nullable|string',
            'email'                     => 'nullable|string',
            'email1'                     => 'nullable|string',
        ];

        $messages = [
            
        ];

        $this->validate($request, $rules, $messages);
		$input = $request->all();
        // dd($input);
		$setting = Setting::find($id);
        // if (!empty($input['website_logo_dark'])) {

        //     $newImageName = uniqid() . '-' .'logo'. '.' . $request->website_logo_dark->extension();

        //     $request->website_logo_dark->move(public_path('images/settings'), $newImageName);

        //     $input['website_logo_dark']  = $newImageName;
        //     // dd($input);
        // }

        if (!empty($input['website_logo_light'])) {

            $newImageNameLight = uniqid() . '-' .'logo_light'. '.' . $request->website_logo_light->extension();

            $request->website_logo_light->move(public_path('images/settings'), $newImageNameLight);

            $input['website_logo_light']  = $newImageNameLight;
            // dd($input);
        }

        try {
			$setting->update($input);
            return redirect()->back()->with('success', 'Settings Updated!');
		    return redirect()->route('website-setting.edit');
		} catch (Exception $e) {
            // Toastr::success(__('setting.message.update.error'));
		    return redirect()->route('website-setting.edit');
		}
	}


    public function settingPassword(){

        return view("back.settings.reset-password");
    }

    public function updatePassword(Request $request)
{

        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
}

public function perform()
{
    Session::flush();

    Auth::logout();

    return redirect('login');
}
}

