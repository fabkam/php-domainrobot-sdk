<?php
/**
 * DomainEnvelope
 *
 * PHP version 5
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Domainrobot JSON API
 *
 * Domainrobot JSON API for managing: Domains, SSL            Certificates, DNS and            much more.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Domainrobot\Model;

use \ArrayAccess;
use \Domainrobot\ObjectSerializer;

/**
 * DomainEnvelope Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainEnvelope implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DomainEnvelope';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'domain' => 'string',
        'idn' => 'string',
        'source' => '\Domainrobot\Model\DomainStudioDomainSource',
        'services' => '\Domainrobot\Model\DomainStudioService',
        'debugTime' => 'int',
        'portfolio' => 'bool',
        'forceDnsCheck' => 'bool',
        'onlyAvailable' => 'bool',
        'isPrereg' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'domain' => null,
        'idn' => null,
        'source' => null,
        'services' => null,
        'debugTime' => 'int64',
        'portfolio' => null,
        'forceDnsCheck' => null,
        'onlyAvailable' => null,
        'isPrereg' => null
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
        'domain' => 'domain',
        'idn' => 'idn',
        'source' => 'source',
        'services' => 'services',
        'debugTime' => 'debugTime',
        'portfolio' => 'portfolio',
        'forceDnsCheck' => 'forceDnsCheck',
        'onlyAvailable' => 'onlyAvailable',
        'isPrereg' => 'isPrereg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain' => 'setDomain',
        'idn' => 'setIdn',
        'source' => 'setSource',
        'services' => 'setServices',
        'debugTime' => 'setDebugTime',
        'portfolio' => 'setPortfolio',
        'forceDnsCheck' => 'setForceDnsCheck',
        'onlyAvailable' => 'setOnlyAvailable',
        'isPrereg' => 'setIsPrereg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain' => 'getDomain',
        'idn' => 'getIdn',
        'source' => 'getSource',
        'services' => 'getServices',
        'debugTime' => 'getDebugTime',
        'portfolio' => 'getPortfolio',
        'forceDnsCheck' => 'getForceDnsCheck',
        'onlyAvailable' => 'getOnlyAvailable',
        'isPrereg' => 'getIsPrereg'
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
        $this->container['domain'] = isset($data['domain']) ? $this->createData($data['domain'], 'domain')  : null;
        $this->container['idn'] = isset($data['idn']) ? $this->createData($data['idn'], 'idn')  : null;
        $this->container['source'] = isset($data['source']) ? $this->createData($data['source'], 'source')  : null;
        $this->container['services'] = isset($data['services']) ? $this->createData($data['services'], 'services')  : null;
        $this->container['debugTime'] = isset($data['debugTime']) ? $this->createData($data['debugTime'], 'debugTime')  : null;
        $this->container['portfolio'] = isset($data['portfolio']) ? $this->createData($data['portfolio'], 'portfolio')  : null;
        $this->container['forceDnsCheck'] = isset($data['forceDnsCheck']) ? $this->createData($data['forceDnsCheck'], 'forceDnsCheck')  : null;
        $this->container['onlyAvailable'] = isset($data['onlyAvailable']) ? $this->createData($data['onlyAvailable'], 'onlyAvailable')  : null;
        $this->container['isPrereg'] = isset($data['isPrereg']) ? $this->createData($data['isPrereg'], 'isPrereg')  : null;
    }

    /**
     * create data according to types;
     * non object types will just be returend as is:
     * object types will return an instance of themselves or and array of instances
     *
     * @param mixed[] $data
     * @param string $property
     * @return mixed
     */
    public function createData($data = null, $property)
    {
        if ($data === null) {
            return '';
        }
        $swaggerType = self::$swaggerTypes[$property];

        preg_match("/([\\\\\w\d]+)(\[\])?/", $swaggerType, $matches);

        // handle object types
        if (count($matches) > 0 && count($matches) < 3) {
            try {
                if (!is_array($data)) {
                    return $data;
                }
                
                $reflection = new \ReflectionClass($swaggerType);
                $reflectionInstance = $reflection->newInstance($data);

                return $reflectionInstance;
            } catch (\Exception $ex) {
                return $data;
            }
        } elseif (count($matches) >= 3) {
            // Object[]
            // arrays of objects have to be handled differently
            $reflectionInstances = [];
            foreach($data as $d){
                try {
                    if(!is_array($d)){
                        $reflectionInstances[] = $d;
                        continue;
                    }
                    $reflection = new \ReflectionClass(str_replace("[]", "", $swaggerType) );
                    $reflectionInstances[] = $reflection->newInstance($d);                   
                } catch (\Exception $ex) {
                    return $d;
                }

                return $reflectionInstances;
            }
        }

        return $data;
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
     * Validate all the properties in the 
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain The domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets idn
     *
     * @return string
     */
    public function getIdn()
    {
        return $this->container['idn'];
    }

    /**
     * Sets idn
     *
     * @param string $idn The unicode domain name
     *
     * @return $this
     */
    public function setIdn($idn)
    {
        $this->container['idn'] = $idn;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \Domainrobot\Model\DomainStudioDomainSource
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Domainrobot\Model\DomainStudioDomainSource $source Source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \Domainrobot\Model\DomainStudioService
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Domainrobot\Model\DomainStudioService $services Source
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets debugTime
     *
     * @return int
     */
    public function getDebugTime()
    {
        return $this->container['debugTime'];
    }

    /**
     * Sets debugTime
     *
     * @param int $debugTime The processing time for this domain.
     *
     * @return $this
     */
    public function setDebugTime($debugTime)
    {
        $this->container['debugTime'] = $debugTime;

        return $this;
    }

    /**
     * Gets portfolio
     *
     * @return bool
     */
    public function getPortfolio()
    {
        return $this->container['portfolio'];
    }

    /**
     * Sets portfolio
     *
     * @param bool $portfolio Defines if the user already owns this domain.
     *
     * @return $this
     */
    public function setPortfolio($portfolio)
    {
        $this->container['portfolio'] = $portfolio;

        return $this;
    }

    /**
     * Gets forceDnsCheck
     *
     * @return bool
     */
    public function getForceDnsCheck()
    {
        return $this->container['forceDnsCheck'];
    }

    /**
     * Sets forceDnsCheck
     *
     * @param bool $forceDnsCheck All whois checks will be done via dns check.
     *
     * @return $this
     */
    public function setForceDnsCheck($forceDnsCheck)
    {
        $this->container['forceDnsCheck'] = $forceDnsCheck;

        return $this;
    }

    /**
     * Gets onlyAvailable
     *
     * @return bool
     */
    public function getOnlyAvailable()
    {
        return $this->container['onlyAvailable'];
    }

    /**
     * Sets onlyAvailable
     *
     * @param bool $onlyAvailable Defines whether to return only free domain names when service WHOIS is used for a source.
     *
     * @return $this
     */
    public function setOnlyAvailable($onlyAvailable)
    {
        $this->container['onlyAvailable'] = $onlyAvailable;

        return $this;
    }

    /**
     * Gets isPrereg
     *
     * @return bool
     */
    public function getIsPrereg()
    {
        return $this->container['isPrereg'];
    }

    /**
     * Sets isPrereg
     *
     * @param bool $isPrereg Defines whether this domain name is only available for preregistration.
     *
     * @return $this
     */
    public function setIsPrereg($isPrereg)
    {
        $this->container['isPrereg'] = $isPrereg;

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
    
    /**
     * @param boolean $removeEmptyValues [remove all empty values if true]
     * @param array $retrieveKeys [list of keys to get back in any case]
     * 
     * Examples:
     * toArray() => returns only non empty values
     * toArray(true) => returns all values
     */
    public function toArray($retrieveAllValues = false){
        $container = $this->container;

        $cleanContainer = [];
        foreach ($container as $key => &$value) {
            if (
                $retrieveAllValues === false && 
                empty($value) === true &&
                $value !== false &&
                $value !== '' &&
                $value !== 0 &&
                $value !== '0'
            ) {
                unset($container[$key]);
                continue;
            }
            
            if (gettype($value) === "object") {
                if(method_exists($value, 'toArray')) {
                    $value = $value->toArray($retrieveAllValues);
                }else{
                    if(get_class($value) === "DateTime"){
                        $value = $value->format("Y-m-d\TH:i:s");
                    }else{
                        $value = (array) $value;
                    }
                }
            }
            if (is_array($value)) {
                foreach ($value as &$v) {
                    if (gettype($v) === "object") {
                        $v = $v->toArray($retrieveAllValues);
                    }
                }
            }
            $cleanContainer[self::$attributeMap[$key]] = $value;
        };
        return $cleanContainer;
    }
}


