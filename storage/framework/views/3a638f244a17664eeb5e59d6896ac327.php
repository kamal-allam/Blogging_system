

<?php $__env->startSection('content'); ?>
    <h1>Blog Posts</h1>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <h2><?php echo e($post->title); ?></h2>
            <p><?php echo e($post->description); ?></p>
            <p><small>Created At: <?php echo e(\Carbon\Carbon::parse($post->created_at)->format('d M Y')); ?></small></p>
            <a href="<?php echo e(route('posts.show', $post->id)); ?>">Read More</a>
            <a href="<?php echo e(route('posts.edit', $post->id)); ?>">Edit</a>
            <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo e($posts->links()); ?>  <!-- Pagination links -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kamal\blogging_system\resources\views/posts/index.blade.php ENDPATH**/ ?>