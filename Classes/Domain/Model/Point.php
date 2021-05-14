<?php
declare(strict_types=1);
namespace Nogue\Yord\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Class anchor
 */
class Point extends AbstractEntity
{

    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var string
     */
    protected $posX = '';

    /**
     * @var string
     */
    protected $posY = '';

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getPosX(): string
    {
        return $this->posX;
    }

    /**
     * @param string $posX
     */
    public function setPosX(string $posX): void
    {
        $this->posX = $posX;
    }

    /**
     * @return string
     */
    public function getPosY(): string
    {
        return $this->posY;
    }

    /**
     * @param string $posY
     */
    public function setPosY(string $posY): void
    {
        $this->posY = $posY;
    }

}
