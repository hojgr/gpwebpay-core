<?php declare(strict_types=1);

/**
 * This file is part of the Pixidos package.
 *
 *  (c) Ondra Votava <ondra@votava.it>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 */

namespace Pixidos\GPWebPay\Data;

/**
 * Interface IResponse
 * @package Pixidos\GPWebPay\Intefaces
 * @author Ondra Votava <ondra.votava@pixidos.com>
 */
interface IResponse
{
    public const PRCODE = 'PRCODE';
    public const SRCODE = 'SRCODE';
    public const RESULTTEXT = 'RESULTTEXT';
    public const DIGEST_1 = 'DIGEST_1';

    /**
     * @return array
     */
    public function getParams(): array;

    /**
     * @return string
     */
    public function getDigest(): string;

    /**
     * @return bool
     */
    public function hasError(): bool;

    /**
     * @return string
     */
    public function getDigest1(): string;

    /**
     * @return string|null
     */
    public function getMerOrderNumber(): ?string;

    /**
     * @return string|null
     */
    public function getMd(): ?string;

    /**
     * @return string
     */
    public function getGatewayKey(): string;

    /**
     * @return string
     */
    public function getOrderNumber(): string;

    /**
     * @return int
     */
    public function getSrcode(): int;

    /**
     * @return int
     */
    public function getPrcode(): int;

    /**
     * @return string|null
     */
    public function getResultText(): ?string;

    /**
     * @return string|null
     */
    public function getUserParam1(): ?string;

    /**
     * @param string $userParam1
     */
    public function setUserParam1(string $userParam1): void;
}
