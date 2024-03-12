<!-- resources/views/cocktails/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="max-w-2xl mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Cocktails</h1>
        <ul class="space-y-4">
            <?php $__currentLoopData = $cocktails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cocktail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="bg-white border border-gray-200 p-4">
                    <a href="<?php echo e(route('cocktails.show', $cocktail['idDrink'])); ?>" class="text-blue-500 font-semibold">
                        <?php echo e($cocktail['strDrink']); ?>

                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wen\Desktop\cocktail\cooktail-test\cocktail-test\resources\views/cocktails/index.blade.php ENDPATH**/ ?>