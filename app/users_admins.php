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
        'role',
        'ClassRoom_id',
        'deleted_at',
        'created_at',
        'updated_at'

    ];
    public function scopeUserSearch($query ,$req) {

        $array = [];
        $f_mail = $req->mail_address;
        $f_address = $req->address;
        $f_phone = $req->phone;
        $array=[['mail_address','like','%'.$f_mail.'%'],['address','like','%'.$f_address.'%']];

        return $query->where($array);
    }
}
