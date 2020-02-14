<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcComprobanteDetalleFlujo
 *
 * @ORM\Table(name="gc_comprobante_detalle_flujo", indexes={@ORM\Index(name="indice_detalle_flujo_empresa", columns={"em_id", "co_de_id"})})
 * @ORM\Entity
 */
class GcComprobanteDetalleFlujo
{
    /**
     * @var int
     *
     * @ORM\Column(name="co_de_fl_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coDeFlId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_de_id", type="bigint", nullable=false)
     */
    private $coDeId = '0';

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
     * @var float
     *
     * @ORM\Column(name="co_de_fl_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $coDeFlValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_fl_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $coDeFlEstado = '\'C\'';

    public function getCoDeFlId(): ?string
    {
        return $this->coDeFlId;
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

    public function getCoId(): ?string
    {
        return $this->coId;
    }

    public function setCoId(string $coId): self
    {
        $this->coId = $coId;

        return $this;
    }

    public function getCoDeId(): ?string
    {
        return $this->coDeId;
    }

    public function setCoDeId(string $coDeId): self
    {
        $this->coDeId = $coDeId;

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

    public function getCoDeFlValor(): ?float
    {
        return $this->coDeFlValor;
    }

    public function setCoDeFlValor(float $coDeFlValor): self
    {
        $this->coDeFlValor = $coDeFlValor;

        return $this;
    }

    public function getCoDeFlEstado(): ?string
    {
        return $this->coDeFlEstado;
    }

    public function setCoDeFlEstado(string $coDeFlEstado): self
    {
        $this->coDeFlEstado = $coDeFlEstado;

        return $this;
    }


}
