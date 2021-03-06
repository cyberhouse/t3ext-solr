<?php
namespace ApacheSolrForTypo3\Solr\ResultsetModifier;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2011 Markus Goldbach <markus.goldbach@dkd.de>
 *  (c) 2012-2015 Ingo Renner <ingo@typo3.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use ApacheSolrForTypo3\Solr\Plugin\Results\ResultsCommand;


/**
 * ResultSetModifier interface, allows to modify search result set
 *
 * @author Markus Goldbach <markus.goldbach@dkd.de>
 * @package TYPO3
 * @subpackage solr
 */
interface ResultSetModifier
{

    /**
     * Modifies the given resultset and returns the modified resultset as array
     *
     * @param ResultsCommand $resultCommand The search result command
     * @param array $resultSet Result set
     * @return array The resultset with fields as array
     */
    public function modifyResultSet(
        ResultsCommand $resultCommand,
        array $resultSet
    );

}

