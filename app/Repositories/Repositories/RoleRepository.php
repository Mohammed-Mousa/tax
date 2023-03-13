<?php

namespace App\Repositories\Repositories;

use App\Repositories\Interfaces\RoleInterface;
use App\Models\Role;

class RoleRepository implements RoleInterface
{
    public function getAll()
    {
        $roles = Role::all();
        return $roles;
    }

    public function store($data)
    {
        $roles = Role::create($data);
        return $roles;
    }

    public function update($id , $data)
    {
        $roles = Role::findOrFail($id);
        $roles->update($data);
        return $roles;
    }

    public function delete($id)
    {
        $roles = Role::findOrFail($id);
        $roles->delete();
        return true;
    }

    public function getById($id)
    {
        $roles = Role::findOrFail($id);
        return $roles;
    }

    public function multiPage()
    {
        $roles = Role::paginate(10);
        return $roles;
    }

}
