<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function list()
    {
        return $this->model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $dataInfo = $this->model->findOrFail($id);

        $dataInfo->update($data);

        return $dataInfo;
    }

    public function isUserExists($email)
    {
        return $this->model
                ->where('email',strtolower(trim($email)))
                ->first();

    }

    public function delete($id)
    {
        $dataInfo = $this->model->find($id);

        return ($dataInfo->delete());
    }

    public function balanceReduct($id,$amount)
    {
        $dataInfo = $this->model->find($id);

        if(!empty($dataInfo)){
            $dataInfo->balance=$dataInfo->balance-$amount;

            return ($dataInfo->save());
        }
        else
        return false;
    }

    public function balanceAdd($id,$amount)
    {
        $dataInfo = $this->model->find($id);

        if(!empty($dataInfo)){
            $dataInfo->balance=$dataInfo->balance+$amount;

            return ($dataInfo->save());
        }
        else
        return false;
    }

}
