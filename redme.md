# Brand Influencer

## Description
This project aims to create a platform that connects influencers and brands for possible partnerships. The platform allows new influencers and brands to sign up by providing their respective identities and other relevant information. Once authenticated, influencers can contact any brand, and vice versa, for potential partnership discussions.

## Docs : ['']

## Installation
1. Clone the repo
   ```sh
   git clone
    ```
2. Install NPM packages
    ```sh
    npm install
    ```
3. Create a .env file in the root directory and add the following:
    ```sh
    NODE_ENV=development
    PORT=5000
    MONGO_URI=your mongodb uri
    JWT_SECRET=your jwt secret
    JWT_EXPIRE=30d
    JWT_COOKIE_EXPIRE=30
    ```
4. Run the app
    ```sh
    npm run dev
    ```
5. Run the app in production
    ```sh
    npm start
    ```
## Usage
### Influencer
1. Sign up as an influencer
2. Log in as an influencer
3. View all brands
4. View a specific brand
5. Contact a brand
6. View all brands that you have contacted
7. View all brands that have contacted you
8. View all brands that you have contacted and have accepted your request

### Brand
1. Sign up as a brand
2. Log in as a brand
3. View all influencers
4. View a specific influencer
5. Contact an influencer
6. View all influencers that you have contacted
7. View all influencers that have contacted you
8. View all influencers that you have contacted and have accepted your request

## Built With
* [HTML] 
* [CSS]
* [JavaScript]
* [PHP]
* [MySQL]

## License
Distributed under the MIT License. See `LICENSE` for more information.





