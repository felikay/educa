<header>

    <a href="<?php echo $link; ?>">
        <h2><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;
            <?php echo $title; ?></h2>
    </a>


    <div class="user-wrapper">

        <div>
            <small><?php echo Auth::user()->name; ?></small>
        </div>


    </div>
</header>