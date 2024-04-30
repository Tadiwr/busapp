<?php
/**
 * ExpirationDefaults
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
 * ExpirationDefaults Class Doc Comment
 *
 * @category Class
 * @description Expiration defaults for your account
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExpirationDefaults implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpirationDefaults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_expiration_millis' => 'int',
        'max_expiration_millis' => 'int',
        'default_expires_at' => '\DateTime',
        'can_permanent_inbox' => 'bool',
        'next_inbox_allows_permanent' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_expiration_millis' => 'int64',
        'max_expiration_millis' => 'int64',
        'default_expires_at' => 'date-time',
        'can_permanent_inbox' => null,
        'next_inbox_allows_permanent' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'default_expiration_millis' => true,
		'max_expiration_millis' => true,
		'default_expires_at' => true,
		'can_permanent_inbox' => false,
		'next_inbox_allows_permanent' => false
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
        'default_expiration_millis' => 'defaultExpirationMillis',
        'max_expiration_millis' => 'maxExpirationMillis',
        'default_expires_at' => 'defaultExpiresAt',
        'can_permanent_inbox' => 'canPermanentInbox',
        'next_inbox_allows_permanent' => 'nextInboxAllowsPermanent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_expiration_millis' => 'setDefaultExpirationMillis',
        'max_expiration_millis' => 'setMaxExpirationMillis',
        'default_expires_at' => 'setDefaultExpiresAt',
        'can_permanent_inbox' => 'setCanPermanentInbox',
        'next_inbox_allows_permanent' => 'setNextInboxAllowsPermanent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_expiration_millis' => 'getDefaultExpirationMillis',
        'max_expiration_millis' => 'getMaxExpirationMillis',
        'default_expires_at' => 'getDefaultExpiresAt',
        'can_permanent_inbox' => 'getCanPermanentInbox',
        'next_inbox_allows_permanent' => 'getNextInboxAllowsPermanent'
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
        $this->setIfExists('default_expiration_millis', $data ?? [], null);
        $this->setIfExists('max_expiration_millis', $data ?? [], null);
        $this->setIfExists('default_expires_at', $data ?? [], null);
        $this->setIfExists('can_permanent_inbox', $data ?? [], null);
        $this->setIfExists('next_inbox_allows_permanent', $data ?? [], null);
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

        if ($this->container['can_permanent_inbox'] === null) {
            $invalidProperties[] = "'can_permanent_inbox' can't be null";
        }
        if ($this->container['next_inbox_allows_permanent'] === null) {
            $invalidProperties[] = "'next_inbox_allows_permanent' can't be null";
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
     * Gets default_expiration_millis
     *
     * @return int|null
     */
    public function getDefaultExpirationMillis()
    {
        return $this->container['default_expiration_millis'];
    }

    /**
     * Sets default_expiration_millis
     *
     * @param int|null $default_expiration_millis default_expiration_millis
     *
     * @return self
     */
    public function setDefaultExpirationMillis($default_expiration_millis)
    {

        if (is_null($default_expiration_millis)) {
            array_push($this->openAPINullablesSetToNull, 'default_expiration_millis');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_expiration_millis', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['default_expiration_millis'] = $default_expiration_millis;

        return $this;
    }

    /**
     * Gets max_expiration_millis
     *
     * @return int|null
     */
    public function getMaxExpirationMillis()
    {
        return $this->container['max_expiration_millis'];
    }

    /**
     * Sets max_expiration_millis
     *
     * @param int|null $max_expiration_millis max_expiration_millis
     *
     * @return self
     */
    public function setMaxExpirationMillis($max_expiration_millis)
    {

        if (is_null($max_expiration_millis)) {
            array_push($this->openAPINullablesSetToNull, 'max_expiration_millis');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_expiration_millis', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['max_expiration_millis'] = $max_expiration_millis;

        return $this;
    }

    /**
     * Gets default_expires_at
     *
     * @return \DateTime|null
     */
    public function getDefaultExpiresAt()
    {
        return $this->container['default_expires_at'];
    }

    /**
     * Sets default_expires_at
     *
     * @param \DateTime|null $default_expires_at default_expires_at
     *
     * @return self
     */
    public function setDefaultExpiresAt($default_expires_at)
    {

        if (is_null($default_expires_at)) {
            array_push($this->openAPINullablesSetToNull, 'default_expires_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_expires_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['default_expires_at'] = $default_expires_at;

        return $this;
    }

    /**
     * Gets can_permanent_inbox
     *
     * @return bool
     */
    public function getCanPermanentInbox()
    {
        return $this->container['can_permanent_inbox'];
    }

    /**
     * Sets can_permanent_inbox
     *
     * @param bool $can_permanent_inbox can_permanent_inbox
     *
     * @return self
     */
    public function setCanPermanentInbox($can_permanent_inbox)
    {

        if (is_null($can_permanent_inbox)) {
            throw new \InvalidArgumentException('non-nullable can_permanent_inbox cannot be null');
        }

        $this->container['can_permanent_inbox'] = $can_permanent_inbox;

        return $this;
    }

    /**
     * Gets next_inbox_allows_permanent
     *
     * @return bool
     */
    public function getNextInboxAllowsPermanent()
    {
        return $this->container['next_inbox_allows_permanent'];
    }

    /**
     * Sets next_inbox_allows_permanent
     *
     * @param bool $next_inbox_allows_permanent next_inbox_allows_permanent
     *
     * @return self
     */
    public function setNextInboxAllowsPermanent($next_inbox_allows_permanent)
    {

        if (is_null($next_inbox_allows_permanent)) {
            throw new \InvalidArgumentException('non-nullable next_inbox_allows_permanent cannot be null');
        }

        $this->container['next_inbox_allows_permanent'] = $next_inbox_allows_permanent;

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


