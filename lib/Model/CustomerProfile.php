<?php
/**
 * CustomerProfile
 *
 * PHP version 5
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Talon.One API
 *
 * The Talon.One API is used to manage applications and campaigns, as well as to integrate with your application. The operations in the _Integration API_ section are used to integrate with our platform, while the other operations are used to manage applications and campaigns.  ### Where is the API?  The API is available at the same hostname as these docs. For example, if you are reading this page at `https://mycompany.talon.one/docs/api/`, the URL for the [updateCustomerProfile][] operation is `https://mycompany.talon.one/v1/customer_profiles/id`  [updateCustomerProfile]: #operation--v1-customer_profiles--integrationId--put
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TalonOne\Client\Model;

use \ArrayAccess;
use \TalonOne\Client\ObjectSerializer;

/**
 * CustomerProfile Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'integrationId' => 'string',
        'created' => '\DateTime',
        'attributes' => 'object',
        'accountId' => 'int',
        'closedSessions' => 'int',
        'totalSales' => 'float',
        'loyaltyMemberships' => '\TalonOne\Client\Model\LoyaltyMembership[]',
        'lastActivity' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'integrationId' => 'string',
        'created' => 'date-time',
        'attributes' => null,
        'accountId' => null,
        'closedSessions' => null,
        'totalSales' => null,
        'loyaltyMemberships' => null,
        'lastActivity' => 'date-time'
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'integrationId' => 'integrationId',
        'created' => 'created',
        'attributes' => 'attributes',
        'accountId' => 'accountId',
        'closedSessions' => 'closedSessions',
        'totalSales' => 'totalSales',
        'loyaltyMemberships' => 'loyaltyMemberships',
        'lastActivity' => 'lastActivity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integrationId' => 'setIntegrationId',
        'created' => 'setCreated',
        'attributes' => 'setAttributes',
        'accountId' => 'setAccountId',
        'closedSessions' => 'setClosedSessions',
        'totalSales' => 'setTotalSales',
        'loyaltyMemberships' => 'setLoyaltyMemberships',
        'lastActivity' => 'setLastActivity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integrationId' => 'getIntegrationId',
        'created' => 'getCreated',
        'attributes' => 'getAttributes',
        'accountId' => 'getAccountId',
        'closedSessions' => 'getClosedSessions',
        'totalSales' => 'getTotalSales',
        'loyaltyMemberships' => 'getLoyaltyMemberships',
        'lastActivity' => 'getLastActivity'
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
        $this->container['integrationId'] = isset($data['integrationId']) ? $data['integrationId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['closedSessions'] = isset($data['closedSessions']) ? $data['closedSessions'] : null;
        $this->container['totalSales'] = isset($data['totalSales']) ? $data['totalSales'] : null;
        $this->container['loyaltyMemberships'] = isset($data['loyaltyMemberships']) ? $data['loyaltyMemberships'] : null;
        $this->container['lastActivity'] = isset($data['lastActivity']) ? $data['lastActivity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['integrationId'] === null) {
            $invalidProperties[] = "'integrationId' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['closedSessions'] === null) {
            $invalidProperties[] = "'closedSessions' can't be null";
        }
        if ($this->container['totalSales'] === null) {
            $invalidProperties[] = "'totalSales' can't be null";
        }
        if ($this->container['lastActivity'] === null) {
            $invalidProperties[] = "'lastActivity' can't be null";
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
     * Gets integrationId
     *
     * @return string
     */
    public function getIntegrationId()
    {
        return $this->container['integrationId'];
    }

    /**
     * Sets integrationId
     *
     * @param string $integrationId The ID used for this entity in the application system.
     *
     * @return $this
     */
    public function setIntegrationId($integrationId)
    {
        $this->container['integrationId'] = $integrationId;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created The exact moment this entity was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object $attributes Arbitrary properties associated with this item
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int $accountId The ID of the Talon.One account that owns this profile.
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets closedSessions
     *
     * @return int
     */
    public function getClosedSessions()
    {
        return $this->container['closedSessions'];
    }

    /**
     * Sets closedSessions
     *
     * @param int $closedSessions The total amount of closed sessions by a customer. A closed session is a successful purchase.
     *
     * @return $this
     */
    public function setClosedSessions($closedSessions)
    {
        $this->container['closedSessions'] = $closedSessions;

        return $this;
    }

    /**
     * Gets totalSales
     *
     * @return float
     */
    public function getTotalSales()
    {
        return $this->container['totalSales'];
    }

    /**
     * Sets totalSales
     *
     * @param float $totalSales Sum of all purchases made by this customer
     *
     * @return $this
     */
    public function setTotalSales($totalSales)
    {
        $this->container['totalSales'] = $totalSales;

        return $this;
    }

    /**
     * Gets loyaltyMemberships
     *
     * @return \TalonOne\Client\Model\LoyaltyMembership[]|null
     */
    public function getLoyaltyMemberships()
    {
        return $this->container['loyaltyMemberships'];
    }

    /**
     * Sets loyaltyMemberships
     *
     * @param \TalonOne\Client\Model\LoyaltyMembership[]|null $loyaltyMemberships A list of loyalty programs joined by the customer
     *
     * @return $this
     */
    public function setLoyaltyMemberships($loyaltyMemberships)
    {
        $this->container['loyaltyMemberships'] = $loyaltyMemberships;

        return $this;
    }

    /**
     * Gets lastActivity
     *
     * @return \DateTime
     */
    public function getLastActivity()
    {
        return $this->container['lastActivity'];
    }

    /**
     * Sets lastActivity
     *
     * @param \DateTime $lastActivity Timestamp of the most recent event received from this customer
     *
     * @return $this
     */
    public function setLastActivity($lastActivity)
    {
        $this->container['lastActivity'] = $lastActivity;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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

