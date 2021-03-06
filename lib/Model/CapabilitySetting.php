<?php
/**
 * CapabilitySetting
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
 * CapabilitySetting Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CapabilitySetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CapabilitySetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'key' => 'string',
        'name' => 'string',
        'description' => 'string',
        'enabled_by_default' => 'bool',
        'visible' => 'bool',
        'allowed_instances' => 'string',
        'min_instances' => 'int',
        'options' => '\OpenAPI\Client\Model\CapabilityOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'key' => null,
        'name' => null,
        'description' => null,
        'enabled_by_default' => null,
        'visible' => null,
        'allowed_instances' => null,
        'min_instances' => null,
        'options' => null
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
        'key' => 'key',
        'name' => 'name',
        'description' => 'description',
        'enabled_by_default' => 'enabledByDefault',
        'visible' => 'visible',
        'allowed_instances' => 'allowedInstances',
        'min_instances' => 'minInstances',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'key' => 'setKey',
        'name' => 'setName',
        'description' => 'setDescription',
        'enabled_by_default' => 'setEnabledByDefault',
        'visible' => 'setVisible',
        'allowed_instances' => 'setAllowedInstances',
        'min_instances' => 'setMinInstances',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'key' => 'getKey',
        'name' => 'getName',
        'description' => 'getDescription',
        'enabled_by_default' => 'getEnabledByDefault',
        'visible' => 'getVisible',
        'allowed_instances' => 'getAllowedInstances',
        'min_instances' => 'getMinInstances',
        'options' => 'getOptions'
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

    const KEY_ICLOUD_VERSION = 'ICLOUD_VERSION';
    const KEY_DATA_PROTECTION_PERMISSION_LEVEL = 'DATA_PROTECTION_PERMISSION_LEVEL';
    const KEY_APPLE_ID_AUTH_APP_CONSENT = 'APPLE_ID_AUTH_APP_CONSENT';
    const ALLOWED_INSTANCES_ENTRY = 'ENTRY';
    const ALLOWED_INSTANCES_SINGLE = 'SINGLE';
    const ALLOWED_INSTANCES_MULTIPLE = 'MULTIPLE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKeyAllowableValues()
    {
        return [
            self::KEY_ICLOUD_VERSION,
            self::KEY_DATA_PROTECTION_PERMISSION_LEVEL,
            self::KEY_APPLE_ID_AUTH_APP_CONSENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllowedInstancesAllowableValues()
    {
        return [
            self::ALLOWED_INSTANCES_ENTRY,
            self::ALLOWED_INSTANCES_SINGLE,
            self::ALLOWED_INSTANCES_MULTIPLE,
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enabled_by_default'] = isset($data['enabled_by_default']) ? $data['enabled_by_default'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['allowed_instances'] = isset($data['allowed_instances']) ? $data['allowed_instances'] : null;
        $this->container['min_instances'] = isset($data['min_instances']) ? $data['min_instances'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getKeyAllowableValues();
        if (!is_null($this->container['key']) && !in_array($this->container['key'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'key', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAllowedInstancesAllowableValues();
        if (!is_null($this->container['allowed_instances']) && !in_array($this->container['allowed_instances'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'allowed_instances', must be one of '%s'",
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
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $allowedValues = $this->getKeyAllowableValues();
        if (!is_null($key) && !in_array($key, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'key', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets enabled_by_default
     *
     * @return bool|null
     */
    public function getEnabledByDefault()
    {
        return $this->container['enabled_by_default'];
    }

    /**
     * Sets enabled_by_default
     *
     * @param bool|null $enabled_by_default enabled_by_default
     *
     * @return $this
     */
    public function setEnabledByDefault($enabled_by_default)
    {
        $this->container['enabled_by_default'] = $enabled_by_default;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible visible
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets allowed_instances
     *
     * @return string|null
     */
    public function getAllowedInstances()
    {
        return $this->container['allowed_instances'];
    }

    /**
     * Sets allowed_instances
     *
     * @param string|null $allowed_instances allowed_instances
     *
     * @return $this
     */
    public function setAllowedInstances($allowed_instances)
    {
        $allowedValues = $this->getAllowedInstancesAllowableValues();
        if (!is_null($allowed_instances) && !in_array($allowed_instances, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'allowed_instances', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allowed_instances'] = $allowed_instances;

        return $this;
    }

    /**
     * Gets min_instances
     *
     * @return int|null
     */
    public function getMinInstances()
    {
        return $this->container['min_instances'];
    }

    /**
     * Sets min_instances
     *
     * @param int|null $min_instances min_instances
     *
     * @return $this
     */
    public function setMinInstances($min_instances)
    {
        $this->container['min_instances'] = $min_instances;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \OpenAPI\Client\Model\CapabilityOption[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \OpenAPI\Client\Model\CapabilityOption[]|null $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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


