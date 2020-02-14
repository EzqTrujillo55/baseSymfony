<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * GcUsuario
 * @ApiResource
 * @ORM\Table(name="gc_usuario", uniqueConstraints={@ORM\UniqueConstraint(name="em_id", columns={"em_id", "us_usuario", "us_estado"})}, indexes={@ORM\Index(name="indice_usuarioempresa", columns={"em_id", "us_id"})})
 * @ORM\Entity
 */
class GcUsuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="us_codigo", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $usCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="us_usuario", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $usUsuario = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="us_contrasena", type="string", length=256, nullable=false, options={"default"="'*'"})
     */
    private $usContrasena = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="us_estado", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $usEstado = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="us_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $usObservacion = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="us_saldo", type="float", precision=10, scale=0, nullable=false)
     */
    private $usSaldo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="us_mes", type="float", precision=10, scale=0, nullable=false)
     */
    private $usMes = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="us_nivel", type="float", precision=10, scale=0, nullable=false)
     */
    private $usNivel = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="us_agrupado", type="float", precision=10, scale=0, nullable=false)
     */
    private $usAgrupado = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="us_fecha_inicial", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $usFechaInicial = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="us_fecha_final", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $usFechaFinal = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="us_administrar", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $usAdministrar = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bo_id", type="bigint", nullable=false)
     */
    private $boId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="us_saldo_banco", type="float", precision=10, scale=0, nullable=false)
     */
    private $usSaldoBanco = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="us_saldo_inicial", type="float", precision=10, scale=0, nullable=false)
     */
    private $usSaldoInicial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="us_conectado", type="string", length=1, nullable=false, options={"default"="'F'","fixed"=true})
     */
    private $usConectado = '\'F\'';

    /**
     * @var string
     *
     * @ORM\Column(name="us_transacciona", type="string", length=1, nullable=false, options={"default"="'F'","fixed"=true})
     */
    private $usTransacciona = '\'F\'';

    /**
     * @var string
     *
     * @ORM\Column(name="us_caducar_intento", type="string", length=1, nullable=false, options={"default"="'1'","fixed"=true})
     */
    private $usCaducarIntento = '\'1\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_id", type="bigint", nullable=false)
     */
    private $pvId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="us_consulta_otros_datos_pv", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $usConsultaOtrosDatosPv = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="us_cierre_caja_pv", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $usCierreCajaPv = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="us_password", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $usPassword = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="us_documentos_electronicos_manejo", type="boolean", nullable=false)
     */
    private $usDocumentosElectronicosManejo = '0';

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="Config")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getUsId(): ?string
    {
        return $this->usId;
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

    public function getUsUsuario(): ?string
    {
        return $this->usUsuario;
    }

    public function setUsUsuario(string $usUsuario): self
    {
        $this->usUsuario = $usUsuario;

        return $this;
    }

    public function getUsContrasena(): ?string
    {
        return $this->usContrasena;
    }

    public function setUsContrasena(string $usContrasena): self
    {
        $this->usContrasena = $usContrasena;

        return $this;
    }

    public function getUsEstado(): ?string
    {
        return $this->usEstado;
    }

    public function setUsEstado(string $usEstado): self
    {
        $this->usEstado = $usEstado;

        return $this;
    }

    public function getUsObservacion(): ?string
    {
        return $this->usObservacion;
    }

    public function setUsObservacion(string $usObservacion): self
    {
        $this->usObservacion = $usObservacion;

        return $this;
    }

    public function getUsSaldo(): ?float
    {
        return $this->usSaldo;
    }

    public function setUsSaldo(float $usSaldo): self
    {
        $this->usSaldo = $usSaldo;

        return $this;
    }

    public function getUsMes(): ?float
    {
        return $this->usMes;
    }

    public function setUsMes(float $usMes): self
    {
        $this->usMes = $usMes;

        return $this;
    }

    public function getUsNivel(): ?float
    {
        return $this->usNivel;
    }

    public function setUsNivel(float $usNivel): self
    {
        $this->usNivel = $usNivel;

        return $this;
    }

    public function getUsAgrupado(): ?float
    {
        return $this->usAgrupado;
    }

    public function setUsAgrupado(float $usAgrupado): self
    {
        $this->usAgrupado = $usAgrupado;

        return $this;
    }

    public function getUsFechaInicial(): ?\DateTimeInterface
    {
        return $this->usFechaInicial;
    }

    public function setUsFechaInicial(\DateTimeInterface $usFechaInicial): self
    {
        $this->usFechaInicial = $usFechaInicial;

        return $this;
    }

    public function getUsFechaFinal(): ?\DateTimeInterface
    {
        return $this->usFechaFinal;
    }

    public function setUsFechaFinal(\DateTimeInterface $usFechaFinal): self
    {
        $this->usFechaFinal = $usFechaFinal;

        return $this;
    }

    public function getUsAdministrar(): ?string
    {
        return $this->usAdministrar;
    }

    public function setUsAdministrar(string $usAdministrar): self
    {
        $this->usAdministrar = $usAdministrar;

        return $this;
    }

    public function getPeId(): ?string
    {
        return $this->peId;
    }

    public function setPeId(string $peId): self
    {
        $this->peId = $peId;

        return $this;
    }

    public function getBoId(): ?string
    {
        return $this->boId;
    }

    public function setBoId(string $boId): self
    {
        $this->boId = $boId;

        return $this;
    }

    public function getUsSaldoBanco(): ?float
    {
        return $this->usSaldoBanco;
    }

    public function setUsSaldoBanco(float $usSaldoBanco): self
    {
        $this->usSaldoBanco = $usSaldoBanco;

        return $this;
    }

    public function getUsSaldoInicial(): ?float
    {
        return $this->usSaldoInicial;
    }

    public function setUsSaldoInicial(float $usSaldoInicial): self
    {
        $this->usSaldoInicial = $usSaldoInicial;

        return $this;
    }

    public function getUsConectado(): ?string
    {
        return $this->usConectado;
    }

    public function setUsConectado(string $usConectado): self
    {
        $this->usConectado = $usConectado;

        return $this;
    }

    public function getUsTransacciona(): ?string
    {
        return $this->usTransacciona;
    }

    public function setUsTransacciona(string $usTransacciona): self
    {
        $this->usTransacciona = $usTransacciona;

        return $this;
    }

    public function getUsCaducarIntento(): ?string
    {
        return $this->usCaducarIntento;
    }

    public function setUsCaducarIntento(string $usCaducarIntento): self
    {
        $this->usCaducarIntento = $usCaducarIntento;

        return $this;
    }

    public function getPvId(): ?string
    {
        return $this->pvId;
    }

    public function setPvId(string $pvId): self
    {
        $this->pvId = $pvId;

        return $this;
    }

    public function getUsConsultaOtrosDatosPv(): ?string
    {
        return $this->usConsultaOtrosDatosPv;
    }

    public function setUsConsultaOtrosDatosPv(string $usConsultaOtrosDatosPv): self
    {
        $this->usConsultaOtrosDatosPv = $usConsultaOtrosDatosPv;

        return $this;
    }

    public function getUsCierreCajaPv(): ?string
    {
        return $this->usCierreCajaPv;
    }

    public function setUsCierreCajaPv(string $usCierreCajaPv): self
    {
        $this->usCierreCajaPv = $usCierreCajaPv;

        return $this;
    }

    public function getUsPassword(): ?string
    {
        return $this->usPassword;
    }

    public function setUsPassword(?string $usPassword): self
    {
        $this->usPassword = $usPassword;

        return $this;
    }

    public function getUsDocumentosElectronicosManejo(): ?bool
    {
        return $this->usDocumentosElectronicosManejo;
    }

    public function setUsDocumentosElectronicosManejo(bool $usDocumentosElectronicosManejo): self
    {
        $this->usDocumentosElectronicosManejo = $usDocumentosElectronicosManejo;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setConfig($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getConfig() === $this) {
                $user->setConfig(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->usConsultaOtrosDatosPv;
    }


}
