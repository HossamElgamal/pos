@extends('layouts.dashboard.master')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('site.dashboard')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">  @lang('site.welcome') </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title"></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">


                    <form name="cmsForm" id="cmsForm"
                    >

                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title"
                                >
                            </div>
                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" name="url" class="form-control" id="url" placeholder="Enter URL"
                                >
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter Description">

                                    </textarea>
                            </div>
                            <div class="form-group">
                                <label for="url">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Enter Meta Title"
                                >

                            </div>
                            <div class="form-group">
                                <label for="url">Meta Description</label>
                                <input type="text" name="meta_description" class="form-control" id="meta_description" placeholder="Enter Meta Description"
                                >
                            </div>
                            <div class="form-group">
                                <label for="url">Meta Keywords</label>
                                <input type="text" name="meta_keywords" class="form-control" id="meta_keywords" placeholder="Enter Meta Keywords"
                                >
                            </div>
                        </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <!-- /.row -->


                    <!-- /.row -->
                </div>
                <!-- /.card-body -->

            </div>
        </div>
    </section>


@endsection
