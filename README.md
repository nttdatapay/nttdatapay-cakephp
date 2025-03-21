# nttdatapay-cakephp

## Prerequisites
- PHP 7.3 to 8.3
- UAT MID and keys provided by the NDPS team

## Installation
1. Refer the code from src/Controller/AtomPayController.php to create the payment request and handle the response section.

2. Add the cacert.pem file in bin folder.

3. Call the createTokenId function to get the AtomtokenId.

4. Replace the necessary data in index function(payurl, amount, login, password, productid, returnurl etc.)

5. In templates/AtomPay folder in index.php we call the openPay() which will open the payment page.

6. Configure the atomcheckout.js in accordance with UAT and Production environments. Also change the all necessary information.
