<?php
/**
 * AccessToken
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
 * AccessToken Class Doc Comment
 *
 * @category    Class
 * @description Access token model
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccessToken implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Access token';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'apis' => '\Swagger\Client\Model\APISimpleBean[]',
        'app' => '\Swagger\Client\Model\AppTokenSimpleBean',
        'code' => 'string',
        'creation_date' => '\DateTime',
        'expired_date' => '\DateTime',
        'expires_in' => 'int',
        'extra_info' => 'object',
        'id' => 'int',
        'owner' => 'string',
        'plan_ids' => 'int[]',
        'refresh_token' => 'string',
        'scope' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'apis' => null,
        'app' => null,
        'code' => null,
        'creation_date' => 'date-time',
        'expired_date' => 'date-time',
        'expires_in' => 'int64',
        'extra_info' => null,
        'id' => 'int64',
        'owner' => null,
        'plan_ids' => 'int64',
        'refresh_token' => null,
        'scope' => null,
        'status' => null
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
        'apis' => 'apis',
        'app' => 'app',
        'code' => 'code',
        'creation_date' => 'creationDate',
        'expired_date' => 'expiredDate',
        'expires_in' => 'expiresIn',
        'extra_info' => 'extraInfo',
        'id' => 'id',
        'owner' => 'owner',
        'plan_ids' => 'planIds',
        'refresh_token' => 'refreshToken',
        'scope' => 'scope',
        'status' => 'status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'apis' => 'setApis',
        'app' => 'setApp',
        'code' => 'setCode',
        'creation_date' => 'setCreationDate',
        'expired_date' => 'setExpiredDate',
        'expires_in' => 'setExpiresIn',
        'extra_info' => 'setExtraInfo',
        'id' => 'setId',
        'owner' => 'setOwner',
        'plan_ids' => 'setPlanIds',
        'refresh_token' => 'setRefreshToken',
        'scope' => 'setScope',
        'status' => 'setStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'apis' => 'getApis',
        'app' => 'getApp',
        'code' => 'getCode',
        'creation_date' => 'getCreationDate',
        'expired_date' => 'getExpiredDate',
        'expires_in' => 'getExpiresIn',
        'extra_info' => 'getExtraInfo',
        'id' => 'getId',
        'owner' => 'getOwner',
        'plan_ids' => 'getPlanIds',
        'refresh_token' => 'getRefreshToken',
        'scope' => 'getScope',
        'status' => 'getStatus'
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

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_REVOKED = 'REVOKED';
    const STATUS_EXPIRED = 'EXPIRED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_REVOKED,
            self::STATUS_EXPIRED,
        ];
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
        $this->container['apis'] = isset($data['apis']) ? $data['apis'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['expired_date'] = isset($data['expired_date']) ? $data['expired_date'] : null;
        $this->container['expires_in'] = isset($data['expires_in']) ? $data['expires_in'] : null;
        $this->container['extra_info'] = isset($data['extra_info']) ? $data['extra_info'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['plan_ids'] = isset($data['plan_ids']) ? $data['plan_ids'] : null;
        $this->container['refresh_token'] = isset($data['refresh_token']) ? $data['refresh_token'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets apis
     * @return \Swagger\Client\Model\APISimpleBean[]
     */
    public function getApis()
    {
        return $this->container['apis'];
    }

    /**
     * Sets apis
     * @param \Swagger\Client\Model\APISimpleBean[] $apis
     * @return $this
     */
    public function setApis($apis)
    {
        $this->container['apis'] = $apis;

        return $this;
    }

    /**
     * Gets app
     * @return \Swagger\Client\Model\AppTokenSimpleBean
     */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
     * Sets app
     * @param \Swagger\Client\Model\AppTokenSimpleBean $app
     * @return $this
     */
    public function setApp($app)
    {
        $this->container['app'] = $app;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets creation_date
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     * @param \DateTime $creation_date
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets expired_date
     * @return \DateTime
     */
    public function getExpiredDate()
    {
        return $this->container['expired_date'];
    }

    /**
     * Sets expired_date
     * @param \DateTime $expired_date
     * @return $this
     */
    public function setExpiredDate($expired_date)
    {
        $this->container['expired_date'] = $expired_date;

        return $this;
    }

    /**
     * Gets expires_in
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in
     * @param int $expires_in
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->container['expires_in'] = $expires_in;

        return $this;
    }

    /**
     * Gets extra_info
     * @return object
     */
    public function getExtraInfo()
    {
        return $this->container['extra_info'];
    }

    /**
     * Sets extra_info
     * @param object $extra_info
     * @return $this
     */
    public function setExtraInfo($extra_info)
    {
        $this->container['extra_info'] = $extra_info;

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
     * Gets owner
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param string $owner
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets plan_ids
     * @return int[]
     */
    public function getPlanIds()
    {
        return $this->container['plan_ids'];
    }

    /**
     * Sets plan_ids
     * @param int[] $plan_ids
     * @return $this
     */
    public function setPlanIds($plan_ids)
    {
        $this->container['plan_ids'] = $plan_ids;

        return $this;
    }

    /**
     * Gets refresh_token
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token
     * @param string $refresh_token
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        $this->container['refresh_token'] = $refresh_token;

        return $this;
    }

    /**
     * Gets scope
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     * @param string $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

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


