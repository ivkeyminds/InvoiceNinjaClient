<?php
/**
 * CompanyGateway
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
 * CompanyGateway Class Doc Comment
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CompanyGateway implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompanyGateway';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'company_id' => 'string',
        'gateway_key' => 'string',
        'accepted_credit_cards' => 'int',
        'require_billing_address' => 'bool',
        'require_shipping_address' => 'bool',
        'config' => 'string',
        'update_details' => 'bool',
        'fees_and_limits' => '\IvkeyMinds\InvoiceNinjaClient\Model\FeesAndLimits[]'
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
        'company_id' => null,
        'gateway_key' => null,
        'accepted_credit_cards' => null,
        'require_billing_address' => null,
        'require_shipping_address' => null,
        'config' => null,
        'update_details' => null,
        'fees_and_limits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id' => true,
        'company_id' => true,
        'gateway_key' => true,
        'accepted_credit_cards' => true,
        'require_billing_address' => true,
        'require_shipping_address' => true,
        'config' => true,
        'update_details' => true,
        'fees_and_limits' => true
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
        'company_id' => 'company_id',
        'gateway_key' => 'gateway_key',
        'accepted_credit_cards' => 'accepted_credit_cards',
        'require_billing_address' => 'require_billing_address',
        'require_shipping_address' => 'require_shipping_address',
        'config' => 'config',
        'update_details' => 'update_details',
        'fees_and_limits' => 'fees_and_limits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'gateway_key' => 'setGatewayKey',
        'accepted_credit_cards' => 'setAcceptedCreditCards',
        'require_billing_address' => 'setRequireBillingAddress',
        'require_shipping_address' => 'setRequireShippingAddress',
        'config' => 'setConfig',
        'update_details' => 'setUpdateDetails',
        'fees_and_limits' => 'setFeesAndLimits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'gateway_key' => 'getGatewayKey',
        'accepted_credit_cards' => 'getAcceptedCreditCards',
        'require_billing_address' => 'getRequireBillingAddress',
        'require_shipping_address' => 'getRequireShippingAddress',
        'config' => 'getConfig',
        'update_details' => 'getUpdateDetails',
        'fees_and_limits' => 'getFeesAndLimits'
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
        $this->setIfExists('company_id', $data ?? [], null);
        $this->setIfExists('gateway_key', $data ?? [], null);
        $this->setIfExists('accepted_credit_cards', $data ?? [], null);
        $this->setIfExists('require_billing_address', $data ?? [], null);
        $this->setIfExists('require_shipping_address', $data ?? [], null);
        $this->setIfExists('config', $data ?? [], null);
        $this->setIfExists('update_details', $data ?? [], null);
        $this->setIfExists('fees_and_limits', $data ?? [], null);
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
     * @param string|null $id The hashed id of the company gateway
     *
     * @return self
     */
    public function setId($id)
    {
        
        $this->container['id'] = $id;

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
     * @param string|null $company_id The company hashed id
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets gateway_key
     *
     * @return string|null
     */
    public function getGatewayKey()
    {
        return $this->container['gateway_key'];
    }

    /**
     * Sets gateway_key
     *
     * @param string|null $gateway_key The gateway key (hash)
     *
     * @return self
     */
    public function setGatewayKey($gateway_key)
    {
        
        $this->container['gateway_key'] = $gateway_key;

        return $this;
    }

    /**
     * Gets accepted_credit_cards
     *
     * @return int|null
     */
    public function getAcceptedCreditCards()
    {
        return $this->container['accepted_credit_cards'];
    }

    /**
     * Sets accepted_credit_cards
     *
     * @param int|null $accepted_credit_cards Bitmask representation of cards
     *
     * @return self
     */
    public function setAcceptedCreditCards($accepted_credit_cards)
    {
        
        $this->container['accepted_credit_cards'] = $accepted_credit_cards;

        return $this;
    }

    /**
     * Gets require_billing_address
     *
     * @return bool|null
     */
    public function getRequireBillingAddress()
    {
        return $this->container['require_billing_address'];
    }

    /**
     * Sets require_billing_address
     *
     * @param bool|null $require_billing_address Determines if the the billing address is required prior to payment.
     *
     * @return self
     */
    public function setRequireBillingAddress($require_billing_address)
    {
        
        $this->container['require_billing_address'] = $require_billing_address;

        return $this;
    }

    /**
     * Gets require_shipping_address
     *
     * @return bool|null
     */
    public function getRequireShippingAddress()
    {
        return $this->container['require_shipping_address'];
    }

    /**
     * Sets require_shipping_address
     *
     * @param bool|null $require_shipping_address Determines if the the billing address is required prior to payment.
     *
     * @return self
     */
    public function setRequireShippingAddress($require_shipping_address)
    {
        
        $this->container['require_shipping_address'] = $require_shipping_address;

        return $this;
    }

    /**
     * Gets config
     *
     * @return string|null
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param string|null $config The configuration map for the gateway
     *
     * @return self
     */
    public function setConfig($config)
    {
        
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets update_details
     *
     * @return bool|null
     */
    public function getUpdateDetails()
    {
        return $this->container['update_details'];
    }

    /**
     * Sets update_details
     *
     * @param bool|null $update_details Determines if the client details should be updated.
     *
     * @return self
     */
    public function setUpdateDetails($update_details)
    {
        
        $this->container['update_details'] = $update_details;

        return $this;
    }

    /**
     * Gets fees_and_limits
     *
     * @return \IvkeyMinds\InvoiceNinjaClient\Model\FeesAndLimits[]|null
     */
    public function getFeesAndLimits()
    {
        return $this->container['fees_and_limits'];
    }

    /**
     * Sets fees_and_limits
     *
     * @param \IvkeyMinds\InvoiceNinjaClient\Model\FeesAndLimits[]|null $fees_and_limits A mapped collection of the fees and limits for the configured gateway
     *
     * @return self
     */
    public function setFeesAndLimits($fees_and_limits)
    {
        
        $this->container['fees_and_limits'] = $fees_and_limits;

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


