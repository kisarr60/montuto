<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;


class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        View::composer('back.admin', function ($view) {
                $title = config('titles.' . Route::currentRouteName());
                $view->with(compact('title'));
        });
    }
}
