@extends('admin.admin_layouts')

@section('admin_content')

    <div class="sl-mainpanel">
        <div class="sl-pagebody">

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Message</h6>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><strong>User</strong> Information</div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th> Name: </th>
                                        <th> {{ $message->name }} </th>
                                    </tr>

                                    <tr>
                                        <th> Phone: </th>
                                        <th> {{ $message->phone }} </th>
                                    </tr>

                                    <tr>
                                        <th> Payment Type: </th>
                                        <th>{{ $message->email }} </th>
                                    </tr>

                                </table>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><strong>Message</strong></div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th> Message: </th>
                                        <th>{{ $message->message }} </th>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
