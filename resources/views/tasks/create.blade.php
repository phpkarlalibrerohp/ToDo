@extends('master')

@section('content')
	{!! Form::open( array('url' => 'tasks'))  !!}
		<div class="form-group">
			{!! Form::label('name', 'Name: '); !!}
			{!!  Form::text('name',null,['class'=>'form-control']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('description', 'Description: '); !!}
			{!!  Form::textarea('description',null,['class'=>'form-control']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('status', 'Status: '); !!}
			{!!  Form::select('status', array(0 => 'Active', 1 => 'InActive'), null, ['class'=>'form-control']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('started_at', 'Started At: '); !!}
			{!!  Form::input('date','started_at', null, ['class'=>'form-control']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('ended_at', 'Ended At: '); !!}
			{!!  Form::input('date','ended_at', null, ['class'=>'form-control']); !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Add Task', array('class' => 'btn btn-primary')); !!}
		</div>
		
	{!! Form::close()  !!}
@stop