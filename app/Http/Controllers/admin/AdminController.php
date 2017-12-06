<?php
/**
 * Created by PhpStorm.
 * User: wilson mani
 * Date: 06-12-2017
 * Time: 16:38
 */

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }

}