<?php
if(!defined('__MLC_TOUCH_2__')){
	MLCApplication::InitPackage('MLCTracking');
}
define('__MJAX_TOUCH_2__', dirname(__FILE__));
define('__MJAX_TOUCH_2_CORE__', __MJAX_TOUCH_2__ . '/_core');
define('__MJAX_TOUCH_2_CORE_CTL__', __MJAX_TOUCH_2__ . '/ctl');
define('__MJAX_TOUCH_2_CORE_MODEL__', __MJAX_TOUCH_2__ . '/model');
define('__MJAX_TOUCH_2_CORE_VIEW__', __MJAX_TOUCH_2__ . '/view');

define("__MJAX_TOUCH_2_CORE_ASSET_URL__", MLCApplication::GetAssetUrl('', 'MJaxTouch2'));
MLCApplicationBase::$arrClassFiles['MJaxTrackingControlBase'] = __MJAX_TOUCH_2_CORE__ . '/MJaxTrackingControlBase.class.php';
MLCApplicationBase::$arrClassFiles['MJaxTrackingFormBase'] = __MJAX_TOUCH_2_CORE__ . '/MJaxTrackingFormBase.class.php';


