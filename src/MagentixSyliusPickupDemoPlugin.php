<?php
/**
 * @author    Matthieu Vion
 * @copyright 2018 Magentix
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/magentix/pickup-demo-plugin
 */
declare(strict_types=1);

namespace Magentix\SyliusPickupDemoPlugin;;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class MagentixSyliusPickupDemoPlugin extends Bundle
{
    use SyliusPluginTrait;
}
