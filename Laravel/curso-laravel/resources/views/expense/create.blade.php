@extends('layouts.base')
@section('content')
    <div class="row">
        <div class="col">
            <h1>New Expense</h1>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/expense_reports/{{ $report->id }}">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <form action="/expense_reports/{{ $report->id }}/expenses" method="POST">
                    {{-- CSRF GENERA EL TOKEN DE SESION Y SEGURIDAD PARA EVITAR EL 419 --}}
                    @csrf
                    <div class="form-group">
                        <label for="description">Description: </label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Type a description" value="{{ old('description') }}">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount: </label>
                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Type an amount" value="{{ old('amount') }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>    
        </div>
    </div>
@endsection