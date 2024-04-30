<?php
/**
 * ImapAccessDetails
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
 * ImapAccessDetails Class Doc Comment
 *
 * @category Class
 * @description Access details for inbox using IMAP
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ImapAccessDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImapAccessDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'imap_server_host' => 'string',
        'imap_server_port' => 'int',
        'imap_username' => 'string',
        'imap_password' => 'string',
        'imap_mailbox' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'imap_server_host' => null,
        'imap_server_port' => 'int32',
        'imap_username' => null,
        'imap_password' => null,
        'imap_mailbox' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'imap_server_host' => false,
		'imap_server_port' => false,
		'imap_username' => false,
		'imap_password' => false,
		'imap_mailbox' => false
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
        'imap_server_host' => 'imapServerHost',
        'imap_server_port' => 'imapServerPort',
        'imap_username' => 'imapUsername',
        'imap_password' => 'imapPassword',
        'imap_mailbox' => 'imapMailbox'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'imap_server_host' => 'setImapServerHost',
        'imap_server_port' => 'setImapServerPort',
        'imap_username' => 'setImapUsername',
        'imap_password' => 'setImapPassword',
        'imap_mailbox' => 'setImapMailbox'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'imap_server_host' => 'getImapServerHost',
        'imap_server_port' => 'getImapServerPort',
        'imap_username' => 'getImapUsername',
        'imap_password' => 'getImapPassword',
        'imap_mailbox' => 'getImapMailbox'
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
        $this->setIfExists('imap_server_host', $data ?? [], null);
        $this->setIfExists('imap_server_port', $data ?? [], null);
        $this->setIfExists('imap_username', $data ?? [], null);
        $this->setIfExists('imap_password', $data ?? [], null);
        $this->setIfExists('imap_mailbox', $data ?? [], null);
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

        if ($this->container['imap_server_host'] === null) {
            $invalidProperties[] = "'imap_server_host' can't be null";
        }
        if ($this->container['imap_server_port'] === null) {
            $invalidProperties[] = "'imap_server_port' can't be null";
        }
        if ($this->container['imap_username'] === null) {
            $invalidProperties[] = "'imap_username' can't be null";
        }
        if ($this->container['imap_password'] === null) {
            $invalidProperties[] = "'imap_password' can't be null";
        }
        if ($this->container['imap_mailbox'] === null) {
            $invalidProperties[] = "'imap_mailbox' can't be null";
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
     * Gets imap_server_host
     *
     * @return string
     */
    public function getImapServerHost()
    {
        return $this->container['imap_server_host'];
    }

    /**
     * Sets imap_server_host
     *
     * @param string $imap_server_host IMAP server host domain
     *
     * @return self
     */
    public function setImapServerHost($imap_server_host)
    {

        if (is_null($imap_server_host)) {
            throw new \InvalidArgumentException('non-nullable imap_server_host cannot be null');
        }

        $this->container['imap_server_host'] = $imap_server_host;

        return $this;
    }

    /**
     * Gets imap_server_port
     *
     * @return int
     */
    public function getImapServerPort()
    {
        return $this->container['imap_server_port'];
    }

    /**
     * Sets imap_server_port
     *
     * @param int $imap_server_port IMAP server host port
     *
     * @return self
     */
    public function setImapServerPort($imap_server_port)
    {

        if (is_null($imap_server_port)) {
            throw new \InvalidArgumentException('non-nullable imap_server_port cannot be null');
        }

        $this->container['imap_server_port'] = $imap_server_port;

        return $this;
    }

    /**
     * Gets imap_username
     *
     * @return string
     */
    public function getImapUsername()
    {
        return $this->container['imap_username'];
    }

    /**
     * Sets imap_username
     *
     * @param string $imap_username IMAP username for login
     *
     * @return self
     */
    public function setImapUsername($imap_username)
    {

        if (is_null($imap_username)) {
            throw new \InvalidArgumentException('non-nullable imap_username cannot be null');
        }

        $this->container['imap_username'] = $imap_username;

        return $this;
    }

    /**
     * Gets imap_password
     *
     * @return string
     */
    public function getImapPassword()
    {
        return $this->container['imap_password'];
    }

    /**
     * Sets imap_password
     *
     * @param string $imap_password IMAP password for login
     *
     * @return self
     */
    public function setImapPassword($imap_password)
    {

        if (is_null($imap_password)) {
            throw new \InvalidArgumentException('non-nullable imap_password cannot be null');
        }

        $this->container['imap_password'] = $imap_password;

        return $this;
    }

    /**
     * Gets imap_mailbox
     *
     * @return string
     */
    public function getImapMailbox()
    {
        return $this->container['imap_mailbox'];
    }

    /**
     * Sets imap_mailbox
     *
     * @param string $imap_mailbox IMAP mailbox to SELECT
     *
     * @return self
     */
    public function setImapMailbox($imap_mailbox)
    {

        if (is_null($imap_mailbox)) {
            throw new \InvalidArgumentException('non-nullable imap_mailbox cannot be null');
        }

        $this->container['imap_mailbox'] = $imap_mailbox;

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


