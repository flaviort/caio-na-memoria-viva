<div class="share">

    <p class="title-medium">
        Compartilhe
    </p>

    <nav class="social">
        <ul>

            <?php $postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>

            <li>
                <a href="http://www.facebook.com/sharer.php?u=<?php echo $postUrl; ?>&t=<?php echo the_title(); ?>" target="_blank">
                    <?php get_template_part('assets/svg/facebook', 'none') ?>
                </a>
            </li>

            <li>
                <a href="http://linkedin.com/shareArticle?mini=true&url=<?php echo $postUrl; ?>&title=<?php echo the_title(); ?>" target="_blank">
                    <?php get_template_part('assets/svg/linkedin', 'none') ?>
                </a>
            </li>

            <li>
                <a href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>" target="_blank">
                    <?php get_template_part('assets/svg/twitter', 'none') ?>
                </a>
            </li>

        </ul>
    </nav>

</div>