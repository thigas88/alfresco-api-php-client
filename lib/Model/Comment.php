<?php
/**
 * Comment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfresco\Core
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Alfresco Content Services REST API
 *
 * **Core API**  Provides access to the core features of Alfresco Content Services.
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Alfresco\Core\Model;

use \ArrayAccess;

/**
 * Comment Class Doc Comment
 *
 * @category    Class
 * @package     Alfresco\Core
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Comment implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Comment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'content' => 'string',
        'created_by' => '\Alfresco\Core\Model\Person',
        'created_at' => '\DateTime',
        'edited' => 'bool',
        'modified_by' => '\Alfresco\Core\Model\Person',
        'modified_at' => '\DateTime',
        'can_edit' => 'bool',
        'can_delete' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'content' => null,
        'created_by' => null,
        'created_at' => 'date-time',
        'edited' => null,
        'modified_by' => null,
        'modified_at' => 'date-time',
        'can_edit' => null,
        'can_delete' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'content' => 'content',
        'created_by' => 'createdBy',
        'created_at' => 'createdAt',
        'edited' => 'edited',
        'modified_by' => 'modifiedBy',
        'modified_at' => 'modifiedAt',
        'can_edit' => 'canEdit',
        'can_delete' => 'canDelete'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'content' => 'setContent',
        'created_by' => 'setCreatedBy',
        'created_at' => 'setCreatedAt',
        'edited' => 'setEdited',
        'modified_by' => 'setModifiedBy',
        'modified_at' => 'setModifiedAt',
        'can_edit' => 'setCanEdit',
        'can_delete' => 'setCanDelete'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'content' => 'getContent',
        'created_by' => 'getCreatedBy',
        'created_at' => 'getCreatedAt',
        'edited' => 'getEdited',
        'modified_by' => 'getModifiedBy',
        'modified_at' => 'getModifiedAt',
        'can_edit' => 'getCanEdit',
        'can_delete' => 'getCanDelete'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['edited'] = isset($data['edited']) ? $data['edited'] : null;
        $this->container['modified_by'] = isset($data['modified_by']) ? $data['modified_by'] : null;
        $this->container['modified_at'] = isset($data['modified_at']) ? $data['modified_at'] : null;
        $this->container['can_edit'] = isset($data['can_edit']) ? $data['can_edit'] : null;
        $this->container['can_delete'] = isset($data['can_delete']) ? $data['can_delete'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalid_properties[] = "'content' can't be null";
        }
        if ($this->container['created_by'] === null) {
            $invalid_properties[] = "'created_by' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalid_properties[] = "'created_at' can't be null";
        }
        if ($this->container['edited'] === null) {
            $invalid_properties[] = "'edited' can't be null";
        }
        if ($this->container['modified_by'] === null) {
            $invalid_properties[] = "'modified_by' can't be null";
        }
        if ($this->container['modified_at'] === null) {
            $invalid_properties[] = "'modified_at' can't be null";
        }
        if ($this->container['can_edit'] === null) {
            $invalid_properties[] = "'can_edit' can't be null";
        }
        if ($this->container['can_delete'] === null) {
            $invalid_properties[] = "'can_delete' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['content'] === null) {
            return false;
        }
        if ($this->container['created_by'] === null) {
            return false;
        }
        if ($this->container['created_at'] === null) {
            return false;
        }
        if ($this->container['edited'] === null) {
            return false;
        }
        if ($this->container['modified_by'] === null) {
            return false;
        }
        if ($this->container['modified_at'] === null) {
            return false;
        }
        if ($this->container['can_edit'] === null) {
            return false;
        }
        if ($this->container['can_delete'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets content
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets created_by
     * @return \Alfresco\Core\Model\Person
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     * @param \Alfresco\Core\Model\Person $created_by
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets edited
     * @return bool
     */
    public function getEdited()
    {
        return $this->container['edited'];
    }

    /**
     * Sets edited
     * @param bool $edited
     * @return $this
     */
    public function setEdited($edited)
    {
        $this->container['edited'] = $edited;

        return $this;
    }

    /**
     * Gets modified_by
     * @return \Alfresco\Core\Model\Person
     */
    public function getModifiedBy()
    {
        return $this->container['modified_by'];
    }

    /**
     * Sets modified_by
     * @param \Alfresco\Core\Model\Person $modified_by
     * @return $this
     */
    public function setModifiedBy($modified_by)
    {
        $this->container['modified_by'] = $modified_by;

        return $this;
    }

    /**
     * Gets modified_at
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->container['modified_at'];
    }

    /**
     * Sets modified_at
     * @param \DateTime $modified_at
     * @return $this
     */
    public function setModifiedAt($modified_at)
    {
        $this->container['modified_at'] = $modified_at;

        return $this;
    }

    /**
     * Gets can_edit
     * @return bool
     */
    public function getCanEdit()
    {
        return $this->container['can_edit'];
    }

    /**
     * Sets can_edit
     * @param bool $can_edit
     * @return $this
     */
    public function setCanEdit($can_edit)
    {
        $this->container['can_edit'] = $can_edit;

        return $this;
    }

    /**
     * Gets can_delete
     * @return bool
     */
    public function getCanDelete()
    {
        return $this->container['can_delete'];
    }

    /**
     * Sets can_delete
     * @param bool $can_delete
     * @return $this
     */
    public function setCanDelete($can_delete)
    {
        $this->container['can_delete'] = $can_delete;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Alfresco\Core\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Alfresco\Core\ObjectSerializer::sanitizeForSerialization($this));
    }
}

