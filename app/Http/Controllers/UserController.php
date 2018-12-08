<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Role;
use App\Staff;
use App\Doctor;
use Redirect;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = DB::table('users') ->join('roles', 'users.role_id', '=', 'roles.id')
        ->select('users.id','users.first_name','users.last_name','users.middle_name','users.email','roles.name' )->paginate(15000); 
        return view('layouts.admin.setup_users',compact('users'),['roles'=>Role::pluck('name','id')]);
    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.setup_users');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        $user_id = User::insertGetId([
        'first_name' => $request->firstname,
         'middle_name' => $request->middlename,
         'last_name' => $request->lastname,
         'email' => $request->email,
         'gender' => $request->genderSelect,
         'address' => $request->address,
         'zip_code' => $request->zipcode,
         'city' => $request->city,
         'role_id'=> $request->roleselect,
         'username' =>  $request->email,
         'password' => bcrypt($request->email),
         'birth_date' => "2017-07-27",
         'active' => 1,
         'remember_token'=>str_random(10)

            ]);



        if($request->roleselect == 5){
            //call method for doctor  with parameter of user_id
              return  $this->postusers_doctor_tb_create($user_id);
        }

        else if($request->roleselect == 3){
            //call method for staff with parameter of user_id
           // return $this->postusersadmin_staff_tb_create($user_id);

           return $this->postusers_staff_tb_create($user_id);
        }

        

        else
        {
            return redirect()->route('ManageUsers.index');
        }

    }

      /**
     * Show the form for editing the specified resource.
     *usersusers
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
         // $edit = User::find($id)->update($request->all());
        //return response()->json($edit);
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

         User::find($id)->delete();
        return response()->json(['done']);
    }


 public function postusers_doctor_tb_create($user_id) 
    {   
         Doctor::insert([
            'users_id' => $user_id,
            ]);

           
            return redirect()->route('ManageUsers.index');
    
    }


     public function postusers_staff_tb_create($user_id) 
    {   
        Staff::insert([
            'users_id' => $user_id,
            ]);

           return redirect()->route('ManageUsers.index');
    
    }
}
