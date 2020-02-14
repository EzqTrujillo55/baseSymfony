<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcItemActivoPrestado
 *
 * @ORM\Table(name="gc_item_activo_prestado")
 * @ORM\Entity
 */
class GcItemActivoPrestado
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
     * @ORM\Column(name="ip_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ipId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ga_id", type="bigint", nullable=false)
     */
    private $gaId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_estado", type="string", length=1, nullable=false, options={"default"="'P'","fixed"=true})
     */
    private $ipEstado = '\'P\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ip_fecha_prestamo", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $ipFechaPrestamo = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_observacion_prestamo", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ipObservacionPrestamo = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ip_fecha_devolucion", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $ipFechaDevolucion = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_observacion_devolucion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ipObservacionDevolucion = '\'*\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getIpId(): ?string
    {
        return $this->ipId;
    }

    public function getGaId(): ?string
    {
        return $this->gaId;
    }

    public function setGaId(string $gaId): self
    {
        $this->gaId = $gaId;

        return $this;
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

    public function getIpEstado(): ?string
    {
        return $this->ipEstado;
    }

    public function setIpEstado(string $ipEstado): self
    {
        $this->ipEstado = $ipEstado;

        return $this;
    }

    public function getIpFechaPrestamo(): ?\DateTimeInterface
    {
        return $this->ipFechaPrestamo;
    }

    public function setIpFechaPrestamo(\DateTimeInterface $ipFechaPrestamo): self
    {
        $this->ipFechaPrestamo = $ipFechaPrestamo;

        return $this;
    }

    public function getIpObservacionPrestamo(): ?string
    {
        return $this->ipObservacionPrestamo;
    }

    public function setIpObservacionPrestamo(string $ipObservacionPrestamo): self
    {
        $this->ipObservacionPrestamo = $ipObservacionPrestamo;

        return $this;
    }

    public function getIpFechaDevolucion(): ?\DateTimeInterface
    {
        return $this->ipFechaDevolucion;
    }

    public function setIpFechaDevolucion(\DateTimeInterface $ipFechaDevolucion): self
    {
        $this->ipFechaDevolucion = $ipFechaDevolucion;

        return $this;
    }

    public function getIpObservacionDevolucion(): ?string
    {
        return $this->ipObservacionDevolucion;
    }

    public function setIpObservacionDevolucion(string $ipObservacionDevolucion): self
    {
        $this->ipObservacionDevolucion = $ipObservacionDevolucion;

        return $this;
    }


}
