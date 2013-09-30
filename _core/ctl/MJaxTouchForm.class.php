<?php
class MJaxTouchForm extends MJaxForm{

    public function InitHead(){
        $this->AddAssetDir('MJaxTouch2', __MJAX_TOUCH_2_CORE_ASSETS__);
        parent::InitHead();
        $this->arrHeaderData['require']['paths']['mjax_touch'] = __MJAX_TOUCH_2_CORE_ASSET_URL__ . '/js/MJax.Touch';
        $this->arrHeaderData['require']['paths']['jquery_mobile'] = __MJAX_TOUCH_2_CORE_ASSET_URL__ . '/lib/jquery-mobile/jquery.mobile-1.3.2.min';
        $this->arrHeaderData['require_modules'][] = 'mjax_touch';

       /* $arrControlScripts = self::ListAssetDir(
            __MJAX_TOUCH_2_CORE_ASSETS__ .'/js/controls',
            'MJaxTouch2'
        );
        $this->arrHeaderData['controls'] = array_merge(
            array_keys($arrControlScripts),
            $this->arrHeaderData['controls']
        );

        foreach($this->arrHeaderData['controls'] as $strControl){
            $strTemplate = __MJAX_TOUCH_2_CORE_ASSETS__ . '/tpl/controls/' . $strControl .'.tpl.php';
            if(file_exists($strTemplate)){
                $this->arrHeaderData['controls_tpls'][$strControl] = file_get_contents($strTemplate);
            }
        }


        $this->arrHeaderData['require']['paths'] = array_merge(
            $arrControlScripts,
            $this->arrHeaderData['require']['paths']
        );*/

    }
}