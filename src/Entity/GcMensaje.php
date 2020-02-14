<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcMensaje
 *
 * @ORM\Table(name="gc_mensaje")
 * @ORM\Entity
 */
class GcMensaje
{
    /**
     * @var int
     *
     * @ORM\Column(name="mn_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mnId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mn_fecha_envio", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mnFechaEnvio = '\'1800-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id_mensaje_envia", type="bigint", nullable=false)
     */
    private $usIdMensajeEnvia = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mn_fecha_entrega", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mnFechaEntrega = '\'1800-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id_mensaje_destino", type="bigint", nullable=false)
     */
    private $usIdMensajeDestino = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mn_tipo_mensaje", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $mnTipoMensaje = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mn_estado", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $mnEstado = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mn_cuerpo_mensaje", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $mnCuerpoMensaje = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mn_otros", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $mnOtros = '\'*\'';

    public function getMnId(): ?string
    {
        return $this->mnId;
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

    public function getMnFechaEnvio(): ?\DateTimeInterface
    {
        return $this->mnFechaEnvio;
    }

    public function setMnFechaEnvio(\DateTimeInterface $mnFechaEnvio): self
    {
        $this->mnFechaEnvio = $mnFechaEnvio;

        return $this;
    }

    public function getUsIdMensajeEnvia(): ?string
    {
        return $this->usIdMensajeEnvia;
    }

    public function setUsIdMensajeEnvia(string $usIdMensajeEnvia): self
    {
        $this->usIdMensajeEnvia = $usIdMensajeEnvia;

        return $this;
    }

    public function getMnFechaEntrega(): ?\DateTimeInterface
    {
        return $this->mnFechaEntrega;
    }

    public function setMnFechaEntrega(\DateTimeInterface $mnFechaEntrega): self
    {
        $this->mnFechaEntrega = $mnFechaEntrega;

        return $this;
    }

    public function getUsIdMensajeDestino(): ?string
    {
        return $this->usIdMensajeDestino;
    }

    public function setUsIdMensajeDestino(string $usIdMensajeDestino): self
    {
        $this->usIdMensajeDestino = $usIdMensajeDestino;

        return $this;
    }

    public function getMnTipoMensaje(): ?string
    {
        return $this->mnTipoMensaje;
    }

    public function setMnTipoMensaje(string $mnTipoMensaje): self
    {
        $this->mnTipoMensaje = $mnTipoMensaje;

        return $this;
    }

    public function getMnEstado(): ?string
    {
        return $this->mnEstado;
    }

    public function setMnEstado(string $mnEstado): self
    {
        $this->mnEstado = $mnEstado;

        return $this;
    }

    public function getMnCuerpoMensaje(): ?string
    {
        return $this->mnCuerpoMensaje;
    }

    public function setMnCuerpoMensaje(string $mnCuerpoMensaje): self
    {
        $this->mnCuerpoMensaje = $mnCuerpoMensaje;

        return $this;
    }

    public function getMnOtros(): ?string
    {
        return $this->mnOtros;
    }

    public function setMnOtros(string $mnOtros): self
    {
        $this->mnOtros = $mnOtros;

        return $this;
    }


}
