@extends('layouts.app')

@section('title', '| Containers')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h1>Containers</h1>
            </div>

            <div class="col-md-10" style="margin-top:36px;">
                <a href="{{ route('container.create') }}" style="font-size:15px;">Create New Container</a>
            </div>
        </div>
        <hr>

        @if(count($containers) == 0)
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
                            <th class="col-md-2">Customer Name</th>
                            <th class="col-md-3">Container Volume (m3)</th>
                            <th class="col-md-3">Container Weight (kg)</th>
                            <th class="col-md-2">Shipment ID</th>
                            <th class="col-md-2"></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($containers as $container)
                            <tr>
                                <td>{{ $container->customer->name }}</td>
                                <td>{{ $container->volume }}</td>
                                <td>{{ $container->weight }}</td>
                                <td>{{ $container->shipment->id }}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('container.show', $container->id) }}">Details</a>  |
                                        <a href="{{ route('container.edit', $container->id) }}">Edit</a> |
                                        <div style="display:inline-block;">
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['container.destroy', $container->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
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
                        {!! $containers->links() !!}
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
            var result = confirm("Are you sure you want to delete the container?");
            return result ? true : false;
        }
    </script>
@endsection
