
<!-- Products Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Collar For Your Best Friends</h1>
            </div>
            <div class="owl-carousel product-carousel">
            <?php foreach($collars as $collar)
						{
							?>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?php echo $collar->image ?>" style="" alt="">
                        <h6 class="text-uppercase"><?php echo $collar->description ?></h6>
                        <h5 class="text-primary mb-0"><?php echo $collar->price ?></h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Products End -->