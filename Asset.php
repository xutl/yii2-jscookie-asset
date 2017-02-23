<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\fontawesome;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@xutl/jscookie/assets';

    /**
     * @inherit
     */
    public $js = [
        'js.cookie-2.1.3.min.js',
    ];
}