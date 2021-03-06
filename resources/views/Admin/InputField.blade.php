<div class="col-lg-8" style="margin-top: 30px;">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <form action="{{Route('Puppy.update',['id'=>$Puppy[0]->Pid])}}" method="post">
                        @csrf
                        @foreach($Puppy as $pet)
                            <div class="form-group">
                                <label for="simpleinput">Name</label>
                                <input type="text" id="simpleinput" class="form-control" name="name"
                                       value="{{old('name')??$pet->PName}}">
                                @error('name')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="simpleinput">Area</label>
                                <input type="text" id="simpleinput" class="form-control" name="area"
                                       value="{{$pet->Area}}">
                                @error('area')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="example-select">Breed</label>
                                <select class="form-control" id="example-select" name="Breed">
                                    @foreach($Breed as $each)
                                        <option value=" {{ $each->Bid}}">{{$each->Breed}}</option>
                                    @endforeach
                                </select>
                                @error('Breed')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="example-select">Gender</label>
                                <select name="gender" id="example-select" class="form-control" name="gender">
                                    <option value="1">Male</option>
                                    <option value="0">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="simpleinput">image</label>
                                <input type="text" id="simpleinput" class="form-control" name="image"
                                       value="{{$pet->Image}}">
                                @error('image')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="simpleinput">Color</label>
                                <input type="text" id="simpleinput" class="form-control" name="color"
                                       value="{{$pet->color}}">
                                @error('color')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="simpleinput">Detail</label>
                                <input type="text" id="simpleinput" class="form-control" name="detail"
                                       value="{{$pet->Detail}}">
                                @error('detail')
                                <div class="alert alert-warning" role="alert">
                                    <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary" style="border-radius: 15px">Update</button>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
