<?php

namespace App\Http\Controllers;
use App\users_admins;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
class pageController extends Controller
{
	
    private $user;
	public function __construct(users_admins $users){
		$this->user = $users;
	}

    public function getUser(Request $req) {

        $query = [];
        $f_mail = $req->get('mail');
        $f_address = $req->get('address');
        $f_phone = $req->get('phone');
        $query=[['mail_address','like','%'.$f_mail.'%'],['address','like','%'.$f_address.'%']];
        if(isset($query)) {
            $user = DB::table('users_admins')->where($query)->paginate(20);
        }
    	return view('view_user',compact('user'));
    }

    public function getRegister() {
        return view('view_addUser');
    }

    public function postRegister(userRequest $user_req)  {
        $dataCreate = [];
        $dataCreate = [
            'mail_address' => $user_req->mail_address,
            'address' => $user_req->address,
            'password' => bcrypt($user_req->password),
            'phone' => $user_req->number,
        ];
        $user = $this->user->create($dataCreate);
        
        if (isset($user)) {
            session()->flash('thanhcong','Thêm mới người dùng thành công');
            return redirect()->route('user');
        }
    }

}
