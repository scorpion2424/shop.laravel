<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Mail\OrderCompleted;

class UsersController extends Controller
{
    public function index()
    {
        \Mail::to('egg@chicken.com')->send(new OrderCompleted);
    }

}