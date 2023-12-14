<?php
/**
 * NfeSefazEncerrante
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
 * NfeSefazEncerrante Class Doc Comment
 *
 * @category Class
 * @description Informações do grupo de \&quot;encerrante\&quot;.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazEncerrante implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazEncerrante';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'n_bico' => 'int',
        'n_bomba' => 'int',
        'n_tanque' => 'int',
        'v_enc_ini' => 'float',
        'v_enc_fin' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'n_bico' => null,
        'n_bomba' => null,
        'n_tanque' => null,
        'v_enc_ini' => null,
        'v_enc_fin' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'n_bico' => true,
		'n_bomba' => true,
		'n_tanque' => true,
		'v_enc_ini' => true,
		'v_enc_fin' => true
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
        'n_bico' => 'nBico',
        'n_bomba' => 'nBomba',
        'n_tanque' => 'nTanque',
        'v_enc_ini' => 'vEncIni',
        'v_enc_fin' => 'vEncFin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'n_bico' => 'setNBico',
        'n_bomba' => 'setNBomba',
        'n_tanque' => 'setNTanque',
        'v_enc_ini' => 'setVEncIni',
        'v_enc_fin' => 'setVEncFin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'n_bico' => 'getNBico',
        'n_bomba' => 'getNBomba',
        'n_tanque' => 'getNTanque',
        'v_enc_ini' => 'getVEncIni',
        'v_enc_fin' => 'getVEncFin'
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
        $this->setIfExists('n_bico', $data ?? [], null);
        $this->setIfExists('n_bomba', $data ?? [], null);
        $this->setIfExists('n_tanque', $data ?? [], null);
        $this->setIfExists('v_enc_ini', $data ?? [], null);
        $this->setIfExists('v_enc_fin', $data ?? [], null);
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

        if ($this->container['n_bico'] === null) {
            $invalidProperties[] = "'n_bico' can't be null";
        }
        if (($this->container['n_bico'] > 999)) {
            $invalidProperties[] = "invalid value for 'n_bico', must be smaller than or equal to 999.";
        }

        if (($this->container['n_bico'] < 0)) {
            $invalidProperties[] = "invalid value for 'n_bico', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['n_bomba']) && ($this->container['n_bomba'] > 999)) {
            $invalidProperties[] = "invalid value for 'n_bomba', must be smaller than or equal to 999.";
        }

        if (!is_null($this->container['n_bomba']) && ($this->container['n_bomba'] < 0)) {
            $invalidProperties[] = "invalid value for 'n_bomba', must be bigger than or equal to 0.";
        }

        if ($this->container['n_tanque'] === null) {
            $invalidProperties[] = "'n_tanque' can't be null";
        }
        if (($this->container['n_tanque'] > 999)) {
            $invalidProperties[] = "invalid value for 'n_tanque', must be smaller than or equal to 999.";
        }

        if (($this->container['n_tanque'] < 0)) {
            $invalidProperties[] = "invalid value for 'n_tanque', must be bigger than or equal to 0.";
        }

        if ($this->container['v_enc_ini'] === null) {
            $invalidProperties[] = "'v_enc_ini' can't be null";
        }
        if ($this->container['v_enc_fin'] === null) {
            $invalidProperties[] = "'v_enc_fin' can't be null";
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
     * Gets n_bico
     *
     * @return int
     */
    public function getNBico()
    {
        return $this->container['n_bico'];
    }

    /**
     * Sets n_bico
     *
     * @param int $n_bico Numero de identificação do Bico utilizado no abastecimento.
     *
     * @return self
     */
    public function setNBico($n_bico)
    {
        if (is_null($n_bico)) {
            array_push($this->openAPINullablesSetToNull, 'n_bico');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_bico', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_bico) && ($n_bico > 999)) {
            throw new \InvalidArgumentException('invalid value for $n_bico when calling NfeSefazEncerrante., must be smaller than or equal to 999.');
        }
        if (!is_null($n_bico) && ($n_bico < 0)) {
            throw new \InvalidArgumentException('invalid value for $n_bico when calling NfeSefazEncerrante., must be bigger than or equal to 0.');
        }

        $this->container['n_bico'] = $n_bico;

        return $this;
    }

    /**
     * Gets n_bomba
     *
     * @return int|null
     */
    public function getNBomba()
    {
        return $this->container['n_bomba'];
    }

    /**
     * Sets n_bomba
     *
     * @param int|null $n_bomba Numero de identificação da bomba ao qual o bico está interligado.
     *
     * @return self
     */
    public function setNBomba($n_bomba)
    {
        if (is_null($n_bomba)) {
            array_push($this->openAPINullablesSetToNull, 'n_bomba');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_bomba', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_bomba) && ($n_bomba > 999)) {
            throw new \InvalidArgumentException('invalid value for $n_bomba when calling NfeSefazEncerrante., must be smaller than or equal to 999.');
        }
        if (!is_null($n_bomba) && ($n_bomba < 0)) {
            throw new \InvalidArgumentException('invalid value for $n_bomba when calling NfeSefazEncerrante., must be bigger than or equal to 0.');
        }

        $this->container['n_bomba'] = $n_bomba;

        return $this;
    }

    /**
     * Gets n_tanque
     *
     * @return int
     */
    public function getNTanque()
    {
        return $this->container['n_tanque'];
    }

    /**
     * Sets n_tanque
     *
     * @param int $n_tanque Numero de identificação do tanque ao qual o bico está interligado.
     *
     * @return self
     */
    public function setNTanque($n_tanque)
    {
        if (is_null($n_tanque)) {
            array_push($this->openAPINullablesSetToNull, 'n_tanque');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_tanque', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_tanque) && ($n_tanque > 999)) {
            throw new \InvalidArgumentException('invalid value for $n_tanque when calling NfeSefazEncerrante., must be smaller than or equal to 999.');
        }
        if (!is_null($n_tanque) && ($n_tanque < 0)) {
            throw new \InvalidArgumentException('invalid value for $n_tanque when calling NfeSefazEncerrante., must be bigger than or equal to 0.');
        }

        $this->container['n_tanque'] = $n_tanque;

        return $this;
    }

    /**
     * Gets v_enc_ini
     *
     * @return float
     */
    public function getVEncIni()
    {
        return $this->container['v_enc_ini'];
    }

    /**
     * Sets v_enc_ini
     *
     * @param float $v_enc_ini Valor do Encerrante no ínicio do abastecimento.
     *
     * @return self
     */
    public function setVEncIni($v_enc_ini)
    {
        if (is_null($v_enc_ini)) {
            array_push($this->openAPINullablesSetToNull, 'v_enc_ini');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_enc_ini', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_enc_ini'] = $v_enc_ini;

        return $this;
    }

    /**
     * Gets v_enc_fin
     *
     * @return float
     */
    public function getVEncFin()
    {
        return $this->container['v_enc_fin'];
    }

    /**
     * Sets v_enc_fin
     *
     * @param float $v_enc_fin Valor do Encerrante no final do abastecimento.
     *
     * @return self
     */
    public function setVEncFin($v_enc_fin)
    {
        if (is_null($v_enc_fin)) {
            array_push($this->openAPINullablesSetToNull, 'v_enc_fin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_enc_fin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_enc_fin'] = $v_enc_fin;

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

