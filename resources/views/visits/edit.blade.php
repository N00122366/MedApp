@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Visit Information</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('visits.store' )}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table>
                            <tbody>
                                <tr>
                                    <select name="doctorId">
                                            @foreach ($doctors as $doctor)
                                            <option value="{{ $doctor->id }}" {{ (old('doctorId', $doctor->doctorId) == $doctor->id) ? "selected" : "" }} >{{ $doctor->name }}</option>
                                            @endforeach
                                        </select>
                                    <td>{{ ($errors->has('doctorId')) ? $errors->first('doctorId') : "" }}</td>
                                </tr>
                                <tr>
                                    <select name="patientId">
                                            @foreach ($patients as $patient)
                                            <option value="{{ $patient->id }}" {{ (old('patientId', $patient->patientId) == $patient->id) ? "selected" : "" }} >{{ $patient->name }}</option>
                                            @endforeach
                                    </select>
                                    <td>{{ ($errors->has('patientId')) ? $errors->first('patientId') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Visit Date</td>
                                    <td><input type="date" name="visitDate" value="{{ old('visitDate') }}" /></td>
                                    <td>{{ ($errors->has('email')) ? $errors->first('email') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Visit Time</td>
                                    <td><input type="time" name="visitTime" value="{{ old('visitTime') }}" /></td>
                                    <td>{{ ($errors->has('visitTime')) ? $errors->first('visitTime') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Visit Cost</td>
                                    <td><input type="text" name="visitCost" value="{{ old('visitCost') }}" /></td>
                                    <td>{{ ($errors->has('visitCost')) ? $errors->first('visitCost') : "" }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" value="store">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
