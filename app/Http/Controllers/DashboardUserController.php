<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.users.index', [
            'title' => 'User',
            'roles' => Role::all(),
            'users' => User::latest()->paginate(10),
            'admins' => User::where('role_id', 2)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'nomor_induk' => 'required|min:7|max:18|unique:users,nomor_induk',
            'email' => 'required|email:dns',
            'password' => 'required|min:4',
            'role_id' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/dashboard/users')->with('userSuccess', 'Data user berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return json_encode($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // return $request;
        $rules = [
            'name' => 'required|max:100',
            'email' => 'required|email:dns',
            'role_id' => 'required'
        ];

        if ($request->nomor_induk != $user->nomor_induk) {
            $rules['nomor_induk'] = 'required|min:7|max:18|unique:users,nomor_induk';
        }

        $validatedData = $request->validate($rules);
        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/dashboard/users')->with('userSuccess', 'Data user berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/users')->with('deleteUser', 'Hapus data user berhasil');
    }

    public function makeAdmin($id)
    {
        $userData = [
            'role_id' => 2,
        ];

        User::where('id', $id)->update($userData);

        return redirect('/dashboard/admin')->with('adminSuccess', 'Data admin berhasil ditambahkan');
    }
}
