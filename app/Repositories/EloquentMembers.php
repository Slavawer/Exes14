<?php

namespace App\Repositories;

use App\member;

class EloquentMembers implements MembersRepository
{

    private $model;

    public function __construct(member $model)
    {
        $this->model = $model;
    }

    /**
     * {@inheritdoc}
     */
    public function getAll($columns = array('*'))
    {
        return $this->model->get($columns);
    }

    public function getById($id)
    {
        return $this->model->get($id);
    }

    public function getDirectionMembers($id, $direction)
    {
        return $this->model->get($id, $direction);
    }

    public function getStatusMembers($id, $status)
    {
        return $this->model->get($id, $status);
    }

    public function addPointsMember(array $columns)
    {
        return $this->model->create($columns);
    }

    public function editMember($id, array $columns)
    {
        return $this->model->find($id)->update($columns);
    }
}