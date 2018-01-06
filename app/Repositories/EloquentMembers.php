<?php

namespace App\Repositories;

use App\Direction;
use App\Member;
use Illuminate\Support\Collection;

class EloquentMembers implements MembersRepository
{
    protected $model;
    protected $direction;

    public function __construct(Member $model, Direction $direction)
    {
        $this->model = $model;
        $this->direction = $direction;
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
        return $this->model->findOrFail($id);
    }

    public function getByDirection(int $id): direction
    {
        return $this->direction->with('members')->findOrFail($id);
    }

    public function getByStatus($status)
    {
        return $this->model->where('status', $status)->get();
    }

    public function update(Member $member, array $columns): void
    {

    }

    public function addPoints(Member $member, float $points): void
    {

    }
}