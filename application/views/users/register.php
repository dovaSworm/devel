<br><br><br><br>
<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>

<div class="container register mb-5">
    <div class="col-ms-12 col-md-8 m-auto">
<?php echo form_open('users/register'); ?>

<div class="form-group">
    <label>//<span class="eng-lang">Name</span><span class="ita-lang">Nome</span><span class="ser-lang">Snimi</span></label>
    <input type="text" name="name" >
</div>
<div class="form-group">
    <label><span class="eng-lang">User name</span><span class="ita-lang">Nome utente</span><span class="ser-lang">Korisničko ime</span></label>
    <input type="text" name="username" >
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" >
</div>
<div class="form-group">
    <label><span class="eng-lang">Password</span><span class="ita-lang">Parola d'ordine</span><span class="ser-lang">Lozinka</span></label>
    <input type="password" name="password" >
</div>
<div class="form-group">
    <label><span class="eng-lang">Repeated password</span><span class="ita-lang">Ripeti la parola d'ordine</span><span class="ser-lang">Ponovljena lozinka</span></label>
    <input type="password" name="password2">
</div>
<button type="submit"><span class="eng-lang">Submit</span><span class="ita-lang">Invia</span><span class="ser-lang">Snimi</span></button>
<?php echo form_close(); ?>
</div></div>