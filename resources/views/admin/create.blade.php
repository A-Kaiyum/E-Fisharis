@extends('layout.admin.master')
@section('content')
    <div class="card-body">
        <form class="forms-sample">
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword4">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleSelectGender">Gender</label>
                <select class="form-control" id="exampleSelectGender">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                    <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Address</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">Details</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
            </div>
            <label for="status">Status</label>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="status">
                            Published
                            <i class="input-helper"></i></label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="status" checked="">
                            Unpublished
                            <i class="input-helper"></i></label>
                    </div>

                </div>
            </div>


            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
</div>

@endsection
