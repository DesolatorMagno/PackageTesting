@extends('layout.master')
@section('content')
<div>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->last }}</td>
                <td>{{ $user->twitter }}</td>
                <td>
                    <form action="{{ route('table.del.destroy', ['id' => $user->id ]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <span>España</span>
</div>
<a href="{{ route('home')}}" class="btn btn-info btn-lg">Back</a>
@endsection
@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
@include('js-utilities::form.delete-row', ['msgTitle' => 'Eliminar usuario?'])
@endpush
