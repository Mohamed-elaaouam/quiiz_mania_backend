<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|confirmed|min:8"
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password
        ]);


        if ($user) {
            return redirect()->route("users.create")
                ->with("success", "User Created successfully ");
        } else {
            return redirect()->route("users.index");
        }
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = User::find($id);
        return view("users.show", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = User::find($id);
        return view("users.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::find($id);

        if ($user) {

            $request->validate([
                "name" => "required"
            ]);

            $user->update([
                "name" => $request->name
            ]);
            return redirect()->route("users.edit", ["user" => $id])
                ->with("success", "Updated successfully ");
        } else {
            return redirect()->back()->with("error", "no user found");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route("users.index")->with("success", "User deleted successfully");
        } else {
            return redirect()->back()->with("error", "error while deleting user");
        }
    }
}
