<?php

namespace duncanrmorris\approvals\Http\Controllers;

use Illuminate\Routing\Controller;

use duncanrmorris\approvals\App\approvals;
use duncanrmorris\approvals\App\approvalscontrols;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ApprovalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(approvals $approvals, approvalscontrols $approvalscontrols)
    {
        //

        return view('approvals::index',[
            'approvals' => $approvals->paginate(15),
            'controls' => $approvalscontrols->where('user_id',Auth::user()->id)->get(),
            'count' => $approvalscontrols->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $approval_id = Str::random(60);

        approvals::create([
            'approval_id' => $approval_id,
            'approval_name' => $request['approval_name'],
            'approver1_name' => $request['approver1_name'],
            'approver1_email' => $request['approver1_email'],
            'approver2_name' => $request['approver2_name'],
            'approver2_email' => $request['approver2_email'],
            'approver3_name' => $request['approver3_name'],
            'approver3_email' => $request['approver3_email'],
            'approver4_name' => $request['approver4_name'],
            'approver4_email' => $request['approver4_email'],
            'approval_status' => 'Pending Approval',
        
        ]);

        return back()->withStatus(__('Approval Successfully Created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\approvals  $approvals
     * @return \Illuminate\Http\Response
     */
    public function show(approvals $approvals, $id)
    {
        //
        return view('approvals::view',[
            'approvals' => $approvals->where('approval_id', $id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\approvals  $approvals
     * @return \Illuminate\Http\Response
     */
    public function edit(approvals $approvals, $id)
    {
        //
        return view('approvals::edit',[
            'approvals' => $approvals->where('approval_id', $id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\approvals  $approvals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, approvals $approvals, $id)
    {
        //
        approvals::where('approval_id', $id)->update([
            'approval_name' => $request['approval_name'],
            'approver1_name' => $request['approver1_name'],
            'approver1_email' => $request['approver1_email'],
            'approver2_name' => $request['approver2_name'],
            'approver2_email' => $request['approver2_email'],
            'approver3_name' => $request['approver3_name'],
            'approver3_email' => $request['approver3_email'],
            'approver4_name' => $request['approver4_name'],
            'approver4_email' => $request['approver4_email'],
            'approval_status' => $request['approval_status'],
        
        ]);
        

        return back()->withStatus(__('Approval Successfully Updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\approvals  $approvals
     * @return \Illuminate\Http\Response
     */
    public function destroy(approvals $approvals, $id)
    {
        //
        approvals::where('approval_id', $id)->delete();
       
        return redirect('/approvals')->withDelete(__('Approval Successfully Deleted.'));
    }
}
