<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function list();
    public function all();
    public function find($id);
    public function create(array $data);
    public function update(array $data, $id);
    public function isUserExists($email);
    public function delete($id);
    public function balanceReduct($userId, $amount);
    public function balanceAdd($userId, $amount);
}
