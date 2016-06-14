<?php
namespace PromisePay\Tests;

use PromisePay\PromisePay;

class BatchTransactions extends \PHPUnit_Framework_TestCase {
    
    private static $transaction;
    
    public function testListTransactions() {
        $batches = PromisePay::BatchTransactions()->listTransactions();
        
        $this->assertNotNull($batches);
        $this->assertTrue(is_array($batches));
    }
    
    public function testListTransactionsWithLimitFilter() {
        $batches = PromisePay::BatchTransactions()->listTransactions(
            array
            (
                'limit' => 5
            )
        );
        
        $this->assertNotNull($batches);
        $this->assertTrue(is_array($batches));
        $this->assertEquals(count($batches), 5);
        
        self::$transaction = $batches[0];
    }
    
    public function testShowTransaction() {
        $batch = PromisePay::BatchTransactions()->showTransaction(
            self::$transaction['id']
        );
        
        $this->assertNotNull($batch);
        $this->assertTrue(is_array($batch));
        $this->assertEquals($batch['id'], self::$transaction['id']);
    }
    
    private function readmeExamples() {
        // List Batch Transactions
        $batches = PromisePay::BatchTransactions()->listTransactions();
        
        // Show Batch Transaction
        $batch = PromisePay::BatchTransactions()->showTransaction(
            'BATCH_TRANSACTION_ID'
        );
    }
    
}