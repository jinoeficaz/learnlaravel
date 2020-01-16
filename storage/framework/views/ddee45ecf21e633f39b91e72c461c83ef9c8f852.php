<div class="alert alert-danger">
    <h1><?php echo e($title); ?></h1>
    <?php echo e($slot); ?>

    <?php if($live == 'yes'): ?>
    	<small>Alien is very much alive</small>
    <?php else: ?>
    	<small>We killed and innocent alien :(  Give us a victory hug !</small>	
    <?php endif; ?>	
</div><?php /**PATH D:\wamp64\www\learnlaravel\resources\views/components/alert.blade.php ENDPATH**/ ?>