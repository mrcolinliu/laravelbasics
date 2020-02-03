@extends('master')

@section('title','Company create')

@section('content')

  <div class="container">

  <h1>Company edit</h1>

  @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      <ul>
        @foreach ($errors->all() as $error)

          <li>{{ $error }}</li>

        @endforeach

      </ul>
    </div>
  @endif

  <form method="post" action="/company/{{ $company->id }}">
    {{-- Tells Laravel this is a PATCH submit not POST --}}
    @method('PATCH')
    @csrf

		<div class="form-group">
			<label for="name">Name</label>
  		<input id="name" value="{{ $company->name }}" type="text" name="name" placeholder="Name of company" class="form-control {{ $errors->has('name') ? 'alert-danger' : '' }}">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input id="email" value="{{ $company->email }}" type="text" name="email" placeholder="Email of company" class="form-control {{ $errors->has('email') ? 'alert-danger' : '' }}">
    </div>
    <div class="form-group">
      <label for="website">Website</label>
      <input id="website" value="{{ $company->website }}" type="text" name="website" placeholder="Website of company" class="form-control {{ $errors->has('website') ? 'alert-danger' : '' }}">
  	</div>
      <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Cancel</a>
      <button class="btn btn-outline-danger" type="submit">Update</button>
  </form>

  </div>

@endsection