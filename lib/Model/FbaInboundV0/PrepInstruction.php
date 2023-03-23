<?php
/**
 * PrepInstruction
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaInboundV0;
use ArrayAccess;

use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * PrepInstruction Class Doc Comment
 *
 * @category Class
 * @description Preparation instructions for shipping an item to Amazon's fulfillment network. For more information about preparing items for shipment to Amazon's fulfillment network, see the Seller Central Help for your marketplace.
 * @package  SellingPartnerApi
 * @group 
 */
class PrepInstruction
{
    public $value;

    /**
     * Possible values of this enum
     */
    const POLYBAGGING = 'Polybagging';
    const BUBBLE_WRAPPING = 'BubbleWrapping';
    const TAPING = 'Taping';
    const BLACK_SHRINK_WRAPPING = 'BlackShrinkWrapping';
    const LABELING = 'Labeling';
    const HANG_GARMENT = 'HangGarment';
    const SET_CREATION = 'SetCreation';
    const BOXING = 'Boxing';
    const REMOVE_FROM_HANGER = 'RemoveFromHanger';
    const DEBUNDLE = 'Debundle';
    const SUFFOCATION_STICKERING = 'SuffocationStickering';
    const CAP_SEALING = 'CapSealing';
    const SET_STICKERING = 'SetStickering';
    const BLANK_STICKERING = 'BlankStickering';
    const NO_PREP = 'NoPrep';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::POLYBAGGING,
            self::BUBBLE_WRAPPING,
            self::TAPING,
            self::BLACK_SHRINK_WRAPPING,
            self::LABELING,
            self::HANG_GARMENT,
            self::SET_CREATION,
            self::BOXING,
            self::REMOVE_FROM_HANGER,
            self::DEBUNDLE,
            self::SUFFOCATION_STICKERING,
            self::CAP_SEALING,
            self::SET_STICKERING,
            self::BLANK_STICKERING,
            self::NO_PREP,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value %s for enum 'PrepInstruction', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


