<?php

/*
 * This file is part of the Passbook package.
 *
 * (c) Eymen Gunay <eymen@egunay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Passbook\Type;

use Passbook\Pass;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;

/**
 * BoardingPass
 *
 * @author Eymen Gunay <eymen@egunay.com>
 */
class BoardingPass extends Pass
{
    /**
     * Pass type
     * @Exclude
     * @var string
     */
    protected $type = 'boardingPass';

    /**
     * Pass structure
     * @SerializedName(value="boardingPass")
     * @var Structure
     */
    protected $structure;

    /**
     * Type of transit. Must be one of the following values:
     * PKTransitTypeAir, PKTransitTypeBoat, PKTransitTypeBus, PKTransitTypeGeneric, PKTransitTypeTrain
     * @var string
     */
    protected $transitType;

    /**
     * @var string
     */
    const TYPE_AIR = 'PKTransitTypeAir';

    /**
     * @var string
     */
    const TYPE_BOAT = 'PKTransitTypeBoat';

    /**
     * @var string
     */
    const TYPE_BUS = 'PKTransitTypeBus';

    /**
     * @var string
     */
    const TYPE_GENERIC = 'PKTransitTypeGeneric';

    /**
     * @var string
     */
    const TYPE_TRAIN = 'PKTransitTypeTrain';

    /**
     * Class constructor
     *
     * @param string $serialNumber
     * @param string $description
     * @param string $transitType
     */
    public function __construct($serialNumber, $description, $transitType = self::TYPE_GENERIC)
    {
        // Required for boarding passes; otherwise not allowed
        $this->$transitType = $transitType;
        // Call parent
        parent::__construct($serialNumber, $description);
    }
}