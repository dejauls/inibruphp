<?php
    /**
    * @author    Tripples http://www.themewinter.com
    * @copyright Copyright (C) 2013- 2015 Tripples
    * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
    */

	// no direct access
    defined('_JEXEC') or die;
    ?>

    <div class="facts-wrapper<?php echo $moduleclass_sfx ?>">
        <?php foreach ($data as $key => $value): ?>
            <div class="ts-facts">
                <div class="ts-facts-icon">
                    <i class="fa fa-<?php echo $value['icon']; ?>"></i>
                </div>
                <div class="ts-facts-content">
                    <?php if( isset($value['num']) && ($value['num'] !='') ): ?>
                        <h2 class="ts-facts-num"><span class="counterUp"><?php echo $value['num']; ?></span></h2>
                    <?php endif; ?>
                     <?php if( isset($value['title']) && ($value['title'] !='') ): ?>
                        <h3 class="ts-facts-title"><?php echo $value['title']; ?></h3>
                    <?php endif; ?>
                    
                </div>
            </div>
        <?php endforeach; ?>
    </div><!--facts-->