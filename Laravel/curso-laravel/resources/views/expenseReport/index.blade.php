@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Reports</h1>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="/expense_reports/create">New Report</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach ($expenseReports as $expenseReport)
                        <tr>
                            {{-- <td>{{ $expenseReport->title }}</td> --}}
                            <td><a  href="/expense_reports/{{ $expenseReport->id }}">{{ $expenseReport->title }}</a></td>
                            <td><a class="btn btn-warning" href="/expense_reports/{{ $expenseReport->id }}/edit">Edit</a></td>
                            <td><a class="btn btn-danger" href="/expense_reports/{{ $expenseReport->id }}/confirmDelete">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>    
        </div>
    </div>
</div>
@endsection