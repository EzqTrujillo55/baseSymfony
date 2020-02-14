<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPersonaDireccion
 *
 * @ORM\Table(name="gc_persona_direccion", indexes={@ORM\Index(name="IndicePersonaDireccion", columns={"em_id", "pe_id"})})
 * @ORM\Entity
 */
class GcPersonaDireccion
{
    /**
     * @var int
     *
     * @ORM\Column(name="pe_dr_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $peDrId;

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_dr_tp_id", type="bigint", nullable=false)
     */
    private $peDrTpId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_dr_direccion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peDrDireccion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_dr_referencia", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peDrReferencia = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_dr_telefono", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peDrTelefono = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_dr_correo", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peDrCorreo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_dr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $peDrEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getPeDrId(): ?string
    {
        return $this->peDrId;
    }

    public function getPeId(): ?string
    {
        return $this->peId;
    }

    public function setPeId(string $peId): self
    {
        $this->peId = $peId;

        return $this;
    }

    public function getPeDrTpId(): ?string
    {
        return $this->peDrTpId;
    }

    public function setPeDrTpId(string $peDrTpId): self
    {
        $this->peDrTpId = $peDrTpId;

        return $this;
    }

    public function getPeDrDireccion(): ?string
    {
        return $this->peDrDireccion;
    }

    public function setPeDrDireccion(string $peDrDireccion): self
    {
        $this->peDrDireccion = $peDrDireccion;

        return $this;
    }

    public function getPeDrReferencia(): ?string
    {
        return $this->peDrReferencia;
    }

    public function setPeDrReferencia(string $peDrReferencia): self
    {
        $this->peDrReferencia = $peDrReferencia;

        return $this;
    }

    public function getPeDrTelefono(): ?string
    {
        return $this->peDrTelefono;
    }

    public function setPeDrTelefono(string $peDrTelefono): self
    {
        $this->peDrTelefono = $peDrTelefono;

        return $this;
    }

    public function getPeDrCorreo(): ?string
    {
        return $this->peDrCorreo;
    }

    public function setPeDrCorreo(string $peDrCorreo): self
    {
        $this->peDrCorreo = $peDrCorreo;

        return $this;
    }

    public function getPeDrEstado(): ?string
    {
        return $this->peDrEstado;
    }

    public function setPeDrEstado(string $peDrEstado): self
    {
        $this->peDrEstado = $peDrEstado;

        return $this;
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


}
