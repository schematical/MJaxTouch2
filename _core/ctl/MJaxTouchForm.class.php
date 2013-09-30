<?php
class MJaxTouchForm extends MJaxForm{

    public function InitHead(){
        parent::InitHead();
        $this->arrHeaderData['require']['paths']['mjax_touch'] = __MJAX_TOUCH_2_CORE_ASSET_URL__ . '/js/MJax.Touch';
        $this->arrHeaderData['require']['paths']['jquery_mobile'] = __MJAX_TOUCH_2_CORE_ASSET_URL__ . '/lib/jquery-mobile/jquery.mobile-1.3.2.min';
        $this->arrHeaderData['require_modules'][] = 'mjax_touch';


    }
}