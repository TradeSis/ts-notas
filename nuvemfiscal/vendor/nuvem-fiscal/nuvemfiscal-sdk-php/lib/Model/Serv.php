<?php
/**
 * Serv
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
 * Serv Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações do DPS relativas ao Serviço Prestado.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Serv implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Serv';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'loc_prest' => '\NuvemFiscal\Model\LocPrest',
        'c_serv' => '\NuvemFiscal\Model\CServ',
        'com_ext' => '\NuvemFiscal\Model\ComExterior',
        'lsadppu' => '\NuvemFiscal\Model\LocacaoSublocacao',
        'obra' => '\NuvemFiscal\Model\InfoObra',
        'atv_evento' => '\NuvemFiscal\Model\AtvEvento',
        'expl_rod' => '\NuvemFiscal\Model\ExploracaoRodoviaria',
        'info_compl' => '\NuvemFiscal\Model\InfoCompl'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'loc_prest' => null,
        'c_serv' => null,
        'com_ext' => null,
        'lsadppu' => null,
        'obra' => null,
        'atv_evento' => null,
        'expl_rod' => null,
        'info_compl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'loc_prest' => false,
		'c_serv' => false,
		'com_ext' => false,
		'lsadppu' => false,
		'obra' => false,
		'atv_evento' => false,
		'expl_rod' => false,
		'info_compl' => false
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
        'loc_prest' => 'locPrest',
        'c_serv' => 'cServ',
        'com_ext' => 'comExt',
        'lsadppu' => 'lsadppu',
        'obra' => 'obra',
        'atv_evento' => 'atvEvento',
        'expl_rod' => 'explRod',
        'info_compl' => 'infoCompl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'loc_prest' => 'setLocPrest',
        'c_serv' => 'setCServ',
        'com_ext' => 'setComExt',
        'lsadppu' => 'setLsadppu',
        'obra' => 'setObra',
        'atv_evento' => 'setAtvEvento',
        'expl_rod' => 'setExplRod',
        'info_compl' => 'setInfoCompl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'loc_prest' => 'getLocPrest',
        'c_serv' => 'getCServ',
        'com_ext' => 'getComExt',
        'lsadppu' => 'getLsadppu',
        'obra' => 'getObra',
        'atv_evento' => 'getAtvEvento',
        'expl_rod' => 'getExplRod',
        'info_compl' => 'getInfoCompl'
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
        $this->setIfExists('loc_prest', $data ?? [], null);
        $this->setIfExists('c_serv', $data ?? [], null);
        $this->setIfExists('com_ext', $data ?? [], null);
        $this->setIfExists('lsadppu', $data ?? [], null);
        $this->setIfExists('obra', $data ?? [], null);
        $this->setIfExists('atv_evento', $data ?? [], null);
        $this->setIfExists('expl_rod', $data ?? [], null);
        $this->setIfExists('info_compl', $data ?? [], null);
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

        if ($this->container['c_serv'] === null) {
            $invalidProperties[] = "'c_serv' can't be null";
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
     * Gets loc_prest
     *
     * @return \NuvemFiscal\Model\LocPrest|null
     */
    public function getLocPrest()
    {
        return $this->container['loc_prest'];
    }

    /**
     * Sets loc_prest
     *
     * @param \NuvemFiscal\Model\LocPrest|null $loc_prest loc_prest
     *
     * @return self
     */
    public function setLocPrest($loc_prest)
    {
        if (is_null($loc_prest)) {
            throw new \InvalidArgumentException('non-nullable loc_prest cannot be null');
        }
        $this->container['loc_prest'] = $loc_prest;

        return $this;
    }

    /**
     * Gets c_serv
     *
     * @return \NuvemFiscal\Model\CServ
     */
    public function getCServ()
    {
        return $this->container['c_serv'];
    }

    /**
     * Sets c_serv
     *
     * @param \NuvemFiscal\Model\CServ $c_serv c_serv
     *
     * @return self
     */
    public function setCServ($c_serv)
    {
        if (is_null($c_serv)) {
            throw new \InvalidArgumentException('non-nullable c_serv cannot be null');
        }
        $this->container['c_serv'] = $c_serv;

        return $this;
    }

    /**
     * Gets com_ext
     *
     * @return \NuvemFiscal\Model\ComExterior|null
     */
    public function getComExt()
    {
        return $this->container['com_ext'];
    }

    /**
     * Sets com_ext
     *
     * @param \NuvemFiscal\Model\ComExterior|null $com_ext com_ext
     *
     * @return self
     */
    public function setComExt($com_ext)
    {
        if (is_null($com_ext)) {
            throw new \InvalidArgumentException('non-nullable com_ext cannot be null');
        }
        $this->container['com_ext'] = $com_ext;

        return $this;
    }

    /**
     * Gets lsadppu
     *
     * @return \NuvemFiscal\Model\LocacaoSublocacao|null
     */
    public function getLsadppu()
    {
        return $this->container['lsadppu'];
    }

    /**
     * Sets lsadppu
     *
     * @param \NuvemFiscal\Model\LocacaoSublocacao|null $lsadppu lsadppu
     *
     * @return self
     */
    public function setLsadppu($lsadppu)
    {
        if (is_null($lsadppu)) {
            throw new \InvalidArgumentException('non-nullable lsadppu cannot be null');
        }
        $this->container['lsadppu'] = $lsadppu;

        return $this;
    }

    /**
     * Gets obra
     *
     * @return \NuvemFiscal\Model\InfoObra|null
     */
    public function getObra()
    {
        return $this->container['obra'];
    }

    /**
     * Sets obra
     *
     * @param \NuvemFiscal\Model\InfoObra|null $obra obra
     *
     * @return self
     */
    public function setObra($obra)
    {
        if (is_null($obra)) {
            throw new \InvalidArgumentException('non-nullable obra cannot be null');
        }
        $this->container['obra'] = $obra;

        return $this;
    }

    /**
     * Gets atv_evento
     *
     * @return \NuvemFiscal\Model\AtvEvento|null
     */
    public function getAtvEvento()
    {
        return $this->container['atv_evento'];
    }

    /**
     * Sets atv_evento
     *
     * @param \NuvemFiscal\Model\AtvEvento|null $atv_evento atv_evento
     *
     * @return self
     */
    public function setAtvEvento($atv_evento)
    {
        if (is_null($atv_evento)) {
            throw new \InvalidArgumentException('non-nullable atv_evento cannot be null');
        }
        $this->container['atv_evento'] = $atv_evento;

        return $this;
    }

    /**
     * Gets expl_rod
     *
     * @return \NuvemFiscal\Model\ExploracaoRodoviaria|null
     */
    public function getExplRod()
    {
        return $this->container['expl_rod'];
    }

    /**
     * Sets expl_rod
     *
     * @param \NuvemFiscal\Model\ExploracaoRodoviaria|null $expl_rod expl_rod
     *
     * @return self
     */
    public function setExplRod($expl_rod)
    {
        if (is_null($expl_rod)) {
            throw new \InvalidArgumentException('non-nullable expl_rod cannot be null');
        }
        $this->container['expl_rod'] = $expl_rod;

        return $this;
    }

    /**
     * Gets info_compl
     *
     * @return \NuvemFiscal\Model\InfoCompl|null
     */
    public function getInfoCompl()
    {
        return $this->container['info_compl'];
    }

    /**
     * Sets info_compl
     *
     * @param \NuvemFiscal\Model\InfoCompl|null $info_compl info_compl
     *
     * @return self
     */
    public function setInfoCompl($info_compl)
    {
        if (is_null($info_compl)) {
            throw new \InvalidArgumentException('non-nullable info_compl cannot be null');
        }
        $this->container['info_compl'] = $info_compl;

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

