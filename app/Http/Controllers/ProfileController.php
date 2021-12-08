<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\UpdatePasswordRequest;
use App\Http\Requests\Profile\UpdateRequest;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if ($user->id != Auth::user()->id) {
            abort(403);
        }

        return view('profile.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if ($user->id != Auth::user()->id) {
            abort(403);
        }

        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
        if ($user->id != Auth::user()->id) {
            abort(403);
        }

        $user->update($request->validated());

        return redirect()->route('admin.profile.show', $user)->withSuccess('Profile updated');
    }

    public function updatePassword(UpdatePasswordRequest $request, User $user)
    {
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Old password did not match']);
        }

        $user->update($request->validated());

        return redirect()->route('admin.profile.show', $user)->withSuccess('Password Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
