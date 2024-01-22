  <!-- Menu -->
  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" >
      <div class="app-brand demo">
          <a href="<?php echo e(url('/dashboard')); ?>" class="app-brand-link">
              <span class="app-brand-logo demo">
                 <img src="<?php echo e(url('img/logo-imip.png')); ?>" width="50" alt="">
                  
              </span>
          </a>
          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
      </div>

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
              <a href="<?php echo e(url('/dashboard')); ?>" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Dashboard</div>
              </a>
          </li>

          <?php
          $menus = menus()
          ?>

          <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Menus</span>
          </li>
          <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if(isset($menu['children']) AND $menu['child'] == 'Y' ): ?>
          <li class="menu-item <?php echo e(Request::is(strtolower($menu['menu']).'*') ? 'active open' : ''); ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <span class="menu-icon tf-icons"><i class="<?php echo e($menu['icon']); ?>"></i></span>
                  <span class="sidenav-link-title"><?php echo e($menu['menu']); ?></span>
              </a><?php echo e("\n"); ?>

              <ul class="menu-sub <?php echo e(Request::is(strtolower($menu['menu']).'*') ? 'display: block;' : ''); ?>">
                  <?php $__currentLoopData = $menu['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li
                      class="menu-item <?php echo e(Request::is(strtolower($menu['menu']).'/'.strtolower($child['menu'])) ? 'active' : ''); ?>">
                      <a href="<?php echo e(url($child['route_name'])); ?>" class="menu-link">
                          <span class="sidenav-link-title"><?php echo e($child['menu']); ?></span>
                      </a>
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </li>
          <?php else: ?>
          <li class="menu-item <?php echo e(Request::is(strtolower(str_replace(' ', '', $menu['menu']))) ? 'active' : ''); ?>">
            <a href="<?php echo e(url($menu['route_name'])); ?>" class="menu-link">
                <i class="menu-icon tf-icons <?php echo e($menu['icon']); ?>"></i>
                <div data-i18n="Analytics"><?php echo e($menu['menu']); ?></div>
            </a>
        </li>
          <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      </ul>
  </aside>
  <!-- / Menu -->
<?php /**PATH C:\xampp\htdocs\inventory-test\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>