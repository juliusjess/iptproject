@extends('layouts.app')

@section('content')



    <div class="container mt-4 w-50 border ">
        <h1 class="text-center">Add new Car</h1>


        @if($message = Session::get('success'))


        <div class="alert alert-success alert-block text-center">
            {{-- <button type="button" class="close" data-dismiss="alert">X</button> --}}
                <strong>{{ $message }}</strong>
        </div>


        @endif


        {!! Form::open(['url' => ['store-car'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('make','Make') }}
                {{ Form::text('make',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('model','Model') }}
                {{ Form::text('model',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('year','Year') }}
                {{ Form::text('year',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('plate_no','Plate Number') }}
                {{ Form::text('plate_no',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group text-center shadow-none">
                {!! Form::button('Add', ['type' => 'submit', 'class' => 'btn btn-success btn-block']) !!}

            </div>
        {!! Form::close() !!}

    </div>


@endsection
