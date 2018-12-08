     <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Amber</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2>User: <?php echo e(Auth::user()->uname); ?></h2>
                <span><small> <?php echo e(Auth::user()->role->group_name); ?></small></span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Dashboard </a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Inventory <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo e(route('dashboard')); ?>">Receiving Input</a></li>
                      <li><a href="<?php echo e(route('inventory_output')); ?>">Inventory Output</a></li>
                      <li><a href="<?php echo e(route('inventory_transfer')); ?>">Internal Inventory Transfer</a></li>
                      <li><a href="<?php echo e(route('inventory_balance')); ?>">Inventory Balance</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>