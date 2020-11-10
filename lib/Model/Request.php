<?php
/**
 * Request
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Nexus Repository Manager REST API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.16.1-02
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Apiida\Nexus\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Request Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'system_information' => 'bool',
        'thread_dump' => 'bool',
        'metrics' => 'bool',
        'configuration' => 'bool',
        'security' => 'bool',
        'log' => 'bool',
        'task_log' => 'bool',
        'audit_log' => 'bool',
        'jmx' => 'bool',
        'limit_file_sizes' => 'bool',
        'limit_zip_size' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'system_information' => null,
        'thread_dump' => null,
        'metrics' => null,
        'configuration' => null,
        'security' => null,
        'log' => null,
        'task_log' => null,
        'audit_log' => null,
        'jmx' => null,
        'limit_file_sizes' => null,
        'limit_zip_size' => null
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
        'system_information' => 'systemInformation',
        'thread_dump' => 'threadDump',
        'metrics' => 'metrics',
        'configuration' => 'configuration',
        'security' => 'security',
        'log' => 'log',
        'task_log' => 'taskLog',
        'audit_log' => 'auditLog',
        'jmx' => 'jmx',
        'limit_file_sizes' => 'limitFileSizes',
        'limit_zip_size' => 'limitZipSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'system_information' => 'setSystemInformation',
        'thread_dump' => 'setThreadDump',
        'metrics' => 'setMetrics',
        'configuration' => 'setConfiguration',
        'security' => 'setSecurity',
        'log' => 'setLog',
        'task_log' => 'setTaskLog',
        'audit_log' => 'setAuditLog',
        'jmx' => 'setJmx',
        'limit_file_sizes' => 'setLimitFileSizes',
        'limit_zip_size' => 'setLimitZipSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'system_information' => 'getSystemInformation',
        'thread_dump' => 'getThreadDump',
        'metrics' => 'getMetrics',
        'configuration' => 'getConfiguration',
        'security' => 'getSecurity',
        'log' => 'getLog',
        'task_log' => 'getTaskLog',
        'audit_log' => 'getAuditLog',
        'jmx' => 'getJmx',
        'limit_file_sizes' => 'getLimitFileSizes',
        'limit_zip_size' => 'getLimitZipSize'
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
        $this->container['system_information'] = isset($data['system_information']) ? $data['system_information'] : null;
        $this->container['thread_dump'] = isset($data['thread_dump']) ? $data['thread_dump'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['security'] = isset($data['security']) ? $data['security'] : null;
        $this->container['log'] = isset($data['log']) ? $data['log'] : null;
        $this->container['task_log'] = isset($data['task_log']) ? $data['task_log'] : null;
        $this->container['audit_log'] = isset($data['audit_log']) ? $data['audit_log'] : null;
        $this->container['jmx'] = isset($data['jmx']) ? $data['jmx'] : null;
        $this->container['limit_file_sizes'] = isset($data['limit_file_sizes']) ? $data['limit_file_sizes'] : null;
        $this->container['limit_zip_size'] = isset($data['limit_zip_size']) ? $data['limit_zip_size'] : null;
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
     * Gets system_information
     *
     * @return bool
     */
    public function getSystemInformation()
    {
        return $this->container['system_information'];
    }

    /**
     * Sets system_information
     *
     * @param bool $system_information system_information
     *
     * @return $this
     */
    public function setSystemInformation($system_information)
    {
        $this->container['system_information'] = $system_information;

        return $this;
    }

    /**
     * Gets thread_dump
     *
     * @return bool
     */
    public function getThreadDump()
    {
        return $this->container['thread_dump'];
    }

    /**
     * Sets thread_dump
     *
     * @param bool $thread_dump thread_dump
     *
     * @return $this
     */
    public function setThreadDump($thread_dump)
    {
        $this->container['thread_dump'] = $thread_dump;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return bool
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param bool $metrics metrics
     *
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return bool
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param bool $configuration configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets security
     *
     * @return bool
     */
    public function getSecurity()
    {
        return $this->container['security'];
    }

    /**
     * Sets security
     *
     * @param bool $security security
     *
     * @return $this
     */
    public function setSecurity($security)
    {
        $this->container['security'] = $security;

        return $this;
    }

    /**
     * Gets log
     *
     * @return bool
     */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
     * Sets log
     *
     * @param bool $log log
     *
     * @return $this
     */
    public function setLog($log)
    {
        $this->container['log'] = $log;

        return $this;
    }

    /**
     * Gets task_log
     *
     * @return bool
     */
    public function getTaskLog()
    {
        return $this->container['task_log'];
    }

    /**
     * Sets task_log
     *
     * @param bool $task_log task_log
     *
     * @return $this
     */
    public function setTaskLog($task_log)
    {
        $this->container['task_log'] = $task_log;

        return $this;
    }

    /**
     * Gets audit_log
     *
     * @return bool
     */
    public function getAuditLog()
    {
        return $this->container['audit_log'];
    }

    /**
     * Sets audit_log
     *
     * @param bool $audit_log audit_log
     *
     * @return $this
     */
    public function setAuditLog($audit_log)
    {
        $this->container['audit_log'] = $audit_log;

        return $this;
    }

    /**
     * Gets jmx
     *
     * @return bool
     */
    public function getJmx()
    {
        return $this->container['jmx'];
    }

    /**
     * Sets jmx
     *
     * @param bool $jmx jmx
     *
     * @return $this
     */
    public function setJmx($jmx)
    {
        $this->container['jmx'] = $jmx;

        return $this;
    }

    /**
     * Gets limit_file_sizes
     *
     * @return bool
     */
    public function getLimitFileSizes()
    {
        return $this->container['limit_file_sizes'];
    }

    /**
     * Sets limit_file_sizes
     *
     * @param bool $limit_file_sizes limit_file_sizes
     *
     * @return $this
     */
    public function setLimitFileSizes($limit_file_sizes)
    {
        $this->container['limit_file_sizes'] = $limit_file_sizes;

        return $this;
    }

    /**
     * Gets limit_zip_size
     *
     * @return bool
     */
    public function getLimitZipSize()
    {
        return $this->container['limit_zip_size'];
    }

    /**
     * Sets limit_zip_size
     *
     * @param bool $limit_zip_size limit_zip_size
     *
     * @return $this
     */
    public function setLimitZipSize($limit_zip_size)
    {
        $this->container['limit_zip_size'] = $limit_zip_size;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


