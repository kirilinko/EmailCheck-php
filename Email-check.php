<?php

/**
 * 
 */
class EmailCheck
{
	private $Email;
	private $data;
    private $temp_mail;
    private $tempMails=array(
          
         [
	       'Title' =>'Trash mail' ,
	       'Name' =>'@trashmail.' ,
	       'Link' =>'https://trashmail.com'
		],

		[
	       'Title' =>'Trash mail' ,
	       'Name' =>'@my10minutemail.' ,
	       'Link' =>'https://trashmail.com'
		],

		[
	       'Title' =>'Tempr Email' ,
	       'Name' =>'@tempmail-' ,
	       'Link' =>'https://tempr.email'
		],

		[
	       'Title' =>'Tempr Email' ,
	       'Name' =>'@disposable-' ,
	       'Link' =>'https://tempr.email'
		],

		[
	       'Title' =>'Tempr Email' ,
	       'Name' =>'@discardmail.' ,
	       'Link' =>'https://tempr.email'
		],

		[
	       'Title' =>'Tempr Email' ,
	       'Name' =>'@discard.email' ,
	       'Link' =>'https://tempr.email'
		],

		[
	       'Title' =>'Tempr Email' ,
	       'Name' =>'@spambog.' ,
	       'Link' =>'https://tempr.email'
		],

		[
	       'Title' =>'Tempr Email' ,
	       'Name' =>'@tempr.' ,
	       'Link' =>'https://tempr.email'
		],

		[
	       'Title' =>'Tempail' ,
	       'Name' =>'@vusra.' ,
	       'Link' =>'https://tempail.com'
		],

		[
	       'Title' =>'Yahoo! Mail' ,
	       'Name' =>'-' ,
	       'Link' =>'https://yahoo.fr'
		],

		[
	       'Title' =>'Gmail' ,
	       'Name' =>'+' ,
	       'Link' =>'https://gmail.com'
		],

		[
	       'Title' =>'Mohmal' ,
	       'Name' =>'@mozej.' ,
	       'Link' =>'https://www.mohmal.com'
		],

		[
	       'Title' =>'Mohmal' ,
	       'Name' =>'@mailna.' ,
	       'Link' =>'https://www.mohmal.com'
		],
 
		[
	       'Title' =>'Mohmal' ,
	       'Name' =>'@mohmal.' ,
	       'Link' =>'https://www.mohmal.com'
		],

		[
	       'Title' =>'Mohmal' ,
	       'Name' =>'@dragonmail.' ,
	       'Link' =>'https://www.mohmal.com'
		],

		[
	       'Title' =>'Temp-Mail' ,
	       'Name' =>'@ketchet.' ,
	       'Link' =>'https://www.temp-mail.org'
		], );

	private $dataMail= array(
		[
	       'Title' =>'Gmail' ,
	       'Name' =>'gmail.' ,
	       'Link' =>'https://www.gmail.com'
		],

		[
	       'Title' =>'Microsoft Outlook' ,
	       'Name' =>'outlook.' ,
	       'Link' =>'https://www.outlook.com'
		],

		[
	       'Title' =>'Zoho Mail' ,
	       'Name' =>'zohomail.' ,
	       'Link' =>'https://www.zoho.com/mail/'
		],

		[
	       'Title' =>'Yahoo! Mail' ,
	       'Name' =>'yahoo.' ,
	       'Link' =>'https://www.yahoo.com'
		],

		[
	       'Title' =>'Proton Mail' ,
	       'Name' =>'protonmail.' ,
	       'Link' =>'https://protonmail.com/fr/'
		],

		[
	       'Title' =>'AOL Mail' ,
	       'Name' =>'aol.' ,
	       'Link' =>'https://www.aol.com'
		],

		[
	       'Title' =>'AdValvas Mail' ,
	       'Name' =>'advalvas.' ,
	       'Link' =>'https://www.advalvas.be/login.php'
		],

		[
	       'Title' =>'Bluewin E-mail' ,
	       'Name' =>'bluewin.ch' ,
	       'Link' =>'https://login.scl.swisscom.ch'
		],

		[
	       'Title' =>'Bluewin E-mail' ,
	       'Name' =>'bluemail.ch' ,
	       'Link' =>'https://login.scl.swisscom.ch'
		],

		[
	       'Title' =>'Excite Mail' ,
	       'Name' =>'mailexcite.' ,
	       'Link' =>'https://registration.excite.com/excitereg/login.jsp'
		],

		[
	       'Title' =>'Francité ' ,
	       'Name' =>'francite.' ,
	       'Link' =>'https://registration.excite.com/excitereg/login.jsp'
		],

		[
	       'Title' =>'Microsoft Outlook' ,
	       'Name' =>'hotmail.' ,
	       'Link' =>'https://www.outlook.com'
		],

		[
	       'Title' =>'Yandex Mail' ,
	       'Name' =>'yandex.' ,
	       'Link' =>'https://passport.yandex.com/auth'
		],  );   


	function __construct($Mail)
	{
		$this->Email=$Mail;
	}

	public function Verification(){

		if(filter_var($this->Email, FILTER_VALIDATE_EMAIL))
		{
            if($this->Finder()) 
            {
       	           $data=$this->Finder();
       	           $data['Statut']=true;
       	           $data['Isset']=true;
                   return $data;
            } 
             else
             {
                   $data=array(
                    'Statut'=>true,
                    'Isset'=>false
                   );
                   return $data;
             }
             
         }
		
     else
      {
			
	 $data=array(
              'Statut'=>false,
              'EN'=> 'The format of the email address is incorrect.',
              'FR'=> 'Le format de l\'adresse mail est incorrect.',
              'ES'=> 'El formato de la dirección de correo electrónico es incorrecto.',
              'RU'=> 'Формат адреса электронной почты неверен.',
              'CH'=> '电子邮件地址的格式不正确。电子邮件地址的格式不正确。',
            );
			 return  $data;
		}
	}
    
    public function Finder(){

         foreach ($this->dataMail as $mail) 
         {
      	      if( strpos($this->Email, $mail['Name']) )
      	      {
      	   	       $this->temp_mail=$mail;
      	   	       return $this->temp_mail;
      	      }
         }
      
    }

	public function Is_tempMail(){
		foreach ($this->tempMails as $tempmail) 
         {
      	      if( strpos($this->Email, $tempmail['Name']) )
      	      {
      	   	       $this->temp_mail=$tempmail;

      	   	       return $this->temp_mail;
      	      }
         }

	}

	public function getData(){
		return $this->dataMail;
	} 

	public function getDataTemp(){
		return $this->tempMails;
	} 
}


$tesclasse= new EmailCheck("franckivondaragon@gmail.com");

var_dump($tesclasse->getMail());
var_dump($tesclasse->Verification() );
var_dump( $tesclasse->Is_tempMail() );
 
?>