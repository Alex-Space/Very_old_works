			<div id="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'thememagic' ); ?></p>
			</div>
<!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
<?php if ( ! empty($comments_by_type['comment']) ) : ?>
			<h3 id="comments-title"><?php
			printf( _n( 'Комментарии на статью %2$s', '%1$s Responses to %2$s', get_comments_number(), 'thememagic' ),
			number_format_i18n( get_comments_number() ), '' . get_the_title() . '' );
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Старые комментарии', 'thememagic' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'thememagic' ) ); ?></div>
			</div> <!-- .navigation -->
<?php endif; // check for comment navigation ?>

			<ol class="commentlist">
				<?php
					/* Loop through and list the comments. Tell wp_list_comments()
					 * to use thememagic_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define thememagic_comment() and that will be used instead.
					 * See thememagic_comment() in thememagic/functions.php for more.
					 */
					wp_list_comments('type=comment');
				?>
			</ol>
	<?php endif; ?>
	
	    <?php if ( ! empty($comments_by_type['pings']) ) : ?>
    <h3 id="pings"><?php _e( 'Trackbacks/Pingbacks', 'thememagic' ); ?></h3>
    <ol class="commentlist">
    <?php wp_list_comments('type=pings&callback=thememagic_list_pings'); ?>
    </ol>

    <?php endif; ?>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Старые комментарии', 'thememagic' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'thememagic' ) ); ?></div>
			</div><!-- .navigation -->
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'thememagic' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>
<?php comment_form(array('comment_notes_before'=>'' ,'comment_notes_after'=>'' ,'label_submit'=>'Добавить комментарий') ); ?>
</div><!-- #comments -->