<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * The selected service point id.
 *
 * Mandatory if delivery option is TV – this is the unique DHL Express Service point location ID of where the
 * parcel should be delivered (please contact your local DHL Express Account Manager to obtain the list of
 * the service point IDs).
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SelectedServicePointId extends AlphaNumeric
{
    protected const MAX_LENGTH = 6;
}

