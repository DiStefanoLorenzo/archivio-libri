

<?php $__env->startSection('header-title'); ?>
    I miei libri<a href="<?php echo e(route('book.create')); ?>" class="fab-new-note"><i class="bi bi-plus-lg"></i></a>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header-content'); ?>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
        </button>
        <ul class="dropdown-menu">

            <li><a href="<?php echo e(route('home')); ?>" class="dropdown-item me-4 <?php echo e(url()->current() == route('home') ? 'active' : ''); ?>">Tutte</a></li>
    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        
            <li>
                <a href="<?php echo e(route('category.show', $category->id)); ?>"
                class="dropdown-item <?php echo e((!$loop->last)?'me-4 ' : ''); ?><?php echo e(url()->current() == route('category.show', $category->id) ? 'active' : ''); ?>"><?php echo e($category->name); ?></a>
            </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li>Non sono presenti libri</li>
    <?php endif; ?>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php echo $__env->make('partial.book.block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <article class="row border-bottom border-dark-subtle py-3">
            <div class="col-12">
                Non sono presenti Libri.
            </div>
        </article>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Scuola\Informatica 4°anno\Professionale\Laboratorio\Laravel\Progetti\archivio-libri\resources\views/book/list.blade.php ENDPATH**/ ?>