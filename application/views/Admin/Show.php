<div class="row row-offcanvas row-offcanvas-right">
    <div class="show">
        <h1>Admin Stuff</h1><hr>
        <p>Directory  - <?php echo Request::current()->directory(); ?></p>
        <p>Controller - <?php echo Request::current()->controller(); ?></p>
        <p>Method - <?php echo Request::current()->action(); ?></p>
    </div>
</div>