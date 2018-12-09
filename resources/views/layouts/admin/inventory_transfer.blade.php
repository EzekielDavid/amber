@extends('layouts.admin.master')
@section('head')
  @parent
  <meta name="csrf-token" content="{{ csrf_token() }}" />
@stop
@section('title', 'Receiving Input')

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
                <h3>Receiving Input</h3>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Input</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Step 1 Supplier, Remarks</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Step 2 Items & Quantity</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Step 3 Review Receiving</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <div class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Remarks <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="remarks-inventory"  class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Transfer Mode <span class="required">*</span>
                            </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="transfer_mode" id="transfer_mode" required>     
                                    <option value="" disabled selected>---</option>
                                    <option value="warehouse">Warehouse to Branch transfer</option>
                                    <option value="branch">Branch to Branch transfer</option>
                                </select>
                            </div>
                          </div>

                          <div class="form-group transfer_src" hidden>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Branch Supplier <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="branch_select_from" id="branch_select_from">     
                                <option value="#" disabled>Branch to Supply</option>
                                @foreach($branch as $key =>$branch_from)
                                        <option value="{{$branch_from->id}}">{{ $branch_from->branch_name}} - {{ $branch_from->branch_code }}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>

                          <div class="form-group transfer_src" hidden>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Branch to Supply <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="branch_select" id="branch_select">     
                                <option value="#" disabled>Branch to Supply</option>
                                @foreach($branch as $key =>$branch)
                                        <option value="{{$branch->id}}">{{ $branch->branch_name}} - {{ $branch->branch_code }}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
