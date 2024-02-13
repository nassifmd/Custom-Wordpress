<div class="comments-wrapper">
    <div class="comments" id="comments">
        <div class="comments-header">
            <h2 class="comment-reply-title">
				<?php
                   if('! comment') {
                       echo "Leave Comment";
                            }else {
                                echo get_comments_number() . "comments";
                            }
                ?>
            </h2>

		</div>

	    <div class="comments-inner">
            <?php 
                wp_list_comments(
                    $args = array(
                        'style' => 'div',
                        'avatar_size' => 120,
                    )
                )
            ?>

		</div>

	</div>

	<hr class="" aria-hidden="true">
			<?php
                if( comments_open() ) {
                comment_form(
                    array(
                        'class_form' => '',
                        'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
                        'title_reply_after' => '</h3>'
                    )
                    );
                }
            ?>
</div>