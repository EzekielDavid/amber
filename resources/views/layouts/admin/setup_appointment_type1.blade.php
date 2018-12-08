@extends('layouts.admin.master')
@section('title', 'Appointment Type Setup')
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
             <form method="POST" action="{{ url('ManageAppointmentType') }}">
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
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" placeholder="Enter Appointment Type Title" name="utility_number" id="utility_number">
                                       
                                    </div>
                            
                                                  <div class="form-group">
                                        <label>Duration</label>
                                        <div class="form-group">
                                            <input id="demo_vertical" type="text" value="" name="demo_vertical">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="3" class="form-control" name="Enter Appointment Type Description" id="utility_description" placeholder="Enter Utility Description"></textarea>
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

                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Duration</th>
                                            <th>    </th>
                                        </tr>
                                    </thead>
                             <tbody>
                                      @foreach($apptype as $key =>$a)
                                        <tr>
                                      
                                            <td>{{ $a->appointment_type_title}}</td>                          
                                            <td>{{ $a->appointment_type_description}}</td>
                                            <td>{{ $a->appointment_type_duration}}</td>
                                            

                                             <td>
                                                      
                                                             <div class="col-sm-1">
                                                                    <a>
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