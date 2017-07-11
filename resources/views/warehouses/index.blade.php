@extends('layouts.app')

@section('title', '| Warehouses')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1>Warehouses</h1>
            </div>

            <div class="col-md-9" style="margin-top:36px;">
                <a href="{{ route('warehouse.create') }}"  style="font-size:15px;">Create New Warehouse</a>
            </div>
        </div>
        <hr>

        @if(count($warehouses) == 0)
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
                            <th class="col-md-1">ID</th>
                            <th class="col-md-3">Warehouse Name</th>
                            <th class="col-md-3">Location</th>
                            <th class="col-md-5"></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($warehouses as $warehouse)
                            <tr>
                                <th>{{ $warehouse->id }}</th>
                                <td>{{ $warehouse->name }}</td>
                                <td>{{ $warehouse->location }}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('warehouse.edit', $warehouse->id) }}">Edit</a> |
                                        <div style="display:inline-block;">
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['warehouse.destroy', $warehouse->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
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
                        {!! $warehouses->links() !!}
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
            var result = confirm("Are you sure you want to delete the warehouse?");
            return result ? true : false;
        }
    </script>
@endsection
