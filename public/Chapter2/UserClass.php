<?php
   class UserClass {
      /* User variables */
      var $firstName;
      var $LastName;
	        
      /* Member functions */
      function setFirstName($firstName){
         $this->firstName = $firstName;
      }
        
      function getFirstName(){
         echo $this->firstName;
      }
        
      function setLastName($lastName){
         $this->lastName = $lastName;
      }
        
      function getLastName(){
         echo $this->lastName;
      }
   }
