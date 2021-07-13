<?php $__env->startSection('dashboard-content'); ?>
    <h1>Create Blog Post form</h1>
    
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

      


    <form action="<?php echo e(URL::to('store-blog-post')); ?>" method="post"
    enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="postTitle">Post Title:</label>
          <input type="text" class="form-control mt-3" id="postTitle" 
           placeholder="Enter post title:" name="postTitle" />
        </div>

        <div class="form-group">
          <label for="postDetails">Post Details:</label>
          <textarea class="form-control mt-3" id="postDetails" 
           placeholder="Enter post details:" name="postDetails"></textarea>
        </div>

        <div class="form-group">
          <label for="postCategory">Select a post category:</label>
          <select class="form-control mt-3" id="postCategory" 
           name="postCategory">
            <option>Select one</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>

        <div class="form-group">
          <label for="featuredPhoto">Select featured photo:</label>
          <input type="file" name="featuredPhoto" 
          class="form-control" id="featuredPhoto" onchange="loadPhoto(event);"/>
        </div>

        <div>
          <img id="photo" height="100" width="100" />
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </form>

      <script>
        function loadPhoto(event){
          var reader = new FileReader();
          reader.onload = function (){
            var output = document.getElementById('photo');
            output.src = reader.result;
          };
          reader.readAsDataURL(event.target.files[0]);
        }

        </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dulce\Documents\noveno\g2laravel\blog_api\resources\views/blog/create.blade.php ENDPATH**/ ?>