<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcParametroRrhh
 *
 * @ORM\Table(name="gc_parametro_rrhh")
 * @ORM\Entity
 */
class GcParametroRrhh
{
    /**
     * @var int
     *
     * @ORM\Column(name="pr_rrhh_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prRrhhId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pr_rrhh_tc_id_pago_decimos", type="bigint", nullable=false)
     */
    private $prRrhhTcIdPagoDecimos = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pr_rrhh_tc_id_pago_rol", type="bigint", nullable=false)
     */
    private $prRrhhTcIdPagoRol = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pr_rrhh_tc_id_anticipos", type="bigint", nullable=false)
     */
    private $prRrhhTcIdAnticipos = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pr_rrhh_tc_id_provision", type="bigint", nullable=false)
     */
    private $prRrhhTcIdProvision = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pr_rrhh_tc_id_liquidacion", type="bigint", nullable=false)
     */
    private $prRrhhTcIdLiquidacion = '0';

    public function getPrRrhhId(): ?string
    {
        return $this->prRrhhId;
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

    public function getPrRrhhTcIdPagoDecimos(): ?string
    {
        return $this->prRrhhTcIdPagoDecimos;
    }

    public function setPrRrhhTcIdPagoDecimos(string $prRrhhTcIdPagoDecimos): self
    {
        $this->prRrhhTcIdPagoDecimos = $prRrhhTcIdPagoDecimos;

        return $this;
    }

    public function getPrRrhhTcIdPagoRol(): ?string
    {
        return $this->prRrhhTcIdPagoRol;
    }

    public function setPrRrhhTcIdPagoRol(string $prRrhhTcIdPagoRol): self
    {
        $this->prRrhhTcIdPagoRol = $prRrhhTcIdPagoRol;

        return $this;
    }

    public function getPrRrhhTcIdAnticipos(): ?string
    {
        return $this->prRrhhTcIdAnticipos;
    }

    public function setPrRrhhTcIdAnticipos(string $prRrhhTcIdAnticipos): self
    {
        $this->prRrhhTcIdAnticipos = $prRrhhTcIdAnticipos;

        return $this;
    }

    public function getPrRrhhTcIdProvision(): ?string
    {
        return $this->prRrhhTcIdProvision;
    }

    public function setPrRrhhTcIdProvision(string $prRrhhTcIdProvision): self
    {
        $this->prRrhhTcIdProvision = $prRrhhTcIdProvision;

        return $this;
    }

    public function getPrRrhhTcIdLiquidacion(): ?string
    {
        return $this->prRrhhTcIdLiquidacion;
    }

    public function setPrRrhhTcIdLiquidacion(string $prRrhhTcIdLiquidacion): self
    {
        $this->prRrhhTcIdLiquidacion = $prRrhhTcIdLiquidacion;

        return $this;
    }


}
