<?php


use PHPUnit\Framework\TestCase;

class CustRecallTest extends TestCase
{
    protected $conn;

    protected function setUp(): void
    {
        include 'C:\xampp\htdocs\vs code hoc\dbconnection.php'; 
        $this->conn = $conn;
    }
    protected function tearDown(): void
    {
        $this->conn->close();
    }
    public function testGetReceiptsByTelnoValid()
    {$telno = '345710105'; 
        $sql = "SELECT * FROM receipt_details WHERE telno='$telno'";
        $result = $this->conn->query($sql);

        $this->assertTrue($result->num_rows > 0, "Query should return at least one row for valid vehicle number");

        $row = $result->fetch_assoc();
        $this->assertEquals($telno, $row['telno'], "Vehicle number should match");
    }

  

    public function testCustomerDetailsDisplay()
    {
        $_GET['no'] = '6666'; 

        ob_start();
        include 'C:\xampp\htdocs\vs code hoc\custRecall.php'; 
        $output = ob_get_clean();

        $this->assertStringContainsString('receiptno:', $output, "Output should contain receiptno");
      
    }

   

}