<?php
/*
 * This file is part of the Qimnet update tracker Bundle.
 *
 * (c) Antoine Guigan <aguigan@qimnet.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Qimnet\UpdateTrackerTestBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Qimnet\UpdateTrackerBundle\Annotation\TrackUpdate;

/**
 * @ORM\Entity
 * @TrackUpdate("test")
 */
class TrackedEntityTest
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column
     */
    protected $content;

    /**
     * Get Id
     * @return int
     **/
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get Content
     * @return string
     **/
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set Content
     * @param string
     * @return TrackedEntityTest
     **/
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

}
