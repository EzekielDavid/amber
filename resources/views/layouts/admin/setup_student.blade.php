@extends('layouts.admin.master')
@section('title', 'Student Setup')
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
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav  nav-tabs ">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">Student Details</a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">Import Batch File</a>
                            </li>
                            <li>
                                <a href="#tab3" data-toggle="tab">Student List</a>
                            </li>
                           
                        </ul>
                        <div  class="tab-content mar-top">
                            <div id="tab1" class="tab-pane fade active in">
                               <div class="row">
                               
                                             <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                               Add New Student
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">

                                <!--main content-->
                                <div class="row">
                    
                                <div class="col-md-12">
                                  
                                    <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                    <form class="form-wizard" action="{{ url('ManageStudent') }}" method="POST">
                                     {{ csrf_field() }}
                                        <h1>Profile</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="col-md-6">
                                                  <div class="form-group">
                                                    <label for="email">Student No</label>
                                                        
                                                                    <input type="text"  class="form-control required" name="studentnumber" id="studentnumber" placeholder="Enter Student's Number" >
                                                </div>
                                      <div class="form-group">
                                                     <label for="firstname">First Name</label>
                                                               
                                                                    <input type="text" name="firstname" class="form-control required" id="firstName" placeholder="Enter Student's Firstname" >
                                                            </div>
                                          <div class="form-group">
                                                                <label for="middlename">Middle Name</label>
                                                            
                                                                    <input type="text" name="middlename" class="form-control required"  id="middlename" placeholder="Enter Student's Middlename" >
                                                            </div>
                                          <div class="form-group">
                                                <label for="email">Last Name</label>
                                                <input id="lastname" name="lastname" placeholder="Enter Student's Lastname" type="text" class="form-control required" >
                                            </div>

                                                <div class="form-group">
                                                <label for="email">Gender</label>
                                            <select class="form-control" name="genderSelect"  id="genderSelect" title="Select an student's gender...">
                                     
                                                <option>Male</option>
                                                <option>Female</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="email">Email</label>
                                                <input id="email" name="email" placeholder="Enter Student's Email" type="text" class="form-control required" >
                                            </div>
                                                <div class="form-group">
                                                <label for="address">Postal Address</label>
                                                <input id="address" name="address" placeholder="Enter Student's Address" type="text" class="form-control required" >
                                            </div>
                                                <div class="form-group">
                                                <label for="city">City</label>
                                                <input id="city" name="city" placeholder="Enter Student's City" type="text" class="form-control required" >
                                            </div>
                                                <div class="form-group">
                                                <label for="zipcode">Zip Code</label>
                                                <input id="zipcode" name="zipcode" placeholder="Enter Student's Zip Code" type="text" class="form-control required" >
                                            </div>
                                                                            
                                                                <div class="form-group">
                                                                 <label class="control-label">Date of Birth</label>
                                        <div class="input-group date form_datetime" data-date="{{Carbon\Carbon::now()}}" " >
                                  <input size="16" type="text" value="" id="datetimepicker6" class="form-control" name="medicine_received"  required>


                                            <span class="input-group-addon ">
                                                <span class="glyphicon glyphicon-th "></span>
                                            </span>

                                        </div>



                                    </div>  
                                            </div>
                                            
                                        </section>
                                        <h1>Program Included</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group">
                                                <label for="name">Program</label>
                                                <input id="student_course_name" name="student_course_name" placeholder="Enter Student's Program"type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="surname">Section</label>
                                                <input id="student_course_section" name="student_course_section" type="text" placeholder=" Enter Student's Section " class="form-control">
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="email">Student Status</label>
                                             <select class="form-control" id="status" name="status" title="Select student's status...">
                                     
                                                <option>Regular</option>
                                                <option>Irregular</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Semestral End</label>
                                                   <div class="input-group date form_datetime2 " data-date="2012-12-21T15:25:00Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                            <input size="16" type="text" value="" readonly class="form-control">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </span>
                                        </div>
                                            </div>
                                         
                                            <p>(*) Mandatory</p>
                                        </section>
                                    </form>
                                    <!-- END FORM WIZARD WITH VALIDATION -->
                                </div>
                                </div>
                                <!--main content end-->
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
                                                        <th>Student No</th>
                                                        <th>Name</th>
                                                        <th>Status</th>
                                                        <th>Program</th>
                                                        <th>
                                                            Action
                                                        </th>
                                                    </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($student as $key =>$s)
                                                         <tr>
                                                             <td>{{ $s->student_number}}</td>     
                                                                <td>{{ $s->student_firstname . " " . $s->student_lastname}}</td>                          
                                                                <td>{{ $s->student_status}}</td>
                                                                <td>{{ $s->student_course_name}}</td>
                                            

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
                                                    Import 
                                                </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                            </div>
                                             <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        {!! Form::open(array('route' => 'import-csv-excel-student','method'=>'POST','files'=>'true')) !!}
                                                        <div class="row">
                                                           <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                    {!! Form::label('stud_file','Select File to Import:',['class'=>'col-md-3']) !!}
                                                                    <div class="col-md-9">
                                                                    {!! Form::file('stud_file', array('class' => 'form-control')) !!}
                                                                    {!! $errors->first('stud_file', '<p class="alert alert-danger">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                            </div>
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
                                            <th>Student No</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Program</th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($student as $key =>$s)
                                                         <tr>
                                                             <td>{{ $s->student_number}}</td>     
                                                                <td>{{ $s->student_firstname . " " . $s->student_lastname}}</td>                          
                                                                <td>{{ $s->student_status}}</td>
                                                                <td>{{ $s->student_course_name}}</td>
                                            

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
                                    <i class="livicon" data-name="camera-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                   Student List
                                </div>
                                    
                                </div>
                                <div class="tools pull-right"></div>

                            </div>
                            <div class="panel-body">
                                                      <table class="table table-striped table-responsive" id="table1">
                                                        <thead>
                                                         <tr>
                                                            <th>Student No</th>
                                                            <th>Name</th>
                                                            <th>Status</th>
                                                            <th>Program</th>
                                                            <th>
                                                                Action
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($student as $key =>$s)
                                                         <tr>
                                                             <td>{{ $s->student_number}}</td>     
                                                                <td>{{ $s->student_firstname . " " . $s->student_lastname}}</td>                          
                                                                <td>{{ $s->student_status}}</td>
                                                                <td>{{ $s->student_course_name}}</td>
                                            

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
                      
                        </div>
                    </div>
                </div>

            </section>
       

</aside>

        @endsection