<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use DB;
use PDO;
use Illuminate\Http\Request;

class ConfimController extends Controller {

    public function get (Request $request) {

        $dbh = DB::connection()->getPdo();

        $sql = 'SELECT registration_token from jikkenb.user ';
        $data = time();
        $token = $request->queryt($sql);

        if($date<=$token) {
            return $result['success'] = true;
        }
        else {
            return ['success'=>false];
        }

    }
}
