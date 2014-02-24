<?php

/**
 * Wrapper for Jquery ToolTipster
 *
 * @author turi
 * @version $Id:$ (1.0.1)
 */
class EToolTipster extends CWidget {

    /**
     * 
     * @var string url for the theme css file
     */
    public $themeCssFile = null;
    
    /**
     * 
     * @var string CSS class name or Element Id 
     */
    public $target = '.tooltip';
    
    /**
     *
     * @var array options array to pass jquery plugin 
     */
    public $options = array();

    /**
     * Init widget
     */
    public function init() {
        parent::init();

        $this->registerClientScript();
    }

    protected function registerClientScript() {
        $cs = Yii::app()->getClientScript();
        $scriptUrl = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('application.extensions.etooltipster.resources'));

        $cs->registerCssFile($scriptUrl . '/css/tooltipster.css');
        $cs->registerCssFile($scriptUrl . '/css/themes/tooltipster-light.css');
        $cs->registerCssFile($scriptUrl . '/css/themes/tooltipster-noir.css');
        $cs->registerCssFile($scriptUrl . '/css/themes/tooltipster-punk.css');
        $cs->registerCssFile($scriptUrl . '/css/themes/tooltipster-shadow.css');
        
        // adding url for theme css file
        if(isset($this->themeCssFile))
            $cs->registerCssFile($this->themeCssFile);
            
        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile($scriptUrl . '/js/jquery.tooltipster.min.js', CClientScript::POS_END);
    }

    public function run() {
        $options = (isset($this->options)) ? $this->options : array();
        
        $js = "$('{$this->target}').tooltipster(".CJavaScript::encode($options).");";
        
        $cs = Yii::app()->clientScript;
        $cs->registerScript('tooltipster',$js, CClientScript::POS_READY);
    }
}

?>
