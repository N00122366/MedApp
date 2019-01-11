@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Visit Details</div>

                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td rowspan="6"></td>
                            </tr>
                            <tr>
                                <td>Doctor ID</td>
                                <td>{{ $visit->doctorId }}</td>
                            </tr>
                            <tr>
                                <td>Patient ID</td>
                                <td>{{ $visit->patientId }}</td>
                            </tr>
                            <tr>
                                <td>Visit Date</td>
                                <td>{{ $visit->visitDate }}</td>
                            </tr>
                            <tr>
                                <td>Visit Time</td>
                                <td>{{ $visit->visitTime }}</td>
                            </tr>
                            <tr>
                                <td>Visit Cost</td>
                                <td>{{ $visit->visitCost }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
