<br><br><br><br><br>
<script>
function langChange(lang) {
    if (lang == 2) {
        console.log("srb");
        $(".srb").addClass("show");
        // $("mb-5.col-md-6").addClass("order-first");
        $(".ita").removeClass("show");
    } else {
        console.log('ita');
        $(".ita").addClass("show");
        $(".srb").removeClass("show");
    }
}
</script>
<h2 class="text-center"><?=$page_title?></h2>
<div class="container-fluid p-5 create">
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('products/update'); ?>
    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
    <input type="hidden" name="image" value="<?php echo $product['url']; ?>">
    <div class="container">
        <div class="row d-flex py-4 align-items-center justify-content-center">

            <div class="mb-5 col-md-6 col-sm-12">
                <label>Category</label>
                <select name="category_id" id="">
                    <?php foreach ($categories as $category): ?>
                    <option <?=$category['id'] == $product['category_id'] ? "selected" : ""?>
                        value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="mb-5 col-md-6 col-sm-12">
                <label>Subcategory</label>
                <select name="subcategory_id" id="">
                    <?php foreach ($subcategories as $subcategory): ?>
                    <option <?=$subcategory['id'] == $product['subcategory_id'] ? "selected" : ""?>
                        value="<?php echo $subcategory['id']; ?>"><?php echo $subcategory['name']; ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="mb-5 col-md-6 col-sm-12">
                <label>Upload image</label>
                <input value="<?php echo $product['url']; ?>" type="file" id="userfile" name="userfile" size="20">
            </div>
            <div class="mb-5 col-md-6 col-sm-12">
                <label>Recomended</label>
                <?php if ($product['recomended'] == 1): ;?>
                <input class="mr-auto" type="checkbox" name="recomended"  checked />
                <?php else:;?>
                <input class="mr-auto" type="checkbox" name="recomended" value="accept" />
                <?php endif;?>
            </div>
            <div class="d-flex language">
                <button onclick="langChange(1);" type="button" class="italy-btn btn">Italiano</button>
                <button onclick="langChange(2);" type="button" class="srb-btn btn">Srpski</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 eng m-auto">
            <div class="">
                <br>
                <h3>English</h3>
                <div class="mb-5">
                    <label>Name</label>
                    <input value="<?php echo $product['name']; ?>" type="text" name="name">
                </div>
                <div class="mb-5">
                    <label>Description</label>
                    <textarea value="<?php echo $product['description']; ?>"
                        name="description"><?php echo $product['description']; ?></textarea>
                </div>
                <div class="mb-5">
                    <label>Housing</label>
                    <input value="<?php echo $product['housing']; ?>" type="text" name="housing">
                </div>
                <div class="mb-5">
                    <label>Power supply</label>
                    <input value="<?php echo $product['power']; ?>" type="text" name="power">
                </div>
                <div class="mb-5">
                    <label>Internal GMS system</label>
                    <input value="<?php echo $product['gms']; ?>" type="text" name="gms">
                </div>
                <div class="mb-5">
                    <label>Resources</label>
                    <input value="<?php echo $product['resources']; ?>" name="resources"></input>
                </div>
                <div class="mb-5">
                    <label>Parameter programming</label>
                    <input value="<?php echo $product['parameter']; ?>" name="parameter"></input>
                </div>
                <div class="mb-5">
                    <label>Inputs</label>
                    <input value="<?php echo $product['inputs']; ?>" name="inputs"></input>
                </div>
                <div class="mb-5">
                    <label>Outputs</label>
                    <input value="<?php echo $product['outputs']; ?>" name="outputs"></input>
                </div>
                <div class="mb-5">
                    <label>Cable kit</label>
                    <input value="<?php echo $product['cable']; ?>" name="cable"></input>
                </div>
                <div class="mb-5">
                    <label>Managed accessories</label>
                    <input value="<?php echo $product['accessories']; ?>" name="accessories"></input>
                </div>
                <div class="mb-5">
                    <label>Additional features</label>
                    <input value="<?php echo $product['features']; ?>" name="features"></input>
                </div>
                <div class="mb-5">
                    <label>Appliances</label>
                    <input value="<?php echo $product['appliances']; ?>" name="appliances"></input>
                </div>
                <div class="mb-5">
                    <label>Other</label>
                    <input value="<?php echo $product['other']; ?>" name="other"></input>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 ita  m-auto">
            <div class="">
                <br>
                <h3>Italiano</h3>
                <div class="mb-5">
                    <label>Nome</label>
                    <input value="<?php echo $product['it_name']; ?>" type="text" name="it_name">
                </div>
                <div class="mb-5">
                    <label>Descrizione</label>
                    <textarea value="<?php echo $product['it_description']; ?>" name="it_description"><?php echo $product['it_description']; ?></textarea>
                </div>
                <div class="mb-5">
                    <label>Contenitore</label>
                    <input value="<?php echo $product['it_housing']; ?>" type="text" name="it_housing">
                </div>
                <div class="mb-5">
                    <label>Alimentazione</label>
                    <input value="<?php echo $product['it_power']; ?>" type="text" name="it_power">
                </div>
                <div class="mb-5">
                    <label>Sistema GSM interno</label>
                    <input value="<?php echo $product['it_gms']; ?>" type="text" name="it_gms">
                </div>
                <div class="mb-5">
                    <label>Risorse</label>
                    <input value="<?php echo $product['it_resources']; ?>" name="it_resources"></input>
                </div>
                <div class="mb-5">
                    <label>Programmazione Parametri</label>
                    <input value="<?php echo $product['it_parameter']; ?>" name="it_parameter"></input>
                </div>
                <div class="mb-5">
                    <label>Ingressi</label>
                    <input value="<?php echo $product['it_inputs']; ?>" name="it_inputs"></input>
                </div>
                <div class="mb-5">
                    <label>Uscite</label>
                    <input value="<?php echo $product['it_outputs']; ?>" name="it_outputs"></input>
                </div>
                <div class="mb-5">
                    <label>Kit cablaggio</label>
                    <input value="<?php echo $product['it_cable']; ?>" name="it_cable"></input>
                </div>
                <div class="mb-5">
                    <label>Accessori disponibili</label>
                    <input value="<?php echo $product['it_accessories']; ?>" name="it_accessories"></input>
                </div>
                <div class="mb-5">
                    <label>Caratteristiche aggiuntive</label>
                    <input value="<?php echo $product['it_features']; ?>" name="it_features"></input>
                </div>
                <div class="mb-5">
                    <label>Appliances</label>
                    <input value="<?php echo $product['it_appliances']; ?>" name="it_appliances"></input>
                </div>
                <div class="mb-5">
                    <label>Altra</label>
                    <input value="<?php echo $product['it_other']; ?>" name="it_other"></input>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-6 srb  m-auto">
            <div class="">
                <br>
                <h3>Srpski</h3>
                <div class="mb-5">
                    <label>Naziv</label>
                    <input value="<?php echo $product['sr_name']; ?>" type="text" name="sr_name">
                </div>
                <div class="mb-5">
                    <label>Opis</label>
                    <textarea value="<?php echo $product['sr_description']; ?>" name="sr_description"><?php echo $product['sr_description']; ?></textarea>
                </div>
                <div class="mb-5">
                    <label>Kućište</label>
                    <input value="<?php echo $product['sr_housing']; ?>" type="text" name="sr_housing">
                </div>
                <div class="mb-5">
                    <label>Napajanje</label>
                    <input value="<?php echo $product['sr_power']; ?>" type="text" name="sr_power">
                </div>
                <div class="mb-5">
                    <label>Interni GSM sistem</label>
                    <input value="<?php echo $product['sr_gms']; ?>" type="text" name="sr_gms">
                </div>
                <div class="mb-5">
                    <label>Resursi</label>
                    <input value="<?php echo $product['sr_resources']; ?>" name="sr_resources"></input>
                </div>
                <div class="mb-5">
                    <label>Parametri programiranja</label>
                    <input value="<?php echo $product['sr_parameter']; ?>" name="sr_parameter"></input>
                </div>
                <div class="mb-5">
                    <label>Ulazi</label>
                    <input value="<?php echo $product['sr_inputs']; ?>" name="sr_inputs"></input>
                </div>
                <div class="mb-5">
                    <label>Izlazi</label>
                    <input value="<?php echo $product['sr_outputs']; ?>" name="sr_outputs"></input>
                </div>
                <div class="mb-5">
                    <label>Komplet kablova</label>
                    <input value="<?php echo $product['sr_cable']; ?>" name="sr_cable"></input>
                </div>
                <div class="mb-5">
                    <label>Oprema</label>
                    <input value="<?php echo $product['sr_accessories']; ?>" name="sr_accessories"></input>
                </div>
                <div class="mb-5">
                    <label>Dodatne funkcije</label>
                    <input value="<?php echo $product['sr_features']; ?>" name="sr_features"></input>
                </div>
                <div class="mb-5">
                    <label>Primena</label>
                    <input value="<?php echo $product['sr_appliances']; ?>" name="sr_appliances"></input>
                </div>
                <div class="mb-5">
                    <label>Ostalo</label>
                    <input value="<?php echo $product['sr_other']; ?>" name="sr_other"></input>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <button type="submit" class="w-50 d-flex justify-content-center m-auto"><span
                class="eng-lang">Submit</span><span class="ita-lang">Invia</span><span
                class="ser-lang">Snimi</span></button>
    </div>
    </form>
</div>