<?php

namespace App\Repositories\Interfaces;

interface RoleInterface
{
    public function getAll();
    public function store($data);
    public function update($id , $data);
    public function delete($id);
    public function getById($id);
    public function multiPage();
}
