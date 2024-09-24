<div class="col-lg-8 col-md-10 offset-md-1 offset-lg-0 backlight">
    <?php

$kategorija_id = $product['category_id'];
$kategorija_ita = $product['category_nome'];
$kategorija_ser = $product['category_naziv'];
$kategorija_eng = $product['category_name'];
// $kategorija_ita = $product['category_nome'];
// $kategorija_ser = $product['category_naziv'];
$podkategorija_id = $product['subcategory_id'];
$podkategorija_eng = $product['subcategory_name'];
$podkategorija_ita = $product['subcategory_nome'];
$podkategorija_ser = $product['subcategory_naziv'];

echo '<ul class="breadcrumb"><li><a href="' . base_url() . 'products"><span class="eng-lang">Products</span><span class="ser-lang">Proizvodi</span><span class="ita-lang">Prodotti</span></a></li>';
echo '<li>></li>';
echo '<li><a href="' . base_url() . 'products/category/' . $kategorija_id . '"><span class="ita-lang">' . $kategorija_ita . '</span><span class="eng-lang">' . $kategorija_eng . '</span><span class="ser-lang">' . $kategorija_ser . '</span></a></li>';
echo '<li>></li>';
echo '<li><a href="' . base_url() . 'products/subcategory/' . $podkategorija_id . '"><span  class="eng-lang">' . $podkategorija_eng . '</span><span  class="ita-lang">' . $podkategorija_ita . '</span><span  class="ser-lang">' . $podkategorija_ser . '</span></a></li>';
echo '<li>></li>';
echo '<li><a href="' . base_url() . 'products/' . $product['id'] . '">' . $product['name'] . '</a></li>';
echo '</ul>';

