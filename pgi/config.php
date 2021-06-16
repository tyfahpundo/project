<?php 
// Product Details 
// Minimum amount is $0.50 US 
 $itemName = "Harare Institute of Technology Accommodation"; 
 $itemNumber = "PN12345"; 
$itemPrice = 300; 
$currency = "USD"; 
 
// Stripe API configuration  
define('STRIPE_API_KEY', 'sk_test_51IqwokJg4LVFzTwb6HxU7fgg9IdrObbPiV1xR2gzM8it1ifFYHe4kY9QLRTEZygFeazs1St44VM9JWeRvQv5Iece00YMJ4tQzP'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51IqwokJg4LVFzTwb1mD5VqPogkUiIaxghVIHsUgE9vKvKNeW9FwJqd70mrCnlNHbssykn5lJVcg9tRNo22nwAziU00HIVbYWgX'); 
  
// Database configuration  
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'project');