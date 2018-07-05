<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * A yes/no type.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class YesNo implements ValueInterface
{
    /**
     * This case will provide services for the subsequent business day, if available.
     *
     * @var string
     */
    public const Y  = 'Y';

    /**
     * In this case, the process will filter out any services which has a pickup date <> to the requested ship
     * date. For example, if the requested shipment date is a Monday, but the next available pickup date is a
     * Tuesday, this option will not present these services.
     *
     * @var string
     */
    public const N = 'N';

    /**
     * The value.
     *
     * @var bool
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string|bool $value The value (either Y/N or true/false)
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($value = self::N)
    {
        if (is_string($value)) {
            if (!in_array($value, [self::N, self::Y])) {
                throw new \InvalidArgumentException('Argument must be either Y/N or true/false');
            }

            $this->value = $value === self::Y ? true : false;
        }

        $this->value = (bool) $value;
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return ($this->value ? self::Y : self::N);
    }
}
