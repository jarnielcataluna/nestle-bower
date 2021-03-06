<?php

namespace Nestle\CoreBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use Nestle\CoreBundle\Model\NestleBowerCity;
use Nestle\CoreBundle\Model\NestleBowerProvince;
use Nestle\CoreBundle\Model\NestleBowerProvincePeer;
use Nestle\CoreBundle\Model\NestleBowerProvinceQuery;
use Nestle\CoreBundle\Model\NestleBowerRegion;

/**
 * @method NestleBowerProvinceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method NestleBowerProvinceQuery orderByProvince($order = Criteria::ASC) Order by the province column
 * @method NestleBowerProvinceQuery orderByRegionId($order = Criteria::ASC) Order by the region_id column
 * @method NestleBowerProvinceQuery orderByStatus($order = Criteria::ASC) Order by the status column
 *
 * @method NestleBowerProvinceQuery groupById() Group by the id column
 * @method NestleBowerProvinceQuery groupByProvince() Group by the province column
 * @method NestleBowerProvinceQuery groupByRegionId() Group by the region_id column
 * @method NestleBowerProvinceQuery groupByStatus() Group by the status column
 *
 * @method NestleBowerProvinceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method NestleBowerProvinceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method NestleBowerProvinceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method NestleBowerProvinceQuery leftJoinNestleBowerRegion($relationAlias = null) Adds a LEFT JOIN clause to the query using the NestleBowerRegion relation
 * @method NestleBowerProvinceQuery rightJoinNestleBowerRegion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NestleBowerRegion relation
 * @method NestleBowerProvinceQuery innerJoinNestleBowerRegion($relationAlias = null) Adds a INNER JOIN clause to the query using the NestleBowerRegion relation
 *
 * @method NestleBowerProvinceQuery leftJoinNestleBowerCity($relationAlias = null) Adds a LEFT JOIN clause to the query using the NestleBowerCity relation
 * @method NestleBowerProvinceQuery rightJoinNestleBowerCity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NestleBowerCity relation
 * @method NestleBowerProvinceQuery innerJoinNestleBowerCity($relationAlias = null) Adds a INNER JOIN clause to the query using the NestleBowerCity relation
 *
 * @method NestleBowerProvince findOne(PropelPDO $con = null) Return the first NestleBowerProvince matching the query
 * @method NestleBowerProvince findOneOrCreate(PropelPDO $con = null) Return the first NestleBowerProvince matching the query, or a new NestleBowerProvince object populated from the query conditions when no match is found
 *
 * @method NestleBowerProvince findOneByProvince(string $province) Return the first NestleBowerProvince filtered by the province column
 * @method NestleBowerProvince findOneByRegionId(int $region_id) Return the first NestleBowerProvince filtered by the region_id column
 * @method NestleBowerProvince findOneByStatus(int $status) Return the first NestleBowerProvince filtered by the status column
 *
 * @method array findById(int $id) Return NestleBowerProvince objects filtered by the id column
 * @method array findByProvince(string $province) Return NestleBowerProvince objects filtered by the province column
 * @method array findByRegionId(int $region_id) Return NestleBowerProvince objects filtered by the region_id column
 * @method array findByStatus(int $status) Return NestleBowerProvince objects filtered by the status column
 */
abstract class BaseNestleBowerProvinceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseNestleBowerProvinceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'default';
        }
        if (null === $modelName) {
            $modelName = 'Nestle\\CoreBundle\\Model\\NestleBowerProvince';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new NestleBowerProvinceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   NestleBowerProvinceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return NestleBowerProvinceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof NestleBowerProvinceQuery) {
            return $criteria;
        }
        $query = new NestleBowerProvinceQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   NestleBowerProvince|NestleBowerProvince[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = NestleBowerProvincePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(NestleBowerProvincePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 NestleBowerProvince A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 NestleBowerProvince A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `province`, `region_id`, `status` FROM `province` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new NestleBowerProvince();
            $obj->hydrate($row);
            NestleBowerProvincePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return NestleBowerProvince|NestleBowerProvince[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|NestleBowerProvince[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return NestleBowerProvinceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(NestleBowerProvincePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return NestleBowerProvinceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(NestleBowerProvincePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NestleBowerProvinceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(NestleBowerProvincePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(NestleBowerProvincePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NestleBowerProvincePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the province column
     *
     * Example usage:
     * <code>
     * $query->filterByProvince('fooValue');   // WHERE province = 'fooValue'
     * $query->filterByProvince('%fooValue%'); // WHERE province LIKE '%fooValue%'
     * </code>
     *
     * @param     string $province The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NestleBowerProvinceQuery The current query, for fluid interface
     */
    public function filterByProvince($province = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($province)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $province)) {
                $province = str_replace('*', '%', $province);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NestleBowerProvincePeer::PROVINCE, $province, $comparison);
    }

    /**
     * Filter the query on the region_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRegionId(1234); // WHERE region_id = 1234
     * $query->filterByRegionId(array(12, 34)); // WHERE region_id IN (12, 34)
     * $query->filterByRegionId(array('min' => 12)); // WHERE region_id >= 12
     * $query->filterByRegionId(array('max' => 12)); // WHERE region_id <= 12
     * </code>
     *
     * @see       filterByNestleBowerRegion()
     *
     * @param     mixed $regionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NestleBowerProvinceQuery The current query, for fluid interface
     */
    public function filterByRegionId($regionId = null, $comparison = null)
    {
        if (is_array($regionId)) {
            $useMinMax = false;
            if (isset($regionId['min'])) {
                $this->addUsingAlias(NestleBowerProvincePeer::REGION_ID, $regionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($regionId['max'])) {
                $this->addUsingAlias(NestleBowerProvincePeer::REGION_ID, $regionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NestleBowerProvincePeer::REGION_ID, $regionId, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus(1234); // WHERE status = 1234
     * $query->filterByStatus(array(12, 34)); // WHERE status IN (12, 34)
     * $query->filterByStatus(array('min' => 12)); // WHERE status >= 12
     * $query->filterByStatus(array('max' => 12)); // WHERE status <= 12
     * </code>
     *
     * @param     mixed $status The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NestleBowerProvinceQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_array($status)) {
            $useMinMax = false;
            if (isset($status['min'])) {
                $this->addUsingAlias(NestleBowerProvincePeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($status['max'])) {
                $this->addUsingAlias(NestleBowerProvincePeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NestleBowerProvincePeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query by a related NestleBowerRegion object
     *
     * @param   NestleBowerRegion|PropelObjectCollection $nestleBowerRegion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 NestleBowerProvinceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNestleBowerRegion($nestleBowerRegion, $comparison = null)
    {
        if ($nestleBowerRegion instanceof NestleBowerRegion) {
            return $this
                ->addUsingAlias(NestleBowerProvincePeer::REGION_ID, $nestleBowerRegion->getId(), $comparison);
        } elseif ($nestleBowerRegion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NestleBowerProvincePeer::REGION_ID, $nestleBowerRegion->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByNestleBowerRegion() only accepts arguments of type NestleBowerRegion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the NestleBowerRegion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return NestleBowerProvinceQuery The current query, for fluid interface
     */
    public function joinNestleBowerRegion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('NestleBowerRegion');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'NestleBowerRegion');
        }

        return $this;
    }

    /**
     * Use the NestleBowerRegion relation NestleBowerRegion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \Nestle\CoreBundle\Model\NestleBowerRegionQuery A secondary query class using the current class as primary query
     */
    public function useNestleBowerRegionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinNestleBowerRegion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'NestleBowerRegion', '\Nestle\CoreBundle\Model\NestleBowerRegionQuery');
    }

    /**
     * Filter the query by a related NestleBowerCity object
     *
     * @param   NestleBowerCity|PropelObjectCollection $nestleBowerCity  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 NestleBowerProvinceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNestleBowerCity($nestleBowerCity, $comparison = null)
    {
        if ($nestleBowerCity instanceof NestleBowerCity) {
            return $this
                ->addUsingAlias(NestleBowerProvincePeer::ID, $nestleBowerCity->getProvinceId(), $comparison);
        } elseif ($nestleBowerCity instanceof PropelObjectCollection) {
            return $this
                ->useNestleBowerCityQuery()
                ->filterByPrimaryKeys($nestleBowerCity->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNestleBowerCity() only accepts arguments of type NestleBowerCity or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the NestleBowerCity relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return NestleBowerProvinceQuery The current query, for fluid interface
     */
    public function joinNestleBowerCity($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('NestleBowerCity');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'NestleBowerCity');
        }

        return $this;
    }

    /**
     * Use the NestleBowerCity relation NestleBowerCity object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \Nestle\CoreBundle\Model\NestleBowerCityQuery A secondary query class using the current class as primary query
     */
    public function useNestleBowerCityQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinNestleBowerCity($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'NestleBowerCity', '\Nestle\CoreBundle\Model\NestleBowerCityQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   NestleBowerProvince $nestleBowerProvince Object to remove from the list of results
     *
     * @return NestleBowerProvinceQuery The current query, for fluid interface
     */
    public function prune($nestleBowerProvince = null)
    {
        if ($nestleBowerProvince) {
            $this->addUsingAlias(NestleBowerProvincePeer::ID, $nestleBowerProvince->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
