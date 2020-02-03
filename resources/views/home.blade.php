@extends('master')

@section('title','Home')

@section('content')


<h1>CRM ss</h1>

<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="btn btn-outline-danger" href="/company/create">Add company</a></p>
	</li>
</ul>

	<table>
		<thead>
			<tr>
			  <th colspan="3">Companies</th>
			</tr>
		</thead>
	  <tbody>
	  	@foreach($companies as $company)
	  		<tr>
	  			<td><a href="/company/{{ $company->id }}">{{$company->name}}</a></td>
	  			<td>{{$company->email}}</td>
	  			<td>{{$company->website}}</td>
	  		</tr>
	  	@endforeach
	  </tbody>
	</table>

	<h5>Additional values for pagination</h5>
	<p>{{ $companies->lastPage() }}</p>


	{{ $companies->links() }}


@endsection