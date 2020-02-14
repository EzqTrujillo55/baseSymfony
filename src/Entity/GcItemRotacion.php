<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcItemRotacion
 *
 * @ORM\Table(name="gc_item_rotacion")
 * @ORM\Entity
 */
class GcItemRotacion
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
     * @ORM\Column(name="it_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $usId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="it_codigo", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $itCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_cod_alterno", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $itCodAlterno = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_nombre", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $itNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ti_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $tiCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="st_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $stCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ma_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $maCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $coCodigo = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_mes_1", type="float", precision=10, scale=0, nullable=false)
     */
    private $irMes1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_mes_2", type="float", precision=10, scale=0, nullable=false)
     */
    private $irMes2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_mes_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $irMes3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_mes_4", type="float", precision=10, scale=0, nullable=false)
     */
    private $irMes4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_mes_5", type="float", precision=10, scale=0, nullable=false)
     */
    private $irMes5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_mes_6", type="float", precision=10, scale=0, nullable=false)
     */
    private $irMes6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_mes_7", type="float", precision=10, scale=0, nullable=false)
     */
    private $irMes7 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_mes_8", type="float", precision=10, scale=0, nullable=false)
     */
    private $irMes8 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_mes_9", type="float", precision=10, scale=0, nullable=false)
     */
    private $irMes9 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_mes_10", type="float", precision=10, scale=0, nullable=false)
     */
    private $irMes10 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_mes_11", type="float", precision=10, scale=0, nullable=false)
     */
    private $irMes11 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_mes_12", type="float", precision=10, scale=0, nullable=false)
     */
    private $irMes12 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_total_anio", type="float", precision=10, scale=0, nullable=false)
     */
    private $irTotalAnio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $irPorcentaje = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getItId(): ?string
    {
        return $this->itId;
    }

    public function getUsId(): ?string
    {
        return $this->usId;
    }

    public function getItCodigo(): ?string
    {
        return $this->itCodigo;
    }

    public function setItCodigo(string $itCodigo): self
    {
        $this->itCodigo = $itCodigo;

        return $this;
    }

    public function getItCodAlterno(): ?string
    {
        return $this->itCodAlterno;
    }

    public function setItCodAlterno(string $itCodAlterno): self
    {
        $this->itCodAlterno = $itCodAlterno;

        return $this;
    }

    public function getItNombre(): ?string
    {
        return $this->itNombre;
    }

    public function setItNombre(string $itNombre): self
    {
        $this->itNombre = $itNombre;

        return $this;
    }

    public function getTiCodigo(): ?string
    {
        return $this->tiCodigo;
    }

    public function setTiCodigo(string $tiCodigo): self
    {
        $this->tiCodigo = $tiCodigo;

        return $this;
    }

    public function getStCodigo(): ?string
    {
        return $this->stCodigo;
    }

    public function setStCodigo(string $stCodigo): self
    {
        $this->stCodigo = $stCodigo;

        return $this;
    }

    public function getMaCodigo(): ?string
    {
        return $this->maCodigo;
    }

    public function setMaCodigo(string $maCodigo): self
    {
        $this->maCodigo = $maCodigo;

        return $this;
    }

    public function getCoCodigo(): ?string
    {
        return $this->coCodigo;
    }

    public function setCoCodigo(string $coCodigo): self
    {
        $this->coCodigo = $coCodigo;

        return $this;
    }

    public function getIrMes1(): ?float
    {
        return $this->irMes1;
    }

    public function setIrMes1(float $irMes1): self
    {
        $this->irMes1 = $irMes1;

        return $this;
    }

    public function getIrMes2(): ?float
    {
        return $this->irMes2;
    }

    public function setIrMes2(float $irMes2): self
    {
        $this->irMes2 = $irMes2;

        return $this;
    }

    public function getIrMes3(): ?float
    {
        return $this->irMes3;
    }

    public function setIrMes3(float $irMes3): self
    {
        $this->irMes3 = $irMes3;

        return $this;
    }

    public function getIrMes4(): ?float
    {
        return $this->irMes4;
    }

    public function setIrMes4(float $irMes4): self
    {
        $this->irMes4 = $irMes4;

        return $this;
    }

    public function getIrMes5(): ?float
    {
        return $this->irMes5;
    }

    public function setIrMes5(float $irMes5): self
    {
        $this->irMes5 = $irMes5;

        return $this;
    }

    public function getIrMes6(): ?float
    {
        return $this->irMes6;
    }

    public function setIrMes6(float $irMes6): self
    {
        $this->irMes6 = $irMes6;

        return $this;
    }

    public function getIrMes7(): ?float
    {
        return $this->irMes7;
    }

    public function setIrMes7(float $irMes7): self
    {
        $this->irMes7 = $irMes7;

        return $this;
    }

    public function getIrMes8(): ?float
    {
        return $this->irMes8;
    }

    public function setIrMes8(float $irMes8): self
    {
        $this->irMes8 = $irMes8;

        return $this;
    }

    public function getIrMes9(): ?float
    {
        return $this->irMes9;
    }

    public function setIrMes9(float $irMes9): self
    {
        $this->irMes9 = $irMes9;

        return $this;
    }

    public function getIrMes10(): ?float
    {
        return $this->irMes10;
    }

    public function setIrMes10(float $irMes10): self
    {
        $this->irMes10 = $irMes10;

        return $this;
    }

    public function getIrMes11(): ?float
    {
        return $this->irMes11;
    }

    public function setIrMes11(float $irMes11): self
    {
        $this->irMes11 = $irMes11;

        return $this;
    }

    public function getIrMes12(): ?float
    {
        return $this->irMes12;
    }

    public function setIrMes12(float $irMes12): self
    {
        $this->irMes12 = $irMes12;

        return $this;
    }

    public function getIrTotalAnio(): ?float
    {
        return $this->irTotalAnio;
    }

    public function setIrTotalAnio(float $irTotalAnio): self
    {
        $this->irTotalAnio = $irTotalAnio;

        return $this;
    }

    public function getIrPorcentaje(): ?float
    {
        return $this->irPorcentaje;
    }

    public function setIrPorcentaje(float $irPorcentaje): self
    {
        $this->irPorcentaje = $irPorcentaje;

        return $this;
    }


}
