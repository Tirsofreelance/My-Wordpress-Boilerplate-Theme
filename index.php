<?php the_part( 'header' ); ?>

<?php foreach ( array( 'navigation', 'content', 'lists', 'forms' ) as $name ) : ?>
	
	<h2><?php echo ucfirst( $name )?></h2>
	
	<?php the_part( 'dummy', $name ); ?>

<?php endforeach; ?>

<?php the_part( 'footer' ); ?>