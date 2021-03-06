<?php
/** @package Codeigtestuno::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("TbldistritosMap.php");

/**
 * TbldistritosDAO provides object-oriented access to the tbldistritos table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Codeigtestuno::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class TbldistritosDAO extends Phreezable
{
	/** @var string */
	public $Id;

	/** @var string */
	public $Nombre;


	/**
	 * Returns a dataset of Colegios objects with matching Iddistrito
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetIddistritoColegioss($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "colegios_ibfk_2", $criteria);
	}


}
?>