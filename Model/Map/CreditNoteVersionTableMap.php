<?php

namespace CreditNote\Model\Map;

use CreditNote\Model\CreditNoteVersion;
use CreditNote\Model\CreditNoteVersionQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'credit_note_version' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CreditNoteVersionTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;
    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'CreditNote.Model.Map.CreditNoteVersionTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'thelia';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'credit_note_version';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\CreditNote\\Model\\CreditNoteVersion';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'CreditNote.Model.CreditNoteVersion';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 27;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 27;

    /**
     * the column name for the ID field
     */
    const ID = 'credit_note_version.ID';

    /**
     * the column name for the REF field
     */
    const REF = 'credit_note_version.REF';

    /**
     * the column name for the INVOICE_REF field
     */
    const INVOICE_REF = 'credit_note_version.INVOICE_REF';

    /**
     * the column name for the INVOICE_ADDRESS_ID field
     */
    const INVOICE_ADDRESS_ID = 'credit_note_version.INVOICE_ADDRESS_ID';

    /**
     * the column name for the INVOICE_DATE field
     */
    const INVOICE_DATE = 'credit_note_version.INVOICE_DATE';

    /**
     * the column name for the ORDER_ID field
     */
    const ORDER_ID = 'credit_note_version.ORDER_ID';

    /**
     * the column name for the CUSTOMER_ID field
     */
    const CUSTOMER_ID = 'credit_note_version.CUSTOMER_ID';

    /**
     * the column name for the PARENT_ID field
     */
    const PARENT_ID = 'credit_note_version.PARENT_ID';

    /**
     * the column name for the TYPE_ID field
     */
    const TYPE_ID = 'credit_note_version.TYPE_ID';

    /**
     * the column name for the STATUS_ID field
     */
    const STATUS_ID = 'credit_note_version.STATUS_ID';

    /**
     * the column name for the CURRENCY_ID field
     */
    const CURRENCY_ID = 'credit_note_version.CURRENCY_ID';

    /**
     * the column name for the CURRENCY_RATE field
     */
    const CURRENCY_RATE = 'credit_note_version.CURRENCY_RATE';

    /**
     * the column name for the TOTAL_PRICE field
     */
    const TOTAL_PRICE = 'credit_note_version.TOTAL_PRICE';

    /**
     * the column name for the TOTAL_PRICE_WITH_TAX field
     */
    const TOTAL_PRICE_WITH_TAX = 'credit_note_version.TOTAL_PRICE_WITH_TAX';

    /**
     * the column name for the DISCOUNT_WITHOUT_TAX field
     */
    const DISCOUNT_WITHOUT_TAX = 'credit_note_version.DISCOUNT_WITHOUT_TAX';

    /**
     * the column name for the DISCOUNT_WITH_TAX field
     */
    const DISCOUNT_WITH_TAX = 'credit_note_version.DISCOUNT_WITH_TAX';

    /**
     * the column name for the ALLOW_PARTIAL_USE field
     */
    const ALLOW_PARTIAL_USE = 'credit_note_version.ALLOW_PARTIAL_USE';

    /**
     * the column name for the CREATED_AT field
     */
    const CREATED_AT = 'credit_note_version.CREATED_AT';

    /**
     * the column name for the UPDATED_AT field
     */
    const UPDATED_AT = 'credit_note_version.UPDATED_AT';

    /**
     * the column name for the VERSION field
     */
    const VERSION = 'credit_note_version.VERSION';

    /**
     * the column name for the VERSION_CREATED_AT field
     */
    const VERSION_CREATED_AT = 'credit_note_version.VERSION_CREATED_AT';

    /**
     * the column name for the VERSION_CREATED_BY field
     */
    const VERSION_CREATED_BY = 'credit_note_version.VERSION_CREATED_BY';

    /**
     * the column name for the ORDER_ID_VERSION field
     */
    const ORDER_ID_VERSION = 'credit_note_version.ORDER_ID_VERSION';

    /**
     * the column name for the CUSTOMER_ID_VERSION field
     */
    const CUSTOMER_ID_VERSION = 'credit_note_version.CUSTOMER_ID_VERSION';

    /**
     * the column name for the PARENT_ID_VERSION field
     */
    const PARENT_ID_VERSION = 'credit_note_version.PARENT_ID_VERSION';

    /**
     * the column name for the CREDIT_NOTE_IDS field
     */
    const CREDIT_NOTE_IDS = 'credit_note_version.CREDIT_NOTE_IDS';

    /**
     * the column name for the CREDIT_NOTE_VERSIONS field
     */
    const CREDIT_NOTE_VERSIONS = 'credit_note_version.CREDIT_NOTE_VERSIONS';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Ref', 'InvoiceRef', 'InvoiceAddressId', 'InvoiceDate', 'OrderId', 'CustomerId', 'ParentId', 'TypeId', 'StatusId', 'CurrencyId', 'CurrencyRate', 'TotalPrice', 'TotalPriceWithTax', 'DiscountWithoutTax', 'DiscountWithTax', 'AllowPartialUse', 'CreatedAt', 'UpdatedAt', 'Version', 'VersionCreatedAt', 'VersionCreatedBy', 'OrderIdVersion', 'CustomerIdVersion', 'ParentIdVersion', 'CreditNoteIds', 'CreditNoteVersions', ),
        self::TYPE_STUDLYPHPNAME => array('id', 'ref', 'invoiceRef', 'invoiceAddressId', 'invoiceDate', 'orderId', 'customerId', 'parentId', 'typeId', 'statusId', 'currencyId', 'currencyRate', 'totalPrice', 'totalPriceWithTax', 'discountWithoutTax', 'discountWithTax', 'allowPartialUse', 'createdAt', 'updatedAt', 'version', 'versionCreatedAt', 'versionCreatedBy', 'orderIdVersion', 'customerIdVersion', 'parentIdVersion', 'creditNoteIds', 'creditNoteVersions', ),
        self::TYPE_COLNAME       => array(CreditNoteVersionTableMap::ID, CreditNoteVersionTableMap::REF, CreditNoteVersionTableMap::INVOICE_REF, CreditNoteVersionTableMap::INVOICE_ADDRESS_ID, CreditNoteVersionTableMap::INVOICE_DATE, CreditNoteVersionTableMap::ORDER_ID, CreditNoteVersionTableMap::CUSTOMER_ID, CreditNoteVersionTableMap::PARENT_ID, CreditNoteVersionTableMap::TYPE_ID, CreditNoteVersionTableMap::STATUS_ID, CreditNoteVersionTableMap::CURRENCY_ID, CreditNoteVersionTableMap::CURRENCY_RATE, CreditNoteVersionTableMap::TOTAL_PRICE, CreditNoteVersionTableMap::TOTAL_PRICE_WITH_TAX, CreditNoteVersionTableMap::DISCOUNT_WITHOUT_TAX, CreditNoteVersionTableMap::DISCOUNT_WITH_TAX, CreditNoteVersionTableMap::ALLOW_PARTIAL_USE, CreditNoteVersionTableMap::CREATED_AT, CreditNoteVersionTableMap::UPDATED_AT, CreditNoteVersionTableMap::VERSION, CreditNoteVersionTableMap::VERSION_CREATED_AT, CreditNoteVersionTableMap::VERSION_CREATED_BY, CreditNoteVersionTableMap::ORDER_ID_VERSION, CreditNoteVersionTableMap::CUSTOMER_ID_VERSION, CreditNoteVersionTableMap::PARENT_ID_VERSION, CreditNoteVersionTableMap::CREDIT_NOTE_IDS, CreditNoteVersionTableMap::CREDIT_NOTE_VERSIONS, ),
        self::TYPE_RAW_COLNAME   => array('ID', 'REF', 'INVOICE_REF', 'INVOICE_ADDRESS_ID', 'INVOICE_DATE', 'ORDER_ID', 'CUSTOMER_ID', 'PARENT_ID', 'TYPE_ID', 'STATUS_ID', 'CURRENCY_ID', 'CURRENCY_RATE', 'TOTAL_PRICE', 'TOTAL_PRICE_WITH_TAX', 'DISCOUNT_WITHOUT_TAX', 'DISCOUNT_WITH_TAX', 'ALLOW_PARTIAL_USE', 'CREATED_AT', 'UPDATED_AT', 'VERSION', 'VERSION_CREATED_AT', 'VERSION_CREATED_BY', 'ORDER_ID_VERSION', 'CUSTOMER_ID_VERSION', 'PARENT_ID_VERSION', 'CREDIT_NOTE_IDS', 'CREDIT_NOTE_VERSIONS', ),
        self::TYPE_FIELDNAME     => array('id', 'ref', 'invoice_ref', 'invoice_address_id', 'invoice_date', 'order_id', 'customer_id', 'parent_id', 'type_id', 'status_id', 'currency_id', 'currency_rate', 'total_price', 'total_price_with_tax', 'discount_without_tax', 'discount_with_tax', 'allow_partial_use', 'created_at', 'updated_at', 'version', 'version_created_at', 'version_created_by', 'order_id_version', 'customer_id_version', 'parent_id_version', 'credit_note_ids', 'credit_note_versions', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Ref' => 1, 'InvoiceRef' => 2, 'InvoiceAddressId' => 3, 'InvoiceDate' => 4, 'OrderId' => 5, 'CustomerId' => 6, 'ParentId' => 7, 'TypeId' => 8, 'StatusId' => 9, 'CurrencyId' => 10, 'CurrencyRate' => 11, 'TotalPrice' => 12, 'TotalPriceWithTax' => 13, 'DiscountWithoutTax' => 14, 'DiscountWithTax' => 15, 'AllowPartialUse' => 16, 'CreatedAt' => 17, 'UpdatedAt' => 18, 'Version' => 19, 'VersionCreatedAt' => 20, 'VersionCreatedBy' => 21, 'OrderIdVersion' => 22, 'CustomerIdVersion' => 23, 'ParentIdVersion' => 24, 'CreditNoteIds' => 25, 'CreditNoteVersions' => 26, ),
        self::TYPE_STUDLYPHPNAME => array('id' => 0, 'ref' => 1, 'invoiceRef' => 2, 'invoiceAddressId' => 3, 'invoiceDate' => 4, 'orderId' => 5, 'customerId' => 6, 'parentId' => 7, 'typeId' => 8, 'statusId' => 9, 'currencyId' => 10, 'currencyRate' => 11, 'totalPrice' => 12, 'totalPriceWithTax' => 13, 'discountWithoutTax' => 14, 'discountWithTax' => 15, 'allowPartialUse' => 16, 'createdAt' => 17, 'updatedAt' => 18, 'version' => 19, 'versionCreatedAt' => 20, 'versionCreatedBy' => 21, 'orderIdVersion' => 22, 'customerIdVersion' => 23, 'parentIdVersion' => 24, 'creditNoteIds' => 25, 'creditNoteVersions' => 26, ),
        self::TYPE_COLNAME       => array(CreditNoteVersionTableMap::ID => 0, CreditNoteVersionTableMap::REF => 1, CreditNoteVersionTableMap::INVOICE_REF => 2, CreditNoteVersionTableMap::INVOICE_ADDRESS_ID => 3, CreditNoteVersionTableMap::INVOICE_DATE => 4, CreditNoteVersionTableMap::ORDER_ID => 5, CreditNoteVersionTableMap::CUSTOMER_ID => 6, CreditNoteVersionTableMap::PARENT_ID => 7, CreditNoteVersionTableMap::TYPE_ID => 8, CreditNoteVersionTableMap::STATUS_ID => 9, CreditNoteVersionTableMap::CURRENCY_ID => 10, CreditNoteVersionTableMap::CURRENCY_RATE => 11, CreditNoteVersionTableMap::TOTAL_PRICE => 12, CreditNoteVersionTableMap::TOTAL_PRICE_WITH_TAX => 13, CreditNoteVersionTableMap::DISCOUNT_WITHOUT_TAX => 14, CreditNoteVersionTableMap::DISCOUNT_WITH_TAX => 15, CreditNoteVersionTableMap::ALLOW_PARTIAL_USE => 16, CreditNoteVersionTableMap::CREATED_AT => 17, CreditNoteVersionTableMap::UPDATED_AT => 18, CreditNoteVersionTableMap::VERSION => 19, CreditNoteVersionTableMap::VERSION_CREATED_AT => 20, CreditNoteVersionTableMap::VERSION_CREATED_BY => 21, CreditNoteVersionTableMap::ORDER_ID_VERSION => 22, CreditNoteVersionTableMap::CUSTOMER_ID_VERSION => 23, CreditNoteVersionTableMap::PARENT_ID_VERSION => 24, CreditNoteVersionTableMap::CREDIT_NOTE_IDS => 25, CreditNoteVersionTableMap::CREDIT_NOTE_VERSIONS => 26, ),
        self::TYPE_RAW_COLNAME   => array('ID' => 0, 'REF' => 1, 'INVOICE_REF' => 2, 'INVOICE_ADDRESS_ID' => 3, 'INVOICE_DATE' => 4, 'ORDER_ID' => 5, 'CUSTOMER_ID' => 6, 'PARENT_ID' => 7, 'TYPE_ID' => 8, 'STATUS_ID' => 9, 'CURRENCY_ID' => 10, 'CURRENCY_RATE' => 11, 'TOTAL_PRICE' => 12, 'TOTAL_PRICE_WITH_TAX' => 13, 'DISCOUNT_WITHOUT_TAX' => 14, 'DISCOUNT_WITH_TAX' => 15, 'ALLOW_PARTIAL_USE' => 16, 'CREATED_AT' => 17, 'UPDATED_AT' => 18, 'VERSION' => 19, 'VERSION_CREATED_AT' => 20, 'VERSION_CREATED_BY' => 21, 'ORDER_ID_VERSION' => 22, 'CUSTOMER_ID_VERSION' => 23, 'PARENT_ID_VERSION' => 24, 'CREDIT_NOTE_IDS' => 25, 'CREDIT_NOTE_VERSIONS' => 26, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'ref' => 1, 'invoice_ref' => 2, 'invoice_address_id' => 3, 'invoice_date' => 4, 'order_id' => 5, 'customer_id' => 6, 'parent_id' => 7, 'type_id' => 8, 'status_id' => 9, 'currency_id' => 10, 'currency_rate' => 11, 'total_price' => 12, 'total_price_with_tax' => 13, 'discount_without_tax' => 14, 'discount_with_tax' => 15, 'allow_partial_use' => 16, 'created_at' => 17, 'updated_at' => 18, 'version' => 19, 'version_created_at' => 20, 'version_created_by' => 21, 'order_id_version' => 22, 'customer_id_version' => 23, 'parent_id_version' => 24, 'credit_note_ids' => 25, 'credit_note_versions' => 26, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('credit_note_version');
        $this->setPhpName('CreditNoteVersion');
        $this->setClassName('\\CreditNote\\Model\\CreditNoteVersion');
        $this->setPackage('CreditNote.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ID', 'Id', 'INTEGER' , 'credit_note', 'ID', true, null, null);
        $this->addColumn('REF', 'Ref', 'VARCHAR', false, 45, null);
        $this->addColumn('INVOICE_REF', 'InvoiceRef', 'VARCHAR', false, 45, null);
        $this->addColumn('INVOICE_ADDRESS_ID', 'InvoiceAddressId', 'INTEGER', true, null, null);
        $this->addColumn('INVOICE_DATE', 'InvoiceDate', 'TIMESTAMP', false, null, null);
        $this->addColumn('ORDER_ID', 'OrderId', 'INTEGER', false, null, null);
        $this->addColumn('CUSTOMER_ID', 'CustomerId', 'INTEGER', true, null, null);
        $this->addColumn('PARENT_ID', 'ParentId', 'INTEGER', false, null, null);
        $this->addColumn('TYPE_ID', 'TypeId', 'INTEGER', true, null, null);
        $this->addColumn('STATUS_ID', 'StatusId', 'INTEGER', true, null, null);
        $this->addColumn('CURRENCY_ID', 'CurrencyId', 'INTEGER', true, null, null);
        $this->addColumn('CURRENCY_RATE', 'CurrencyRate', 'FLOAT', false, null, null);
        $this->addColumn('TOTAL_PRICE', 'TotalPrice', 'DECIMAL', false, 16, 0);
        $this->addColumn('TOTAL_PRICE_WITH_TAX', 'TotalPriceWithTax', 'DECIMAL', false, 16, 0);
        $this->addColumn('DISCOUNT_WITHOUT_TAX', 'DiscountWithoutTax', 'DECIMAL', false, 16, 0);
        $this->addColumn('DISCOUNT_WITH_TAX', 'DiscountWithTax', 'DECIMAL', false, 16, 0);
        $this->addColumn('ALLOW_PARTIAL_USE', 'AllowPartialUse', 'BOOLEAN', false, 1, true);
        $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addPrimaryKey('VERSION', 'Version', 'INTEGER', true, null, 0);
        $this->addColumn('VERSION_CREATED_AT', 'VersionCreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('VERSION_CREATED_BY', 'VersionCreatedBy', 'VARCHAR', false, 100, null);
        $this->addColumn('ORDER_ID_VERSION', 'OrderIdVersion', 'INTEGER', false, null, 0);
        $this->addColumn('CUSTOMER_ID_VERSION', 'CustomerIdVersion', 'INTEGER', false, null, 0);
        $this->addColumn('PARENT_ID_VERSION', 'ParentIdVersion', 'INTEGER', false, null, 0);
        $this->addColumn('CREDIT_NOTE_IDS', 'CreditNoteIds', 'ARRAY', false, null, null);
        $this->addColumn('CREDIT_NOTE_VERSIONS', 'CreditNoteVersions', 'ARRAY', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CreditNote', '\\CreditNote\\Model\\CreditNote', RelationMap::MANY_TO_ONE, array('id' => 'id', ), 'CASCADE', null);
    } // buildRelations()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \CreditNote\Model\CreditNoteVersion $obj A \CreditNote\Model\CreditNoteVersion object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getVersion()));
            } // if key === null
            self::$instances[$key] = $obj;
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
     * @param mixed $value A \CreditNote\Model\CreditNoteVersion object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \CreditNote\Model\CreditNoteVersion) {
                $key = serialize(array((string) $value->getId(), (string) $value->getVersion()));

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \CreditNote\Model\CreditNoteVersion object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 19 + $offset : static::translateFieldName('Version', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize(array((string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], (string) $row[TableMap::TYPE_NUM == $indexType ? 19 + $offset : static::translateFieldName('Version', TableMap::TYPE_PHPNAME, $indexType)]));
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {

            return $pks;
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? CreditNoteVersionTableMap::CLASS_DEFAULT : CreditNoteVersionTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     * @return array (CreditNoteVersion object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CreditNoteVersionTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CreditNoteVersionTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CreditNoteVersionTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CreditNoteVersionTableMap::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CreditNoteVersionTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = CreditNoteVersionTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CreditNoteVersionTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CreditNoteVersionTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CreditNoteVersionTableMap::ID);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::REF);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::INVOICE_REF);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::INVOICE_ADDRESS_ID);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::INVOICE_DATE);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::ORDER_ID);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::CUSTOMER_ID);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::PARENT_ID);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::TYPE_ID);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::STATUS_ID);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::CURRENCY_ID);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::CURRENCY_RATE);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::TOTAL_PRICE);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::TOTAL_PRICE_WITH_TAX);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::DISCOUNT_WITHOUT_TAX);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::DISCOUNT_WITH_TAX);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::ALLOW_PARTIAL_USE);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::CREATED_AT);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::UPDATED_AT);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::VERSION);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::VERSION_CREATED_AT);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::VERSION_CREATED_BY);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::ORDER_ID_VERSION);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::CUSTOMER_ID_VERSION);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::PARENT_ID_VERSION);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::CREDIT_NOTE_IDS);
            $criteria->addSelectColumn(CreditNoteVersionTableMap::CREDIT_NOTE_VERSIONS);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.REF');
            $criteria->addSelectColumn($alias . '.INVOICE_REF');
            $criteria->addSelectColumn($alias . '.INVOICE_ADDRESS_ID');
            $criteria->addSelectColumn($alias . '.INVOICE_DATE');
            $criteria->addSelectColumn($alias . '.ORDER_ID');
            $criteria->addSelectColumn($alias . '.CUSTOMER_ID');
            $criteria->addSelectColumn($alias . '.PARENT_ID');
            $criteria->addSelectColumn($alias . '.TYPE_ID');
            $criteria->addSelectColumn($alias . '.STATUS_ID');
            $criteria->addSelectColumn($alias . '.CURRENCY_ID');
            $criteria->addSelectColumn($alias . '.CURRENCY_RATE');
            $criteria->addSelectColumn($alias . '.TOTAL_PRICE');
            $criteria->addSelectColumn($alias . '.TOTAL_PRICE_WITH_TAX');
            $criteria->addSelectColumn($alias . '.DISCOUNT_WITHOUT_TAX');
            $criteria->addSelectColumn($alias . '.DISCOUNT_WITH_TAX');
            $criteria->addSelectColumn($alias . '.ALLOW_PARTIAL_USE');
            $criteria->addSelectColumn($alias . '.CREATED_AT');
            $criteria->addSelectColumn($alias . '.UPDATED_AT');
            $criteria->addSelectColumn($alias . '.VERSION');
            $criteria->addSelectColumn($alias . '.VERSION_CREATED_AT');
            $criteria->addSelectColumn($alias . '.VERSION_CREATED_BY');
            $criteria->addSelectColumn($alias . '.ORDER_ID_VERSION');
            $criteria->addSelectColumn($alias . '.CUSTOMER_ID_VERSION');
            $criteria->addSelectColumn($alias . '.PARENT_ID_VERSION');
            $criteria->addSelectColumn($alias . '.CREDIT_NOTE_IDS');
            $criteria->addSelectColumn($alias . '.CREDIT_NOTE_VERSIONS');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(CreditNoteVersionTableMap::DATABASE_NAME)->getTable(CreditNoteVersionTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getServiceContainer()->getDatabaseMap(CreditNoteVersionTableMap::DATABASE_NAME);
      if (!$dbMap->hasTable(CreditNoteVersionTableMap::TABLE_NAME)) {
        $dbMap->addTableObject(new CreditNoteVersionTableMap());
      }
    }

    /**
     * Performs a DELETE on the database, given a CreditNoteVersion or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or CreditNoteVersion object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CreditNoteVersionTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \CreditNote\Model\CreditNoteVersion) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CreditNoteVersionTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CreditNoteVersionTableMap::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CreditNoteVersionTableMap::VERSION, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = CreditNoteVersionQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) { CreditNoteVersionTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) { CreditNoteVersionTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the credit_note_version table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CreditNoteVersionQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a CreditNoteVersion or Criteria object.
     *
     * @param mixed               $criteria Criteria or CreditNoteVersion object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CreditNoteVersionTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from CreditNoteVersion object
        }


        // Set the correct dbName
        $query = CreditNoteVersionQuery::create()->mergeWith($criteria);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = $query->doInsert($con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

} // CreditNoteVersionTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CreditNoteVersionTableMap::buildTableMap();
