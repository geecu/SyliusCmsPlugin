<?php

/**
 * This file was created by the developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on kontakt@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\CmsPlugin\Resolver;

use BitBag\CmsPlugin\Entity\BlockInterface;
use BitBag\CmsPlugin\Exception\TemplateTypeNotFound;

/**
 * @author Mikołaj Król <mikolaj.krol@bitbag.pl>
 */
final class BlockTemplateResolver implements BlockTemplateResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function resolveTemplate(BlockInterface $block): string
    {
        if (BlockInterface::TEXT_BLOCK_TYPE === $block->getType()) {
            return BlockTemplateResolverInterface::TEXT_BLOCK_TEMPLATE;
        }

        if (BlockInterface::HTML_BLOCK_TYPE === $block->getType()) {
            return BlockTemplateResolverInterface::HTML_BLOCK_TEMPLATE;
        }

        if (BlockInterface::IMAGE_BLOCK_TYPE === $block->getType()) {
            return BlockTemplateResolverInterface::IMAGE_BLOCK_TEMPLATE;
        }

        throw new TemplateTypeNotFound($block->getType());
    }
}