?>

    <div class="product-card-big">
        <h4 class="text-center"><?php echo $product['name'] ?></h4>

        <!-- </div> -->

        <div class="justify-content-start d-flex">
            <img src="http://telcontrol.net/assets/img/productimg/<?php echo $product['url'] ?>"
                alt="<?php echo $product['url'] ?>">
            <p class="text-justify"><span class="eng-lang"><?php echo $product['description'] ?></span><span
                    class="ita-lang"><?php echo $product['it_description'] ?></span><span
                    class="ser-lang"><?php echo $product['sr_description'] ?></span></p>
        </div>
        <div class="row no-gutters">
            <div class="col-sm-12 col-md-6">
                <ul>
                    <?php if (!empty($product['power'])): ;?>
                    <b><span class="eng-lang">Power supply: </span><span class="ita-lang">Alimentazione: </span><span
                            class="ser-lang">Napajanje: </span></b>
                    <?php $karakter_niz = explode('|', $product['power']);?>
                    <?php foreach ($karakter_niz as $string): ?>
                    <li><?php echo $string ?></li>
                    <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <?php if (!empty($product['inputs'])): ;?>
                <ul>
                    <span class="eng-lang"><b>Inputs:</b></span>
                    <span class="ser-lang"><b>Ulazi:</b></span>
                    <span class="ita-lang"><b>Ingressi:</b></span>
                    <?php $karakter_eng = explode('|', $product['inputs']);?>
                    <?php $karakter_ser = explode('|', $product['sr_inputs']);?>
                    <?php $karakter_ita = explode('|', $product['it_inputs']);?>

                    <div class="eng-lang">
                        <?php foreach ($karakter_eng as $string_eng): ?>
                        <li><?php echo $string_eng ?></li>
                        <?php endforeach;?>
                    </div>
                    <div class="ser-lang">
                        <?php foreach ($karakter_ser as $string_ser): ?>
                        <li><?php echo $string_ser ?></li>
                        <?php endforeach;?>
                    </div>
                    <div class="ita-lang">
                        <?php foreach ($karakter_ita as $string_ita): ?>
                        <li><?php echo $string_ita ?></li>
                        <?php endforeach;?>
                    </div>
                </ul>
                <?php endif;?>
                <?php if (!empty($product['features'])): ;?>
                <ul>
                    <span class="eng-lang"><b>Additional features:</b></span>
                    <span class="ser-lang"><b>Dodatne funkcije:</b></span>
                    <span class="ita-lang"><b>Caratteristiche aggiuntive:</b></span>

                    <?php $karakter_eng = explode('|', $product['features']);?>
                    <?php $karakter_ser = explode('|', $product['sr_features']);?>
                    <?php $karakter_ita = explode('|', $product['it_features']);?>

                    <div class="eng-lang">
                        <?php foreach ($karakter_eng as $string_eng): ?>
                        <li><?php echo $string_eng ?></li>
                        <?php endforeach;?>
                    </div>
                    <div class="ser-lang">
                        <?php foreach ($karakter_ser as $string_ser): ?>
                        <li><?php echo $string_ser ?></li>
                        <?php endforeach;?>
                    </div>
                    <div class="ita-lang">
                        <?php foreach ($karakter_ita as $string_ita): ?>
                        <li><?php echo $string_ita ?></li>
                        <?php endforeach;?>
                    </div>
                </ul>
                <?php endif;?>
            </div>
            <div class="col-sm-12 col-md-6">
                <?php if (!empty($product['outputs'])): ;?>
                <ul>
                    <span class="eng-lang"><b>Outputs:</b></span>
                    <span class="ser-lang"><b>Izlazi:</b></span>
                    <span class="ita-lang"><b>Uscite:</b></span>
                    <?php $karakter_eng = explode('|', $product['outputs']);?>
                    <?php $karakter_ser = explode('|', $product['sr_outputs']);?>
                    <?php $karakter_ita = explode('|', $product['it_outputs']);?>

                    <div class="eng-lang">
                        <?php foreach ($karakter_eng as $string_eng): ?>
                        <li><?php echo $string_eng ?></li>
                        <?php endforeach;?>
                    </div>
                    <div class="ser-lang">
                        <?php foreach ($karakter_ser as $string_ser): ?>
                        <li><?php echo $string_ser ?></li>
                        <?php endforeach;?>
                    </div>
                    <div class="ita-lang">
                        <?php foreach ($karakter_ita as $string_ita): ?>
                        <li><?php echo $string_ita ?></li>
                        <?php endforeach;?>
                    </div>
                </ul>
                <?php endif;?>
                <?php if (!empty($product['resources'])): ;?>
                <ul>
                    <span class="eng-lang"><b>Resources:</b></span>
                    <span class="ser-lang"><b>Resursi:</b></span>
                    <span class="ita-lang"><b>Risorse:</b></span>
                    <?php $karakter_eng = explode('|', $product['resources']);?>
                    <?php $karakter_ser = explode('|', $product['sr_resources']);?>
                    <?php $karakter_ita = explode('|', $product['it_resources']);?>

                    <div class="eng-lang">
                        <?php foreach ($karakter_eng as $string_eng): ?>
                        <li><?php echo $string_eng ?></li>
                        <?php endforeach;?>
                    </div>
                    <div class="ser-lang">
                        <?php foreach ($karakter_ser as $string_ser): ?>
                        <li><?php echo $string_ser ?></li>
                        <?php endforeach;?>
                    </div>
                    <div class="ita-lang">
                        <?php foreach ($karakter_ita as $string_ita): ?>
                        <li><?php echo $string_ita ?></li>
                        <?php endforeach;?>
                    </div>
                </ul>
                <?php endif;?>
                <?php if (!empty($product['cable'])): ;?>
                <ul>
                    <span class="eng-lang"><b>Cable kit:</b></span>
                    <span class="ita-lang"><b>Kit cablaggio:</b></span>
                    <span class="ser-lang"><b>Komplet kablova:</b></span>
                    <?php $karakter_eng = explode('|', $product['cable']);?>
                    <?php $karakter_ser = explode('|', $product['sr_cable']);?>
                    <?php $karakter_ita = explode('|', $product['it_cable']);?>

                    <div class="eng-lang">
                        <?php foreach ($karakter_eng as $string_eng): ?>
                        <li><?php echo $string_eng ?></li>
                        <?php endforeach;?>
                    </div>
                    <div class="ser-lang">
                        <?php foreach ($karakter_ser as $string_ser): ?>
                        <li><?php echo $string_ser ?></li>
                        <?php endforeach;?>
                    </div>
                    <div class="ita-lang">
                        <?php foreach ($karakter_ita as $string_ita): ?>
                        <li><?php echo $string_ita ?></li>
                        <?php endforeach;?>
                    </div>
                </ul>
                <?php endif;?>
            </div>
            <div class="col-sm-12 col-md-6">
                <?php if (!empty($product['accessories'])): ;?>
                <p class=""><span class="eng-lang"><b>Managed accessories:
                        </b><?php echo $product['accessories'] ?></span>
                    <span class="ita-lang"><b>Accessori disponibili: </b><?php echo $product['it_accessories'] ?></span>
                    <span class="ser-lang"><b>Oprema: </b><?php echo $product['sr_accessories'] ?></span>
                </p>
                <?php endif;?>
            </div>
            <div class="col-sm-12">
                <?php if (!empty($product['parameter'])): ;?>
                <p class=""><span class="eng-lang"><b>Parameter programming:
                        </b><?php echo $product['parameter'] ?></span>
                    <span class="ita-lang"><b>Programmazione Parametri:
                        </b><?php echo $product['it_parameter'] ?></span>
                    <span class="ser-lang"><b>Parametri programiranja: </b><?php echo $product['sr_parameter'] ?></span>
                </p>
                <?php endif;?>
                <?php if (!empty($product['gms'])): ;?>
                <p class=""><span class="eng-lang"><b>Internal GMS system: </b><?php echo $product['gms'] ?></span>
                    <span class="ita-lang"><b>Sistema GSM interno: </b><?php echo $product['it_gms'] ?></span>
                    <span class="ser-lang"><b>Interni GSM sistem: </b><?php echo $product['sr_gms'] ?></span>
                </p>
                <?php endif;?>
                <?php if (!empty($product['appliances'])): ;?>
                <p class=""><span class="eng-lang"><b>Appliances: </b><?php echo $product['appliances'] ?></span>
                    <span class="ita-lang"><b>Applicazioni: </b><?php echo $product['it_appliances'] ?></span>
                    <span class="ser-lang"><b>Primena: </b><?php echo $product['sr_appliances'] ?></span>
                </p>
                <?php endif;?>
                <?php if (!empty($product['housing'])): ;?>
                <p class=""><span class="eng-lang"><b>Housing: </b><?php echo $product['housing'] ?></span>
                    <span class="ita-lang"><b>Contenitore: </b><?php echo $product['it_housing'] ?></span>
                    <span class="ser-lang"><b>Kućište: </b><?php echo $product['sr_housing'] ?></span>
                </p>
                <?php endif;?>
                <?php if (!empty($product['other'])): ;?>
                <p class=""><span class="eng-lang"><b>Other: </b><?php echo $product['other'] ?></span>
                    <span class="ita-lang"><b>Altro: </b><?php echo $product['it_other'] ?></span>
                    <span class="ser-lang"><b>Ostalo: </b><?php echo $product['sr_other'] ?></span>
                </p>
                <?php endif;?>
                <?php if (!empty($product['pdf'])) :; ?>
                <p class=""><span class="eng-lang"><b>Pdf documentation download: </b></span><span class="ser-lang"><b>Pdf dokumentacija download: </b></span><span class="ita-lang"><b>Pdf documentazione download: </b></span>
                    <a id="downloadPdf" href="<?=base_url("Products/downloadFile/")?><?php echo $product['pdf'] ?>"><?php echo $product['pdf'] ?></a>
                    </p>
                <?php endif; ?>
            </div>
        </div>

        <div class="pl-2 text-primary">
            <?php echo
'<a  href="' . base_url() . 'products/subcategory/' . $podkategorija_id . '"><span class="eng-lang"><i>Look more ' . $podkategorija_eng . '</i></span><span class="ser-lang"><i>Pogledaj još ' . $podkategorija_ser . '</i></span><span class="ita-lang"><i>Guarda di più ' . $podkategorija_ita . '</i></span></a>';
?>
            <br>
        </div>
    </div>

</div>
</div>
</div>
<!-- container end x-->
</section>
</main>