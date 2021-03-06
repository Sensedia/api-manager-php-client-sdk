<?php
/**
 * OperationBean
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
 * OperationBean Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OperationBean implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OperationBean';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_broken' => 'bool',
        'async' => 'bool',
        'description' => 'string',
        'destination' => 'string',
        'id' => 'int',
        'interceptors' => '\Swagger\Client\Model\InterceptorBean[]',
        'method' => 'string',
        'path' => 'string',
        'timeout' => 'string',
        'urls' => '\Swagger\Client\Model\OperationUrlBean[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_broken' => null,
        'async' => null,
        'description' => null,
        'destination' => null,
        'id' => 'int64',
        'interceptors' => null,
        'method' => null,
        'path' => null,
        'timeout' => null,
        'urls' => null
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
        'api_broken' => 'apiBroken',
        'async' => 'async',
        'description' => 'description',
        'destination' => 'destination',
        'id' => 'id',
        'interceptors' => 'interceptors',
        'method' => 'method',
        'path' => 'path',
        'timeout' => 'timeout',
        'urls' => 'urls'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'api_broken' => 'setApiBroken',
        'async' => 'setAsync',
        'description' => 'setDescription',
        'destination' => 'setDestination',
        'id' => 'setId',
        'interceptors' => 'setInterceptors',
        'method' => 'setMethod',
        'path' => 'setPath',
        'timeout' => 'setTimeout',
        'urls' => 'setUrls'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'api_broken' => 'getApiBroken',
        'async' => 'getAsync',
        'description' => 'getDescription',
        'destination' => 'getDestination',
        'id' => 'getId',
        'interceptors' => 'getInterceptors',
        'method' => 'getMethod',
        'path' => 'getPath',
        'timeout' => 'getTimeout',
        'urls' => 'getUrls'
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
        $this->container['api_broken'] = isset($data['api_broken']) ? $data['api_broken'] : null;
        $this->container['async'] = isset($data['async']) ? $data['async'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['interceptors'] = isset($data['interceptors']) ? $data['interceptors'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
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
     * Gets api_broken
     * @return bool
     */
    public function getApiBroken()
    {
        return $this->container['api_broken'];
    }

    /**
     * Sets api_broken
     * @param bool $api_broken
     * @return $this
     */
    public function setApiBroken($api_broken)
    {
        $this->container['api_broken'] = $api_broken;

        return $this;
    }

    /**
     * Gets async
     * @return bool
     */
    public function getAsync()
    {
        return $this->container['async'];
    }

    /**
     * Sets async
     * @param bool $async
     * @return $this
     */
    public function setAsync($async)
    {
        $this->container['async'] = $async;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets destination
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     * @param string $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

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
     * Gets interceptors
     * @return \Swagger\Client\Model\InterceptorBean[]
     */
    public function getInterceptors()
    {
        return $this->container['interceptors'];
    }

    /**
     * Sets interceptors
     * @param \Swagger\Client\Model\InterceptorBean[] $interceptors
     * @return $this
     */
    public function setInterceptors($interceptors)
    {
        $this->container['interceptors'] = $interceptors;

        return $this;
    }

    /**
     * Gets method
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     * @param string $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets timeout
     * @return string
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     * @param string $timeout
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets urls
     * @return \Swagger\Client\Model\OperationUrlBean[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     * @param \Swagger\Client\Model\OperationUrlBean[] $urls
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

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


