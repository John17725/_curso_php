@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Report {{ $report->id }} to Email</h1>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/expense_reports">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/expense_reports/{{ $report->id }}/SendEmail" method="POST">
                    {{-- CSRF GENERA EL TOKEN DE SESION Y SEGURIDAD PARA EVITAR EL 419 --}}
                    @csrf
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com" value="{{ old('email')}}">
                    </div>
                    <button type="submit" class="btn btn-success">Send Email</button>
                </form>
            </div>    
        </div>
    </div>
@endsection