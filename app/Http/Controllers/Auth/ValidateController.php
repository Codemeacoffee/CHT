<?php

namespace CHT\Http\Controllers\Auth;

use CHT\Admin;
use Illuminate\Contracts\Encryption\DecryptException;
use CHT\Http\Controllers\Controller;

class ValidateController extends Controller
{

    protected function is_logged()
    {
            $value = session()->get('adminSession');
            try{
                $emailCrypt = decrypt($value['idAdmin']);
            }catch (DecryptException $e){
                return false;
            }
                $user = Admin::where('email', $emailCrypt)->first();
                if($user!= null && ($user->_session =! null)){
                    if($value['value'] = $user->_session){
                        return $user;
                    }
            }else{
                    return abort(403, "Forbidden");
                }
        }
}


