<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPerfilUsuario
 *
 * @ORM\Table(name="gc_perfil_usuario", uniqueConstraints={@ORM\UniqueConstraint(name="indice_perfilusuario", columns={"pu_em_id", "pu_id", "pu_us_id"})})
 * @ORM\Entity
 */
class GcPerfilUsuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="pu_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $puId;

    /**
     * @var int
     *
     * @ORM\Column(name="pu_em_id", type="bigint", nullable=false)
     */
    private $puEmId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pu_us_id", type="bigint", nullable=false)
     */
    private $puUsId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pu_pr_id", type="bigint", nullable=false)
     */
    private $puPrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getPuId(): ?string
    {
        return $this->puId;
    }

    public function getPuEmId(): ?string
    {
        return $this->puEmId;
    }

    public function setPuEmId(string $puEmId): self
    {
        $this->puEmId = $puEmId;

        return $this;
    }

    public function getPuUsId(): ?string
    {
        return $this->puUsId;
    }

    public function setPuUsId(string $puUsId): self
    {
        $this->puUsId = $puUsId;

        return $this;
    }

    public function getPuPrId(): ?string
    {
        return $this->puPrId;
    }

    public function setPuPrId(string $puPrId): self
    {
        $this->puPrId = $puPrId;

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
