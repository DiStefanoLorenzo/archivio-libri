<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le mie Note - <?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Libri</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('author.home')); ?>">Autori</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container fix-container shadow p-5 mt-3">
    @session('success')
    <div id="flash-message"></div>
    @endsession

    <section class="row mb-4">
        <h1 class="text-center mb-5"><?php echo $__env->yieldContent('header-title'); ?></h1>
        <div class="col-sm-12">
            <div class="col-md-12">
                <?php echo $__env->yieldContent('header-content'); ?>
            </div>
        </div>
    </section>
    <section class="notes overflow-auto">
        <?php echo $__env->yieldContent('main-content'); ?>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script>
    setTimeout(() => {
        let flash_message = document.querySelector('#flash-message');
        if (flash_message) {
            flash_message.style.display = 'none';
        }
    }, 3000);
</script>
</body>
</html>
<?php /**PATH D:\Scuola\Informatica 4°anno\Professionale\Laboratorio\Laravel\Progetti\archivio-libri\resources\views/layout/main.blade.php ENDPATH**/ ?>