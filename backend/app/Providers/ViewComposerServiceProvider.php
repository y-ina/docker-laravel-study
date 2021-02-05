<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider{

    public function boot()
    {
        View::composer(
            'sample.viewCompose', 'App\Http\ViewComposers\SampleComposer'
        );

    }

    public function register()
    {
    }
}