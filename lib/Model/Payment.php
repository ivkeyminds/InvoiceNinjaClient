<?php
/**
 * Payment
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
 * Payment Class Doc Comment
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Payment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'client_id' => 'string',
        'invitation_id' => 'string',
        'client_contact_id' => 'string',
        'user_id' => 'string',
        'type_id' => 'string',
        'date' => 'string',
        'transaction_reference' => 'string',
        'assigned_user_id' => 'string',
        'private_notes' => 'string',
        'is_manual' => 'bool',
        'is_deleted' => 'bool',
        'amount' => 'float',
        'refunded' => 'float',
        'updated_at' => 'float',
        'archived_at' => 'float',
        'company_gateway_id' => 'string',
        'paymentables' => '\IvkeyMinds\InvoiceNinjaClient\Model\Paymentable',
        'invoices' => '\IvkeyMinds\InvoiceNinjaClient\Model\InvoicePaymentable[]',
        'credits' => '\IvkeyMinds\InvoiceNinjaClient\Model\CreditPaymentable[]'
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
        'client_id' => null,
        'invitation_id' => null,
        'client_contact_id' => null,
        'user_id' => null,
        'type_id' => null,
        'date' => null,
        'transaction_reference' => null,
        'assigned_user_id' => null,
        'private_notes' => null,
        'is_manual' => null,
        'is_deleted' => null,
        'amount' => null,
        'refunded' => null,
        'updated_at' => 'integer',
        'archived_at' => 'integer',
        'company_gateway_id' => null,
        'paymentables' => null,
        'invoices' => null,
        'credits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id' => true,
        'client_id' => true,
        'invitation_id' => true,
        'client_contact_id' => true,
        'user_id' => true,
        'type_id' => true,
        'date' => true,
        'transaction_reference' => true,
        'assigned_user_id' => true,
        'private_notes' => true,
        'is_manual' => true,
        'is_deleted' => true,
        'amount' => true,
        'refunded' => true,
        'updated_at' => true,
        'archived_at' => true,
        'company_gateway_id' => true,
        'paymentables' => true,
        'invoices' => true,
        'credits' => true
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
        'client_id' => 'client_id',
        'invitation_id' => 'invitation_id',
        'client_contact_id' => 'client_contact_id',
        'user_id' => 'user_id',
        'type_id' => 'type_id',
        'date' => 'date',
        'transaction_reference' => 'transaction_reference',
        'assigned_user_id' => 'assigned_user_id',
        'private_notes' => 'private_notes',
        'is_manual' => 'is_manual',
        'is_deleted' => 'is_deleted',
        'amount' => 'amount',
        'refunded' => 'refunded',
        'updated_at' => 'updated_at',
        'archived_at' => 'archived_at',
        'company_gateway_id' => 'company_gateway_id',
        'paymentables' => 'paymentables',
        'invoices' => 'invoices',
        'credits' => 'credits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'client_id' => 'setClientId',
        'invitation_id' => 'setInvitationId',
        'client_contact_id' => 'setClientContactId',
        'user_id' => 'setUserId',
        'type_id' => 'setTypeId',
        'date' => 'setDate',
        'transaction_reference' => 'setTransactionReference',
        'assigned_user_id' => 'setAssignedUserId',
        'private_notes' => 'setPrivateNotes',
        'is_manual' => 'setIsManual',
        'is_deleted' => 'setIsDeleted',
        'amount' => 'setAmount',
        'refunded' => 'setRefunded',
        'updated_at' => 'setUpdatedAt',
        'archived_at' => 'setArchivedAt',
        'company_gateway_id' => 'setCompanyGatewayId',
        'paymentables' => 'setPaymentables',
        'invoices' => 'setInvoices',
        'credits' => 'setCredits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'client_id' => 'getClientId',
        'invitation_id' => 'getInvitationId',
        'client_contact_id' => 'getClientContactId',
        'user_id' => 'getUserId',
        'type_id' => 'getTypeId',
        'date' => 'getDate',
        'transaction_reference' => 'getTransactionReference',
        'assigned_user_id' => 'getAssignedUserId',
        'private_notes' => 'getPrivateNotes',
        'is_manual' => 'getIsManual',
        'is_deleted' => 'getIsDeleted',
        'amount' => 'getAmount',
        'refunded' => 'getRefunded',
        'updated_at' => 'getUpdatedAt',
        'archived_at' => 'getArchivedAt',
        'company_gateway_id' => 'getCompanyGatewayId',
        'paymentables' => 'getPaymentables',
        'invoices' => 'getInvoices',
        'credits' => 'getCredits'
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
        $this->setIfExists('client_id', $data ?? [], null);
        $this->setIfExists('invitation_id', $data ?? [], null);
        $this->setIfExists('client_contact_id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('transaction_reference', $data ?? [], null);
        $this->setIfExists('assigned_user_id', $data ?? [], null);
        $this->setIfExists('private_notes', $data ?? [], null);
        $this->setIfExists('is_manual', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('refunded', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('archived_at', $data ?? [], null);
        $this->setIfExists('company_gateway_id', $data ?? [], null);
        $this->setIfExists('paymentables', $data ?? [], null);
        $this->setIfExists('invoices', $data ?? [], null);
        $this->setIfExists('credits', $data ?? [], null);
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
     * @param string|null $id The payment hashed id
     *
     * @return self
     */
    public function setId($id)
    {
        
        $this->container['id'] = $id;

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
     * @param string|null $client_id The client hashed id
     *
     * @return self
     */
    public function setClientId($client_id)
    {
        
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets invitation_id
     *
     * @return string|null
     */
    public function getInvitationId()
    {
        return $this->container['invitation_id'];
    }

    /**
     * Sets invitation_id
     *
     * @param string|null $invitation_id The invitation hashed id
     *
     * @return self
     */
    public function setInvitationId($invitation_id)
    {
        
        $this->container['invitation_id'] = $invitation_id;

        return $this;
    }

    /**
     * Gets client_contact_id
     *
     * @return string|null
     */
    public function getClientContactId()
    {
        return $this->container['client_contact_id'];
    }

    /**
     * Sets client_contact_id
     *
     * @param string|null $client_contact_id The client contact hashed id
     *
     * @return self
     */
    public function setClientContactId($client_contact_id)
    {
        
        $this->container['client_contact_id'] = $client_contact_id;

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
     * @param string|null $user_id The user hashed id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return string|null
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param string|null $type_id The Payment Type ID
     *
     * @return self
     */
    public function setTypeId($type_id)
    {
        
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string|null $date The Payment date
     *
     * @return self
     */
    public function setDate($date)
    {
        
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets transaction_reference
     *
     * @return string|null
     */
    public function getTransactionReference()
    {
        return $this->container['transaction_reference'];
    }

    /**
     * Sets transaction_reference
     *
     * @param string|null $transaction_reference The transaction reference as defined by the payment gateway
     *
     * @return self
     */
    public function setTransactionReference($transaction_reference)
    {
        
        $this->container['transaction_reference'] = $transaction_reference;

        return $this;
    }

    /**
     * Gets assigned_user_id
     *
     * @return string|null
     */
    public function getAssignedUserId()
    {
        return $this->container['assigned_user_id'];
    }

    /**
     * Sets assigned_user_id
     *
     * @param string|null $assigned_user_id The assigned user hashed id
     *
     * @return self
     */
    public function setAssignedUserId($assigned_user_id)
    {
        
        $this->container['assigned_user_id'] = $assigned_user_id;

        return $this;
    }

    /**
     * Gets private_notes
     *
     * @return string|null
     */
    public function getPrivateNotes()
    {
        return $this->container['private_notes'];
    }

    /**
     * Sets private_notes
     *
     * @param string|null $private_notes The private notes of the payment
     *
     * @return self
     */
    public function setPrivateNotes($private_notes)
    {
        
        $this->container['private_notes'] = $private_notes;

        return $this;
    }

    /**
     * Gets is_manual
     *
     * @return bool|null
     */
    public function getIsManual()
    {
        return $this->container['is_manual'];
    }

    /**
     * Sets is_manual
     *
     * @param bool|null $is_manual Flags whether the payment was made manually or processed via a gateway
     *
     * @return self
     */
    public function setIsManual($is_manual)
    {
        
        $this->container['is_manual'] = $is_manual;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool|null $is_deleted Defines if the payment has been deleted
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {
        
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The amount of this payment
     *
     * @return self
     */
    public function setAmount($amount)
    {
        
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets refunded
     *
     * @return float|null
     */
    public function getRefunded()
    {
        return $this->container['refunded'];
    }

    /**
     * Sets refunded
     *
     * @param float|null $refunded The refunded amount of this payment
     *
     * @return self
     */
    public function setRefunded($refunded)
    {
        
        $this->container['refunded'] = $refunded;

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
     * Gets archived_at
     *
     * @return float|null
     */
    public function getArchivedAt()
    {
        return $this->container['archived_at'];
    }

    /**
     * Sets archived_at
     *
     * @param float|null $archived_at Timestamp
     *
     * @return self
     */
    public function setArchivedAt($archived_at)
    {
        
        $this->container['archived_at'] = $archived_at;

        return $this;
    }

    /**
     * Gets company_gateway_id
     *
     * @return string|null
     */
    public function getCompanyGatewayId()
    {
        return $this->container['company_gateway_id'];
    }

    /**
     * Sets company_gateway_id
     *
     * @param string|null $company_gateway_id The company gateway id
     *
     * @return self
     */
    public function setCompanyGatewayId($company_gateway_id)
    {
        
        $this->container['company_gateway_id'] = $company_gateway_id;

        return $this;
    }

    /**
     * Gets paymentables
     *
     * @return \IvkeyMinds\InvoiceNinjaClient\Model\Paymentable|null
     */
    public function getPaymentables()
    {
        return $this->container['paymentables'];
    }

    /**
     * Sets paymentables
     *
     * @param \IvkeyMinds\InvoiceNinjaClient\Model\Paymentable|null $paymentables paymentables
     *
     * @return self
     */
    public function setPaymentables($paymentables)
    {
        
        $this->container['paymentables'] = $paymentables;

        return $this;
    }

    /**
     * Gets invoices
     *
     * @return \IvkeyMinds\InvoiceNinjaClient\Model\InvoicePaymentable[]|null
     */
    public function getInvoices()
    {
        return $this->container['invoices'];
    }

    /**
     * Sets invoices
     *
     * @param \IvkeyMinds\InvoiceNinjaClient\Model\InvoicePaymentable[]|null $invoices 
     *
     * @return self
     */
    public function setInvoices($invoices)
    {
        
        $this->container['invoices'] = $invoices;

        return $this;
    }

    /**
     * Gets credits
     *
     * @return \IvkeyMinds\InvoiceNinjaClient\Model\CreditPaymentable[]|null
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param \IvkeyMinds\InvoiceNinjaClient\Model\CreditPaymentable[]|null $credits 
     *
     * @return self
     */
    public function setCredits($credits)
    {
        
        $this->container['credits'] = $credits;

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


