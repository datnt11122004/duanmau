<div class="row mt-4">
    <?php
    foreach ($dssp as $sp){
        extract($sp);
        $hinh =  $img_path.$img;
        $linksp="index.php?act=sanphamct&idsp=".$id_sp;
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