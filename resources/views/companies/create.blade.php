@extends('master')

@section('title','Company create')

@section('content')

  <div class="container">

  <h1>Company create</h1>

  @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      <ul>
        @foreach ($errors->all() as $error)

          <li>{{ $error }}</li>

        @endforeach

      </ul>
    </div>
  @endif

  <form method="post" action="/company/store" enctype="multipart/form-data">
    @csrf

		<div class="form-group">
			<label for="name">Name</label>
  		<input id="name" value="{{ old('name') }}" type="text" name="name" placeholder="Name of company" class="form-control {{ $errors->has('name') ? 'alert-danger' : '' }}">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input id="email" value="{{ old('email') }}" type="text" name="email" placeholder="Email of company" class="form-control {{ $errors->has('email') ? 'alert-danger' : '' }}">
    </div>
    <div class="form-group">
      <label for="website">Website</label>
      <input id="website" value="{{ old('website') }}" type="text" name="website" placeholder="Website of company" class="form-control {{ $errors->has('website') ? 'alert-danger' : '' }}">
  	</div>
    <div class="form-group">
      <label for="logo">Logo</label>
      <input type="file" name="logo" class="form-control">
    </div>

      <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Cancel</a>
      <button class="btn btn-outline-danger" type="submit">Create</button>
  </form>

  </div>

@endsection