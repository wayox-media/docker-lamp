## PHP LAMP FOR DOCKER
A simple Docker container to run php + mariaDb + Apache

### Installation

You must have Docker installed and running properly.

clone this repo using git

`git clone url MyApp`

cd into your app

`cd MyApp`

run docker build

`docker compose --env-file .env build`

this may take some minutes if this is your first install, images are been downloaded.

Now, bring up the environment.

`docker-compose up -d`

Check the containers are properly running

`docker ps`

navigfate with your browser to the generated site

http://myapp.ly

Check it is properly working