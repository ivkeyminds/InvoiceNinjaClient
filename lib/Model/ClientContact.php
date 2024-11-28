<?php
/**
 * ClientContact
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Invoice Ninja
 *
 * Invoice Ninja. Open Source Invoicing lives here.
 *
 * The version of the OpenAPI document: 5.5.58
 * Contact: contact@invoiceninja.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace IvkeyMinds\InvoiceNinjaClient\Model;

use \ArrayAccess;
use \IvkeyMinds\InvoiceNinjaClient\ObjectSerializer;

/**
 * ClientContact Class Doc Comment
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClientContact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClientContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'company_id' => 'string',
        'client_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone' => 'string',
        'custom_value1' => 'string',
        'custom_value2' => 'string',
        'custom_value3' => 'string',
        'custom_value4' => 'string',
        'email' => 'string',
        'accepted_terms_version' => 'string',
        'password' => 'string',
        'confirmation_code' => 'string',
        'token' => 'string',
        'is_primary' => 'bool',
        'confirmed' => 'bool',
        'is_locked' => 'bool',
        'send_email' => 'bool',
        'failed_logins' => 'float',
        'email_verified_at' => 'float',
        'last_login' => 'float',
        'created_at' => 'float',
        'updated_at' => 'float',
        'deleted_at' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'user_id' => null,
        'company_id' => null,
        'client_id' => null,
        'first_name' => null,
        'last_name' => null,
        'phone' => null,
        'custom_value1' => null,
        'custom_value2' => null,
        'custom_value3' => null,
        'custom_value4' => null,
        'email' => null,
        'accepted_terms_version' => null,
        'password' => null,
        'confirmation_code' => null,
        'token' => null,
        'is_primary' => null,
        'confirmed' => null,
        'is_locked' => null,
        'send_email' => null,
        'failed_logins' => 'integer',
        'email_verified_at' => 'integer',
        'last_login' => 'integer',
        'created_at' => 'integer',
        'updated_at' => 'integer',
        'deleted_at' => 'integer'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id' => false,
        'user_id' => false,
        'company_id' => false,
        'client_id' => false,
        'first_name' => false,
        'last_name' => false,
        'phone' => false,
        'custom_value1' => false,
        'custom_value2' => false,
        'custom_value3' => false,
        'custom_value4' => false,
        'email' => false,
        'accepted_terms_version' => false,
        'password' => false,
        'confirmation_code' => false,
        'token' => false,
        'is_primary' => false,
        'confirmed' => false,
        'is_locked' => false,
        'send_email' => false,
        'failed_logins' => false,
        'email_verified_at' => false,
        'last_login' => false,
        'created_at' => false,
        'updated_at' => false,
        'deleted_at' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'id' => 'id',
        'user_id' => 'user_id',
        'company_id' => 'company_id',
        'client_id' => 'client_id',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'phone' => 'phone',
        'custom_value1' => 'custom_value1',
        'custom_value2' => 'custom_value2',
        'custom_value3' => 'custom_value3',
        'custom_value4' => 'custom_value4',
        'email' => 'email',
        'accepted_terms_version' => 'accepted_terms_version',
        'password' => 'password',
        'confirmation_code' => 'confirmation-code',
        'token' => 'token',
        'is_primary' => 'is_primary',
        'confirmed' => 'confirmed',
        'is_locked' => 'is_locked',
        'send_email' => 'send_email',
        'failed_logins' => 'failed_logins',
        'email_verified_at' => 'email_verified_at',
        'last_login' => 'last_login',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'company_id' => 'setCompanyId',
        'client_id' => 'setClientId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'phone' => 'setPhone',
        'custom_value1' => 'setCustomValue1',
        'custom_value2' => 'setCustomValue2',
        'custom_value3' => 'setCustomValue3',
        'custom_value4' => 'setCustomValue4',
        'email' => 'setEmail',
        'accepted_terms_version' => 'setAcceptedTermsVersion',
        'password' => 'setPassword',
        'confirmation_code' => 'setConfirmationCode',
        'token' => 'setToken',
        'is_primary' => 'setIsPrimary',
        'confirmed' => 'setConfirmed',
        'is_locked' => 'setIsLocked',
        'send_email' => 'setSendEmail',
        'failed_logins' => 'setFailedLogins',
        'email_verified_at' => 'setEmailVerifiedAt',
        'last_login' => 'setLastLogin',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'deleted_at' => 'setDeletedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'company_id' => 'getCompanyId',
        'client_id' => 'getClientId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'phone' => 'getPhone',
        'custom_value1' => 'getCustomValue1',
        'custom_value2' => 'getCustomValue2',
        'custom_value3' => 'getCustomValue3',
        'custom_value4' => 'getCustomValue4',
        'email' => 'getEmail',
        'accepted_terms_version' => 'getAcceptedTermsVersion',
        'password' => 'getPassword',
        'confirmation_code' => 'getConfirmationCode',
        'token' => 'getToken',
        'is_primary' => 'getIsPrimary',
        'confirmed' => 'getConfirmed',
        'is_locked' => 'getIsLocked',
        'send_email' => 'getSendEmail',
        'failed_logins' => 'getFailedLogins',
        'email_verified_at' => 'getEmailVerifiedAt',
        'last_login' => 'getLastLogin',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'deleted_at' => 'getDeletedAt'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('company_id', $data ?? [], null);
        $this->setIfExists('client_id', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('custom_value1', $data ?? [], null);
        $this->setIfExists('custom_value2', $data ?? [], null);
        $this->setIfExists('custom_value3', $data ?? [], null);
        $this->setIfExists('custom_value4', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('accepted_terms_version', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('confirmation_code', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('is_primary', $data ?? [], null);
        $this->setIfExists('confirmed', $data ?? [], null);
        $this->setIfExists('is_locked', $data ?? [], null);
        $this->setIfExists('send_email', $data ?? [], null);
        $this->setIfExists('failed_logins', $data ?? [], null);
        $this->setIfExists('email_verified_at', $data ?? [], null);
        $this->setIfExists('last_login', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The hashed if of the contact
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
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id The hashed id of the user who created the contact
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string|null $company_id The hashed id of the company
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        if (is_null($company_id)) {
            throw new \InvalidArgumentException('non-nullable company_id cannot be null');
        }
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string|null $client_id The hashed id of the client
     *
     * @return self
     */
    public function setClientId($client_id)
    {
        if (is_null($client_id)) {
            throw new \InvalidArgumentException('non-nullable client_id cannot be null');
        }
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name The first name of the contact
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name The last name of the contact
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The phone number of the contact
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets custom_value1
     *
     * @return string|null
     */
    public function getCustomValue1()
    {
        return $this->container['custom_value1'];
    }

    /**
     * Sets custom_value1
     *
     * @param string|null $custom_value1 A Custom field value
     *
     * @return self
     */
    public function setCustomValue1($custom_value1)
    {
        if (is_null($custom_value1)) {
            throw new \InvalidArgumentException('non-nullable custom_value1 cannot be null');
        }
        $this->container['custom_value1'] = $custom_value1;

        return $this;
    }

    /**
     * Gets custom_value2
     *
     * @return string|null
     */
    public function getCustomValue2()
    {
        return $this->container['custom_value2'];
    }

    /**
     * Sets custom_value2
     *
     * @param string|null $custom_value2 A Custom field value
     *
     * @return self
     */
    public function setCustomValue2($custom_value2)
    {
        if (is_null($custom_value2)) {
            throw new \InvalidArgumentException('non-nullable custom_value2 cannot be null');
        }
        $this->container['custom_value2'] = $custom_value2;

        return $this;
    }

    /**
     * Gets custom_value3
     *
     * @return string|null
     */
    public function getCustomValue3()
    {
        return $this->container['custom_value3'];
    }

    /**
     * Sets custom_value3
     *
     * @param string|null $custom_value3 A Custom field value
     *
     * @return self
     */
    public function setCustomValue3($custom_value3)
    {
        if (is_null($custom_value3)) {
            throw new \InvalidArgumentException('non-nullable custom_value3 cannot be null');
        }
        $this->container['custom_value3'] = $custom_value3;

        return $this;
    }

    /**
     * Gets custom_value4
     *
     * @return string|null
     */
    public function getCustomValue4()
    {
        return $this->container['custom_value4'];
    }

    /**
     * Sets custom_value4
     *
     * @param string|null $custom_value4 A Custom field value
     *
     * @return self
     */
    public function setCustomValue4($custom_value4)
    {
        if (is_null($custom_value4)) {
            throw new \InvalidArgumentException('non-nullable custom_value4 cannot be null');
        }
        $this->container['custom_value4'] = $custom_value4;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The email of the contact
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets accepted_terms_version
     *
     * @return string|null
     */
    public function getAcceptedTermsVersion()
    {
        return $this->container['accepted_terms_version'];
    }

    /**
     * Sets accepted_terms_version
     *
     * @param string|null $accepted_terms_version The terms of service which the contact has accpeted
     *
     * @return self
     */
    public function setAcceptedTermsVersion($accepted_terms_version)
    {
        if (is_null($accepted_terms_version)) {
            throw new \InvalidArgumentException('non-nullable accepted_terms_version cannot be null');
        }
        $this->container['accepted_terms_version'] = $accepted_terms_version;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password The hashed password of the contact
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets confirmation_code
     *
     * @return string|null
     */
    public function getConfirmationCode()
    {
        return $this->container['confirmation_code'];
    }

    /**
     * Sets confirmation_code
     *
     * @param string|null $confirmation_code The confirmation code used to authenticate the contacts email address
     *
     * @return self
     */
    public function setConfirmationCode($confirmation_code)
    {
        if (is_null($confirmation_code)) {
            throw new \InvalidArgumentException('non-nullable confirmation_code cannot be null');
        }
        $this->container['confirmation_code'] = $confirmation_code;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token A uuid based token.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets is_primary
     *
     * @return bool|null
     */
    public function getIsPrimary()
    {
        return $this->container['is_primary'];
    }

    /**
     * Sets is_primary
     *
     * @param bool|null $is_primary Defines is this contact is the primary contact for the client
     *
     * @return self
     */
    public function setIsPrimary($is_primary)
    {
        if (is_null($is_primary)) {
            throw new \InvalidArgumentException('non-nullable is_primary cannot be null');
        }
        $this->container['is_primary'] = $is_primary;

        return $this;
    }

    /**
     * Gets confirmed
     *
     * @return bool|null
     */
    public function getConfirmed()
    {
        return $this->container['confirmed'];
    }

    /**
     * Sets confirmed
     *
     * @param bool|null $confirmed Boolean value confirms the user has confirmed their account.
     *
     * @return self
     */
    public function setConfirmed($confirmed)
    {
        if (is_null($confirmed)) {
            throw new \InvalidArgumentException('non-nullable confirmed cannot be null');
        }
        $this->container['confirmed'] = $confirmed;

        return $this;
    }

    /**
     * Gets is_locked
     *
     * @return bool|null
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     * @param bool|null $is_locked Boolean value defines if the contact has been locked out.
     *
     * @return self
     */
    public function setIsLocked($is_locked)
    {
        if (is_null($is_locked)) {
            throw new \InvalidArgumentException('non-nullable is_locked cannot be null');
        }
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets send_email
     *
     * @return bool|null
     */
    public function getSendEmail()
    {
        return $this->container['send_email'];
    }

    /**
     * Sets send_email
     *
     * @param bool|null $send_email Boolean value determines is this contact should receive emails
     *
     * @return self
     */
    public function setSendEmail($send_email)
    {
        if (is_null($send_email)) {
            throw new \InvalidArgumentException('non-nullable send_email cannot be null');
        }
        $this->container['send_email'] = $send_email;

        return $this;
    }

    /**
     * Gets failed_logins
     *
     * @return float|null
     */
    public function getFailedLogins()
    {
        return $this->container['failed_logins'];
    }

    /**
     * Sets failed_logins
     *
     * @param float|null $failed_logins The number of failed logins the contact has had
     *
     * @return self
     */
    public function setFailedLogins($failed_logins)
    {
        if (is_null($failed_logins)) {
            throw new \InvalidArgumentException('non-nullable failed_logins cannot be null');
        }
        $this->container['failed_logins'] = $failed_logins;

        return $this;
    }

    /**
     * Gets email_verified_at
     *
     * @return float|null
     */
    public function getEmailVerifiedAt()
    {
        return $this->container['email_verified_at'];
    }

    /**
     * Sets email_verified_at
     *
     * @param float|null $email_verified_at The date which the contact confirmed their email
     *
     * @return self
     */
    public function setEmailVerifiedAt($email_verified_at)
    {
        if (is_null($email_verified_at)) {
            throw new \InvalidArgumentException('non-nullable email_verified_at cannot be null');
        }
        $this->container['email_verified_at'] = $email_verified_at;

        return $this;
    }

    /**
     * Gets last_login
     *
     * @return float|null
     */
    public function getLastLogin()
    {
        return $this->container['last_login'];
    }

    /**
     * Sets last_login
     *
     * @param float|null $last_login Timestamp
     *
     * @return self
     */
    public function setLastLogin($last_login)
    {
        if (is_null($last_login)) {
            throw new \InvalidArgumentException('non-nullable last_login cannot be null');
        }
        $this->container['last_login'] = $last_login;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return float|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param float|null $created_at Timestamp
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
     * Gets updated_at
     *
     * @return float|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param float|null $updated_at Timestamp
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return float|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param float|null $deleted_at Timestamp
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        if (is_null($deleted_at)) {
            throw new \InvalidArgumentException('non-nullable deleted_at cannot be null');
        }
        $this->container['deleted_at'] = $deleted_at;

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


