#!/bin/bash

count() {
	cat /etc/nginx/sites-available/42website.conf | grep " on;" | wc -l
}

nb=$(count)

if [ $nb == 3 ]
then
	cat /etc/nginx/sites-available/42website.conf | sed 's/ on;/ off;/g' > 42website.conf \
		&& mv 42website.conf /etc/nginx/sites-available/
else
	cat /etc/nginx/sites-available/42website.conf | sed 's/ off;/ on;/g' > 42website.conf \
		&& mv 42website.conf /etc/nginx/sites-available/
fi

service nginx restart
