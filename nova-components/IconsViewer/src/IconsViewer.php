<?php

namespace Otwell\IconsViewer;

use Illuminate\Http\Request;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class IconsViewer extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('icons-viewer', __DIR__.'/../dist/assets/tool.js');
        // Nova::style('icons-viewer', __DIR__.'/../dist/assets/tool.css');
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function menu(Request $request)
    {
        //
    }
}
