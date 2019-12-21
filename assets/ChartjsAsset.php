<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ChartjsAsset extends AssetBundle
{
    public $soursePath = '@app/components/ChartjsAsset';
    public $css = [
        'css/Chart.min.css',
    ];
    public $js = [
        'js/Chart.min.js',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
}
