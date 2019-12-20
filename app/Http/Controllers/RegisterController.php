<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use DB;
use PDO;
use Illuminate\Http\Request;

class RegisterController extends Controller {
    public function post (Request $request) {
        $dbh = DB::connection()->getPdo();
        $sql = 'SELECT id from jikkenb.users where email=?';
        $query = $dbh->prepare($sql);
        $email = $request->input('email');
        $query->execute([$email]);

        $token = sha1(uniqid());
        $limit = strtotime('+1 day');

        if($query->fetch()){
            return ['success' => false];
        }
        else{
            $sql = 'INSERT INTO jikkenb.users (name, email, password_hash, registration_token, registration_limit, registered, removed) values (?,?,?,?,?,false,false)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$request->input('name'),$email,sha1($request->input('password')),$token,$limit]);
            $result = $dbh->query('SELECT id from jikkenb.users order by id desc limit 1');
            $id = $result->fetch()['id'];
            var_dump($id);
            mb_send_mail($email,'認証メール',"http://localhost/api/v1/register/confirm?id=$id&token=$token",'From: a@a.a');
            return ['success' => true];
        }
    }
}
