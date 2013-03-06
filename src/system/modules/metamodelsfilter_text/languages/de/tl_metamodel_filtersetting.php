<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package    MetaModels
 * @subpackage FilterText
 * @author     Christian de la Haye <service@delahaye.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

/**
 * filter types
 */
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['typenames']['text']     = 'Textfilter';


/**
 * fields
 */
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['textsearch']   = array('Suchart', 'Teiltext-Findung bei Textsuche.');


/**
 * references
 */
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['references']['exact']      = 'exakte Suche';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['references']['beginswith'] = 'beginnt mit Suchtext';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['references']['endswith']   = 'endet mit Suchtext';