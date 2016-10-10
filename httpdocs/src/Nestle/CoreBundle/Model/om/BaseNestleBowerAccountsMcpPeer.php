<?php

namespace Nestle\CoreBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use Nestle\CoreBundle\Model\NestleBowerAccountsMcp;
use Nestle\CoreBundle\Model\NestleBowerAccountsMcpPeer;
use Nestle\CoreBundle\Model\NestleBowerAreaPeer;
use Nestle\CoreBundle\Model\NestleBowerCategoryPeer;
use Nestle\CoreBundle\Model\NestleBowerCityPeer;
use Nestle\CoreBundle\Model\map\NestleBowerAccountsMcpTableMap;

abstract class BaseNestleBowerAccountsMcpPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'accounts';

    /** the related Propel class for this table */
    const OM_CLASS = 'Nestle\\CoreBundle\\Model\\NestleBowerAccountsMcp';

    /** the related TableMap class for this table */
    const TM_CLASS = 'Nestle\\CoreBundle\\Model\\map\\NestleBowerAccountsMcpTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the id field */
    const ID = 'accounts.id';

    /** the column name for the name field */
    const NAME = 'accounts.name';

    /** the column name for the contact_person field */
    const CONTACT_PERSON = 'accounts.contact_person';

    /** the column name for the contact_number field */
    const CONTACT_NUMBER = 'accounts.contact_number';

    /** the column name for the address field */
    const ADDRESS = 'accounts.address';

    /** the column name for the latitude field */
    const LATITUDE = 'accounts.latitude';

    /** the column name for the longitude field */
    const LONGITUDE = 'accounts.longitude';

    /** the column name for the best_from field */
    const BEST_FROM = 'accounts.best_from';

    /** the column name for the best_to field */
    const BEST_TO = 'accounts.best_to';

    /** the column name for the area_id field */
    const AREA_ID = 'accounts.area_id';

    /** the column name for the city_id field */
    const CITY_ID = 'accounts.city_id';

    /** the column name for the frequency field */
    const FREQUENCY = 'accounts.frequency';

    /** the column name for the category_id field */
    const CATEGORY_ID = 'accounts.category_id';

    /** the column name for the channel field */
    const CHANNEL = 'accounts.channel';

    /** the column name for the bracket_number field */
    const BRACKET_NUMBER = 'accounts.bracket_number';

    /** the column name for the status field */
    const STATUS = 'accounts.status';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of NestleBowerAccountsMcp objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array NestleBowerAccountsMcp[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. NestleBowerAccountsMcpPeer::$fieldNames[NestleBowerAccountsMcpPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'ContactPerson', 'ContactNumber', 'Address', 'Latitude', 'Longitude', 'BestFrom', 'BestTo', 'AreaId', 'CityId', 'Frequency', 'CategoryId', 'Channel', 'BracketNumber', 'Status', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'name', 'contactPerson', 'contactNumber', 'address', 'latitude', 'longitude', 'bestFrom', 'bestTo', 'areaId', 'cityId', 'frequency', 'categoryId', 'channel', 'bracketNumber', 'status', ),
        BasePeer::TYPE_COLNAME => array (NestleBowerAccountsMcpPeer::ID, NestleBowerAccountsMcpPeer::NAME, NestleBowerAccountsMcpPeer::CONTACT_PERSON, NestleBowerAccountsMcpPeer::CONTACT_NUMBER, NestleBowerAccountsMcpPeer::ADDRESS, NestleBowerAccountsMcpPeer::LATITUDE, NestleBowerAccountsMcpPeer::LONGITUDE, NestleBowerAccountsMcpPeer::BEST_FROM, NestleBowerAccountsMcpPeer::BEST_TO, NestleBowerAccountsMcpPeer::AREA_ID, NestleBowerAccountsMcpPeer::CITY_ID, NestleBowerAccountsMcpPeer::FREQUENCY, NestleBowerAccountsMcpPeer::CATEGORY_ID, NestleBowerAccountsMcpPeer::CHANNEL, NestleBowerAccountsMcpPeer::BRACKET_NUMBER, NestleBowerAccountsMcpPeer::STATUS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NAME', 'CONTACT_PERSON', 'CONTACT_NUMBER', 'ADDRESS', 'LATITUDE', 'LONGITUDE', 'BEST_FROM', 'BEST_TO', 'AREA_ID', 'CITY_ID', 'FREQUENCY', 'CATEGORY_ID', 'CHANNEL', 'BRACKET_NUMBER', 'STATUS', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'contact_person', 'contact_number', 'address', 'latitude', 'longitude', 'best_from', 'best_to', 'area_id', 'city_id', 'frequency', 'category_id', 'channel', 'bracket_number', 'status', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. NestleBowerAccountsMcpPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'ContactPerson' => 2, 'ContactNumber' => 3, 'Address' => 4, 'Latitude' => 5, 'Longitude' => 6, 'BestFrom' => 7, 'BestTo' => 8, 'AreaId' => 9, 'CityId' => 10, 'Frequency' => 11, 'CategoryId' => 12, 'Channel' => 13, 'BracketNumber' => 14, 'Status' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'name' => 1, 'contactPerson' => 2, 'contactNumber' => 3, 'address' => 4, 'latitude' => 5, 'longitude' => 6, 'bestFrom' => 7, 'bestTo' => 8, 'areaId' => 9, 'cityId' => 10, 'frequency' => 11, 'categoryId' => 12, 'channel' => 13, 'bracketNumber' => 14, 'status' => 15, ),
        BasePeer::TYPE_COLNAME => array (NestleBowerAccountsMcpPeer::ID => 0, NestleBowerAccountsMcpPeer::NAME => 1, NestleBowerAccountsMcpPeer::CONTACT_PERSON => 2, NestleBowerAccountsMcpPeer::CONTACT_NUMBER => 3, NestleBowerAccountsMcpPeer::ADDRESS => 4, NestleBowerAccountsMcpPeer::LATITUDE => 5, NestleBowerAccountsMcpPeer::LONGITUDE => 6, NestleBowerAccountsMcpPeer::BEST_FROM => 7, NestleBowerAccountsMcpPeer::BEST_TO => 8, NestleBowerAccountsMcpPeer::AREA_ID => 9, NestleBowerAccountsMcpPeer::CITY_ID => 10, NestleBowerAccountsMcpPeer::FREQUENCY => 11, NestleBowerAccountsMcpPeer::CATEGORY_ID => 12, NestleBowerAccountsMcpPeer::CHANNEL => 13, NestleBowerAccountsMcpPeer::BRACKET_NUMBER => 14, NestleBowerAccountsMcpPeer::STATUS => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NAME' => 1, 'CONTACT_PERSON' => 2, 'CONTACT_NUMBER' => 3, 'ADDRESS' => 4, 'LATITUDE' => 5, 'LONGITUDE' => 6, 'BEST_FROM' => 7, 'BEST_TO' => 8, 'AREA_ID' => 9, 'CITY_ID' => 10, 'FREQUENCY' => 11, 'CATEGORY_ID' => 12, 'CHANNEL' => 13, 'BRACKET_NUMBER' => 14, 'STATUS' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'contact_person' => 2, 'contact_number' => 3, 'address' => 4, 'latitude' => 5, 'longitude' => 6, 'best_from' => 7, 'best_to' => 8, 'area_id' => 9, 'city_id' => 10, 'frequency' => 11, 'category_id' => 12, 'channel' => 13, 'bracket_number' => 14, 'status' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = NestleBowerAccountsMcpPeer::getFieldNames($toType);
        $key = isset(NestleBowerAccountsMcpPeer::$fieldKeys[$fromType][$name]) ? NestleBowerAccountsMcpPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(NestleBowerAccountsMcpPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, NestleBowerAccountsMcpPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return NestleBowerAccountsMcpPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. NestleBowerAccountsMcpPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(NestleBowerAccountsMcpPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::ID);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::NAME);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::CONTACT_PERSON);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::CONTACT_NUMBER);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::ADDRESS);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::LATITUDE);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::LONGITUDE);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::BEST_FROM);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::BEST_TO);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::AREA_ID);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::CITY_ID);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::FREQUENCY);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::CATEGORY_ID);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::CHANNEL);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::BRACKET_NUMBER);
            $criteria->addSelectColumn(NestleBowerAccountsMcpPeer::STATUS);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.contact_person');
            $criteria->addSelectColumn($alias . '.contact_number');
            $criteria->addSelectColumn($alias . '.address');
            $criteria->addSelectColumn($alias . '.latitude');
            $criteria->addSelectColumn($alias . '.longitude');
            $criteria->addSelectColumn($alias . '.best_from');
            $criteria->addSelectColumn($alias . '.best_to');
            $criteria->addSelectColumn($alias . '.area_id');
            $criteria->addSelectColumn($alias . '.city_id');
            $criteria->addSelectColumn($alias . '.frequency');
            $criteria->addSelectColumn($alias . '.category_id');
            $criteria->addSelectColumn($alias . '.channel');
            $criteria->addSelectColumn($alias . '.bracket_number');
            $criteria->addSelectColumn($alias . '.status');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(NestleBowerAccountsMcpPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return NestleBowerAccountsMcp
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = NestleBowerAccountsMcpPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return NestleBowerAccountsMcpPeer::populateObjects(NestleBowerAccountsMcpPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param NestleBowerAccountsMcp $obj A NestleBowerAccountsMcp object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            NestleBowerAccountsMcpPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A NestleBowerAccountsMcp object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof NestleBowerAccountsMcp) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NestleBowerAccountsMcp object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(NestleBowerAccountsMcpPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return NestleBowerAccountsMcp Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(NestleBowerAccountsMcpPeer::$instances[$key])) {
                return NestleBowerAccountsMcpPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (NestleBowerAccountsMcpPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        NestleBowerAccountsMcpPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to accounts
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = NestleBowerAccountsMcpPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = NestleBowerAccountsMcpPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = NestleBowerAccountsMcpPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                NestleBowerAccountsMcpPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (NestleBowerAccountsMcp object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = NestleBowerAccountsMcpPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = NestleBowerAccountsMcpPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + NestleBowerAccountsMcpPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = NestleBowerAccountsMcpPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            NestleBowerAccountsMcpPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related NestleBowerArea table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinNestleBowerArea(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(NestleBowerAccountsMcpPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NestleBowerAccountsMcpPeer::AREA_ID, NestleBowerAreaPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related NestleBowerCity table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinNestleBowerCity(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(NestleBowerAccountsMcpPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CITY_ID, NestleBowerCityPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related NestleBowerCategory table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinNestleBowerCategory(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(NestleBowerAccountsMcpPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CATEGORY_ID, NestleBowerCategoryPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of NestleBowerAccountsMcp objects pre-filled with their NestleBowerArea objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of NestleBowerAccountsMcp objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinNestleBowerArea(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);
        }

        NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        $startcol = NestleBowerAccountsMcpPeer::NUM_HYDRATE_COLUMNS;
        NestleBowerAreaPeer::addSelectColumns($criteria);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::AREA_ID, NestleBowerAreaPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NestleBowerAccountsMcpPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NestleBowerAccountsMcpPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = NestleBowerAccountsMcpPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NestleBowerAccountsMcpPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = NestleBowerAreaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = NestleBowerAreaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = NestleBowerAreaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    NestleBowerAreaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (NestleBowerAccountsMcp) to $obj2 (NestleBowerArea)
                $obj2->addNestleBowerAccountsMcp($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of NestleBowerAccountsMcp objects pre-filled with their NestleBowerCity objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of NestleBowerAccountsMcp objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinNestleBowerCity(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);
        }

        NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        $startcol = NestleBowerAccountsMcpPeer::NUM_HYDRATE_COLUMNS;
        NestleBowerCityPeer::addSelectColumns($criteria);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CITY_ID, NestleBowerCityPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NestleBowerAccountsMcpPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NestleBowerAccountsMcpPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = NestleBowerAccountsMcpPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NestleBowerAccountsMcpPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = NestleBowerCityPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = NestleBowerCityPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = NestleBowerCityPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    NestleBowerCityPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (NestleBowerAccountsMcp) to $obj2 (NestleBowerCity)
                $obj2->addNestleBowerAccountsMcp($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of NestleBowerAccountsMcp objects pre-filled with their NestleBowerCategory objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of NestleBowerAccountsMcp objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinNestleBowerCategory(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);
        }

        NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        $startcol = NestleBowerAccountsMcpPeer::NUM_HYDRATE_COLUMNS;
        NestleBowerCategoryPeer::addSelectColumns($criteria);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CATEGORY_ID, NestleBowerCategoryPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NestleBowerAccountsMcpPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NestleBowerAccountsMcpPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = NestleBowerAccountsMcpPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NestleBowerAccountsMcpPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = NestleBowerCategoryPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = NestleBowerCategoryPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = NestleBowerCategoryPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    NestleBowerCategoryPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (NestleBowerAccountsMcp) to $obj2 (NestleBowerCategory)
                $obj2->addNestleBowerAccountsMcp($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(NestleBowerAccountsMcpPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NestleBowerAccountsMcpPeer::AREA_ID, NestleBowerAreaPeer::ID, $join_behavior);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CITY_ID, NestleBowerCityPeer::ID, $join_behavior);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CATEGORY_ID, NestleBowerCategoryPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of NestleBowerAccountsMcp objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of NestleBowerAccountsMcp objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);
        }

        NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        $startcol2 = NestleBowerAccountsMcpPeer::NUM_HYDRATE_COLUMNS;

        NestleBowerAreaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + NestleBowerAreaPeer::NUM_HYDRATE_COLUMNS;

        NestleBowerCityPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + NestleBowerCityPeer::NUM_HYDRATE_COLUMNS;

        NestleBowerCategoryPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + NestleBowerCategoryPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NestleBowerAccountsMcpPeer::AREA_ID, NestleBowerAreaPeer::ID, $join_behavior);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CITY_ID, NestleBowerCityPeer::ID, $join_behavior);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CATEGORY_ID, NestleBowerCategoryPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NestleBowerAccountsMcpPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NestleBowerAccountsMcpPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NestleBowerAccountsMcpPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NestleBowerAccountsMcpPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined NestleBowerArea rows

            $key2 = NestleBowerAreaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = NestleBowerAreaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = NestleBowerAreaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    NestleBowerAreaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (NestleBowerAccountsMcp) to the collection in $obj2 (NestleBowerArea)
                $obj2->addNestleBowerAccountsMcp($obj1);
            } // if joined row not null

            // Add objects for joined NestleBowerCity rows

            $key3 = NestleBowerCityPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = NestleBowerCityPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = NestleBowerCityPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    NestleBowerCityPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (NestleBowerAccountsMcp) to the collection in $obj3 (NestleBowerCity)
                $obj3->addNestleBowerAccountsMcp($obj1);
            } // if joined row not null

            // Add objects for joined NestleBowerCategory rows

            $key4 = NestleBowerCategoryPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = NestleBowerCategoryPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = NestleBowerCategoryPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    NestleBowerCategoryPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (NestleBowerAccountsMcp) to the collection in $obj4 (NestleBowerCategory)
                $obj4->addNestleBowerAccountsMcp($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related NestleBowerArea table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptNestleBowerArea(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(NestleBowerAccountsMcpPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CITY_ID, NestleBowerCityPeer::ID, $join_behavior);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CATEGORY_ID, NestleBowerCategoryPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related NestleBowerCity table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptNestleBowerCity(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(NestleBowerAccountsMcpPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NestleBowerAccountsMcpPeer::AREA_ID, NestleBowerAreaPeer::ID, $join_behavior);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CATEGORY_ID, NestleBowerCategoryPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related NestleBowerCategory table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptNestleBowerCategory(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(NestleBowerAccountsMcpPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NestleBowerAccountsMcpPeer::AREA_ID, NestleBowerAreaPeer::ID, $join_behavior);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CITY_ID, NestleBowerCityPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of NestleBowerAccountsMcp objects pre-filled with all related objects except NestleBowerArea.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of NestleBowerAccountsMcp objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptNestleBowerArea(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);
        }

        NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        $startcol2 = NestleBowerAccountsMcpPeer::NUM_HYDRATE_COLUMNS;

        NestleBowerCityPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + NestleBowerCityPeer::NUM_HYDRATE_COLUMNS;

        NestleBowerCategoryPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + NestleBowerCategoryPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CITY_ID, NestleBowerCityPeer::ID, $join_behavior);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CATEGORY_ID, NestleBowerCategoryPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NestleBowerAccountsMcpPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NestleBowerAccountsMcpPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NestleBowerAccountsMcpPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NestleBowerAccountsMcpPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined NestleBowerCity rows

                $key2 = NestleBowerCityPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = NestleBowerCityPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = NestleBowerCityPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    NestleBowerCityPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (NestleBowerAccountsMcp) to the collection in $obj2 (NestleBowerCity)
                $obj2->addNestleBowerAccountsMcp($obj1);

            } // if joined row is not null

                // Add objects for joined NestleBowerCategory rows

                $key3 = NestleBowerCategoryPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = NestleBowerCategoryPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = NestleBowerCategoryPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    NestleBowerCategoryPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (NestleBowerAccountsMcp) to the collection in $obj3 (NestleBowerCategory)
                $obj3->addNestleBowerAccountsMcp($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of NestleBowerAccountsMcp objects pre-filled with all related objects except NestleBowerCity.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of NestleBowerAccountsMcp objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptNestleBowerCity(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);
        }

        NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        $startcol2 = NestleBowerAccountsMcpPeer::NUM_HYDRATE_COLUMNS;

        NestleBowerAreaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + NestleBowerAreaPeer::NUM_HYDRATE_COLUMNS;

        NestleBowerCategoryPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + NestleBowerCategoryPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NestleBowerAccountsMcpPeer::AREA_ID, NestleBowerAreaPeer::ID, $join_behavior);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CATEGORY_ID, NestleBowerCategoryPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NestleBowerAccountsMcpPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NestleBowerAccountsMcpPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NestleBowerAccountsMcpPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NestleBowerAccountsMcpPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined NestleBowerArea rows

                $key2 = NestleBowerAreaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = NestleBowerAreaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = NestleBowerAreaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    NestleBowerAreaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (NestleBowerAccountsMcp) to the collection in $obj2 (NestleBowerArea)
                $obj2->addNestleBowerAccountsMcp($obj1);

            } // if joined row is not null

                // Add objects for joined NestleBowerCategory rows

                $key3 = NestleBowerCategoryPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = NestleBowerCategoryPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = NestleBowerCategoryPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    NestleBowerCategoryPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (NestleBowerAccountsMcp) to the collection in $obj3 (NestleBowerCategory)
                $obj3->addNestleBowerAccountsMcp($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of NestleBowerAccountsMcp objects pre-filled with all related objects except NestleBowerCategory.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of NestleBowerAccountsMcp objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptNestleBowerCategory(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);
        }

        NestleBowerAccountsMcpPeer::addSelectColumns($criteria);
        $startcol2 = NestleBowerAccountsMcpPeer::NUM_HYDRATE_COLUMNS;

        NestleBowerAreaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + NestleBowerAreaPeer::NUM_HYDRATE_COLUMNS;

        NestleBowerCityPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + NestleBowerCityPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NestleBowerAccountsMcpPeer::AREA_ID, NestleBowerAreaPeer::ID, $join_behavior);

        $criteria->addJoin(NestleBowerAccountsMcpPeer::CITY_ID, NestleBowerCityPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NestleBowerAccountsMcpPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NestleBowerAccountsMcpPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NestleBowerAccountsMcpPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NestleBowerAccountsMcpPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined NestleBowerArea rows

                $key2 = NestleBowerAreaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = NestleBowerAreaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = NestleBowerAreaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    NestleBowerAreaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (NestleBowerAccountsMcp) to the collection in $obj2 (NestleBowerArea)
                $obj2->addNestleBowerAccountsMcp($obj1);

            } // if joined row is not null

                // Add objects for joined NestleBowerCity rows

                $key3 = NestleBowerCityPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = NestleBowerCityPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = NestleBowerCityPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    NestleBowerCityPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (NestleBowerAccountsMcp) to the collection in $obj3 (NestleBowerCity)
                $obj3->addNestleBowerAccountsMcp($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(NestleBowerAccountsMcpPeer::DATABASE_NAME)->getTable(NestleBowerAccountsMcpPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseNestleBowerAccountsMcpPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseNestleBowerAccountsMcpPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \Nestle\CoreBundle\Model\map\NestleBowerAccountsMcpTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return NestleBowerAccountsMcpPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a NestleBowerAccountsMcp or Criteria object.
     *
     * @param      mixed $values Criteria or NestleBowerAccountsMcp object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from NestleBowerAccountsMcp object
        }

        if ($criteria->containsKey(NestleBowerAccountsMcpPeer::ID) && $criteria->keyContainsValue(NestleBowerAccountsMcpPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.NestleBowerAccountsMcpPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a NestleBowerAccountsMcp or Criteria object.
     *
     * @param      mixed $values Criteria or NestleBowerAccountsMcp object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(NestleBowerAccountsMcpPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(NestleBowerAccountsMcpPeer::ID);
            $value = $criteria->remove(NestleBowerAccountsMcpPeer::ID);
            if ($value) {
                $selectCriteria->add(NestleBowerAccountsMcpPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(NestleBowerAccountsMcpPeer::TABLE_NAME);
            }

        } else { // $values is NestleBowerAccountsMcp object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the accounts table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(NestleBowerAccountsMcpPeer::TABLE_NAME, $con, NestleBowerAccountsMcpPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            NestleBowerAccountsMcpPeer::clearInstancePool();
            NestleBowerAccountsMcpPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a NestleBowerAccountsMcp or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or NestleBowerAccountsMcp object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            NestleBowerAccountsMcpPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof NestleBowerAccountsMcp) { // it's a model object
            // invalidate the cache for this single object
            NestleBowerAccountsMcpPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(NestleBowerAccountsMcpPeer::DATABASE_NAME);
            $criteria->add(NestleBowerAccountsMcpPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                NestleBowerAccountsMcpPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(NestleBowerAccountsMcpPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            NestleBowerAccountsMcpPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given NestleBowerAccountsMcp object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param NestleBowerAccountsMcp $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(NestleBowerAccountsMcpPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(NestleBowerAccountsMcpPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(NestleBowerAccountsMcpPeer::DATABASE_NAME, NestleBowerAccountsMcpPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return NestleBowerAccountsMcp
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = NestleBowerAccountsMcpPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(NestleBowerAccountsMcpPeer::DATABASE_NAME);
        $criteria->add(NestleBowerAccountsMcpPeer::ID, $pk);

        $v = NestleBowerAccountsMcpPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return NestleBowerAccountsMcp[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NestleBowerAccountsMcpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(NestleBowerAccountsMcpPeer::DATABASE_NAME);
            $criteria->add(NestleBowerAccountsMcpPeer::ID, $pks, Criteria::IN);
            $objs = NestleBowerAccountsMcpPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseNestleBowerAccountsMcpPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseNestleBowerAccountsMcpPeer::buildTableMap();

