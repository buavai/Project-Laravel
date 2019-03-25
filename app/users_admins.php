<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\userRequest;
class users_admins extends Model
{   
    //protected $table = 'user_admins'; 
    // public function getUser() {
    //     $user = users_admins::select('*')->orderBy('id')->paginate(20);
    //     return $user;
    // }
    //  public function getAdduser() {
    //     $user = DB::select('select * from users_admins');
    //     return $user;
    // }
    // public function postAdduser($req) {

    //     $user = new users_admins;
    //     $user->mail_address=$req->mail_address;
    //     $user->address=$req->address;
    //     $user->password=$req->password;
    //     $user->phone=$req->number;
    //     $user->save();
    // }
    protected $table = 'users_admins';

    protected $fillable = [
        'id',
        'mail_address',
        'address',
        'password',
        'phone',
        'deleted_at',
        'created_at',
        'updated_at'

    ];
}
