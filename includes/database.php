<?

// Small class to simplify generic db interactions
class Database {

    protected static $connection;

    // Private function to make connection to db. If this connection
    // already exists return it, otherwise create a new one. This is
    // a private function and will only be called by the class during
    // a query or an escape
    private function connect() {
        if(!isset(self::$connection)) {
            self::$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }

        // Return false in case of a connection error
        if(self::$connection === false) {
            return false;
        }

        return self::$connection;
    }

    private function disconnect() {
        mysqli_close(self::$connection);
        self::$connection = null;
    }

    // Public function to be called by main script. It will connect
    // execute the query, and return the results
    public function query($query) {
        $connection = $this -> connect();
        $rows = array();

        // mysqli_query() returns FALSE on failure. For successful
        // SELECT, SHOW, DESCRIBE or EXPLAIN queries mysqli_query()
        // will return a mysqli_result object. For other successful
        // queries mysqli_query() will return TRUE.
        $result = mysqli_query(self::$connection, $query);

        // If the query failed or didn't return a result object,
        // return the respective result
        if($result === false || $result === true) {
            return $result;
        }

        // If it returned a result object, loop through and put all
        // records into an array. Each record is aldo an array of
        // key-value pairs
        while ($row = $result -> fetch_assoc()) {
            array_push($rows, $row);
        }
        $this -> disconnect();
        return $rows;
    }

    // clean() takes a given input and escapes it
    public function clean($value) {
        $connection = $this -> connect();
        $return = mysqli_real_escape_string($connection, $value);
        $this -> disconnect();
        return $return;
    }
}?>