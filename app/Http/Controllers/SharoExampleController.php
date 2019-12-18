<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use DB;
use PDO;

class SharoExampleController extends Controller {
    public function index () {
        $dbh = DB::connection()->getPdo();
        return json_encode($dbh->query('select * from users')->fetchAll());
    }
}