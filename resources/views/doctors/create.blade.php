@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create New Doctor</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('doctors.store' )}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" value="{{ old('name') }}" /></td>
                                    <td>{{ ($errors->has('name')) ? $errors->first('name') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><input type="text" name="address" value="{{ old('address') }}" /></td>
                                    <td>{{ ($errors->has('address')) ? $errors->first('address') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="email" value="{{ old('email') }}" /></td>
                                    <td>{{ ($errors->has('email')) ? $errors->first('email') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><input type="text" name="phone" value="{{ old('phone') }}" /></td>
                                    <td>{{ ($errors->has('phone')) ? $errors->first('phone') : "" }}</td>
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