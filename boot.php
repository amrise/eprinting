<?php

//autoloading the packages in the vendor folder
require ('vendor/autoload.php');

//setting up braintree credentials
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('xk76gcw76q6cpyhs');
Braintree_Configuration::publicKey('ft3ymvmz3vk28pdr');
Braintree_Configuration::privateKey('2038123daded2f51756f2a5ef10ec447');


  //booting done