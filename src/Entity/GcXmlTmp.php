<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcXmlTmp
 *
 * @ORM\Table(name="_gc_xml_tmp", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class GcXmlTmp
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $emId;

    /**
     * @var string
     *
     * @ORM\Column(name="campo", type="string", length=256, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $campo;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor", type="string", length=256, nullable=true, options={"default"="NULL"})
     */
    private $valor = 'NULL';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getCampo(): ?string
    {
        return $this->campo;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValor(): ?string
    {
        return $this->valor;
    }

    public function setValor(?string $valor): self
    {
        $this->valor = $valor;

        return $this;
    }


}
