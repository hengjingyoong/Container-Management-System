@extends('layouts.app')

@section('title', '| Create New Container')

@section('stylesheets')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Container</h1>
            <hr>
            {!! Form::open(['route' => 'container.store']) !!}
            {{ Form::label('customer_id', 'Customer:', ['class' => 'required', 'style' => 'margin-top:20px;']) }}
            <select class="form-control" name="customer_id" style="width:450px;" required>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>


            {{ Form::label('volume', 'Container Volume (m3):', ['class' => 'form-spacing-top required']) }}
            {{ Form::text('volume', null, [
                'class'         => 'form-control',
                'required'      => ''
            ]) }}

            {{ Form::label('weight', 'Container Weight (kg):', ['class' => 'form-spacing-top required']) }}
            {{ Form::text('weight', null, [
                'class'         => 'form-control',
                'required'      => ''
            ]) }}

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
            {{ Form::text('shipping_date', '', array('class' => 'datepicker', 'style' => 'margin-left:30px;margin-top:20px;')) }}

            {{ Form::label('arrival_date', 'Arrival Date:', ['class' => 'required', 'style' => 'margin-left:70px;margin-top:20px;']) }}
            {{ Form::text('arrival_date', '', array('class' => 'datepicker', 'style' => 'margin-left:30px;margin-top:20px;')) }}

            <div class="row" style="margin-top:30px;">
                <div class="col-md-6">
                    <a href="{{ route('container.index') }}" class="btn btn-primary btn-lg btn-block">Go Back</a>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-lg btn-block">
                       Create Container
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