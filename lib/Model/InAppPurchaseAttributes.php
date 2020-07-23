<?php
/**
 * InAppPurchaseAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * App Store Connect API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * InAppPurchaseAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InAppPurchaseAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InAppPurchase_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference_name' => 'string',
        'product_id' => 'string',
        'in_app_purchase_type' => 'string',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'reference_name' => null,
        'product_id' => null,
        'in_app_purchase_type' => null,
        'state' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'reference_name' => 'referenceName',
        'product_id' => 'productId',
        'in_app_purchase_type' => 'inAppPurchaseType',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference_name' => 'setReferenceName',
        'product_id' => 'setProductId',
        'in_app_purchase_type' => 'setInAppPurchaseType',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference_name' => 'getReferenceName',
        'product_id' => 'getProductId',
        'in_app_purchase_type' => 'getInAppPurchaseType',
        'state' => 'getState'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const IN_APP_PURCHASE_TYPE_AUTOMATICALLY_RENEWABLE_SUBSCRIPTION = 'AUTOMATICALLY_RENEWABLE_SUBSCRIPTION';
    const IN_APP_PURCHASE_TYPE_NON_CONSUMABLE = 'NON_CONSUMABLE';
    const IN_APP_PURCHASE_TYPE_CONSUMABLE = 'CONSUMABLE';
    const IN_APP_PURCHASE_TYPE_NON_RENEWING_SUBSCRIPTION = 'NON_RENEWING_SUBSCRIPTION';
    const IN_APP_PURCHASE_TYPE_FREE_SUBSCRIPTION = 'FREE_SUBSCRIPTION';
    const STATE_CREATED = 'CREATED';
    const STATE_DEVELOPER_SIGNED_OFF = 'DEVELOPER_SIGNED_OFF';
    const STATE_DEVELOPER_ACTION_NEEDED = 'DEVELOPER_ACTION_NEEDED';
    const STATE_DELETION_IN_PROGRESS = 'DELETION_IN_PROGRESS';
    const STATE_APPROVED = 'APPROVED';
    const STATE_DELETED = 'DELETED';
    const STATE_REMOVED_FROM_SALE = 'REMOVED_FROM_SALE';
    const STATE_DEVELOPER_REMOVED_FROM_SALE = 'DEVELOPER_REMOVED_FROM_SALE';
    const STATE_WAITING_FOR_UPLOAD = 'WAITING_FOR_UPLOAD';
    const STATE_PROCESSING_CONTENT = 'PROCESSING_CONTENT';
    const STATE_REPLACED = 'REPLACED';
    const STATE_REJECTED = 'REJECTED';
    const STATE_WAITING_FOR_SCREENSHOT = 'WAITING_FOR_SCREENSHOT';
    const STATE_PREPARE_FOR_SUBMISSION = 'PREPARE_FOR_SUBMISSION';
    const STATE_MISSING_METADATA = 'MISSING_METADATA';
    const STATE_READY_TO_SUBMIT = 'READY_TO_SUBMIT';
    const STATE_WAITING_FOR_REVIEW = 'WAITING_FOR_REVIEW';
    const STATE_IN_REVIEW = 'IN_REVIEW';
    const STATE_PENDING_DEVELOPER_RELEASE = 'PENDING_DEVELOPER_RELEASE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInAppPurchaseTypeAllowableValues()
    {
        return [
            self::IN_APP_PURCHASE_TYPE_AUTOMATICALLY_RENEWABLE_SUBSCRIPTION,
            self::IN_APP_PURCHASE_TYPE_NON_CONSUMABLE,
            self::IN_APP_PURCHASE_TYPE_CONSUMABLE,
            self::IN_APP_PURCHASE_TYPE_NON_RENEWING_SUBSCRIPTION,
            self::IN_APP_PURCHASE_TYPE_FREE_SUBSCRIPTION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_CREATED,
            self::STATE_DEVELOPER_SIGNED_OFF,
            self::STATE_DEVELOPER_ACTION_NEEDED,
            self::STATE_DELETION_IN_PROGRESS,
            self::STATE_APPROVED,
            self::STATE_DELETED,
            self::STATE_REMOVED_FROM_SALE,
            self::STATE_DEVELOPER_REMOVED_FROM_SALE,
            self::STATE_WAITING_FOR_UPLOAD,
            self::STATE_PROCESSING_CONTENT,
            self::STATE_REPLACED,
            self::STATE_REJECTED,
            self::STATE_WAITING_FOR_SCREENSHOT,
            self::STATE_PREPARE_FOR_SUBMISSION,
            self::STATE_MISSING_METADATA,
            self::STATE_READY_TO_SUBMIT,
            self::STATE_WAITING_FOR_REVIEW,
            self::STATE_IN_REVIEW,
            self::STATE_PENDING_DEVELOPER_RELEASE,
        ];
    }
    

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
        $this->container['reference_name'] = isset($data['reference_name']) ? $data['reference_name'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['in_app_purchase_type'] = isset($data['in_app_purchase_type']) ? $data['in_app_purchase_type'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInAppPurchaseTypeAllowableValues();
        if (!is_null($this->container['in_app_purchase_type']) && !in_array($this->container['in_app_purchase_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'in_app_purchase_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets reference_name
     *
     * @return string|null
     */
    public function getReferenceName()
    {
        return $this->container['reference_name'];
    }

    /**
     * Sets reference_name
     *
     * @param string|null $reference_name reference_name
     *
     * @return $this
     */
    public function setReferenceName($reference_name)
    {
        $this->container['reference_name'] = $reference_name;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string|null $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets in_app_purchase_type
     *
     * @return string|null
     */
    public function getInAppPurchaseType()
    {
        return $this->container['in_app_purchase_type'];
    }

    /**
     * Sets in_app_purchase_type
     *
     * @param string|null $in_app_purchase_type in_app_purchase_type
     *
     * @return $this
     */
    public function setInAppPurchaseType($in_app_purchase_type)
    {
        $allowedValues = $this->getInAppPurchaseTypeAllowableValues();
        if (!is_null($in_app_purchase_type) && !in_array($in_app_purchase_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'in_app_purchase_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['in_app_purchase_type'] = $in_app_purchase_type;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

