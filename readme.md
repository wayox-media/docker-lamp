## PHP LAMP FOR DOCKER
A simple Docker container to run php + mariaDb + Apache

### PreRequisites

 * git
 * ssh
 * docker

### Installation

You must have Docker installed and running properly.

clone this repo using git

`git clone git@gitlab.wayox.net:util/docker-lamp.git MyApp`

cd into your app

`cd MyApp`

get a copy of the actual .env file form admins

run docker build

`docker compose --env-file .env build`

this may take some minutes if this is your first install, images are been downloaded.

Now, bring up the environment.

`docker-compose up -d`

Check the containers are properly running

`docker ps`

navigate with your browser to the phpmyadmin site

`http://myapp.ly:8080`

login with the credentials located in the .env file (request a copy from admins)

Select the MYSQL_DATABASE and click on the sql item

run the following query

```sql
drop table if exists `users`;
create table `users` (
    id int not null auto_increment,
    username text not null,
    password text not null,
    primary key (id)
);
insert into `users` (username, password) values
    ("admin","password"),
    ("Alice","this is my password"),
    ("Job","12345678");
```

Click go to run the query.

Finally, navigate with your browser to the app home page.

`http://myapp.ly`

Check it is properly working
