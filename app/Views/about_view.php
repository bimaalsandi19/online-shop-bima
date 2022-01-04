<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<style>
    body {
        background: #fff !important;
    }

    .card {
        box-shadow: 4px 4px 4px silver;
    }
</style>
<div class="py-5">
    <div class="container">
        <h1>About Us</h1>
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#">Home</a>
            <span class="breadcrumb-item active">About Us</span>
        </nav>
        <div class="row">
            <div class="col-6 col-md-6">
                <img src="/assets/img/about.png" alt="about us" class="w-100">

            </div>
            <div class="col-6 col-md-6 mt-4">
                <div class="card p-2">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque veritatis aperiam exercitationem distinctio incidunt? Praesentium itaque, laboriosam labore omnis soluta alias quibusdam tempore consequuntur delectus dolores harum nam quae eligendi?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias illo saepe labore doloremque nihil tempore quaerat, ratione vero optio adipisci nobis exercitationem voluptatum corporis distinctio deleniti! Repellendus pariatur molestias est, maiores aut explicabo labore libero, consectetur vero autem ipsum corrupti nam officia atque! Perspiciatis quam unde totam quidem ipsum animi.</p>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>