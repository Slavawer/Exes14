<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use App\Member;


interface MembersRepository
{
    /**
     * Gets all members
     *
     * @param array $columns
     * @return Collection
     */
    function getAll($columns = array('*'));

    /**
     * Get member by id
     *
     * @param int $id
     * @return Member
     */
    function getById(int $id);

    /**
     * Gets members by direction
     *
     * @param $direction
     * @return Member
     */

    function getDirectionMembers($id, $direction);

    /**
     * Gets members by status
     *
     * @param $status
     * @return Member
     */

    function getStatusMembers($id, $status);

    /**
     * Gets member by points
     *
     * @param array $columns
     * @return Member
     */

    function addPointsMember(array $columns);

    /**
     * Add Points for members
     *
     * @param array $columns
     * @return Member
     */

    function editMember($id, array $columns);
    /**
     * Edit members
     *
     * @param array $columns
     * @return Member
     */
}