<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function process(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->old('username');
        $password = $request->old('password');

        $data = [
            'user_username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if(Auth::Attempt($data)){
            return redirect('/d3ti-admin');
        }else{
            Session::flash('message', 'Username atau Password Salah!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/d3ti-login');
        }
    }    

    public function logout()
    {
        Auth::logout();
        return redirect('/d3ti-login');
    }    

    public function process_register(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telepon' => 'required',
            'role' => 'required',
        ]);

        $register = User::create([
            'user_name' => $request->nama,
            'user_username' => $request->username,
            'user_email' => $request->email,
            'password' => bcrypt($request->password),
            'user_phone' => $request->telepon,
            'user_role' => $request->role,
        ]);

        if ($register){
            return redirect('/d3ti-login');
        }
    }
}
