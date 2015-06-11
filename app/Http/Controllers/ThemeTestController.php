<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Theme;

class ThemeTestController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function show($theme)
    {
        $themes = Theme::getList();

        Theme::init($theme);

        return view('hello', compact('themes'));
    }

}
