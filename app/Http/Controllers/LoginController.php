<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Role;
use DB;
use App\User;
class LoginController extends Controller
{
    
    use AuthenticatesUsers;

    protected $username = 'username';

    
    protected $redirectTo = '/dashboard';

    protected $guard = 'web';

    public function getLogin(){

        
    	if (Auth::guard('web')->check())
    	{
    		 if( Auth::User()->role['group_name'] == 'Administrator' )
                {
                    return Redirect()->route('dashboard');
                }

               if( Auth::User()->role['name'] == 'Staff' )
                {
                      return Redirect()->route('staff_dashboard');
                }
                if( Auth::User()->role['name'] == 'Management' )
                {
                      return Redirect()->route('management_dashboard');
                }

                  if( Auth::User()->role['name'] == 'Doctor' )
                {
                      return Redirect()->route('doctor-dashboard.index');
                }
              
           
    	}
    	return view('login');
    }
    public function postLogin(Request $request)
    {
    	// $auth = Auth::guard('web')->attempt(['uname'=>$request->username,'pword'=>$request->password,'active'=>1]);

        $user = DB::table('users')->where('users.uname', '=',$request->username)->where('users.pword', '=',$request->password)->first();
    	if(!empty($user))
    	{
             auth()->loginUsingId($user->id);

            if( Auth::User()->roles[0]['group_name'] == 'Administrator' )
                {
                      return Redirect()->route('dashboard');
                }

               if(Auth::User()->roles[0]['name'] == 'Staff')
                {
                      return Redirect()->route('staff-dashboard');
                }
       

    		return redirect()->route('dashboard');
    	}
    	return redirect()->route('/');
    }

    public function getLogout()
    {
    	Auth::logout();
    	return redirect()->route('/'); 
    }
}
