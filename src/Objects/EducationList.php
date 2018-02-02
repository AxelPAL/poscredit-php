<?php

namespace AxelPAL\PosCredit\Objects;

class EducationList
{

    /**
     * @var Education[] $education
     */
    protected $education = null;

    /**
     * @param Education[] $education
     */
    public function __construct(array $education)
    {
        $this->education = $education;
    }

    /**
     * @return Education[]
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @param Education[] $education
     * @return EducationList
     */
    public function setEducation(array $education)
    {
        $this->education = $education;
        return $this;
    }
}
