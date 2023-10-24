<!--    banner-->

<div class="slideshow-container mt-4">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <img src="img/anh0.jpg" style="width:100%; height: 400px">
    </div>

    <div class="mySlides fade">
        <img src="img/anh1.jpg" style="width:100%; height: 400px">
    </div>

    <div class="mySlides fade">
        <img src="img/anh3.jpg" style="width:100%; height: 400px">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-arrow-left"></i></a>
    <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-arrow-right"></i></a>
</div>

<!--    end banner-->
<!--    product home-->

<div class="row mt-4">
    <?php
        foreach ($spnew as $sp){
            extract($sp);
            $hinh =  $img_path.$img;
            $linksp="index.php?act=sanphamct&idsp=".$id;
    ?>
    <div class="col-3 mb-4">
        <div class="card" style="width: 18rem;">
            <img src="<?=$hinh?>" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="<?=$linksp?>" class="card-title"><?=$name?></a>
                <p class="card-text"><?=$price?></p>
                <a href="#" class="btn btn-primary">ADD TO CART</a>
            </div>
        </div>
    </div>

   <?php }?>
</div>
<!--    end product home-->
