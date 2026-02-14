<?php

declare(strict_types=1);

use App\Shared\ApplicationParams;
use Yiisoft\View\WebView;

/**
 * @var WebView $this
 * @var ApplicationParams $applicationParams
 */

$this->setTitle($applicationParams->name);
?>

<div class="text-center">
    <h1>Welcome to My Project!</h1>

    <p>Explore the features and start building your application with <strong>Yii3</strong>!</p>

    <p>
        <a href="https://github.com/yiisoft/docs/tree/master/guide/en" target="_blank" rel="noopener">
            <i>Check out the Yii3 Guide for more information.</i>
        </a>
    </p>
</div>
