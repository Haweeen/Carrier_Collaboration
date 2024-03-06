@extends('layouts.layoutMaster')

@section('title', 'Carriers')

@section('content')
<div class="container">
  <h1>Carriers</h1>

  @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif

  <a href="{{ route('carriers.create') }}" class="btn btn-primary mb-3">Register New Carrier</a>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title mb-0">Carriers</h3>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-vertical">
        <thead>
          <tr>
            <th>Company Name</th>
            <th>Company Address</th>
            <th>Contact Person's Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Carrier Description</th>
            <th>Carrier Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($carriers as $carrier)
          <tr>
            <td>{{ $carrier->name }}</td>
            <td>{{ $carrier->address }}</td>
            <td>{{ $carrier->contact_name }}</td>
            <td>{{ $carrier->email }}</td>
            <td>{{ $carrier->phone }}</td>
            <td>{{ $carrier->description }}</td>
            <td>
              @if ($carrier->image)
              <img src="{{ asset('storage/' . $carrier->image) }}" alt="Carrier Image" width="100">
              @else
              No Image
              @endif
            </td>
            <td>
              <a href="{{ route('carriers.show', $carrier->id) }}" class="btn btn-primary">View</a>
              @if(auth()->id() == $carrier->user_id)
              <a href="{{ route('carriers.edit', $carrier->id) }}" class="btn btn-secondary">Edit</a>
              <form action="{{ route('carriers.destroy', $carrier->id) }}" method="POST" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                  onclick="return confirm('Are you sure you want to delete this carrier?')">Delete</button>
              </form>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  {{ $carriers->links() }}
</div>
@endsection