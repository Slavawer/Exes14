<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use App\Member;
use App\Direction;

interface MembersRepository
{
    /**
     * Get all members
     *
     * @return Collection
     */
    public function getAll(): Collection;

    /**
     * Get member by id
     *
     * @param int $id
     * @return Member
     */
    public function getById(int $id): member;

    /**
     * Get members by direction
     *
     * @param Direction $direction
     * @return Collection
     */
    public function getByDirection(Direction $direction): Collection;

    /**
     * Get members by status
     *
     * @param string $status one of "В игре"|"Выбыл"
     * @return Collection
     */

    public function getByStatus($status);

    /**
     * Update member
     * NOTE! You must validate your data before use this method!
     *
     * @param Member $member
     * @param array $columns
     */
    public function update(Member $member, array $columns): void;

    /**
     * Add points to member
     *
     * @param Member $member
     * @param float $points
     */
    public function addPoints(Member $member, float $points): void;
}
