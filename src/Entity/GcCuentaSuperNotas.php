<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCuentaSuperNotas
 *
 * @ORM\Table(name="gc_cuenta_super_notas")
 * @ORM\Entity
 */
class GcCuentaSuperNotas
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
     * @ORM\Column(name="cs_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $csId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_nt_valor", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $csNtValor = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_nt_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $csNtEstado = '\'C\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getCsId(): ?string
    {
        return $this->csId;
    }

    public function getCsNtValor(): ?string
    {
        return $this->csNtValor;
    }

    public function setCsNtValor(string $csNtValor): self
    {
        $this->csNtValor = $csNtValor;

        return $this;
    }

    public function getCsNtEstado(): ?string
    {
        return $this->csNtEstado;
    }

    public function setCsNtEstado(string $csNtEstado): self
    {
        $this->csNtEstado = $csNtEstado;

        return $this;
    }


}
