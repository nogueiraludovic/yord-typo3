<?php
namespace Nogue\Yord\Controller;

use GeorgRinger\News\Utility\Page;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Annotation\Inject;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManager;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use Wide\WideBcvs\DataProcessing\DatabaseQueryProcessor;
use Wide\WideBcvs\Domain\Model\Box;
use Wide\WideBcvs\Domain\Model\Iconbox;
use Wide\WideBcvs\Utilities\LabelUtility;
use Wide\WideProduct\Domain\Model\Attribute;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Patrick Broens <patrick@patrickbroens.nl>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

class ContentElementController extends ActionController {

    /**
     * The content object
     *
     * @var \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer
     */
    protected $contentObject;

    /**
     * The object data
     *
     * @var mixed
     */
    protected $data;

    /**
     * @var \Nogue\Yord\Domain\Repository\PointRepository
     * @Inject
     */
    protected $pointRepository;

    /**
     * @var \Nogue\Yord\Domain\Repository\NumberRepository
     * @Inject
     */
    protected $numberRepository;

    /**
     * Initialization of all actions
     *
     * @return void
     */
    public function initializeAction() {
        $this->contentObject = $this->configurationManager->getContentObject();
        $this->data = $this->contentObject->data;
    }

    /**
     * Default action, forward on field "CType"
     *
     * @return void
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     */
    public function renderAction() {
        switch($this->data['CType']) {
            case 'googleMaps':
                $this->forward('googleMaps');
                break;
            case 'number':
                $this->forward('number');
                break;
        }
    }

    /**
     * Google maps action
     */
    public function googleMapsAction() {
        $points = $this->pointRepository->findByParent($this->data['uid']);
        $this->view->assignMultiple([
            'points' => $points,
            'data' => $this->data
        ]);
    }

    /**
     * Number action
     */
    public function numberAction() {
        $numbers = $this->numberRepository->findByParent($this->data['uid']);
        $this->view->assignMultiple([
            'numbers' => $numbers,
            'data' => $this->data
        ]);
    }
}