<?php
/**
 * PRODUKTE Content Template
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

<?php /* woo_post_inside_before(); */ ?>

<div class="rightcolumn">
<div class="entryimg"> <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. 
the_post_thumbnail(); } ?></div>

	<?php if( get_field('hersteller-logo') ): ?><img src="<?php the_field('hersteller-logo'); ?>" alt="" /><br /><?php endif; ?>
	
	<?php if( get_field('produktname') ): ?><h2 class="greenbold"><?php the_field('produktname'); ?></h2><br /><?php endif; ?>
	
	<?php if( get_field('hersteller') ): ?><strong><?php the_field('hersteller'); ?></strong><br /><?php endif; ?>
	<?php if( get_field('hersteller_strasse') ): ?><?php the_field('hersteller_strasse'); ?><br /><?php endif; ?>
	<?php if( get_field('hersteller_ort') ): ?><?php the_field('hersteller_ort'); ?><br /><?php endif; ?>
	<?php if( get_field('hersteller_telefon') ): ?><?php the_field('hersteller_telefon'); ?><br /><br /><?php endif; ?>

	<div class="clear"></div>
	<?php if( get_field('kategorie') ): ?><span class="tabgreen"><strong>Kategorie: </strong></span><span class="tab2"><?php the_field('kategorie'); ?></span><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('branche') ): ?><span class="tabgreen"><strong>Branche: </strong></span><span class="tab2"><?php the_field('branche'); ?></span><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('apple-affinitaet') ): ?><span class="tabgreen"><strong>Apple-Affinität: </strong></span><span class="tab2"><?php the_field('apple-affinitaet'); ?></span><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('lizenzmodell') ): ?><span class="tabgreen"><strong>Lizenzmodell: </strong></span><span class="tab2"><?php the_field('lizenzmodell'); ?></span><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('sprachen') ): ?><span class="tabgreen"><strong>Sprachen: </strong></span><span class="tab2"><?php the_field('sprachen'); ?></span><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('isbn') ): ?><span class="tabgreen"><strong>ISBN-Nummer: </strong></span><span class="tab2"><?php the_field('isbn'); ?></span><br /><?php endif; ?>
	<div class="clear"></div></br>
	<?php if( get_field('hersteller-info') ): ?><strong>&Uuml;ber den Hersteller </strong><br /><?php the_field('hersteller-info'); ?><?php endif; ?>
	<div class="clear"></div></br>
		<?php echo custom_taxonomies_terms_links(); ?>
	<!-- <?php the_tags(); ?> -->
</div>



<div class="leftcolumn">

<header> <?php the_title( $title_before, $title_after ); ?> </header>
<!-- <?php woo_post_meta(); ?> -->
<div class="clear"></div></br>
 <section class="entry"> 

<?php if( get_field('beschreibung') ): ?><strong>Kurzbeschreibung </strong><?php the_field('beschreibung'); ?><?php endif; ?><br />

</div>

<?php /* the_content(); wp_link_pages( $page_link_args ); */ ?>


<br /> <div class="clear"></div><hr>

<h2>Produktbilder:</h2>

<?php if( get_field('produktbild_1') ): ?><div class="spalte-one-quarter"><a href="<?php the_field('produktbild_1'); ?>"><img src="<?php the_field('produktbild_1'); ?>" alt="" /></a></div><?php endif; ?>

<?php if( get_field('produktbild_2') ): ?><div class="spalte-one-quarter"><a href="<?php the_field('produktbild_2'); ?>"><img src="<?php the_field('produktbild_2'); ?>" alt="" /></a></div><?php endif; ?>

<?php if( get_field('produktbild_3') ): ?><div class="spalte-one-quarter"><a href="<?php the_field('produktbild_3'); ?>"><img src="<?php the_field('produktbild_3'); ?>" alt="" /></a></div><?php endif; ?>

<?php if( get_field('produktbild_4') ): ?><div class="spalte-one-quarter-right"><a href="<?php the_field('produktbild_4'); ?>"><img src="<?php the_field('produktbild_4'); ?>" alt="" /></a></div><?php endif; ?>

<div class="clear"></div><br />

<div class="container">
<div class="accordion">
<div>
            <input id="ac-1" name="accordion-1" type="checkbox" />
            <label for="ac-1">Bezugsquellen <span class="plus">+</span></label>
