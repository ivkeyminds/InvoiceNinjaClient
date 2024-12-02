<?php
/**
 * VendorContact
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
 * VendorContact Class Doc Comment
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VendorContact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VendorContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'company_id' => 'string',
        'vendor_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone' => 'string',
        'custom_value1' => 'string',
        'custom_value2' => 'string',
        'custom_value3' => 'string',
        'custom_value4' => 'string',
        'email' => 'string',
        'is_primary' => 'bool',
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
        'vendor_id' => null,
        'first_name' => null,
        'last_name' => null,
        'phone' => null,
        'custom_value1' => null,
        'custom_value2' => null,
        'custom_value3' => null,
        'custom_value4' => null,
        'email' => null,
        'is_primary' => null,
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
        'id' => true,
        'user_id' => true,
        'company_id' => true,
        'vendor_id' => true,
        'first_name' => true,
        'last_name' => true,
        'phone' => true,
        'custom_value1' => true,
        'custom_value2' => true,
        'custom_value3' => true,
        'custom_value4' => true,
        'email' => true,
        'is_primary' => true,
        'created_at' => true,
        'updated_at' => true,
        'deleted_at' => true
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
        'vendor_id' => 'vendor_id',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'phone' => 'phone',
        'custom_value1' => 'custom_value1',
        'custom_value2' => 'custom_value2',
        'custom_value3' => 'custom_value3',
        'custom_value4' => 'custom_value4',
        'email' => 'email',
        'is_primary' => 'is_primary',
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
        'vendor_id' => 'setVendorId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'phone' => 'setPhone',
        'custom_value1' => 'setCustomValue1',
        'custom_value2' => 'setCustomValue2',
        'custom_value3' => 'setCustomValue3',
        'custom_value4' => 'setCustomValue4',
        'email' => 'setEmail',
        'is_primary' => 'setIsPrimary',
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
        'vendor_id' => 'getVendorId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'phone' => 'getPhone',
        'custom_value1' => 'getCustomValue1',
        'custom_value2' => 'getCustomValue2',
        'custom_value3' => 'getCustomValue3',
        'custom_value4' => 'getCustomValue4',
        'email' => 'getEmail',
        'is_primary' => 'getIsPrimary',
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
        $this->setIfExists('vendor_id', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('custom_value1', $data ?? [], null);
        $this->setIfExists('custom_value2', $data ?? [], null);
        $this->setIfExists('custom_value3', $data ?? [], null);
        $this->setIfExists('custom_value4', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('is_primary', $data ?? [], null);
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
     * @param string|null $id The hashed id of the vendor contact
     *
     * @return self
     */
    public function setId($id)
    {
        
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
     * @param string|null $user_id The hashed id of the user id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        
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
        
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets vendor_id
     *
     * @return string|null
     */
    public function getVendorId()
    {
        return $this->container['vendor_id'];
    }

    /**
     * Sets vendor_id
     *
     * @param string|null $vendor_id The hashed id of the vendor
     *
     * @return self
     */
    public function setVendorId($vendor_id)
    {
        
        $this->container['vendor_id'] = $vendor_id;

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
     * @param string|null $phone The contacts phone number
     *
     * @return self
     */
    public function setPhone($phone)
    {
        
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
     * @param string|null $custom_value1 A custom value
     *
     * @return self
     */
    public function setCustomValue1($custom_value1)
    {
        
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
     * @param string|null $custom_value2 A custom value
     *
     * @return self
     */
    public function setCustomValue2($custom_value2)
    {
        
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
     * @param string|null $custom_value3 A custom value
     *
     * @return self
     */
    public function setCustomValue3($custom_value3)
    {
        
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
     * @param string|null $custom_value4 A custom value
     *
     * @return self
     */
    public function setCustomValue4($custom_value4)
    {
        
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
     * @param string|null $email The contact email address
     *
     * @return self
     */
    public function setEmail($email)
    {
        
        $this->container['email'] = $email;

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
     * @param bool|null $is_primary Boolean flag determining if the contact is the primary contact for the vendor
     *
     * @return self
     */
    public function setIsPrimary($is_primary)
    {
        
        $this->container['is_primary'] = $is_primary;

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


