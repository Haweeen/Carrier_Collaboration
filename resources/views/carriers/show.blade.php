@extends('layouts.layoutMaster')

@section('title', 'Carrier Details')

@section('content')
<div class="container">
  <h1>Carrier Details</h1>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">{{ $carrier->name }}</h5>
      <p class="card-text"><strong>Company Address: </strong>{{ $carrier->address }}</p>
      <p class="card-text"><strong>Contact Person's Name: </strong>{{ $carrier->contact_name }}</p>
      <p class="card-text"><strong>Email: </strong>{{ $carrier->email }}</p>
      <p class="card-text"><strong>Phone: </strong>{{ $carrier->phone }}</p>
      <p class="card-text"><strong>Carrier Description: </strong>{{ $carrier->description }}</p>
      @if ($carrier->image)
      <div class="mb-2">
        <img src="{{ asset('storage/' . $carrier->image) }}" alt="Carrier Image" width="100">
      </div>
      @endif
    </div>
  </div>
  <a href="{{ route('carriers.index') }}" class="btn btn-primary mb-3">Back to List</a>
</div>
@endsection