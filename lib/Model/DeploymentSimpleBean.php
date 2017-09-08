<?php
/**
 * DeploymentSimpleBean
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Manager Portal
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * DeploymentSimpleBean Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeploymentSimpleBean implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DeploymentSimpleBean';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_id' => 'int',
        'api_name' => 'string',
        'id' => 'int',
        'revision_id' => 'int',
        'revision_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_id' => 'int64',
        'api_name' => null,
        'id' => 'int64',
        'revision_id' => 'int64',
        'revision_number' => 'int32'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'api_id' => 'apiId',
        'api_name' => 'apiName',
        'id' => 'id',
        'revision_id' => 'revisionId',
        'revision_number' => 'revisionNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'api_id' => 'setApiId',
        'api_name' => 'setApiName',
        'id' => 'setId',
        'revision_id' => 'setRevisionId',
        'revision_number' => 'setRevisionNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'api_id' => 'getApiId',
        'api_name' => 'getApiName',
        'id' => 'getId',
        'revision_id' => 'getRevisionId',
        'revision_number' => 'getRevisionNumber'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['api_id'] = isset($data['api_id']) ? $data['api_id'] : null;
        $this->container['api_name'] = isset($data['api_name']) ? $data['api_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['revision_id'] = isset($data['revision_id']) ? $data['revision_id'] : null;
        $this->container['revision_number'] = isset($data['revision_number']) ? $data['revision_number'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets api_id
     * @return int
     */
    public function getApiId()
    {
        return $this->container['api_id'];
    }

    /**
     * Sets api_id
     * @param int $api_id
     * @return $this
     */
    public function setApiId($api_id)
    {
        $this->container['api_id'] = $api_id;

        return $this;
    }

    /**
     * Gets api_name
     * @return string
     */
    public function getApiName()
    {
        return $this->container['api_name'];
    }

    /**
     * Sets api_name
     * @param string $api_name
     * @return $this
     */
    public function setApiName($api_name)
    {
        $this->container['api_name'] = $api_name;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets revision_id
     * @return int
     */
    public function getRevisionId()
    {
        return $this->container['revision_id'];
    }

    /**
     * Sets revision_id
     * @param int $revision_id
     * @return $this
     */
    public function setRevisionId($revision_id)
    {
        $this->container['revision_id'] = $revision_id;

        return $this;
    }

    /**
     * Gets revision_number
     * @return int
     */
    public function getRevisionNumber()
    {
        return $this->container['revision_number'];
    }

    /**
     * Sets revision_number
     * @param int $revision_number
     * @return $this
     */
    public function setRevisionNumber($revision_number)
    {
        $this->container['revision_number'] = $revision_number;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

