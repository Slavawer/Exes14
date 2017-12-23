<?php

namespace gd\Repositories;


interface RepositoryInterface {

    function getAll();

    function getById($id);

    function GetDirectionMembers($Direction);

    function GetStatusMembers($Status);

    function AddPointsMember();

    function EditMember();
}