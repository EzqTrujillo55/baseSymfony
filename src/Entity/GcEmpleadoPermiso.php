<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoPermiso
 *
 * @ORM\Table(name="gc_empleado_permiso")
 * @ORM\Entity
 */
class GcEmpleadoPermiso
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
     * @ORM\Column(name="pr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pr_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $prFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pr_fecha_sistema", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $prFechaSistema = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="pr_horas", type="float", precision=10, scale=0, nullable=false)
     */
    private $prHoras = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pr_causa", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $prCausa = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pr_tipo", type="integer", nullable=false)
     */
    private $prTipo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pr_forma_descuento", type="integer", nullable=false)
     */
    private $prFormaDescuento = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pr_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $prValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pr_estado", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $prEstado = '\'N\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pr_fecha_procesado", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $prFechaProcesado = '\'1800-01-01 00:00:01\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getPrId(): ?string
    {
        return $this->prId;
    }

    public function getMpId(): ?string
    {
        return $this->mpId;
    }

    public function setMpId(string $mpId): self
    {
        $this->mpId = $mpId;

        return $this;
    }

    public function getPrFecha(): ?\DateTimeInterface
    {
        return $this->prFecha;
    }

    public function setPrFecha(\DateTimeInterface $prFecha): self
    {
        $this->prFecha = $prFecha;

        return $this;
    }

    public function getPrFechaSistema(): ?\DateTimeInterface
    {
        return $this->prFechaSistema;
    }

    public function setPrFechaSistema(\DateTimeInterface $prFechaSistema): self
    {
        $this->prFechaSistema = $prFechaSistema;

        return $this;
    }

    public function getPrHoras(): ?float
    {
        return $this->prHoras;
    }

    public function setPrHoras(float $prHoras): self
    {
        $this->prHoras = $prHoras;

        return $this;
    }

    public function getPrCausa(): ?string
    {
        return $this->prCausa;
    }

    public function setPrCausa(string $prCausa): self
    {
        $this->prCausa = $prCausa;

        return $this;
    }

    public function getPrTipo(): ?int
    {
        return $this->prTipo;
    }

    public function setPrTipo(int $prTipo): self
    {
        $this->prTipo = $prTipo;

        return $this;
    }

    public function getPrFormaDescuento(): ?int
    {
        return $this->prFormaDescuento;
    }

    public function setPrFormaDescuento(int $prFormaDescuento): self
    {
        $this->prFormaDescuento = $prFormaDescuento;

        return $this;
    }

    public function getPrValor(): ?float
    {
        return $this->prValor;
    }

    public function setPrValor(float $prValor): self
    {
        $this->prValor = $prValor;

        return $this;
    }

    public function getPrEstado(): ?string
    {
        return $this->prEstado;
    }

    public function setPrEstado(string $prEstado): self
    {
        $this->prEstado = $prEstado;

        return $this;
    }

    public function getPrFechaProcesado(): ?\DateTimeInterface
    {
        return $this->prFechaProcesado;
    }

    public function setPrFechaProcesado(\DateTimeInterface $prFechaProcesado): self
    {
        $this->prFechaProcesado = $prFechaProcesado;

        return $this;
    }


}
