<?php

namespace App\Http\Controllers;
use App\classrooms;
use App\users_admins;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Auth;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Events\NewProduct;
class pageController extends Controller
{
	
    private $user;
	public function __construct(users_admins $users){
        //$this->middleware('auth');
		$this->user = $users;
	}

    public function getUser(Request $req) {
        $user = DB::table('users_admins')->get();
        $class = DB::table('classrooms')->get();
        if(!empty($_GET['submit'])){
          $user = users_admins::UserSearch($req)->get();
        }
    	return view('view_user',compact('user','class'));
    }

    public function getRegister() {
        $class = DB::table('classrooms')->get();
        return view('view_addUser',compact('class'));
    }

    public function postRegister(userRequest $user_req)  {
        $dataCreate = [];
        $dataCreate = [
            'mail_address' => $user_req->mail_address,
            'address' => $user_req->address,
            'password' => bcrypt($user_req->password),
            'phone' => $user_req->number,
            'role'=>$user_req->role,
            'ClassRoom_id'=> $user_req->class,
        ];
        $user = $this->user->create($dataCreate);

         // Mail::to($dataCreate['mail_address'])->send(new WelcomeMail($user));
          event(new NewProduct($user));
        if (isset($user)) {
            session()->flash('thanhcong','Thêm mới người dùng thành công');
            return redirect()->route('user');
        }
    }

}
