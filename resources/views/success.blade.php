@extends('layouts/layout')

@section('title', 'Detail of the task')

@section('main')
	<div class="task-list">
        <p>{{ $task->title }}</p>
		<p>{{ $task->description }}</p>
		<p>{{ $task->created_at->format('d M Y')}}</p>

	</div>
	<div><a href="/task/delete/{{$task->id}}">Supprimer</a></div>
@endsection