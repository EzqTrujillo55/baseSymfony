<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPerfilDetalle
 *
 * @ORM\Table(name="gc_perfil_detalle", indexes={@ORM\Index(name="indice_perfildetalle", columns={"pd_em_id", "pd_id"}), @ORM\Index(name="indiceperfilpantalla", columns={"pd_em_id", "pd_pr_id", "pd_pn_id", "pd_pm_id"})})
 * @ORM\Entity
 */
class GcPerfilDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="pd_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pdId;

    /**
     * @var int
     *
     * @ORM\Column(name="pd_em_id", type="bigint", nullable=false)
     */
    private $pdEmId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pd_pr_id", type="bigint", nullable=false)
     */
    private $pdPrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pd_pn_id", type="bigint", nullable=false)
     */
    private $pdPnId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pd_pm_id", type="bigint", nullable=false)
     */
    private $pdPmId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getPdId(): ?string
    {
        return $this->pdId;
    }

    public function getPdEmId(): ?string
    {
        return $this->pdEmId;
    }

    public function setPdEmId(string $pdEmId): self
    {
        $this->pdEmId = $pdEmId;

        return $this;
    }

    public function getPdPrId(): ?string
    {
        return $this->pdPrId;
    }

    public function setPdPrId(string $pdPrId): self
    {
        $this->pdPrId = $pdPrId;

        return $this;
    }

    public function getPdPnId(): ?string
    {
        return $this->pdPnId;
    }

    public function setPdPnId(string $pdPnId): self
    {
        $this->pdPnId = $pdPnId;

        return $this;
    }

    public function getPdPmId(): ?string
    {
        return $this->pdPmId;
    }

    public function setPdPmId(string $pdPmId): self
    {
        $this->pdPmId = $pdPmId;

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
