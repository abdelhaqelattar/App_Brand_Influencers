<?php

namespace App\Core;

use App\Core\DB;
use \PDO;

/**
 * The base Model class for interacting with the database.
 */ 
abstract class Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected static $table;

    /**
     * The fillable columns.
     *
     * @var array
     */
    protected static $fillable = [];

    /**
     * The primary key for the table.
     *
     * @var string
     */
    protected static $primaryKey = 'id';

    /**
     * The where clauses for the query.
     *
     * @var array
     */
    private static $wheres = [];

    /**
     * The order by clauses for the query.
     *
     * @var array
     */
    private static $orderBys = [];

    /**
     * The column to group by.
     *
     * @var string
     */
    private static $groupBy;

    /**
     * The maximum number of records to return.
     *
     * @var int
     */
    private static $limit;

    /**
     * The number of records to skip.
     *
     * @var int
     */
    private static $offset;

    /**
     * The inner join clauses for the query.
     *
     * @var array
     */
    private static $innerJoin;

    /**
     * The where beetween clauses for the query.
     *
     * @var array
     */
    private static $whereBeetween = [];

    /**
     * Create a new Model instance.
     */
    public function __construct()
    {
        // Set the table name
        if (!static::$table) {
            static::$table = strtolower(get_called_class()) . 's';
        }
    }

    /**
     * Add a where clause to the query.
     *
     * @param string $column    The column to search in.
     * @param string $operator  The operator to use.
     * @param mixed  $value     The value to search for.
     * @param string $condition The condition to use.
     *
     * @return void
     */
    public static function reset()
    {
        static::$wheres = [];
        static::$whereBeetween = [];
        static::$innerJoin = [];
        static::$orderBys = [];
        static::$groupBy = null;
        static::$limit = null;
        static::$offset = null;
    }

    /**
     * Get all records from the table.
     *
     * @return object
     */
    public static function all()
    {
        $query = "SELECT * FROM " . static::$table;
        return DB::query($query)->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Get a record from the table by id.
     *
     * @param int $id The id of the record to get.
     *
     * @return object
     */
    public static function find($id)
    {
        $query = "SELECT * FROM " . static::$table . " WHERE id = :" . self::$primaryKey;
        return DB::query($query, [self::$primaryKey => $id])->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Insert a record into the table.
     * 
     * @param array $data The data to insert.
     * 
     * @return void
     */
    public static function insert($data)
    {
        /** remove unwanted data **/
        if (!empty(static::$fillable)) {
            foreach ($data as $key => $value) {

                if (!in_array($key, static::$fillable)) {
                    unset($data[$key]);
                }
            }
        }

        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        $query = "INSERT INTO " . static::$table . " ({$columns}) VALUES ({$placeholders})";
        echo $query;
        print_r($data);
        DB::query($query, $data);
    }

    /**
     * Update a record in the table.
     *
     * @param int   $id   The id of the record to update.
     * @param array $data The data to update.
     *
     * @return void
     */
    public static function update($id, $data)
    {
        /** remove unwanted data **/
        if (!empty(static::$fillable)) {
            foreach ($data as $key => $value) {

                if (!in_array($key, static::$fillable)) {
                    unset($data[$key]);
                }
            }
        }

        $set = [];
        foreach ($data as $column => $value) {
            $set[] = "{$column} = :{$column}";
        }
        $set = implode(', ', $set);
        $query = "UPDATE " . static::$table . " SET {$set} WHERE id = :id";
        $data['id'] = $id;
        DB::query($query, $data);
    }

    /**
     * Delete a record from the table.
     *
     * @param int $id The id of the record to delete.
     *
     * @return void
     */
    public static function delete($id)
    {
        $query = "DELETE FROM " . static::$table . " WHERE id = :" . self::$primaryKey;
        DB::query($query, [self::$primaryKey => $id]);
    }

    /**
     * Add a where clause to the query.
     *
     * @param string $column   The column to search in.
     * @param string $operator The operator to use in the where clause.
     * @param mixed  $value    The value to search for.
     *
     * @return $this
     */
    public static function where($column, $operator, $value)
    {
        static::$wheres[] = [
            'column' => $column,
            'operator' => $operator,
            'value' => $value,
            'or' => false
        ];

        return new static;
    }


    /**
     * Add a where clause to the query.
     *
     * @param string $column   The column to search in.
     * @param string $operator The operator to use in the where clause.
     * @param mixed  $value    The value to search for.
     *
     * @return $this
     */
    public static function orWhere($column, $operator, $value)
    {
        static::$wheres[] = [
            'column' => $column,
            'operator' => $operator,
            'value' => $value,
            'or' => true
        ];

        return new static;
    }

    /**
     * Add a where clause to the query.
     *
     * @param string $column   The column to search in.
     * @param string $operator The operator to use in the where clause.
     * @param mixed  $value    The value to search for.
     *
     * @return $this
     */
    public static function whereBeetween($column, $value1, $value2)
    {
        static::$whereBeetween[] = [
            'column' => $column,
            'value1' => $value1,
            'value2' => $value2,
            'or' => false
        ];

        return new static;
    }


    /**
     * Adds an ORDER BY clause to the query.
     *
     * @param string $column    The column to order by.
     * @param string $direction The direction to order by ('ASC' or 'DESC').
     *
     * @return $this
     */
    public static function orderBy($column, $direction)
    {
        static::$orderBys[] = [
            'column' => $column,
            'direction' => $direction
        ];

        return new static;
    }

    /**
     * Adds a GROUP BY clause to the query.
     *
     * @param string $column The column to group by.
     *
     * @return $this
     */
    public static function groupBy($column)
    {
        static::$groupBy = $column;

        return new static;
    }

    /**
     * Sets the maximum number of rows to return.
     *
     * @param int $limit The maximum number of rows to return.
     *
     * @return $this
     */
    public static function limit($limit)
    {
        static::$limit = $limit;

        return new static;
    }

    /**
     * Sets the number of rows to skip before returning results.
     *
     * @param int $offset The number of rows to skip.
     *
     * @return $this
     */
    public static function offset($offset)
    {
        static::$offset = $offset;

        return new static;
    }


    // inner join
    public static function innerJoin($table, $column1, $column2)
    {
        static::$innerJoin[] = [
            'table' => $table,
            'column1' => $column1,
            'column2' => $column2
        ];

        return new static;
    }

    /**
     * Returns an associative array of parameters for the WHERE clauses.
     *
     * @return object An associative array of parameters for the WHERE clauses.
     */
    protected static function getWhereParameters()
    {
        $parameters = [];
        foreach (static::$wheres as $where) {
            $parameters[$where['column']] = $where['value'];
        }

        return $parameters;
    }

    /**
     * Returns an associative array of parameters for the ORDER BY clause.
     *
     * @return object An associative array of parameters for the ORDER BY clause.
     */
    public static function excuteWithCond($query, $reset = true)
    {
        // inner join
        if (!empty(static::$innerJoin)) {
            foreach (static::$innerJoin as $join) {
                // print_r($join);
                $query .= " INNER JOIN " . $join['table'] . " ON " . $join['table'] . "." . $join['column1'] . " = " . static::$table . "." . $join['column2'];
            }
        }

        $wheres = static::$wheres;
        // Add WHERE clauses to the query
        if (!empty($wheres)) {
            $query .= " WHERE ";
            foreach (static::$wheres as $index => $where) {
                if ($index != 0) {
                    $query .= $where['or'] ? " OR " : " AND ";
                }

                if ($where['operator'] == '=' && $where['value'] == NULL) {
                    $query .= $where['column'] . " IS NULL";
                    unset($wheres[$index]);
                } else if ($where['operator'] == '!=' && $where['value'] == NULL) {
                    $query .= $where['column'] . " IS NOT NULL";
                    unset($wheres[$index]);
                } else {
                    $query .= $where['column'] . " " . $where['operator'] . " :" . $where['column'];
                }
            }
        }

        // Add WHERE BETWEEN clauses to the query
        if (!empty(static::$whereBeetween)) {
            if (empty(static::$wheres)) {
                $query .= " WHERE ";
            } else {
                $query .= " AND ";
            }
            foreach (static::$whereBeetween as $index => $where) {
                if ($index != 0) {
                    $query .= $where['or'] ? " OR " : " AND ";
                }
                $query .= $where['column'] . " BETWEEN " . $where['value1'] . " AND " . $where['value2'];
            }
        }

        // Add GROUP BY clauses to the query
        if (!empty(static::$groupBy)) {
            $query .= " GROUP BY " . static::$groupBy;
        }

        // Add ORDER BY clauses to the query
        if (!empty(static::$orderBys)) {
            $query .= " ORDER BY ";
            foreach (static::$orderBys as $index => $orderBy) {
                if ($index != 0) {
                    $query .= ", ";
                }
                $query .= $orderBy['column'] . " " . $orderBy['direction'];
            }
        }

        // Add LIMIT clause to the query
        if (!empty(static::$limit)) {
            $query .= " LIMIT " . static::$limit;
        }

        // Add OFFSET clause to the query
        if (!empty(static::$offset)) {
            $query .= " OFFSET " . static::$offset;
        }
        
        // Execute the query    
        $stmt =  DB::query($query, static::getWhereParameters());
        if ($reset)
            static::reset();

        return $stmt;
    }

    /**
     * Executes the query and returns the results.
     *
     * @return object The results of the query.
     */
    public static function get($columns = "*")
    {
        // Build the query string
        $query = "SELECT " . $columns . " FROM " . static::$table;
        $stmt = static::excuteWithCond($query);

        // Return the results
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Paginate the results.
     *
     * @param int $perPage The number of records to display per page.
     * @param int $page    The current page number.
     *
     * @return object
     */
    public static function paginate($columns  = "*", $perPage = 10)
    {
        $page = $_GET['page'] ?? 1;

        // Build the query string
        $query = "SELECT " . $columns . " FROM " . static::$table;
        static::$limit = $perPage;
        static::$offset = ($page - 1) * $perPage;

        // Execute the query
        $stmt = static::excuteWithCond($query, false);
        $results = $stmt->fetchAll(PDO::FETCH_OBJ);

        $query = "SELECT COUNT(*) as count FROM " . static::$table;
        static::$offset = null;
        $stmt =  static::excuteWithCond($query);
        $total = $stmt->fetch(PDO::FETCH_OBJ)->count ?? 0;

        $data = [
            'results' => $results,
            'total' => $total,
            'nbr_pages' => ceil($total / $perPage),
            'perPage' => $perPage,
            'page' => $page
        ];

        return $data;
    }

    /**
     * Returns the first result of the query.
     *
     * @return object The first result of the query.
     */
    public static function first()
    {
        $results = static::get();
        if (empty($results)) {
            return null;
        }

        return $results[0];
    }

    /**
     * Returns the number of rows in the table.
     *
     * @return int The number of rows in the table.
     */
    public static function avg($column)
    {
        // Build the query string
        $query = "SELECT AVG({$column}) as avg FROM " . static::$table;
        $stmt = static::excuteWithCond($query);
        $result = $stmt->fetch(PDO::FETCH_OBJ);

        // Return the results
        return $result->avg;
    }

    /**
     * Returns the number of rows in the table.
     *
     * @return int The number of rows in the table.
     */
    public static function sum($column)
    {
        // Build the query string
        $query = "SELECT SUM({$column}) as sum FROM " . static::$table;
        $stmt = static::excuteWithCond($query);

        $result = $stmt->fetch(PDO::FETCH_OBJ);

        // Return the results
        return $result->sum;
    }
}
