<?php
/**
 * CteSefazImp
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Nuvem Fiscal
 *
 * API para automação comercial e documentos fiscais.
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NuvemFiscal\Model;

use \ArrayAccess;
use \NuvemFiscal\ObjectSerializer;

/**
 * CteSefazImp Class Doc Comment
 *
 * @category Class
 * @description Informações relativas ao ICMS.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazImp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazImp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'icms00' => '\NuvemFiscal\Model\CteSefazICMS00',
        'icms20' => '\NuvemFiscal\Model\CteSefazICMS20',
        'icms45' => '\NuvemFiscal\Model\CteSefazICMS45',
        'icms60' => '\NuvemFiscal\Model\CteSefazICMS60',
        'icms90' => '\NuvemFiscal\Model\CteSefazICMS90',
        'icms_outra_uf' => '\NuvemFiscal\Model\CteSefazICMSOutraUF',
        'icmssn' => '\NuvemFiscal\Model\CteSefazICMSSN'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'icms00' => null,
        'icms20' => null,
        'icms45' => null,
        'icms60' => null,
        'icms90' => null,
        'icms_outra_uf' => null,
        'icmssn' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'icms00' => false,
		'icms20' => false,
		'icms45' => false,
		'icms60' => false,
		'icms90' => false,
		'icms_outra_uf' => false,
		'icmssn' => false
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
        'icms00' => 'ICMS00',
        'icms20' => 'ICMS20',
        'icms45' => 'ICMS45',
        'icms60' => 'ICMS60',
        'icms90' => 'ICMS90',
        'icms_outra_uf' => 'ICMSOutraUF',
        'icmssn' => 'ICMSSN'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'icms00' => 'setIcms00',
        'icms20' => 'setIcms20',
        'icms45' => 'setIcms45',
        'icms60' => 'setIcms60',
        'icms90' => 'setIcms90',
        'icms_outra_uf' => 'setIcmsOutraUf',
        'icmssn' => 'setIcmssn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'icms00' => 'getIcms00',
        'icms20' => 'getIcms20',
        'icms45' => 'getIcms45',
        'icms60' => 'getIcms60',
        'icms90' => 'getIcms90',
        'icms_outra_uf' => 'getIcmsOutraUf',
        'icmssn' => 'getIcmssn'
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
        $this->setIfExists('icms00', $data ?? [], null);
        $this->setIfExists('icms20', $data ?? [], null);
        $this->setIfExists('icms45', $data ?? [], null);
        $this->setIfExists('icms60', $data ?? [], null);
        $this->setIfExists('icms90', $data ?? [], null);
        $this->setIfExists('icms_outra_uf', $data ?? [], null);
        $this->setIfExists('icmssn', $data ?? [], null);
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
     * Gets icms00
     *
     * @return \NuvemFiscal\Model\CteSefazICMS00|null
     */
    public function getIcms00()
    {
        return $this->container['icms00'];
    }

    /**
     * Sets icms00
     *
     * @param \NuvemFiscal\Model\CteSefazICMS00|null $icms00 icms00
     *
     * @return self
     */
    public function setIcms00($icms00)
    {
        if (is_null($icms00)) {
            throw new \InvalidArgumentException('non-nullable icms00 cannot be null');
        }
        $this->container['icms00'] = $icms00;

        return $this;
    }

    /**
     * Gets icms20
     *
     * @return \NuvemFiscal\Model\CteSefazICMS20|null
     */
    public function getIcms20()
    {
        return $this->container['icms20'];
    }

    /**
     * Sets icms20
     *
     * @param \NuvemFiscal\Model\CteSefazICMS20|null $icms20 icms20
     *
     * @return self
     */
    public function setIcms20($icms20)
    {
        if (is_null($icms20)) {
            throw new \InvalidArgumentException('non-nullable icms20 cannot be null');
        }
        $this->container['icms20'] = $icms20;

        return $this;
    }

    /**
     * Gets icms45
     *
     * @return \NuvemFiscal\Model\CteSefazICMS45|null
     */
    public function getIcms45()
    {
        return $this->container['icms45'];
    }

    /**
     * Sets icms45
     *
     * @param \NuvemFiscal\Model\CteSefazICMS45|null $icms45 icms45
     *
     * @return self
     */
    public function setIcms45($icms45)
    {
        if (is_null($icms45)) {
            throw new \InvalidArgumentException('non-nullable icms45 cannot be null');
        }
        $this->container['icms45'] = $icms45;

        return $this;
    }

    /**
     * Gets icms60
     *
     * @return \NuvemFiscal\Model\CteSefazICMS60|null
     */
    public function getIcms60()
    {
        return $this->container['icms60'];
    }

    /**
     * Sets icms60
     *
     * @param \NuvemFiscal\Model\CteSefazICMS60|null $icms60 icms60
     *
     * @return self
     */
    public function setIcms60($icms60)
    {
        if (is_null($icms60)) {
            throw new \InvalidArgumentException('non-nullable icms60 cannot be null');
        }
        $this->container['icms60'] = $icms60;

        return $this;
    }

    /**
     * Gets icms90
     *
     * @return \NuvemFiscal\Model\CteSefazICMS90|null
     */
    public function getIcms90()
    {
        return $this->container['icms90'];
    }

    /**
     * Sets icms90
     *
     * @param \NuvemFiscal\Model\CteSefazICMS90|null $icms90 icms90
     *
     * @return self
     */
    public function setIcms90($icms90)
    {
        if (is_null($icms90)) {
            throw new \InvalidArgumentException('non-nullable icms90 cannot be null');
        }
        $this->container['icms90'] = $icms90;

        return $this;
    }

    /**
     * Gets icms_outra_uf
     *
     * @return \NuvemFiscal\Model\CteSefazICMSOutraUF|null
     */
    public function getIcmsOutraUf()
    {
        return $this->container['icms_outra_uf'];
    }

    /**
     * Sets icms_outra_uf
     *
     * @param \NuvemFiscal\Model\CteSefazICMSOutraUF|null $icms_outra_uf icms_outra_uf
     *
     * @return self
     */
    public function setIcmsOutraUf($icms_outra_uf)
    {
        if (is_null($icms_outra_uf)) {
            throw new \InvalidArgumentException('non-nullable icms_outra_uf cannot be null');
        }
        $this->container['icms_outra_uf'] = $icms_outra_uf;

        return $this;
    }

    /**
     * Gets icmssn
     *
     * @return \NuvemFiscal\Model\CteSefazICMSSN|null
     */
    public function getIcmssn()
    {
        return $this->container['icmssn'];
    }

    /**
     * Sets icmssn
     *
     * @param \NuvemFiscal\Model\CteSefazICMSSN|null $icmssn icmssn
     *
     * @return self
     */
    public function setIcmssn($icmssn)
    {
        if (is_null($icmssn)) {
            throw new \InvalidArgumentException('non-nullable icmssn cannot be null');
        }
        $this->container['icmssn'] = $icmssn;

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

