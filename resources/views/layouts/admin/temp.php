@extends('layouts.admin.master')
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
                              <input type="text" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Supplier <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="state" required>     
                                <option value="#" disabled>Select Supplier</option>
                                @foreach($suppliers as $key =>$supplier)
                                        <option value="{{ $supplier->id}}">{{ $supplier->supplier_name}} - {{ $supplier->supplier_code }}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Received <span class="required">*</span>
                            </label>
                            <div class="input-group date col-md-6 col-sm-6 col-xs-12">

                              <input id="birthday" class="form-control col-md-7 col-xs-12" required="required" type="text">
                                <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                          </div>
                        </div>

                      </div>
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

                        <div class="x_content">

                    <div class="table-responsive">
                      <table id="added-item-table" class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title" hidden> </th>
                            <th class="column-title">Item Description </th>
                            <th class="column-title">Remarks </th>
                            <th class="column-title">Quantity </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        </tbody>
                      </table>
                    </div>
              
            
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
           $('#add-item').click(function(){
                let item_name = $('#item option:selected').text();
                let item_id = $('#item').val()
               $('#added-item-table > tbody:last-child').append(
                '<tr class="even pointer">'+
                '<td class="a-center ">' +
                '<input type="checkbox" class="flat" name="table_records" checked>'+
                '</td>'+
                '<td class=" " hidden>'+item_id+'</td>'+
                '<td class=" ">'+item_name+'</td>'+
                '<td class=" ">'+
                '<input type="text" id="first-name" class="form-control col-md-7 col-xs-12">'+
                '</td>'+
                '<td class=" ">'+
                '<input type="number" id="first-name" required="required" class="form-control col-md-7 col-xs-12">'+
                '</td>'+
                '<td class=" ">'+
                 '<button type="button" class="btn btn-round btn-danger btn-xs">'+
                 '<i class="glyphicon glyphicon-remove">'+
                 '</i>'+'</button>'+'</td>'+
                '</td>'+'</tr>');
            });
        </script>

      @stop