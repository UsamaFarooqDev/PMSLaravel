@extends('layouts.mainlayout')
@section('head')
<div class="row header">
    <div class="col-sm-12 text-center">
        <h1>Project Management Details</h1>
    </div>
</div>
@endsection
<br> <br><br>
@section('addform')
<div class="row">
    <div class="col-sm-12 text-center">
        <h2>Update Project Details</h2>
    </div>
</div>
<div class="row">
    <div class="offset-sm-2 col-sm-8 oofset-sm-2">
        <form action="{{route('project.edit',[$data->id])}}" method="POST">
            {{csrf_field()}}

            <label for="">Project Name:</label>
            <input type="text" class="form-control" name="pname" value="{{$data->name}}" required>
            <label for="">Company/Client Name:</label>
            <input type="text" class="form-control" name="cname" value="{{$data->Companyname}}" required>
            <label for="">Date:</label>
            <input type="date" class="form-control" name="date" value="{{$data->date}}" required>
            <label for="">Status:</label>
            <input list="status" name="status" class="form-control" value="{{$data->status}}" required>

            <datalist id="status">
                <option value="Pending">
                <option value="Ongoing">
                <option value="Completed">
            </datalist>
            <br>
        
            <center>
            <input type="submit" value="Update Project" name="saveproject" class="btn btn-success">
            </center>
        </form>
    </div>
</div>
@endsection