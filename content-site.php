
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
    // Post thumbnail.
    twentyfifteen_post_thumbnail();
  ?>

  <header class="entry-header">
    <?php
      if ( is_single() ) :
        the_title( '<h1 class="entry-title">', '</h1>' );
      else :
        the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
      endif;
    ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
      /* translators: %s: Name of current post */
      talhyperlocal_map_shortcode( get_the_ID() );
      the_content( sprintf(
        __( 'Continue reading %s', 'twentyfifteen' ),
        the_title( '<span class="screen-reader-text">', '</span>', false )
      ) );

      $meta = get_post_custom();
      ?>
      <p>Website: <a href="<?php echo $url ?>"><?php echo $meta['url'][0] ?></a></p>
      <p>Area covered: <?php echo $meta['area_covered'][0] ?></p>
      <p><?php the_taxonomies( 'before=<ul>&after=</ul>' ) ?></p>


<!--       wp_link_pages( array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
        'separator'   => '<span class="screen-reader-text">, </span>',
      ) );
 -->
  </div><!-- .entry-content -->

  <?php
    // Author bio.
    // if ( is_single() && get_the_author_meta( 'description' ) ) :
    //   get_template_part( 'author-bio' );
    // endif;
  ?>

  <footer class="entry-footer">
    <?php twentyfifteen_entry_meta(); ?>
    <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-footer -->

</article><!-- #post-## -->
