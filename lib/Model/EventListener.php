<?php
/**
 * EventListener
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sWIm Activiti REST API
 *
 * here be dragons
 *
 * OpenAPI spec version: v0.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * EventListener Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EventListener implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EventListener';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'xml_row_number' => 'int',
        'xml_column_number' => 'int',
        'extension_elements' => 'map[string,\Swagger\Client\Model\ExtensionElement[]]',
        'attributes' => 'map[string,\Swagger\Client\Model\ExtensionAttribute[]]',
        'events' => 'string',
        'implementation_type' => 'string',
        'implementation' => 'string',
        'entity_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'xml_row_number' => 'int32',
        'xml_column_number' => 'int32',
        'extension_elements' => null,
        'attributes' => null,
        'events' => null,
        'implementation_type' => null,
        'implementation' => null,
        'entity_type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'xml_row_number' => 'xmlRowNumber',
        'xml_column_number' => 'xmlColumnNumber',
        'extension_elements' => 'extensionElements',
        'attributes' => 'attributes',
        'events' => 'events',
        'implementation_type' => 'implementationType',
        'implementation' => 'implementation',
        'entity_type' => 'entityType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'xml_row_number' => 'setXmlRowNumber',
        'xml_column_number' => 'setXmlColumnNumber',
        'extension_elements' => 'setExtensionElements',
        'attributes' => 'setAttributes',
        'events' => 'setEvents',
        'implementation_type' => 'setImplementationType',
        'implementation' => 'setImplementation',
        'entity_type' => 'setEntityType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'xml_row_number' => 'getXmlRowNumber',
        'xml_column_number' => 'getXmlColumnNumber',
        'extension_elements' => 'getExtensionElements',
        'attributes' => 'getAttributes',
        'events' => 'getEvents',
        'implementation_type' => 'getImplementationType',
        'implementation' => 'getImplementation',
        'entity_type' => 'getEntityType'
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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['xml_row_number'] = isset($data['xml_row_number']) ? $data['xml_row_number'] : null;
        $this->container['xml_column_number'] = isset($data['xml_column_number']) ? $data['xml_column_number'] : null;
        $this->container['extension_elements'] = isset($data['extension_elements']) ? $data['extension_elements'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['implementation_type'] = isset($data['implementation_type']) ? $data['implementation_type'] : null;
        $this->container['implementation'] = isset($data['implementation']) ? $data['implementation'] : null;
        $this->container['entity_type'] = isset($data['entity_type']) ? $data['entity_type'] : null;
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

        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets xml_row_number
     *
     * @return int
     */
    public function getXmlRowNumber()
    {
        return $this->container['xml_row_number'];
    }

    /**
     * Sets xml_row_number
     *
     * @param int $xml_row_number xml_row_number
     *
     * @return $this
     */
    public function setXmlRowNumber($xml_row_number)
    {
        $this->container['xml_row_number'] = $xml_row_number;

        return $this;
    }

    /**
     * Gets xml_column_number
     *
     * @return int
     */
    public function getXmlColumnNumber()
    {
        return $this->container['xml_column_number'];
    }

    /**
     * Sets xml_column_number
     *
     * @param int $xml_column_number xml_column_number
     *
     * @return $this
     */
    public function setXmlColumnNumber($xml_column_number)
    {
        $this->container['xml_column_number'] = $xml_column_number;

        return $this;
    }

    /**
     * Gets extension_elements
     *
     * @return map[string,\Swagger\Client\Model\ExtensionElement[]]
     */
    public function getExtensionElements()
    {
        return $this->container['extension_elements'];
    }

    /**
     * Sets extension_elements
     *
     * @param map[string,\Swagger\Client\Model\ExtensionElement[]] $extension_elements extension_elements
     *
     * @return $this
     */
    public function setExtensionElements($extension_elements)
    {
        $this->container['extension_elements'] = $extension_elements;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return map[string,\Swagger\Client\Model\ExtensionAttribute[]]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param map[string,\Swagger\Client\Model\ExtensionAttribute[]] $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets events
     *
     * @return string
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param string $events events
     *
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets implementation_type
     *
     * @return string
     */
    public function getImplementationType()
    {
        return $this->container['implementation_type'];
    }

    /**
     * Sets implementation_type
     *
     * @param string $implementation_type implementation_type
     *
     * @return $this
     */
    public function setImplementationType($implementation_type)
    {
        $this->container['implementation_type'] = $implementation_type;

        return $this;
    }

    /**
     * Gets implementation
     *
     * @return string
     */
    public function getImplementation()
    {
        return $this->container['implementation'];
    }

    /**
     * Sets implementation
     *
     * @param string $implementation implementation
     *
     * @return $this
     */
    public function setImplementation($implementation)
    {
        $this->container['implementation'] = $implementation;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param string $entity_type entity_type
     *
     * @return $this
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
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
     * @param  integer $offset Offset
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
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

