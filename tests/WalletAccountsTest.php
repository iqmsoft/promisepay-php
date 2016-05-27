<?php
namespace PromisePay\Tests;

use PromisePay\PromisePay;

class WalletAccountsTest extends \PHPUnit_Framework_TestCase {
    
    protected $GUID, $userData, $userId;
    
    public function setUp() {
        $this->GUID = GUID();
        
        $this->userData = array(
            'id'            => $this->GUID,
            'first_name'    => 'UserCreateTest',
            'last_name'     => 'UserLastname',
            'email'         => $this->GUID . '@google.com',
            'mobile'        => $this->GUID . '00012',
            'address_line1' => 'a_line1',
            'address_line2' => 'a_line2',
            'state'         => 'state',
            'city'          => 'city',
            'zip'           => '90210',
            'country'       => 'AUS'
        );
        
        $this->createUser();
    }
    
    protected function createUser() {
        $createUser = PromisePay::User()->create($this->userData);
        
        $this->assertEquals($this->userData['email'], $createUser['email']);
        
        $this->userId = $createUser['id'];        
    }
    
    /**
     * @group dev
     */
    public function testDeposit() {
        $depositAmount = 50; // 50 cents
        
        PromisePay::WalletAccounts()->deposit(
            $this->userId,
            array(
                'account_id' => $this->userId,
                'amount' => $depositAmount
            )
        );
    }
    
    /**
     * @group failing
     */
    public function testGetWalletAccount() {
        $links = PromisePay::getLinks();
        
        //print_r($links);
        
        //print_r(PromisePay::getDebugData());
        
        //$url = 'https://test.api.promisepay.com' . $links['wallet_accounts'];
        
        //var_dump($url);
        
        //PromisePay::RestClient('get', $url);
        
        //$walletAccounts = PromisePay::WalletAccounts()->get($this->userId);
    }
}