<?php
/**
 * NfeSefazRastro
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
 * NfeSefazRastro Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazRastro implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazRastro';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'n_lote' => 'string',
        'q_lote' => 'float',
        'd_fab' => '\DateTime',
        'd_val' => '\DateTime',
        'c_agreg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'n_lote' => null,
        'q_lote' => null,
        'd_fab' => 'date',
        'd_val' => 'date',
        'c_agreg' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'n_lote' => true,
		'q_lote' => true,
		'd_fab' => true,
		'd_val' => true,
		'c_agreg' => true
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
        'n_lote' => 'nLote',
        'q_lote' => 'qLote',
        'd_fab' => 'dFab',
        'd_val' => 'dVal',
        'c_agreg' => 'cAgreg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'n_lote' => 'setNLote',
        'q_lote' => 'setQLote',
        'd_fab' => 'setDFab',
        'd_val' => 'setDVal',
        'c_agreg' => 'setCAgreg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'n_lote' => 'getNLote',
        'q_lote' => 'getQLote',
        'd_fab' => 'getDFab',
        'd_val' => 'getDVal',
        'c_agreg' => 'getCAgreg'
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
        $this->setIfExists('n_lote', $data ?? [], null);
        $this->setIfExists('q_lote', $data ?? [], null);
        $this->setIfExists('d_fab', $data ?? [], null);
        $this->setIfExists('d_val', $data ?? [], null);
        $this->setIfExists('c_agreg', $data ?? [], null);
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

        if ($this->container['n_lote'] === null) {
            $invalidProperties[] = "'n_lote' can't be null";
        }
        if ((mb_strlen($this->container['n_lote']) > 20)) {
            $invalidProperties[] = "invalid value for 'n_lote', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['n_lote']) < 1)) {
            $invalidProperties[] = "invalid value for 'n_lote', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['q_lote'] === null) {
            $invalidProperties[] = "'q_lote' can't be null";
        }
        if ($this->container['d_fab'] === null) {
            $invalidProperties[] = "'d_fab' can't be null";
        }
        if ($this->container['d_val'] === null) {
            $invalidProperties[] = "'d_val' can't be null";
        }
        if (!is_null($this->container['c_agreg']) && (mb_strlen($this->container['c_agreg']) > 20)) {
            $invalidProperties[] = "invalid value for 'c_agreg', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['c_agreg']) && (mb_strlen($this->container['c_agreg']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_agreg', the character length must be bigger than or equal to 1.";
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
     * Gets n_lote
     *
     * @return string
     */
    public function getNLote()
    {
        return $this->container['n_lote'];
    }

    /**
     * Sets n_lote
     *
     * @param string $n_lote Número do lote do produto.
     *
     * @return self
     */
    public function setNLote($n_lote)
    {
        if (is_null($n_lote)) {
            array_push($this->openAPINullablesSetToNull, 'n_lote');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_lote', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($n_lote) && (mb_strlen($n_lote) > 20)) {
            throw new \InvalidArgumentException('invalid length for $n_lote when calling NfeSefazRastro., must be smaller than or equal to 20.');
        }
        if (!is_null($n_lote) && (mb_strlen($n_lote) < 1)) {
            throw new \InvalidArgumentException('invalid length for $n_lote when calling NfeSefazRastro., must be bigger than or equal to 1.');
        }

        $this->container['n_lote'] = $n_lote;

        return $this;
    }

    /**
     * Gets q_lote
     *
     * @return float
     */
    public function getQLote()
    {
        return $this->container['q_lote'];
    }

    /**
     * Sets q_lote
     *
     * @param float $q_lote Quantidade de produto no lote.
     *
     * @return self
     */
    public function setQLote($q_lote)
    {
        if (is_null($q_lote)) {
            array_push($this->openAPINullablesSetToNull, 'q_lote');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_lote', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['q_lote'] = $q_lote;

        return $this;
    }

    /**
     * Gets d_fab
     *
     * @return \DateTime
     */
    public function getDFab()
    {
        return $this->container['d_fab'];
    }

    /**
     * Sets d_fab
     *
     * @param \DateTime $d_fab Data de fabricação/produção. Formato \"AAAA-MM-DD\".
     *
     * @return self
     */
    public function setDFab($d_fab)
    {
        if (is_null($d_fab)) {
            array_push($this->openAPINullablesSetToNull, 'd_fab');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('d_fab', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['d_fab'] = $d_fab;

        return $this;
    }

    /**
     * Gets d_val
     *
     * @return \DateTime
     */
    public function getDVal()
    {
        return $this->container['d_val'];
    }

    /**
     * Sets d_val
     *
     * @param \DateTime $d_val Data de validade. Informar o último dia do mês caso a validade não especifique o dia. Formato \"AAAA-MM-DD\".
     *
     * @return self
     */
    public function setDVal($d_val)
    {
        if (is_null($d_val)) {
            array_push($this->openAPINullablesSetToNull, 'd_val');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('d_val', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['d_val'] = $d_val;

        return $this;
    }

    /**
     * Gets c_agreg
     *
     * @return string|null
     */
    public function getCAgreg()
    {
        return $this->container['c_agreg'];
    }

    /**
     * Sets c_agreg
     *
     * @param string|null $c_agreg c_agreg
     *
     * @return self
     */
    public function setCAgreg($c_agreg)
    {
        if (is_null($c_agreg)) {
            array_push($this->openAPINullablesSetToNull, 'c_agreg');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_agreg', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_agreg) && (mb_strlen($c_agreg) > 20)) {
            throw new \InvalidArgumentException('invalid length for $c_agreg when calling NfeSefazRastro., must be smaller than or equal to 20.');
        }
        if (!is_null($c_agreg) && (mb_strlen($c_agreg) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_agreg when calling NfeSefazRastro., must be bigger than or equal to 1.');
        }

        $this->container['c_agreg'] = $c_agreg;

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

