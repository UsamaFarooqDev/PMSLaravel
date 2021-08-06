@extends('layouts.mainlayout')
    @section('head')
        <div class="row header">
            <div class="col-sm-12 text-center">
                <h1>Project Management Details</h1>
            </div>
        </div>
    @endsection
    <br> <br><br>
    @section('detailstable')
    
@if(session('msg'))
<div class="alert alert-success">
{{session('msg')}}
</div>
@endif
  
        <div class="row">
            <div class="col-sm-6">
                <a href="addproject" class="btn btn-success">Add Project</a>
            </div>
        </div>
    <br>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Project Name</th>
                            <th>Company/Client Name</th>
                            <th>Date Added</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataArr as $row)
                   <tr>
                   <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->Companyname}}</td>
                    <td>{{$row->date}}</td>
                    <td>{{$row->status}}</td>
                    <td>
                    
                    <a href="projectedit/{{$row->id}}" class="btn btn-info">Edit</a>
                    <a href="projectdelete/{{$row->id}}" class="btn btn-danger">Delete</a>
                    </td>
                   </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
