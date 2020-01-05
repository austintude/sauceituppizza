<?php
/**
 * Template part for oneThreeWrapper
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$leftonethirdblock_b3	= get_field('leftonethirdblock_b3');
$righttwothirdsblock_b3	= get_field('righttwothirdsblock_b3');
$cta_form_url_b3			= get_field('cta_form_url_b3');
$cta_text_b3			= get_field('cta_text_b3');
$cta_loading_image			= get_field('cta_loading_image');
?>
	<div class="onethreewrapper">
		<div class="leftOneThirdBlock">
			<img src="<?php echo $leftonethirdblock_b3['url']; ?>" alt="<?php echo $leftonethirdblock_b3['alt']; ?>">

		</div><!-- end .leftBlock -->
		<div class="rightTwoThirdsBlock">
			<div class="content">
			<?php echo $righttwothirdsblock_b3; ?>
			</div><!-- end .content -->
		</div><!-- end .rightBlock -->
		<div class="ctaButton">
  <a href="<?php echo $cta_form_url_b3; ?>">
  <button id="estimate" class="btn btn-lg btn-danger" role="button" tabindex="0"><?php echo $cta_text_b3; ?> »</button>
</a>
	</div><!-- end .ctaButton -->
	</div> <!-- end .wrapper -->

