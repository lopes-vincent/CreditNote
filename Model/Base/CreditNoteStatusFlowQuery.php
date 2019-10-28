<?php

namespace CreditNote\Model\Base;

use \Exception;
use \PDO;
use CreditNote\Model\CreditNoteStatusFlow as ChildCreditNoteStatusFlow;
use CreditNote\Model\CreditNoteStatusFlowQuery as ChildCreditNoteStatusFlowQuery;
use CreditNote\Model\Map\CreditNoteStatusFlowTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'credit_note_status_flow' table.
 *
 *
 *
 * @method     ChildCreditNoteStatusFlowQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCreditNoteStatusFlowQuery orderByFromStatusId($order = Criteria::ASC) Order by the from_status_id column
 * @method     ChildCreditNoteStatusFlowQuery orderByToStatusId($order = Criteria::ASC) Order by the to_status_id column
 * @method     ChildCreditNoteStatusFlowQuery orderByPriority($order = Criteria::ASC) Order by the priority column
 * @method     ChildCreditNoteStatusFlowQuery orderByRoot($order = Criteria::ASC) Order by the root column
 * @method     ChildCreditNoteStatusFlowQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildCreditNoteStatusFlowQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildCreditNoteStatusFlowQuery groupById() Group by the id column
 * @method     ChildCreditNoteStatusFlowQuery groupByFromStatusId() Group by the from_status_id column
 * @method     ChildCreditNoteStatusFlowQuery groupByToStatusId() Group by the to_status_id column
 * @method     ChildCreditNoteStatusFlowQuery groupByPriority() Group by the priority column
 * @method     ChildCreditNoteStatusFlowQuery groupByRoot() Group by the root column
 * @method     ChildCreditNoteStatusFlowQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildCreditNoteStatusFlowQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildCreditNoteStatusFlowQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCreditNoteStatusFlowQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCreditNoteStatusFlowQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCreditNoteStatusFlowQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCreditNoteStatusFlowQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCreditNoteStatusFlowQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCreditNoteStatusFlowQuery leftJoinCreditNoteStatusRelatedByFromStatusId($relationAlias = null) Adds a LEFT JOIN clause to the query using the CreditNoteStatusRelatedByFromStatusId relation
 * @method     ChildCreditNoteStatusFlowQuery rightJoinCreditNoteStatusRelatedByFromStatusId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CreditNoteStatusRelatedByFromStatusId relation
 * @method     ChildCreditNoteStatusFlowQuery innerJoinCreditNoteStatusRelatedByFromStatusId($relationAlias = null) Adds a INNER JOIN clause to the query using the CreditNoteStatusRelatedByFromStatusId relation
 *
 * @method     ChildCreditNoteStatusFlowQuery joinWithCreditNoteStatusRelatedByFromStatusId($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CreditNoteStatusRelatedByFromStatusId relation
 *
 * @method     ChildCreditNoteStatusFlowQuery leftJoinWithCreditNoteStatusRelatedByFromStatusId() Adds a LEFT JOIN clause and with to the query using the CreditNoteStatusRelatedByFromStatusId relation
 * @method     ChildCreditNoteStatusFlowQuery rightJoinWithCreditNoteStatusRelatedByFromStatusId() Adds a RIGHT JOIN clause and with to the query using the CreditNoteStatusRelatedByFromStatusId relation
 * @method     ChildCreditNoteStatusFlowQuery innerJoinWithCreditNoteStatusRelatedByFromStatusId() Adds a INNER JOIN clause and with to the query using the CreditNoteStatusRelatedByFromStatusId relation
 *
 * @method     ChildCreditNoteStatusFlowQuery leftJoinCreditNoteStatusRelatedByToStatusId($relationAlias = null) Adds a LEFT JOIN clause to the query using the CreditNoteStatusRelatedByToStatusId relation
 * @method     ChildCreditNoteStatusFlowQuery rightJoinCreditNoteStatusRelatedByToStatusId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CreditNoteStatusRelatedByToStatusId relation
 * @method     ChildCreditNoteStatusFlowQuery innerJoinCreditNoteStatusRelatedByToStatusId($relationAlias = null) Adds a INNER JOIN clause to the query using the CreditNoteStatusRelatedByToStatusId relation
 *
 * @method     ChildCreditNoteStatusFlowQuery joinWithCreditNoteStatusRelatedByToStatusId($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CreditNoteStatusRelatedByToStatusId relation
 *
 * @method     ChildCreditNoteStatusFlowQuery leftJoinWithCreditNoteStatusRelatedByToStatusId() Adds a LEFT JOIN clause and with to the query using the CreditNoteStatusRelatedByToStatusId relation
 * @method     ChildCreditNoteStatusFlowQuery rightJoinWithCreditNoteStatusRelatedByToStatusId() Adds a RIGHT JOIN clause and with to the query using the CreditNoteStatusRelatedByToStatusId relation
 * @method     ChildCreditNoteStatusFlowQuery innerJoinWithCreditNoteStatusRelatedByToStatusId() Adds a INNER JOIN clause and with to the query using the CreditNoteStatusRelatedByToStatusId relation
 *
 * @method     \CreditNote\Model\CreditNoteStatusQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCreditNoteStatusFlow findOne(ConnectionInterface $con = null) Return the first ChildCreditNoteStatusFlow matching the query
 * @method     ChildCreditNoteStatusFlow findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCreditNoteStatusFlow matching the query, or a new ChildCreditNoteStatusFlow object populated from the query conditions when no match is found
 *
 * @method     ChildCreditNoteStatusFlow findOneById(int $id) Return the first ChildCreditNoteStatusFlow filtered by the id column
 * @method     ChildCreditNoteStatusFlow findOneByFromStatusId(int $from_status_id) Return the first ChildCreditNoteStatusFlow filtered by the from_status_id column
 * @method     ChildCreditNoteStatusFlow findOneByToStatusId(int $to_status_id) Return the first ChildCreditNoteStatusFlow filtered by the to_status_id column
 * @method     ChildCreditNoteStatusFlow findOneByPriority(int $priority) Return the first ChildCreditNoteStatusFlow filtered by the priority column
 * @method     ChildCreditNoteStatusFlow findOneByRoot(boolean $root) Return the first ChildCreditNoteStatusFlow filtered by the root column
 * @method     ChildCreditNoteStatusFlow findOneByCreatedAt(string $created_at) Return the first ChildCreditNoteStatusFlow filtered by the created_at column
 * @method     ChildCreditNoteStatusFlow findOneByUpdatedAt(string $updated_at) Return the first ChildCreditNoteStatusFlow filtered by the updated_at column *

 * @method     ChildCreditNoteStatusFlow requirePk($key, ConnectionInterface $con = null) Return the ChildCreditNoteStatusFlow by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditNoteStatusFlow requireOne(ConnectionInterface $con = null) Return the first ChildCreditNoteStatusFlow matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCreditNoteStatusFlow requireOneById(int $id) Return the first ChildCreditNoteStatusFlow filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditNoteStatusFlow requireOneByFromStatusId(int $from_status_id) Return the first ChildCreditNoteStatusFlow filtered by the from_status_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditNoteStatusFlow requireOneByToStatusId(int $to_status_id) Return the first ChildCreditNoteStatusFlow filtered by the to_status_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditNoteStatusFlow requireOneByPriority(int $priority) Return the first ChildCreditNoteStatusFlow filtered by the priority column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditNoteStatusFlow requireOneByRoot(boolean $root) Return the first ChildCreditNoteStatusFlow filtered by the root column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditNoteStatusFlow requireOneByCreatedAt(string $created_at) Return the first ChildCreditNoteStatusFlow filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditNoteStatusFlow requireOneByUpdatedAt(string $updated_at) Return the first ChildCreditNoteStatusFlow filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCreditNoteStatusFlow[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCreditNoteStatusFlow objects based on current ModelCriteria
 * @method     ChildCreditNoteStatusFlow[]|ObjectCollection findById(int $id) Return ChildCreditNoteStatusFlow objects filtered by the id column
 * @method     ChildCreditNoteStatusFlow[]|ObjectCollection findByFromStatusId(int $from_status_id) Return ChildCreditNoteStatusFlow objects filtered by the from_status_id column
 * @method     ChildCreditNoteStatusFlow[]|ObjectCollection findByToStatusId(int $to_status_id) Return ChildCreditNoteStatusFlow objects filtered by the to_status_id column
 * @method     ChildCreditNoteStatusFlow[]|ObjectCollection findByPriority(int $priority) Return ChildCreditNoteStatusFlow objects filtered by the priority column
 * @method     ChildCreditNoteStatusFlow[]|ObjectCollection findByRoot(boolean $root) Return ChildCreditNoteStatusFlow objects filtered by the root column
 * @method     ChildCreditNoteStatusFlow[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildCreditNoteStatusFlow objects filtered by the created_at column
 * @method     ChildCreditNoteStatusFlow[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildCreditNoteStatusFlow objects filtered by the updated_at column
 * @method     ChildCreditNoteStatusFlow[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CreditNoteStatusFlowQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \CreditNote\Model\Base\CreditNoteStatusFlowQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'thelia', $modelName = '\\CreditNote\\Model\\CreditNoteStatusFlow', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCreditNoteStatusFlowQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCreditNoteStatusFlowQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ChildCreditNoteStatusFlowQuery) {
            return $criteria;
        }
        $query = new ChildCreditNoteStatusFlowQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
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
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCreditNoteStatusFlow|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CreditNoteStatusFlowTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CreditNoteStatusFlowTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCreditNoteStatusFlow A model object, or null if the key is not found
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `from_status_id`, `to_status_id`, `priority`, `root`, `created_at`, `updated_at` FROM `credit_note_status_flow` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCreditNoteStatusFlow $obj */
            $obj = new ChildCreditNoteStatusFlow();
            $obj->hydrate($row);
            CreditNoteStatusFlowTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildCreditNoteStatusFlow|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for \in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (\is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the from_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFromStatusId(1234); // WHERE from_status_id = 1234
     * $query->filterByFromStatusId(array(12, 34)); // WHERE from_status_id IN (12, 34)
     * $query->filterByFromStatusId(array('min' => 12)); // WHERE from_status_id > 12
     * </code>
     *
     * @see       filterByCreditNoteStatusRelatedByFromStatusId()
     *
     * @param     mixed $fromStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for \in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function filterByFromStatusId($fromStatusId = null, $comparison = null)
    {
        if (\is_array($fromStatusId)) {
            $useMinMax = false;
            if (isset($fromStatusId['min'])) {
                $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_FROM_STATUS_ID, $fromStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fromStatusId['max'])) {
                $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_FROM_STATUS_ID, $fromStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_FROM_STATUS_ID, $fromStatusId, $comparison);
    }

    /**
     * Filter the query on the to_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByToStatusId(1234); // WHERE to_status_id = 1234
     * $query->filterByToStatusId(array(12, 34)); // WHERE to_status_id IN (12, 34)
     * $query->filterByToStatusId(array('min' => 12)); // WHERE to_status_id > 12
     * </code>
     *
     * @see       filterByCreditNoteStatusRelatedByToStatusId()
     *
     * @param     mixed $toStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for \in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function filterByToStatusId($toStatusId = null, $comparison = null)
    {
        if (\is_array($toStatusId)) {
            $useMinMax = false;
            if (isset($toStatusId['min'])) {
                $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_TO_STATUS_ID, $toStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($toStatusId['max'])) {
                $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_TO_STATUS_ID, $toStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_TO_STATUS_ID, $toStatusId, $comparison);
    }

    /**
     * Filter the query on the priority column
     *
     * Example usage:
     * <code>
     * $query->filterByPriority(1234); // WHERE priority = 1234
     * $query->filterByPriority(array(12, 34)); // WHERE priority IN (12, 34)
     * $query->filterByPriority(array('min' => 12)); // WHERE priority > 12
     * </code>
     *
     * @param     mixed $priority The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for \in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function filterByPriority($priority = null, $comparison = null)
    {
        if (\is_array($priority)) {
            $useMinMax = false;
            if (isset($priority['min'])) {
                $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_PRIORITY, $priority['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($priority['max'])) {
                $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_PRIORITY, $priority['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_PRIORITY, $priority, $comparison);
    }

    /**
     * Filter the query on the root column
     *
     * Example usage:
     * <code>
     * $query->filterByRoot(true); // WHERE root = true
     * $query->filterByRoot('yes'); // WHERE root = true
     * </code>
     *
     * @param     boolean|string $root The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function filterByRoot($root = null, $comparison = null)
    {
        if (\is_string($root)) {
            $root = \in_array(strtolower($root), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_ROOT, $root, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for \in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (\is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for \in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (\is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \CreditNote\Model\CreditNoteStatus object
     *
     * @param \CreditNote\Model\CreditNoteStatus|ObjectCollection $creditNoteStatus The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function filterByCreditNoteStatusRelatedByFromStatusId($creditNoteStatus, $comparison = null)
    {
        if ($creditNoteStatus instanceof \CreditNote\Model\CreditNoteStatus) {
            return $this
                ->addUsingAlias(CreditNoteStatusFlowTableMap::COL_FROM_STATUS_ID, $creditNoteStatus->getId(), $comparison);
        } elseif ($creditNoteStatus instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CreditNoteStatusFlowTableMap::COL_FROM_STATUS_ID, $creditNoteStatus->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCreditNoteStatusRelatedByFromStatusId() only accepts arguments of type \CreditNote\Model\CreditNoteStatus or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CreditNoteStatusRelatedByFromStatusId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function joinCreditNoteStatusRelatedByFromStatusId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CreditNoteStatusRelatedByFromStatusId');

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
            $this->addJoinObject($join, 'CreditNoteStatusRelatedByFromStatusId');
        }

        return $this;
    }

    /**
     * Use the CreditNoteStatusRelatedByFromStatusId relation CreditNoteStatus object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CreditNote\Model\CreditNoteStatusQuery A secondary query class using the current class as primary query
     */
    public function useCreditNoteStatusRelatedByFromStatusIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCreditNoteStatusRelatedByFromStatusId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CreditNoteStatusRelatedByFromStatusId', '\CreditNote\Model\CreditNoteStatusQuery');
    }

    /**
     * Filter the query by a related \CreditNote\Model\CreditNoteStatus object
     *
     * @param \CreditNote\Model\CreditNoteStatus|ObjectCollection $creditNoteStatus The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function filterByCreditNoteStatusRelatedByToStatusId($creditNoteStatus, $comparison = null)
    {
        if ($creditNoteStatus instanceof \CreditNote\Model\CreditNoteStatus) {
            return $this
                ->addUsingAlias(CreditNoteStatusFlowTableMap::COL_TO_STATUS_ID, $creditNoteStatus->getId(), $comparison);
        } elseif ($creditNoteStatus instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CreditNoteStatusFlowTableMap::COL_TO_STATUS_ID, $creditNoteStatus->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCreditNoteStatusRelatedByToStatusId() only accepts arguments of type \CreditNote\Model\CreditNoteStatus or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CreditNoteStatusRelatedByToStatusId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function joinCreditNoteStatusRelatedByToStatusId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CreditNoteStatusRelatedByToStatusId');

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
            $this->addJoinObject($join, 'CreditNoteStatusRelatedByToStatusId');
        }

        return $this;
    }

    /**
     * Use the CreditNoteStatusRelatedByToStatusId relation CreditNoteStatus object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CreditNote\Model\CreditNoteStatusQuery A secondary query class using the current class as primary query
     */
    public function useCreditNoteStatusRelatedByToStatusIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCreditNoteStatusRelatedByToStatusId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CreditNoteStatusRelatedByToStatusId', '\CreditNote\Model\CreditNoteStatusQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCreditNoteStatusFlow $creditNoteStatusFlow Object to remove from the list of results
     *
     * @return $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function prune($creditNoteStatusFlow = null)
    {
        if ($creditNoteStatusFlow) {
            $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_ID, $creditNoteStatusFlow->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the credit_note_status_flow table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CreditNoteStatusFlowTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CreditNoteStatusFlowTableMap::clearInstancePool();
            CreditNoteStatusFlowTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CreditNoteStatusFlowTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CreditNoteStatusFlowTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CreditNoteStatusFlowTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CreditNoteStatusFlowTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(CreditNoteStatusFlowTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(CreditNoteStatusFlowTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(CreditNoteStatusFlowTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(CreditNoteStatusFlowTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildCreditNoteStatusFlowQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(CreditNoteStatusFlowTableMap::COL_CREATED_AT);
    }

} // CreditNoteStatusFlowQuery