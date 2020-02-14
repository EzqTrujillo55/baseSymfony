<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoCarga
 *
 * @ORM\Table(name="gc_empleado_carga")
 * @ORM\Entity
 */
class GcEmpleadoCarga
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
     * @ORM\Column(name="mc_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mcId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $mcNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_apellido", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $mcApellido = '\'*\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="td_id", type="boolean", nullable=false)
     */
    private $tdId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_documento", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $mcDocumento = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pa_id", type="bigint", nullable=false)
     */
    private $paId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ci_id", type="bigint", nullable=false)
     */
    private $ciId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_parroquia", type="string", length=64, nullable=false, options={"default"="'*'"})
     */
    private $mcParroquia = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mc_fecha_nacimiento", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mcFechaNacimiento = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_sexo", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $mcSexo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_relacion", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $mcRelacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_partida_nacimiento", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $mcPartidaNacimiento = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_partida_matrimonio", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $mcPartidaMatrimonio = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_documento_notariado", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $mcDocumentoNotariado = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_direccion", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $mcDireccion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_telefono", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $mcTelefono = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_titulo", type="string", length=64, nullable=false, options={"default"="'*'"})
     */
    private $mcTitulo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_educacion", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $mcEducacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $mcObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_otros", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $mcOtros = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mc_fecha_matrimonio", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mcFechaMatrimonio = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mc_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $mcEstado = '\'C\'';

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="empleado")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMcId(): ?string
    {
        return $this->mcId;
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

    public function getMcNombre(): ?string
    {
        return $this->mcNombre;
    }

    public function setMcNombre(string $mcNombre): self
    {
        $this->mcNombre = $mcNombre;

        return $this;
    }

    public function getMcApellido(): ?string
    {
        return $this->mcApellido;
    }

    public function setMcApellido(string $mcApellido): self
    {
        $this->mcApellido = $mcApellido;

        return $this;
    }

    public function getTdId(): ?bool
    {
        return $this->tdId;
    }

    public function setTdId(bool $tdId): self
    {
        $this->tdId = $tdId;

        return $this;
    }

    public function getMcDocumento(): ?string
    {
        return $this->mcDocumento;
    }

    public function setMcDocumento(string $mcDocumento): self
    {
        $this->mcDocumento = $mcDocumento;

        return $this;
    }

    public function getPaId(): ?string
    {
        return $this->paId;
    }

    public function setPaId(string $paId): self
    {
        $this->paId = $paId;

        return $this;
    }

    public function getCiId(): ?string
    {
        return $this->ciId;
    }

    public function setCiId(string $ciId): self
    {
        $this->ciId = $ciId;

        return $this;
    }

    public function getMcParroquia(): ?string
    {
        return $this->mcParroquia;
    }

    public function setMcParroquia(string $mcParroquia): self
    {
        $this->mcParroquia = $mcParroquia;

        return $this;
    }

    public function getMcFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->mcFechaNacimiento;
    }

    public function setMcFechaNacimiento(\DateTimeInterface $mcFechaNacimiento): self
    {
        $this->mcFechaNacimiento = $mcFechaNacimiento;

        return $this;
    }

    public function getMcSexo(): ?string
    {
        return $this->mcSexo;
    }

    public function setMcSexo(string $mcSexo): self
    {
        $this->mcSexo = $mcSexo;

        return $this;
    }

    public function getMcRelacion(): ?string
    {
        return $this->mcRelacion;
    }

    public function setMcRelacion(string $mcRelacion): self
    {
        $this->mcRelacion = $mcRelacion;

        return $this;
    }

    public function getMcPartidaNacimiento(): ?string
    {
        return $this->mcPartidaNacimiento;
    }

    public function setMcPartidaNacimiento(string $mcPartidaNacimiento): self
    {
        $this->mcPartidaNacimiento = $mcPartidaNacimiento;

        return $this;
    }

    public function getMcPartidaMatrimonio(): ?string
    {
        return $this->mcPartidaMatrimonio;
    }

    public function setMcPartidaMatrimonio(string $mcPartidaMatrimonio): self
    {
        $this->mcPartidaMatrimonio = $mcPartidaMatrimonio;

        return $this;
    }

    public function getMcDocumentoNotariado(): ?string
    {
        return $this->mcDocumentoNotariado;
    }

    public function setMcDocumentoNotariado(string $mcDocumentoNotariado): self
    {
        $this->mcDocumentoNotariado = $mcDocumentoNotariado;

        return $this;
    }

    public function getMcDireccion(): ?string
    {
        return $this->mcDireccion;
    }

    public function setMcDireccion(string $mcDireccion): self
    {
        $this->mcDireccion = $mcDireccion;

        return $this;
    }

    public function getMcTelefono(): ?string
    {
        return $this->mcTelefono;
    }

    public function setMcTelefono(string $mcTelefono): self
    {
        $this->mcTelefono = $mcTelefono;

        return $this;
    }

    public function getMcTitulo(): ?string
    {
        return $this->mcTitulo;
    }

    public function setMcTitulo(string $mcTitulo): self
    {
        $this->mcTitulo = $mcTitulo;

        return $this;
    }

    public function getMcEducacion(): ?string
    {
        return $this->mcEducacion;
    }

    public function setMcEducacion(string $mcEducacion): self
    {
        $this->mcEducacion = $mcEducacion;

        return $this;
    }

    public function getMcObservacion(): ?string
    {
        return $this->mcObservacion;
    }

    public function setMcObservacion(string $mcObservacion): self
    {
        $this->mcObservacion = $mcObservacion;

        return $this;
    }

    public function getMcOtros(): ?string
    {
        return $this->mcOtros;
    }

    public function setMcOtros(string $mcOtros): self
    {
        $this->mcOtros = $mcOtros;

        return $this;
    }

    public function getMcFechaMatrimonio(): ?\DateTimeInterface
    {
        return $this->mcFechaMatrimonio;
    }

    public function setMcFechaMatrimonio(\DateTimeInterface $mcFechaMatrimonio): self
    {
        $this->mcFechaMatrimonio = $mcFechaMatrimonio;

        return $this;
    }

    public function getMcEstado(): ?string
    {
        return $this->mcEstado;
    }

    public function setMcEstado(string $mcEstado): self
    {
        $this->mcEstado = $mcEstado;

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
            $user->setEmpleado($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getEmpleado() === $this) {
                $user->setEmpleado(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->mcNombre;
    }


}
