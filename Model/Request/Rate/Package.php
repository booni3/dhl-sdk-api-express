<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request\Rate;

use Dhl\Express\Api\Data\Request\Rate\PackageInterface;

/**
 * Package.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Package implements PackageInterface
{
    /**
     * Units of measurement (weight).
     */
    public const UOM_WEIGHT_KG = 'KG';
    public const UOM_WEIGHT_G  = 'G';
    public const UOM_WEIGHT_OZ = 'OZ';
    public const UOM_WEIGHT_LB = 'LB';

    /**
     * Units of measurement (dimension).
     */
    public const UOM_DIMENSION_CM = 'CM';
    public const UOM_DIMENSION_IN = 'IN';
    public const UOM_DIMENSION_MM = 'MM';
    public const UOM_DIMENSION_M  = 'M';
    public const UOM_DIMENSION_FT = 'FT';
    public const UOM_DIMENSION_YD = 'YD';

    /**
     * The number of the package in the list of all packages.
     *
     * @var int
     */
    private $sequenceNumber;

    /**
     * The weight of the package.
     *
     * @var float
     */
    private $weight;

    /**
     * The length of the package.
     *
     * @var float
     */
    private $length;

    /**
     * The width of the package.
     *
     * @var float
     */
    private $width;

    /**
     * The height of the package.
     *
     * @var float
     */
    private $height;

    /**
     * The unit of measurement for the package dimensions.
     *
     * @var string
     */
    private $dimensionsUOM;

    /**
     * The unit of measurement for the package weight.
     *
     * @var string
     */
    private $weightUOM;

    /**
     * Constructor.
     *
     * @param int    $sequenceNumber The number of the package
     * @param float  $weight         The package weight
     * @param string $weightUOM      The unit of measurement for the package weight
     * @param float  $length         The package length
     * @param float  $width          The package width
     * @param float  $height         The package height
     * @param string $dimensionsUOM  The unit of measurement for the package dimensions
     */
    public function __construct(
        int $sequenceNumber,
        float $weight,
        string $weightUOM,
        float $length,
        float $width,
        float $height,
        string $dimensionsUOM
    ) {
        $weightUOMs = [
            self::UOM_WEIGHT_KG,
            self::UOM_WEIGHT_G,
            self::UOM_WEIGHT_OZ,
            self::UOM_WEIGHT_LB,
        ];

        $dimensionUOMs = [
            self::UOM_DIMENSION_M,
            self::UOM_DIMENSION_CM,
            self::UOM_DIMENSION_MM,
            self::UOM_DIMENSION_IN,
            self::UOM_DIMENSION_YD,
            self::UOM_DIMENSION_FT,
        ];

        if (!in_array($weightUOM, $weightUOMs)) {
            throw new \InvalidArgumentException('The weight UOM must be one of ' . implode(', ', $weightUOMs));
        }

        if (!in_array($dimensionsUOM, $dimensionUOMs)) {
            throw new \InvalidArgumentException('The dimension UOM must be one of ' . implode(', ', $dimensionUOMs));
        }


        $this->sequenceNumber = $sequenceNumber;
        $this->weight         = $weight;
        $this->weightUOM      = $weightUOM;
        $this->length         = $length;
        $this->width          = $width;
        $this->height         = $height;
        $this->dimensionsUOM  = $dimensionsUOM;
    }

    /**
     * @inheritdoc
     */
    public function getSequenceNumber(): int
    {
        return $this->sequenceNumber;
    }

    /**
     * @inheritdoc
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @inheritdoc
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @inheritdoc
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @inheritdoc
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @inheritdoc
     */
    public function getDimensionsUOM(): string
    {
        return $this->dimensionsUOM;
    }

    /**
     * @inheritdoc
     */
    public function getWeightUOM(): string
    {
        return $this->weightUOM;
    }
}