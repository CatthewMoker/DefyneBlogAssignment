#!/bin/sh
RUN docker-compose build

RUN docker-compose run cakephp composer install --no-interaction

RUN docker-compose run cakephp bin/cake migrations migrate

RUN docker-compose run cakephp bin/cake migrations seed