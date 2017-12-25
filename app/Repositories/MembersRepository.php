<?php

namespace App\Repositories;


interface MembersRepository
{
    function GetAll($columns = array('*'));

    function getById($id, $column);

    function GetDirectionMembers($id, $direction);

    function GetStatusMembers($id, $status);

    function AddPointsMember(array $columns);

    function EditMember($id, array $columns);
}