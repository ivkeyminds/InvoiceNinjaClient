<?php
/**
 * Expense
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
 * Expense Class Doc Comment
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Expense implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Expense';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'assigned_user_id' => 'string',
        'company_id' => 'string',
        'client_id' => 'string',
        'invoice_id' => 'string',
        'bank_id' => 'string',
        'invoice_currency_id' => 'string',
        'expense_currency_id' => 'string',
        'invoice_category_id' => 'string',
        'payment_type_id' => 'string',
        'recurring_expense_id' => 'string',
        'private_notes' => 'string',
        'public_notes' => 'string',
        'transaction_reference' => 'string',
        'transcation_id' => 'string',
        'custom_value1' => 'string',
        'custom_value2' => 'string',
        'custom_value3' => 'string',
        'custom_value4' => 'string',
        'tax_name1' => 'string',
        'tax_name2' => 'string',
        'tax_rate1' => 'float',
        'tax_rate2' => 'float',
        'tax_name3' => 'string',
        'tax_rate3' => 'float',
        'amount' => 'float',
        'foreign_amount' => 'float',
        'exchange_rate' => 'float',
        'date' => 'string',
        'payment_date' => 'string',
        'should_be_invoiced' => 'bool',
        'is_deleted' => 'bool',
        'invoice_documents' => 'bool',
        'updated_at' => 'float',
        'archived_at' => 'float'
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
        'assigned_user_id' => null,
        'company_id' => null,
        'client_id' => null,
        'invoice_id' => null,
        'bank_id' => null,
        'invoice_currency_id' => null,
        'expense_currency_id' => null,
        'invoice_category_id' => null,
        'payment_type_id' => null,
        'recurring_expense_id' => null,
        'private_notes' => null,
        'public_notes' => null,
        'transaction_reference' => null,
        'transcation_id' => null,
        'custom_value1' => null,
        'custom_value2' => null,
        'custom_value3' => null,
        'custom_value4' => null,
        'tax_name1' => null,
        'tax_name2' => null,
        'tax_rate1' => 'float',
        'tax_rate2' => 'float',
        'tax_name3' => null,
        'tax_rate3' => 'float',
        'amount' => 'float',
        'foreign_amount' => 'float',
        'exchange_rate' => 'float',
        'date' => null,
        'payment_date' => null,
        'should_be_invoiced' => null,
        'is_deleted' => null,
        'invoice_documents' => null,
        'updated_at' => 'integer',
        'archived_at' => 'integer'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id' => true,
        'user_id' => true,
        'assigned_user_id' => true,
        'company_id' => true,
        'client_id' => true,
        'invoice_id' => true,
        'bank_id' => true,
        'invoice_currency_id' => true,
        'expense_currency_id' => true,
        'invoice_category_id' => true,
        'payment_type_id' => true,
        'recurring_expense_id' => true,
        'private_notes' => true,
        'public_notes' => true,
        'transaction_reference' => true,
        'transcation_id' => true,
        'custom_value1' => true,
        'custom_value2' => true,
        'custom_value3' => true,
        'custom_value4' => true,
        'tax_name1' => true,
        'tax_name2' => true,
        'tax_rate1' => true,
        'tax_rate2' => true,
        'tax_name3' => true,
        'tax_rate3' => true,
        'amount' => true,
        'foreign_amount' => true,
        'exchange_rate' => true,
        'date' => true,
        'payment_date' => true,
        'should_be_invoiced' => true,
        'is_deleted' => true,
        'invoice_documents' => true,
        'updated_at' => true,
        'archived_at' => true
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
        'assigned_user_id' => 'assigned_user_id',
        'company_id' => 'company_id',
        'client_id' => 'client_id',
        'invoice_id' => 'invoice_id',
        'bank_id' => 'bank_id',
        'invoice_currency_id' => 'invoice_currency_id',
        'expense_currency_id' => 'expense_currency_id',
        'invoice_category_id' => 'invoice_category_id',
        'payment_type_id' => 'payment_type_id',
        'recurring_expense_id' => 'recurring_expense_id',
        'private_notes' => 'private_notes',
        'public_notes' => 'public_notes',
        'transaction_reference' => 'transaction_reference',
        'transcation_id' => 'transcation_id',
        'custom_value1' => 'custom_value1',
        'custom_value2' => 'custom_value2',
        'custom_value3' => 'custom_value3',
        'custom_value4' => 'custom_value4',
        'tax_name1' => 'tax_name1',
        'tax_name2' => 'tax_name2',
        'tax_rate1' => 'tax_rate1',
        'tax_rate2' => 'tax_rate2',
        'tax_name3' => 'tax_name3',
        'tax_rate3' => 'tax_rate3',
        'amount' => 'amount',
        'foreign_amount' => 'foreign_amount',
        'exchange_rate' => 'exchange_rate',
        'date' => 'date',
        'payment_date' => 'payment_date',
        'should_be_invoiced' => 'should_be_invoiced',
        'is_deleted' => 'is_deleted',
        'invoice_documents' => 'invoice_documents',
        'updated_at' => 'updated_at',
        'archived_at' => 'archived_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'assigned_user_id' => 'setAssignedUserId',
        'company_id' => 'setCompanyId',
        'client_id' => 'setClientId',
        'invoice_id' => 'setInvoiceId',
        'bank_id' => 'setBankId',
        'invoice_currency_id' => 'setInvoiceCurrencyId',
        'expense_currency_id' => 'setExpenseCurrencyId',
        'invoice_category_id' => 'setInvoiceCategoryId',
        'payment_type_id' => 'setPaymentTypeId',
        'recurring_expense_id' => 'setRecurringExpenseId',
        'private_notes' => 'setPrivateNotes',
        'public_notes' => 'setPublicNotes',
        'transaction_reference' => 'setTransactionReference',
        'transcation_id' => 'setTranscationId',
        'custom_value1' => 'setCustomValue1',
        'custom_value2' => 'setCustomValue2',
        'custom_value3' => 'setCustomValue3',
        'custom_value4' => 'setCustomValue4',
        'tax_name1' => 'setTaxName1',
        'tax_name2' => 'setTaxName2',
        'tax_rate1' => 'setTaxRate1',
        'tax_rate2' => 'setTaxRate2',
        'tax_name3' => 'setTaxName3',
        'tax_rate3' => 'setTaxRate3',
        'amount' => 'setAmount',
        'foreign_amount' => 'setForeignAmount',
        'exchange_rate' => 'setExchangeRate',
        'date' => 'setDate',
        'payment_date' => 'setPaymentDate',
        'should_be_invoiced' => 'setShouldBeInvoiced',
        'is_deleted' => 'setIsDeleted',
        'invoice_documents' => 'setInvoiceDocuments',
        'updated_at' => 'setUpdatedAt',
        'archived_at' => 'setArchivedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'assigned_user_id' => 'getAssignedUserId',
        'company_id' => 'getCompanyId',
        'client_id' => 'getClientId',
        'invoice_id' => 'getInvoiceId',
        'bank_id' => 'getBankId',
        'invoice_currency_id' => 'getInvoiceCurrencyId',
        'expense_currency_id' => 'getExpenseCurrencyId',
        'invoice_category_id' => 'getInvoiceCategoryId',
        'payment_type_id' => 'getPaymentTypeId',
        'recurring_expense_id' => 'getRecurringExpenseId',
        'private_notes' => 'getPrivateNotes',
        'public_notes' => 'getPublicNotes',
        'transaction_reference' => 'getTransactionReference',
        'transcation_id' => 'getTranscationId',
        'custom_value1' => 'getCustomValue1',
        'custom_value2' => 'getCustomValue2',
        'custom_value3' => 'getCustomValue3',
        'custom_value4' => 'getCustomValue4',
        'tax_name1' => 'getTaxName1',
        'tax_name2' => 'getTaxName2',
        'tax_rate1' => 'getTaxRate1',
        'tax_rate2' => 'getTaxRate2',
        'tax_name3' => 'getTaxName3',
        'tax_rate3' => 'getTaxRate3',
        'amount' => 'getAmount',
        'foreign_amount' => 'getForeignAmount',
        'exchange_rate' => 'getExchangeRate',
        'date' => 'getDate',
        'payment_date' => 'getPaymentDate',
        'should_be_invoiced' => 'getShouldBeInvoiced',
        'is_deleted' => 'getIsDeleted',
        'invoice_documents' => 'getInvoiceDocuments',
        'updated_at' => 'getUpdatedAt',
        'archived_at' => 'getArchivedAt'
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
        $this->setIfExists('assigned_user_id', $data ?? [], null);
        $this->setIfExists('company_id', $data ?? [], null);
        $this->setIfExists('client_id', $data ?? [], null);
        $this->setIfExists('invoice_id', $data ?? [], null);
        $this->setIfExists('bank_id', $data ?? [], null);
        $this->setIfExists('invoice_currency_id', $data ?? [], null);
        $this->setIfExists('expense_currency_id', $data ?? [], null);
        $this->setIfExists('invoice_category_id', $data ?? [], null);
        $this->setIfExists('payment_type_id', $data ?? [], null);
        $this->setIfExists('recurring_expense_id', $data ?? [], null);
        $this->setIfExists('private_notes', $data ?? [], null);
        $this->setIfExists('public_notes', $data ?? [], null);
        $this->setIfExists('transaction_reference', $data ?? [], null);
        $this->setIfExists('transcation_id', $data ?? [], null);
        $this->setIfExists('custom_value1', $data ?? [], null);
        $this->setIfExists('custom_value2', $data ?? [], null);
        $this->setIfExists('custom_value3', $data ?? [], null);
        $this->setIfExists('custom_value4', $data ?? [], null);
        $this->setIfExists('tax_name1', $data ?? [], null);
        $this->setIfExists('tax_name2', $data ?? [], null);
        $this->setIfExists('tax_rate1', $data ?? [], null);
        $this->setIfExists('tax_rate2', $data ?? [], null);
        $this->setIfExists('tax_name3', $data ?? [], null);
        $this->setIfExists('tax_rate3', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('foreign_amount', $data ?? [], null);
        $this->setIfExists('exchange_rate', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('payment_date', $data ?? [], null);
        $this->setIfExists('should_be_invoiced', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('invoice_documents', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('archived_at', $data ?? [], null);
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
     * @param string|null $id The expense hashed id
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
     * Gets invoice_id
     *
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string|null $invoice_id The related invoice hashed id
     *
     * @return self
     */
    public function setInvoiceId($invoice_id)
    {
        
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets bank_id
     *
     * @return string|null
     */
    public function getBankId()
    {
        return $this->container['bank_id'];
    }

    /**
     * Sets bank_id
     *
     * @param string|null $bank_id The bank id related to this expense
     *
     * @return self
     */
    public function setBankId($bank_id)
    {
        
        $this->container['bank_id'] = $bank_id;

        return $this;
    }

    /**
     * Gets invoice_currency_id
     *
     * @return string|null
     */
    public function getInvoiceCurrencyId()
    {
        return $this->container['invoice_currency_id'];
    }

    /**
     * Sets invoice_currency_id
     *
     * @param string|null $invoice_currency_id The currency id of the related invoice
     *
     * @return self
     */
    public function setInvoiceCurrencyId($invoice_currency_id)
    {
        
        $this->container['invoice_currency_id'] = $invoice_currency_id;

        return $this;
    }

    /**
     * Gets expense_currency_id
     *
     * @return string|null
     */
    public function getExpenseCurrencyId()
    {
        return $this->container['expense_currency_id'];
    }

    /**
     * Sets expense_currency_id
     *
     * @param string|null $expense_currency_id The currency id of the expense
     *
     * @return self
     */
    public function setExpenseCurrencyId($expense_currency_id)
    {
        
        $this->container['expense_currency_id'] = $expense_currency_id;

        return $this;
    }

    /**
     * Gets invoice_category_id
     *
     * @return string|null
     */
    public function getInvoiceCategoryId()
    {
        return $this->container['invoice_category_id'];
    }

    /**
     * Sets invoice_category_id
     *
     * @param string|null $invoice_category_id The invoice category id
     *
     * @return self
     */
    public function setInvoiceCategoryId($invoice_category_id)
    {
        
        $this->container['invoice_category_id'] = $invoice_category_id;

        return $this;
    }

    /**
     * Gets payment_type_id
     *
     * @return string|null
     */
    public function getPaymentTypeId()
    {
        return $this->container['payment_type_id'];
    }

    /**
     * Sets payment_type_id
     *
     * @param string|null $payment_type_id The payment type id
     *
     * @return self
     */
    public function setPaymentTypeId($payment_type_id)
    {
        
        $this->container['payment_type_id'] = $payment_type_id;

        return $this;
    }

    /**
     * Gets recurring_expense_id
     *
     * @return string|null
     */
    public function getRecurringExpenseId()
    {
        return $this->container['recurring_expense_id'];
    }

    /**
     * Sets recurring_expense_id
     *
     * @param string|null $recurring_expense_id The related recurring expense this expense was created from
     *
     * @return self
     */
    public function setRecurringExpenseId($recurring_expense_id)
    {
        
        $this->container['recurring_expense_id'] = $recurring_expense_id;

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
     * @param string|null $private_notes The private notes of the expense
     *
     * @return self
     */
    public function setPrivateNotes($private_notes)
    {
        
        $this->container['private_notes'] = $private_notes;

        return $this;
    }

    /**
     * Gets public_notes
     *
     * @return string|null
     */
    public function getPublicNotes()
    {
        return $this->container['public_notes'];
    }

    /**
     * Sets public_notes
     *
     * @param string|null $public_notes The public notes of the expense
     *
     * @return self
     */
    public function setPublicNotes($public_notes)
    {
        
        $this->container['public_notes'] = $public_notes;

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
     * @param string|null $transaction_reference The transaction references of the expense
     *
     * @return self
     */
    public function setTransactionReference($transaction_reference)
    {
        
        $this->container['transaction_reference'] = $transaction_reference;

        return $this;
    }

    /**
     * Gets transcation_id
     *
     * @return string|null
     */
    public function getTranscationId()
    {
        return $this->container['transcation_id'];
    }

    /**
     * Sets transcation_id
     *
     * @param string|null $transcation_id The transaction id of the expense
     *
     * @return self
     */
    public function setTranscationId($transcation_id)
    {
        
        $this->container['transcation_id'] = $transcation_id;

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
     * Gets tax_name1
     *
     * @return string|null
     */
    public function getTaxName1()
    {
        return $this->container['tax_name1'];
    }

    /**
     * Sets tax_name1
     *
     * @param string|null $tax_name1 Tax name
     *
     * @return self
     */
    public function setTaxName1($tax_name1)
    {
        
        $this->container['tax_name1'] = $tax_name1;

        return $this;
    }

    /**
     * Gets tax_name2
     *
     * @return string|null
     */
    public function getTaxName2()
    {
        return $this->container['tax_name2'];
    }

    /**
     * Sets tax_name2
     *
     * @param string|null $tax_name2 Tax name
     *
     * @return self
     */
    public function setTaxName2($tax_name2)
    {
        
        $this->container['tax_name2'] = $tax_name2;

        return $this;
    }

    /**
     * Gets tax_rate1
     *
     * @return float|null
     */
    public function getTaxRate1()
    {
        return $this->container['tax_rate1'];
    }

    /**
     * Sets tax_rate1
     *
     * @param float|null $tax_rate1 Tax rate
     *
     * @return self
     */
    public function setTaxRate1($tax_rate1)
    {
        
        $this->container['tax_rate1'] = $tax_rate1;

        return $this;
    }

    /**
     * Gets tax_rate2
     *
     * @return float|null
     */
    public function getTaxRate2()
    {
        return $this->container['tax_rate2'];
    }

    /**
     * Sets tax_rate2
     *
     * @param float|null $tax_rate2 Tax rate
     *
     * @return self
     */
    public function setTaxRate2($tax_rate2)
    {
        
        $this->container['tax_rate2'] = $tax_rate2;

        return $this;
    }

    /**
     * Gets tax_name3
     *
     * @return string|null
     */
    public function getTaxName3()
    {
        return $this->container['tax_name3'];
    }

    /**
     * Sets tax_name3
     *
     * @param string|null $tax_name3 Tax name
     *
     * @return self
     */
    public function setTaxName3($tax_name3)
    {
        
        $this->container['tax_name3'] = $tax_name3;

        return $this;
    }

    /**
     * Gets tax_rate3
     *
     * @return float|null
     */
    public function getTaxRate3()
    {
        return $this->container['tax_rate3'];
    }

    /**
     * Sets tax_rate3
     *
     * @param float|null $tax_rate3 Tax rate
     *
     * @return self
     */
    public function setTaxRate3($tax_rate3)
    {
        
        $this->container['tax_rate3'] = $tax_rate3;

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
     * @param float|null $amount The total expense amont
     *
     * @return self
     */
    public function setAmount($amount)
    {
        
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets foreign_amount
     *
     * @return float|null
     */
    public function getForeignAmount()
    {
        return $this->container['foreign_amount'];
    }

    /**
     * Sets foreign_amount
     *
     * @param float|null $foreign_amount The total foreign amount of the expense
     *
     * @return self
     */
    public function setForeignAmount($foreign_amount)
    {
        
        $this->container['foreign_amount'] = $foreign_amount;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return float|null
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param float|null $exchange_rate The exchange rate at the time of the expense
     *
     * @return self
     */
    public function setExchangeRate($exchange_rate)
    {
        
        $this->container['exchange_rate'] = $exchange_rate;

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
     * @param string|null $date The expense date formate Y-m-d
     *
     * @return self
     */
    public function setDate($date)
    {
        
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets payment_date
     *
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param string|null $payment_date The date of payment for the expense, format Y-m-d
     *
     * @return self
     */
    public function setPaymentDate($payment_date)
    {
        
        $this->container['payment_date'] = $payment_date;

        return $this;
    }

    /**
     * Gets should_be_invoiced
     *
     * @return bool|null
     */
    public function getShouldBeInvoiced()
    {
        return $this->container['should_be_invoiced'];
    }

    /**
     * Sets should_be_invoiced
     *
     * @param bool|null $should_be_invoiced Flag whether the expense should be invoiced
     *
     * @return self
     */
    public function setShouldBeInvoiced($should_be_invoiced)
    {
        
        $this->container['should_be_invoiced'] = $should_be_invoiced;

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
     * @param bool|null $is_deleted Boolean determining whether the expense has been deleted
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {
        
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets invoice_documents
     *
     * @return bool|null
     */
    public function getInvoiceDocuments()
    {
        return $this->container['invoice_documents'];
    }

    /**
     * Sets invoice_documents
     *
     * @param bool|null $invoice_documents Passing the expense documents over to the invoice
     *
     * @return self
     */
    public function setInvoiceDocuments($invoice_documents)
    {
        
        $this->container['invoice_documents'] = $invoice_documents;

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


