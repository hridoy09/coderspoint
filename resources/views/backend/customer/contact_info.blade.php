@extends('admin.admin_master')
@section('title')
  {{ 'Category List' }}
@endsection
@section('admin_content')
<div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Customer Unread Message List</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                         <thead>
                                          <tr>
                                            <th>Serial No </th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                          </tr>
                                        </thead>
                                         <tbody>
                                        @php
                                          $i = 1;
                                        @endphp
                                            @foreach($messages as $message)
                                              <tr>
                                                <th scope="row">{{ $i++ }}</th>
                                                <td>{{ $message->full_name }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->phone_number }}</td>
                                                <td>Unread</td>
                                                <td>
                                                <a href="{{ URL::to('admin/customer/contact/message/'.$message->id) }}" class="btn btn-primary">View</a>
                                                </td> 
                                              </tr>
                                            @endforeach
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Customer Read Message List</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                         <thead>
                                          <tr>
                                            <th>Serial No </th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                          </tr>
                                        </thead>
                                         <tbody>
                                        @php
                                          $i = 1;
                                        @endphp
                                            @foreach($readmessages as $readmessage)
                                              <tr>
                                                <th scope="row">{{ $i++ }}</th>
                                                <td>{{ $readmessage->full_name }}</td>
                                                <td>{{ $readmessage->email }}</td>
                                                <td>{{ $readmessage->phone_number }}</td>
                                                <td>Read</td>
                                                <td>
                                                <a href="{{ URL::to('admin/customer/contact/message/'.$readmessage->id) }}" class="btn btn-danger">View</a> <a id="delete" href="{{ URL::to('admin/customer/contact/delete/'.$readmessage->id) }}" class="btn btn-primary">Delete</a>
                                                </td> 
                                              </tr>
                                            @endforeach
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection