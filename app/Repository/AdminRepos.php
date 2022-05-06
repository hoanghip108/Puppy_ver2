<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public function getAllPuppy()
    {
        return DB::table('puppy')->join('Breed','Puppy.Bid','=','Breed.Bid')->get();
    }

    public function getPuppyById($id)
    {
        return DB::table('puppy')->where('Pid', '=', $id)
//            ->join('Breed','Puppy.Bid','=','Breed.Bid')
            ->get();
    }
public function getAllBreed(){
        return DB::table('Breed')->get();
}
    public function updatePuppy($id, $pet)
    {
        return DB::table('Puppy')->where('Pid', '=', $id)
            ->update(
                [
                    'PName' => $pet->PName,
                    'Area' => $pet->Area,
                    'Gender' => $pet->Gender,
                    'Detail' => $pet->Detail,
                    'Image' => $pet->Image,
                    'color' => $pet->color,
                    'Bid'=>$pet->Breed
                ]);
    }
    public  function Delete($id){
        return DB::table('Puppy')->where('Pid','=',$id)->delete();
    }
}
