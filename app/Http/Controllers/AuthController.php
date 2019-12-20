<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use DB;
use PDO;
use Illuminate\Http\Request;

class AuthController extends Controller {
    public function read (Request $request) {
        /*$dbh = DB::connection()->getPdo();
        return $dbh->query('select  from users')->fetchAll();*/

        $email = $request->query('email');
        $password_hash = $request->query('password_hash');

        $dbh = DB::connection()->getPdo();

        $query = $dbh->prepare('select id, name, email from jikkenb.users where email=? AND password_hash=? AND removed=false');
        $query->execute([$email, $password_hash]);
        $result = $query->fetch();

        if($result){
            $result['success'] = true;
            return $result;
        } else{
            return ['success'=>false];
        }

        //return $request->query('email');
        // ['success' => bool, ...]

    }


}
