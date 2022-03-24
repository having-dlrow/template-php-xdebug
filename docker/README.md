
### build all 
docker-compose up -d --build .
curl localhost:8888

### build service
docker-compose up -d --build php
docker-compose up -d --build webserver

### Image 
[link](https://matthewsetter.com/setup-step-debugging-php-xdebug3-docker)
docker build --tag php7.4.21-xdebug .


## xdebug

### check Port
lsof -np -iTCP -sTCP:LISTEN

