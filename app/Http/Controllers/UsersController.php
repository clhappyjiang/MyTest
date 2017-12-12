<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use Hyancat\Sendcloud\SendCloudFacade as SendCloud;

class UsersController extends Controller
{
    //
    public function  register()
    {
        return view('users.register');
    }

    public function store(UserRegisterRequest $request)
    {
        //保存用户，重定向
        $data = [
            'confirm_code'=>str_random(48),
            'avatar'=>'/images/default-avatar.png'
        ];
        $user = User::create(array_merge($request->all(),$data));
        //send email
        //subject view confirm_code email
        $subject = 'Confirm you email';
        $view = 'email.register';

        $this->sendTo($user,$subject,$view,$data);
        return redirect('/');
    }

    public function confirmEmail($confirm_code)
    {
        $user = User::where('confirm_code',$confirm_code)->first();
        if (is_null($user)){
            return redirect('/');
        }

        $user->is_confirmed = 1;
        $user->confirm_code = str_random(48);
        $user->save();

        return redirect('user/login');
    }

    public function login()
    {
        return view('email/login');
    }

    public function signin(UserLoginRequest $request)
    {
        if (\Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password'),

        ])){
        return redirect('/');
        }
        \Session::flash('user_login_failed','邮箱或密码输入错误');
        return redirect('/user/login')->withInput();
    }


    private function sendTo($user, $subject, $view, $data =[])
    {

//        Mail::to($view,$data,function ($message) use ($user,$subject) {
//            $message->from('example@gmail.com', 'Laravel');
//            $message->to($user->email);
//        });
        SendCloud::send($view,$data,function ($message) use ($user,$subject) {
//            $message->to($user->mail)->subject($subject);
            $message->subject($subject);
            $message->to($user->mail);
        })->success(function ($response) {
        })->failure(function ($response, $error) {
        });

//        Mail::queue($view,$data,function ($message) use ($user,$subject){
//           $message->to($user->mail)->subject($subject);
//        });
    }
    public function logout()
    {
        \Auth::logout();
        return redirect('/');
    }

}
