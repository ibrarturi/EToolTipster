EToolTipster Yii Extension
============

A wrapper for jQuery ToolTipster plugin

**Requirements**

Tested with Yii 1.1.12 and 1.1.14

**Installation**

* Extract the file under protected/extensions folder.


**Usage**

 * Default Usage


```
$this->widget('application.extensions.etooltipster.EToolTipster', array(
    'target' => '.tooltip'
));
```

 * Usage with optional parameters

```
$this->widget('application.extensions.etooltipster.EToolTipster', array(
    'target' => '.tooltip',
    'options' => array(
        'theme' => 'tooltipster-shadow'
    )
));
```

**Resources**

 * [Project Page](http://iamceege.github.io/tooltipster/)
 * [Demo](http://iamceege.github.io/tooltipster/#demos)
