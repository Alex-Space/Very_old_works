<?php
/**
* @package   Quantum
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   YOOtheme Proprietary Use License (http://www.yootheme.com/license)
*/

// get warp
$warp = Warp::getInstance();

// load template file, located in /warp/systems/wordpress/layouts/comments.php
echo $warp['template']->render('comments');