<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTemporaryTable
 *
 * @ORM\Table(name="gc_temporary_table")
 * @ORM\Entity
 */
class GcTemporaryTable
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
     * @ORM\Column(name="tt_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ttId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_str_campo1", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ttStrCampo1 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_str_campo2", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ttStrCampo2 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_str_campo3", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ttStrCampo3 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_str_campo4", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ttStrCampo4 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_str_campo5", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ttStrCampo5 = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="tt_dbl_campo1", type="float", precision=10, scale=0, nullable=false)
     */
    private $ttDblCampo1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="tt_dbl_campo2", type="float", precision=10, scale=0, nullable=false)
     */
    private $ttDblCampo2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="tt_dbl_campo3", type="float", precision=10, scale=0, nullable=false)
     */
    private $ttDblCampo3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="tt_dbl_campo4", type="float", precision=10, scale=0, nullable=false)
     */
    private $ttDblCampo4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="tt_dbl_campo5", type="float", precision=10, scale=0, nullable=false)
     */
    private $ttDblCampo5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="tt_dbl_campo6", type="float", precision=10, scale=0, nullable=false)
     */
    private $ttDblCampo6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="tt_dbl_campo7", type="float", precision=10, scale=0, nullable=false)
     */
    private $ttDblCampo7 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="tt_dbl_campo8", type="float", precision=10, scale=0, nullable=false)
     */
    private $ttDblCampo8 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tt_dt_fecha1", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $ttDtFecha1 = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tt_dt_fecha2", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $ttDtFecha2 = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tt_dt_fecha3", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $ttDtFecha3 = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tt_dt_fecha4", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $ttDtFecha4 = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_str_campo6", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ttStrCampo6 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_str_campo7", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ttStrCampo7 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_str_campo8", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ttStrCampo8 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_str_campo9", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ttStrCampo9 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_str_campo10", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ttStrCampo10 = '\'*\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getTtId(): ?string
    {
        return $this->ttId;
    }

    public function getUsId(): ?string
    {
        return $this->usId;
    }

    public function setUsId(string $usId): self
    {
        $this->usId = $usId;

        return $this;
    }

    public function getTtStrCampo1(): ?string
    {
        return $this->ttStrCampo1;
    }

    public function setTtStrCampo1(string $ttStrCampo1): self
    {
        $this->ttStrCampo1 = $ttStrCampo1;

        return $this;
    }

    public function getTtStrCampo2(): ?string
    {
        return $this->ttStrCampo2;
    }

    public function setTtStrCampo2(string $ttStrCampo2): self
    {
        $this->ttStrCampo2 = $ttStrCampo2;

        return $this;
    }

    public function getTtStrCampo3(): ?string
    {
        return $this->ttStrCampo3;
    }

    public function setTtStrCampo3(string $ttStrCampo3): self
    {
        $this->ttStrCampo3 = $ttStrCampo3;

        return $this;
    }

    public function getTtStrCampo4(): ?string
    {
        return $this->ttStrCampo4;
    }

    public function setTtStrCampo4(string $ttStrCampo4): self
    {
        $this->ttStrCampo4 = $ttStrCampo4;

        return $this;
    }

    public function getTtStrCampo5(): ?string
    {
        return $this->ttStrCampo5;
    }

    public function setTtStrCampo5(string $ttStrCampo5): self
    {
        $this->ttStrCampo5 = $ttStrCampo5;

        return $this;
    }

    public function getTtDblCampo1(): ?float
    {
        return $this->ttDblCampo1;
    }

    public function setTtDblCampo1(float $ttDblCampo1): self
    {
        $this->ttDblCampo1 = $ttDblCampo1;

        return $this;
    }

    public function getTtDblCampo2(): ?float
    {
        return $this->ttDblCampo2;
    }

    public function setTtDblCampo2(float $ttDblCampo2): self
    {
        $this->ttDblCampo2 = $ttDblCampo2;

        return $this;
    }

    public function getTtDblCampo3(): ?float
    {
        return $this->ttDblCampo3;
    }

    public function setTtDblCampo3(float $ttDblCampo3): self
    {
        $this->ttDblCampo3 = $ttDblCampo3;

        return $this;
    }

    public function getTtDblCampo4(): ?float
    {
        return $this->ttDblCampo4;
    }

    public function setTtDblCampo4(float $ttDblCampo4): self
    {
        $this->ttDblCampo4 = $ttDblCampo4;

        return $this;
    }

    public function getTtDblCampo5(): ?float
    {
        return $this->ttDblCampo5;
    }

    public function setTtDblCampo5(float $ttDblCampo5): self
    {
        $this->ttDblCampo5 = $ttDblCampo5;

        return $this;
    }

    public function getTtDblCampo6(): ?float
    {
        return $this->ttDblCampo6;
    }

    public function setTtDblCampo6(float $ttDblCampo6): self
    {
        $this->ttDblCampo6 = $ttDblCampo6;

        return $this;
    }

    public function getTtDblCampo7(): ?float
    {
        return $this->ttDblCampo7;
    }

    public function setTtDblCampo7(float $ttDblCampo7): self
    {
        $this->ttDblCampo7 = $ttDblCampo7;

        return $this;
    }

    public function getTtDblCampo8(): ?float
    {
        return $this->ttDblCampo8;
    }

    public function setTtDblCampo8(float $ttDblCampo8): self
    {
        $this->ttDblCampo8 = $ttDblCampo8;

        return $this;
    }

    public function getTtDtFecha1(): ?\DateTimeInterface
    {
        return $this->ttDtFecha1;
    }

    public function setTtDtFecha1(\DateTimeInterface $ttDtFecha1): self
    {
        $this->ttDtFecha1 = $ttDtFecha1;

        return $this;
    }

    public function getTtDtFecha2(): ?\DateTimeInterface
    {
        return $this->ttDtFecha2;
    }

    public function setTtDtFecha2(\DateTimeInterface $ttDtFecha2): self
    {
        $this->ttDtFecha2 = $ttDtFecha2;

        return $this;
    }

    public function getTtDtFecha3(): ?\DateTimeInterface
    {
        return $this->ttDtFecha3;
    }

    public function setTtDtFecha3(\DateTimeInterface $ttDtFecha3): self
    {
        $this->ttDtFecha3 = $ttDtFecha3;

        return $this;
    }

    public function getTtDtFecha4(): ?\DateTimeInterface
    {
        return $this->ttDtFecha4;
    }

    public function setTtDtFecha4(\DateTimeInterface $ttDtFecha4): self
    {
        $this->ttDtFecha4 = $ttDtFecha4;

        return $this;
    }

    public function getTtStrCampo6(): ?string
    {
        return $this->ttStrCampo6;
    }

    public function setTtStrCampo6(string $ttStrCampo6): self
    {
        $this->ttStrCampo6 = $ttStrCampo6;

        return $this;
    }

    public function getTtStrCampo7(): ?string
    {
        return $this->ttStrCampo7;
    }

    public function setTtStrCampo7(string $ttStrCampo7): self
    {
        $this->ttStrCampo7 = $ttStrCampo7;

        return $this;
    }

    public function getTtStrCampo8(): ?string
    {
        return $this->ttStrCampo8;
    }

    public function setTtStrCampo8(string $ttStrCampo8): self
    {
        $this->ttStrCampo8 = $ttStrCampo8;

        return $this;
    }

    public function getTtStrCampo9(): ?string
    {
        return $this->ttStrCampo9;
    }

    public function setTtStrCampo9(string $ttStrCampo9): self
    {
        $this->ttStrCampo9 = $ttStrCampo9;

        return $this;
    }

    public function getTtStrCampo10(): ?string
    {
        return $this->ttStrCampo10;
    }

    public function setTtStrCampo10(string $ttStrCampo10): self
    {
        $this->ttStrCampo10 = $ttStrCampo10;

        return $this;
    }


}
