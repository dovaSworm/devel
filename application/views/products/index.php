<div class="col-lg-8 col-md-10 offset-md-1 offset-lg-0 products-class">

    <h3 class="text-center"><span class="eng-lang">Products</span><span class="ita-lang">Prodotti</span><span
            class="ser-lang">Proizvodi</span></h3>
    <?php
$kategorija_id = $products[0]['category_id'];

$kategorija_eng = $products[0]['category_name'];
$kategorija_ita = $products[0]['category_nome'];
$kategorija_ser = $products[0]['category_naziv'];
$podkategorija_eng = $products[0]['subcategory_name'];
$podkategorija_ita = $products[0]['subcategory_nome'];
$podkategorija_ser = $products[0]['subcategory_naziv'];
echo '<ul class="breadcrumb"><li><a href="' . base_url() . 'products"><span class="eng-lang">Products</span><span class="ser-lang">Proizvodi</span><span class="ita-lang">Prodotti</span></a></li>';
echo '<li>></li>';
echo '<li><a href="' . base_url() . 'products/category/' . $products[0]['category_id'] . '"><span class="ita-lang">' . $kategorija_ita . '</span><span class="ser-lang">' . $kategorija_ser . '</span><span class="eng-lang">' . $kategorija_eng . '</span></a></li>';
echo '<li>></li>';
echo '<li><a href="' . base_url() . 'products/subcategory/' . $products[0]['subcategory_id'] . '"><span class="ita-lang">' . $podkategorija_ita . '</span><span class="eng-lang">' . $podkategorija_eng . '</span><span class="ser-lang">' . $podkategorija_ser . '</span></a></li>';
echo '</ul>';

?>
    <?php foreach ($products as $product): ?>
    <div class="product-card-small">
        <h4><span class="eng-lang"><?php echo $product['name'] ?></span><span
                class="ser-lang"><?php echo $product['sr_name'] ?></span><span
                class="ita-lang"><?php echo $product['it_name'] ?></span></h4>

        <div class="row no-gutters">
            <div class="col-sm-12 col-md-6 text-left">
                <div class="pics">

                    <img src="http://telcontrol.net/assets/img/productimg/<?php echo $product['url'] ?>"
                        alt="<?php echo $product['url'] ?>">
                </div>
                <p class="text-justify mt-2">
                    <span class="eng-lang"><?php echo word_limiter($product['description'], 100); ?></span><span
                        class="ita-lang"><?php echo word_limiter($product['it_description'], 100); ?></span><span
                        class="ser-lang"><?php echo word_limiter($product['sr_description'], 100); ?></span>
                </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="text-justify"><b>
                        <span class="eng-lang">Appliances:</span>
                        <span class="ser-lang">Primena:</span>
                        <span class="ita-lang">Applicazioni:</span>
                    </b><span class="eng-lang"><?php echo word_limiter($product['appliances'], 30); ?></span><span
                        class="ita-lang"><?php echo word_limiter($product['it_appliances'], 30); ?></span><span
                        class="ser-lang"><?php echo word_limiter($product['sr_appliances'], 30); ?></span></p>
                <ul class="ml-md-5 ml-lg-0">
                    <b><span class="eng-lang">Power supply:</span><span class="ser-lang">Napajanje</span><span
                            class="ita-lang">Alimentazione</span></b>
                    <?php $karakter_eng = explode('|', $product['power']);
$novi_eng = array($karakter_eng[0] ?? "-", $karakter_eng[1] ?? "-", $karakter_eng[2] ?? "-");
?>
                    <?php $karakter_ser = explode('|', $product['sr_power']);
$novi_ser = array($karakter_ser[0] ?? "-", $karakter_ser[1] ?? "-", $karakter_ser[2] ?? "-");
?>
                    <?php $karakter_ita = explode('|', $product['it_power']);
$novi_ita = array($karakter_ita[0] ?? "-", $karakter_ita[1] ?? "-", $karakter_ita[2] ?? "-");
?>
                    <div class="eng-lang">
                        <?php foreach ($novi_eng as $string_eng): ?>
                        <li><?php echo $string_eng ?></li>
                        <?php endforeach;?>
                    </div>
                    <div class="ser-lang">
                        <?php foreach ($novi_ser as $string_ser): ?>
                        <li><?php echo $string_ser ?></li>
                        <?php endforeach;?>
                    </div>
                    <div class="ita-lang">
                        <?php foreach ($novi_ita as $string_ita): ?>
                        <li><?php echo $string_ita ?></li>
                        <?php endforeach;?>
                    </div>
                </ul>

                <p class="text-justify"><b>
                        <span class="eng-lang">Housing:</span>
                        <span class="ser-lang">Kućište:</span>
                        <span class="ita-lang">Contenitore:</span>
                    </b><span class="eng-lang"><?php echo word_limiter($product['housing'], 30); ?></span><span
                        class="ita-lang"><?php echo word_limiter($product['it_housing'], 30); ?></span><span
                        class="ser-lang"><?php echo word_limiter($product['sr_housing'], 30); ?></span></p>
            </div>
        </div>

        <p class="text-primary"><a href="<?php echo site_url('products/view/' . $product['id']); ?>"><span
                    class="eng-lang">Read more</span><span class="ita-lang">Leggi di più</span><span
                    class="ser-lang">Detaljnije</span></a>
        </p>
    </div>
    <?php endforeach;?>
    <div class="pagination-links">
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>

</div>
</div>
</div>
<!-- container end -->
</section>
