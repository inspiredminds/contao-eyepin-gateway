<?php

declare(strict_types=1);

/*
 * This file is part of the Contao eyepin Gateway extension.
 *
 * (c) INSPIRED MINDS
 */

namespace InspiredMinds\ContaoEyepinGateway\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use InspiredMinds\ContaoEyepinGateway\ContaoEyepinGatewayBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoEyepinGatewayBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class, 'notification_center']),
        ];
    }
}
