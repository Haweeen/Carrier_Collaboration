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
      <h3 class="card-title">List of Carriers</h3>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-vertical">
        <tbody>
          <tr>
            <th>Company Name</th>
            @foreach ($carriers as $carrier)
            <td>{{ $carrier->name }}</td>
            @endforeach
          </tr>
          <tr>
            <th>Company Address</th>
            @foreach ($carriers as $carrier)
            <td>{{ $carrier->address }}</td>
            @endforeach
          </tr>
          <tr>
            <th>Contact Person's Name</th>
            @foreach ($carriers as $carrier)
            <td>{{ $carrier->contact_name }}</td>
            @endforeach
          </tr>
          <tr>
            <th>Email</th>
            @foreach ($carriers as $carrier)
            <td>{{ $carrier->email }}</td>
            @endforeach
          </tr>
          <tr>
            <th>Phone</th>
            @foreach ($carriers as $carrier)
            <td>{{ $carrier->phone }}</td>
            @endforeach
          </tr>
          <tr>
            <th>Carrier Description</th>
            @foreach ($carriers as $carrier)
            <td>{{ $carrier->description }}</td>
            @endforeach
          </tr>
          <tr>
            <th>Carrier Image</th>
            @foreach ($carriers as $carrier)
            <td>
              @if ($carrier->image)
              <img src="{{ asset('storage/' . $carrier->image) }}" alt="Carrier Image" width="100">
              @else
              No Image
              @endif
            </td>
            @endforeach
          </tr>
          <tr>
            <th>Action</th>
            @foreach ($carriers as $carrier)
            <td>
              <a href="{{ route('carriers.show', $carrier->id) }}" class="btn btn-primary">View</a>
              <a href="{{ route('carriers.edit', $carrier->id) }}" class="btn btn-secondary">Edit</a>
              <form action="{{ route('carriers.destroy', $carrier->id) }}" method="POST" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                  onclick="return confirm('Are you sure you want to delete this carrier?')">Delete</button>
              </form>
            </td>
            @endforeach
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  {{ $carriers->links() }}
</div>
@endsection