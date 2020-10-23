<?php

namespace duncanrmorris\approvals\App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class approvals extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'approval_id',
        'approval_name',
        'approver1_name',
        'approver1_email',
        'approver2_name',
        'approver2_email',
        'approver3_name',
        'approver3_email',
        'approver4_name',
        'approver4_email',
        'approval_status'
        
    ];
}
