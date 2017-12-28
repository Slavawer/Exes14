<?php

namespace App\Repositories;

use App\Direction;
use App\member;
use Illuminate\Support\Collection;

class EloquentMembers implements MembersRepository
{
    protected $model;

    public function __construct(member $model)
    {
        $this->model = $model;
    }

    /**
     * {@inheritdoc}
     */

    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function getById(int $id): Member
    {
        return $this->model->where('id', $id)->get();
    }

    public function getByDirection(Direction $direction): Collection
    {
        return $this->model->where('Direction', $direction)->get();
    }

    public function getByStatus($status)
    {
        return $this->model->where($status)->get();
    }

    public function update(Member $member, array $columns): void
    {
        return $this->model->where($columns)->update($member);
    }

    public function addPoints(Member $member, float $points): void
    {
        return $this->model->where($member)->add($points);
    }
}