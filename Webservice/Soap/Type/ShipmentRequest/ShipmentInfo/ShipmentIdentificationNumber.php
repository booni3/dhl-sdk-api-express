<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo;

use Dhl\Express\Webservice\Soap\Type\Common\YesNo;

/**
 * The shipment identification number does not need to be transmitted in the request as the operation will assign
 * a new number and return it in the response. Only used when UseOwnShipmentdentificationNumber set to Y and this
 * feature enabled within client profile.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentIdentificationNumber extends YesNo
{
}