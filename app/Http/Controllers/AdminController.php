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

    public function edit($id)
    {
        $breed = AdminRepos::getAllBreed();
        $Puppy = AdminRepos::getPuppyById($id);
        return view('Admin.Edit', [
            'Puppy' => $Puppy,
            'Breed' => $breed
        ]);
    }

    public function Update($id, Request $rq)
    {

        $pet = (object)[
            'PName' => $rq->name,
            'Area' => $rq->area,
            'Gender' => $rq->gender,
            'Detail' => $rq->detail,
            'Image' => $rq->image,
            'color' => $rq->color,
            'Breed' => $rq->Breed
        ];
        AdminRepos::updatePuppy($id, $pet);
        return redirect()->route('Admin.index');
    }

    public function Confirm($id)
    {
        $Puppy = AdminRepos::getPuppyById($id);
        return view('Admin.Confirm', ['Puppy' => $Puppy]);
    }

    public function Delete($id)
    {
        AdminRepos::Delete($id);
        return redirect()->route('Admin.index');
    }
}
