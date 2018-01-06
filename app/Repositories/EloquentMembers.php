<?php

namespace App\Repositories;

use App\Direction;
use App\Member;
use Illuminate\Support\Collection;

class EloquentMembers implements MembersRepository
{
    protected $model;

    public function __construct(Member $model)
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
        return $this->model->findOrFail($id);
    }

    public function getByDirection($direction): Collection
    {
        return $this->model->where('direction_id', $direction)->with('direction')->get();
    }

    public function getByStatus($status)
    {

    }

    public function update(Member $member, array $columns): void
    {

    }

    public function addPoints(Member $member, float $points): void
    {

    }
}