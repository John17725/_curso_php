@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete Report {{ $report->id }}</h1>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/expense_reports">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/expense_reports/{{ $report->id }}" method="POST">
                    {{-- CSRF GENERA EL TOKEN DE SESION Y SEGURIDAD PARA EVITAR EL 419 --}}
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>    
        </div>
    </div>
@endsection