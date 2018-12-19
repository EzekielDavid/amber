@extends('layouts.admin.master')
@section('head')
  @parent
  <meta name="csrf-token" content="{{ csrf_token() }}" />
@stop
@section('title', 'Amber | Inventory Balance')

@section('styles')
    @parent
   

@stop
@section('content')
    @parent
     <div class="right_col" role="main">
          <!-- top tiles -->
                    <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Reports</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                  <div class="x_title">
                    <h2>Search Query </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="search" class="form-horizontal form-label-left input_mask">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category1
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="cat1"  id="cat1"  multiple="multiple" >    
                                  @foreach($item_cat as $key =>$item)
                                        <option value="{{$item->category1}}">{{$item->category1}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category2 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="cat2"  id="cat2" multiple="multiple" >    
                          
                                  @foreach($item_cat2 as $key =>$item2)
                                        <option value="{{$item2->category2}}">{{$item2->category2}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category3 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="cat3"  id="cat3" multiple="multiple" >    
                    
                                  @foreach($item_cat3 as $key =>$item3)
                                        <option value="{{$item3->category3}}">{{$item3->category3}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Branch 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="branch_select"  id="branch_select" multiple="multiple" >    
                                    @foreach($branch as $key =>$branch)
                                        <option value="{{$branch->id}}">{{ $branch->branch_name}} - {{ $branch->branch_code }}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                          </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Search</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Inventory Balance</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="inventory_table" class="table table-striped table-bordered" style="width:100%;">
                      <thead>
                        <tr>
                          <th>Branch</th>
                          <th>Inventory #</th>
                          <th>Item No.</th>
                          <th>Item Desc</th>
                          <th>Created</th>
                          <th>Quantity</th>
                          <th>Actual Count</th>
                   
                        </tr>
                      </thead>


                      <tbody>

                   
                        @foreach($inventory_list as $key =>$i)
                
                             <tr>
                               <td>
                        
                                {{$i->branch_name}}
                     
                              </td>
                              <td>{{$i->inventory_no}}</td>
                              <td>{{$i->item_code}}</td>
                              <td>{{$i->item_desc1}}</td>
                              <td>{{$i->date_created}}</td>
                              <td>{{$i->quantity}}</td>
                              <td></td>
                            </tr>
                        
                        @endforeach
                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         <!-- jQuery Smart Wizard -->

        @endsection

    @section('scripts')
            @parent
        <script src="./vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
        <script src="../vendors/jszip/dist/jszip.min.js"></script>
        <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('select').select2();
            var groupColumn = 0;
            var inv_table = $('#inventory_table').DataTable({
                dom: 'Bfrtip',
                columnDefs: [{
                    "visible": false,
                    "targets": groupColumn
                }],
                buttons: [{
                    extend: "copy",
                    className: "btn-sm",
                    exportOptions: {
                        columns: [0,1, 2, 3, 4, 5, 6]
                    }
                }, {
                    extend: "csv",
                    className: "btn-sm",
                }, {
                    extend: "excel",
                    className: "btn-sm",
                }, {
                    extend: "pdf",
                    className: "btn-sm",
                    exportOptions: {
                        columns: [0,1, 2, 3, 4, 5, 6]
                    }
                }, {
                    extend: "print",
                    className: "btn-sm",
                    exportOptions: {
                        columns: [0,1, 2, 3, 4, 5, 6]
                    }
                }],


                drawCallback: function(settings) {
                    var api = this.api();
                    console.log(api);
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(0, {
                        page: 'current'
                    }).data().each(function(branch_name, i) {

                        if (last !== branch_name) {

                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="8" style="BACKGROUND-COLOR:rgb(237, 208, 0);font-weight:700;color:#006232;">' + 'BRANCH: ' + branch_name.toUpperCase() + '</td></tr>'
                            );

                            last = branch_name;
                        }
                    });
                }

            });
            $('#add-item').click(function() {
                let item_name = $('#item option:selected').text();
                let item_id = $('#item').val()
                addRow(item_name, item_id)
            });

            $( "#search" ).submit(function( event ) {
               event.preventDefault();
               var cat1 = $("#cat1").val(); 
               var cat2 = $("#cat2").val(); 
               var cat3 = $("#cat3").val(); 
               var branch = $("#branch_select").val();
               searchItems(cat1, cat2, cat3, branch);
            });
            function searchItems(cat1, cat2, cat3,branch){
              $.ajax({
                    type: 'post',
                    url: 'searchItems',
                    data: {
                        'cat1': cat1,
                        'cat2': cat2,
                        'cat3': cat3,
                        'branch': branch,
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                    }
                }).done(function (result) {
                    Notif('success', 'Search loaded successfully');
                    console.log(result);
                
                    var result = result.map(function(item){
                        var result = [];
                        result.push(item.branch_name);
                        result.push(item.inventory_no); 
                        result.push(item.item_code); 
                        result.push(item.item_desc1); 
                        result.push(item.date_created); 
                        result.push(item.quantity); 
                        result.push(""); 
                        return result;
                      });

                    console.log(result);
                    
                    inv_table.clear().draw();
                    inv_table.rows.add(result).draw();
                  })
                .fail(function (jqXHR, textStatus, errorThrown) { 
                      Notif('warning', 'Search loaded failed');
                });
            }
        });
        </script>

      @stop