<?php
/**
 * MdfeSefazVeicTracao
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
 * MdfeSefazVeicTracao Class Doc Comment
 *
 * @category Class
 * @description Dados do Veículo com a Tração.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazVeicTracao implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazVeicTracao';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c_int' => 'string',
        'placa' => 'string',
        'renavam' => 'string',
        'tara' => 'int',
        'cap_kg' => 'int',
        'cap_m3' => 'int',
        'prop' => '\NuvemFiscal\Model\MdfeSefazProp',
        'condutor' => '\NuvemFiscal\Model\MdfeSefazCondutor[]',
        'tp_rod' => 'string',
        'tp_car' => 'string',
        'uf' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'c_int' => null,
        'placa' => null,
        'renavam' => null,
        'tara' => null,
        'cap_kg' => null,
        'cap_m3' => null,
        'prop' => null,
        'condutor' => null,
        'tp_rod' => null,
        'tp_car' => null,
        'uf' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'c_int' => true,
		'placa' => true,
		'renavam' => true,
		'tara' => true,
		'cap_kg' => true,
		'cap_m3' => true,
		'prop' => false,
		'condutor' => false,
		'tp_rod' => true,
		'tp_car' => true,
		'uf' => true
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
        'c_int' => 'cInt',
        'placa' => 'placa',
        'renavam' => 'RENAVAM',
        'tara' => 'tara',
        'cap_kg' => 'capKG',
        'cap_m3' => 'capM3',
        'prop' => 'prop',
        'condutor' => 'condutor',
        'tp_rod' => 'tpRod',
        'tp_car' => 'tpCar',
        'uf' => 'UF'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_int' => 'setCInt',
        'placa' => 'setPlaca',
        'renavam' => 'setRenavam',
        'tara' => 'setTara',
        'cap_kg' => 'setCapKg',
        'cap_m3' => 'setCapM3',
        'prop' => 'setProp',
        'condutor' => 'setCondutor',
        'tp_rod' => 'setTpRod',
        'tp_car' => 'setTpCar',
        'uf' => 'setUf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_int' => 'getCInt',
        'placa' => 'getPlaca',
        'renavam' => 'getRenavam',
        'tara' => 'getTara',
        'cap_kg' => 'getCapKg',
        'cap_m3' => 'getCapM3',
        'prop' => 'getProp',
        'condutor' => 'getCondutor',
        'tp_rod' => 'getTpRod',
        'tp_car' => 'getTpCar',
        'uf' => 'getUf'
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
        $this->setIfExists('c_int', $data ?? [], null);
        $this->setIfExists('placa', $data ?? [], null);
        $this->setIfExists('renavam', $data ?? [], null);
        $this->setIfExists('tara', $data ?? [], null);
        $this->setIfExists('cap_kg', $data ?? [], null);
        $this->setIfExists('cap_m3', $data ?? [], null);
        $this->setIfExists('prop', $data ?? [], null);
        $this->setIfExists('condutor', $data ?? [], null);
        $this->setIfExists('tp_rod', $data ?? [], null);
        $this->setIfExists('tp_car', $data ?? [], null);
        $this->setIfExists('uf', $data ?? [], null);
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

        if (!is_null($this->container['c_int']) && (mb_strlen($this->container['c_int']) > 10)) {
            $invalidProperties[] = "invalid value for 'c_int', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['c_int']) && (mb_strlen($this->container['c_int']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_int', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['placa'] === null) {
            $invalidProperties[] = "'placa' can't be null";
        }
        if (!is_null($this->container['renavam']) && (mb_strlen($this->container['renavam']) > 11)) {
            $invalidProperties[] = "invalid value for 'renavam', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['renavam']) && (mb_strlen($this->container['renavam']) < 9)) {
            $invalidProperties[] = "invalid value for 'renavam', the character length must be bigger than or equal to 9.";
        }

        if ($this->container['tara'] === null) {
            $invalidProperties[] = "'tara' can't be null";
        }
        if (($this->container['tara'] > 999999)) {
            $invalidProperties[] = "invalid value for 'tara', must be smaller than or equal to 999999.";
        }

        if (($this->container['tara'] < 0)) {
            $invalidProperties[] = "invalid value for 'tara', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['cap_kg']) && ($this->container['cap_kg'] > 999999)) {
            $invalidProperties[] = "invalid value for 'cap_kg', must be smaller than or equal to 999999.";
        }

        if (!is_null($this->container['cap_kg']) && ($this->container['cap_kg'] < 0)) {
            $invalidProperties[] = "invalid value for 'cap_kg', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['cap_m3']) && ($this->container['cap_m3'] > 999)) {
            $invalidProperties[] = "invalid value for 'cap_m3', must be smaller than or equal to 999.";
        }

        if (!is_null($this->container['cap_m3']) && ($this->container['cap_m3'] < 0)) {
            $invalidProperties[] = "invalid value for 'cap_m3', must be bigger than or equal to 0.";
        }

        if ($this->container['condutor'] === null) {
            $invalidProperties[] = "'condutor' can't be null";
        }
        if ($this->container['tp_rod'] === null) {
            $invalidProperties[] = "'tp_rod' can't be null";
        }
        if ($this->container['tp_car'] === null) {
            $invalidProperties[] = "'tp_car' can't be null";
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
     * Gets c_int
     *
     * @return string|null
     */
    public function getCInt()
    {
        return $this->container['c_int'];
    }

    /**
     * Sets c_int
     *
     * @param string|null $c_int Código interno do veículo.
     *
     * @return self
     */
    public function setCInt($c_int)
    {
        if (is_null($c_int)) {
            array_push($this->openAPINullablesSetToNull, 'c_int');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_int', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_int) && (mb_strlen($c_int) > 10)) {
            throw new \InvalidArgumentException('invalid length for $c_int when calling MdfeSefazVeicTracao., must be smaller than or equal to 10.');
        }
        if (!is_null($c_int) && (mb_strlen($c_int) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_int when calling MdfeSefazVeicTracao., must be bigger than or equal to 1.');
        }

        $this->container['c_int'] = $c_int;

        return $this;
    }

    /**
     * Gets placa
     *
     * @return string
     */
    public function getPlaca()
    {
        return $this->container['placa'];
    }

    /**
     * Sets placa
     *
     * @param string $placa Placa do veículo.
     *
     * @return self
     */
    public function setPlaca($placa)
    {
        if (is_null($placa)) {
            array_push($this->openAPINullablesSetToNull, 'placa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('placa', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['placa'] = $placa;

        return $this;
    }

    /**
     * Gets renavam
     *
     * @return string|null
     */
    public function getRenavam()
    {
        return $this->container['renavam'];
    }

    /**
     * Sets renavam
     *
     * @param string|null $renavam RENAVAM do veículo.
     *
     * @return self
     */
    public function setRenavam($renavam)
    {
        if (is_null($renavam)) {
            array_push($this->openAPINullablesSetToNull, 'renavam');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('renavam', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($renavam) && (mb_strlen($renavam) > 11)) {
            throw new \InvalidArgumentException('invalid length for $renavam when calling MdfeSefazVeicTracao., must be smaller than or equal to 11.');
        }
        if (!is_null($renavam) && (mb_strlen($renavam) < 9)) {
            throw new \InvalidArgumentException('invalid length for $renavam when calling MdfeSefazVeicTracao., must be bigger than or equal to 9.');
        }

        $this->container['renavam'] = $renavam;

        return $this;
    }

    /**
     * Gets tara
     *
     * @return int
     */
    public function getTara()
    {
        return $this->container['tara'];
    }

    /**
     * Sets tara
     *
     * @param int $tara Tara em KG.
     *
     * @return self
     */
    public function setTara($tara)
    {
        if (is_null($tara)) {
            array_push($this->openAPINullablesSetToNull, 'tara');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tara', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($tara) && ($tara > 999999)) {
            throw new \InvalidArgumentException('invalid value for $tara when calling MdfeSefazVeicTracao., must be smaller than or equal to 999999.');
        }
        if (!is_null($tara) && ($tara < 0)) {
            throw new \InvalidArgumentException('invalid value for $tara when calling MdfeSefazVeicTracao., must be bigger than or equal to 0.');
        }

        $this->container['tara'] = $tara;

        return $this;
    }

    /**
     * Gets cap_kg
     *
     * @return int|null
     */
    public function getCapKg()
    {
        return $this->container['cap_kg'];
    }

    /**
     * Sets cap_kg
     *
     * @param int|null $cap_kg Capacidade em KG.
     *
     * @return self
     */
    public function setCapKg($cap_kg)
    {
        if (is_null($cap_kg)) {
            array_push($this->openAPINullablesSetToNull, 'cap_kg');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cap_kg', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($cap_kg) && ($cap_kg > 999999)) {
            throw new \InvalidArgumentException('invalid value for $cap_kg when calling MdfeSefazVeicTracao., must be smaller than or equal to 999999.');
        }
        if (!is_null($cap_kg) && ($cap_kg < 0)) {
            throw new \InvalidArgumentException('invalid value for $cap_kg when calling MdfeSefazVeicTracao., must be bigger than or equal to 0.');
        }

        $this->container['cap_kg'] = $cap_kg;

        return $this;
    }

    /**
     * Gets cap_m3
     *
     * @return int|null
     */
    public function getCapM3()
    {
        return $this->container['cap_m3'];
    }

    /**
     * Sets cap_m3
     *
     * @param int|null $cap_m3 Capacidade em M3.
     *
     * @return self
     */
    public function setCapM3($cap_m3)
    {
        if (is_null($cap_m3)) {
            array_push($this->openAPINullablesSetToNull, 'cap_m3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cap_m3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($cap_m3) && ($cap_m3 > 999)) {
            throw new \InvalidArgumentException('invalid value for $cap_m3 when calling MdfeSefazVeicTracao., must be smaller than or equal to 999.');
        }
        if (!is_null($cap_m3) && ($cap_m3 < 0)) {
            throw new \InvalidArgumentException('invalid value for $cap_m3 when calling MdfeSefazVeicTracao., must be bigger than or equal to 0.');
        }

        $this->container['cap_m3'] = $cap_m3;

        return $this;
    }

    /**
     * Gets prop
     *
     * @return \NuvemFiscal\Model\MdfeSefazProp|null
     */
    public function getProp()
    {
        return $this->container['prop'];
    }

    /**
     * Sets prop
     *
     * @param \NuvemFiscal\Model\MdfeSefazProp|null $prop prop
     *
     * @return self
     */
    public function setProp($prop)
    {
        if (is_null($prop)) {
            throw new \InvalidArgumentException('non-nullable prop cannot be null');
        }
        $this->container['prop'] = $prop;

        return $this;
    }

    /**
     * Gets condutor
     *
     * @return \NuvemFiscal\Model\MdfeSefazCondutor[]
     */
    public function getCondutor()
    {
        return $this->container['condutor'];
    }

    /**
     * Sets condutor
     *
     * @param \NuvemFiscal\Model\MdfeSefazCondutor[] $condutor condutor
     *
     * @return self
     */
    public function setCondutor($condutor)
    {
        if (is_null($condutor)) {
            throw new \InvalidArgumentException('non-nullable condutor cannot be null');
        }
        $this->container['condutor'] = $condutor;

        return $this;
    }

    /**
     * Gets tp_rod
     *
     * @return string
     */
    public function getTpRod()
    {
        return $this->container['tp_rod'];
    }

    /**
     * Sets tp_rod
     *
     * @param string $tp_rod Tipo de Rodado.  Preencher com:  * 01 - Truck  * 02 - Toco  * 03 - Cavalo Mecânico  * 04 - VAN  * 05 - Utilitário  * 06 - Outros
     *
     * @return self
     */
    public function setTpRod($tp_rod)
    {
        if (is_null($tp_rod)) {
            array_push($this->openAPINullablesSetToNull, 'tp_rod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_rod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_rod'] = $tp_rod;

        return $this;
    }

    /**
     * Gets tp_car
     *
     * @return string
     */
    public function getTpCar()
    {
        return $this->container['tp_car'];
    }

    /**
     * Sets tp_car
     *
     * @param string $tp_car Tipo de Carroceria.  Preencher com:  * 00 - não aplicável  * 01 - Aberta  * 02 - Fechada/Baú  * 03 - Granelera  * 04 - Porta Container  * 05 - Sider
     *
     * @return self
     */
    public function setTpCar($tp_car)
    {
        if (is_null($tp_car)) {
            array_push($this->openAPINullablesSetToNull, 'tp_car');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_car', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_car'] = $tp_car;

        return $this;
    }

    /**
     * Gets uf
     *
     * @return string|null
     */
    public function getUf()
    {
        return $this->container['uf'];
    }

    /**
     * Sets uf
     *
     * @param string|null $uf UF em que veículo está licenciado.  Sigla da UF de licenciamento do veículo.
     *
     * @return self
     */
    public function setUf($uf)
    {
        if (is_null($uf)) {
            array_push($this->openAPINullablesSetToNull, 'uf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uf'] = $uf;

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


