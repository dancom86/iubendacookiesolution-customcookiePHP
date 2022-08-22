# iubendacookiesolution-customcookiePHP
 Prior block a custom cookie installed via PHP
 
      It installs a custom cookie named "user" with a value of "John Doe", only if the iubenda's technical cookie contains:
      2:true or number_of_the_Category:true if per purpose consent is enabled or
      consent:true if per purpose is not enabled
      

      $consentValue contains the name of the iubenda's technical cookie
      $stringToSearch we use it to search if a category is accepted, or in general, if the user accepted the installation of cookies
