<?php $__env->startSection('head'); ?>
  ##parent-placeholder-1a954628a960aaef81d7b2d4521929579f3541e6##
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title', 'Receiving Input'); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
   

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Supplier <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12" name="supplier_inventory" id="supplier_inventory" required>     
                                <option value="#" disabled>Select Supplier</option>
                                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->supplier_name); ?> - <?php echo e($supplier->supplier_code); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->item_desc1); ?> - <?php echo e($item->item_code); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                
                            </div>
                             <button type="button" id ="add-item" class="btn btn-round btn-success">Add</button>
                          </div>

                        <div class="x_content" style="margin-bottom: 350px;">

                    <div class="table-responsive" >
                      <table id="added-item-table" class="table table-striped jambo_table" >
                        <thead>
                          <tr class="headings">
                            <th class="column-title" >Item Code </th>
                            <th class="column-title">Item Description </th>
                            <th class="column-title">Remarks </th>
                            <th class="column-title">Quantity </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Items Selected ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
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
                          <th>Remarks</th>
                          <th>Date Created</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $__currentLoopData = $inventory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <tr class="id<?php echo e($i->id); ?>">
                        <td><?php echo e($i->inventory_no); ?></td>
                        <td><?php echo e($i->lname); ?>, <?php echo e($i->fname); ?></td>
                        <td><?php echo e($i->supplier_name); ?></td>
                        <td><?php echo e($i->remarks); ?></td>
                        <td><?php echo e($i->date_created); ?></td>
                        <td>
                          <button id="<?php echo e($i->id); ?>" value="<?php echo e($i->inventory_no); ?>" type="button" class="btn btn-round btn-view btn-xs">
                            <i class="glyphicon glyphicon-eye-open"></i>
                          </button>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
             <?php echo $__env->make('modals.view_inventory_list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
          </div>
        </div>
         <!-- jQuery Smart Wizard -->
      
      <?php $__env->stopSection(); ?>

    <?php $__env->startSection('scripts'); ?>
            ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
        <script src="./vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('select').select2();
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
            var inv_table  = $('#inventory_table').DataTable({
               "order": [[ 4, "desc" ]]
             });

            var inv_list_table = $("#inventory_list_table").DataTable({
                data:[],
                columns: [
                            { "data": "item_code"  },
                            { "data": "item_desc1" },
                            { "data": "quantity" },
                            { "data": "remarks" }
                ],
                rowCallback: function (row, data) {},
                filter: false,
                info: false,
                ordering: false,
                processing: true,
                retrieve: true        
            });

            $(".btn-view").on("click", function (event) {
               let id = this.id;
               let inv_no = $(this).val();

               $('#myModalLabel').text(inv_no);
               $.ajax({
                        url: "getInventoryList",
                        type: "post",
                        data: { 
                          'id': id,
                        '_token': $('meta[name="csrf-token"]').attr('content'), }
                    }).done(function (result) {
                      console.log(result);
                        inv_list_table.clear().draw();
                        inv_list_table.rows.add(result).draw();
                        $('#inv_list_modal').modal('show');
                        }).fail(function (jqXHR, textStatus, errorThrown) { 
                              // needs to implement if it fails
                        });
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

           $('#wizard').smartWizard({
            onFinish:onFinishCallback
           });
          function onFinishCallback(){
              //get value of table 
              console.log('wow');
              supplier_inventory = $('#supplier_inventory').val();
              remarks_inventory = $('#remarks-inventory').val();
              
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
               console.log(JSON.stringify(items));
              if(supplier_inventory != ""){
                 postInventory(supplier_inventory, remarks_inventory, JSON.stringify(items));
              } else
              {
                //toast required

              }
          }

          function postInventory(supplier, remarks, items){
              $.ajax({
                    type: 'post',
                    url: 'postInventory',
                    data: {
                        'supplier': supplier,
                        'remarks': remarks,
                        'items': items,
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function(response)
                    {
                      console.log(response)
                       new PNotify({
                                  title: 'Inventory Receiving Success',
                                  text: 'Insert Success!',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });
                       // location.reload();
                    },
                });
            }


          });
        </script>

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>