<!-- 
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Received <span class="required">*</span>
                            </label>
                            <div class="input-group date col-md-6 col-sm-6 col-xs-12">

                              <input id="birthday" class="form-control col-md-7 col-xs-12" required="required" type="text">
                                <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                          </div> -->
                        </div>

                      </div>fdsafa
                      <div id="step-2">
                        <h2 class="StepTitle">Step 2 Select Items</h2>
                        <div class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Items <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="item"  id="item" required>     
                                <option value="#" disabled>Select Items</option>
                                @foreach($items as $key =>$item)
                                        <option value="{{$item->id}}">{{$item->item_desc1}} - {{$item->item_code }}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                             <button type="button" id ="add-item" class="btn btn-round btn-success">Add</button>
                          </div>

                        <div class="x_content" style="margin-bottom: 350px;">

                          <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action" id="branch_stock">
                              <thead>
                                <tr class="headings">
                                  <th>
                                    
                                  </th>
                                  <th class="column-title">Inventory # </th>
                                  <th class="column-title">Item Code </th>
                                  <th class="column-title">Item Desc </th>
                                  <th class="column-title">Amount </th>
                                  <th class="column-title">Remarks </th>
                                  <th class="column-title">Date Received </th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">121000040</td>
                                  <td class=" ">May 23, 2014 11:47:56 PM </td>
                                  <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                  <td class=" ">John Blank L</td>
                                  <td class="a-right a-right ">$7.45</td>
                                  <td class=" last"><a href="#">View</a>
                                  </td>
                                </tr>
                              
                              </tbody>
                            </table>
                          </div>
              
            

                        </div>
                      </div>
                      <div id="step-3">
                        <h2 class="StepTitle">Step 3 Content</h2>
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Inventory List</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="inventory_table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Inventory Code</th>
                          <th>Created By</th>
                          <th>Supplier</th>
                          <th>Branch Supplied</th>
                          <th>Remarks</th>
                          <th>Created Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      @foreach($inventory as $key =>$i)
                       <tr class="id{{$i->id}}">
                        <td>{{$i->inventory_no}}</td>
                        <td>{{$i->lname}}, {{ $i->fname }}</td>
                        <td>{{$i->supplier_name}}</td>
                         <td>{{$i->branch_name}}</td>
                        <td>{{$i->remarks}}</td>
                        <td>{{$i->date_created}}</td>
                        <td>
                          <button type="button" class="btn btn-round btn-view btn-xs">
                            <i class="glyphicon glyphicon-eye-open"></i>
                          </button>
                        </td>
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
        <script>
             $('select').select2();
                 $('#myDatepicker').datetimepicker();
    
            $('#myDatepicker2').datetimepicker({
                format: 'DD.MM.YYYY'
            });
            
            $('#myDatepicker3').datetimepicker({
                format: 'hh:mm A'
            });
            
            $('#myDatepicker4').datetimepicker({
                ignoreReadonly: true,
                allowInputToggle: true
            });

            $('#datetimepicker6').datetimepicker();
            
            $('#datetimepicker7').datetimepicker({
                useCurrent: false
            });
            
            $("#datetimepicker6").on("dp.change", function(e) {
                $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
            });
            
            $("#datetimepicker7").on("dp.change", function(e) {
                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
            });
        </script>

        <script type="text/javascript">
          $(document).ready(function(){
            var table = $('#added-item-table').DataTable({
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

            var inv_list_table = $("#branch_stock").DataTable({
                data:[],
                columns: [
                   {
                       'targets': 0,
                       'className': 'a-center',
                       'render': function (data, type, full, meta){
                           return '<input type="checkbox" class="flat" name="table_records">';
                       }
                    },
                            { "data": "inventory_no" },
                            { "data": "item_code" },
                            { "data": "item_desc1" },
                            { "data": "quantity" },
                            { "data": "remarks" },
                            { "data": "date_received" },

                ],
                rowCallback: function (row, data) {},
                info: false,
                processing: true,
                retrieve: true        
            });
            var inv_table  = $('#inventory_table').DataTable({
               "order": [[ 4, "desc" ]]
             });

          $('#branch_select_from').on('change', function() {
            branch = this.value;
   
                $.ajax({
                    type: 'post',
                    url: 'getBranchStock',
                    data: {
                        'branch_id': branch,
                        '_token': $('meta[name="csrf-token"]').attr('content'),

                    },
                    success: function(response)
                    {
                      console.log(response)
                      inv_list_table.clear().draw();
                      inv_list_table.rows.add(response).draw();
                    },
                });
          });
           $('#add-item').click(function(){
                let item_name = $('#item option:selected').text();
                let item_id = $('#item').val()
                addRow(item_name, item_id)
            });



            $('#transfer_mode').on('change', function() {
                let mode = this.value;
                if(mode == "branch"){
                    $(".transfer_src").removeAttr("hidden");
                } else if( mode =="warehouse"){
                 $(".transfer_src").attr("hidden", true);
                 branch = "";
                  $.ajax({
                          type: 'post',
                          url: 'getBranchStock',
                          data: {
                              'branch_id': branch,
                              '_token': $('meta[name="csrf-token"]').attr('content'),

                          },
                          success: function(response)
                          {
                            console.log(response)
                            inv_list_table.clear().draw();
                            inv_list_table.rows.add(response).draw();
                          },
                    });
                }
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

           $('#wizard').smartWizard({
            onFinish:onFinishCallback
           });
            function onFinishCallback(){
              //get value of table 

              supplier_inventory = $('#supplier_inventory').val();
              remarks_inventory = $('#remarks-inventory').val();
              branch_select = $('#branch_select').val();
              // alert(supplier_inventory);
              // var data = table.rows().data();
              //  data.each(function (value, index) {
              //      console.log(`For index ${index}, data value is ${value}`);
              //  });
              var itemsArr = [];
              var items = [];
               $('#added-item-table tr').each(function(i, row) {
                  $(this).find('#itemno').each(function() {
                      itemsArr.push({
                          item_id:$(this).val(),
                      });
                 });
                 $(this).find('#quantity_input').each(function() {
                      itemsArr.push({
                          quantity:$(this).val(),
                      });
                 });
                  $(this).find('#remarks').each(function() {
                      itemsArr.push({
                          remarks:$(this).val(),
                      });
                 });
                    items.push({
                        itemsArr
                      });
                    itemsArr = [];
              });
               items.shift();
              if(supplier_inventory != ""){
                  postInventory(supplier_inventory, branch_select, remarks_inventory, JSON.stringify(items));
              } else
              {
                //toast required

              }
            }

            function postInventory(supplier,branch_select, remarks, items){

              $.ajax({
                    type: 'post',
                    url: 'postInventoryBranch',
                    data: {
                        'supplier': supplier,
                        'remarks': remarks,
                        'items': items,
                        'branch': branch_select,
                        '_token': $('meta[name="csrf-token"]').attr('content'),

                    },
                    success: function(response)
                    {
                      console.log(response)
                       new PNotify({
                                  title: 'Inventory Receiving Success',
                                  text: response['success'],
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });
                        location.reload();
                    },
                });
            }

          });
        </script>

      @stop