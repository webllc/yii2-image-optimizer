<?php

namespace webllc\yii2\ImageOptimizer;

use Yii;
use webllc\ImageOptimizer\OptimizerFactory;

class Optimizer
{
    public static function optimize(string $pathToImage, string $pathToOutput = null)
    {
        $pathToImage = Yii::getAlias($pathToImage);

        if ($pathToOutput) {
            $pathToOutput = Yii::getAlias($pathToOutput);
        }

        return OptimizerChainFactory::create()->optimize($pathToImage, $pathToOutput);
    }
}