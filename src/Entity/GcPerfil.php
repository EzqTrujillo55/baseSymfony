<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * GcPerfil
 *
 * @ORM\Table(name="gc_perfil", indexes={@ORM\Index(name="indice_perfil", columns={"pr_em_id", "pr_id"})})
 * @ORM\Entity
 */
class GcPerfil
{
    /**
     * @var int
     *
     * @ORM\Column(name="pr_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prId;

    /**
     * @var int
     *
     * @ORM\Column(name="pr_em_id", type="bigint", nullable=false)
     */
    private $prEmId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pr_nombre", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $prNombre = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pr_tipo", type="smallint", nullable=false)
     */
    private $prTipo = '0';

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GcEmpresa", inversedBy="gcPerfils")
     * @ORM\JoinColumn(name="empresa", referencedColumnName="em_id")
     */
    private $empresa;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="perfil")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }




    public function getPrId(): ?string
    {
        return $this->prId;
    }

    public function getPrEmId(): ?string
    {
        return $this->prEmId;
    }

    public function setPrEmId(string $prEmId): self
    {
        $this->prEmId = $prEmId;

        return $this;
    }

    public function getPrNombre(): ?string
    {
        return $this->prNombre;
    }

    public function setPrNombre(string $prNombre): self
    {
        $this->prNombre = $prNombre;

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

    public function getPrTipo(): ?int
    {
        return $this->prTipo;
    }

    public function setPrTipo(int $prTipo): self
    {
        $this->prTipo = $prTipo;

        return $this;
    }

    public function getEmpresa(): ?GcEmpresa
    {
        return $this->empresa;
    }

    public function setEmpresa(?GcEmpresa $empresa): self
    {
        $this->empresa = $empresa;

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
            $user->setPerfil($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getPerfil() === $this) {
                $user->setPerfil(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->prNombre;
    }


}
