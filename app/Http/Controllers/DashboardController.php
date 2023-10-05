<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return  view('dashboard.dashboard');
    }
    //<form action="/proseslogin" method="post">
        //<!-- Isi formulir login di sini -->
    //<input type="text" name="username" placeholder="Username">
   // <input type="password" name="password" placeholder="Password">
   // <button type="submit">Login</button>
   // </form>
}
