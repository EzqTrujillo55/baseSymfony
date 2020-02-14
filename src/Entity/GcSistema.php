<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSistema
 *
 * @ORM\Table(name="gc_sistema")
 * @ORM\Entity
 */
class GcSistema
{
    /**
     * @var string
     *
     * @ORM\Column(name="ss_major", type="string", length=10, nullable=false, options={"default"="'*'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ssMajor = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ss_minor", type="string", length=10, nullable=false, options={"default"="'*'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ssMinor = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ss_revision", type="string", length=10, nullable=false, options={"default"="'*'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ssRevision = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ss_part1", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $ssPart1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ss_part2", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $ssPart2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ss_part3", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $ssPart3 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ss_parta", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $ssParta = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ss_partb", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $ssPartb = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ss_partc", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $ssPartc = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ss_partd", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $ssPartd = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ss_parte", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $ssParte = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ss_partf", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $ssPartf = 'NULL';

    public function getSsMajor(): ?string
    {
        return $this->ssMajor;
    }

    public function getSsMinor(): ?string
    {
        return $this->ssMinor;
    }

    public function getSsRevision(): ?string
    {
        return $this->ssRevision;
    }

    public function getSsPart1()
    {
        return $this->ssPart1;
    }

    public function setSsPart1($ssPart1): self
    {
        $this->ssPart1 = $ssPart1;

        return $this;
    }

    public function getSsPart2()
    {
        return $this->ssPart2;
    }

    public function setSsPart2($ssPart2): self
    {
        $this->ssPart2 = $ssPart2;

        return $this;
    }

    public function getSsPart3()
    {
        return $this->ssPart3;
    }

    public function setSsPart3($ssPart3): self
    {
        $this->ssPart3 = $ssPart3;

        return $this;
    }

    public function getSsParta()
    {
        return $this->ssParta;
    }

    public function setSsParta($ssParta): self
    {
        $this->ssParta = $ssParta;

        return $this;
    }

    public function getSsPartb()
    {
        return $this->ssPartb;
    }

    public function setSsPartb($ssPartb): self
    {
        $this->ssPartb = $ssPartb;

        return $this;
    }

    public function getSsPartc()
    {
        return $this->ssPartc;
    }

    public function setSsPartc($ssPartc): self
    {
        $this->ssPartc = $ssPartc;

        return $this;
    }

    public function getSsPartd()
    {
        return $this->ssPartd;
    }

    public function setSsPartd($ssPartd): self
    {
        $this->ssPartd = $ssPartd;

        return $this;
    }

    public function getSsParte()
    {
        return $this->ssParte;
    }

    public function setSsParte($ssParte): self
    {
        $this->ssParte = $ssParte;

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

    public function getSsPartf()
    {
        return $this->ssPartf;
    }

    public function setSsPartf($ssPartf): self
    {
        $this->ssPartf = $ssPartf;

        return $this;
    }


}
