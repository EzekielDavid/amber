@extends('layouts.admin.master')
@section('title', 'Users Setup')
@section('content')
    @parent

<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>User Setup</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                            Home
                        </a>
                    </li>
                </ol>
            </section>
            <section class="content">
     
              <div class="row">

                                    <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                    User Details
                                                </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                   
                                                </span>
                                            </div>
                                            <div class="panel-body">
                                             <form method="POST" class="form-horizontal" action="{{ url('/ManageUsers') }}">
                                             {{ csrf_field() }}
                                                <div class="row">
                             
                                                  
                                                            <div class="form-group col-md-6" >
                                                                <label class="control-label col-md-3" for="firstname">First Name:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" required=""></div>
                                                            </div>
                                                                      <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="middlename">Middle Name:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="middlename"class="form-control" id="middlename" placeholder="Middle Name"></div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="lastname">Last Name:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="lastname"class="form-control" id="lastname" placeholder="Last Name" required=""></div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="inputEmail">Email:</label>
                                                                <div class="col-md-9">
                                                                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required=""></div>
                                                            </div>
                                                    
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3">Gender:</label>
                                                                 <div class="col-md-9">
                                                                <select id="genderSelect" class="form-control select2" name="genderSelect">
                                      
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
            
                                                                </select>
                                
                                                                </div>
                                                            </div>


                                                            <div class="form-group col-md-6">
                                                                 <label class="control-label col-md-3">Date of Birth</label>
                                                                <div class="input-group date form_datetime" data-date="{{Carbon\Carbon::now()}}" " >
                                                                 <input size="16" type="text" value="" id="datetimepicker6" class="form-control" name="medicine_received"  required>
                                                                <span class="input-group-addon ">
                                                                    <span class="glyphicon glyphicon-remove "></span>
                                                                </span>
                                                                <span class="input-group-addon ">
                                                                    <span class="glyphicon glyphicon-th "></span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                           
                               
                             
                               

                                                   
                                                              <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="City">City</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="city" id="City" placeholder="City" required=""></div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="ZipCode">Address:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="address" id="address" placeholder="Address" required=""></div>
                                                            </div>
                        
                                                            

                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="postalAddress">Zip Code:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="zipcode" id="ZipCode" placeholder="Zip Code" required=""></div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="userRole">
                                                                    Select Role
                                                                </label>

                                                                <div class="col-md-9">
                                                                {!!Form::select('id',$roles,null,['id'=>'id','class'=>'form-control select2', 'name'=>'roleselect'])!!}
                                
                                                                </div>
                                                            </div>

                                                            </div>
                                                   

                                             

                                                    <div class="row">
                                                        <hr>
                                                        <div style="float: right" >

                                                           <button type="reset" class="btn btn-default" value="Reset"><span class="glyphicon glyphicon-off" title="Reset" ></span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary" value="Submit"><span class="glyphicon glyphicon-floppy-disk" title="Submit"></span></button>
                                                        </div>
                                                    </div>
                                              
                                                
                                            </form>
                                            </div>
                                        </div>
                                    </div>
              </div>




      
                     
            



            </section>

   <section class="content">
                <div class="row">
                  <div class="col-lg-12">
                        <div class="panel panel-primary filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        Users List
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered" id="table1">
                  <thead>
                                        <tr>

                                            <th>Name</th>
                                            <th>User Type</th>
                                            <th>Email</th>
                                            <th>    </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($users as $key =>$u)
                                        <tr>
                                      
                                            <td>{{ $u->first_name . " " . $u->last_name}}</td>                          
                                            <td>{{ $u->name}}</td>
                                            <td>{{ $u->email}}</td>
                                            

                                             <td>
                                                      
                                                             <div class="col-sm-1">
                                                                    <a href="#{{action('UserController@edit', $u->id)}}">
                                                                         <i class="glyphicon glyphicon-download-alt" data-toggle="modal" data-href="#full-width" href="#full-width data-size="18" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                                                    </a>

                                                                </div>
                                                

                                                                <div class="col-sm-1">
                                                                    <a data-toggle="modal" data-href="#responsive" href="#responsive">

                                                                    <span class="glyphicon glyphicon-eye-open" title="View"></span></a>
                                                                </div> 



                                                                <div class="col-sm-1">
                                                                    <a data-toggle="modal" data-href="#responsive" href="#responsive">

                                                                    <span class="glyphicon glyphicon-trash" title="View"></span></a>
                                                                </div>                                                                                                                                                                                                     
                                            </td>
                                        </tr>
                                        @endforeach
                            
                                       

                                            
                                       
                                     
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

              
                </div>
               @yield('content')

            </section>


</aside>

        @endsection