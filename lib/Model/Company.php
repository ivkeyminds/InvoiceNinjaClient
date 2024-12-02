<?php
/**
 * Company
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
 * Company Class Doc Comment
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Company implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'size_id' => 'string',
        'industry_id' => 'string',
        'slack_webhook_url' => 'string',
        'google_analytics_key' => 'string',
        'portal_mode' => 'string',
        'subdomain' => 'string',
        'portal_domain' => 'string',
        'enabled_tax_rates' => 'int',
        'fill_products' => 'bool',
        'convert_products' => 'bool',
        'update_products' => 'bool',
        'show_product_details' => 'bool',
        'custom_fields' => 'object',
        'enable_product_cost' => 'bool',
        'enable_product_quantity' => 'bool',
        'default_quantity' => 'bool',
        'custom_surcharge_taxes1' => 'bool',
        'custom_surcharge_taxes2' => 'bool',
        'custom_surcharge_taxes3' => 'bool',
        'custom_surcharge_taxes4' => 'bool',
        'logo' => 'object',
        'settings' => '\IvkeyMinds\InvoiceNinjaClient\Model\CompanySettings'
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
        'size_id' => null,
        'industry_id' => null,
        'slack_webhook_url' => null,
        'google_analytics_key' => null,
        'portal_mode' => null,
        'subdomain' => null,
        'portal_domain' => null,
        'enabled_tax_rates' => null,
        'fill_products' => null,
        'convert_products' => null,
        'update_products' => null,
        'show_product_details' => null,
        'custom_fields' => null,
        'enable_product_cost' => null,
        'enable_product_quantity' => null,
        'default_quantity' => null,
        'custom_surcharge_taxes1' => null,
        'custom_surcharge_taxes2' => null,
        'custom_surcharge_taxes3' => null,
        'custom_surcharge_taxes4' => null,
        'logo' => null,
        'settings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id' => true,
        'size_id' => true,
        'industry_id' => true,
        'slack_webhook_url' => true,
        'google_analytics_key' => true,
        'portal_mode' => true,
        'subdomain' => true,
        'portal_domain' => true,
        'enabled_tax_rates' => true,
        'fill_products' => true,
        'convert_products' => true,
        'update_products' => true,
        'show_product_details' => true,
        'custom_fields' => true,
        'enable_product_cost' => true,
        'enable_product_quantity' => true,
        'default_quantity' => true,
        'custom_surcharge_taxes1' => true,
        'custom_surcharge_taxes2' => true,
        'custom_surcharge_taxes3' => true,
        'custom_surcharge_taxes4' => true,
        'logo' => true,
        'settings' => true
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
        'size_id' => 'size_id',
        'industry_id' => 'industry_id',
        'slack_webhook_url' => 'slack_webhook_url',
        'google_analytics_key' => 'google_analytics_key',
        'portal_mode' => 'portal_mode',
        'subdomain' => 'subdomain',
        'portal_domain' => 'portal_domain',
        'enabled_tax_rates' => 'enabled_tax_rates',
        'fill_products' => 'fill_products',
        'convert_products' => 'convert_products',
        'update_products' => 'update_products',
        'show_product_details' => 'show_product_details',
        'custom_fields' => 'custom_fields',
        'enable_product_cost' => 'enable_product_cost',
        'enable_product_quantity' => 'enable_product_quantity',
        'default_quantity' => 'default_quantity',
        'custom_surcharge_taxes1' => 'custom_surcharge_taxes1',
        'custom_surcharge_taxes2' => 'custom_surcharge_taxes2',
        'custom_surcharge_taxes3' => 'custom_surcharge_taxes3',
        'custom_surcharge_taxes4' => 'custom_surcharge_taxes4',
        'logo' => 'logo',
        'settings' => 'settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'size_id' => 'setSizeId',
        'industry_id' => 'setIndustryId',
        'slack_webhook_url' => 'setSlackWebhookUrl',
        'google_analytics_key' => 'setGoogleAnalyticsKey',
        'portal_mode' => 'setPortalMode',
        'subdomain' => 'setSubdomain',
        'portal_domain' => 'setPortalDomain',
        'enabled_tax_rates' => 'setEnabledTaxRates',
        'fill_products' => 'setFillProducts',
        'convert_products' => 'setConvertProducts',
        'update_products' => 'setUpdateProducts',
        'show_product_details' => 'setShowProductDetails',
        'custom_fields' => 'setCustomFields',
        'enable_product_cost' => 'setEnableProductCost',
        'enable_product_quantity' => 'setEnableProductQuantity',
        'default_quantity' => 'setDefaultQuantity',
        'custom_surcharge_taxes1' => 'setCustomSurchargeTaxes1',
        'custom_surcharge_taxes2' => 'setCustomSurchargeTaxes2',
        'custom_surcharge_taxes3' => 'setCustomSurchargeTaxes3',
        'custom_surcharge_taxes4' => 'setCustomSurchargeTaxes4',
        'logo' => 'setLogo',
        'settings' => 'setSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'size_id' => 'getSizeId',
        'industry_id' => 'getIndustryId',
        'slack_webhook_url' => 'getSlackWebhookUrl',
        'google_analytics_key' => 'getGoogleAnalyticsKey',
        'portal_mode' => 'getPortalMode',
        'subdomain' => 'getSubdomain',
        'portal_domain' => 'getPortalDomain',
        'enabled_tax_rates' => 'getEnabledTaxRates',
        'fill_products' => 'getFillProducts',
        'convert_products' => 'getConvertProducts',
        'update_products' => 'getUpdateProducts',
        'show_product_details' => 'getShowProductDetails',
        'custom_fields' => 'getCustomFields',
        'enable_product_cost' => 'getEnableProductCost',
        'enable_product_quantity' => 'getEnableProductQuantity',
        'default_quantity' => 'getDefaultQuantity',
        'custom_surcharge_taxes1' => 'getCustomSurchargeTaxes1',
        'custom_surcharge_taxes2' => 'getCustomSurchargeTaxes2',
        'custom_surcharge_taxes3' => 'getCustomSurchargeTaxes3',
        'custom_surcharge_taxes4' => 'getCustomSurchargeTaxes4',
        'logo' => 'getLogo',
        'settings' => 'getSettings'
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
        $this->setIfExists('size_id', $data ?? [], null);
        $this->setIfExists('industry_id', $data ?? [], null);
        $this->setIfExists('slack_webhook_url', $data ?? [], null);
        $this->setIfExists('google_analytics_key', $data ?? [], null);
        $this->setIfExists('portal_mode', $data ?? [], null);
        $this->setIfExists('subdomain', $data ?? [], null);
        $this->setIfExists('portal_domain', $data ?? [], null);
        $this->setIfExists('enabled_tax_rates', $data ?? [], null);
        $this->setIfExists('fill_products', $data ?? [], null);
        $this->setIfExists('convert_products', $data ?? [], null);
        $this->setIfExists('update_products', $data ?? [], null);
        $this->setIfExists('show_product_details', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('enable_product_cost', $data ?? [], null);
        $this->setIfExists('enable_product_quantity', $data ?? [], null);
        $this->setIfExists('default_quantity', $data ?? [], null);
        $this->setIfExists('custom_surcharge_taxes1', $data ?? [], null);
        $this->setIfExists('custom_surcharge_taxes2', $data ?? [], null);
        $this->setIfExists('custom_surcharge_taxes3', $data ?? [], null);
        $this->setIfExists('custom_surcharge_taxes4', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('settings', $data ?? [], null);
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
     * @param string|null $id The company hash id
     *
     * @return self
     */
    public function setId($id)
    {
        
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets size_id
     *
     * @return string|null
     */
    public function getSizeId()
    {
        return $this->container['size_id'];
    }

    /**
     * Sets size_id
     *
     * @param string|null $size_id The company size ID
     *
     * @return self
     */
    public function setSizeId($size_id)
    {
        
        $this->container['size_id'] = $size_id;

        return $this;
    }

    /**
     * Gets industry_id
     *
     * @return string|null
     */
    public function getIndustryId()
    {
        return $this->container['industry_id'];
    }

    /**
     * Sets industry_id
     *
     * @param string|null $industry_id The company industry ID
     *
     * @return self
     */
    public function setIndustryId($industry_id)
    {
        
        $this->container['industry_id'] = $industry_id;

        return $this;
    }

    /**
     * Gets slack_webhook_url
     *
     * @return string|null
     */
    public function getSlackWebhookUrl()
    {
        return $this->container['slack_webhook_url'];
    }

    /**
     * Sets slack_webhook_url
     *
     * @param string|null $slack_webhook_url The slack webhook notification URL
     *
     * @return self
     */
    public function setSlackWebhookUrl($slack_webhook_url)
    {
        
        $this->container['slack_webhook_url'] = $slack_webhook_url;

        return $this;
    }

    /**
     * Gets google_analytics_key
     *
     * @return string|null
     */
    public function getGoogleAnalyticsKey()
    {
        return $this->container['google_analytics_key'];
    }

    /**
     * Sets google_analytics_key
     *
     * @param string|null $google_analytics_key The google analytics key
     *
     * @return self
     */
    public function setGoogleAnalyticsKey($google_analytics_key)
    {
        
        $this->container['google_analytics_key'] = $google_analytics_key;

        return $this;
    }

    /**
     * Gets portal_mode
     *
     * @return string|null
     */
    public function getPortalMode()
    {
        return $this->container['portal_mode'];
    }

    /**
     * Sets portal_mode
     *
     * @param string|null $portal_mode Determines the client facing urls ie: subdomain,domain,iframe
     *
     * @return self
     */
    public function setPortalMode($portal_mode)
    {
        
        $this->container['portal_mode'] = $portal_mode;

        return $this;
    }

    /**
     * Gets subdomain
     *
     * @return string|null
     */
    public function getSubdomain()
    {
        return $this->container['subdomain'];
    }

    /**
     * Sets subdomain
     *
     * @param string|null $subdomain Specifies the first part of the company domain ie acme in acme.domain.com
     *
     * @return self
     */
    public function setSubdomain($subdomain)
    {
        
        $this->container['subdomain'] = $subdomain;

        return $this;
    }

    /**
     * Gets portal_domain
     *
     * @return string|null
     */
    public function getPortalDomain()
    {
        return $this->container['portal_domain'];
    }

    /**
     * Sets portal_domain
     *
     * @param string|null $portal_domain The fully qualified domain for client facing URLS
     *
     * @return self
     */
    public function setPortalDomain($portal_domain)
    {
        
        $this->container['portal_domain'] = $portal_domain;

        return $this;
    }

    /**
     * Gets enabled_tax_rates
     *
     * @return int|null
     */
    public function getEnabledTaxRates()
    {
        return $this->container['enabled_tax_rates'];
    }

    /**
     * Sets enabled_tax_rates
     *
     * @param int|null $enabled_tax_rates Number of taxes rates used per entity
     *
     * @return self
     */
    public function setEnabledTaxRates($enabled_tax_rates)
    {
        
        $this->container['enabled_tax_rates'] = $enabled_tax_rates;

        return $this;
    }

    /**
     * Gets fill_products
     *
     * @return bool|null
     */
    public function getFillProducts()
    {
        return $this->container['fill_products'];
    }

    /**
     * Sets fill_products
     *
     * @param bool|null $fill_products Toggles filling a product description based on product key
     *
     * @return self
     */
    public function setFillProducts($fill_products)
    {
        
        $this->container['fill_products'] = $fill_products;

        return $this;
    }

    /**
     * Gets convert_products
     *
     * @return bool|null
     */
    public function getConvertProducts()
    {
        return $this->container['convert_products'];
    }

    /**
     * Sets convert_products
     *
     * @param bool|null $convert_products ___________
     *
     * @return self
     */
    public function setConvertProducts($convert_products)
    {
        
        $this->container['convert_products'] = $convert_products;

        return $this;
    }

    /**
     * Gets update_products
     *
     * @return bool|null
     */
    public function getUpdateProducts()
    {
        return $this->container['update_products'];
    }

    /**
     * Sets update_products
     *
     * @param bool|null $update_products Toggles updating a product description which description changes
     *
     * @return self
     */
    public function setUpdateProducts($update_products)
    {
        
        $this->container['update_products'] = $update_products;

        return $this;
    }

    /**
     * Gets show_product_details
     *
     * @return bool|null
     */
    public function getShowProductDetails()
    {
        return $this->container['show_product_details'];
    }

    /**
     * Sets show_product_details
     *
     * @param bool|null $show_product_details Toggles showing a product description which description changes
     *
     * @return self
     */
    public function setShowProductDetails($show_product_details)
    {
        
        $this->container['show_product_details'] = $show_product_details;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object|null $custom_fields Custom fields map
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets enable_product_cost
     *
     * @return bool|null
     */
    public function getEnableProductCost()
    {
        return $this->container['enable_product_cost'];
    }

    /**
     * Sets enable_product_cost
     *
     * @param bool|null $enable_product_cost Show/Hide the product cost field in the UI
     *
     * @return self
     */
    public function setEnableProductCost($enable_product_cost)
    {
        
        $this->container['enable_product_cost'] = $enable_product_cost;

        return $this;
    }

    /**
     * Gets enable_product_quantity
     *
     * @return bool|null
     */
    public function getEnableProductQuantity()
    {
        return $this->container['enable_product_quantity'];
    }

    /**
     * Sets enable_product_quantity
     *
     * @param bool|null $enable_product_quantity Show/hide the product quantity field (used in the UI to show the default quantity)
     *
     * @return self
     */
    public function setEnableProductQuantity($enable_product_quantity)
    {
        
        $this->container['enable_product_quantity'] = $enable_product_quantity;

        return $this;
    }

    /**
     * Gets default_quantity
     *
     * @return bool|null
     */
    public function getDefaultQuantity()
    {
        return $this->container['default_quantity'];
    }

    /**
     * Sets default_quantity
     *
     * @param bool|null $default_quantity Enable/Disable whether to use a default quantity
     *
     * @return self
     */
    public function setDefaultQuantity($default_quantity)
    {
        
        $this->container['default_quantity'] = $default_quantity;

        return $this;
    }

    /**
     * Gets custom_surcharge_taxes1
     *
     * @return bool|null
     */
    public function getCustomSurchargeTaxes1()
    {
        return $this->container['custom_surcharge_taxes1'];
    }

    /**
     * Sets custom_surcharge_taxes1
     *
     * @param bool|null $custom_surcharge_taxes1 Toggles charging taxes on custom surcharge amounts
     *
     * @return self
     */
    public function setCustomSurchargeTaxes1($custom_surcharge_taxes1)
    {
        
        $this->container['custom_surcharge_taxes1'] = $custom_surcharge_taxes1;

        return $this;
    }

    /**
     * Gets custom_surcharge_taxes2
     *
     * @return bool|null
     */
    public function getCustomSurchargeTaxes2()
    {
        return $this->container['custom_surcharge_taxes2'];
    }

    /**
     * Sets custom_surcharge_taxes2
     *
     * @param bool|null $custom_surcharge_taxes2 Toggles charging taxes on custom surcharge amounts
     *
     * @return self
     */
    public function setCustomSurchargeTaxes2($custom_surcharge_taxes2)
    {
        
        $this->container['custom_surcharge_taxes2'] = $custom_surcharge_taxes2;

        return $this;
    }

    /**
     * Gets custom_surcharge_taxes3
     *
     * @return bool|null
     */
    public function getCustomSurchargeTaxes3()
    {
        return $this->container['custom_surcharge_taxes3'];
    }

    /**
     * Sets custom_surcharge_taxes3
     *
     * @param bool|null $custom_surcharge_taxes3 Toggles charging taxes on custom surcharge amounts
     *
     * @return self
     */
    public function setCustomSurchargeTaxes3($custom_surcharge_taxes3)
    {
        
        $this->container['custom_surcharge_taxes3'] = $custom_surcharge_taxes3;

        return $this;
    }

    /**
     * Gets custom_surcharge_taxes4
     *
     * @return bool|null
     */
    public function getCustomSurchargeTaxes4()
    {
        return $this->container['custom_surcharge_taxes4'];
    }

    /**
     * Sets custom_surcharge_taxes4
     *
     * @param bool|null $custom_surcharge_taxes4 Toggles charging taxes on custom surcharge amounts
     *
     * @return self
     */
    public function setCustomSurchargeTaxes4($custom_surcharge_taxes4)
    {
        
        $this->container['custom_surcharge_taxes4'] = $custom_surcharge_taxes4;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return object|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param object|null $logo The company logo - binary
     *
     * @return self
     */
    public function setLogo($logo)
    {
        
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \IvkeyMinds\InvoiceNinjaClient\Model\CompanySettings|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \IvkeyMinds\InvoiceNinjaClient\Model\CompanySettings|null $settings settings
     *
     * @return self
     */
    public function setSettings($settings)
    {
        
        $this->container['settings'] = $settings;

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


