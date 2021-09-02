<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\UserCliente;
use App\Models\Account;

//use mysqli;

include __DIR__.'/../../Middleware/Configuration.php';
require __DIR__.'/../../../../vendor/autoload.php';

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return "hola";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function registro(){
        //return "hola";
        return view('login-register.register');
    }
    //Funcion de registrar
    public function resultregister(Request $request){
        //$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME, DB_PORT);
        $username = $request->username;
        $password = $request->password;
        $vpassword = $request->vpassword;
        $email = $request->email;
        /* Set the join date. */
        $joinDate = date('Y-m-d H:i:s');
        /* Set GM Level. */
        $gmLevel = GM_LEVEL;
        /* Set expansion pack - The Burning Crusade. */
        $expansion = EXPANSION_PACK;
        if($password == $vpassword){
            $cliente = new UserCliente($username);
            $salt = $cliente -> generateSalt();
            $verified = $cliente -> generateVerifier($password);
            $ip = $_SERVER['REMOTE_ADDR'];
            $acount = new Account();
            $acount -> username = $username;
            $acount -> gmlevel = $gmLevel;
            $acount -> sessionkey = '';
            $acount -> v = $verified;
            $acount -> s = $salt;
            $acount -> email = $email;
            $acount -> joindate = $joinDate;
            $acount -> lockedIp = $ip;
            $acount -> failed_logins = 0;
            $acount -> locked = 0;
            $acount -> active_realm_id = 0;
            $acount -> expansion = $expansion;
            $acount -> mutetime = 0;
            $acount -> locale = '';
            $acount -> token = '';
            $acount -> save();
            //mysqli_query($db, "INSERT INTO account (username, gmlevel, v, s, email, joindate, expansion) values ('$username','$gmLevel','$verified','$salt','$email','$joinDate','$expansion');");
            //echo "INSERT INTO account (username, gmlevel, v, s, email, joindate, expansion) values ('$username','$gmLevel','$verified','$salt','$email','$joinDate','$expansion');";
            //echo '<script language="javascript">alert("Registro completado");history.go(-1);</script>';
            echo 'REgistro Completo';
        } else{
            echo '<script language="javascript">alert("Las contraseñas no coinciden");history.go(-1);</script>';
        }
        /*if($password == $vpassword){
            $client = new UserClient($username);
            $salt = $client -> generateSalt();
            $verified = $client -> generateVerifier($password);
        } else{*/
            //echo '<script language="javascript">alert("Las contraseñas no coinciden");history.go(-1);</script>';
        /*}*/
            //return $username.'--'.$password.'--'.$vpassword.'--'.$email.'--'.$joinDate.'--'.$gmLevel.'--'.$expansion.'--';

        }
}
