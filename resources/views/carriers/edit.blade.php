@extends('layouts.layoutMaster')

@section('title', 'Edit Carrier')

@section('content')
<div class="container">
  <h1>Edit Carrier</h1>

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
      <form action="{{ route('carriers.update', $carrier->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
          <label>Company Name</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
            value="{{ $carrier->name }}" required>
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label>Company Address</label>
          <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
            value="{{ $carrier->address }}" required>
          @error('address')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label>Contact Person's Name</label>
          <input type="text" name="contact_name" class="form-control @error('contact_name') is-invalid @enderror"
            value="{{ $carrier->contact_name }}" required>
          @error('contact_name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label>Email</label>
          <input type="email" name="email" placeholder="name@gmail.com"
            class="form-control @error('email') is-invalid @enderror" value="{{ $carrier->email }}" required>
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label>Phone</label>
          <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
            value="{{ $carrier->phone }}" required>
          @error('phone')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label>Carrier Description</label>
          <textarea name="description" class="form-control @error('description') is-invalid @enderror"
            required>{{ $carrier->description }}</textarea>
          @error('description')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label>Carrier Image</label>
          @if ($carrier->image)
          <div class="mb-2">
            <img src="{{ asset('storage/' . $carrier->image) }}" alt="Carrier Image" width="100">
          </div>
          @endif
          <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
          @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('carriers.index') }}" class="btn btn-secondary">Cancel</a>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Carrier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this carrier?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form action="{{ route('carriers.destroy', $carrier->id) }}" method="POST" style="display: inline-block">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection