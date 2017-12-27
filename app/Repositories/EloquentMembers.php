<?php

namespace App\Repositories;

use App\Direction;
use App\member;
use Illuminate\Support\Collection;

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

    public function getAll(): Collection
    {
        return $this->model->get();
    }

    public function getById(int $id): Member
    {
        return $this->model->get($id);
    }

    public function getByDirection(Direction $direction): Collection
    {
        return $this->model->get($direction);
    }

    public function getByStatus($status)
    {
        return $this->model->get($status);
    }

    public function update(Member $member, array $columns): void
    {

    }

    public function addPoints(Member $member, float $points): void
    {

    }
}