<div class="article ac-normal">

<div class="fullwidth">
<div class="spalte_onethird">
<div class="premium">
	<?php if( get_field('anbieter-name') ): ?><h4> <?php the_field('anbieter-name'); ?></h4><?php endif; ?>

	<?php if( get_field('anbieter-strasse') ): ?><span class="tab"><strong>Stra&szlig;e</strong></span><?php the_field('anbieter-strasse'); ?><br /><?php endif; ?>

	<?php if( get_field('anbieter-plz-stadt') ): ?><span class="tab"><strong>PLZ</strong></span><?php the_field('anbieter-plz-stadt'); ?><br /><?php endif; ?>

	<?php if( get_field('anbieter-tel') ): ?><span class="tab"><strong>Telefon</strong></span><?php the_field('anbieter-tel'); ?><br /><?php endif; ?>

	<?php if( get_field('anbieter-ansprechpartner') ): ?><span class="tab"><strong>Ihr Kontakt</strong></span><?php the_field('anbieter-ansprechpartner'); ?><br /><?php endif; ?>
</div>
</div>


<div class="spalte_onethird">
	<?php if( get_field('produktname') ): ?><h2><?php the_field('produktname'); ?> ist auch hier erhältlich:</h2><?php endif; ?><br />
	<?php if( get_field('bezugsquellen') ): ?><span><strong><a class="btn submit button" href="<?php the_field('bezugsquellen'); ?>">Finden Sie jetzt einen Anbieter in Ihrer Nähe!</a></strong></span><br /><?php endif; ?>
</div>

<div class="spalte_onethirdlast">
<h2>Weitere Einkaufsoptionen:</h2><br />	
	<?php if( get_field('apple-store') ): ?><span class="tabgreen"><strong>Apple-Store: </strong></span><span class="tab2"><?php the_field('apple-store'); ?></span><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('amazon') ): ?><span class="tabgreen"><strong>Amazon: </strong></span><span class="tab2"><?php the_field('amazon'); ?></span><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('ios-appstore') ): ?><span class="tabgreen"><strong>iOS-Appstore: </strong></span><span class="tab2"><?php the_field('ios-appstore'); ?></span><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('mac-appstore') ): ?><span class="tabgreen"><strong>Mac-Appstore: </strong></span><span class="tab2"><?php the_field('mac-appstore'); ?></span><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('ibook-store') ): ?><span class="tabgreen"><strong>iBook-Store: </strong></span><span class="tab2"><?php the_field('ibook-store'); ?></span><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('kindle-store') ): ?><span class="tabgreen"><strong>Kindle-Store: </strong></span><span class="tab2"><?php the_field('kindle-store'); ?></span><br /><div class="clear"></div><?php endif; ?>
	


	<?php if( get_field('apfeloffice-testbericht') ): ?><span class="tabgreen"><strong>apfeloffice-Testbericht: </strong></span><span class="tab2"><a href="<?php the_field('apfeloffice-testbericht'); ?>">Jetzt Test lesen!</a></span><br /><?php endif; ?>
	<div class="clear"></div>
	<?php if( get_field('apfeloffice-testurteil') ): ?><span class="tabgreen"><strong>apfeloffice-Testurteil: </strong></span><span class="tab2"><?php the_field('apfeloffice-testurteil'); ?></span><br /><?php endif; ?>
</div>
</div>


</div>
</div>
</div>

<div class="container">
<div class="accordion">
<div>
            <input id="ac-2" name="accordion-2" type="checkbox" />
            <label for="ac-2">Fachliche Beratung erhalten <span class="plus">+</span></label>
<div class="article ac-high">

<div class="fullwidth">
<strong>Wo kann ich mich beraten lassen?</strong><br />
Direkt hier! apfeloffice leitet Ihre Anfrage an kompetente Lösungsanbieter und Fachhändler weiter - <strong>für Sie als Leser völlig
kostenfrei! </strong>Füllen Sie einfach das folgende Formular aus.</strong><br /><br /><h1><strong>Beratung durch den Fachhandel</strong></h1><br /><?php the_field('anfrage'); ?>
</div>
</div>
</div>
</div>
</article><!-- /.post -->
<?php
	// woo_post_after();
	comments_template();
?>