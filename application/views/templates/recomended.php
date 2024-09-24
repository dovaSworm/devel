<div class="col col-lg-8 col-12">
    <h3 class="text-center"><span class="eng-lang">Recomended products</span><span class="ser-lang">Preporučeni
            proizvodi</span><span class="ita-lang">PRODOTTI RACCOMANDATI</span><i class="far fa-thumbs-up"></i></h3>
    <div class="row no-gutters d-flex justify-content-around mt-4">
        <?php foreach ($products as $product): ?>
        <div class="product-card flex-column">
            <a href="<?php echo site_url('products/view/' . $product['id']); ?>">
                <img src="http://telcontrol.net/assets/img/productimg/<?php echo $product['url'] ?>" alt="Prva slika ">
                <h4><?php echo $product['name']; ?></h4>
                <p><?php echo $product['appliances']; ?></p>
                <?php if (!empty($product['features'])): ;?>

                <?php $karakter_eng = explode('|', $product['features']);?>
                <?php $karakter_ser = explode('|', $product['sr_features']);?>
                <?php $karakter_ita = explode('|', $product['it_features']);?>

                <p class="eng-lang">
                    <?php foreach ($karakter_eng as $string_eng): ?>
                    <?php echo $string_eng ?>
                    <?php endforeach;?>
                </p>
                <p class="ser-lang">
                    <?php foreach ($karakter_ser as $string_ser): ?>
                    <?php echo $string_ser ?>
                    <?php endforeach;?>
                </p>
                <p class="ita-lang">
                    <?php foreach ($karakter_ita as $string_ita): ?>
                    <?php echo $string_ita ?>
                    <?php endforeach;?>
                </p>

                <?php endif;?>
            </a>
        </div>
        <?php endforeach;?>
    </div>
</div>
</div>
</div>
</div>
<!-- container end -->
</section>