<!-- resources/views/cocktails/show.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="max-w-2xl mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5"><?php echo e($cocktail['strDrink']); ?></h1>
        <div class="flex justify-between items-start mt-5">
            <div class="w-1/2">
                <img src="<?php echo e($cocktail['strDrinkThumb']); ?>" alt="<?php echo e($cocktail['strDrink']); ?>" class="max-w-full h-auto">
            </div>
            <div class="w-1/2">
                <p><?php echo e($cocktail['strInstructions']); ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wen\Desktop\cocktail\cooktail-test\cocktail-test\resources\views/cocktails/show.blade.php ENDPATH**/ ?>