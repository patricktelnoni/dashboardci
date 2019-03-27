
<div class="row">
<?php
foreach ($menu->result_array() as $m) {?>

    <div class="col-md-4">
        <div class="thumbnail">
            <a href="<?=base_url()?>index.php/menu/tambahkeranjang/<?=$m['id']?>">
                <img src="<?=$m['gambar']?>" class="img-rounded" alt="Lights" style="width:50%">
                <div class="caption">
                    <p><?=$m['nama']?></p>
                    <p><?=$m['harga']?></p>
                </div>
            </a>
        </div>
    </div>
<?php
}

?>
</div>


<a class="btn-info" href="<?=base_url()?>index.php/menu/checkout">
    Checkout Pesanan
</a>

