<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="XNMt2AUaHA_1FEYrodBBsMX6xYhqRElzmuul0n5yCfE" />
    <meta name="description"
        content="Devel offer to You Heating controls, Cooling & Refrigeration controls, HVAC controls, LIFT controls, Electrical devices assembling, installation and technical support.">
    <meta name="robots" content="index,follow">
    <meta name="author" content="rdDesign">
    <meta name="keywords"
        content="heating, cooling, refrigeration, air, controlls, controls, technical support, lift, assembling">
    <meta name="google-site-verification" content="pMiLlWc0tbntvS3Ky6VZVY9rHKxaVqnqZHD8daTZEus" />
    <link rel="canonical" href="http://devel.rs" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title><?php echo isset($title) ? $title : ''; ?></title>
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top d-block">
            <div class="container-fluid">
                <div id="logo">
                    <a class="" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png"
                            alt="Devel"></a>
                </div>
                <div data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" class="hamburger collapsed" title="MENU" role="navigation">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php"><span
                                    class="eng-lang">HOME</span>
                                <span class="ser-lang">POČETNA</span>
                                <span class="ita-lang">PAGINA INIZIALE</span></a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php#services"><span
                                    class="eng-lang">SERVICES</span>
                                <span class="ser-lang">USLUGE</span>
                                <span class="ita-lang">SERVIZI</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php#about">
                                <span class="eng-lang">ABOUT</span>
                                <span class="ser-lang">O NAMA</span>
                                <span class="ita-lang">CHI SIAMO</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php#contact"><span
                                    class="eng-lang">CONTACT</span>
                                <span class="ser-lang">KONTAKT</span>
                                <span class="ita-lang">CONTATTI</span></a>
                        </li>
                        <li class="nav-item dropdown dropdown-menu-right">
                            <a class="nav-link dropdown-toggle"
                                onClick="window.location.href = '<?php echo base_url(); ?>products';return false;"
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="eng-lang">PRODUCTS</span>
                                <span class="ser-lang">PROIZVODI</span>
                                <span class="ita-lang">PRODOTTI</span>
                            </a>

                            <ul class="dropdown-menu dropleft">
                                <li class="dropdown-submenu dropleft">
                                    <a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/category/1"><span
                                            class="eng-lang">Hydronic controls</span><span class="ita-lang">Controlli
                                            per L' AQUA DOMESTICA</span><span class="ser-lang">Kontrole
                                            hidronike</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/1"><span
                                                    class="eng-lang">Pressurization
                                                    controller</span><span class="ita-lang">Controlli per la
                                                    pressurizzazione</span><span class="ser-lang">Kontroler
                                                    pritiska</span></a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/3"><span
                                                    class="eng-lang">Expansion
                                                    Board</span><span class="ita-lang">Modulo espansione di
                                                    funzioni</span><span class="ser-lang">Modul za dodatne
                                                    ulaze/izlaze</span></a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/2"><span
                                                    class="eng-lang">Filter
                                                    controller</span><span class="ita-lang">Controlli per i
                                                    filtri</span><span class="ser-lang">Kontroler filtera</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/category/2"><span
                                            class="eng-lang">Compressed air treatment</span><span
                                            class="ita-lang">Trattamento dell'aria compressa</span><span
                                            class="ser-lang">Tretman komprimovanim vazduhom</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/4"><span
                                                    class="eng-lang">Refrigerated Air
                                                    controller</span><span class="ita-lang">Controlli a refrigerazione
                                                    dell'aria</span><span class="ser-lang">Kontroler vazdušnog
                                                    hlađenja</span></a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/5"><span
                                                    class="eng-lang">Absorbtion dryer
                                                    controller</span><span class="ita-lang">Controlli ad
                                                    assorbimento</span><span class="ser-lang">Kontroler
                                                    apsorpcije</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/category/3"><span class="eng-lang">HVAC
                                            controls</span><span class="ita-lang">Controlli per il clima</span><span
                                            class="ser-lang">HVAC kontrole</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/13"><span
                                                    class="eng-lang">DEK series</span><span class="ser-lang">DEK
                                                    serija</span><span class="ita-lang">DEK serie</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/category/4"><span
                                            class="eng-lang">Electrical heating controls</span><span
                                            class="ita-lang">Comandi per il riscaldamento elettrico</span><span
                                            class="ser-lang">Kontrole električnog grejanja</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/10"><span
                                                    class="eng-lang">Display GSM
                                                    thermostat</span><span class="ita-lang">Termostato con display LCD e
                                                    GSM</span><span class="ser-lang">Termostat GSM sa
                                                    displejom</span></a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/6"><span
                                                    class="eng-lang">On Board
                                                    thermostat</span><span class="ita-lang">Termostati bordo
                                                    macchina</span><span class="ser-lang">On Board thermostat</span></a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/7"><span
                                                    class="eng-lang">Plug in
                                                    thermostat</span><span class="ita-lang">Termostati da
                                                    presa</span><span class="ser-lang">Termostat sa utičnicom</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/category/5"><span
                                            class="eng-lang">Cooling and refrigeration</span><span
                                            class="ita-lang">Refrigerazione</span><span class="ser-lang">Kontrole
                                            hlađenja</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/11"><span
                                                    class="eng-lang">LEK & TEK
                                                    series</span><span class="ita-lang">Controllori digitali tipo LEK e
                                                    TEK</span><span class="ser-lang">LEK & TEK serije</span></a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/9"><span
                                                    class="eng-lang">REK series</span><span class="ita-lang">REK
                                                    serie</span><span class="ser-lang">REK serija</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/category/6"><span
                                            class="eng-lang">Remote controls</span><span class="ita-lang">Controlli
                                            remoti</span><span class="ser-lang">Kontrole daljinskog
                                            upravljanja</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/8"><span
                                                    class="eng-lang">OMD Telcom controls for lifts</span><span
                                                    class="ita-lang">OMD
                                                    Telcom controlli per ascensori</span><span class="ser-lang">OMD
                                                    Telcom daljinska kontrola liftova</span></a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/15"><span
                                                    class="eng-lang">Remote controls</span><span
                                                    class="ita-lang">Controlli remoti</span><span
                                                    class="ser-lang">Daljinska kontrola</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/category/7"><span
                                            class="eng-lang">Other</span><span class="ita-lang">Altro</span><span
                                            class="ser-lang">Ostalo</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/subcategory/14"><span
                                                    class="eng-lang">Other</span><span
                                                    class="ita-lang">Altro</span><span
                                                    class="ser-lang">Ostalo</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">

                            <div class="lang">
                                <button onclick="clickCounter('eng')"
                                    type="button"><span>EN</span></button>
                                <button onclick="clickCounter('ita')" type="button"><span>IT</span></button>
                                <button onclick="clickCounter('ser')" type="button"><span>SR</span></button>

                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php if ($this->session->flashdata('user_registered')): ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_registered') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>'; ?>
    <?php endif;?>
    <?php if ($this->session->flashdata('product_created')): ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('product_created') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif;?>
    <?php if ($this->session->flashdata('product_updated')): ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('product_updated') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif;?>
    <?php if ($this->session->flashdata('product_deleted')): ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('product_deleted') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif;?>
    <?php if ($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<p class="alert alert-success"  style="z-index:500000000000">' . $this->session->flashdata('user_loggedin') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif;?>
    <?php if ($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<p class="alert alert-success"  style="z-index:500000000000">' . $this->session->flashdata('user_loggedout') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif;?>
    <?php if ($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif;?>

    <input type="hidden" name="adminovo" id="adminovo" value="<?php echo $this->session->userdata('user_id'); ?>">