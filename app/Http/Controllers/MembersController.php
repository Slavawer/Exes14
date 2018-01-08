<?php

namespace App\Http\Controllers;

use App\Direction;
use App\Member;
use App\Repositories\EloquentMembers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Laravel\Lumen\Routing\Controller as BaseController;

class MembersController extends Controller
{
    public function getAll(EloquentMembers $members)
    {
        return response()->json($members->getAll());
    }

    public function getById(EloquentMembers $members, $id)
    {
        try {
            return response()->json($members->getById($id));
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        }
    }

    public function getByDirection(EloquentMembers $members, $direction)
    {
        return response()->json($members->getByDirection($direction));
    }

    public function getByStatus(EloquentMembers $members, $status)
    {

    }

    public function update(EloquentMembers $members, $member, array $columns)
    {

    }

    public function addPoints(EloquentMembers $members, $member, float $points)
    {

    }
}
