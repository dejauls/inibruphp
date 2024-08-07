<?php
/**
* @author    Tripples http://www.themewinter.com
* @copyright Copyright (C) 2013- 2014 Tripples
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
*/

// no direct access
defined('_JEXEC') or die;
$count = count($data);

?>
    <div class="row ts-pricing">
        <?php foreach($data as $index=>$value): ?>
            <div class="col-md-<?php echo round(12/$count); ?> <?php echo ($value==$count-1) ? ' last-child': ''; ?> ">
                <ul class="plan<?php echo $value['featured'] ? ' featured' : ''; ?>">
                    <?php if(isset($value['name']) && ($value['name'] != '') ): ?>
                        <li class="plan-name">
                             <h2>
                                <?php echo $value['name']; ?>
                            </h2>
                        </li>
                    <?php endif; ?>
                    <?php if(isset($value['price']) && ($value['price'] != '') ): ?>
                        <li class="plan-price">
                            <h2>
                                <?php echo $value['price']; ?>
                            </h2>
                        </li>
                    <?php endif; ?>
                    <?php if(isset($value['duration']) && ($value['duration'] != '') ): ?>
                        <li class="plan-duration">
                            <?php echo $value['duration']; ?>
                        </li>
                    <?php endif; ?> 
                    <?php if(isset($value['details']) && ($value['details'] != '') ): ?>
                        <li class="plan-details">
                            <?php echo $value['details']; ?>
                        </li>
                    <?php endif; ?>
                     <?php if(isset($value['signuplink']) && ($value['signuplink'] != '') ): ?>
                        <li class="plan-action">
                            <a href="<?php echo $value['signuplink'];?>" class="btn btn-primary">
                                <?php echo $value['signup'];?>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>

       


















