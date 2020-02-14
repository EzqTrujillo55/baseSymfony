<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTmpFormulario
 *
 * @ORM\Table(name="gc_tmp_formulario")
 * @ORM\Entity
 */
class GcTmpFormulario
{
    /**
     * @var int
     *
     * @ORM\Column(name="fr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $frId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false, options={"default"="1"})
     */
    private $emId = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="us_codigo", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $usCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fr_campo1", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $frCampo1 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fr_campo2", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $frCampo2 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fr_campo3", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $frCampo3 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fr_campo4", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $frCampo4 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fr_campo5", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $frCampo5 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fr_campo6", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $frCampo6 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fr_campo7", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $frCampo7 = '\'*\'';

    public function getFrId(): ?string
    {
        return $this->frId;
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

    public function getUsCodigo(): ?string
    {
        return $this->usCodigo;
    }

    public function setUsCodigo(string $usCodigo): self
    {
        $this->usCodigo = $usCodigo;

        return $this;
    }

    public function getFrCampo1(): ?string
    {
        return $this->frCampo1;
    }

    public function setFrCampo1(string $frCampo1): self
    {
        $this->frCampo1 = $frCampo1;

        return $this;
    }

    public function getFrCampo2(): ?string
    {
        return $this->frCampo2;
    }

    public function setFrCampo2(string $frCampo2): self
    {
        $this->frCampo2 = $frCampo2;

        return $this;
    }

    public function getFrCampo3(): ?string
    {
        return $this->frCampo3;
    }

    public function setFrCampo3(string $frCampo3): self
    {
        $this->frCampo3 = $frCampo3;

        return $this;
    }

    public function getFrCampo4(): ?string
    {
        return $this->frCampo4;
    }

    public function setFrCampo4(string $frCampo4): self
    {
        $this->frCampo4 = $frCampo4;

        return $this;
    }

    public function getFrCampo5(): ?string
    {
        return $this->frCampo5;
    }

    public function setFrCampo5(string $frCampo5): self
    {
        $this->frCampo5 = $frCampo5;

        return $this;
    }

    public function getFrCampo6(): ?string
    {
        return $this->frCampo6;
    }

    public function setFrCampo6(string $frCampo6): self
    {
        $this->frCampo6 = $frCampo6;

        return $this;
    }

    public function getFrCampo7(): ?string
    {
        return $this->frCampo7;
    }

    public function setFrCampo7(string $frCampo7): self
    {
        $this->frCampo7 = $frCampo7;

        return $this;
    }


}
