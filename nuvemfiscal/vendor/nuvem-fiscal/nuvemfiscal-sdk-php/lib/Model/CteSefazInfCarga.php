<?php
/**
 * CteSefazInfCarga
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
 * CteSefazInfCarga Class Doc Comment
 *
 * @category Class
 * @description Informações da Carga do CT-e.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazInfCarga implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazInfCarga';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'v_carga' => 'float',
        'pro_pred' => 'string',
        'x_out_cat' => 'string',
        'inf_q' => '\NuvemFiscal\Model\CteSefazInfQ[]',
        'v_carga_averb' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'v_carga' => null,
        'pro_pred' => null,
        'x_out_cat' => null,
        'inf_q' => null,
        'v_carga_averb' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'v_carga' => true,
		'pro_pred' => true,
		'x_out_cat' => true,
		'inf_q' => false,
		'v_carga_averb' => true
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
        'v_carga' => 'vCarga',
        'pro_pred' => 'proPred',
        'x_out_cat' => 'xOutCat',
        'inf_q' => 'infQ',
        'v_carga_averb' => 'vCargaAverb'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'v_carga' => 'setVCarga',
        'pro_pred' => 'setProPred',
        'x_out_cat' => 'setXOutCat',
        'inf_q' => 'setInfQ',
        'v_carga_averb' => 'setVCargaAverb'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'v_carga' => 'getVCarga',
        'pro_pred' => 'getProPred',
        'x_out_cat' => 'getXOutCat',
        'inf_q' => 'getInfQ',
        'v_carga_averb' => 'getVCargaAverb'
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
        $this->setIfExists('v_carga', $data ?? [], null);
        $this->setIfExists('pro_pred', $data ?? [], null);
        $this->setIfExists('x_out_cat', $data ?? [], null);
        $this->setIfExists('inf_q', $data ?? [], null);
        $this->setIfExists('v_carga_averb', $data ?? [], null);
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

        if ($this->container['pro_pred'] === null) {
            $invalidProperties[] = "'pro_pred' can't be null";
        }
        if ((mb_strlen($this->container['pro_pred']) > 60)) {
            $invalidProperties[] = "invalid value for 'pro_pred', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['pro_pred']) < 1)) {
            $invalidProperties[] = "invalid value for 'pro_pred', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['x_out_cat']) && (mb_strlen($this->container['x_out_cat']) > 30)) {
            $invalidProperties[] = "invalid value for 'x_out_cat', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['x_out_cat']) && (mb_strlen($this->container['x_out_cat']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_out_cat', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['inf_q'] === null) {
            $invalidProperties[] = "'inf_q' can't be null";
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
     * Gets v_carga
     *
     * @return float|null
     */
    public function getVCarga()
    {
        return $this->container['v_carga'];
    }

    /**
     * Sets v_carga
     *
     * @param float|null $v_carga Valor total da carga.  Dever ser informado para todos os modais, com exceção para o Dutoviário.
     *
     * @return self
     */
    public function setVCarga($v_carga)
    {
        if (is_null($v_carga)) {
            array_push($this->openAPINullablesSetToNull, 'v_carga');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_carga', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_carga'] = $v_carga;

        return $this;
    }

    /**
     * Gets pro_pred
     *
     * @return string
     */
    public function getProPred()
    {
        return $this->container['pro_pred'];
    }

    /**
     * Sets pro_pred
     *
     * @param string $pro_pred Produto predominante.  Informar a descrição do produto predominante.
     *
     * @return self
     */
    public function setProPred($pro_pred)
    {
        if (is_null($pro_pred)) {
            array_push($this->openAPINullablesSetToNull, 'pro_pred');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pro_pred', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($pro_pred) && (mb_strlen($pro_pred) > 60)) {
            throw new \InvalidArgumentException('invalid length for $pro_pred when calling CteSefazInfCarga., must be smaller than or equal to 60.');
        }
        if (!is_null($pro_pred) && (mb_strlen($pro_pred) < 1)) {
            throw new \InvalidArgumentException('invalid length for $pro_pred when calling CteSefazInfCarga., must be bigger than or equal to 1.');
        }

        $this->container['pro_pred'] = $pro_pred;

        return $this;
    }

    /**
     * Gets x_out_cat
     *
     * @return string|null
     */
    public function getXOutCat()
    {
        return $this->container['x_out_cat'];
    }

    /**
     * Sets x_out_cat
     *
     * @param string|null $x_out_cat Outras características da carga.  \"FRIA\", \"GRANEL\", \"REFRIGERADA\", \"Medidas: 12X12X12\".
     *
     * @return self
     */
    public function setXOutCat($x_out_cat)
    {
        if (is_null($x_out_cat)) {
            array_push($this->openAPINullablesSetToNull, 'x_out_cat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_out_cat', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_out_cat) && (mb_strlen($x_out_cat) > 30)) {
            throw new \InvalidArgumentException('invalid length for $x_out_cat when calling CteSefazInfCarga., must be smaller than or equal to 30.');
        }
        if (!is_null($x_out_cat) && (mb_strlen($x_out_cat) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_out_cat when calling CteSefazInfCarga., must be bigger than or equal to 1.');
        }

        $this->container['x_out_cat'] = $x_out_cat;

        return $this;
    }

    /**
     * Gets inf_q
     *
     * @return \NuvemFiscal\Model\CteSefazInfQ[]
     */
    public function getInfQ()
    {
        return $this->container['inf_q'];
    }

    /**
     * Sets inf_q
     *
     * @param \NuvemFiscal\Model\CteSefazInfQ[] $inf_q inf_q
     *
     * @return self
     */
    public function setInfQ($inf_q)
    {
        if (is_null($inf_q)) {
            throw new \InvalidArgumentException('non-nullable inf_q cannot be null');
        }
        $this->container['inf_q'] = $inf_q;

        return $this;
    }

    /**
     * Gets v_carga_averb
     *
     * @return float|null
     */
    public function getVCargaAverb()
    {
        return $this->container['v_carga_averb'];
    }

    /**
     * Sets v_carga_averb
     *
     * @param float|null $v_carga_averb Valor da Carga para efeito de averbação.  Normalmente igual ao valor declarado da mercadoria, diferente por exemplo, quando a mercadoria transportada é isenta de tributos nacionais para exportação, onde é preciso averbar um valor maior, pois no caso de indenização, o valor a ser pago será maior.
     *
     * @return self
     */
    public function setVCargaAverb($v_carga_averb)
    {
        if (is_null($v_carga_averb)) {
            array_push($this->openAPINullablesSetToNull, 'v_carga_averb');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_carga_averb', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_carga_averb'] = $v_carga_averb;

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


