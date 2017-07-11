@extends('layouts.app')

@section('title', '| Customers')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h1>Customers</h1>
            </div>

            <div class="col-md-10" style="margin-top:36px;">
                <a href="{{ route('customer.create') }}" style="font-size:15px;">Create New Customer</a>
            </div>
        </div>
        <hr>

        @if(count($customers) == 0)
            <p>No Result...</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        @else
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Customer Name</th>
                            <th class="col-md-3">Location</th>
                            <th class="col-md-5"></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <th>{{ $customer->id }}</th>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->location }}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('customer.edit', $customer->id) }}">Edit</a> |
                                        <div style="display:inline-block;">
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['customer.destroy', $customer->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
                                            {!! Form::button('Delete', array('type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-block')) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="text-center">
                        {!! $customers->links() !!}
                    </div>
                </div>
            </div>
        @endif
    </div>
    <br>
@endsection

@section('scripts')
    <script>
        function ConfirmDelete()
        {
            var result = confirm("Are you sure you want to delete the customer?");
            return result ? true : false;
        }
    </script>
@endsection
