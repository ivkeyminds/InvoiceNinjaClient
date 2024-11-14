<?php
/**
 * FillableInvoice
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
 * FillableInvoice Class Doc Comment
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FillableInvoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FillableInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assigned_user_id' => 'string',
        'client_id' => 'string',
        'number' => 'string',
        'po_number' => 'string',
        'terms' => 'string',
        'public_notes' => 'string',
        'private_notes' => 'string',
        'footer' => 'string',
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
        'line_items' => 'object',
        'discount' => 'float',
        'partial' => 'float',
        'is_amount_discount' => 'bool',
        'uses_inclusive_taxes' => 'bool',
        'date' => 'string',
        'partial_due_date' => 'string',
        'due_date' => 'string',
        'custom_surcharge1' => 'float',
        'custom_surcharge2' => 'float',
        'custom_surcharge3' => 'float',
        'custom_surcharge4' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assigned_user_id' => null,
        'client_id' => null,
        'number' => null,
        'po_number' => null,
        'terms' => null,
        'public_notes' => null,
        'private_notes' => null,
        'footer' => null,
        'custom_value1' => null,
        'custom_value2' => null,
        'custom_value3' => null,
        'custom_value4' => null,
        'tax_name1' => null,
        'tax_name2' => null,
        'tax_rate1' => null,
        'tax_rate2' => null,
        'tax_name3' => null,
        'tax_rate3' => null,
        'line_items' => null,
        'discount' => null,
        'partial' => null,
        'is_amount_discount' => null,
        'uses_inclusive_taxes' => null,
        'date' => null,
        'partial_due_date' => null,
        'due_date' => null,
        'custom_surcharge1' => null,
        'custom_surcharge2' => null,
        'custom_surcharge3' => null,
        'custom_surcharge4' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'assigned_user_id' => false,
        'client_id' => false,
        'number' => false,
        'po_number' => false,
        'terms' => false,
        'public_notes' => false,
        'private_notes' => false,
        'footer' => false,
        'custom_value1' => false,
        'custom_value2' => false,
        'custom_value3' => false,
        'custom_value4' => false,
        'tax_name1' => false,
        'tax_name2' => false,
        'tax_rate1' => false,
        'tax_rate2' => false,
        'tax_name3' => false,
        'tax_rate3' => false,
        'line_items' => false,
        'discount' => false,
        'partial' => false,
        'is_amount_discount' => false,
        'uses_inclusive_taxes' => false,
        'date' => false,
        'partial_due_date' => false,
        'due_date' => false,
        'custom_surcharge1' => false,
        'custom_surcharge2' => false,
        'custom_surcharge3' => false,
        'custom_surcharge4' => false
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
        'assigned_user_id' => 'assigned_user_id',
        'client_id' => 'client_id',
        'number' => 'number',
        'po_number' => 'po_number',
        'terms' => 'terms',
        'public_notes' => 'public_notes',
        'private_notes' => 'private_notes',
        'footer' => 'footer',
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
        'line_items' => 'line_items',
        'discount' => 'discount',
        'partial' => 'partial',
        'is_amount_discount' => 'is_amount_discount',
        'uses_inclusive_taxes' => 'uses_inclusive_taxes',
        'date' => 'date',
        'partial_due_date' => 'partial_due_date',
        'due_date' => 'due_date',
        'custom_surcharge1' => 'custom_surcharge1',
        'custom_surcharge2' => 'custom_surcharge2',
        'custom_surcharge3' => 'custom_surcharge3',
        'custom_surcharge4' => 'custom_surcharge4'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assigned_user_id' => 'setAssignedUserId',
        'client_id' => 'setClientId',
        'number' => 'setNumber',
        'po_number' => 'setPoNumber',
        'terms' => 'setTerms',
        'public_notes' => 'setPublicNotes',
        'private_notes' => 'setPrivateNotes',
        'footer' => 'setFooter',
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
        'line_items' => 'setLineItems',
        'discount' => 'setDiscount',
        'partial' => 'setPartial',
        'is_amount_discount' => 'setIsAmountDiscount',
        'uses_inclusive_taxes' => 'setUsesInclusiveTaxes',
        'date' => 'setDate',
        'partial_due_date' => 'setPartialDueDate',
        'due_date' => 'setDueDate',
        'custom_surcharge1' => 'setCustomSurcharge1',
        'custom_surcharge2' => 'setCustomSurcharge2',
        'custom_surcharge3' => 'setCustomSurcharge3',
        'custom_surcharge4' => 'setCustomSurcharge4'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assigned_user_id' => 'getAssignedUserId',
        'client_id' => 'getClientId',
        'number' => 'getNumber',
        'po_number' => 'getPoNumber',
        'terms' => 'getTerms',
        'public_notes' => 'getPublicNotes',
        'private_notes' => 'getPrivateNotes',
        'footer' => 'getFooter',
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
        'line_items' => 'getLineItems',
        'discount' => 'getDiscount',
        'partial' => 'getPartial',
        'is_amount_discount' => 'getIsAmountDiscount',
        'uses_inclusive_taxes' => 'getUsesInclusiveTaxes',
        'date' => 'getDate',
        'partial_due_date' => 'getPartialDueDate',
        'due_date' => 'getDueDate',
        'custom_surcharge1' => 'getCustomSurcharge1',
        'custom_surcharge2' => 'getCustomSurcharge2',
        'custom_surcharge3' => 'getCustomSurcharge3',
        'custom_surcharge4' => 'getCustomSurcharge4'
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
        $this->setIfExists('assigned_user_id', $data ?? [], null);
        $this->setIfExists('client_id', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('po_number', $data ?? [], null);
        $this->setIfExists('terms', $data ?? [], null);
        $this->setIfExists('public_notes', $data ?? [], null);
        $this->setIfExists('private_notes', $data ?? [], null);
        $this->setIfExists('footer', $data ?? [], null);
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
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('partial', $data ?? [], null);
        $this->setIfExists('is_amount_discount', $data ?? [], null);
        $this->setIfExists('uses_inclusive_taxes', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('partial_due_date', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('custom_surcharge1', $data ?? [], null);
        $this->setIfExists('custom_surcharge2', $data ?? [], null);
        $this->setIfExists('custom_surcharge3', $data ?? [], null);
        $this->setIfExists('custom_surcharge4', $data ?? [], null);
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
     * @param string|null $assigned_user_id __________
     *
     * @return self
     */
    public function setAssignedUserId($assigned_user_id)
    {
        if (is_null($assigned_user_id)) {
            throw new \InvalidArgumentException('non-nullable assigned_user_id cannot be null');
        }
        $this->container['assigned_user_id'] = $assigned_user_id;

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
     * @param string|null $client_id ________
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
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number The invoice number - is a unique alpha numeric number per invoice per company
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets po_number
     *
     * @return string|null
     */
    public function getPoNumber()
    {
        return $this->container['po_number'];
    }

    /**
     * Sets po_number
     *
     * @param string|null $po_number ________
     *
     * @return self
     */
    public function setPoNumber($po_number)
    {
        if (is_null($po_number)) {
            throw new \InvalidArgumentException('non-nullable po_number cannot be null');
        }
        $this->container['po_number'] = $po_number;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return string|null
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param string|null $terms ________
     *
     * @return self
     */
    public function setTerms($terms)
    {
        if (is_null($terms)) {
            throw new \InvalidArgumentException('non-nullable terms cannot be null');
        }
        $this->container['terms'] = $terms;

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
     * @param string|null $public_notes ________
     *
     * @return self
     */
    public function setPublicNotes($public_notes)
    {
        if (is_null($public_notes)) {
            throw new \InvalidArgumentException('non-nullable public_notes cannot be null');
        }
        $this->container['public_notes'] = $public_notes;

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
     * @param string|null $private_notes ________
     *
     * @return self
     */
    public function setPrivateNotes($private_notes)
    {
        if (is_null($private_notes)) {
            throw new \InvalidArgumentException('non-nullable private_notes cannot be null');
        }
        $this->container['private_notes'] = $private_notes;

        return $this;
    }

    /**
     * Gets footer
     *
     * @return string|null
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     *
     * @param string|null $footer ________
     *
     * @return self
     */
    public function setFooter($footer)
    {
        if (is_null($footer)) {
            throw new \InvalidArgumentException('non-nullable footer cannot be null');
        }
        $this->container['footer'] = $footer;

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
     * @param string|null $custom_value1 ________
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
     * @param string|null $custom_value2 ________
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
     * @param string|null $custom_value3 ________
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
     * @param string|null $custom_value4 ________
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
     * @param string|null $tax_name1 ________
     *
     * @return self
     */
    public function setTaxName1($tax_name1)
    {
        if (is_null($tax_name1)) {
            throw new \InvalidArgumentException('non-nullable tax_name1 cannot be null');
        }
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
     * @param string|null $tax_name2 ________
     *
     * @return self
     */
    public function setTaxName2($tax_name2)
    {
        if (is_null($tax_name2)) {
            throw new \InvalidArgumentException('non-nullable tax_name2 cannot be null');
        }
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
     * @param float|null $tax_rate1 _________
     *
     * @return self
     */
    public function setTaxRate1($tax_rate1)
    {
        if (is_null($tax_rate1)) {
            throw new \InvalidArgumentException('non-nullable tax_rate1 cannot be null');
        }
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
     * @param float|null $tax_rate2 _________
     *
     * @return self
     */
    public function setTaxRate2($tax_rate2)
    {
        if (is_null($tax_rate2)) {
            throw new \InvalidArgumentException('non-nullable tax_rate2 cannot be null');
        }
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
     * @param string|null $tax_name3 ________
     *
     * @return self
     */
    public function setTaxName3($tax_name3)
    {
        if (is_null($tax_name3)) {
            throw new \InvalidArgumentException('non-nullable tax_name3 cannot be null');
        }
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
     * @param float|null $tax_rate3 _________
     *
     * @return self
     */
    public function setTaxRate3($tax_rate3)
    {
        if (is_null($tax_rate3)) {
            throw new \InvalidArgumentException('non-nullable tax_rate3 cannot be null');
        }
        $this->container['tax_rate3'] = $tax_rate3;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return object|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param object|null $line_items _________
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        if (is_null($line_items)) {
            throw new \InvalidArgumentException('non-nullable line_items cannot be null');
        }
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float|null $discount _________
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        if (is_null($discount)) {
            throw new \InvalidArgumentException('non-nullable discount cannot be null');
        }
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets partial
     *
     * @return float|null
     */
    public function getPartial()
    {
        return $this->container['partial'];
    }

    /**
     * Sets partial
     *
     * @param float|null $partial _________
     *
     * @return self
     */
    public function setPartial($partial)
    {
        if (is_null($partial)) {
            throw new \InvalidArgumentException('non-nullable partial cannot be null');
        }
        $this->container['partial'] = $partial;

        return $this;
    }

    /**
     * Gets is_amount_discount
     *
     * @return bool|null
     */
    public function getIsAmountDiscount()
    {
        return $this->container['is_amount_discount'];
    }

    /**
     * Sets is_amount_discount
     *
     * @param bool|null $is_amount_discount _________
     *
     * @return self
     */
    public function setIsAmountDiscount($is_amount_discount)
    {
        if (is_null($is_amount_discount)) {
            throw new \InvalidArgumentException('non-nullable is_amount_discount cannot be null');
        }
        $this->container['is_amount_discount'] = $is_amount_discount;

        return $this;
    }

    /**
     * Gets uses_inclusive_taxes
     *
     * @return bool|null
     */
    public function getUsesInclusiveTaxes()
    {
        return $this->container['uses_inclusive_taxes'];
    }

    /**
     * Sets uses_inclusive_taxes
     *
     * @param bool|null $uses_inclusive_taxes Defines the type of taxes used as either inclusive or exclusive
     *
     * @return self
     */
    public function setUsesInclusiveTaxes($uses_inclusive_taxes)
    {
        if (is_null($uses_inclusive_taxes)) {
            throw new \InvalidArgumentException('non-nullable uses_inclusive_taxes cannot be null');
        }
        $this->container['uses_inclusive_taxes'] = $uses_inclusive_taxes;

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
     * @param string|null $date The Invoice Date
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets partial_due_date
     *
     * @return string|null
     */
    public function getPartialDueDate()
    {
        return $this->container['partial_due_date'];
    }

    /**
     * Sets partial_due_date
     *
     * @param string|null $partial_due_date _________
     *
     * @return self
     */
    public function setPartialDueDate($partial_due_date)
    {
        if (is_null($partial_due_date)) {
            throw new \InvalidArgumentException('non-nullable partial_due_date cannot be null');
        }
        $this->container['partial_due_date'] = $partial_due_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string|null $due_date _________
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            throw new \InvalidArgumentException('non-nullable due_date cannot be null');
        }
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets custom_surcharge1
     *
     * @return float|null
     */
    public function getCustomSurcharge1()
    {
        return $this->container['custom_surcharge1'];
    }

    /**
     * Sets custom_surcharge1
     *
     * @param float|null $custom_surcharge1 First Custom Surcharge
     *
     * @return self
     */
    public function setCustomSurcharge1($custom_surcharge1)
    {
        if (is_null($custom_surcharge1)) {
            throw new \InvalidArgumentException('non-nullable custom_surcharge1 cannot be null');
        }
        $this->container['custom_surcharge1'] = $custom_surcharge1;

        return $this;
    }

    /**
     * Gets custom_surcharge2
     *
     * @return float|null
     */
    public function getCustomSurcharge2()
    {
        return $this->container['custom_surcharge2'];
    }

    /**
     * Sets custom_surcharge2
     *
     * @param float|null $custom_surcharge2 Second Custom Surcharge
     *
     * @return self
     */
    public function setCustomSurcharge2($custom_surcharge2)
    {
        if (is_null($custom_surcharge2)) {
            throw new \InvalidArgumentException('non-nullable custom_surcharge2 cannot be null');
        }
        $this->container['custom_surcharge2'] = $custom_surcharge2;

        return $this;
    }

    /**
     * Gets custom_surcharge3
     *
     * @return float|null
     */
    public function getCustomSurcharge3()
    {
        return $this->container['custom_surcharge3'];
    }

    /**
     * Sets custom_surcharge3
     *
     * @param float|null $custom_surcharge3 Third Custom Surcharge
     *
     * @return self
     */
    public function setCustomSurcharge3($custom_surcharge3)
    {
        if (is_null($custom_surcharge3)) {
            throw new \InvalidArgumentException('non-nullable custom_surcharge3 cannot be null');
        }
        $this->container['custom_surcharge3'] = $custom_surcharge3;

        return $this;
    }

    /**
     * Gets custom_surcharge4
     *
     * @return float|null
     */
    public function getCustomSurcharge4()
    {
        return $this->container['custom_surcharge4'];
    }

    /**
     * Sets custom_surcharge4
     *
     * @param float|null $custom_surcharge4 Fourth Custom Surcharge
     *
     * @return self
     */
    public function setCustomSurcharge4($custom_surcharge4)
    {
        if (is_null($custom_surcharge4)) {
            throw new \InvalidArgumentException('non-nullable custom_surcharge4 cannot be null');
        }
        $this->container['custom_surcharge4'] = $custom_surcharge4;

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


