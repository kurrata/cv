<?php


namespace api\assets\swagger;


use yii\web\AssetBundle;
use yii\web\View;

class SwaggerAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
    public $js = [
        '//unpkg.com/swagger-ui-dist@3.26.0/swagger-ui-bundle.js',

    ];
    public $cssOptions = [
        'position' => View::POS_HEAD,
    ];
    public $css = [
        'https://unpkg.com/swagger-ui-dist@3.26.0/swagger-ui.css'
    ];
}