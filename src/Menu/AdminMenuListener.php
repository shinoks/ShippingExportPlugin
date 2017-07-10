<?php

/**
 * This file was created by the developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on kontakt@bitbag.pl.
 */

namespace BitBag\ShippingExportPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

/**
 * @author Mikołaj Król <mikolaj.krol@bitbag.pl>
 */
final class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function configureShippingGatewayMenu(MenuBuilderEvent $event)
    {
        $event
            ->getMenu()
            ->getChild('configuration')
            ->addChild('shipping_gateway', ['route' => 'bitbag_admin_shipping_gateway_index'])
            ->setLabel('bitbag.shipping_export_plugin.menu.admin.shipping_gateway')
        ;
    }
}