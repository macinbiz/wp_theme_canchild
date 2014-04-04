<?php
/**
 * ANBIETER Content Template
 *
 * This template is the default content template. It is used to display the content of a
 * template file, when no more specific content-*.php file is available.
 *
 * @package WooFramework
 * @subpackage Template
 */

/**
 * Settings for this template file.
 *
 * This is where the specify the HTML tags for the title.
 * These options can be filtered via a child theme.
 *
 * @link http://codex.wordpress.org/Plugin_API#Filters
 */
 
 $title_before = '<h1 class="title">';
 $title_after = '</h1>';
 
 if ( ! is_single() ) {
 
	 $title_before = $title_before . '<a href="' . get_permalink( get_the_ID() ) . '" rel="bookmark" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '">';
	 $title_after = '</a>' . $title_after;
 
 }
 
 $page_link_args = apply_filters( 'woothemes_pagelinks_args', array( 'before' => '<div class="page-link">' . __( 'Pages:', 'woothemes' ), 'after' => '</div>' ) );
 
 woo_post_before();
?>
<article <?php post_class(); ?>>

<!-- <?php woo_post_inside_before(); ?> -->
	
<div class="rightcolumn">
<div class="entryimg"> <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. 
the_post_thumbnail(); } ?></div>

	<?php if( get_field('anbieter-logo') ): ?><img src="<?php the_field('anbieter-logo'); ?>" alt="" /><br /><?php endif; ?>
	
	<?php if( get_field('anbieter-name') ): ?><h2 class="greenbold"><?php the_field('anbieter-name'); ?></h2><br /><?php endif; ?>
	
	<?php if( get_field('anbieter-plz') ): ?><strong><?php the_field('anbieter-plz'); ?> <?php endif; ?>
	<?php if( get_field('anbieter-ort') ): ?><?php the_field('anbieter-ort'); ?></strong><br /><?php endif; ?>
	<?php if( get_field('anbieter-str') ): ?><?php the_field('anbieter-str'); ?><br /><?php endif; ?>
	<?php if( get_field('anbieter-land') ): ?><?php the_field('anbieter-land'); ?><br /><br /><?php endif; ?>
	<?php if( get_field('zertifizierungen') ): ?><span class="tabgreen"><strong>Zertifikate: </strong></span><span class="tab2"><?php the_field('zertifizierungen'); ?></span><br /><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('ansprechpartner') ): ?><span class="tabgreen"><strong>Kontakt: </strong></span><span class="tab2"><?php the_field('ansprechpartner'); ?></span><br /><?php endif; ?>
	<?php if( get_field('anbieter-tel') ): ?><span class="tabgreen"><strong>Tel.: </strong></span><span class="tab2"><?php the_field('anbieter-tel'); ?></span><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('haendler_link') ): ?><span class="tabgreen"><strong>Website: </strong></span><span class="tab2"><a href="<?php the_field('haendler_link'); ?>">Direkt zu <?php the_field('anbieter-name'); ?></a></span><br /><?php endif; ?>
	<div class="clear"></div></br>
		<?php echo custom_taxonomies_terms_links(); ?>
	<!-- <?php the_tags(); ?> -->
</div>



<div class="leftcolumn">

<header> <?php the_title( $title_before, $title_after ); ?> </header>
<!-- <?php woo_post_meta(); ?> -->
<div class="clear"></div></br>
 <section class="entry"> 

<?php if( get_field('beschreibung-anbieter') ): ?><strong>Kurzportait </strong><?php the_field('beschreibung-anbieter'); ?><?php endif; ?><br />

</div>

<?php /* the_content(); wp_link_pages( $page_link_args ); */ ?> 


<?php if( get_field('raum_1') ): ?><br /><div class="clear"></div><hr><h2>Impressionen von <?php the_field('anbieter-name'); ?></h2><div class="spalte-one-quarter"><a href="<?php the_field('raum_1'); ?>"><img src="<?php the_field('raum_1'); ?>" alt="" /></a></div>

<?php if( get_field('raum_2') ): ?><div class="spalte-one-quarter"><a href="<?php the_field('raum_2'); ?>"><img src="<?php the_field('raum_2'); ?>" alt="" /></a></div><?php endif; ?>

<?php if( get_field('raum_3') ): ?><div class="spalte-one-quarter"><a href="<?php the_field('raum_3'); ?>"><img src="<?php the_field('raum_3'); ?>" alt="" /></a></div><?php endif; ?>

<?php if( get_field('raum_4') ): ?><div class="spalte-one-quarter-right"><a href="<?php the_field('raum_4'); ?>"><img src="<?php the_field('raum_4'); ?>" alt="" /></a></div><?php endif; ?>

<?php endif; ?>
<div class="clear"></div><br />

<?php if( get_field('anbieter_spezialgebiete') ): ?><div class="container">
<div class="accordion">
<div>
            <input id="ac-1" name="accordion-1" type="checkbox" />
            <label for="ac-1"><strong>Produkte, Leistungen und Kontakt </strong><span class="plus">+</span></label>
<div class="article ac-normal">

<div class="fullwidth">
<div class="spalte_onehalf">
	<h4><strong>Leistungsangebot </strong></h4><p><?php the_field('anbieter_spezialgebiete'); ?></p>
	<div class="clear"></div><br />
	<?php if( get_field('anbieter_spezialprodukte') ): ?><h4><strong>Spezielle Dienstleistungen für </strong></h4><p><?php the_field('anbieter_spezialprodukte'); ?></p><?php endif; ?><div class="clear"></div><br />
	<span><strong><a class="btn submit button" href="#">Hier weitere Business-Produkte für Apple finden</a></strong></span><div class="clear"></div></br>
</div>

<div class="spalte_onehalflast">
<h2><strong>Direkt-Kontakt zu <?php the_field('anbieter-name'); ?></strong></h2><br />	
	<?php the_field('beratungsanfrage'); ?>
</div>
</div>


</div>
</div>
</div>
<?php endif; ?>
<div class="container">
<div class="accordion">
<div>
            <input id="ac-2" name="accordion-2" type="checkbox" />
            <label for="ac-2"><strong>Anfahrt </strong><span class="plus">+</span></label>
<div class="article ac-high">

<div class="fullwidth">

<?php 
 
$location = get_field('anfahrt');
 
if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>

</div> <!-- fullwidth -->
</div>
</div>
</div>
</article><!-- /.post -->
<?php
	// woo_post_after();
	// comments_template();
?>