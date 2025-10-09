#!/bin/bash

a2enmod rewrite
service apache2 start
composer dev
