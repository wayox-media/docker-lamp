# PHP LAMP FOR DOCKER
A simple Docker container to run php + Apache

## PreRequisites

 * git
 * ssh
 * docker

## Installation

You must have Docker installed and running properly.

clone this repo using git

```sh
git clone git@github.com:wayox-media/docker-lamp.git MyApp
```

cd into your app

```sh
cd MyApp
```

get a copy of the actual .env file form admins

run docker build

```sh
docker compose --env-file .env build
```

this may take some minutes if this is your first install, images are been downloaded.

Now, bring up the environment.

```sh
docker-compose up -d
```

Check the containers are properly running

```sh
docker ps
```

### Updating your hosts file
MacOS & Linux
In your terminal, run
```sh
sudo nano /etc/hosts
```
PC
```
Open [SystemRoot]\system32\drivers\etc\hosts and edit the file with your text editor with admin privileges.
```
Add the following lines at the end of this hosts file
```
127.0.0.1     myapp.ly
```
MacOS & Linux: 'Ctrl+O' then 'y' to save and 'Ctrl+X' to quit nano.
PC: Save and quit your editor.

After these steps, you may need to flush your dns.

Navigate with your browser to the phpmyadmin site

`http://myapp.ly:8080`

If this URL doesn't work, replace myapp.ly with localhost or 127.0.0.1 

Login with the credentials located in the .env file (request a copy from admins)

Select the MYSQL_DATABASE and click on the sql menu item

Run the following query

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

If this URL doesn't work, replace myapp.ly with localhost or 127.0.0.1

Check it is properly working.

### That's it! Welcome to your docker LAMP Environment.

## Recommendations

to log into the container, run

```sh
docker exec -it myApp bash
```
If you are starting a project using this LAMP env, remove the .git folder and create your fresh new repo. This will ensure you won't push to the original repo all of your work.

Happy coding!

