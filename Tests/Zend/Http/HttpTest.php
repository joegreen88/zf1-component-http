<?php
namespace Tests\Zend\Http;

class HttpTest extends \Tests\TestCase
{
    protected $classes = array(
        '\Zend_Http_Client_Adapter_Curl',
        '\Zend_Http_Client_Adapter_Exception',
        '\Zend_Http_Client_Adapter_Interface',
        '\Zend_Http_Client_Adapter_Proxy',
        '\Zend_Http_Client_Adapter_Socket',
        '\Zend_Http_Client_Adapter_Stream',
        '\Zend_Http_Client_Adapter_Test',
        '\Zend_Http_Client_Exception',
        '\Zend_Http_Header_Exception_InvalidArgumentException',
        '\Zend_Http_Header_Exception_RuntimeException',
        '\Zend_Http_Header_SetCookie',
        '\Zend_Http_Response_Stream',
        '\Zend_Http_UserAgent_Features_Adapter_Browscap',
        '\Zend_Http_UserAgent_Features_Adapter_DeviceAtlas',
        '\Zend_Http_UserAgent_Features_Adapter_TeraWurfl',
        '\Zend_Http_UserAgent_Features_Adapter',
        '\Zend_Http_UserAgent_Features_Exception',
        '\Zend_Http_UserAgent_Storage_Exception',
        '\Zend_Http_UserAgent_Storage_NonPersistent',
        '\Zend_Http_UserAgent_Storage_Session',
        '\Zend_Http_UserAgent_AbstractDevice',
        '\Zend_Http_UserAgent_Bot',
        '\Zend_Http_UserAgent_Checker',
        '\Zend_Http_UserAgent_Console',
        '\Zend_Http_UserAgent_Desktop',
        '\Zend_Http_UserAgent_Device',
        '\Zend_Http_UserAgent_Email',
        '\Zend_Http_UserAgent_Exception',
        '\Zend_Http_UserAgent_Feed',
        '\Zend_Http_UserAgent_Mobile',
        '\Zend_Http_UserAgent_Offline',
        '\Zend_Http_UserAgent_Probe',
        '\Zend_Http_UserAgent_Spam',
        '\Zend_Http_UserAgent_Storage',
        '\Zend_Http_UserAgent_Text',
        '\Zend_Http_UserAgent_Validator',
        '\Zend_Http_Client',
        '\Zend_Http_Cookie',
        '\Zend_Http_CookieJar',
        '\Zend_Http_Exception',
        '\Zend_Http_Response',
        '\Zend_Http_UserAgent',
    );

    /**
     * Ensure that the composer autoloader is finding the classes correctly.
     */
    public function testCanFindClasses()
    {
        foreach ($this->classes as $class) {
            $this->assertTrue(class_exists($class) || interface_exists($class));
        }
    }
}
