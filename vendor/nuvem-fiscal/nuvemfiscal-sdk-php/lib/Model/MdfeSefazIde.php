<?php
/**
 * MdfeSefazIde
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
 * MdfeSefazIde Class Doc Comment
 *
 * @category Class
 * @description Identificação do MDF-e.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazIde implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazIde';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c_uf' => 'int',
        'tp_amb' => 'int',
        'tp_emit' => 'int',
        'tp_transp' => 'int',
        'mod' => 'int',
        'serie' => 'int',
        'n_mdf' => 'int',
        'c_mdf' => 'string',
        'c_dv' => 'int',
        'modal' => 'int',
        'dh_emi' => '\DateTime',
        'tp_emis' => 'int',
        'proc_emi' => 'string',
        'ver_proc' => 'string',
        'uf_ini' => 'string',
        'uf_fim' => 'string',
        'inf_mun_carrega' => '\NuvemFiscal\Model\MdfeSefazInfMunCarrega[]',
        'inf_percurso' => '\NuvemFiscal\Model\MdfeSefazInfPercurso[]',
        'dh_ini_viagem' => '\DateTime',
        'ind_canal_verde' => 'int',
        'ind_carrega_posterior' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'c_uf' => null,
        'tp_amb' => null,
        'tp_emit' => null,
        'tp_transp' => null,
        'mod' => null,
        'serie' => null,
        'n_mdf' => null,
        'c_mdf' => null,
        'c_dv' => null,
        'modal' => null,
        'dh_emi' => 'date-time',
        'tp_emis' => null,
        'proc_emi' => null,
        'ver_proc' => null,
        'uf_ini' => null,
        'uf_fim' => null,
        'inf_mun_carrega' => null,
        'inf_percurso' => null,
        'dh_ini_viagem' => 'date-time',
        'ind_canal_verde' => null,
        'ind_carrega_posterior' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'c_uf' => true,
		'tp_amb' => true,
		'tp_emit' => true,
		'tp_transp' => true,
		'mod' => true,
		'serie' => true,
		'n_mdf' => true,
		'c_mdf' => true,
		'c_dv' => true,
		'modal' => true,
		'dh_emi' => true,
		'tp_emis' => true,
		'proc_emi' => true,
		'ver_proc' => true,
		'uf_ini' => true,
		'uf_fim' => true,
		'inf_mun_carrega' => false,
		'inf_percurso' => false,
		'dh_ini_viagem' => true,
		'ind_canal_verde' => true,
		'ind_carrega_posterior' => true
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
        'c_uf' => 'cUF',
        'tp_amb' => 'tpAmb',
        'tp_emit' => 'tpEmit',
        'tp_transp' => 'tpTransp',
        'mod' => 'mod',
        'serie' => 'serie',
        'n_mdf' => 'nMDF',
        'c_mdf' => 'cMDF',
        'c_dv' => 'cDV',
        'modal' => 'modal',
        'dh_emi' => 'dhEmi',
        'tp_emis' => 'tpEmis',
        'proc_emi' => 'procEmi',
        'ver_proc' => 'verProc',
        'uf_ini' => 'UFIni',
        'uf_fim' => 'UFFim',
        'inf_mun_carrega' => 'infMunCarrega',
        'inf_percurso' => 'infPercurso',
        'dh_ini_viagem' => 'dhIniViagem',
        'ind_canal_verde' => 'indCanalVerde',
        'ind_carrega_posterior' => 'indCarregaPosterior'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_uf' => 'setCUf',
        'tp_amb' => 'setTpAmb',
        'tp_emit' => 'setTpEmit',
        'tp_transp' => 'setTpTransp',
        'mod' => 'setMod',
        'serie' => 'setSerie',
        'n_mdf' => 'setNMdf',
        'c_mdf' => 'setCMdf',
        'c_dv' => 'setCDv',
        'modal' => 'setModal',
        'dh_emi' => 'setDhEmi',
        'tp_emis' => 'setTpEmis',
        'proc_emi' => 'setProcEmi',
        'ver_proc' => 'setVerProc',
        'uf_ini' => 'setUfIni',
        'uf_fim' => 'setUfFim',
        'inf_mun_carrega' => 'setInfMunCarrega',
        'inf_percurso' => 'setInfPercurso',
        'dh_ini_viagem' => 'setDhIniViagem',
        'ind_canal_verde' => 'setIndCanalVerde',
        'ind_carrega_posterior' => 'setIndCarregaPosterior'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_uf' => 'getCUf',
        'tp_amb' => 'getTpAmb',
        'tp_emit' => 'getTpEmit',
        'tp_transp' => 'getTpTransp',
        'mod' => 'getMod',
        'serie' => 'getSerie',
        'n_mdf' => 'getNMdf',
        'c_mdf' => 'getCMdf',
        'c_dv' => 'getCDv',
        'modal' => 'getModal',
        'dh_emi' => 'getDhEmi',
        'tp_emis' => 'getTpEmis',
        'proc_emi' => 'getProcEmi',
        'ver_proc' => 'getVerProc',
        'uf_ini' => 'getUfIni',
        'uf_fim' => 'getUfFim',
        'inf_mun_carrega' => 'getInfMunCarrega',
        'inf_percurso' => 'getInfPercurso',
        'dh_ini_viagem' => 'getDhIniViagem',
        'ind_canal_verde' => 'getIndCanalVerde',
        'ind_carrega_posterior' => 'getIndCarregaPosterior'
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
        $this->setIfExists('c_uf', $data ?? [], null);
        $this->setIfExists('tp_amb', $data ?? [], null);
        $this->setIfExists('tp_emit', $data ?? [], null);
        $this->setIfExists('tp_transp', $data ?? [], null);
        $this->setIfExists('mod', $data ?? [], null);
        $this->setIfExists('serie', $data ?? [], null);
        $this->setIfExists('n_mdf', $data ?? [], null);
        $this->setIfExists('c_mdf', $data ?? [], null);
        $this->setIfExists('c_dv', $data ?? [], null);
        $this->setIfExists('modal', $data ?? [], null);
        $this->setIfExists('dh_emi', $data ?? [], null);
        $this->setIfExists('tp_emis', $data ?? [], null);
        $this->setIfExists('proc_emi', $data ?? [], null);
        $this->setIfExists('ver_proc', $data ?? [], null);
        $this->setIfExists('uf_ini', $data ?? [], null);
        $this->setIfExists('uf_fim', $data ?? [], null);
        $this->setIfExists('inf_mun_carrega', $data ?? [], null);
        $this->setIfExists('inf_percurso', $data ?? [], null);
        $this->setIfExists('dh_ini_viagem', $data ?? [], null);
        $this->setIfExists('ind_canal_verde', $data ?? [], null);
        $this->setIfExists('ind_carrega_posterior', $data ?? [], null);
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

        if ($this->container['c_uf'] === null) {
            $invalidProperties[] = "'c_uf' can't be null";
        }
        if ($this->container['tp_emit'] === null) {
            $invalidProperties[] = "'tp_emit' can't be null";
        }
        if ($this->container['serie'] === null) {
            $invalidProperties[] = "'serie' can't be null";
        }
        if (($this->container['serie'] > 999)) {
            $invalidProperties[] = "invalid value for 'serie', must be smaller than or equal to 999.";
        }

        if (($this->container['serie'] < 0)) {
            $invalidProperties[] = "invalid value for 'serie', must be bigger than or equal to 0.";
        }

        if ($this->container['n_mdf'] === null) {
            $invalidProperties[] = "'n_mdf' can't be null";
        }
        if (($this->container['n_mdf'] > 999999999)) {
            $invalidProperties[] = "invalid value for 'n_mdf', must be smaller than or equal to 999999999.";
        }

        if (($this->container['n_mdf'] < 1)) {
            $invalidProperties[] = "invalid value for 'n_mdf', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['c_dv']) && ($this->container['c_dv'] > 9)) {
            $invalidProperties[] = "invalid value for 'c_dv', must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['c_dv']) && ($this->container['c_dv'] < 0)) {
            $invalidProperties[] = "invalid value for 'c_dv', must be bigger than or equal to 0.";
        }

        if ($this->container['modal'] === null) {
            $invalidProperties[] = "'modal' can't be null";
        }
        if ($this->container['dh_emi'] === null) {
            $invalidProperties[] = "'dh_emi' can't be null";
        }
        if ($this->container['tp_emis'] === null) {
            $invalidProperties[] = "'tp_emis' can't be null";
        }
        if ($this->container['proc_emi'] === null) {
            $invalidProperties[] = "'proc_emi' can't be null";
        }
        if ($this->container['ver_proc'] === null) {
            $invalidProperties[] = "'ver_proc' can't be null";
        }
        if ((mb_strlen($this->container['ver_proc']) > 20)) {
            $invalidProperties[] = "invalid value for 'ver_proc', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['ver_proc']) < 1)) {
            $invalidProperties[] = "invalid value for 'ver_proc', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['uf_ini'] === null) {
            $invalidProperties[] = "'uf_ini' can't be null";
        }
        if ($this->container['uf_fim'] === null) {
            $invalidProperties[] = "'uf_fim' can't be null";
        }
        if ($this->container['inf_mun_carrega'] === null) {
            $invalidProperties[] = "'inf_mun_carrega' can't be null";
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
     * Gets c_uf
     *
     * @return int
     */
    public function getCUf()
    {
        return $this->container['c_uf'];
    }

    /**
     * Sets c_uf
     *
     * @param int $c_uf Código da UF do emitente do MDF-e.  Código da UF do emitente do Documento Fiscal. Utilizar a  Tabela do IBGE de código de unidades da federação.
     *
     * @return self
     */
    public function setCUf($c_uf)
    {
        if (is_null($c_uf)) {
            array_push($this->openAPINullablesSetToNull, 'c_uf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_uf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_uf'] = $c_uf;

        return $this;
    }

    /**
     * Gets tp_amb
     *
     * @return int|null
     */
    public function getTpAmb()
    {
        return $this->container['tp_amb'];
    }

    /**
     * Sets tp_amb
     *
     * @param int|null $tp_amb Tipo do Ambiente.  * 1 - Produção  * 2 - Homologação
     *
     * @return self
     */
    public function setTpAmb($tp_amb)
    {
        if (is_null($tp_amb)) {
            array_push($this->openAPINullablesSetToNull, 'tp_amb');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_amb', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_amb'] = $tp_amb;

        return $this;
    }

    /**
     * Gets tp_emit
     *
     * @return int
     */
    public function getTpEmit()
    {
        return $this->container['tp_emit'];
    }

    /**
     * Sets tp_emit
     *
     * @param int $tp_emit Tipo do Emitente.  * 1 - Prestador de serviço de transporte  * 2 - Transportador de Carga Própria 3 - Prestador de serviço de transporte que emitirá CT-e Globalizado  OBS: Deve ser preenchido com 2 para emitentes de NF-e e pelas transportadoras quando estiverem fazendo transporte de carga própria. Deve ser preenchido com 3 para transportador de carga que emitirá à posteriori CT-e Globalizado relacionando as NF-e.
     *
     * @return self
     */
    public function setTpEmit($tp_emit)
    {
        if (is_null($tp_emit)) {
            array_push($this->openAPINullablesSetToNull, 'tp_emit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_emit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_emit'] = $tp_emit;

        return $this;
    }

    /**
     * Gets tp_transp
     *
     * @return int|null
     */
    public function getTpTransp()
    {
        return $this->container['tp_transp'];
    }

    /**
     * Sets tp_transp
     *
     * @param int|null $tp_transp Tipo do Transportador.  * 1 - ETC  * 2 - TAC  * 3 - CTC
     *
     * @return self
     */
    public function setTpTransp($tp_transp)
    {
        if (is_null($tp_transp)) {
            array_push($this->openAPINullablesSetToNull, 'tp_transp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_transp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_transp'] = $tp_transp;

        return $this;
    }

    /**
     * Gets mod
     *
     * @return int|null
     */
    public function getMod()
    {
        return $this->container['mod'];
    }

    /**
     * Sets mod
     *
     * @param int|null $mod Modelo do Manifesto Eletrônico.  Utilizar o código 58 para identificação do MDF-e.
     *
     * @return self
     */
    public function setMod($mod)
    {
        if (is_null($mod)) {
            array_push($this->openAPINullablesSetToNull, 'mod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mod'] = $mod;

        return $this;
    }

    /**
     * Gets serie
     *
     * @return int
     */
    public function getSerie()
    {
        return $this->container['serie'];
    }

    /**
     * Sets serie
     *
     * @param int $serie Série do Manifesto.  Informar a série do documento fiscal (informar zero se inexistente).  Série na faixa [920-969]: Reservada para emissão por contribuinte pessoa física com inscrição estadual.
     *
     * @return self
     */
    public function setSerie($serie)
    {
        if (is_null($serie)) {
            array_push($this->openAPINullablesSetToNull, 'serie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('serie', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($serie) && ($serie > 999)) {
            throw new \InvalidArgumentException('invalid value for $serie when calling MdfeSefazIde., must be smaller than or equal to 999.');
        }
        if (!is_null($serie) && ($serie < 0)) {
            throw new \InvalidArgumentException('invalid value for $serie when calling MdfeSefazIde., must be bigger than or equal to 0.');
        }

        $this->container['serie'] = $serie;

        return $this;
    }

    /**
     * Gets n_mdf
     *
     * @return int
     */
    public function getNMdf()
    {
        return $this->container['n_mdf'];
    }

    /**
     * Sets n_mdf
     *
     * @param int $n_mdf Número do Manifesto.  Número que identifica o Manifesto. 1 a 999999999.
     *
     * @return self
     */
    public function setNMdf($n_mdf)
    {
        if (is_null($n_mdf)) {
            array_push($this->openAPINullablesSetToNull, 'n_mdf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_mdf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_mdf) && ($n_mdf > 999999999)) {
            throw new \InvalidArgumentException('invalid value for $n_mdf when calling MdfeSefazIde., must be smaller than or equal to 999999999.');
        }
        if (!is_null($n_mdf) && ($n_mdf < 1)) {
            throw new \InvalidArgumentException('invalid value for $n_mdf when calling MdfeSefazIde., must be bigger than or equal to 1.');
        }

        $this->container['n_mdf'] = $n_mdf;

        return $this;
    }

    /**
     * Gets c_mdf
     *
     * @return string|null
     */
    public function getCMdf()
    {
        return $this->container['c_mdf'];
    }

    /**
     * Sets c_mdf
     *
     * @param string|null $c_mdf Código numérico que compõe a Chave de Acesso.  Código aleatório gerado pelo emitente, com o objetivo de evitar acessos indevidos ao documento.    *Geramos automaticamente quando nenhum valor é informado.*
     *
     * @return self
     */
    public function setCMdf($c_mdf)
    {
        if (is_null($c_mdf)) {
            array_push($this->openAPINullablesSetToNull, 'c_mdf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_mdf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_mdf'] = $c_mdf;

        return $this;
    }

    /**
     * Gets c_dv
     *
     * @return int|null
     */
    public function getCDv()
    {
        return $this->container['c_dv'];
    }

    /**
     * Sets c_dv
     *
     * @param int|null $c_dv Digito verificador da chave de acesso do Manifesto.  Informar o dígito  de controle da chave de acesso do MDF-e, que deve ser calculado com a aplicação do algoritmo módulo 11 (base 2,9) da chave de acesso.    *Geramos automaticamente quando nenhum valor é informado.*
     *
     * @return self
     */
    public function setCDv($c_dv)
    {
        if (is_null($c_dv)) {
            array_push($this->openAPINullablesSetToNull, 'c_dv');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_dv', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($c_dv) && ($c_dv > 9)) {
            throw new \InvalidArgumentException('invalid value for $c_dv when calling MdfeSefazIde., must be smaller than or equal to 9.');
        }
        if (!is_null($c_dv) && ($c_dv < 0)) {
            throw new \InvalidArgumentException('invalid value for $c_dv when calling MdfeSefazIde., must be bigger than or equal to 0.');
        }

        $this->container['c_dv'] = $c_dv;

        return $this;
    }

    /**
     * Gets modal
     *
     * @return int
     */
    public function getModal()
    {
        return $this->container['modal'];
    }

    /**
     * Sets modal
     *
     * @param int $modal Modalidade de transporte.  * 1 - Rodoviário  * 2 - Aéreo  * 3 - Aquaviário  * 4 - Ferroviário
     *
     * @return self
     */
    public function setModal($modal)
    {
        if (is_null($modal)) {
            array_push($this->openAPINullablesSetToNull, 'modal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('modal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['modal'] = $modal;

        return $this;
    }

    /**
     * Gets dh_emi
     *
     * @return \DateTime
     */
    public function getDhEmi()
    {
        return $this->container['dh_emi'];
    }

    /**
     * Sets dh_emi
     *
     * @param \DateTime $dh_emi Data e hora de emissão do Manifesto.  Formato AAAA-MM-DDTHH:MM:DD TZD.
     *
     * @return self
     */
    public function setDhEmi($dh_emi)
    {
        if (is_null($dh_emi)) {
            array_push($this->openAPINullablesSetToNull, 'dh_emi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dh_emi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dh_emi'] = $dh_emi;

        return $this;
    }

    /**
     * Gets tp_emis
     *
     * @return int
     */
    public function getTpEmis()
    {
        return $this->container['tp_emis'];
    }

    /**
     * Sets tp_emis
     *
     * @param int $tp_emis Forma de emissão do Manifesto.  * 1 - Normal  * 2 - Contingência  * 3 - Regime Especial NFF
     *
     * @return self
     */
    public function setTpEmis($tp_emis)
    {
        if (is_null($tp_emis)) {
            array_push($this->openAPINullablesSetToNull, 'tp_emis');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tp_emis', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tp_emis'] = $tp_emis;

        return $this;
    }

    /**
     * Gets proc_emi
     *
     * @return string
     */
    public function getProcEmi()
    {
        return $this->container['proc_emi'];
    }

    /**
     * Sets proc_emi
     *
     * @param string $proc_emi Identificação do processo de emissão do Manifesto.  * 0 - emissão de MDF-e com aplicativo do contribuinte
     *
     * @return self
     */
    public function setProcEmi($proc_emi)
    {
        if (is_null($proc_emi)) {
            array_push($this->openAPINullablesSetToNull, 'proc_emi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('proc_emi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['proc_emi'] = $proc_emi;

        return $this;
    }

    /**
     * Gets ver_proc
     *
     * @return string
     */
    public function getVerProc()
    {
        return $this->container['ver_proc'];
    }

    /**
     * Sets ver_proc
     *
     * @param string $ver_proc Versão do processo de emissão.  Informar a versão do aplicativo emissor de MDF-e.
     *
     * @return self
     */
    public function setVerProc($ver_proc)
    {
        if (is_null($ver_proc)) {
            array_push($this->openAPINullablesSetToNull, 'ver_proc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ver_proc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($ver_proc) && (mb_strlen($ver_proc) > 20)) {
            throw new \InvalidArgumentException('invalid length for $ver_proc when calling MdfeSefazIde., must be smaller than or equal to 20.');
        }
        if (!is_null($ver_proc) && (mb_strlen($ver_proc) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ver_proc when calling MdfeSefazIde., must be bigger than or equal to 1.');
        }

        $this->container['ver_proc'] = $ver_proc;

        return $this;
    }

    /**
     * Gets uf_ini
     *
     * @return string
     */
    public function getUfIni()
    {
        return $this->container['uf_ini'];
    }

    /**
     * Sets uf_ini
     *
     * @param string $uf_ini Sigla da UF do Carregamento.  Utilizar a Tabela do IBGE de código de unidades da federação.  Informar 'EX' para operações com o exterior.
     *
     * @return self
     */
    public function setUfIni($uf_ini)
    {
        if (is_null($uf_ini)) {
            array_push($this->openAPINullablesSetToNull, 'uf_ini');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uf_ini', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uf_ini'] = $uf_ini;

        return $this;
    }

    /**
     * Gets uf_fim
     *
     * @return string
     */
    public function getUfFim()
    {
        return $this->container['uf_fim'];
    }

    /**
     * Sets uf_fim
     *
     * @param string $uf_fim Sigla da UF do Descarregamento.  Utilizar a Tabela do IBGE de código de unidades da federação.  Informar 'EX' para operações com o exterior.
     *
     * @return self
     */
    public function setUfFim($uf_fim)
    {
        if (is_null($uf_fim)) {
            array_push($this->openAPINullablesSetToNull, 'uf_fim');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uf_fim', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uf_fim'] = $uf_fim;

        return $this;
    }

    /**
     * Gets inf_mun_carrega
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfMunCarrega[]
     */
    public function getInfMunCarrega()
    {
        return $this->container['inf_mun_carrega'];
    }

    /**
     * Sets inf_mun_carrega
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfMunCarrega[] $inf_mun_carrega inf_mun_carrega
     *
     * @return self
     */
    public function setInfMunCarrega($inf_mun_carrega)
    {
        if (is_null($inf_mun_carrega)) {
            throw new \InvalidArgumentException('non-nullable inf_mun_carrega cannot be null');
        }
        $this->container['inf_mun_carrega'] = $inf_mun_carrega;

        return $this;
    }

    /**
     * Gets inf_percurso
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfPercurso[]|null
     */
    public function getInfPercurso()
    {
        return $this->container['inf_percurso'];
    }

    /**
     * Sets inf_percurso
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfPercurso[]|null $inf_percurso inf_percurso
     *
     * @return self
     */
    public function setInfPercurso($inf_percurso)
    {
        if (is_null($inf_percurso)) {
            throw new \InvalidArgumentException('non-nullable inf_percurso cannot be null');
        }
        $this->container['inf_percurso'] = $inf_percurso;

        return $this;
    }

    /**
     * Gets dh_ini_viagem
     *
     * @return \DateTime|null
     */
    public function getDhIniViagem()
    {
        return $this->container['dh_ini_viagem'];
    }

    /**
     * Sets dh_ini_viagem
     *
     * @param \DateTime|null $dh_ini_viagem Data e hora previstos de inicio da viagem.  Formato AAAA-MM-DDTHH:MM:DD TZD.
     *
     * @return self
     */
    public function setDhIniViagem($dh_ini_viagem)
    {
        if (is_null($dh_ini_viagem)) {
            array_push($this->openAPINullablesSetToNull, 'dh_ini_viagem');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dh_ini_viagem', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dh_ini_viagem'] = $dh_ini_viagem;

        return $this;
    }

    /**
     * Gets ind_canal_verde
     *
     * @return int|null
     */
    public function getIndCanalVerde()
    {
        return $this->container['ind_canal_verde'];
    }

    /**
     * Sets ind_canal_verde
     *
     * @param int|null $ind_canal_verde Indicador de participação do Canal Verde.
     *
     * @return self
     */
    public function setIndCanalVerde($ind_canal_verde)
    {
        if (is_null($ind_canal_verde)) {
            array_push($this->openAPINullablesSetToNull, 'ind_canal_verde');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ind_canal_verde', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ind_canal_verde'] = $ind_canal_verde;

        return $this;
    }

    /**
     * Gets ind_carrega_posterior
     *
     * @return int|null
     */
    public function getIndCarregaPosterior()
    {
        return $this->container['ind_carrega_posterior'];
    }

    /**
     * Sets ind_carrega_posterior
     *
     * @param int|null $ind_carrega_posterior Indicador de MDF-e com inclusão da Carga posterior a emissão por evento de inclusão de DF-e.
     *
     * @return self
     */
    public function setIndCarregaPosterior($ind_carrega_posterior)
    {
        if (is_null($ind_carrega_posterior)) {
            array_push($this->openAPINullablesSetToNull, 'ind_carrega_posterior');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ind_carrega_posterior', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ind_carrega_posterior'] = $ind_carrega_posterior;

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


