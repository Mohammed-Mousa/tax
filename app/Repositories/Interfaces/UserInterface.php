<?php

namespace App\Repositories\Interfaces;

interface UserInterface
{
    public function getAll();
    public function store($data);
    public function update($id , $data);
    public function delete($id);
    public function getById($id);
    public function multiPage();
    public function getByRole($id);
    public function updatePassword($id, $data);
    public function search($value);
}
