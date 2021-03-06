<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// IMPORTANTE AGREGAR EL MODEL DE LA BD
use App\Models\ExpenseReport;
use App\Http\Requests\StoreExpenseReports;
use App\Mail\SummaryReport;


class ExpenseReportController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenseReport.index',[
            'expenseReports' => ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpenseReports $request)
    {
        $validate = $request->validated();

        
        $report = new ExpenseReport();
        $report->title = $validate['title'];
        $report->save();
        return redirect('/expense_reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport)
    {
        // $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.show',[
            'report' => $expenseReport
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = ExpenseReport::find($id);
        return view('expenseReport.edit', [
            'report' => $report
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $report = ExpenseReport::find($id);
        $report->title = $request->get('title');
        $report->save();
        return redirect('/expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::find($id);
        $report->delete();
        return redirect('/expense_reports');
    }

    public function confirmDelete($id){
        $report = ExpenseReport::find($id);
        return view('expenseReport.confirmDelete', [
            'report' => $report
        ]);
    }

    public function confirmSendEmail($id){
        $report = ExpenseReport::find($id);
        return view('expenseReport.confirmSendEmail', [
            'report' => $report
        ]);
    }

    public function SendEmail(Request $request, $id){
        $report = ExpenseReport::find($id);
        Mail::to($request->get('email'))->send(new SummaryReport($report));

        return redirect('/expense_reports/'. $id);
    }
}
