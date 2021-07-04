<?php get_header();?>
      <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="error404">
                       <h1> <span style="background:red;color:white;paddeng:20px;">OOPS! PAGE NOT FOUND</span></h1>
                        <p><span style="background:red;color:white;paddeng:20px;">Something happened wrong!! Please Go Back!!.</span></p>
                        <a class="btn-primary" href="<?php echo esc_url(home_url('/'));?>">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer();?>