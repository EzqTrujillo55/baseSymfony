<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTmpPareto
 *
 * @ORM\Table(name="gc_tmp_pareto")
 * @ORM\Entity
 */
class GcTmpPareto
{
    /**
     * @var int
     *
     * @ORM\Column(name="pr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false, options={"default"="1"})
     */
    private $emId = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="it_id", type="bigint", nullable=false)
     */
    private $itId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="it_codigo", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $itCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_nombre", type="string", length=255, nullable=false)
     */
    private $itNombre;

    /**
     * @var float
     *
     * @ORM\Column(name="pr_valor1", type="float", precision=10, scale=0, nullable=false)
     */
    private $prValor1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pr_valor2", type="float", precision=10, scale=0, nullable=false)
     */
    private $prValor2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pr_participacion", type="float", precision=10, scale=0, nullable=false)
     */
    private $prParticipacion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pr_valor3", type="float", precision=10, scale=0, nullable=false)
     */
    private $prValor3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pr_valor3_participacion", type="float", precision=10, scale=0, nullable=false)
     */
    private $prValor3Participacion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pr_valor4", type="float", precision=10, scale=0, nullable=false)
     */
    private $prValor4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pr_valor4_participacion", type="float", precision=10, scale=0, nullable=false)
     */
    private $prValor4Participacion = '0';

    public function getPrId(): ?string
    {
        return $this->prId;
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

    public function getItId(): ?string
    {
        return $this->itId;
    }

    public function setItId(string $itId): self
    {
        $this->itId = $itId;

        return $this;
    }

    public function getItCodigo(): ?string
    {
        return $this->itCodigo;
    }

    public function setItCodigo(string $itCodigo): self
    {
        $this->itCodigo = $itCodigo;

        return $this;
    }

    public function getItNombre(): ?string
    {
        return $this->itNombre;
    }

    public function setItNombre(string $itNombre): self
    {
        $this->itNombre = $itNombre;

        return $this;
    }

    public function getPrValor1(): ?float
    {
        return $this->prValor1;
    }

    public function setPrValor1(float $prValor1): self
    {
        $this->prValor1 = $prValor1;

        return $this;
    }

    public function getPrValor2(): ?float
    {
        return $this->prValor2;
    }

    public function setPrValor2(float $prValor2): self
    {
        $this->prValor2 = $prValor2;

        return $this;
    }

    public function getPrParticipacion(): ?float
    {
        return $this->prParticipacion;
    }

    public function setPrParticipacion(float $prParticipacion): self
    {
        $this->prParticipacion = $prParticipacion;

        return $this;
    }

    public function getPrValor3(): ?float
    {
        return $this->prValor3;
    }

    public function setPrValor3(float $prValor3): self
    {
        $this->prValor3 = $prValor3;

        return $this;
    }

    public function getPrValor3Participacion(): ?float
    {
        return $this->prValor3Participacion;
    }

    public function setPrValor3Participacion(float $prValor3Participacion): self
    {
        $this->prValor3Participacion = $prValor3Participacion;

        return $this;
    }

    public function getPrValor4(): ?float
    {
        return $this->prValor4;
    }

    public function setPrValor4(float $prValor4): self
    {
        $this->prValor4 = $prValor4;

        return $this;
    }

    public function getPrValor4Participacion(): ?float
    {
        return $this->prValor4Participacion;
    }

    public function setPrValor4Participacion(float $prValor4Participacion): self
    {
        $this->prValor4Participacion = $prValor4Participacion;

        return $this;
    }


}
