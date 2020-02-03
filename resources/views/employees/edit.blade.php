@extends('master')

@section('title','Company create')

@section('content')

<h1>Edit employee</h1>

  @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      <ul>
        @foreach ($errors->all() as $error)

          <li>{{ $error }}</li>

        @endforeach

      </ul>
    </div>
  @endif

  <form method="post" action="/employees/{{ $employee->id }}">
    <input type="hidden" value="{{ $employee->company_id }}" name="company_id">
    @method('PATCH')
    @csrf

		<div class="form-group">

      <div class="row">
        <div class="col-sm">
    			<label for="name">First name</label>
      		<input class="form-control" id="firstname" value="{{ $employee->firstname }}" type="text" name="firstname" placeholder="First name of employee" class="{{ $errors->has('name') ? 'alert-danger' : '' }}">
        </div>

        <div class="col-sm">
          <label for="lastname">Last name</label>
          <input class="form-control" id="lastname" value="{{ $employee->lastname }}" type="text" name="lastname" placeholder="Last name of employee" class="{{ $errors->has('lastname') ? 'alert-danger' : '' }}">
        </div>
      </div>

      <div class="row">
        <div class="col-sm">
          <label for="email">Email</label>
          <input class="form-control" id="email" value="{{ $employee->email }}" type="text" name="email" placeholder="Email of employee" class="{{ $errors->has('email') ? 'alert-danger' : '' }}">
        </div>
        <div class="col-sm">
          <label for="phone">Phone</label>
          <input class="form-control" id="phone" value="{{ $employee->phone }}" type="text" name="phone" placeholder="Phone of employee" class="{{ $errors->has('phone') ? 'alert-danger' : '' }}">
        </div>
      </div>
  	</div>
      <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Cancel</a>
      <button class="btn btn-outline-danger" type="submit">Update</button>
  </form>


@endsection