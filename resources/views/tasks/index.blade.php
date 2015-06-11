@extends('master')

@section('content')
{!! $comment !!}
<table class="table">
	@foreach ($tasks as $task)
		<tr>
			<td> {!! $task->name !!}</td>
			<td> {!! $task->description !!}</td>
			<td> {!! $task->status !!}</td>
		</tr>
	@endforeach
</table>
@stop