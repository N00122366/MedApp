@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Patients</div>

                <div class="card-body">
                <a href="{{ route( 'patients.create' ) }}">Add</a>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Insurance</th>
                                <th>Company Name</th>
                                <th>Policy Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                            <tr>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->address }}</td>
                                <td>{{ $patient->phone }}</td>
                                <td>{{ $patient->email }}</td>
                                <td>{{ $patient->insurance }}</td>
                                <td>{{ $patient->companyName }}</td>
                                <td>{{ $patient->policyNumber }}</td>
                                
                                <td>
                                    <a href="{{ route('patients.show', $patient ) }}">View</a>
                                    <a href="{{ route('patients.edit', $patient) }}">Edit</a>
                                    <form action="{{ route('patients.destroy', $patient)}}" method="POST">
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
