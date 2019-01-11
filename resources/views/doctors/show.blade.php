@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Book details</div>

                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $doctor->name }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ $doctor->address }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $doctor->phone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $doctor->email }}</td>
                            </tr>
                            <tr>
                                <td>Start Date</td>
                                <td>{{ $doctor->start_date }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
