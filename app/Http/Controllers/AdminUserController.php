<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.users.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create', [
            'divisis' => Divisi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'divisi_id' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        session()->flash('status', 'Akun Berhasil Ditambahkan!');

        return redirect('/dashboard/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        // return view('dashboard.users.show',[
        //     'user' => $user
        // ]);
        dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        return view('dashboard.users.edit', [
            'user' => $user,
            'divisis' => Divisi::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        $rules =[
            'name' => 'required|max:255',
            'divisi_id' => 'required',
            'password' => 'required|min:5|max:255'
        ];

        if ($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $user->id)
            ->update($validatedData);

        session()->flash('status', 'Akun Berhasil Di-Update!');

        return redirect('/dashboard/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        User::destroy($user->id);

        session()->flash('status', 'Akun Berhasil Dihapus!');

        return redirect('/dashboard/users');
    }
}
