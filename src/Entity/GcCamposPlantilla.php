<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCamposPlantilla
 *
 * @ORM\Table(name="_gc_campos_plantilla")
 * @ORM\Entity
 */
class GcCamposPlantilla
{
    /**
     * @var int
     *
     * @ORM\Column(name="tipo_doc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="campo_doc", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $campoDoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alias_campo", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $aliasCampo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $tipo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cabecera_detalle", type="string", length=1, nullable=true, options={"default"="'C'","fixed"=true})
     */
    private $cabeceraDetalle = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getTipoDoc(): ?int
    {
        return $this->tipoDoc;
    }

    public function getCampoDoc(): ?string
    {
        return $this->campoDoc;
    }

    public function getAliasCampo(): ?string
    {
        return $this->aliasCampo;
    }

    public function setAliasCampo(?string $aliasCampo): self
    {
        $this->aliasCampo = $aliasCampo;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getCabeceraDetalle(): ?string
    {
        return $this->cabeceraDetalle;
    }

    public function setCabeceraDetalle(?string $cabeceraDetalle): self
    {
        $this->cabeceraDetalle = $cabeceraDetalle;

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
