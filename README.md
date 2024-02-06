# Coin Market Dashboard

## Overview of the Coin Market Dashboard

The Coin Market Dashboard is a web application that provides a visual analysis of the cryptocurrency market with CoinGecko API. 

It uses PHP Laravel for the back end  and  Next.JS for the front end.


## How to start the application

1. Clone the repository
2. Copy the .env.example file to .env
3. Add the CoinGecko API key to the .env file
4. Run docker-compose up to start the api.
5. Run npm install and npm run dev to start the front end.

## API Routes

- /api/v1/coin?id={id}: Details of a specific coin
- /api/v1/coin/markets?vs_currency={currency}: List of all coins with their market data

## OBSERVATIONS

The front end is not finished yet. The back end is working as expected.


