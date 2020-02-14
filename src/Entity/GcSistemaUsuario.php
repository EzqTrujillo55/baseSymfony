<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSistemaUsuario
 *
 * @ORM\Table(name="gc_sistema_usuario")
 * @ORM\Entity
 */
class GcSistemaUsuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_gc_sistema_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGcSistemaUsuario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sr_partid", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $srPartid = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sr_part1", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $srPart1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sr_part2", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $srPart2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sr_part3", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $srPart3 = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sr_nombre", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $srNombre = 'NULL';

    public function getIdGcSistemaUsuario(): ?int
    {
        return $this->idGcSistemaUsuario;
    }

    public function getSrPartid()
    {
        return $this->srPartid;
    }

    public function setSrPartid($srPartid): self
    {
        $this->srPartid = $srPartid;

        return $this;
    }

    public function getSrPart1()
    {
        return $this->srPart1;
    }

    public function setSrPart1($srPart1): self
    {
        $this->srPart1 = $srPart1;

        return $this;
    }

    public function getSrPart2()
    {
        return $this->srPart2;
    }

    public function setSrPart2($srPart2): self
    {
        $this->srPart2 = $srPart2;

        return $this;
    }

    public function getSrPart3()
    {
        return $this->srPart3;
    }

    public function setSrPart3($srPart3): self
    {
        $this->srPart3 = $srPart3;

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

    public function getSrNombre()
    {
        return $this->srNombre;
    }

    public function setSrNombre($srNombre): self
    {
        $this->srNombre = $srNombre;

        return $this;
    }


}
