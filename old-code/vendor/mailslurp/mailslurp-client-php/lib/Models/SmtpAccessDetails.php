<?php
/**
 * SmtpAccessDetails
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
 * SmtpAccessDetails Class Doc Comment
 *
 * @category Class
 * @description Access details for inbox using SMTP
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SmtpAccessDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SmtpAccessDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'secure_smtp_server_host' => 'string',
        'secure_smtp_server_port' => 'int',
        'secure_smtp_username' => 'string',
        'secure_smtp_password' => 'string',
        'smtp_server_host' => 'string',
        'smtp_server_port' => 'int',
        'smtp_username' => 'string',
        'smtp_password' => 'string',
        'mail_from_domain' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'secure_smtp_server_host' => null,
        'secure_smtp_server_port' => 'int32',
        'secure_smtp_username' => null,
        'secure_smtp_password' => null,
        'smtp_server_host' => null,
        'smtp_server_port' => 'int32',
        'smtp_username' => null,
        'smtp_password' => null,
        'mail_from_domain' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'secure_smtp_server_host' => false,
		'secure_smtp_server_port' => false,
		'secure_smtp_username' => false,
		'secure_smtp_password' => false,
		'smtp_server_host' => false,
		'smtp_server_port' => false,
		'smtp_username' => false,
		'smtp_password' => false,
		'mail_from_domain' => true
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
        'secure_smtp_server_host' => 'secureSmtpServerHost',
        'secure_smtp_server_port' => 'secureSmtpServerPort',
        'secure_smtp_username' => 'secureSmtpUsername',
        'secure_smtp_password' => 'secureSmtpPassword',
        'smtp_server_host' => 'smtpServerHost',
        'smtp_server_port' => 'smtpServerPort',
        'smtp_username' => 'smtpUsername',
        'smtp_password' => 'smtpPassword',
        'mail_from_domain' => 'mailFromDomain'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'secure_smtp_server_host' => 'setSecureSmtpServerHost',
        'secure_smtp_server_port' => 'setSecureSmtpServerPort',
        'secure_smtp_username' => 'setSecureSmtpUsername',
        'secure_smtp_password' => 'setSecureSmtpPassword',
        'smtp_server_host' => 'setSmtpServerHost',
        'smtp_server_port' => 'setSmtpServerPort',
        'smtp_username' => 'setSmtpUsername',
        'smtp_password' => 'setSmtpPassword',
        'mail_from_domain' => 'setMailFromDomain'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'secure_smtp_server_host' => 'getSecureSmtpServerHost',
        'secure_smtp_server_port' => 'getSecureSmtpServerPort',
        'secure_smtp_username' => 'getSecureSmtpUsername',
        'secure_smtp_password' => 'getSecureSmtpPassword',
        'smtp_server_host' => 'getSmtpServerHost',
        'smtp_server_port' => 'getSmtpServerPort',
        'smtp_username' => 'getSmtpUsername',
        'smtp_password' => 'getSmtpPassword',
        'mail_from_domain' => 'getMailFromDomain'
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
        $this->setIfExists('secure_smtp_server_host', $data ?? [], null);
        $this->setIfExists('secure_smtp_server_port', $data ?? [], null);
        $this->setIfExists('secure_smtp_username', $data ?? [], null);
        $this->setIfExists('secure_smtp_password', $data ?? [], null);
        $this->setIfExists('smtp_server_host', $data ?? [], null);
        $this->setIfExists('smtp_server_port', $data ?? [], null);
        $this->setIfExists('smtp_username', $data ?? [], null);
        $this->setIfExists('smtp_password', $data ?? [], null);
        $this->setIfExists('mail_from_domain', $data ?? [], null);
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

        if ($this->container['secure_smtp_server_host'] === null) {
            $invalidProperties[] = "'secure_smtp_server_host' can't be null";
        }
        if ($this->container['secure_smtp_server_port'] === null) {
            $invalidProperties[] = "'secure_smtp_server_port' can't be null";
        }
        if ($this->container['secure_smtp_username'] === null) {
            $invalidProperties[] = "'secure_smtp_username' can't be null";
        }
        if ($this->container['secure_smtp_password'] === null) {
            $invalidProperties[] = "'secure_smtp_password' can't be null";
        }
        if ($this->container['smtp_server_host'] === null) {
            $invalidProperties[] = "'smtp_server_host' can't be null";
        }
        if ($this->container['smtp_server_port'] === null) {
            $invalidProperties[] = "'smtp_server_port' can't be null";
        }
        if ($this->container['smtp_username'] === null) {
            $invalidProperties[] = "'smtp_username' can't be null";
        }
        if ($this->container['smtp_password'] === null) {
            $invalidProperties[] = "'smtp_password' can't be null";
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
     * Gets secure_smtp_server_host
     *
     * @return string
     */
    public function getSecureSmtpServerHost()
    {
        return $this->container['secure_smtp_server_host'];
    }

    /**
     * Sets secure_smtp_server_host
     *
     * @param string $secure_smtp_server_host Secure TLS SMTP server host domain
     *
     * @return self
     */
    public function setSecureSmtpServerHost($secure_smtp_server_host)
    {

        if (is_null($secure_smtp_server_host)) {
            throw new \InvalidArgumentException('non-nullable secure_smtp_server_host cannot be null');
        }

        $this->container['secure_smtp_server_host'] = $secure_smtp_server_host;

        return $this;
    }

    /**
     * Gets secure_smtp_server_port
     *
     * @return int
     */
    public function getSecureSmtpServerPort()
    {
        return $this->container['secure_smtp_server_port'];
    }

    /**
     * Sets secure_smtp_server_port
     *
     * @param int $secure_smtp_server_port Secure TLS SMTP server host port
     *
     * @return self
     */
    public function setSecureSmtpServerPort($secure_smtp_server_port)
    {

        if (is_null($secure_smtp_server_port)) {
            throw new \InvalidArgumentException('non-nullable secure_smtp_server_port cannot be null');
        }

        $this->container['secure_smtp_server_port'] = $secure_smtp_server_port;

        return $this;
    }

    /**
     * Gets secure_smtp_username
     *
     * @return string
     */
    public function getSecureSmtpUsername()
    {
        return $this->container['secure_smtp_username'];
    }

    /**
     * Sets secure_smtp_username
     *
     * @param string $secure_smtp_username Secure TLS SMTP username for login
     *
     * @return self
     */
    public function setSecureSmtpUsername($secure_smtp_username)
    {

        if (is_null($secure_smtp_username)) {
            throw new \InvalidArgumentException('non-nullable secure_smtp_username cannot be null');
        }

        $this->container['secure_smtp_username'] = $secure_smtp_username;

        return $this;
    }

    /**
     * Gets secure_smtp_password
     *
     * @return string
     */
    public function getSecureSmtpPassword()
    {
        return $this->container['secure_smtp_password'];
    }

    /**
     * Sets secure_smtp_password
     *
     * @param string $secure_smtp_password Secure TLS SMTP password for login
     *
     * @return self
     */
    public function setSecureSmtpPassword($secure_smtp_password)
    {

        if (is_null($secure_smtp_password)) {
            throw new \InvalidArgumentException('non-nullable secure_smtp_password cannot be null');
        }

        $this->container['secure_smtp_password'] = $secure_smtp_password;

        return $this;
    }

    /**
     * Gets smtp_server_host
     *
     * @return string
     */
    public function getSmtpServerHost()
    {
        return $this->container['smtp_server_host'];
    }

    /**
     * Sets smtp_server_host
     *
     * @param string $smtp_server_host SMTP server host domain
     *
     * @return self
     */
    public function setSmtpServerHost($smtp_server_host)
    {

        if (is_null($smtp_server_host)) {
            throw new \InvalidArgumentException('non-nullable smtp_server_host cannot be null');
        }

        $this->container['smtp_server_host'] = $smtp_server_host;

        return $this;
    }

    /**
     * Gets smtp_server_port
     *
     * @return int
     */
    public function getSmtpServerPort()
    {
        return $this->container['smtp_server_port'];
    }

    /**
     * Sets smtp_server_port
     *
     * @param int $smtp_server_port SMTP server host port
     *
     * @return self
     */
    public function setSmtpServerPort($smtp_server_port)
    {

        if (is_null($smtp_server_port)) {
            throw new \InvalidArgumentException('non-nullable smtp_server_port cannot be null');
        }

        $this->container['smtp_server_port'] = $smtp_server_port;

        return $this;
    }

    /**
     * Gets smtp_username
     *
     * @return string
     */
    public function getSmtpUsername()
    {
        return $this->container['smtp_username'];
    }

    /**
     * Sets smtp_username
     *
     * @param string $smtp_username SMTP username for login
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
     * @return string
     */
    public function getSmtpPassword()
    {
        return $this->container['smtp_password'];
    }

    /**
     * Sets smtp_password
     *
     * @param string $smtp_password SMTP password for login
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
     * Gets mail_from_domain
     *
     * @return string|null
     */
    public function getMailFromDomain()
    {
        return $this->container['mail_from_domain'];
    }

    /**
     * Sets mail_from_domain
     *
     * @param string|null $mail_from_domain Mail from domain or SMTP HELO value
     *
     * @return self
     */
    public function setMailFromDomain($mail_from_domain)
    {

        if (is_null($mail_from_domain)) {
            array_push($this->openAPINullablesSetToNull, 'mail_from_domain');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mail_from_domain', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['mail_from_domain'] = $mail_from_domain;

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


