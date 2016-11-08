<?php
/**
 * Created by PhpStorm.
 * User: hmtma
 * Date: 11/4/2016
 * Time: 10:38 PM
 */

namespace app\Http\Controllers;


class HelloController extends Controller
{

    /**
     * HelloController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return 'Hello world';
    }
}