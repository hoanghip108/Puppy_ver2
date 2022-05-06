<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public function getAllPuppy()
    {
        return DB::table('puppy')->get();
    }
}