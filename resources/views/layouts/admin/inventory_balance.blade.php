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
                    <form class="form-horizontal form-label-left input_mask">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category1 <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="item"  id="item" multiple="multiple" required>    
                                    <option value="">All</option> 
                                  @foreach($item_cat as $key =>$item)
                                        <option value="{{$item->category1}}">{{$item->category1}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category2 <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="item2"  id="item2" multiple="multiple" required>    
                                    <option value="">All</option> 
                                  @foreach($item_cat2 as $key =>$item2)
                                        <option value="{{$item2->category2}}">{{$item2->category2}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category3 <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="item_cat3"  id="item_cat3" multiple="multiple" required>    
                                    <option value="">All</option> 
                                  @foreach($item_cat3 as $key =>$item3)
                                        <option value="{{$item3->category3}}">{{$item3->category3}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                          </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Branch</label>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                         <select class="form-control col-md-7 col-xs-12" name="branch_select" id="branch_select" required>     
                                <option value="" >All</option>
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
          $(document).ready(function(){
            console.log('test');

                 $('select').select2();
                        var table = $('#added-item-table').dataTable({
                          "bFilter": false,
                          "bAutoWidth": false,
                          "bPaginate": false,
                          "language" : 
                            {
                                    "zeroRecords": " "             
                            },
                          "columns": [
                            null,
                            null,
                            null,
                            null,
                            null
                          ]
                  });
            var groupColumn = 0 ;
            var inv_table  = $('#inventory_table').DataTable({
                dom: 'Bfrtip',
                "columnDefs": [
                      { "visible": false, "targets": groupColumn }
                  ],
                buttons: [{
                  extend: "copy",
                  className: "btn-sm",
                    exportOptions: {
                      columns: [1, 2, 3,4, 5,6 ]
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
                      columns: [1, 2, 3,4, 5,6 ]
                    }
                }, {
                  extend: "print",
                  className: "btn-sm",
                    exportOptions: {
                      columns: [1, 2, 3,4, 5,6 ]
                    }
                }],


            drawCallback: function (settings) {
            var api = this.api();
            console.log(api);
            var rows = api.rows({ page: 'current' }).nodes();
            var last = null;

            api.column(0, { page: 'current' }).data().each(function (branch_name, i) {

                if (last !== branch_name) {

                    $(rows).eq(i).before(
                        '<tr class="group"><td colspan="8" style="BACKGROUND-COLOR:rgb(237, 208, 0);font-weight:700;color:#006232;">' + 'BRANCH: ' +branch_name.toUpperCase()   + '</td></tr>'
                    );

                    last = branch_name;
                }
            });
        }

            });
           $('#add-item').click(function(){
                let item_name = $('#item option:selected').text();
                let item_id = $('#item').val()
                addRow(item_name, item_id)
            });

            function addRow(item_name, item_id) {
                // Add new row as per index counter
                table.row.add( [
                    '<input type="text" id="itemno" value="'+item_id+'" hidden>',
                    item_name,
                    '<input type="text" id="remarks" class="form-control col-md-7 col-xs-12">',
                    '<input type="number"  min="0" value="0" id="quantity_input" required="required" class="form-control col-md-7 col-xs-12">',
                    '<button type="button" class="btn btn-round btn-danger btn-xs">'+
                 '<i class="glyphicon glyphicon-remove">'+
               '</i>'+'</button>'
                ] ).draw( false );
            }

           $('#added-item-table').on("click", "button", function(){
              console.log($(this).parent());
               var row = this.closest('tr');
              table.row(row).remove().draw(false);
            });


          });
        </script>

      @stop