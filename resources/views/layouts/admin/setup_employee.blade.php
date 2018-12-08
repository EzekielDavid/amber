@extends('layouts.admin.master')
@section('title', 'Employee Setup')
@section('content')
    @parent

<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Setup Management</h1>
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
                         {{ csrf_field() }}
                                     @if ($errors->any())
                                      <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                   <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                     </div>
                                    @endif
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav  nav-tabs ">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">Employee Details</a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">Import Batch File</a>
                            </li>
                            <li>
                                <a href="#tab3" data-toggle="tab">Employee List</a>
                            </li>
                           
                        </ul>
                        <div  class="tab-content mar-top">
                            <div id="tab1" class="tab-pane fade active in">
                               <div class="row">
                                    <div class="col-lg-12">


                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                   Employee Details
                                                </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                   
                                                </span>
                                            </div>
                                            <div class="panel-body">
                                              <form method="POST" class="form-horizontal" action="{{ url('ManageEmployee') }}">
                                                     {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                                                <label class="control-label col-md-3" for="firstName">Employee No</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="empnumber" class="form-control" id="firstName" placeholder="Employee No" required></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3" for="firstName">First Name</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="firstname" class="form-control" id="firstName" placeholder="First Name" required></div>
                                                            </div>
                                                                      <div class="form-group">
                                                                <label class="control-label col-md-3" for="middleName">Middle Name</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="middlename"class="form-control" id="lastName" placeholder="Middle Name"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3" for="lastname">Last Name</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="lastname"class="form-control" id="lastName" placeholder="Last Name" required></div>
                                                            </div>
                                                            
                                                                 
                                               
                                                                <div class="form-group">
                                                                 <label class="control-label col-md-3">Date of Birth</label>
                                        <div class="input-group date form_datetime" data-date="{{Carbon\Carbon::now()}}" " >
                                  <input size="16" type="text" value="" id="datetimepicker6" class="form-control" name="medicine_received"  required>


                                            <span class="input-group-addon ">
                                                <span class="glyphicon glyphicon-th "></span>
                                            </span>

                                        </div>



                                    </div>
               


                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Gender</label>
                                                                <div class="col-md-2">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="genderRadios" value="male" required>Male</label>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="genderRadios" value="female" required>Female</label>
                                                                </div>
                                                            </div>
                       
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label class="control-label col-md-3" for="firstName">Position</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="position" class="form-control" id="firstName" placeholder="position" required></div>
                                                            </div>
                                                            <div class="form-group">
                                                             <label class="control-label col-md-3" for="inputEmail">Email</label>
                                                                <div class="col-md-9">
                                                                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required></div>
                                                                 </div>   
                                                      <div class="form-group">
                                                                <label class="control-label col-md-3" for="postalAddress">Address</label>
                                                                <div class="col-md-9">
                                                                    <textarea rows="3" class="form-control" name="address" id="address" placeholder="Postal Address" required></textarea>
                                                                </div>
                                                            </div>
                                                   
                                                              <div class="form-group">
                                                                <label class="control-label col-md-3" for="ZipCode">Zip Code</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="ZipCode" id="ZipCode" placeholder="Zip Code" required></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3" for="ZipCode">City</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="city" id="city" placeholder="City" required></div>
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
                                                       <div class="col-lg-12">
                        <div class="panel panel-primary filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="list" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                   Employee List
                                </h3>
                            </div>
                            <div class="panel-body">
                                    <table class="table table-striped table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Employee No</th>
                                            <th>Name</th>
                                            <th>Posittion</th>
                                            <th>Birthdate</th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($employee as $key =>$e)
                                        <tr>
                                            <td>{{ $e->employee_number}}</td>     
                                            <td>{{ $e->employee_firstname . " " . $e->employee_lastname}}</td>                          
                                            <td>{{ $e->employee_position}}</td>
                                            <td>{{ $e->employee_birthdate}}</td>
                                            

                                             <td>
                                                      
                                                             <div class="col-sm-1">
                                                                    <a href="#">
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
                            
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                    Import File
                                                </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">

                                               {!! Form::open(array('route' => 'import-employee','method'=>'POST','files'=>'true')) !!}
                                                <div class="row">
                                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            {!! Form::label('emp_file','Select File to Import:',['class'=>'col-md-3']) !!}
                                                            <div class="col-md-9">
                                                            {!! Form::file('emp_file', array('class' => 'form-control')) !!}
                                                            {!! $errors->first('emp_file', '<p class="alert alert-danger">:message</p>') !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                     <br>

                                                   <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                    {!! Form::submit('Upload',['class'=>'btn btn-primary']) !!}
                                                    </div>
        
                                                </div>
                                                {!! Form::close() !!}
                                                    </div>

                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                         <div class="col-lg-12">
                        <div class="panel panel-primary filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="list" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                   Employee List
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                        
                                            <th>Name</th>
                                            <th>Posittion</th>
                                            <th>Birthdate</th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($employee as $key =>$e)
                                        <tr>
                                      
                                            <td>{{ $e->employee_firstname . " " . $e->employee_lastname}}</td>                          
                                            <td>{{ $e->employee_position}}</td>
                                            <td>{{ $e->employee_birthdate}}</td>
                                            

                                             <td>
                                                      
                                                             <div class="col-sm-1">
                                                                    <a href="#">
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
                            
                                </table>
                            </div>
                        </div>
                    </div>
                                </div>
                              
                            </div>
                            <div id="tab3" class="tab-pane fade">
                                 <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix  ">
                                <div class="panel-title pull-left">
                                       <div class="caption">
                                    <i class="livicon" data-name="list" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                   Employee List
                                </div>
                                    
                                </div>
                                <div class="tools pull-right"></div>

                            </div>
                            <div class="panel-body">
                                    <table class="table table-striped table-bordered" id="table3">
                                    <thead>
                                        <tr>
                                        
                                            <th>Name</th>
                                            <th>Posittion</th>
                                            <th>Birthdate</th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($employee as $key =>$e)
                                        <tr>
                                      
                                            <td>{{ $e->employee_firstname . " " . $e->employee_lastname}}</td>                          
                                            <td>{{ $e->employee_position}}</td>
                                            <td>{{ $e->employee_birthdate}}</td>
                                            

                                        
                                        </tr>
                                        @endforeach
                            
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
                            <div id="tab4" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <i class="livicon" data-name="bell" data-loop="true" data-color="#fff" data-hovercolor="#fff" data-size="18"></i>
                                                            Vertical Form Layout
                                                        </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="inputEmail">Email</label>
                                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email"></div>
                                                            <div class="form-group">
                                                                <label for="inputPassword">Password</label>
                                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password"></div>
                                                            <div class="checkbox mar-left5">
                                                                <label>
                                                                    <input type="checkbox" style="margin-right: 7px;">Remember me</label>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Login</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!--select2 starts-->
                                                <div class="panel panel-success">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                            Inline Form Layout
                                                        </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form class="form-inline" role="form">
                                                            <div class="form-group">
                                                                <label class="sr-only" for="inputEmail">Email</label>
                                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email"></div>
                                                            <div class="form-group">
                                                                <label class="sr-only" for="inputPassword">Password</label>
                                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password"></div>
                                                            <div class="checkbox ">
                                                                <label class="mar-left5">
                                                                    <input type="checkbox" class="mar-right4">Remember me</label>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary mar-top">Login</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                            Static Form Control
                                                        </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form class="form-horizontal">
                                                            <div class="form-group">
                                                                <label for="inputEmail" class="control-label col-xs-2">Email</label>
                                                                <div class="col-xs-10">
                                                                    <p class="form-control-static">harrypotter@mail.com</p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputPassword" class="control-label col-xs-2 hidden-xs">Password</label>
                                                                <label for="inputPassword" class="control-label visible-xs  hidden-lg hidden-sm hidden-md col-xs-2">Pwd</label>
                                                                <div class="col-xs-10">
                                                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-offset-2 col-xs-10">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox">Remember me</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-offset-2 col-xs-10">
                                                                    <button type="submit" class="btn btn-primary">Login</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="panel panel-warning">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                            Grid sizing of Inputs, Textareas and Select Boxes
                                                        </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    <input type="text" class="form-control"></div>
                                                                <div class="col-xs-4">
                                                                    <input type="text" class="form-control"></div>
                                                                <div class="col-xs-5">
                                                                    <input type="text" class="form-control"></div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    <textarea class="form-control"></textarea>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <textarea class="form-control"></textarea>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <textarea class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    <select class="form-control">
                                                                        <option>Select</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <select class="form-control">
                                                                        <option>Select</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <select class="form-control">
                                                                        <option>Select</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="panel panel-danger">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                            Creating Button Dropdowns
                                                        </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <div class="input-group">
                                                                        <div class="input-group-btn">
                                                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                                                Action
                                                                                <span class="caret"></span>
                                                                            </button>
                                                                            <ul class="dropdown-menu">
                                                                                <li>
                                                                                    <a href="#">Action</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">Another action</a>
                                                                                </li>
                                                                                <li class="divider"></li>
                                                                                <li>
                                                                                    <a href="#">Separated link</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <input type="text" class="form-control"></div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control">
                                                                        <div class="input-group-btn">
                                                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                                                Action
                                                                                <span class="caret"></span>
                                                                            </button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="#">Action</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">Another action</a>
                                                                                </li>
                                                                                <li class="divider"></li>
                                                                                <li>
                                                                                    <a href="#">Separated link</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <hr>
                                                        <form>
                                                            <div class="input-group">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                                        Action
                                                                        <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a href="#">Action</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Another action</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Something else here</a>
                                                                        </li>
                                                                        <li class="divider"></li>
                                                                        <li>
                                                                            <a href="#">Separated link</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <input type="text" class="form-control"></div>
                                                            <br>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control">
                                                                <div class="input-group-btn">
                                                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                                        Action
                                                                        <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu pull-right">
                                                                        <li>
                                                                            <a href="#">Action</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Another action</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Something else here</a>
                                                                        </li>
                                                                        <li class="divider"></li>
                                                                        <li>
                                                                            <a href="#">Separated link</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                            Creating Disabled Inputs
                                                        </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form>
                                                            <input type="text" class="form-control" placeholder="Disabled input" disabled="disabled"></form>
                                                        <hr>
                                                        <form class="form-horizontal">
                                                            <fieldset disabled="disabled">
                                                                <div class="form-group">
                                                                    <label for="inputEmail" class="control-label col-xs-2">Email</label>
                                                                    <div class="col-xs-10">
                                                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email"></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputPassword" class="control-label col-xs-2">Password</label>
                                                                    <div class="col-xs-10">
                                                                        <input type="password" class="form-control" id="inputPassword" placeholder="Password"></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-xs-offset-2 col-xs-10">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox">Remember me</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-xs-offset-2 col-xs-10">
                                                                        <button type="submit" class="btn btn-primary">Login</button>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                            Supported Form Controls in Twitter Bootstrap
                                                        </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                                                                <div class="col-xs-9">
                                                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3" for="inputPassword">Password:</label>
                                                                <div class="col-xs-9">
                                                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3" for="confirmPassword">Confirm Password:</label>
                                                                <div class="col-xs-9">
                                                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3" for="firstName">First Name:</label>
                                                                <div class="col-xs-9">
                                                                    <input type="text" class="form-control" id="firstName" placeholder="First Name"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3" for="lastName">Last Name:</label>
                                                                <div class="col-xs-9">
                                                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3" for="phoneNumber">Phone:</label>
                                                                <div class="col-xs-9">
                                                                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3">Date of Birth:</label>
                                                                <div class="col-xs-3">
                                                                    <select class="form-control">
                                                                        <option>Date</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-3">
                                                                    <select class="form-control">
                                                                        <option>Month</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-3">
                                                                    <select class="form-control">
                                                                        <option>Year</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3" for="postalAddress">Address:</label>
                                                                <div class="col-xs-9">
                                                                    <textarea rows="3" class="form-control" id="postalAddress" placeholder="Postal Address"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3" for="ZipCode">Zip Code:</label>
                                                                <div class="col-xs-9">
                                                                    <input type="text" class="form-control" id="ZipCode" placeholder="Zip Code"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3">Gender:</label>
                                                                <div class="col-xs-2">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="genderRadios" value="male">Male</label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="genderRadios" value="female">Female</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-offset-3 col-xs-9">
                                                                    <label class="checkbox-inline mar-left5">
                                                                        <input type="checkbox" value="news">Send me latest news and updates.</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-offset-3 col-xs-9">
                                                                    <label class="checkbox-inline mar-left5">
                                                                        <input type="checkbox" value="agree">
                                                                        I agree to the
                                                                        <a href="#">Terms and Conditions</a>
                                                                        .
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="col-xs-offset-3 col-xs-9">
                                                                    <input type="submit" class="btn btn-primary" value="Submit">
                                                                    <input type="reset" class="btn btn-default" value="Reset"></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!--select2 ends--> </div>
                                            <div class="col-md-6">
                                                <div class="panel panel-success">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <i class="livicon" data-name="bell" data-loop="true" data-color="#fff" data-hovercolor="#fff" data-size="18"></i>
                                                            Horizontal Form Layout Example
                                                        </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form class="form-horizontal">
                                                            <div class="form-group">
                                                                <label for="inputEmail" class="control-label col-xs-2">Email</label>
                                                                <div class="col-xs-10">
                                                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputPassword" class="control-label hidden-xs col-xs-2">Password</label>
                                                                <label for="inputPassword" class="control-label visible-xs  hidden-lg hidden-sm hidden-md col-xs-2">Pwd</label>
                                                                <div class="col-xs-10">
                                                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-offset-2 col-xs-10">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox">Remember me</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-offset-2 col-xs-10">
                                                                    <button type="submit" class="btn btn-primary">Login</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="panel panel-warning">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <i class="livicon" data-name="bell" data-loop="true" data-color="#fff" data-hovercolor="#fff" data-size="18"></i>
                                                            General Controls
                                                        </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                    </div>
                                                    <div class="panel-body">

                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Static</label>
                                                                <div class="col-md-9">
                                                                    <p class="form-control-static">Static text</p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="example-text-input">Text</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                                                                    <span class="help-block">This is a help text</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="example-email">Email</label>
                                                                <div class="col-md-6">
                                                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="example-password">Password</label>
                                                                <div class="col-md-6">
                                                                    <input type="password" id="example-password" name="example-password" class="form-control" placeholder="Password"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="example-disabled">Disabled</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" id="example-disabled" name="example-disabled" class="form-control" placeholder="Disabled" disabled></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="example-textarea-input">Textarea</label>
                                                                <div class="col-md-9">
                                                                    <textarea id="example-textarea-input" name="example-textarea-input" rows="7" class="form-control" placeholder="Description.."></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="example-select">Select</label>
                                                                <div class="col-md-6">
                                                                    <select id="example-select" name="example-select" class="form-control" size="1">
                                                                        <option value="0">Please select</option>
                                                                        <option value="1">Bootstrap</option>
                                                                        <option value="2">CSS</option>
                                                                        <option value="3">Javascript</option>
                                                                        <option value="4">HTML</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="example-multiple-select">Multiple</label>
                                                                <div class="col-md-6">
                                                                    <select id="example-multiple-select" name="example-multiple-select" class="form-control" size="5" multiple>
                                                                        <option value="1">Option #1</option>
                                                                        <option value="2">Option #2</option>
                                                                        <option value="3">Option #3</option>
                                                                        <option value="4">Option #4</option>
                                                                        <option value="5">Option #5</option>
                                                                        <option value="6">Option #6</option>
                                                                        <option value="7">Option #7</option>
                                                                        <option value="8">Option #8</option>
                                                                        <option value="9">Option #9</option>
                                                                        <option value="10">Option #10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Radios</label>
                                                                <div class="col-md-9">
                                                                    <div class="radio mar-left5">
                                                                        <label for="example-radio1">
                                                                            <input type="radio" id="example-radio1" name="example-radios" value="option1">HTML</label>
                                                                    </div>
                                                                    <div class="radio mar-left5">
                                                                        <label for="example-radio2">
                                                                            <input type="radio" id="example-radio2" name="example-radios" value="option2">CSS</label>
                                                                    </div>
                                                                    <div class="radio mar-left5">
                                                                        <label for="example-radio3">
                                                                            <input type="radio" id="example-radio3" name="example-radios" value="option3">Javascript</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Inline Radios</label>
                                                                <div class="col-md-9">
                                                                    <label class="radio-inline " for="example-inline-radio1">
                                                                        <input type="radio" id="example-inline-radio1" name="example-inline-radios" value="option1">HTML</label>
                                                                    <label class="radio-inline" for="example-inline-radio2">
                                                                        <input type="radio" id="example-inline-radio2" name="example-inline-radios" value="option2">CSS</label>
                                                                    <label class="radio-inline" for="example-inline-radio3">
                                                                        <input type="radio" id="example-inline-radio3" name="example-inline-radios" value="option3">Javascript</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Checkboxes</label>
                                                                <div class="col-md-9">
                                                                    <div class="checkbox mar-left5">
                                                                        <label for="example-checkbox1">
                                                                            <input type="checkbox" id="example-checkbox1" name="example-checkbox1" value="option1">HTML</label>
                                                                    </div>
                                                                    <div class="checkbox mar-left5">
                                                                        <label for="example-checkbox2">
                                                                            <input type="checkbox" id="example-checkbox2" name="example-checkbox2" value="option2">CSS</label>
                                                                    </div>
                                                                    <div class="checkbox mar-left5">
                                                                        <label for="example-checkbox3">
                                                                            <input type="checkbox" id="example-checkbox3" name="example-checkbox3" value="option3">Javascript</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Inline Checkboxes</label>
                                                                <div class="col-md-9">
                                                                    <label class="checkbox-inline mar-left5" for="example-inline-checkbox1">
                                                                        <input type="checkbox" id="example-inline-checkbox1" name="example-inline-checkbox1" value="option1">HTML</label>
                                                                    <label class="checkbox-inline mar-left5" for="example-inline-checkbox2">
                                                                        <input type="checkbox" id="example-inline-checkbox2" name="example-inline-checkbox2" value="option2">CSS</label>
                                                                    <label class="checkbox-inline mar-left5" for="example-inline-checkbox3">
                                                                        <input type="checkbox" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3">Javascript</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="col-md-3 control-label" for="example-file-input">File</label>
                                                                <div class="col-md-9 mar-top">
                                                                    <input type="file" id="example-file-input" name="example-file-input"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="example-file-multiple-input">Multiple File</label>
                                                                <div class="col-md-9 mar-top">
                                                                    <input type="file" id="example-file-multiple-input" name="example-file-multiple-input" multiple></div>
                                                            </div>
                                                            <div class="form-group form-actions">
                                                                <div class="col-md-9 col-md-offset-3">
                                                                    <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                                                                    <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                            Height Sizing of Input Groups
                                                        </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <div class="input-group input-group-lg">
                                                                        <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-user"></span>
                                                                        </span>
                                                                        <input type="text" class="form-control"></div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <div class="input-group input-group-lg">
                                                                        <span class="input-group-addon">
                                                                            <input type="checkbox"></span>
                                                                        <input type="text" class="form-control"></div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <div class="input-group input-group-lg">
                                                                        <div class="input-group-addon ">
                                                                            <input type="radio"></div>
                                                                        <input type="text" class="form-control"></div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-user"></span>
                                                                        </span>
                                                                        <input type="text" class="form-control"></div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <input type="checkbox"></span>
                                                                        <input type="text" class="form-control"></div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <input type="radio"></div>
                                                                        <input type="text" class="form-control"></div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-user"></span>
                                                                        </span>
                                                                        <input type="text" class="form-control"></div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <div class="input-group input-group-sm">
                                                                        <span class="input-group-addon">
                                                                            <input type="checkbox"></span>
                                                                        <input type="text" class="form-control"></div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <div class="input-group input-group-sm">
                                                                        <div class="input-group-addon">
                                                                            <input type="radio"></div>
                                                                        <input type="text" class="form-control"></div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="panel panel-danger">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                            Twitter Bootstrap Form Validation States
                                                        </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form class="form-horizontal">
                                                            <div class="form-group has-success">
                                                                <label class="col-xs-2 control-label" for="inputSuccess">Username</label>
                                                                <div class="col-xs-10">
                                                                    <input type="text" id="inputSuccess" class="form-control" placeholder="Input with success">
                                                                    <span class="help-block">Username is available</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group has-warning">
                                                                <label class="col-xs-2 control-label" for="inputWarning">Password</label>
                                                                <div class="col-xs-10">
                                                                    <input type="password" id="inputWarning" class="form-control" placeholder="Input with warning">
                                                                    <span class="help-block">Password strength: Weak</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group has-error">
                                                                <label class="col-xs-2 control-label" for="inputError">Email</label>
                                                                <div class="col-xs-10">
                                                                    <input type="email" id="inputError" class="form-control" placeholder="Input with error">
                                                                    <span class="help-block">Please enter a valid email address</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-offset-2 col-xs-10">
                                                                    <button type="submit" class="btn btn-primary">Login</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <form class="form-horizontal">
                                                            <div class="form-group has-success has-feedback">
                                                                <label class="col-xs-2 control-label" for="inputSuccess">Username</label>
                                                                <div class="col-xs-10">
                                                                    <input type="text" id="inputSuccess" class="form-control" placeholder="Input with success">
                                                                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                                                    <span class="help-block">Username is available</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group has-warning has-feedback">
                                                                <label class="col-xs-2 control-label" for="inputWarning">Password</label>
                                                                <div class="col-xs-10">
                                                                    <input type="password" id="inputWarning" class="form-control" placeholder="Input with warning">
                                                                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                                                    <span class="help-block">Password strength: Weak</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group has-error has-feedback">
                                                                <label class="col-xs-2 control-label" for="inputError">Email</label>
                                                                <div class="col-xs-10">
                                                                    <input type="email" id="inputError" class="form-control" placeholder="Input with error">
                                                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                                                    <span class="help-block">Please enter a valid email address</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-xs-offset-2 col-xs-10">
                                                                    <button type="submit" class="btn btn-primary">Login</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!--min length ends--> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                            Bootstrap Form Inputs
                                                        </h3>
                                                        <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                                    </div>
                                                    <div class="panel-body">

                                                        <form role="form" class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Email Address</label>
                                                                <div class="col-md-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="Email Address"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Password</label>
                                                                <div class="col-md-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="livicon" data-name="key" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                        </span>
                                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group has-success">
                                                                <label class="col-md-2 control-label">Validation  Email</label>
                                                                <div class="col-md-8">
                                                                    <div class="input-group input-icon right">
                                                                        <span class="input-group-addon">
                                                                            <i class="livicon" data-name="mail" data-size="18" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i>
                                                                        </span>

                                                                        <input id="email" class="input-error form-control" type="text" placeholder="Email Address"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group has-error">
                                                                <label class="col-md-2 control-label">Validation Password</label>
                                                                <div class="col-md-8">
                                                                    <div class="input-group input-icon right">
                                                                        <span class="input-group-addon">
                                                                            <i class="livicon" data-name="key" data-size="18" data-c="#EF6F6C" data-hc="#EF6F6C" data-loop="true"></i>
                                                                        </span>

                                                                        <input type="password" class="input-error form-control" placeholder="Password"></div>
                                                                </div>

                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Checkbox Left</label>
                                                                <div class="col-md-8">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <input type="checkbox"></div>
                                                                        <input type="text" class="form-control"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Checkbox right</label>
                                                                <div class="col-md-8">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control">
                                                                        <div class="input-group-addon">
                                                                            <input type="checkbox"></div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Radio on left</label>
                                                                <div class="col-md-8">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <input type="radio"></div>
                                                                        <input type="text" class="form-control"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Radio on right</label>
                                                                <div class="col-md-8">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control">
                                                                        <div class="input-group-addon">
                                                                            <input type="radio"></div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Static Paragraph</label>
                                                                <div class="col-md-8">
                                                                    <p class="form-control">email@example.com</p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Readonly</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" placeholder="Readonly" readonly=""></div>
                                                            </div>
                                                        </form>
                                                        <div class="panel-footer">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-sm-offset-2">
                                                                    <button class="btn-success btn">Submit</button>
                                                                    <button class="btn-default btn">Cancel</button>
                                                                    <button class="btn-info btn">Reset</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
       

</aside>

        @endsection