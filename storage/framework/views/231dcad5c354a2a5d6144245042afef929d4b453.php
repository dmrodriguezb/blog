<?php $__env->startSection('dashboard-content'); ?>
    <h1>Create category form</h1>
    
    <?php if(Session::get('success')): ?>
      <div class="alert alert-success  alert-dismissible fade show" 
      role="alert" id="gone">
      <strong><?php echo e(Session::get('success')); ?></strong>
      <button type="button" class="close" data-dismiss="alert"
      aria-label="Close"><span aria-hidden=true>&times;</span>
      </button>
      </div>
    <?php endif; ?>

    <?php if(Session::get('failed')): ?>
      <div class="alert alert-warning  alert-dismissible fade show" 
      role="alert" id="gone">
      <strong><?php echo e(Session::get('failed')); ?></strong>
      <button type="button" class="close" data-dismiss="alert"
      aria-label="Close"><span aria-hidden=true>&times;</span>
      </button>
      </div>
    <?php endif; ?>

      


    <form action="<?php echo e(URL::to('post-category-form')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="categoryName">Category Name:</label>
          <input type="text" class="form-control mt-3" id="categoryName" 
           placeholder="Enter name" name="categoryName" />
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dulce\Documents\noveno\g2laravel\blog_api\resources\views/category/create.blade.php ENDPATH**/ ?>