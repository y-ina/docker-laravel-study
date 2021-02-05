<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class SampleComposer {

    public function compose(View $view)
    {
        $view->with('key', number_format($view->getData()['key'], 2, '.', ','));
    }
}
