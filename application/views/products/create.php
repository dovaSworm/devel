<br><br><br><br><br>
<h2><?=$title?></h2>
<script>
function langChange(lang) {
    if (lang == 2) {
        console.log("srb");
        $(".srb").addClass("show");
        // $(".col-md-6").addClass("order-first");
        $(".ita").removeClass("show");
    } else {
        console.log('ita');
        $(".ita").addClass("show");
        $(".srb").removeClass("show");
    }
}
</script>
<div class="container-fluid p-5 create">
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('products/create'); ?>
    <div class="container">
        <div class="row d-flex py-4 align-items-center justify-content-center">

            <div class="mb-5 col-md-6 col-sm-12">
                <label>Category</label>
                <select name="category_id" id="">
                    <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="mb-5 col-md-6 col-sm-12">
                <label>Subcategory</label>
                <select name="subcategory_id" id="">
                    <?php foreach ($subcategories as $subcategory): ?>
                    <option value="<?php echo $subcategory['id']; ?>"><?php echo $subcategory['name']; ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="mb-5 col-md-6 col-sm-12">
                <label>Upload image</label>
                <input id="userfile" type="file" name="userfile" size="20">
            </div>
            <div class="mb-5 col-md-6 col-sm-12">
                <label>Recomended</label>
                <input  type="checkbox" name="recomended" value="accept" />
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
                    <input type="text" name="name">
                </div>
                <div class="mb-5">
                    <label>Description</label>
                    <textarea name="description"></textarea>
                </div>
                <div class="mb-5">
                    <label>Housing</label>
                    <input type="text" name="housing">
                </div>
                <div class="mb-5">
                    <label>Power supply</label>
                    <input type="text" name="power">
                </div>
                <div class="mb-5">
                    <label>Internal GMS system</label>
                    <input type="text" name="gms">
                </div>
                <div class="mb-5">
                    <label>Resources</label>
                    <input name="resources"></input>
                </div>
                <div class="mb-5">
                    <label>Parameter programming</label>
                    <input name="parameter"></input>
                </div>
                <div class="mb-5">
                    <label>Inputs</label>
                    <input name="inputs"></input>
                </div>
                <div class="mb-5">
                    <label>Outputs</label>
                    <input name="outputs"></input>
                </div>
                <div class="mb-5">
                    <label>Cable kit</label>
                    <input name="cable"></input>
                </div>
                <div class="mb-5">
                    <label>Managed accessories</label>
                    <input name="accessories"></input>
                </div>
                <div class="mb-5">
                    <label>Additional features</label>
                    <input name="features"></input>
                </div>
                <div class="mb-5">
                    <label>Appliances</label>
                    <input name="appliances"></input>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 ita">
            <div class="">
                <br>
                <h3>Italiano</h3>
                <div class="mb-5">
                    <label>Codice</label>
                    <input type="text" name="it_name">
                </div>
                <div class="mb-5">
                    <label>Descrizione</label>
                    <textarea name="it_description"></textarea>
                </div>
                <div class="mb-5">
                    <label>Contenitore</label>
                    <input type="text" name="it_housing">
                </div>
                <div class="mb-5">
                    <label>Alimentazione</label>
                    <input type="text" name="it_power">
                </div>
                <div class="mb-5">
                    <label>Sistema GSM interno</label>
                    <input type="text" name="it_gms">
                </div>
                <div class="mb-5">
                    <label>Risorse</label>
                    <input name="it_resources"></input>
                </div>
                <div class="mb-5">
                    <label>Programmazione Parametri</label>
                    <input name="it_parameter"></input>
                </div>
                <div class="mb-5">
                    <label>Ingressi</label>
                    <input name="it_inputs"></input>
                </div>
                <div class="mb-5">
                    <label>Uscite</label>
                    <input name="it_outputs"></input>
                </div>
                <div class="mb-5">
                    <label>Kit cablaggio</label>
                    <input name="it_cable"></input>
                </div>
                <div class="mb-5">
                    <label>Accessori disponibili</label>
                    <input name="it_accessories"></input>
                </div>
                <div class="mb-5">
                    <label>Caratteristiche aggiuntive</label>
                    <input name="it_features"></input>
                </div>
                <div class="mb-5">
                    <label>Applicazioni</label>
                    <input name="it_appliances"></input>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-6 srb">
            <div class="">
                <br>
                <h3>Srpski</h3>
                <div class="mb-5">
                    <label>Ime</label>
                    <input type="text" name="sr_name">
                </div>
                <div class="mb-5">
                    <label>Opis</label>
                    <textarea name="sr_description"></textarea>
                </div>
                <div class="mb-5">
                    <label>Kućište</label>
                    <input type="text" name="sr_housing">
                </div>
                <div class="mb-5">
                    <label>Napajanje</label>
                    <input type="text" name="sr_power">
                </div>
                <div class="mb-5">
                    <label>Interni GMS sistem</label>
                    <input type="text" name="sr_gms">
                </div>
                <div class="mb-5">
                    <label>Resursi</label>
                    <input name="sr_resources"></input>
                </div>
                <div class="mb-5">
                    <label>Parametri programiranja</label>
                    <input name="sr_parameter"></input>
                </div>
                <div class="mb-5">
                    <label>Ulazi</label>
                    <input name="sr_inputs"></input>
                </div>
                <div class="mb-5">
                    <label>Izlazi</label>
                    <input name="sr_outputs"></input>
                </div>
                <div class="mb-5">
                    <label>Kabliranje</label>
                    <input name="sr_cable"></input>
                </div>
                <div class="mb-5">
                    <label>Oprema</label>
                    <input name="sr_accessories"></input>
                </div>
                <div class="mb-5">
                    <label>Dodatne funkcije</label>
                    <input name="sr_features"></input>
                </div>
                <div class="mb-5">
                    <label>Primena</label>
                    <input name="sr_appliances"></input>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <button type="submit" class="w-50 d-flex justify-content-center m-auto"><span class="eng-lang">Submit</span><span class="ita-lang">Invia</span><span class="ser-lang">Snimi</span></button>
    </div>
    </form>
</div>