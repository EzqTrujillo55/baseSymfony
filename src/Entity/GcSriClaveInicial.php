<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSriClaveInicial
 *
 * @ORM\Table(name="gc_sri_clave_inicial", uniqueConstraints={@ORM\UniqueConstraint(name="indice_clave_sri", columns={"em_id", "cl_clave_sri"})}, indexes={@ORM\Index(name="ind_clave_inicial", columns={"em_id", "cl_id_edoc", "cl_tipo_edoc"})})
 * @ORM\Entity
 */
class GcSriClaveInicial
{
    /**
     * @var int
     *
     * @ORM\Column(name="cl_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clId;

    /**
     * @var string
     *
     * @ORM\Column(name="cl_clave_sri", type="string", length=37, nullable=false, options={"default"="''"})
     */
    private $clClaveSri = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cl_tipo_edoc", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $clTipoEdoc = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cl_id_edoc", type="bigint", nullable=false)
     */
    private $clIdEdoc = '0';

    public function getClId(): ?string
    {
        return $this->clId;
    }

    public function getClClaveSri(): ?string
    {
        return $this->clClaveSri;
    }

    public function setClClaveSri(string $clClaveSri): self
    {
        $this->clClaveSri = $clClaveSri;

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

    public function getClTipoEdoc(): ?string
    {
        return $this->clTipoEdoc;
    }

    public function setClTipoEdoc(string $clTipoEdoc): self
    {
        $this->clTipoEdoc = $clTipoEdoc;

        return $this;
    }

    public function getClIdEdoc(): ?string
    {
        return $this->clIdEdoc;
    }

    public function setClIdEdoc(string $clIdEdoc): self
    {
        $this->clIdEdoc = $clIdEdoc;

        return $this;
    }


}
