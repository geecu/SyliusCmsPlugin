<?php

/**
 * This file was created by the developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on kontakt@bitbag.pl.
 */

declare(strict_types=1);

namespace Tests\BitBag\CmsPlugin\Behat\Page\Admin\Section;

use Sylius\Behat\Page\Admin\Crud\UpdatePage as BaseUpdatePage;
use Tests\BitBag\CmsPlugin\Behat\Behaviour\ChecksCodeImmutabilityTrait;
use Tests\BitBag\CmsPlugin\Behat\Behaviour\ContainsErrorTrait;

/**
 * @author Patryk Drapik <patryk.drapik@bitbag.pl>
 */
class UpdatePage extends BaseUpdatePage implements UpdatePageInterface
{
    use ChecksCodeImmutabilityTrait;
}
