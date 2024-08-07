<?php
    /**
    * @author    Tripples http://www.themewinter.com
    * @copyright Copyright (C) 2013- 2014 Tripples
    * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
    */

	// no direct access
    defined('_JEXEC') or die;
    ?>

    <div class="<?php echo $moduleclass_sfx ?>">

            <div class="row">
                <?php foreach ($data as $key => $value): ?>
                    <div class="col-md-<?php echo round(12/count($data)); ?> col-sm-<?php echo round(24/count($data)); ?> col-xs-<?php echo round(24/count($data)); ?>">
                        <div class="ts-service-wrapper">

                            <div class="ts-service-image">
                                <?php if( isset($value['img']) && ($value['img'] !='') ): ?>
                                    <span><img class="" src="<?php echo $value['img']; ?>" alt="" ></span>
                                <?php endif; ?>

                                <span class="ts-service-icon">
                                    <i class="fa fa-<?php echo $value['icon']; ?>"></i>
                                </span>

                            </div>
                            
                            <div class="ts-service-info">
                                <?php if( isset($value['title']) && ($value['title'] !='') ): ?>
                                    <h3><?php echo $value['title']; ?></h3>
                                <?php endif; ?>
                                <?php if( isset($value['desc']) && ($value['desc'] !='') ): ?>
                                    <p><?php echo $value['desc']; ?></p>
                                <?php endif; ?>
                                 <?php if( isset($value['more']) && ($value['more'] !='') ): ?>
                                    <a href="<?php echo $value['more']; ?>"><?php echo JText::_('READ_MORE'); ?> <i class="fa fa fa-long-arrow-right"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><!--/ row end -->

    </div><!--/ Service box end-->