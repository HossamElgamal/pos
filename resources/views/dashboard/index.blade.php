@extends('layouts.dashboard.master')
@section('content')

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
{{--                        @if(\Illuminate\Support\Facades\Session::has('success_message'))--}}
{{--                            <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                                <strong>Success:</strong> {{\Illuminate\Support\Facades\Session::get('success_message')}}--}}
{{--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        @endif--}}

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title mt-2 mx-3">Cms Pages</h3>
                                <a style=" max-width: 150px; float: right ; display: inline-block"
                                   href="{{ url('admin/add-edit-cms-page') }}" class="btn btn-block btn-primary">Add Cms Page</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="cmspages" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>URl</th>
                                        <th>Created On</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td></td>
                                            <td>

                                            </td>
                                            <td></td>
                                            <td>  </td>
                                            <td>



                                                &nbsp;
                                                <a href=""> <i class="fas fa-edit"  ></i></a>
                                                &nbsp;
                                                <a href=""> <i class="fas fa-trash"  ></i></a>
                                            </td>
                                        </tr>


                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>


                    </div>
                </div>
            </div>

        </section>




@endsection
