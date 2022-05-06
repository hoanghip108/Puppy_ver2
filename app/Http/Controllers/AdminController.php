<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function show()
    {
        $puppys = AdminRepos::getAllPuppy();
        return view('Admin.index', [
            'puppy' => $puppys
        ]);
    }
}
