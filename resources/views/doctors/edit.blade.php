@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Doctor</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('doctors.update', $doctor)}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" value="{{ old('name', $doctor->name) }}" /></td>
                                    <td>{{ ($errors->has('name')) ? $errors->first('name') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><input type="text" name="address" value="{{ old('address', $doctor->address) }}" /></td>
                                    <td>{{ ($errors->has('address')) ? $errors->first('address') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><input type="text" name="phone" value="{{ old('phone', $doctor->phone) }}" /></td>
                                    <td>{{ ($errors->has('phone')) ? $errors->first('phone') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="email" value="{{ old('email', $doctor->email) }}" /></td>
                                    <td>{{ ($errors->has('email')) ? $errors->first('email') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Start Date</td>
                                    <td><input type="date" name="start_date" value="{{ old('start_date') }}" /></td>
                                    <td>{{ ($errors->has('start_date')) ? $errors->first('start_date') : "" }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" value="Store">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
