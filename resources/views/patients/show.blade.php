@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Patient details</div>

                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $patient->name }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ $patient->address }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $patient->phone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $patient->email }}</td>
                            </tr>
                            <tr>
                                <td>Insurance</td>
                                <td>{{ $patient->insurance }}</td>
                            </tr>
                            <tr>
                                <td>Company Name</td>
                                <td>{{ $patient->companyName }}</td>
                            </tr>
                            <tr>
                                <td>Policy Number</td>
                                <td>{{ $patient->policyNumber }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
