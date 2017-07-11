@extends('layouts.app')

@section('title', '| Edit Shipment')

@section('stylesheets')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Edit Shipment</h1>
                <hr>
                {!! Form::model($shipment,['route' => ['shipment.update', $shipment->id], 'method' => 'PUT']) !!}

                <div class="row">
                    <div class="col-md-3">
                        {{ Form::label('customer_id', 'Customer:') }}
                    </div>
                    <div class="col-md-9">
                        {{ $shipment->customer->name }}
                    </div>
                </div>

                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">
                        {{ Form::label('container_id', 'Container ID:', ['class' => 'form-spacing-top']) }}
                    </div>
                    <div class="col-md-1" style="margin-top: 8px;">
                        <p>{{ $shipment->container_id }}</p>
                    </div>
                    <div class="col-md-9" style="margin-top: 8px;">
                        <strong><a href="{{ route('container.edit', $shipment->container_id) }}">Go Edit</a></strong>
                    </div>
                </div>

                {{ Form::label('source_id', 'Source:', ['class' => 'form-spacing-top required']) }}
                <select class="form-control" name="source_id" style="width:300px;" required>
                    @foreach($warehouses as $warehouse)
                        <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('destination_id', 'Destination:', ['class' => 'form-spacing-top required']) }}
                <select class="form-control" name="destination_id" style="width:300px;" required>
                    @foreach($warehouses as $warehouse)
                        <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('shipping_date', 'Shipping Date:', ['class' => 'required', 'style' => 'margin-top:20px;']) }}
                {{ Form::text('shipping_date', $shipment->shipping_date, array('class' => 'datepicker', 'style' => 'margin-left:30px;margin-top:20px;')) }}

                {{ Form::label('arrival_date', 'Arrival Date:', ['class' => 'required', 'style' => 'margin-left:70px;margin-top:20px;']) }}
                {{ Form::text('arrival_date', $shipment->arrival_date, array('class' => 'datepicker', 'style' => 'margin-left:30px;margin-top:20px;')) }}

                {{ Form::label('status', 'Status:', ['class' => 'form-spacing-top required']) }}
                {{ Form::select('status', ['Pending' => 'Pending',
                                          'Delivering' => 'Delivering',
                                          'Cancelled' => 'Cancelled',
                                          'Delivered' => 'Delivered'
                                         ], null, ['class' => 'form-control', 'style' => 'width: 200px;']) }}

                <div class="row" style="margin-top:30px;">
                    <div class="col-md-6">
                        <a href="{{ route('shipment.index') }}" class="btn btn-primary btn-lg btn-block">Go Back</a>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success btn-lg btn-block">
                            Edit Shipment
                        </button>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <br>
@endsection

@section('scripts')
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $( ".datepicker" ).datepicker();
        });
    </script>
@endsection