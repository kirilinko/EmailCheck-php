# :email: EmailCheck (php class)
php class with a set of methods to check the authenticity of an email address while returning an array containing information about the email.It will also allow you to check if it is a temporary email address or a multiple-use email address. It takes into account Gmail, Yahoo!, ProtonMail and many others.The class provides you with a set of methods that will allow you to make controls in a very fast way.

## :pushpin: How do you use it?
It is very easy to use the php class. You just have to import the class in your work file with the php functions **include()** or **require()** .
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
