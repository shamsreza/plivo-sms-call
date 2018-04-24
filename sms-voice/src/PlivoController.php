<?php
/**
 * Created by PhpStorm.
 * User: GLB-116
 * Date: 4/24/2018
 * Time: 5:41 PM
 */

namespace Plivo\Smsvoice;


use App\Http\Controllers\Controller;

class PlivoController extends Controller
{
    public function index()
    {
        echo 'calling plivo api';
    }
}