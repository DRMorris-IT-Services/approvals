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

        

        return back()->withStatus(__('Approval Successfully Created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\approvals  $approvals
     * @return \Illuminate\Http\Response
     */
    public function show(approvals $approvals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\approvals  $approvals
     * @return \Illuminate\Http\Response
     */
    public function edit(approvals $approvals)
    {
        //
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

       
        return back()->withDelete(__('Approval Successfully Deleted.'));
    }
}
