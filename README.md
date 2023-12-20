## About the project:
A project implementing the pattern service + repository to create a CRUD of products with api routes;

MongoDB was used in conjunction with laravel's eloquent, a cluster was used in atlas;

Endpoints were created with laravel's resource route;

## How to test?

Clone the laravel project on your machine, start a local server, I recommend using php artisan serve;

Use an atlas mongoDB cluster https://cloud.mongodb.com/v2/, and configure its URI in the .env file;

Use postman or insomnia and try to access the following end points:

GET     127.0.0.1:8000/api/products -> (Index) Will list data on all the products in the database;
GET     127.0.0.1:8000/api/products/{id} -> (Show) Will list the data for a specific product;
POST    127.0.0.1:8000/api/products/ -> (Store) Create a product in the database with the values from the body;
PUT     127.0.0.1:8000/api/products/{id} -> (Update) Updates the data of a specific product;
DELETE  127.0.0.1:8000/api/products/{id} -> (Destroy) Deletes the product with the specific id from the database;

Example body for the request:

{
	"guid" : "100",
	"sku" : "1",
    "name": "Subaru kkkk",
    "price": 12.99,
	"category": "chad",
    "description": "Product description chubaru"
}
