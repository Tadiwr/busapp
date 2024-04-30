<?php
/**
 * ConnectorSmtpConnectionDto
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MailSlurp API
 *
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.  ## Resources  - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://docs.mailslurp.com/) - [Examples](https://github.com/mailslurp/examples) repository
 *
 * The version of the OpenAPI document: 6.5.2
 * Contact: contact@mailslurp.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MailSlurp\Models;

use \ArrayAccess;
use \MailSlurp\ObjectSerializer;

/**
 * ConnectorSmtpConnectionDto Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConnectorSmtpConnectionDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConnectorSmtpConnectionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'connector_id' => 'string',
        'smtp_host' => 'string',
        'smtp_port' => 'int',
        'smtp_username' => 'string',
        'smtp_password' => 'string',
        'smtp_ssl' => 'bool',
        'enabled' => 'bool',
        'created_at' => '\DateTime',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'connector_id' => 'uuid',
        'smtp_host' => null,
        'smtp_port' => 'int32',
        'smtp_username' => null,
        'smtp_password' => null,
        'smtp_ssl' => null,
        'enabled' => null,
        'created_at' => 'date-time',
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'connector_id' => false,
		'smtp_host' => false,
		'smtp_port' => false,
		'smtp_username' => false,
		'smtp_password' => false,
		'smtp_ssl' => false,
		'enabled' => false,
		'created_at' => false,
		'id' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'connector_id' => 'connectorId',
        'smtp_host' => 'smtpHost',
        'smtp_port' => 'smtpPort',
        'smtp_username' => 'smtpUsername',
        'smtp_password' => 'smtpPassword',
        'smtp_ssl' => 'smtpSsl',
        'enabled' => 'enabled',
        'created_at' => 'createdAt',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connector_id' => 'setConnectorId',
        'smtp_host' => 'setSmtpHost',
        'smtp_port' => 'setSmtpPort',
        'smtp_username' => 'setSmtpUsername',
        'smtp_password' => 'setSmtpPassword',
        'smtp_ssl' => 'setSmtpSsl',
        'enabled' => 'setEnabled',
        'created_at' => 'setCreatedAt',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connector_id' => 'getConnectorId',
        'smtp_host' => 'getSmtpHost',
        'smtp_port' => 'getSmtpPort',
        'smtp_username' => 'getSmtpUsername',
        'smtp_password' => 'getSmtpPassword',
        'smtp_ssl' => 'getSmtpSsl',
        'enabled' => 'getEnabled',
        'created_at' => 'getCreatedAt',
        'id' => 'getId'
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
        $this->setIfExists('connector_id', $data ?? [], null);
        $this->setIfExists('smtp_host', $data ?? [], null);
        $this->setIfExists('smtp_port', $data ?? [], null);
        $this->setIfExists('smtp_username', $data ?? [], null);
        $this->setIfExists('smtp_password', $data ?? [], null);
        $this->setIfExists('smtp_ssl', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['connector_id'] === null) {
            $invalidProperties[] = "'connector_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets connector_id
     *
     * @return string
     */
    public function getConnectorId()
    {
        return $this->container['connector_id'];
    }

    /**
     * Sets connector_id
     *
     * @param string $connector_id connector_id
     *
     * @return self
     */
    public function setConnectorId($connector_id)
    {

        if (is_null($connector_id)) {
            throw new \InvalidArgumentException('non-nullable connector_id cannot be null');
        }

        $this->container['connector_id'] = $connector_id;

        return $this;
    }

    /**
     * Gets smtp_host
     *
     * @return string|null
     */
    public function getSmtpHost()
    {
        return $this->container['smtp_host'];
    }

    /**
     * Sets smtp_host
     *
     * @param string|null $smtp_host smtp_host
     *
     * @return self
     */
    public function setSmtpHost($smtp_host)
    {

        if (is_null($smtp_host)) {
            throw new \InvalidArgumentException('non-nullable smtp_host cannot be null');
        }

        $this->container['smtp_host'] = $smtp_host;

        return $this;
    }

    /**
     * Gets smtp_port
     *
     * @return int|null
     */
    public function getSmtpPort()
    {
        return $this->container['smtp_port'];
    }

    /**
     * Sets smtp_port
     *
     * @param int|null $smtp_port smtp_port
     *
     * @return self
     */
    public function setSmtpPort($smtp_port)
    {

        if (is_null($smtp_port)) {
            throw new \InvalidArgumentException('non-nullable smtp_port cannot be null');
        }

        $this->container['smtp_port'] = $smtp_port;

        return $this;
    }

    /**
     * Gets smtp_username
     *
     * @return string|null
     */
    public function getSmtpUsername()
    {
        return $this->container['smtp_username'];
    }

    /**
     * Sets smtp_username
     *
     * @param string|null $smtp_username smtp_username
     *
     * @return self
     */
    public function setSmtpUsername($smtp_username)
    {

        if (is_null($smtp_username)) {
            throw new \InvalidArgumentException('non-nullable smtp_username cannot be null');
        }

        $this->container['smtp_username'] = $smtp_username;

        return $this;
    }

    /**
     * Gets smtp_password
     *
     * @return string|null
     */
    public function getSmtpPassword()
    {
        return $this->container['smtp_password'];
    }

    /**
     * Sets smtp_password
     *
     * @param string|null $smtp_password smtp_password
     *
     * @return self
     */
    public function setSmtpPassword($smtp_password)
    {

        if (is_null($smtp_password)) {
            throw new \InvalidArgumentException('non-nullable smtp_password cannot be null');
        }

        $this->container['smtp_password'] = $smtp_password;

        return $this;
    }

    /**
     * Gets smtp_ssl
     *
     * @return bool|null
     */
    public function getSmtpSsl()
    {
        return $this->container['smtp_ssl'];
    }

    /**
     * Sets smtp_ssl
     *
     * @param bool|null $smtp_ssl smtp_ssl
     *
     * @return self
     */
    public function setSmtpSsl($smtp_ssl)
    {

        if (is_null($smtp_ssl)) {
            throw new \InvalidArgumentException('non-nullable smtp_ssl cannot be null');
        }

        $this->container['smtp_ssl'] = $smtp_ssl;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {

        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }

        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {

        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }

        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


