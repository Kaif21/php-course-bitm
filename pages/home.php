<?php include "includes/header.php"; ?>

<div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
    <div class="carousel-inner">
        <?php foreach ($sliders as $key => $slider) { ?>
        <div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>">
            <img src="<?php echo $slider['image']; ?>" alt="" class="w-100"/>
            <div class="carousel-caption">
                <h1><?php echo $slider['title']; ?></h1>
                <p><?php echo $slider['description']; ?></p>
                <a href="route.php?page=detail&&id=<?php echo $slider['id']; ?>" class="btn btn-danger">Read More..</a>
            </div>
        </div>
        <?php } ?>
    </div>
    <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a href="#slider" class="carousel-control-next" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $product['image']; ?>" alt=""/>
                    <div class="card-body">
                        <h4><?php echo $product['name']; ?></h4>
                        <p><?php echo $product['description']; ?></p>
                        <p>Tk. <?php echo $product['price']; ?></p>
                        <hr/>
                        <a href="" class="btn btn-danger">Read More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="" alt="">
                    <div class="card-body">
                        <h1>sdfafasd</h1>
                        <p>sdfsadf</p>
                        <a href="" class="btn btn-success">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>