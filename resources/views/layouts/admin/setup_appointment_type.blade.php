<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MedSys | Setup Appointment Type</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="css/metisMenu.css" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="vendors/clockface/css/clockface.css" rel="stylesheet" />
    <link href="vendors/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
    <link href="vendors/timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="vendors/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen" />
    <link href="vendors/touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" media="all" />
    <link href="vendors/multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
    <link href="vendors/switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" />
    <link href="vendors/spinner/dist/bootstrap-spinner.css" rel="stylesheet" />
    {!!Html::style('datatables/css/dataTables.colReorder.min.css')!!}
    {!!Html::style('vendors/datatables/css/dataTables.scroller.min.css')!!}
    {!!Html::style('vendors/datatables/css/dataTables.bootstrap.css')!!}
    {!!Html::style('css/pages/tables.css')!!}
    {!!Html::style('css/pages/form_layouts.css')!!}


</head>

<body class="skin-josh">
 <header class="header">
        <a href="index.html" class="logo">
            <img src="img/logoMed.png" alt="Logo">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                   
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                            <span class="label label-warning">7</span>
                        </a>
                        <ul class=" notifications dropdown-menu">
                            <li class="dropdown-title">You have 7 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <i class="livicon danger" data-n="timer" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">after a long time</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Just Now
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="gift" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Jef's Birthday today</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Few seconds ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="dashboard" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">out of space</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            8 minutes ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon bg-aqua" data-n="hand-right" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">New friend request</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            An hour ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon danger" data-n="shopping-cart-in" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">On sale 2 products</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            3 Hours ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="image" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Lee Shared your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Yesterday
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="thumbs-up" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">David liked your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            2 July 2014
                                        </small>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img data-src="holder.js/35x35/#fff:#000" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                            <div class="riot">
                                <div>
                                    Riot
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img data-src="holder.js/90x90/#fff:#000" class="img-responsive img-circle" alt="User Image">
                                <p class="topprofiletext">{{ Auth::user()->first_name }}</p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="user" data-s="18"></i>
                                    My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="gears" data-s="18"></i>
                                    Account Settings
                                </a>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="lockscreen.html">
                                        <i class="livicon" data-name="lock" data-s="18"></i>
                                        Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

  <div class="wrapper row-offcanvas row-offcanvas-left">
    <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">
                            <li>
                                <a href="form_builder.html">
                                    <i class="livicon" data-name="hammer" title="Form Builder 1" data-loop="true" data-color="#42aaca" data-hc="#42aaca" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="form_builder2.html">
                                    <i class="livicon" data-name="list-ul" title="Form Builder 2" data-loop="true" data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="buttonbuilder.html">
                                    <i class="livicon" data-name="vector-square" title="Button Builder" data-loop="true" data-color="#f6bb42" data-hc="#f6bb42" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="gridmanager.html">
                                    <i class="livicon" data-name="new-window" title="Page Builder" data-loop="true" data-color="#37bc9b" data-hc="#37bc9b" data-s="25"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                        <li class="active">
                            <a href="{{ route('dashboard') }}">
                                <i class="livicon" data-name="home" data-size="18" data-c="#5bc0de" data-hc="#5bc0de" data-loop="true"></i>
                                <span class="title" ">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="gears" data-size="18" data-c="#5bc0de" data-hc="#5bc0de" data-loop="true"></i>
                                <span class="title">System Setup</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('ManageUsers.index') }}"">
                                        <i  class="livicon" data-name="users" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Users Management
                                    </a>
                                </li>
                                  <li>
                                    <a href="{{ route('ManageEmployee.index') }}"">
                                        <i  class="livicon" data-name="user" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Employee
                                    </a>
                                </li>
                                  <li>
                                    <a href="{{ route('ManageStudent.index') }}">
                                         <i  class="livicon" data-name="user" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                       Student
                                    </a>
                                </li>

                                      <li>
                                    <a href="{{ route('ManageAppointmentType.index') }}"">
                                        <i  class="livicon" data-name="user" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Appointment Type
                                    </a>
                                </li>

                                   
                               
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="wrench" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Utilities</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="blog_list.html">
                                         <i  class="livicon" data-name="inbox-in" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Backup & Restore
                                    </a>
                                </li>
                        
                            </ul>
                        </li>
                       
             
                     
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>
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
                                                    Appointment Type Details
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
                                        <input class="form-control" placeholder="Enter Appointment Type Title" name="Title" id="utility_number" required>
                                       
                                    </div>
                            
                                                  <div class="form-group">
                                        <label>Duration<i>(mins)</i></label>
                                        <div class="form-group">
                                                <input class="form-control" placeholder="Enter Duration Time" name="appointment_type_duration" id="appointment_type_duration" onkeypress="return isNumberKey(event)" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Allowance<i>(mins)</i></label>
                                        <div class="form-group">
                                                <input class="form-control" placeholder="Enter Allowance Time" name="appointment_type_allowance" id="appointment_type_allowance" onkeypress="return isNumberKey(event)" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="3" class="form-control" name="Description" id="Description" placeholder="Enter Appointment Type Description" required></textarea>
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
                                        Apppointment Type List
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

        </section>


</aside>
  </div>


    
     <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>

    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
   <script src="js/josh.js" type="text/javascript"></script>
    <script src="js/metisMenu.js" type="text/javascript"> </script>
    <script src="vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!--color picker-->
    <script src="vendors/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!--time picker-->
    <script src="vendors/timepicker/js/bootstrap-timepicker.min.js"></script>
    <!--datetime picker-->
    <script type="text/javascript" src="vendors/datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="vendors/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
    <!--clockface-->
    <script src="vendors/clockface/js/clockface.js"></script>
    <!--touchspin-->
    <script src="vendors/touchspin/dist/jquery.bootstrap-touchspin.js"></script>
    <script type="text/javascript" src="vendors/multiselect/js/bootstrap-multiselect.js"></script>
    <!--switch-->
    <script src="vendors/switch/dist/js/bootstrap-switch.js"></script>
    <!--spinner-->
    <script src="vendors/spinner/dist/jquery.spinner.js"></script>
    <script src="js/pages/pickers.js"></script>
        <script type="text/javascript" src="vendors/noty-2.2.4/js/noty/packaged/jquery.noty.packaged.min.js"></script>
    <script type="text/javascript" src="vendors/noty-2.2.4/js/script.js"></script>


    {!!Html::script('vendors/datatables/jquery.dataTables.min.js')!!}
    {!!Html::script('vendors/datatables/dataTables.tableTools.min.js')!!}

    {!!Html::script('vendors/datatables/dataTables.scroller.min.js')!!}
    {!!Html::script('vendors/datatables/dataTables.bootstrap.js')!!}
    {!!Html::script('js/pages/table-advanced.js')!!}

    <script type="text/javascript">
        function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
    }
    </script>





</body>
</html>


        