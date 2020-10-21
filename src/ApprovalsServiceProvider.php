<?php
namespace duncanrmorris\approvals;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Controller;
use App\User;


class ApprovalsServiceProvider extends ServiceProvider

{
    
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','approvals');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        
    }

    public function register()
    {
        
    }
}

