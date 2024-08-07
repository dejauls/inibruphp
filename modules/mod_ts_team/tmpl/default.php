<?php
/**
 * @subpackage	mod_ts_team
 * @copyright	Copyright (C) 2013 - 2014 Themewinter. All rights reserved.
 * @license		GNU General Public License version 2 or later; 
 */

// no direct access
defined('_JEXEC') or die;

$count 		= count($data);

?>



<div id="team-carousel" class="owl-carousel owl-theme team-carousel">

  <?php 
    foreach ($data as $value) {

  ?>

  <div class="item">

    <div class="team-wrapper">
      <div class="team-img-wrapper">
        <img alt="" src="<?php echo $value['img'] ?>" class="img-responsive">
      </div>
      <div class="team-content">
          <?php if( isset($value['name']) && ($value['name'] !='') ): ?>
            <h3 class="ts-name"><?php echo $value['name']; ?></h3>
          <?php endif; ?>

          <?php if( isset($value['desg']) && ($value['desg'] !='') ): ?>
            <p class="ts-designation"><?php echo $value['desg']; ?></p>
          <?php endif; ?>
                    
          <?php if( isset($value['desc']) && ($value['desc'] !='') ): ?>
            <p class="ts-description"><?php echo $value['desc']; ?></p>
          <?php endif; ?>

           <div class="team-social">
          <?php 
              if( (isset( $value['facebook']) && ($value['facebook'] !=''))
              || (isset( $value['twitter']) && ($value['twitter'] !=''))
              || (isset( $value['googleplus']) && ($value['googleplus'] !=''))
              || (isset( $value['pinterest']) && ($value['pinterest'] !=''))
              || (isset( $value['linkedin']) && ($value['linkedin'] !='')) ): ?>
              <div class="team-social-icons">
                  <?php if($value['facebook'] !=''): ?>
                    <a target="_blank" href="<?php echo $value['facebook']; ?>" ><i class="fa fa-facebook"></i></a>
                  <?php endif; ?>
                  <?php if($value['twitter'] !=''): ?>
                    <a target="_blank" href="<?php echo $value['twitter']; ?>" ><i class="fa fa-twitter"></i></a>
                  <?php endif; ?>
                  <?php if($value['googleplus'] !=''): ?>
                    <a target="_blank" href="<?php echo $value['googleplus']; ?>" ><i class="fa fa-google-plus"></i></a>
                  <?php endif; ?>
                  <?php if($value['pinterest'] !=''): ?>
                    <a target="_blank" href="<?php echo $value['pinterest']; ?>" ><i class="fa fa-pinterest"></i></a>
                  <?php endif; ?>
                  <?php if($value['linkedin'] !=''): ?>
                    <a target="_blank" href="<?php echo $value['linkedin']; ?>" ><i class="fa fa-linkedin"></i></a>
                  <?php endif; ?>
              </div><!--/.team-social-icons-->
            <?php endif; ?>
          </div>
      </div>
    </div><!--/ Team end -->

  </div><!--/ Item end -->

  <?php } ?>

</div>

