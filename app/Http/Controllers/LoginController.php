<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\SocialNetworks;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $company = Company::where('id', 1)->first();
        $socialNetworks = SocialNetworks::where('company_id', $company->id)->get();

        return view(
            'admin.login',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks
            ]
        );
    }

    public function auth(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended(route('dashboard'));
        }
        return back()->withErrors([
            'error' => 'Error de credenciales',
        ]);
    }

    public function dashboard(){
        $company = Company::where('id', 1)->first();
        $socialNetworks = SocialNetworks::where('company_id', $company->id)->get();
        return view(
            'admin.dashboard',
            [
                'company' => $company,
                'socialNetworks' => $socialNetworks
            ]
        );
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
