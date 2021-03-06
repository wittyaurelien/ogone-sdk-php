<?php

/*
 * This file is part of the Marlon Ogone package.
 *
 * (c) Marlon BVBA <info@marlon.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ogone\ShaComposer;

/**
 * SHA Composers interface
 */
interface ShaComposer
{
    /**
     * Compose SHA string based on Ingenico response parameters.
     *
     * @param array $parameters
     * @param bool $useLatinCharset
     */
    public function compose(array $parameters, $useLatinCharset = false);
}
