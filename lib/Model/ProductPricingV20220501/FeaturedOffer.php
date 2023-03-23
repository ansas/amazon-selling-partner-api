<?php
/**
 * FeaturedOffer
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer pricing information for Amazon Marketplace products. For more information, see the [Product Pricing v2022-05-01 Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/product-pricing-api-v2022-05-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-05-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ProductPricingV20220501;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * FeaturedOffer Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeaturedOffer extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeaturedOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offer_identifier' => '\SellingPartnerApi\Model\ProductPricingV20220501\OfferIdentifier',
        'condition' => '\SellingPartnerApi\Model\ProductPricingV20220501\Condition',
        'price' => '\SellingPartnerApi\Model\ProductPricingV20220501\Price'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offer_identifier' => null,
        'condition' => null,
        'price' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'offer_identifier' => 'offerIdentifier',
        'condition' => 'condition',
        'price' => 'price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_identifier' => 'setOfferIdentifier',
        'condition' => 'setCondition',
        'price' => 'setPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_identifier' => 'getOfferIdentifier',
        'condition' => 'getCondition',
        'price' => 'getPrice'
    ];


    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['offer_identifier'] = $data['offer_identifier'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['offer_identifier'] === null) {
            $invalidProperties[] = "'offer_identifier' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets offer_identifier
     *
     * @return \SellingPartnerApi\Model\ProductPricingV20220501\OfferIdentifier
     */
    public function getOfferIdentifier()
    {
        return $this->container['offer_identifier'];
    }

    /**
     * Sets offer_identifier
     *
     * @param \SellingPartnerApi\Model\ProductPricingV20220501\OfferIdentifier $offer_identifier offer_identifier
     *
     * @return self
     */
    public function setOfferIdentifier($offer_identifier)
    {
        $this->container['offer_identifier'] = $offer_identifier;

        return $this;
    }
    /**
     * Gets condition
     *
     * @return \SellingPartnerApi\Model\ProductPricingV20220501\Condition|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \SellingPartnerApi\Model\ProductPricingV20220501\Condition|null $condition condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }
    /**
     * Gets price
     *
     * @return \SellingPartnerApi\Model\ProductPricingV20220501\Price|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \SellingPartnerApi\Model\ProductPricingV20220501\Price|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }
}


