@extends('layouts.app')
@section('content')

<div class="container mt-1">
    <table class="table border table-striped">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Make</th>
            <th scope="col">Model</th>
            <th scope="col">Year</th>
            <th scope="col">Plate Number</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cars as $list)
                <tr>
                    <td>{{ $list->make }}</td>
                    <td>{{ $list->model }}</td>
                    <td>{{ $list->year }}</td>
                    <td>{{ $list->plate_no }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>




@endsection
