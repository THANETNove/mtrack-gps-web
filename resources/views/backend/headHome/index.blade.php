@extends('layouts.app')

@section('content')
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Head Home Table</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">ภาพ</th>
                                        <th scope="col">รายละเอียด</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($dataHeadHomes as $data)
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset($data->image) }}" alt="Image" class="img-fluid"
                                                    width="300" height="200">

                                            </td>
                                            <td>
                                                {!! $data->details !!}

                                            </td>

                                            <td><span><a href="{{ url('head-home-edit', $data->id) }}"><i
                                                            class="fa fa-pencil color-muted m-r-5"></i>
                                                    </a></span>
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
        <!-- #/ container -->
    </div>
@endsection
