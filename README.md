# :email: EmailCheck
php class with a set of methods to check the authenticity of an email address while returning an array containing information about the email.It will also allow you to check if it is a temporary email address or a multiple-use email address. It takes into account Gmail, Yahoo!, ProtonMail and many others.The class provides you with a set of methods that will allow you to make controls in a very fast way.

## :pushpin: How do you use it?
It is very easy to use the php class. You just have to import the class in your work file with the php functions **include()** or **require()** . Then you have to create an object or an instance of the class by passing it a mandatory argument is an email address : 
```php
$Mymail= new EmailCheck('Mymail@mailbox.com')
```
### :books: Documentation
The EmailCheck class provides you with a set of methods that each do well defined actions. To begin with, we have :
* getData()
     > Which returns the set of messengers whose verification is taken into account by the php class. You can also customize the list of messaging by respecting the predefined architrchture :

    ```php 
	       Title' => 'Yahoo! Mail' ,
	       'Name' => 'yahoo.' ,
	       'Link' => 'https://www.yahoo.com'
  ```
   >* Title => For the name of the mail
   >* Name => For the domain name with the "." without the extension
   >* Link => For the web address of the mailbox
* getDataTemp ()
     > Which returns all the messengers whose verification is taken into account by the php class. You can also customize the list of messengers by respecting the predefined architecture.
* Verification()
     >This method allows to check if the email used for the creation of the object is valid. In case the format is not valid, the method returns an array with      statut=false and the default error message in several languages 
   ```php
      $data=array(
              'Statut'=>false,
              'EN'=> 'The format of the email address is incorrect.',
              'FR'=> 'Le format de l\'adresse mail est incorrect.',
              'ES'=> 'El formato de la dirección de correo electrónico es incorrecto.',
              'RU'=> 'Формат адреса электронной почты неверен.',
              'CH'=> '电子邮件地址的格式不正确。电子邮件地址的格式不正确。',
            );
   ```
    >In case the mail format is correct, status=true. On the other hand, if isset is equal to true it means that the mail is in the Data array and you can have access   thanks to the data location in the returned array. To demonstrate in a very simple way, when isset=true here is the result of the table you will have : 
     ```php
            'Title' =>'Yandex Mail',
	    'Name' =>'yandex.',
	    'Link' =>'https://passport.yandex.com/auth'
            'Statut'=>true,
            'Isset'=>true,
    ```
    > when isset=true here is the result of the table you will have :
     ```php
            'Statut'=>true,
            'Isset'=>false,
    ```
 * Is_tempMail()
   >This method checks if the email is a temporary email. If it is, it returns an array containing the mailbox information: 
    ```php
               'Title' =>'Tempr Email' ,
	       'Name' =>'@disposable-' ,
	       'Link' =>'https://tempr.email
    ```
    > Otherwise, it returns **NULL**
