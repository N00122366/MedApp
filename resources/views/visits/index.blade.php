@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Books (Admin view)</div>

                <div class="card-body">
                    <a href="{{ route( 'visits.create' ) }}">Add</a>
                    <table>
                        <thead>
                            <tr>
                                <th>doctorId</th>
                                <th>patientId</th>
                                <th>visitDate</th>
                                <th>visitTime</th>
                                <th>visitCost</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visits as $visit)
                            <tr>
                                <td>{{ $visit->doctorId }}</td>
                                <td>{{ $visit->patientId }}</td>
                                <td>{{ $visit->visitDate }}</td>
                                <td>{{ $visit->visitTime }}</td>
                                <td>{{ $visit->visitCost }}</td>
                                <td>
                                    <a href="{{ route('visits.show', $visit ) }}">View</a>
                                    <a href="{{ route('visits.edit', $visit) }}">Edit</a>
                                    <form action="{{ route('visits.destroy', $visit)}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
