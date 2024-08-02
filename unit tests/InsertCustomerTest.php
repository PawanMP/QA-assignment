<?php

use PHPUnit\Framework\TestCase;

class InsertcustomerTest extends TestCase
{
    private $conn;

    protected function setUp(): void
    {
        // Set up a connection to the test database
        $this->conn = new mysqli('localhost', 'root', '', 'houseofcurtain');

        // Check connection
        if ($this->conn->connect_error) {
            die('Connection failed: ' . $this->conn->connect_error);
        }

        // Create a test table
        
    }

    protected function tearDown(): void
    {
    
        $this->conn->close();
    }

    public function testInsertCustomer()
    {
        // Test data
        $_GET['name'] = 'John Doe';
        $_GET['telNo'] = '1234567890';
        $_GET['address'] = '123 Main St';
        $_GET['date'] = '2024-01-01';

        // Include the file to test
        include 'C:\xampp\htdocs\vs code hoc\Insertcustomer.php';

        // Query the database to check if the record was inserted
        $result = $this->conn->query("SELECT * FROM customer_details WHERE name = 'John Doe'");

        $this->assertEquals(1, $result->num_rows);

        $row = $result->fetch_assoc();
        $this->assertEquals('1234567890', $row['telno']);
        $this->assertEquals('123 Main St', $row['address']);
        $this->assertEquals('2024-01-01', $row['date']);
    }
}

?>
