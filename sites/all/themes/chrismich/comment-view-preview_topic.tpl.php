<?php
// $Id: comment.tpl.php,v 1.3 2008/09/14 12:09:37 johnalbin Exp $

/**
 * @file comment.tpl.php
 * Default theme implementation for comments.
 *
 * Available variables:
 * - $author: Comment author. Can be link or plain text.
 * - $classes: A set of CSS classes for the DIV wrapping the comment.
     Possible values are: comment, comment-new, comment-preview,
     comment-unpublished, comment-published, odd, even, first, last,
     comment-by-anon, comment-by-author, or comment-mine.
 * - $content: Body of the post.
 * - $date: Date and time of posting.
 * - $links: Various operational links.
 * - $new: New comment marker.
 * - $picture: Authors picture.
 * - $signature: Authors signature.
 * - $status: Comment status. Possible values are:
 *   comment-unpublished, comment-published or comment-preview.
 * - $submitted: By line with date and time.
 * - $title: Linked title.
 * - $unpublished: Is the comment unpublished?
 *
 * These two variables are provided for context.
 * - $comment: Full comment object.
 * - $node: Node object the comments are attached to.
 *
 * @see template_preprocess_comment()
 * @see theme_comment()
 */
?>
<div class="<?php print $classes; ?>"><div class="comment-inner clear-block">
  <div class="submitted">
    <?php print $submitted; ?>
  </div>
  
  <?php if ($title): ?>
    <h3 class="title">
      <?php print $title; ?>
      <?php if ($comment->new): ?>
        <span class="new"><?php print $new; ?></span>
      <?php endif; ?>
    </h3>
  <?php elseif ($comment->new): ?>
    <div class="new"><?php print $new; ?></div>
  <?php endif; ?>

  <div class="content">
    <?php print $content; ?>
    <?php if ($signature): ?>
    <div class="user-signature clear-block">
      <?php print $signature; ?>
    </div>
    <?php endif; ?>
  </div>

</div></div> <!-- /comment-inner, /comment -->