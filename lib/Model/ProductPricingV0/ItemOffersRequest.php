<?php
/**
 * ItemOffersRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace SellingPartnerApi\Model\ProductPricingV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ItemOffersRequest Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ItemOffersRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemOffersRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uri' => 'string',
        'method' => '\SellingPartnerApi\Model\ProductPricingV0\HttpMethod',
        'headers' => 'map[string,string]',
        'marketplace_id' => 'string',
        'item_condition' => '\SellingPartnerApi\Model\ProductPricingV0\ItemCondition',
        'customer_type' => '\SellingPartnerApi\Model\ProductPricingV0\CustomerType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uri' => null,
        'method' => null,
        'headers' => null,
        'marketplace_id' => null,
        'item_condition' => null,
        'customer_type' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uri' => 'uri',
        'method' => 'method',
        'headers' => 'headers',
        'marketplace_id' => 'MarketplaceId',
        'item_condition' => 'ItemCondition',
        'customer_type' => 'CustomerType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uri' => 'setUri',
        'method' => 'setMethod',
        'headers' => 'setHeaders',
        'marketplace_id' => 'setMarketplaceId',
        'item_condition' => 'setItemCondition',
        'customer_type' => 'setCustomerType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uri' => 'getUri',
        'method' => 'getMethod',
        'headers' => 'getHeaders',
        'marketplace_id' => 'getMarketplaceId',
        'item_condition' => 'getItemCondition',
        'customer_type' => 'getCustomerType'
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
        $this->container['uri'] = $data['uri'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['item_condition'] = $data['item_condition'] ?? null;
        $this->container['customer_type'] = $data['customer_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['item_condition'] === null) {
            $invalidProperties[] = "'item_condition' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri The resource path of the operation you are calling in batch without any query parameters. If you are calling `getItemOffersBatch`, supply the path of `getItemOffers`. **Example:** `/products/pricing/v0/items/B000P6Q7MY/offers` If you are calling `getListingOffersBatch`, supply the path of `getListingOffers`. **Example:** `/products/pricing/v0/listings/B000P6Q7MY/offers`
     *
     * @return self
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }
    /**
     * Gets method
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\HttpMethod
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\HttpMethod $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }
    /**
     * Gets headers
     *
     * @return map[string,string]|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param map[string,string]|null $headers A mapping of additional HTTP headers to send/receive for the individual batch request.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }
    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }
    /**
     * Gets item_condition
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\ItemCondition
     */
    public function getItemCondition()
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\ItemCondition $item_condition item_condition
     *
     * @return self
     */
    public function setItemCondition($item_condition)
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }
    /**
     * Gets customer_type
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\CustomerType|null
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\CustomerType|null $customer_type customer_type
     *
     * @return self
     */
    public function setCustomerType($customer_type)
    {
        $this->container['customer_type'] = $customer_type;

        return $this;
    }
}


