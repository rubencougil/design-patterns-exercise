# Exercise: Design Patterns

Our online store allows our customers to pay with a credit card, but the business has grown, and we now also allow our 
customers to pay with PayPal and Bizum. 

We have a ShoppingCart class that receives items from the store, calculates the total, and initiates the payment process.

Each payment method has a different way of being implemented, as each one requires and manages different data and information. 
Propose a solution that allows adding payment methods without having to modify the ShoppingCart class.

Also we need to log into a file every payment transaction done in the platform regardless of the payment method used.

⚠️ You need to use at least 3 well known design patterns
