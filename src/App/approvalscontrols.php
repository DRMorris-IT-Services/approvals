<?php

namespace duncanrmorris\approvals\App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class approvalscontrols extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'assay_admin', 'assay_view', 'assay_add', 'assay_del', 'assay_edit',
    ];
}
