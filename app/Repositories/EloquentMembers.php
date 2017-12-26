<?php

namespace App\Repositories;

use App\members;

class EloquentMembers implements MembersRepository
{

    private $model;

    public function __construct(members $model)
    {
        $this->model = $model;
    }

    public function GetAll($columns = array('*'))
    {
        return $this->model->get($columns);
    }

    public function getById($id, $column)
    {
        return $this->model->get($id, $column);
    }

    public function GetDirectionMembers($id, $direction)
    {
        return $this->model->get($id, $direction);
    }

    public function GetStatusMembers($id, $status)
    {
        return $this->model->get($id, $status);
    }

    public function AddPointsMember(array $columns)
    {
        return $this->model->create($columns);
    }

    public function EditMember($id, array $columns)
    {
        return $this->model->find($id)->update($columns);
    }
}