<?php
/**
 * NfeSefazICMS61
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
 * NfeSefazICMS61 Class Doc Comment
 *
 * @category Class
 * @description Tributação monofásica sobre combustíveis cobrada anteriormente.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazICMS61 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazICMS61';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orig' => 'int',
        'cst' => 'string',
        'q_bc_mono_ret' => 'float',
        'ad_rem_icms_ret' => 'float',
        'v_icms_mono_ret' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'orig' => null,
        'cst' => null,
        'q_bc_mono_ret' => null,
        'ad_rem_icms_ret' => null,
        'v_icms_mono_ret' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orig' => true,
		'cst' => true,
		'q_bc_mono_ret' => true,
		'ad_rem_icms_ret' => true,
		'v_icms_mono_ret' => true
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
        'orig' => 'orig',
        'cst' => 'CST',
        'q_bc_mono_ret' => 'qBCMonoRet',
        'ad_rem_icms_ret' => 'adRemICMSRet',
        'v_icms_mono_ret' => 'vICMSMonoRet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orig' => 'setOrig',
        'cst' => 'setCst',
        'q_bc_mono_ret' => 'setQBcMonoRet',
        'ad_rem_icms_ret' => 'setAdRemIcmsRet',
        'v_icms_mono_ret' => 'setVIcmsMonoRet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orig' => 'getOrig',
        'cst' => 'getCst',
        'q_bc_mono_ret' => 'getQBcMonoRet',
        'ad_rem_icms_ret' => 'getAdRemIcmsRet',
        'v_icms_mono_ret' => 'getVIcmsMonoRet'
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
        $this->setIfExists('orig', $data ?? [], null);
        $this->setIfExists('cst', $data ?? [], null);
        $this->setIfExists('q_bc_mono_ret', $data ?? [], null);
        $this->setIfExists('ad_rem_icms_ret', $data ?? [], null);
        $this->setIfExists('v_icms_mono_ret', $data ?? [], null);
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

        if ($this->container['orig'] === null) {
            $invalidProperties[] = "'orig' can't be null";
        }
        if ($this->container['cst'] === null) {
            $invalidProperties[] = "'cst' can't be null";
        }
        if ($this->container['ad_rem_icms_ret'] === null) {
            $invalidProperties[] = "'ad_rem_icms_ret' can't be null";
        }
        if ($this->container['v_icms_mono_ret'] === null) {
            $invalidProperties[] = "'v_icms_mono_ret' can't be null";
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
     * Gets orig
     *
     * @return int
     */
    public function getOrig()
    {
        return $this->container['orig'];
    }

    /**
     * Sets orig
     *
     * @param int $orig Origem da mercadoria:  * 0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;  * 1 - Estrangeira - Importação direta, exceto a indicada no código 6;  * 2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7;  * 3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40%% e inferior ou igual a 70%%;  * 4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;  * 5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%%;  * 6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;  * 7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante lista CAMEX e gás natural;  * 8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%%.
     *
     * @return self
     */
    public function setOrig($orig)
    {
        if (is_null($orig)) {
            array_push($this->openAPINullablesSetToNull, 'orig');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('orig', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['orig'] = $orig;

        return $this;
    }

    /**
     * Gets cst
     *
     * @return string
     */
    public function getCst()
    {
        return $this->container['cst'];
    }

    /**
     * Sets cst
     *
     * @param string $cst Tributção pelo ICMS  * 61 - Tributação monofásica sobre combustíveis cobrada anteriormente
     *
     * @return self
     */
    public function setCst($cst)
    {
        if (is_null($cst)) {
            array_push($this->openAPINullablesSetToNull, 'cst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cst'] = $cst;

        return $this;
    }

    /**
     * Gets q_bc_mono_ret
     *
     * @return float|null
     */
    public function getQBcMonoRet()
    {
        return $this->container['q_bc_mono_ret'];
    }

    /**
     * Sets q_bc_mono_ret
     *
     * @param float|null $q_bc_mono_ret Quantidade tributada retida anteriormente.
     *
     * @return self
     */
    public function setQBcMonoRet($q_bc_mono_ret)
    {
        if (is_null($q_bc_mono_ret)) {
            array_push($this->openAPINullablesSetToNull, 'q_bc_mono_ret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_bc_mono_ret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['q_bc_mono_ret'] = $q_bc_mono_ret;

        return $this;
    }

    /**
     * Gets ad_rem_icms_ret
     *
     * @return float
     */
    public function getAdRemIcmsRet()
    {
        return $this->container['ad_rem_icms_ret'];
    }

    /**
     * Sets ad_rem_icms_ret
     *
     * @param float $ad_rem_icms_ret Alíquota ad rem do imposto retido anteriormente.
     *
     * @return self
     */
    public function setAdRemIcmsRet($ad_rem_icms_ret)
    {
        if (is_null($ad_rem_icms_ret)) {
            array_push($this->openAPINullablesSetToNull, 'ad_rem_icms_ret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ad_rem_icms_ret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ad_rem_icms_ret'] = $ad_rem_icms_ret;

        return $this;
    }

    /**
     * Gets v_icms_mono_ret
     *
     * @return float
     */
    public function getVIcmsMonoRet()
    {
        return $this->container['v_icms_mono_ret'];
    }

    /**
     * Sets v_icms_mono_ret
     *
     * @param float $v_icms_mono_ret Valor do ICMS retido anteriormente.
     *
     * @return self
     */
    public function setVIcmsMonoRet($v_icms_mono_ret)
    {
        if (is_null($v_icms_mono_ret)) {
            array_push($this->openAPINullablesSetToNull, 'v_icms_mono_ret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icms_mono_ret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_icms_mono_ret'] = $v_icms_mono_ret;

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


