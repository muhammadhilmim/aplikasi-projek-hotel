<hr>
<hr>
<hr>
<hr>

<section align = center class="page-section portfolio" id="portfolio">
    <div class="container">
    <div class="row">
    <div class="col-md-4">
        <form action="<?=  base_url('Auth/proses_login')?>"method="post">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Masukkan username anda</small>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Masukkan password anda</small>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</section>
