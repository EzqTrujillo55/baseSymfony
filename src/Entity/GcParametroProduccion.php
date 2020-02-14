<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcParametroProduccion
 *
 * @ORM\Table(name="gc_parametro_produccion")
 * @ORM\Entity
 */
class GcParametroProduccion
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pp_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ppId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id", type="bigint", nullable=false)
     */
    private $tcId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cc_id_mod", type="bigint", nullable=false)
     */
    private $ccIdMod = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pp_gif_valor_adicional", type="float", precision=10, scale=0, nullable=false)
     */
    private $ppGifValorAdicional = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pp_mod_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $ppModPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pp_gif_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $ppGifPorcentaje = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_mod", type="bigint", nullable=false)
     */
    private $cuIdMod = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_gif", type="bigint", nullable=false)
     */
    private $cuIdGif = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pp_tipo_funcionamiento", type="boolean", nullable=false)
     */
    private $ppTipoFuncionamiento = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pp_mod_valor_adicional", type="float", precision=10, scale=0, nullable=false)
     */
    private $ppModValorAdicional = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pp_mod_costo_unidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $ppModCostoUnidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pp_gif_costo_unidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $ppGifCostoUnidad = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ce_id_mod", type="bigint", nullable=false)
     */
    private $ceIdMod = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getPpId(): ?string
    {
        return $this->ppId;
    }

    public function getTcId(): ?string
    {
        return $this->tcId;
    }

    public function setTcId(string $tcId): self
    {
        $this->tcId = $tcId;

        return $this;
    }

    public function getCcIdMod(): ?string
    {
        return $this->ccIdMod;
    }

    public function setCcIdMod(string $ccIdMod): self
    {
        $this->ccIdMod = $ccIdMod;

        return $this;
    }

    public function getPpGifValorAdicional(): ?float
    {
        return $this->ppGifValorAdicional;
    }

    public function setPpGifValorAdicional(float $ppGifValorAdicional): self
    {
        $this->ppGifValorAdicional = $ppGifValorAdicional;

        return $this;
    }

    public function getPpModPorcentaje(): ?float
    {
        return $this->ppModPorcentaje;
    }

    public function setPpModPorcentaje(float $ppModPorcentaje): self
    {
        $this->ppModPorcentaje = $ppModPorcentaje;

        return $this;
    }

    public function getPpGifPorcentaje(): ?float
    {
        return $this->ppGifPorcentaje;
    }

    public function setPpGifPorcentaje(float $ppGifPorcentaje): self
    {
        $this->ppGifPorcentaje = $ppGifPorcentaje;

        return $this;
    }

    public function getCuIdMod(): ?string
    {
        return $this->cuIdMod;
    }

    public function setCuIdMod(string $cuIdMod): self
    {
        $this->cuIdMod = $cuIdMod;

        return $this;
    }

    public function getCuIdGif(): ?string
    {
        return $this->cuIdGif;
    }

    public function setCuIdGif(string $cuIdGif): self
    {
        $this->cuIdGif = $cuIdGif;

        return $this;
    }

    public function getPpTipoFuncionamiento(): ?bool
    {
        return $this->ppTipoFuncionamiento;
    }

    public function setPpTipoFuncionamiento(bool $ppTipoFuncionamiento): self
    {
        $this->ppTipoFuncionamiento = $ppTipoFuncionamiento;

        return $this;
    }

    public function getPpModValorAdicional(): ?float
    {
        return $this->ppModValorAdicional;
    }

    public function setPpModValorAdicional(float $ppModValorAdicional): self
    {
        $this->ppModValorAdicional = $ppModValorAdicional;

        return $this;
    }

    public function getPpModCostoUnidad(): ?float
    {
        return $this->ppModCostoUnidad;
    }

    public function setPpModCostoUnidad(float $ppModCostoUnidad): self
    {
        $this->ppModCostoUnidad = $ppModCostoUnidad;

        return $this;
    }

    public function getPpGifCostoUnidad(): ?float
    {
        return $this->ppGifCostoUnidad;
    }

    public function setPpGifCostoUnidad(float $ppGifCostoUnidad): self
    {
        $this->ppGifCostoUnidad = $ppGifCostoUnidad;

        return $this;
    }

    public function getCeIdMod(): ?string
    {
        return $this->ceIdMod;
    }

    public function setCeIdMod(string $ceIdMod): self
    {
        $this->ceIdMod = $ceIdMod;

        return $this;
    }


}
