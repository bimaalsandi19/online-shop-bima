<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<style>
    .name {
        font-weight: bold;
    }

    .detail {
        line-height: 25px;
    }

    .rating i {
        color: goldenrod;
    }

    .btn {
        width: 200px;
    }

    .card {
        opacity: 90%;
        box-shadow: 40px 40px 40px silver, -10px -10px 40px whitesmoke;
    }
</style>
<div class="py-5">
    <div class="container">
        <h1>Detail Product</h1>
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#">Home</a>
            <a class="breadcrumb-item" href="#">Shop</a>
            <span class="breadcrumb-item active">Detail Product</span>
        </nav>
        <div class="row">
            <div class="card p-3">
                <div class="row">
                    <div class="col-md-6">
                        <img src="/assets/img/headphone.png" class="w-100">
                    </div>
                    <div class="col-md-6 my-auto">
                        <h2 class="name">Headphone</h2>
                        <p class="detail">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam facere eius corporis excepturi ipsa sunt?</p>
                        <h3 class="price">$899</h3>
                        <div class="rating mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                            <span style="margin-left: 20px;">
                                411 reviews
                            </span>
                        </div>
                        <a href="#" onclick="" class="btn btn-dark">Buy Now</a>
                        <a href="#" onclick="myFunction()" class="btn btn-light">Add to Bucket</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        console.log('Dimasukkan kedalam keranjang ... ');
    }
</script>
<?= $this->endSection(); ?>