<?php

namespace App\Repositories\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserInterface
{
    public function getAll()
    {
        $users = User::all();
        return $users;
    }

    public function store($data)
    {
        $data["password"] = Hash::make($data["password"]);
        $users = User::create($data);
        return $users;
    }

    public function update($id , $data)
    {
        $users = User::findOrFail($id);
        $users->update($data);
        return $users;
    }

    public function delete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return true;
    }
    public function getById($id)
    {
        $users = User::findOrFail($id);
        return $users;
    }

    public function multiPage()
    {
        $users = User::cursorPaginate(10);
        return $users;
    }

    public function getByRole($id)
    {
        $users = User::where('role_id' , $id)->get();
        return $users;
    }

    public function updatePassword($id, $data)
    {
        $users = User::findOrFail($id);
        $data["password"] = Hash::make($data["password"]);
        $users->update($data);
    }


    public function search($value)
    {
        $users = User::where('name','like',"%$value%")->orWhere('email','like',"%$value%")
           ->cursorPaginate(10);
        return $users;
    }

}