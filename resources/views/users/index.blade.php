@extends('layoutdashboard')

@section('content')

    @if (session('message'))
        <div class="alert alert-danger">{{ session('message') }}</div>
    @endif
    <div class="card">
        {{-- {{ Auth::id() }} --}}
  <div class="card-header">
    <a href="{{ url('/users/create') }}" class="btn btn-primary">ADD</a>
  </div>
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @php
        $no = 1;
    @endphp

    @foreach ($users as $users)
    <tr>
      <th scope="row">1</th>
      <td>{{ $users->name }}</td>
      <td>{{ $users->email }}</td>
      <td>
        <a href="{{ url('users/'.$users->id .'/edit') }}" class="btn btn-warning">Edit</a>

        <form action="{{ url('users/'. $users->id) }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure');">Delete</button>

        </form>

      </td>
    </tr>
        @endforeach
  </tbody>
</table>
  </div>
</div>
@endsection