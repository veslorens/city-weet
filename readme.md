
## About City Weet

>  An application allows the user to search for a city and displays tweets that mention the city on a map. A technical examination given to me by Rabbit Internet.

## Installation

1. Install dependencies via composer.
```
	$ composer install
```
2. Copy ".env.example" contents to ".env"
3. Generate new application key.
```
	$ php artisan key:generate
```
4. Get your Twitter API Key & Access Token.
 * Log In to [Twitter](https://twitter.com) or [Sign Up](https://twitter.com/signup) if you do not have an account
 * Create new application [here](https://apps.twitter.com/app/new)
 * Goto (`Keys and Access Tokens`) tab 
 * Get your (`Consumer Key (API Key)`) & (`Consumer Secret (API Secret)`)
 * Generate your (`Access Tokens and Token Secret`)
 * Get your (`Access Token`) & (`Access Token Secret`)

5. Fill out these twitter variables in your (`.env`) file.
```
	TWITTER_CONSUMER_KEY=<your_consumer_key>
	TWITTER_CONSUMER_SECRET=<your_consumer_secret>
	TWITTER_ACCESS_TOKEN=<your_access_token>
	TWITTER_ACCESS_TOKEN_SECRET=<your_access_token_secret>
```
6. Get your Google Map API Key.

	* Log In your Google account [here](https://console.developers.google.com)
	* Goto [Google Maps JavaScript API](https://console.developers.google.com/apis/api/maps_backend/overview)
	* Create a project
	* Click (`Enable`) button then (`Go to Credentials`)
	* Click (`API Key`) link to create an API key
	* Click (`Restrict Key`) to prevent unauthorized use in production
	* Click (`Save`)

7. Fill in the google map variable in your (`.env`) file
```
	GMAP_API_KEY=<your_api_key>
```