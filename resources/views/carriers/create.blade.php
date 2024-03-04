@extends('layouts.layoutMaster')

@section('title', 'Register New Carrier')

@section('content')
<div class="container">
  <h1>Register New Carrier</h1>

  @if ($errors->any())
  <div class="alert alert-danger mb-3">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <a href="{{ route('carriers.index') }}" class="btn btn-danger mb-3">Back</a>

  <div class="card">
    <div class="card-body">
      <form action="{{ route('carriers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
          <label>Company Name</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name') }}" required>
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label>Company Address</label>
          <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
            value="{{ old('address') }}" required>
          @error('address')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label>Contact Person's Name</label>
          <input type="text" name="contact_name" class="form-control @error('contact_name') is-invalid @enderror"
            value="{{ old('contact_name') }}" required>
          @error('contact_name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label>Email</label>
          <input type="email" name="email" placeholder="name@gmail.com"
            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label>Phone</label>
          <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
            value="{{ old('phone') }}" required>
          @error('phone')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label>Carrier Description</label>
          <textarea name="description" class="form-control @error('description') is-invalid @enderror"
            required>{{ old('description') }}</textarea>
          @error('description')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label>Carrier Image</label>
          <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required>
          @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection