<?php $__env->startSection('dashboard-content'); ?>
    <h1>Comenta algo</h1>
    
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


    <form action="<?php echo e(URL::to('comentario')); ?>" method="post">
              <?php echo csrf_field(); ?>
       
    
         <div class="form-group">
          <label for="postTile">Selecciona el post:</label>
          <select class="form-control mt-3" id="postTile" 
           name="postTile">
            <option>Select one</option>
            <?php $__currentLoopData = $blogPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($blogPost->id); ?>"><?php echo e($blogPost->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>

        <div class="form-group">
          <label for="comenTitle">Titulo del Comentario:</label>
          <input type="text" class="form-control mt-3" id="comenTitle" 
           placeholder="Ingresa un Titulo:" name="comenTitle" />
        </div>

        <div class="form-group">
          <label for="comentario">Comentario:</label>
          <textarea class="form-control mt-3" id="comentario" 
           placeholder="Por favor escribe un comentario:" name="comentario"></textarea>
        </div>
        
        

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </form>

      

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dulce\Documents\noveno\g2laravel\blog_api\resources\views/extra/create.blade.php ENDPATH**/ ?>