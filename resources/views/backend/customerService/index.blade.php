@extends('layouts.app')

@section('content')
    <div class="content-body">

       

        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">บริการ Table</h4>
                        <a href="{{ url('create-customer-service') }}" class="btn mb-3  btn-info"> เพิ่มบริการ</a>

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

                                            <td><span><a href="{{ url('customer-service-edit', $data->id) }}"><i
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
