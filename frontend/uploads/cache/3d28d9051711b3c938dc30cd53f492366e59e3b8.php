<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php if(! have_posts()): ?>
    <x-alert type="warning">
      <?php echo __('Sorry, no results were found.', 'sage'); ?>

    </x-alert>
    <?php echo get_search_form(true); ?>

  <?php endif; ?>

  <?php while(have_posts()): ?> <?php echo e(the_post()); ?>

    <?php echo $__env->first(['partials.content-' . get_post_type(), 'partials.content'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?>

  <?php echo get_the_posts_navigation(); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
  <?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>