<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTransporte
 *
 * @ORM\Table(name="gc_transporte", indexes={@ORM\Index(name="indice_transporte", columns={"em_id", "tr_id"})})
 * @ORM\Entity
 */
class GcTransporte
{
    /**
     * @var int
     *
     * @ORM\Column(name="tr_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tr_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $trCodigo = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tr_nombre", type="string", length=250, nullable=true, options={"default"="'*'"})
     */
    private $trNombre = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tr_observacion", type="string", length=250, nullable=true, options={"default"="'*'"})
     */
    private $trObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tr_ruc", type="string", length=15, nullable=false, options={"default"="'*'"})
     */
    private $trRuc = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tr_partida", type="string", length=250, nullable=true, options={"default"="'*'"})
     */
    private $trPartida = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $trEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tr_placa", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $trPlaca = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="td_id", type="boolean", nullable=false)
     */
    private $tdId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="tr_rise", type="boolean", nullable=false)
     */
    private $trRise = '0';

    public function getTrId(): ?string
    {
        return $this->trId;
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

    public function getTrCodigo(): ?string
    {
        return $this->trCodigo;
    }

    public function setTrCodigo(string $trCodigo): self
    {
        $this->trCodigo = $trCodigo;

        return $this;
    }

    public function getTrNombre(): ?string
    {
        return $this->trNombre;
    }

    public function setTrNombre(?string $trNombre): self
    {
        $this->trNombre = $trNombre;

        return $this;
    }

    public function getTrObservacion(): ?string
    {
        return $this->trObservacion;
    }

    public function setTrObservacion(?string $trObservacion): self
    {
        $this->trObservacion = $trObservacion;

        return $this;
    }

    public function getTrRuc(): ?string
    {
        return $this->trRuc;
    }

    public function setTrRuc(string $trRuc): self
    {
        $this->trRuc = $trRuc;

        return $this;
    }

    public function getTrPartida(): ?string
    {
        return $this->trPartida;
    }

    public function setTrPartida(?string $trPartida): self
    {
        $this->trPartida = $trPartida;

        return $this;
    }

    public function getTrEstado(): ?string
    {
        return $this->trEstado;
    }

    public function setTrEstado(string $trEstado): self
    {
        $this->trEstado = $trEstado;

        return $this;
    }

    public function getTrPlaca(): ?string
    {
        return $this->trPlaca;
    }

    public function setTrPlaca(string $trPlaca): self
    {
        $this->trPlaca = $trPlaca;

        return $this;
    }

    public function getTdId(): ?bool
    {
        return $this->tdId;
    }

    public function setTdId(bool $tdId): self
    {
        $this->tdId = $tdId;

        return $this;
    }

    public function getTrRise(): ?bool
    {
        return $this->trRise;
    }

    public function setTrRise(bool $trRise): self
    {
        $this->trRise = $trRise;

        return $this;
    }


}
