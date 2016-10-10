<?php

namespace Nestle\CoreBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'nestle_official_regions' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.Nestle.CoreBundle.Model.map
 */
class NestleOfficialRegionsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Nestle.CoreBundle.Model.map.NestleOfficialRegionsTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('nestle_official_regions');
        $this->setPhpName('NestleOfficialRegions');
        $this->setClassname('Nestle\\CoreBundle\\Model\\NestleOfficialRegions');
        $this->setPackage('src.Nestle.CoreBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('nestle_region', 'NestleRegion', 'VARCHAR', false, 255, null);
        $this->addColumn('status', 'Status', 'INTEGER', false, 15, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('NestleBower', 'Nestle\\CoreBundle\\Model\\NestleBower', RelationMap::ONE_TO_MANY, array('id' => 'nestle_region', ), null, null, 'NestleBowers');
    } // buildRelations()

} // NestleOfficialRegionsTableMap
