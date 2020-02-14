<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCuenta
 *
 * @ORM\Table(name="gc_cuenta", uniqueConstraints={@ORM\UniqueConstraint(name="IndiceCuenta", columns={"em_id", "cu_codigo"})}, indexes={@ORM\Index(name="indiceempresacuentaid", columns={"em_id", "cu_id"})})
 * @ORM\Entity
 */
class GcCuenta
{
    /**
     * @var int
     *
     * @ORM\Column(name="cu_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cuId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_superior", type="bigint", nullable=false)
     */
    private $cuIdSuperior = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_codigo", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $cuCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_periodo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $cuPeriodo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_nombre", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cuNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_movimiento", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $cuMovimiento = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_naturaleza", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $cuNaturaleza = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_banco", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $cuBanco = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_punto", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $cuPunto = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cuObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_estado", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $cuEstado = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_retencion", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $cuRetencion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_retencion_tipo", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $cuRetencionTipo = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_retencion_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuRetencionPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_enero_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuEneroDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_enero_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuEneroHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_febrero_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuFebreroDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_febrero_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuFebreroHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_marzo_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuMarzoDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_marzo_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuMarzoHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_abril_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuAbrilDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_abril_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuAbrilHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_mayo_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuMayoDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_mayo_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuMayoHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_junio_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuJunioDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_junio_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuJunioHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_julio_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuJulioDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_julio_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuJulioHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_agosto_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuAgostoDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_agosto_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuAgostoHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_septiembre_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuSeptiembreDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_septiembre_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuSeptiembreHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_octubre_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuOctubreDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_octubre_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuOctubreHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_noviembre_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuNoviembreDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_noviembre_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuNoviembreHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_diciembre_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuDiciembreDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_diciembre_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuDiciembreHaber = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tr_id", type="bigint", nullable=false)
     */
    private $trId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_nivel_uno", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cuNivelUno = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_nivel_dos", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cuNivelDos = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_nivel_tres", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cuNivelTres = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_nivel_cuatro", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cuNivelCuatro = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_nivel_cinco", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cuNivelCinco = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_debe_saldo", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuDebeSaldo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_haber_saldo", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuHaberSaldo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_sri_id", type="bigint", nullable=false)
     */
    private $cuSriId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_saldo_uno", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuSaldoUno = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_saldo_dos", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuSaldoDos = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_saldo_tres", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuSaldoTres = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_saldo_cuatro", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuSaldoCuatro = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_saldo_cinco", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuSaldoCinco = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cu_agrupar_tercero", type="string", length=1, nullable=true, options={"default"="'2'","fixed"=true})
     */
    private $cuAgruparTercero = '\'2\'';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_rp_id", type="bigint", nullable=false)
     */
    private $nfRpId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_pr_id", type="bigint", nullable=false)
     */
    private $nfPrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_sc_id", type="bigint", nullable=false)
     */
    private $nfScId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_tr_id", type="bigint", nullable=false)
     */
    private $nfTrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_rp_id2", type="bigint", nullable=false)
     */
    private $nfRpId2 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_sc_id2", type="bigint", nullable=false)
     */
    private $nfScId2 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_tr_id2", type="bigint", nullable=false)
     */
    private $nfTrId2 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_tr_id2b", type="bigint", nullable=false)
     */
    private $nfTrId2b = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_rp_id3", type="bigint", nullable=false)
     */
    private $nfRpId3 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cs_id", type="bigint", nullable=false)
     */
    private $csId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cu_cuenta_metodo_indirecto", type="boolean", nullable=false)
     */
    private $cuCuentaMetodoIndirecto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cu_saldo_final", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuSaldoFinal = '0';

    public function getCuId(): ?string
    {
        return $this->cuId;
    }

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function setEmId(string $emId): self
    {
        $this->emId = $emId;

        return $this;
    }

    public function getCuIdSuperior(): ?string
    {
        return $this->cuIdSuperior;
    }

    public function setCuIdSuperior(string $cuIdSuperior): self
    {
        $this->cuIdSuperior = $cuIdSuperior;

        return $this;
    }

    public function getCuCodigo(): ?string
    {
        return $this->cuCodigo;
    }

    public function setCuCodigo(string $cuCodigo): self
    {
        $this->cuCodigo = $cuCodigo;

        return $this;
    }

    public function getCuPeriodo(): ?string
    {
        return $this->cuPeriodo;
    }

    public function setCuPeriodo(string $cuPeriodo): self
    {
        $this->cuPeriodo = $cuPeriodo;

        return $this;
    }

    public function getCuNombre(): ?string
    {
        return $this->cuNombre;
    }

    public function setCuNombre(string $cuNombre): self
    {
        $this->cuNombre = $cuNombre;

        return $this;
    }

    public function getCuMovimiento(): ?string
    {
        return $this->cuMovimiento;
    }

    public function setCuMovimiento(string $cuMovimiento): self
    {
        $this->cuMovimiento = $cuMovimiento;

        return $this;
    }

    public function getCuNaturaleza(): ?string
    {
        return $this->cuNaturaleza;
    }

    public function setCuNaturaleza(string $cuNaturaleza): self
    {
        $this->cuNaturaleza = $cuNaturaleza;

        return $this;
    }

    public function getCuBanco(): ?string
    {
        return $this->cuBanco;
    }

    public function setCuBanco(string $cuBanco): self
    {
        $this->cuBanco = $cuBanco;

        return $this;
    }

    public function getCuPunto(): ?string
    {
        return $this->cuPunto;
    }

    public function setCuPunto(string $cuPunto): self
    {
        $this->cuPunto = $cuPunto;

        return $this;
    }

    public function getCuObservacion(): ?string
    {
        return $this->cuObservacion;
    }

    public function setCuObservacion(string $cuObservacion): self
    {
        $this->cuObservacion = $cuObservacion;

        return $this;
    }

    public function getCuEstado(): ?string
    {
        return $this->cuEstado;
    }

    public function setCuEstado(string $cuEstado): self
    {
        $this->cuEstado = $cuEstado;

        return $this;
    }

    public function getCuRetencion(): ?string
    {
        return $this->cuRetencion;
    }

    public function setCuRetencion(string $cuRetencion): self
    {
        $this->cuRetencion = $cuRetencion;

        return $this;
    }

    public function getCuRetencionTipo(): ?string
    {
        return $this->cuRetencionTipo;
    }

    public function setCuRetencionTipo(string $cuRetencionTipo): self
    {
        $this->cuRetencionTipo = $cuRetencionTipo;

        return $this;
    }

    public function getCuRetencionPorcentaje(): ?float
    {
        return $this->cuRetencionPorcentaje;
    }

    public function setCuRetencionPorcentaje(float $cuRetencionPorcentaje): self
    {
        $this->cuRetencionPorcentaje = $cuRetencionPorcentaje;

        return $this;
    }

    public function getCuEneroDebe(): ?float
    {
        return $this->cuEneroDebe;
    }

    public function setCuEneroDebe(float $cuEneroDebe): self
    {
        $this->cuEneroDebe = $cuEneroDebe;

        return $this;
    }

    public function getCuEneroHaber(): ?float
    {
        return $this->cuEneroHaber;
    }

    public function setCuEneroHaber(float $cuEneroHaber): self
    {
        $this->cuEneroHaber = $cuEneroHaber;

        return $this;
    }

    public function getCuFebreroDebe(): ?float
    {
        return $this->cuFebreroDebe;
    }

    public function setCuFebreroDebe(float $cuFebreroDebe): self
    {
        $this->cuFebreroDebe = $cuFebreroDebe;

        return $this;
    }

    public function getCuFebreroHaber(): ?float
    {
        return $this->cuFebreroHaber;
    }

    public function setCuFebreroHaber(float $cuFebreroHaber): self
    {
        $this->cuFebreroHaber = $cuFebreroHaber;

        return $this;
    }

    public function getCuMarzoDebe(): ?float
    {
        return $this->cuMarzoDebe;
    }

    public function setCuMarzoDebe(float $cuMarzoDebe): self
    {
        $this->cuMarzoDebe = $cuMarzoDebe;

        return $this;
    }

    public function getCuMarzoHaber(): ?float
    {
        return $this->cuMarzoHaber;
    }

    public function setCuMarzoHaber(float $cuMarzoHaber): self
    {
        $this->cuMarzoHaber = $cuMarzoHaber;

        return $this;
    }

    public function getCuAbrilDebe(): ?float
    {
        return $this->cuAbrilDebe;
    }

    public function setCuAbrilDebe(float $cuAbrilDebe): self
    {
        $this->cuAbrilDebe = $cuAbrilDebe;

        return $this;
    }

    public function getCuAbrilHaber(): ?float
    {
        return $this->cuAbrilHaber;
    }

    public function setCuAbrilHaber(float $cuAbrilHaber): self
    {
        $this->cuAbrilHaber = $cuAbrilHaber;

        return $this;
    }

    public function getCuMayoDebe(): ?float
    {
        return $this->cuMayoDebe;
    }

    public function setCuMayoDebe(float $cuMayoDebe): self
    {
        $this->cuMayoDebe = $cuMayoDebe;

        return $this;
    }

    public function getCuMayoHaber(): ?float
    {
        return $this->cuMayoHaber;
    }

    public function setCuMayoHaber(float $cuMayoHaber): self
    {
        $this->cuMayoHaber = $cuMayoHaber;

        return $this;
    }

    public function getCuJunioDebe(): ?float
    {
        return $this->cuJunioDebe;
    }

    public function setCuJunioDebe(float $cuJunioDebe): self
    {
        $this->cuJunioDebe = $cuJunioDebe;

        return $this;
    }

    public function getCuJunioHaber(): ?float
    {
        return $this->cuJunioHaber;
    }

    public function setCuJunioHaber(float $cuJunioHaber): self
    {
        $this->cuJunioHaber = $cuJunioHaber;

        return $this;
    }

    public function getCuJulioDebe(): ?float
    {
        return $this->cuJulioDebe;
    }

    public function setCuJulioDebe(float $cuJulioDebe): self
    {
        $this->cuJulioDebe = $cuJulioDebe;

        return $this;
    }

    public function getCuJulioHaber(): ?float
    {
        return $this->cuJulioHaber;
    }

    public function setCuJulioHaber(float $cuJulioHaber): self
    {
        $this->cuJulioHaber = $cuJulioHaber;

        return $this;
    }

    public function getCuAgostoDebe(): ?float
    {
        return $this->cuAgostoDebe;
    }

    public function setCuAgostoDebe(float $cuAgostoDebe): self
    {
        $this->cuAgostoDebe = $cuAgostoDebe;

        return $this;
    }

    public function getCuAgostoHaber(): ?float
    {
        return $this->cuAgostoHaber;
    }

    public function setCuAgostoHaber(float $cuAgostoHaber): self
    {
        $this->cuAgostoHaber = $cuAgostoHaber;

        return $this;
    }

    public function getCuSeptiembreDebe(): ?float
    {
        return $this->cuSeptiembreDebe;
    }

    public function setCuSeptiembreDebe(float $cuSeptiembreDebe): self
    {
        $this->cuSeptiembreDebe = $cuSeptiembreDebe;

        return $this;
    }

    public function getCuSeptiembreHaber(): ?float
    {
        return $this->cuSeptiembreHaber;
    }

    public function setCuSeptiembreHaber(float $cuSeptiembreHaber): self
    {
        $this->cuSeptiembreHaber = $cuSeptiembreHaber;

        return $this;
    }

    public function getCuOctubreDebe(): ?float
    {
        return $this->cuOctubreDebe;
    }

    public function setCuOctubreDebe(float $cuOctubreDebe): self
    {
        $this->cuOctubreDebe = $cuOctubreDebe;

        return $this;
    }

    public function getCuOctubreHaber(): ?float
    {
        return $this->cuOctubreHaber;
    }

    public function setCuOctubreHaber(float $cuOctubreHaber): self
    {
        $this->cuOctubreHaber = $cuOctubreHaber;

        return $this;
    }

    public function getCuNoviembreDebe(): ?float
    {
        return $this->cuNoviembreDebe;
    }

    public function setCuNoviembreDebe(float $cuNoviembreDebe): self
    {
        $this->cuNoviembreDebe = $cuNoviembreDebe;

        return $this;
    }

    public function getCuNoviembreHaber(): ?float
    {
        return $this->cuNoviembreHaber;
    }

    public function setCuNoviembreHaber(float $cuNoviembreHaber): self
    {
        $this->cuNoviembreHaber = $cuNoviembreHaber;

        return $this;
    }

    public function getCuDiciembreDebe(): ?float
    {
        return $this->cuDiciembreDebe;
    }

    public function setCuDiciembreDebe(float $cuDiciembreDebe): self
    {
        $this->cuDiciembreDebe = $cuDiciembreDebe;

        return $this;
    }

    public function getCuDiciembreHaber(): ?float
    {
        return $this->cuDiciembreHaber;
    }

    public function setCuDiciembreHaber(float $cuDiciembreHaber): self
    {
        $this->cuDiciembreHaber = $cuDiciembreHaber;

        return $this;
    }

    public function getTrId(): ?string
    {
        return $this->trId;
    }

    public function setTrId(string $trId): self
    {
        $this->trId = $trId;

        return $this;
    }

    public function getCuNivelUno(): ?string
    {
        return $this->cuNivelUno;
    }

    public function setCuNivelUno(string $cuNivelUno): self
    {
        $this->cuNivelUno = $cuNivelUno;

        return $this;
    }

    public function getCuNivelDos(): ?string
    {
        return $this->cuNivelDos;
    }

    public function setCuNivelDos(string $cuNivelDos): self
    {
        $this->cuNivelDos = $cuNivelDos;

        return $this;
    }

    public function getCuNivelTres(): ?string
    {
        return $this->cuNivelTres;
    }

    public function setCuNivelTres(string $cuNivelTres): self
    {
        $this->cuNivelTres = $cuNivelTres;

        return $this;
    }

    public function getCuNivelCuatro(): ?string
    {
        return $this->cuNivelCuatro;
    }

    public function setCuNivelCuatro(string $cuNivelCuatro): self
    {
        $this->cuNivelCuatro = $cuNivelCuatro;

        return $this;
    }

    public function getCuNivelCinco(): ?string
    {
        return $this->cuNivelCinco;
    }

    public function setCuNivelCinco(string $cuNivelCinco): self
    {
        $this->cuNivelCinco = $cuNivelCinco;

        return $this;
    }

    public function getCuDebeSaldo(): ?float
    {
        return $this->cuDebeSaldo;
    }

    public function setCuDebeSaldo(float $cuDebeSaldo): self
    {
        $this->cuDebeSaldo = $cuDebeSaldo;

        return $this;
    }

    public function getCuHaberSaldo(): ?float
    {
        return $this->cuHaberSaldo;
    }

    public function setCuHaberSaldo(float $cuHaberSaldo): self
    {
        $this->cuHaberSaldo = $cuHaberSaldo;

        return $this;
    }

    public function getCuSriId(): ?string
    {
        return $this->cuSriId;
    }

    public function setCuSriId(string $cuSriId): self
    {
        $this->cuSriId = $cuSriId;

        return $this;
    }

    public function getCuSaldoUno(): ?float
    {
        return $this->cuSaldoUno;
    }

    public function setCuSaldoUno(float $cuSaldoUno): self
    {
        $this->cuSaldoUno = $cuSaldoUno;

        return $this;
    }

    public function getCuSaldoDos(): ?float
    {
        return $this->cuSaldoDos;
    }

    public function setCuSaldoDos(float $cuSaldoDos): self
    {
        $this->cuSaldoDos = $cuSaldoDos;

        return $this;
    }

    public function getCuSaldoTres(): ?float
    {
        return $this->cuSaldoTres;
    }

    public function setCuSaldoTres(float $cuSaldoTres): self
    {
        $this->cuSaldoTres = $cuSaldoTres;

        return $this;
    }

    public function getCuSaldoCuatro(): ?float
    {
        return $this->cuSaldoCuatro;
    }

    public function setCuSaldoCuatro(float $cuSaldoCuatro): self
    {
        $this->cuSaldoCuatro = $cuSaldoCuatro;

        return $this;
    }

    public function getCuSaldoCinco(): ?float
    {
        return $this->cuSaldoCinco;
    }

    public function setCuSaldoCinco(float $cuSaldoCinco): self
    {
        $this->cuSaldoCinco = $cuSaldoCinco;

        return $this;
    }

    public function getCuAgruparTercero(): ?string
    {
        return $this->cuAgruparTercero;
    }

    public function setCuAgruparTercero(?string $cuAgruparTercero): self
    {
        $this->cuAgruparTercero = $cuAgruparTercero;

        return $this;
    }

    public function getNfRpId(): ?string
    {
        return $this->nfRpId;
    }

    public function setNfRpId(string $nfRpId): self
    {
        $this->nfRpId = $nfRpId;

        return $this;
    }

    public function getNfPrId(): ?string
    {
        return $this->nfPrId;
    }

    public function setNfPrId(string $nfPrId): self
    {
        $this->nfPrId = $nfPrId;

        return $this;
    }

    public function getNfScId(): ?string
    {
        return $this->nfScId;
    }

    public function setNfScId(string $nfScId): self
    {
        $this->nfScId = $nfScId;

        return $this;
    }

    public function getNfTrId(): ?string
    {
        return $this->nfTrId;
    }

    public function setNfTrId(string $nfTrId): self
    {
        $this->nfTrId = $nfTrId;

        return $this;
    }

    public function getNfRpId2(): ?string
    {
        return $this->nfRpId2;
    }

    public function setNfRpId2(string $nfRpId2): self
    {
        $this->nfRpId2 = $nfRpId2;

        return $this;
    }

    public function getNfScId2(): ?string
    {
        return $this->nfScId2;
    }

    public function setNfScId2(string $nfScId2): self
    {
        $this->nfScId2 = $nfScId2;

        return $this;
    }

    public function getNfTrId2(): ?string
    {
        return $this->nfTrId2;
    }

    public function setNfTrId2(string $nfTrId2): self
    {
        $this->nfTrId2 = $nfTrId2;

        return $this;
    }

    public function getNfTrId2b(): ?string
    {
        return $this->nfTrId2b;
    }

    public function setNfTrId2b(string $nfTrId2b): self
    {
        $this->nfTrId2b = $nfTrId2b;

        return $this;
    }

    public function getNfRpId3(): ?string
    {
        return $this->nfRpId3;
    }

    public function setNfRpId3(string $nfRpId3): self
    {
        $this->nfRpId3 = $nfRpId3;

        return $this;
    }

    public function getCsId(): ?string
    {
        return $this->csId;
    }

    public function setCsId(string $csId): self
    {
        $this->csId = $csId;

        return $this;
    }

    public function getCuCuentaMetodoIndirecto(): ?bool
    {
        return $this->cuCuentaMetodoIndirecto;
    }

    public function setCuCuentaMetodoIndirecto(bool $cuCuentaMetodoIndirecto): self
    {
        $this->cuCuentaMetodoIndirecto = $cuCuentaMetodoIndirecto;

        return $this;
    }

    public function getCuSaldoFinal(): ?float
    {
        return $this->cuSaldoFinal;
    }

    public function setCuSaldoFinal(float $cuSaldoFinal): self
    {
        $this->cuSaldoFinal = $cuSaldoFinal;

        return $this;
    }


}
