<article class="row border-bottom border-dark-subtle py-3">
    <div class="col-9">
        <a href="<?php echo e(route('book.show', $book->id)); ?>"><p class="mb-0"><strong><?php echo e(Str::substr($book->book, 0, 20)); ?> <?php echo e(strlen($book->book) > 20 ? '...' : ''); ?></strong></p>
            <strong>
                <?php echo e($book->title); ?>

            </strong>
            <br>
            <small>
                <?php echo e($book->updated_at->format('d/m/Y H:i:s')); ?>

            </small></a>
    </div>
    <div class="col-3 d-flex align-items-center justify-content-end">

        <form action="<?php echo e(route('book.delete',$book->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare un libro?')">
                <i class="bi bi-trash"></i>
            </button>
        </form>
        <a href="<?php echo e(route('book.edit', $book->id)); ?>"><i class="bi bi-pencil ms-3"></i></a>
    </div>
</article>
<?php /**PATH D:\Scuola\Informatica 4°anno\Professionale\Laboratorio\Laravel\Progetti\archivio-libri\resources\views/partial/book/block.blade.php ENDPATH**/ ?>