<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use DB;
use PDO;
use Illuminate\Http\Request;

class ConfirmController extends Controller {

    public function get (Request $request) {

        $dbh = DB::connection()->getPdo();

        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        if(isset($_GET['token'])){
            $token = $_GET['token'];
        }

        $query = $dbh->query('SELECT registration_limit from jikkenb.user where id='.$id.', token='.$token.'');
        $data = time();
        $limit = $request->$query;

        if($date<=$limit) {
            return $result['success'] = true;
            $update = $dbh->query('UPDATE jikkenb.users set registered=false where id='.$id.'');
        }
        else {
            return ['success'=>false];
        }

    }
}
