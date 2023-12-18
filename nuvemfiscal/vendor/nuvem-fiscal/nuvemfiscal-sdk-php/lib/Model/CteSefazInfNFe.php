<?php
/**
 * CteSefazInfNFe
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
 * CteSefazInfNFe Class Doc Comment
 *
 * @category Class
 * @description Informações das NF-e.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazInfNFe implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazInfNFe';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'chave' => 'string',
        'pin' => 'string',
        'd_prev' => '\DateTime',
        'inf_unid_carga' => '\NuvemFiscal\Model\CteSefazUnidCarga[]',
        'inf_unid_transp' => '\NuvemFiscal\Model\CteSefazUnidadeTransp[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'chave' => null,
        'pin' => null,
        'd_prev' => 'date',
        'inf_unid_carga' => null,
        'inf_unid_transp' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'chave' => true,
		'pin' => true,
		'd_prev' => true,
		'inf_unid_carga' => false,
		'inf_unid_transp' => false
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
        'chave' => 'chave',
        'pin' => 'PIN',
        'd_prev' => 'dPrev',
        'inf_unid_carga' => 'infUnidCarga',
        'inf_unid_transp' => 'infUnidTransp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chave' => 'setChave',
        'pin' => 'setPin',
        'd_prev' => 'setDPrev',
        'inf_unid_carga' => 'setInfUnidCarga',
        'inf_unid_transp' => 'setInfUnidTransp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chave' => 'getChave',
        'pin' => 'getPin',
        'd_prev' => 'getDPrev',
        'inf_unid_carga' => 'getInfUnidCarga',
        'inf_unid_transp' => 'getInfUnidTransp'
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
        $this->setIfExists('chave', $data ?? [], null);
        $this->setIfExists('pin', $data ?? [], null);
        $this->setIfExists('d_prev', $data ?? [], null);
        $this->setIfExists('inf_unid_carga', $data ?? [], null);
        $this->setIfExists('inf_unid_transp', $data ?? [], null);
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

        if ($this->container['chave'] === null) {
            $invalidProperties[] = "'chave' can't be null";
        }
        if ((mb_strlen($this->container['chave']) > 44)) {
            $invalidProperties[] = "invalid value for 'chave', the character length must be smaller than or equal to 44.";
        }

        if (!is_null($this->container['pin']) && (mb_strlen($this->container['pin']) > 9)) {
            $invalidProperties[] = "invalid value for 'pin', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['pin']) && (mb_strlen($this->container['pin']) < 2)) {
            $invalidProperties[] = "invalid value for 'pin', the character length must be bigger than or equal to 2.";
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
     * Gets chave
     *
     * @return string
     */
    public function getChave()
    {
        return $this->container['chave'];
    }

    /**
     * Sets chave
     *
     * @param string $chave Chave de acesso da NF-e.
     *
     * @return self
     */
    public function setChave($chave)
    {
        if (is_null($chave)) {
            array_push($this->openAPINullablesSetToNull, 'chave');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('chave', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($chave) && (mb_strlen($chave) > 44)) {
            throw new \InvalidArgumentException('invalid length for $chave when calling CteSefazInfNFe., must be smaller than or equal to 44.');
        }

        $this->container['chave'] = $chave;

        return $this;
    }

    /**
     * Gets pin
     *
     * @return string|null
     */
    public function getPin()
    {
        return $this->container['pin'];
    }

    /**
     * Sets pin
     *
     * @param string|null $pin PIN SUFRAMA.  PIN atribuído pela SUFRAMA para a operação.
     *
     * @return self
     */
    public function setPin($pin)
    {
        if (is_null($pin)) {
            array_push($this->openAPINullablesSetToNull, 'pin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($pin) && (mb_strlen($pin) > 9)) {
            throw new \InvalidArgumentException('invalid length for $pin when calling CteSefazInfNFe., must be smaller than or equal to 9.');
        }
        if (!is_null($pin) && (mb_strlen($pin) < 2)) {
            throw new \InvalidArgumentException('invalid length for $pin when calling CteSefazInfNFe., must be bigger than or equal to 2.');
        }

        $this->container['pin'] = $pin;

        return $this;
    }

    /**
     * Gets d_prev
     *
     * @return \DateTime|null
     */
    public function getDPrev()
    {
        return $this->container['d_prev'];
    }

    /**
     * Sets d_prev
     *
     * @param \DateTime|null $d_prev Data prevista de entrega.  Formato AAAA-MM-DD.
     *
     * @return self
     */
    public function setDPrev($d_prev)
    {
        if (is_null($d_prev)) {
            array_push($this->openAPINullablesSetToNull, 'd_prev');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('d_prev', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['d_prev'] = $d_prev;

        return $this;
    }

    /**
     * Gets inf_unid_carga
     *
     * @return \NuvemFiscal\Model\CteSefazUnidCarga[]|null
     */
    public function getInfUnidCarga()
    {
        return $this->container['inf_unid_carga'];
    }

    /**
     * Sets inf_unid_carga
     *
     * @param \NuvemFiscal\Model\CteSefazUnidCarga[]|null $inf_unid_carga inf_unid_carga
     *
     * @return self
     */
    public function setInfUnidCarga($inf_unid_carga)
    {
        if (is_null($inf_unid_carga)) {
            throw new \InvalidArgumentException('non-nullable inf_unid_carga cannot be null');
        }
        $this->container['inf_unid_carga'] = $inf_unid_carga;

        return $this;
    }

    /**
     * Gets inf_unid_transp
     *
     * @return \NuvemFiscal\Model\CteSefazUnidadeTransp[]|null
     */
    public function getInfUnidTransp()
    {
        return $this->container['inf_unid_transp'];
    }

    /**
     * Sets inf_unid_transp
     *
     * @param \NuvemFiscal\Model\CteSefazUnidadeTransp[]|null $inf_unid_transp inf_unid_transp
     *
     * @return self
     */
    public function setInfUnidTransp($inf_unid_transp)
    {
        if (is_null($inf_unid_transp)) {
            throw new \InvalidArgumentException('non-nullable inf_unid_transp cannot be null');
        }
        $this->container['inf_unid_transp'] = $inf_unid_transp;

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


