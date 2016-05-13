<?php
​
namespace CNETInc\feloginemailnotification\Hooks
	
	class LoginNotification
{
    /**
     * FeUser Array
     *
     * @var array
     */
    protected $user = array();
​
	/**
     * fetch user data from user which is logged in
     */
    function __construct() {
        $this->user = $GLOBALS['TSFE']->fe_user->user;
   
    }
	
	    /**
     * If the firstLogin Change force ist activated and lastlogin has not been updated
     * the redirect takes effect
     */
    public function sendNotification() {
        //Make instance of mail
		$mail = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Mail\\MailMessage');
		//prepare to send the message
		$mail	
		//Give a subject
		 ->setSubject('FE User login notification')

		// Set the From address with an associative array
		->setFrom(array('Portal@cnetokc.com' => 'CNET Inc Portal'))

		// Set the To addresses with an associative array
		->setTo(array('cameron.llewellyn@cnetokc.com', 'other@domain.org' => 'A name'))

		// Give it a body
		->setBody('A user has logged into the DEV portal username is ' $this->user['username'])

		// And finally do send it
		->send()
		;// for testing purposes
    }
	
}