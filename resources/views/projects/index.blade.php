@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Title</th>
		      <th scope="col">Description</th>
		      <th scope="col">Due Date</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($projects as $project)
		  	<tr>
		  		<td>{{ $project->id}}</td>
		  		<td>{{ $project->title}}</td>
		  		<td>{{ $project->descrpition}}</td>
		  		<td>{{ $project->due_date}}</td>
		  	</tr>
		  	@endforeach
		  </tbody>
		</table>

		<a btn class="btn-primary" href='/projects'>Add new Project</a>
	</div>
@endsection 