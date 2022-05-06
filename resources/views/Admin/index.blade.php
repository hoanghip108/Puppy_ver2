@extends('Admin.AdminMaster')
@section('Nav')
    @include('Admin.NavBar.Topnav')
@endsection @section('LeftNav')
    @include('Admin.NavBar.LeftNav')
@endsection
@section('main')
    <div class="content-page" style="margin-top: 30px;">
        <div class="content">
            <table class="table table-striped table-centered mb-0 ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Breed</th>
                    <th>Gender</th>
                    <th>Area</th>
                    <th>Detail</th>
                    <th>Color</th>
                    <th>Image</th>
                </tr>
                </thead>
                <tbody>
                @foreach($puppy as $each)
                    <a href="#">
                        <tr>
                            <td>
                                {{$each->Pid}}
                            </td>
                            <td>
                                {{$each->PName}}
                            </td>
                            <td>{{$each->Breed}}</td>
                            <td>
                               @if($each->Gender==0)
                                    FeMale
                                @else Male
                                @endif

                            </td>
                            <td>{{$each->Area}}</td>
                            <td>{{$each->Detail}}</td>
                            <td>{{$each->color}}</td>
                            <td class="table-user">
                                <div class="hover_img">
                                    <a href="#">Show Image
                                        <span>
                                        <img src="{{$each->Image}}" alt="image"
                                             style="min-height: 250px;min-width: 500px"/>
                                    </span>
                                    </a>
                                </div>
                            </td>
                            <td class="table-action">
                                 <a href="{{Route('Puppy.edit',['id'=> $each->Pid])}}"  class="action-icon">
                                <i class="mdi mdi-pencil"></i>
                    </a>
                                 <a href="{{route('Puppy.confirm',['id'=>$each->Pid])}}" class="action-icon">
                    <i class="mdi mdi-delete"></i>
                    </a>
                    </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
