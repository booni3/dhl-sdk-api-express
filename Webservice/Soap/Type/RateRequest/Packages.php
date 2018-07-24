<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

/**
 * The packages section details the weight and dimensions of the individual pieces of the shipment.
 * For example, the shipper may tender a single shipment with multiple pieces, and each piece may have a
 * distinct shipping label. In this context, a RequestedPackage node represents each individual piece,
 * and there is a limitation of 50 RequestedPackage nodes in the request.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Packages
{
    /**
     * The list of requested packages.
     *
     * @var array
     */
    private $RequestedPackages = [];

    /**
     * Constructor.
     *
     * @param array $requestedPackages List of requested packages
     *
     * @throws \OutOfBoundsException
     */
    public function __construct(array $requestedPackages)
    {
        if (!count($requestedPackages)) {
            throw new \OutOfBoundsException('A shipment must contain at least one package');
        }

        $this->setRequestedPackages($requestedPackages);
    }

    /**
     * Returns the requested packages.
     *
     * @return array
     */
    public function getRequestedPackages(): array
    {
        return $this->RequestedPackages;
    }

    /**
     * Sets the requested packages.
     *
     * @param array $requestedPackages List of requested packages
     *
     * @return self
     * @throws \OutOfBoundsException
     */
    public function setRequestedPackages(array $requestedPackages): Packages
    {
        if (count($requestedPackages) > 50) {
            throw new \OutOfBoundsException('A shipment can only contain a maximum of 50 packages');
        }

        $this->RequestedPackages = $requestedPackages;
        return $this;
    }
}