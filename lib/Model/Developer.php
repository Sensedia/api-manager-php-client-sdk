<?php
/**
 * Developer
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
 * Developer Class Doc Comment
 *
 * @category    Class
 * @description Developer model
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Developer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Developer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'complements' => 'string',
        'creation_date' => '\DateTime',
        'email' => 'string',
        'id' => 'int',
        'login' => 'string',
        'name' => 'string',
        'password' => 'string',
        'role' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'complements' => null,
        'creation_date' => 'date-time',
        'email' => null,
        'id' => 'int64',
        'login' => null,
        'name' => null,
        'password' => null,
        'role' => null,
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
        'complements' => 'complements',
        'creation_date' => 'creationDate',
        'email' => 'email',
        'id' => 'id',
        'login' => 'login',
        'name' => 'name',
        'password' => 'password',
        'role' => 'role',
        'status' => 'status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'complements' => 'setComplements',
        'creation_date' => 'setCreationDate',
        'email' => 'setEmail',
        'id' => 'setId',
        'login' => 'setLogin',
        'name' => 'setName',
        'password' => 'setPassword',
        'role' => 'setRole',
        'status' => 'setStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'complements' => 'getComplements',
        'creation_date' => 'getCreationDate',
        'email' => 'getEmail',
        'id' => 'getId',
        'login' => 'getLogin',
        'name' => 'getName',
        'password' => 'getPassword',
        'role' => 'getRole',
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

    const ROLE_ADMIN = 'ADMIN';
    const ROLE_VIEWER = 'VIEWER';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_PENDING = 'PENDING';
    const STATUS_BLOCKED = 'BLOCKED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_ADMIN,
            self::ROLE_VIEWER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_PENDING,
            self::STATUS_BLOCKED,
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
        $this->container['complements'] = isset($data['complements']) ? $data['complements'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
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

        $allowed_values = $this->getRoleAllowableValues();
        if (!in_array($this->container['role'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getRoleAllowableValues();
        if (!in_array($this->container['role'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets complements
     * @return string
     */
    public function getComplements()
    {
        return $this->container['complements'];
    }

    /**
     * Sets complements
     * @param string $complements
     * @return $this
     */
    public function setComplements($complements)
    {
        $this->container['complements'] = $complements;

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
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets login
     * @return string
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     * @param string $login
     * @return $this
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets role
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     * @param string $role
     * @return $this
     */
    public function setRole($role)
    {
        $allowed_values = $this->getRoleAllowableValues();
        if (!is_null($role) && !in_array($role, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['role'] = $role;

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


