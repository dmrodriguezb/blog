<?php $__env->startSection('dashboard-content'); ?>

<?php if(Session::get('destroy')): ?>
      <div class="alert alert-danger  alert-dismissible fade show" 
      role="alert" id="gone">
      <strong><?php echo e(Session::get('destroy')); ?></strong>
      <button type="button" class="close" data-dismiss="alert"
      aria-label="Close"><span aria-hidden=true>&times;</span>
      </button>
      </div>
    <?php endif; ?>

    <?php if(Session::get('destroy-failed')): ?>
      <div class="alert alert-warning  alert-dismissible fade show" 
      role="alert" id="gone">
      <strong><?php echo e(Session::get('destroy-failed')); ?></strong>
      <button type="button" class="close" data-dismiss="alert"
      aria-label="Close"><span aria-hidden=true>&times;</span>
      </button>
      </div>
    <?php endif; ?>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Blog Post List</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Titulo del Post</th>
              <th>Comentario</th>
              <th>Opciones</th>
              
            </tr>
          </thead>
          
          <tbody>
            <?php $__currentLoopData = $comentarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($comentario->comenTitle); ?></td>
              <td><?php echo e($comentario->comentario); ?></td>
           
              <td>
                 <a href="<?php echo e(URL::to('delete-comentario')); ?>/<?php echo e($comentario->id); ?>"  class="btn btn-outline-danger btn-sm" onclick="return checkDelete()">Delete</a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
<script>
    function checkDelete(){
        var check = confirm("Are you sure you want to Delete this?");
        if(check){
            return true;
        }
        return false;
    }

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dulce\Documents\noveno\g2laravel\blog_api\resources\views/comentario/index.blade.php ENDPATH**/ ?>