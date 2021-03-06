<?php
/**
 * CallsMetric
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
 * CallsMetric Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CallsMetric implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CallsMetric';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'blocked' => 'int',
        'client_error' => 'int',
        'count' => 'int',
        'date' => '\DateTime',
        'error' => 'int',
        'server_error' => 'int',
        'success' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'blocked' => 'int64',
        'client_error' => 'int64',
        'count' => 'int64',
        'date' => 'date-time',
        'error' => 'int64',
        'server_error' => 'int64',
        'success' => 'int64'
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
        'blocked' => 'blocked',
        'client_error' => 'clientError',
        'count' => 'count',
        'date' => 'date',
        'error' => 'error',
        'server_error' => 'serverError',
        'success' => 'success'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'blocked' => 'setBlocked',
        'client_error' => 'setClientError',
        'count' => 'setCount',
        'date' => 'setDate',
        'error' => 'setError',
        'server_error' => 'setServerError',
        'success' => 'setSuccess'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'blocked' => 'getBlocked',
        'client_error' => 'getClientError',
        'count' => 'getCount',
        'date' => 'getDate',
        'error' => 'getError',
        'server_error' => 'getServerError',
        'success' => 'getSuccess'
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
        $this->container['blocked'] = isset($data['blocked']) ? $data['blocked'] : null;
        $this->container['client_error'] = isset($data['client_error']) ? $data['client_error'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['server_error'] = isset($data['server_error']) ? $data['server_error'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
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
     * Gets blocked
     * @return int
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     * @param int $blocked
     * @return $this
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets client_error
     * @return int
     */
    public function getClientError()
    {
        return $this->container['client_error'];
    }

    /**
     * Sets client_error
     * @param int $client_error
     * @return $this
     */
    public function setClientError($client_error)
    {
        $this->container['client_error'] = $client_error;

        return $this;
    }

    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param \DateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets error
     * @return int
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     * @param int $error
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets server_error
     * @return int
     */
    public function getServerError()
    {
        return $this->container['server_error'];
    }

    /**
     * Sets server_error
     * @param int $server_error
     * @return $this
     */
    public function setServerError($server_error)
    {
        $this->container['server_error'] = $server_error;

        return $this;
    }

    /**
     * Gets success
     * @return int
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     * @param int $success
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

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


