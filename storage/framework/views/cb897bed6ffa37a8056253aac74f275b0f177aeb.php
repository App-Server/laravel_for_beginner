<?php $__env->startSection('title', 'Lista de clientes'); ?>

<?php $__env->startSection('content'); ?>

<!--  -->

<div class="container col-md-3" style="margin-top: 250px;">
    <h2>Cadastro de cliente</h2>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <a href="/"><button type="button" class="btn btn-primary">Entrar</button></a>
    </form>
    
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/course_laravel/app_laravel/resources/views/customer.blade.php ENDPATH**/ ?>