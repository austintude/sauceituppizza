<?php
/**
 * Template part for oneThreeWrapper
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$leftonethirdblock_b2	= get_field('leftonethirdblock_b2');
$righttwothirdsblock_b2	= get_field('righttwothirdsblock_b2');
$cta_form_url_b2		= get_field('cta_form_url_b2');
$cta_text_b2	= get_field('cta_text_b2');
$cta_loading_image			= get_field('cta_loading_image');
?>
	<div class="onethreewrapper">
		<div class="leftonethirdblock">
			<img src="<?php echo $leftonethirdblock_b2['url']; ?>" alt="<?php echo $leftonethirdblock_b2['alt']; ?>">

		</div><!-- end .leftBlock -->
		<div class="righttwothirdsblock">
			<div class="content">
			<?php echo $righttwothirdsblock_b2; ?>
			</div><!-- end .content -->
		</div><!-- end .rightBlock -->
		<div class="ctaButton">
  <a href="<?php echo $cta_form_url_b2; ?>">
  <button id="estimate" class="btn btn-lg btn-danger" role="button" tabindex="0"><?php echo $cta_text_b2; ?> »</button>
</a>
	</div><!-- end .ctaButton -->
	</div> <!-- end .wrapper -->

