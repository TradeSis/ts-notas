<?php
/**
 * MdfeSefazSeg
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
 * MdfeSefazSeg Class Doc Comment
 *
 * @category Class
 * @description Informações de Seguro da Carga.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazSeg implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazSeg';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inf_resp' => '\NuvemFiscal\Model\MdfeSefazInfResp',
        'inf_seg' => '\NuvemFiscal\Model\MdfeSefazInfSeg',
        'n_apol' => 'string',
        'n_aver' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inf_resp' => null,
        'inf_seg' => null,
        'n_apol' => null,
        'n_aver' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inf_resp' => false,
		'inf_seg' => false,
		'n_apol' => true,
		'n_aver' => false
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
        'inf_resp' => 'infResp',
        'inf_seg' => 'infSeg',
        'n_apol' => 'nApol',
        'n_aver' => 'nAver'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inf_resp' => 'setInfResp',
        'inf_seg' => 'setInfSeg',
        'n_apol' => 'setNApol',
        'n_aver' => 'setNAver'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inf_resp' => 'getInfResp',
        'inf_seg' => 'getInfSeg',
        'n_apol' => 'getNApol',
        'n_aver' => 'getNAver'
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
        $this->setIfExists('inf_resp', $data ?? [], null);
        $this->setIfExists('inf_seg', $data ?? [], null);
        $this->setIfExists('n_apol', $data ?? [], null);
        $this->setIfExists('n_aver', $data ?? [], null);
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

        if ($this->container['inf_resp'] === null) {
            $invalidProperties[] = "'inf_resp' can't be null";
        }
        if (!is_null($this->container['n_apol']) && (mb_strlen($this->container['n_apol']) > 20)) {
            $invalidProperties[] = "invalid value for 'n_apol', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['n_apol']) && (mb_strlen($this->container['n_apol']) < 1)) {
            $invalidProperties[] = "invalid value for 'n_apol', the character length must be bigger than or equal to 1.";
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
     * Gets inf_resp
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfResp
     */
    public function getInfResp()
    {
        return $this->container['inf_resp'];
    }

    /**
     * Sets inf_resp
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfResp $inf_resp inf_resp
     *
     * @return self
     */
    public function setInfResp($inf_resp)
    {
        if (is_null($inf_resp)) {
            throw new \InvalidArgumentException('non-nullable inf_resp cannot be null');
        }
        $this->container['inf_resp'] = $inf_resp;

        return $this;
    }

    /**
     * Gets inf_seg
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfSeg|null
     */
    public function getInfSeg()
    {
        return $this->container['inf_seg'];
    }

    /**
     * Sets inf_seg
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfSeg|null $inf_seg inf_seg
     *
     * @return self
     */
    public function setInfSeg($inf_seg)
    {
        if (is_null($inf_seg)) {
            throw new \InvalidArgumentException('non-nullable inf_seg cannot be null');
        }
        $this->container['inf_seg'] = $inf_seg;

        return $this;
    }

    /**
     * Gets n_apol
     *
     * @return string|null
     */
    public function getNApol()
    {
        return $this->container['n_apol'];
    }

    /**
     * Sets n_apol
     *
     * @param string|null $n_apol Número da Apólice.  Obrigatório pela lei 11.442/07 (RCTRC).
     *
     * @return self
     */
    public function setNApol($n_apol)
    {
        if (is_null($n_apol)) {
            array_push($this->openAPINullablesSetToNull, 'n_apol');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_apol', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($n_apol) && (mb_strlen($n_apol) > 20)) {
            throw new \InvalidArgumentException('invalid length for $n_apol when calling MdfeSefazSeg., must be smaller than or equal to 20.');
        }
        if (!is_null($n_apol) && (mb_strlen($n_apol) < 1)) {
            throw new \InvalidArgumentException('invalid length for $n_apol when calling MdfeSefazSeg., must be bigger than or equal to 1.');
        }

        $this->container['n_apol'] = $n_apol;

        return $this;
    }

    /**
     * Gets n_aver
     *
     * @return string[]|null
     */
    public function getNAver()
    {
        return $this->container['n_aver'];
    }

    /**
     * Sets n_aver
     *
     * @param string[]|null $n_aver Número da Averbação.  Informar as averbações do seguro.
     *
     * @return self
     */
    public function setNAver($n_aver)
    {
        if (is_null($n_aver)) {
            throw new \InvalidArgumentException('non-nullable n_aver cannot be null');
        }
        $this->container['n_aver'] = $n_aver;

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


