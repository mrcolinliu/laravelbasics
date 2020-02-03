@extends('master')

@section('title','Company create')

@section('content')

<h1>Company create</h1>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="btn btn-outline-danger" href="/company/{{ $company->id }}/edit/">Edit</a></p>
  </li>
</ul>

  <div id="company-details">
    <p>{{ $company->name }}</p>
    <p>{{ $company->email }}</p>
    <p>{{ $company->website }}</p>
  </div>

  <div>
      @if ($company->employees->count() > 0)
  <h2>Employees</h2>
  <div>
    <ul>
    @foreach($company->employees as $employee)
      <li><a href="/employees/{{ $employee->id }}/edit">{{ $employee->firstname }}</a>&nbsp;{{ $employee->lastname }}&nbsp;{{ $employee->email }}</li>
    @endforeach
    </ul>
  </div>
  @endif
  <div>


  <h5>Add employee</h5>

  @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      <ul>
        @foreach ($errors->all() as $error)

          <li>{{ $error }}</li>

        @endforeach

      </ul>
    </div>
  @endif

  <form method="post" action="/company/{{ $company->id }}/employees">
    @csrf

		<div class="form-group">

      <div class="row">
        <div class="col-sm">
    			<label for="name">First name</label>
      		<input class="form-control" id="firstname" value="{{ old('firstname') }}" type="text" name="firstname" placeholder="First name of employee" class="{{ $errors->has('name') ? 'alert-danger' : '' }}">
        </div>

        <div class="col-sm">
          <label for="lastname">Last name</label>
          <input class="form-control" id="lastname" value="{{ old('lastname') }}" type="text" name="lastname" placeholder="Last name of employee" class="{{ $errors->has('lastname') ? 'alert-danger' : '' }}">
        </div>
      </div>

      <div class="row">
        <div class="col-sm">
          <label for="email">Email</label>
          <input class="form-control" id="email" value="{{ old('email') }}" type="text" name="email" placeholder="Email of employee" class="{{ $errors->has('email') ? 'alert-danger' : '' }}">
        </div>
        <div class="col-sm">
          <label for="phone">Phone</label>
          <input class="form-control" id="phone" value="{{ old('phone') }}" type="text" name="phone" placeholder="Phone of employee" class="{{ $errors->has('phone') ? 'alert-danger' : '' }}">
        </div>
      </div>
  	</div>
      <button class="btn btn-outline-danger" type="submit">Create</button>
  </form>


@endsection