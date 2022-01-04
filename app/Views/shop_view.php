<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<style>
    .card {
        background: whitesmoke;
        box-shadow: 4px 4px 4px silver;
    }
</style>
<div class="shop py-5">
    <div class="container">
        <h1>Our Product</h1>
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#">Home</a>
            <span class="breadcrumb-item active">Shop</span>
        </nav>
        <p class="mt-4" style="font-weight: bold; font-size: 20px;">Category</p>
        <div class="row">
            <div class="col-md-3 col-6 my-2">
                <div class="card p-2">
                    <p align="center">
                        <img src="/assets/img/headphone.png" style="width: 80%;">
                    </p>
                    <p><strong>Headphone Sony</strong></p>
                    <p>$955 <span style="float: right;"><a href="/shop/detail">Detail</a></span></p>

                </div>
            </div>
            <div class="col-md-3 col-6 my-2">
                <div class="card p-2">
                    <p align="center">
                        <img src="/assets/img/headphone.png" style="width: 80%;">
                    </p>
                    <p><strong>Headphone Sony</strong></p>
                    <p>$955 <span style="float: right;"><a href="">Detail</a></span></p>

                </div>
            </div>
            <div class="col-md-3 col-6 my-2">
                <div class="card p-2">
                    <p align="center">
                        <img src="/assets/img/headphone.png" style="width: 80%;">
                    </p>
                    <p><strong>Headphone Sony</strong></p>
                    <p>$955 <span style="float: right;"><a href="">Detail</a></span></p>

                </div>
            </div>
            <div class="col-md-3 col-6 my-2">
                <div class="card p-2">
                    <p align="center">
                        <img src="/assets/img/headphone.png" style="width: 80%;">
                    </p>
                    <p><strong>Headphone Sony</strong></p>
                    <p>$955 <span style="float: right;"><a href="">Detail</a></span></p>

                </div>
            </div>

        </div>
        <a href="" style="float: right; margin-top: 20px;">See all</a>



    </div>
    <?= $this->endSection(); ?>