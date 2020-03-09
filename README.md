At first configure environment. Install [docker-ce](https://docs.docker.com/install/linux/docker-ce/ubuntu/) then [docker-compose](https://docs.docker.com/compose/install/)

get code with :
```sh
get clone https://github.com/acidvolk/phptestenv.git
```
configure database root password user and password and database name at .env file and credentials for php application at php.env file

run application with:
```sh
docker-compose up -d
```
application available on port :80
