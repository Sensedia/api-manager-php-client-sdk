<?php
/**
 * ChangeLog
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
 * ChangeLog Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChangeLog implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ChangeLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'creation_date' => '\DateTime',
        'credential_id' => 'int',
        'credential_login' => 'string',
        'credential_name' => 'string',
        'id' => 'int',
        'json_after' => 'string',
        'json_before' => 'string',
        'object_id' => 'int',
        'object_type' => 'string',
        'parent' => '\Swagger\Client\Model\ChangeLog'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action' => null,
        'creation_date' => 'date-time',
        'credential_id' => 'int64',
        'credential_login' => null,
        'credential_name' => null,
        'id' => 'int64',
        'json_after' => null,
        'json_before' => null,
        'object_id' => 'int64',
        'object_type' => null,
        'parent' => null
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
        'action' => 'action',
        'creation_date' => 'creationDate',
        'credential_id' => 'credentialId',
        'credential_login' => 'credentialLogin',
        'credential_name' => 'credentialName',
        'id' => 'id',
        'json_after' => 'jsonAfter',
        'json_before' => 'jsonBefore',
        'object_id' => 'objectId',
        'object_type' => 'objectType',
        'parent' => 'parent'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'creation_date' => 'setCreationDate',
        'credential_id' => 'setCredentialId',
        'credential_login' => 'setCredentialLogin',
        'credential_name' => 'setCredentialName',
        'id' => 'setId',
        'json_after' => 'setJsonAfter',
        'json_before' => 'setJsonBefore',
        'object_id' => 'setObjectId',
        'object_type' => 'setObjectType',
        'parent' => 'setParent'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'creation_date' => 'getCreationDate',
        'credential_id' => 'getCredentialId',
        'credential_login' => 'getCredentialLogin',
        'credential_name' => 'getCredentialName',
        'id' => 'getId',
        'json_after' => 'getJsonAfter',
        'json_before' => 'getJsonBefore',
        'object_id' => 'getObjectId',
        'object_type' => 'getObjectType',
        'parent' => 'getParent'
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

    const ACTION_CREATED = 'CREATED';
    const ACTION_UPDATED = 'UPDATED';
    const ACTION_DELETED = 'DELETED';
    const OBJECT_TYPE_APP_TOKEN = 'APP_TOKEN';
    const OBJECT_TYPE_AUTH_TOKEN = 'AUTH_TOKEN';
    const OBJECT_TYPE_API_DEFINITION = 'API_DEFINITION';
    const OBJECT_TYPE_USER_ACCOUNT = 'USER_ACCOUNT';
    const OBJECT_TYPE_ACCESS_CREDENTIAL = 'ACCESS_CREDENTIAL';
    const OBJECT_TYPE_EXTERNAL_LISTENER = 'EXTERNAL_LISTENER';
    const OBJECT_TYPE_APICOMPONENTINTERCEPTOR = 'APICOMPONENTINTERCEPTOR';
    const OBJECT_TYPE_PLANINTERCEPTOR = 'PLANINTERCEPTOR';
    const OBJECT_TYPE_PLAN = 'PLAN';
    const OBJECT_TYPE_CUSTOM_INTERCEPTOR = 'CUSTOM_INTERCEPTOR';
    const OBJECT_TYPE_CUSTOM_JAVA_INTERCEPTOR = 'CUSTOM_JAVA_INTERCEPTOR';
    const OBJECT_TYPE_BAAS = 'BAAS';
    const OBJECT_TYPE_ENVIRONMENT = 'ENVIRONMENT';
    const OBJECT_TYPE_REVISION = 'REVISION';
    const OBJECT_TYPE_TEAM = 'TEAM';
    const OBJECT_TYPE_DEPLOYMENT = 'DEPLOYMENT';
    const OBJECT_TYPE_GATEWAY = 'GATEWAY';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_CREATED,
            self::ACTION_UPDATED,
            self::ACTION_DELETED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_APP_TOKEN,
            self::OBJECT_TYPE_AUTH_TOKEN,
            self::OBJECT_TYPE_API_DEFINITION,
            self::OBJECT_TYPE_USER_ACCOUNT,
            self::OBJECT_TYPE_ACCESS_CREDENTIAL,
            self::OBJECT_TYPE_EXTERNAL_LISTENER,
            self::OBJECT_TYPE_APICOMPONENTINTERCEPTOR,
            self::OBJECT_TYPE_PLANINTERCEPTOR,
            self::OBJECT_TYPE_PLAN,
            self::OBJECT_TYPE_CUSTOM_INTERCEPTOR,
            self::OBJECT_TYPE_CUSTOM_JAVA_INTERCEPTOR,
            self::OBJECT_TYPE_BAAS,
            self::OBJECT_TYPE_ENVIRONMENT,
            self::OBJECT_TYPE_REVISION,
            self::OBJECT_TYPE_TEAM,
            self::OBJECT_TYPE_DEPLOYMENT,
            self::OBJECT_TYPE_GATEWAY,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['credential_id'] = isset($data['credential_id']) ? $data['credential_id'] : null;
        $this->container['credential_login'] = isset($data['credential_login']) ? $data['credential_login'] : null;
        $this->container['credential_name'] = isset($data['credential_name']) ? $data['credential_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['json_after'] = isset($data['json_after']) ? $data['json_after'] : null;
        $this->container['json_before'] = isset($data['json_before']) ? $data['json_before'] : null;
        $this->container['object_id'] = isset($data['object_id']) ? $data['object_id'] : null;
        $this->container['object_type'] = isset($data['object_type']) ? $data['object_type'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getActionAllowableValues();
        if (!in_array($this->container['action'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getObjectTypeAllowableValues();
        if (!in_array($this->container['object_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'object_type', must be one of '%s'",
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

        $allowed_values = $this->getActionAllowableValues();
        if (!in_array($this->container['action'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getObjectTypeAllowableValues();
        if (!in_array($this->container['object_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $allowed_values = $this->getActionAllowableValues();
        if (!is_null($action) && !in_array($action, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'action', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['action'] = $action;

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
     * Gets credential_id
     * @return int
     */
    public function getCredentialId()
    {
        return $this->container['credential_id'];
    }

    /**
     * Sets credential_id
     * @param int $credential_id
     * @return $this
     */
    public function setCredentialId($credential_id)
    {
        $this->container['credential_id'] = $credential_id;

        return $this;
    }

    /**
     * Gets credential_login
     * @return string
     */
    public function getCredentialLogin()
    {
        return $this->container['credential_login'];
    }

    /**
     * Sets credential_login
     * @param string $credential_login
     * @return $this
     */
    public function setCredentialLogin($credential_login)
    {
        $this->container['credential_login'] = $credential_login;

        return $this;
    }

    /**
     * Gets credential_name
     * @return string
     */
    public function getCredentialName()
    {
        return $this->container['credential_name'];
    }

    /**
     * Sets credential_name
     * @param string $credential_name
     * @return $this
     */
    public function setCredentialName($credential_name)
    {
        $this->container['credential_name'] = $credential_name;

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
     * Gets json_after
     * @return string
     */
    public function getJsonAfter()
    {
        return $this->container['json_after'];
    }

    /**
     * Sets json_after
     * @param string $json_after
     * @return $this
     */
    public function setJsonAfter($json_after)
    {
        $this->container['json_after'] = $json_after;

        return $this;
    }

    /**
     * Gets json_before
     * @return string
     */
    public function getJsonBefore()
    {
        return $this->container['json_before'];
    }

    /**
     * Sets json_before
     * @param string $json_before
     * @return $this
     */
    public function setJsonBefore($json_before)
    {
        $this->container['json_before'] = $json_before;

        return $this;
    }

    /**
     * Gets object_id
     * @return int
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     * @param int $object_id
     * @return $this
     */
    public function setObjectId($object_id)
    {
        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets object_type
     * @return string
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     * @param string $object_type
     * @return $this
     */
    public function setObjectType($object_type)
    {
        $allowed_values = $this->getObjectTypeAllowableValues();
        if (!is_null($object_type) && !in_array($object_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'object_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets parent
     * @return \Swagger\Client\Model\ChangeLog
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     * @param \Swagger\Client\Model\ChangeLog $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

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


