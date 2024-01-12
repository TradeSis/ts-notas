<?php
/**
 * MdfeSefazInfNFePeri
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
 * MdfeSefazInfNFePeri Class Doc Comment
 *
 * @category Class
 * @description Preenchido quando for  transporte de produtos classificados pela ONU como perigosos.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazInfNFePeri implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazInfNFe_Peri';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'n_onu' => 'string',
        'x_nome_ae' => 'string',
        'x_cla_risco' => 'string',
        'gr_emb' => 'string',
        'q_tot_prod' => 'string',
        'q_vol_tipo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'n_onu' => null,
        'x_nome_ae' => null,
        'x_cla_risco' => null,
        'gr_emb' => null,
        'q_tot_prod' => null,
        'q_vol_tipo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'n_onu' => true,
		'x_nome_ae' => true,
		'x_cla_risco' => true,
		'gr_emb' => true,
		'q_tot_prod' => true,
		'q_vol_tipo' => true
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
        'n_onu' => 'nONU',
        'x_nome_ae' => 'xNomeAE',
        'x_cla_risco' => 'xClaRisco',
        'gr_emb' => 'grEmb',
        'q_tot_prod' => 'qTotProd',
        'q_vol_tipo' => 'qVolTipo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'n_onu' => 'setNOnu',
        'x_nome_ae' => 'setXNomeAe',
        'x_cla_risco' => 'setXClaRisco',
        'gr_emb' => 'setGrEmb',
        'q_tot_prod' => 'setQTotProd',
        'q_vol_tipo' => 'setQVolTipo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'n_onu' => 'getNOnu',
        'x_nome_ae' => 'getXNomeAe',
        'x_cla_risco' => 'getXClaRisco',
        'gr_emb' => 'getGrEmb',
        'q_tot_prod' => 'getQTotProd',
        'q_vol_tipo' => 'getQVolTipo'
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
        $this->setIfExists('n_onu', $data ?? [], null);
        $this->setIfExists('x_nome_ae', $data ?? [], null);
        $this->setIfExists('x_cla_risco', $data ?? [], null);
        $this->setIfExists('gr_emb', $data ?? [], null);
        $this->setIfExists('q_tot_prod', $data ?? [], null);
        $this->setIfExists('q_vol_tipo', $data ?? [], null);
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

        if ($this->container['n_onu'] === null) {
            $invalidProperties[] = "'n_onu' can't be null";
        }
        if (!is_null($this->container['x_nome_ae']) && (mb_strlen($this->container['x_nome_ae']) > 150)) {
            $invalidProperties[] = "invalid value for 'x_nome_ae', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['x_nome_ae']) && (mb_strlen($this->container['x_nome_ae']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_nome_ae', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['x_cla_risco']) && (mb_strlen($this->container['x_cla_risco']) > 40)) {
            $invalidProperties[] = "invalid value for 'x_cla_risco', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['x_cla_risco']) && (mb_strlen($this->container['x_cla_risco']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_cla_risco', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['gr_emb']) && (mb_strlen($this->container['gr_emb']) > 6)) {
            $invalidProperties[] = "invalid value for 'gr_emb', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['gr_emb']) && (mb_strlen($this->container['gr_emb']) < 1)) {
            $invalidProperties[] = "invalid value for 'gr_emb', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['q_tot_prod'] === null) {
            $invalidProperties[] = "'q_tot_prod' can't be null";
        }
        if ((mb_strlen($this->container['q_tot_prod']) > 20)) {
            $invalidProperties[] = "invalid value for 'q_tot_prod', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['q_tot_prod']) < 1)) {
            $invalidProperties[] = "invalid value for 'q_tot_prod', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['q_vol_tipo']) && (mb_strlen($this->container['q_vol_tipo']) > 60)) {
            $invalidProperties[] = "invalid value for 'q_vol_tipo', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['q_vol_tipo']) && (mb_strlen($this->container['q_vol_tipo']) < 1)) {
            $invalidProperties[] = "invalid value for 'q_vol_tipo', the character length must be bigger than or equal to 1.";
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
     * Gets n_onu
     *
     * @return string
     */
    public function getNOnu()
    {
        return $this->container['n_onu'];
    }

    /**
     * Sets n_onu
     *
     * @param string $n_onu Número ONU/UN.  Ver a legislação de transporte de produtos perigosos aplicadas ao modal.
     *
     * @return self
     */
    public function setNOnu($n_onu)
    {
        if (is_null($n_onu)) {
            array_push($this->openAPINullablesSetToNull, 'n_onu');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_onu', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n_onu'] = $n_onu;

        return $this;
    }

    /**
     * Gets x_nome_ae
     *
     * @return string|null
     */
    public function getXNomeAe()
    {
        return $this->container['x_nome_ae'];
    }

    /**
     * Sets x_nome_ae
     *
     * @param string|null $x_nome_ae Nome apropriado para embarque do produto.  Ver a legislação de transporte de produtos perigosos aplicada ao modo de transporte.
     *
     * @return self
     */
    public function setXNomeAe($x_nome_ae)
    {
        if (is_null($x_nome_ae)) {
            array_push($this->openAPINullablesSetToNull, 'x_nome_ae');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_nome_ae', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_nome_ae) && (mb_strlen($x_nome_ae) > 150)) {
            throw new \InvalidArgumentException('invalid length for $x_nome_ae when calling MdfeSefazInfNFePeri., must be smaller than or equal to 150.');
        }
        if (!is_null($x_nome_ae) && (mb_strlen($x_nome_ae) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_nome_ae when calling MdfeSefazInfNFePeri., must be bigger than or equal to 1.');
        }

        $this->container['x_nome_ae'] = $x_nome_ae;

        return $this;
    }

    /**
     * Gets x_cla_risco
     *
     * @return string|null
     */
    public function getXClaRisco()
    {
        return $this->container['x_cla_risco'];
    }

    /**
     * Sets x_cla_risco
     *
     * @param string|null $x_cla_risco Classe ou subclasse/divisão, e risco subsidiário/risco secundário.  Ver a legislação de transporte de produtos perigosos aplicadas ao modal.
     *
     * @return self
     */
    public function setXClaRisco($x_cla_risco)
    {
        if (is_null($x_cla_risco)) {
            array_push($this->openAPINullablesSetToNull, 'x_cla_risco');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_cla_risco', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_cla_risco) && (mb_strlen($x_cla_risco) > 40)) {
            throw new \InvalidArgumentException('invalid length for $x_cla_risco when calling MdfeSefazInfNFePeri., must be smaller than or equal to 40.');
        }
        if (!is_null($x_cla_risco) && (mb_strlen($x_cla_risco) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_cla_risco when calling MdfeSefazInfNFePeri., must be bigger than or equal to 1.');
        }

        $this->container['x_cla_risco'] = $x_cla_risco;

        return $this;
    }

    /**
     * Gets gr_emb
     *
     * @return string|null
     */
    public function getGrEmb()
    {
        return $this->container['gr_emb'];
    }

    /**
     * Sets gr_emb
     *
     * @param string|null $gr_emb Grupo de Embalagem.  Ver a legislação de transporte de produtos perigosos aplicadas ao modal  Preenchimento obrigatório para o modal aéreo.  A legislação para o modal rodoviário e ferroviário não atribui grupo de embalagem para todos os produtos, portanto haverá casos de não preenchimento desse campo.
     *
     * @return self
     */
    public function setGrEmb($gr_emb)
    {
        if (is_null($gr_emb)) {
            array_push($this->openAPINullablesSetToNull, 'gr_emb');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gr_emb', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($gr_emb) && (mb_strlen($gr_emb) > 6)) {
            throw new \InvalidArgumentException('invalid length for $gr_emb when calling MdfeSefazInfNFePeri., must be smaller than or equal to 6.');
        }
        if (!is_null($gr_emb) && (mb_strlen($gr_emb) < 1)) {
            throw new \InvalidArgumentException('invalid length for $gr_emb when calling MdfeSefazInfNFePeri., must be bigger than or equal to 1.');
        }

        $this->container['gr_emb'] = $gr_emb;

        return $this;
    }

    /**
     * Gets q_tot_prod
     *
     * @return string
     */
    public function getQTotProd()
    {
        return $this->container['q_tot_prod'];
    }

    /**
     * Sets q_tot_prod
     *
     * @param string $q_tot_prod Quantidade total por produto.  Preencher conforme a legislação de transporte de produtos perigosos aplicada ao modal.
     *
     * @return self
     */
    public function setQTotProd($q_tot_prod)
    {
        if (is_null($q_tot_prod)) {
            array_push($this->openAPINullablesSetToNull, 'q_tot_prod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_tot_prod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($q_tot_prod) && (mb_strlen($q_tot_prod) > 20)) {
            throw new \InvalidArgumentException('invalid length for $q_tot_prod when calling MdfeSefazInfNFePeri., must be smaller than or equal to 20.');
        }
        if (!is_null($q_tot_prod) && (mb_strlen($q_tot_prod) < 1)) {
            throw new \InvalidArgumentException('invalid length for $q_tot_prod when calling MdfeSefazInfNFePeri., must be bigger than or equal to 1.');
        }

        $this->container['q_tot_prod'] = $q_tot_prod;

        return $this;
    }

    /**
     * Gets q_vol_tipo
     *
     * @return string|null
     */
    public function getQVolTipo()
    {
        return $this->container['q_vol_tipo'];
    }

    /**
     * Sets q_vol_tipo
     *
     * @param string|null $q_vol_tipo Quantidade e Tipo de volumes.  Preencher conforme a legislação de transporte de produtos perigosos aplicada ao modal.
     *
     * @return self
     */
    public function setQVolTipo($q_vol_tipo)
    {
        if (is_null($q_vol_tipo)) {
            array_push($this->openAPINullablesSetToNull, 'q_vol_tipo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_vol_tipo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($q_vol_tipo) && (mb_strlen($q_vol_tipo) > 60)) {
            throw new \InvalidArgumentException('invalid length for $q_vol_tipo when calling MdfeSefazInfNFePeri., must be smaller than or equal to 60.');
        }
        if (!is_null($q_vol_tipo) && (mb_strlen($q_vol_tipo) < 1)) {
            throw new \InvalidArgumentException('invalid length for $q_vol_tipo when calling MdfeSefazInfNFePeri., must be bigger than or equal to 1.');
        }

        $this->container['q_vol_tipo'] = $q_vol_tipo;

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


