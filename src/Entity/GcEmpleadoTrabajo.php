<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoTrabajo
 *
 * @ORM\Table(name="gc_empleado_trabajo")
 * @ORM\Entity
 */
class GcEmpleadoTrabajo
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
     * @ORM\Column(name="mt_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mtId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mt_nombre_empresa", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $mtNombreEmpresa = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mt_cargo", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $mtCargo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pa_id", type="bigint", nullable=false)
     */
    private $paId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ci_id", type="bigint", nullable=false)
     */
    private $ciId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mt_fecha_ingreso", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mtFechaIngreso = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mt_fecha_salida", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mtFechaSalida = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="mt_monto_ingreso", type="float", precision=10, scale=0, nullable=false)
     */
    private $mtMontoIngreso = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mt_monto_deducciones", type="float", precision=10, scale=0, nullable=false)
     */
    private $mtMontoDeducciones = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mt_monto_base_imponible", type="float", precision=10, scale=0, nullable=false)
     */
    private $mtMontoBaseImponible = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mt_monto_impuesto_renta", type="float", precision=10, scale=0, nullable=false)
     */
    private $mtMontoImpuestoRenta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mt_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $mtObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mt_otros", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $mtOtros = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mt_estado", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $mtEstado = '\'N\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMtId(): ?string
    {
        return $this->mtId;
    }

    public function getMpId(): ?string
    {
        return $this->mpId;
    }

    public function setMpId(string $mpId): self
    {
        $this->mpId = $mpId;

        return $this;
    }

    public function getMtNombreEmpresa(): ?string
    {
        return $this->mtNombreEmpresa;
    }

    public function setMtNombreEmpresa(string $mtNombreEmpresa): self
    {
        $this->mtNombreEmpresa = $mtNombreEmpresa;

        return $this;
    }

    public function getMtCargo(): ?string
    {
        return $this->mtCargo;
    }

    public function setMtCargo(string $mtCargo): self
    {
        $this->mtCargo = $mtCargo;

        return $this;
    }

    public function getPaId(): ?string
    {
        return $this->paId;
    }

    public function setPaId(string $paId): self
    {
        $this->paId = $paId;

        return $this;
    }

    public function getCiId(): ?string
    {
        return $this->ciId;
    }

    public function setCiId(string $ciId): self
    {
        $this->ciId = $ciId;

        return $this;
    }

    public function getMtFechaIngreso(): ?\DateTimeInterface
    {
        return $this->mtFechaIngreso;
    }

    public function setMtFechaIngreso(\DateTimeInterface $mtFechaIngreso): self
    {
        $this->mtFechaIngreso = $mtFechaIngreso;

        return $this;
    }

    public function getMtFechaSalida(): ?\DateTimeInterface
    {
        return $this->mtFechaSalida;
    }

    public function setMtFechaSalida(\DateTimeInterface $mtFechaSalida): self
    {
        $this->mtFechaSalida = $mtFechaSalida;

        return $this;
    }

    public function getMtMontoIngreso(): ?float
    {
        return $this->mtMontoIngreso;
    }

    public function setMtMontoIngreso(float $mtMontoIngreso): self
    {
        $this->mtMontoIngreso = $mtMontoIngreso;

        return $this;
    }

    public function getMtMontoDeducciones(): ?float
    {
        return $this->mtMontoDeducciones;
    }

    public function setMtMontoDeducciones(float $mtMontoDeducciones): self
    {
        $this->mtMontoDeducciones = $mtMontoDeducciones;

        return $this;
    }

    public function getMtMontoBaseImponible(): ?float
    {
        return $this->mtMontoBaseImponible;
    }

    public function setMtMontoBaseImponible(float $mtMontoBaseImponible): self
    {
        $this->mtMontoBaseImponible = $mtMontoBaseImponible;

        return $this;
    }

    public function getMtMontoImpuestoRenta(): ?float
    {
        return $this->mtMontoImpuestoRenta;
    }

    public function setMtMontoImpuestoRenta(float $mtMontoImpuestoRenta): self
    {
        $this->mtMontoImpuestoRenta = $mtMontoImpuestoRenta;

        return $this;
    }

    public function getMtObservacion(): ?string
    {
        return $this->mtObservacion;
    }

    public function setMtObservacion(string $mtObservacion): self
    {
        $this->mtObservacion = $mtObservacion;

        return $this;
    }

    public function getMtOtros(): ?string
    {
        return $this->mtOtros;
    }

    public function setMtOtros(string $mtOtros): self
    {
        $this->mtOtros = $mtOtros;

        return $this;
    }

    public function getMtEstado(): ?string
    {
        return $this->mtEstado;
    }

    public function setMtEstado(string $mtEstado): self
    {
        $this->mtEstado = $mtEstado;

        return $this;
    }


}
