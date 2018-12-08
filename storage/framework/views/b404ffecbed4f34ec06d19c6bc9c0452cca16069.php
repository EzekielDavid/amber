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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
                          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Branch</label>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                         <select class="form-control col-md-7 col-xs-12" name="branch_select" id="branch_select" required>     
                                <option value="" >All</option>
                                <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($branch->id); ?>"><?php echo e($branch->branch_name); ?> - <?php echo e($branch->branch_code); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <table id="inventory_table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Inventory Code</th>
                          <th>Created By</th>
                          <th>Supplier</th>
                          <th>Remarks</th>
                          <th>Date Created</th>
                   
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
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         <!-- jQuery Smart Wizard -->

        <?php $__env->stopSection(); ?>

    <?php $__env->startSection('scripts'); ?>
            ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
        <script src="./vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
        <script src="../vendors/jszip/dist/jszip.min.js"></script>
        <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            console.log('test');
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
            var inv_table  = $('#inventory_table').DataTable( {
                dom: 'Bfrtip',

        buttons: [{
          extend: "copy",
          className: "btn-sm"
        }, {
          extend: "csv",
          className: "btn-sm"
        }, {
          extend: "excel",
          className: "btn-sm"
        }, {
          extend: "pdf",
          className: "btn-sm"
        }, {
          extend: "print",
          className: "btn-sm"
        }],
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

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>