# Importing Debian Buster as parent image
FROM debian:buster
# Setting up Author field
LABEL maintainer="acoudert@student.42.fr"
# Update/Upgrade/Install packages
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y \
	wget \
	openssl
RUN apt-get install -y \
	php7.3 \
	php7.3-fpm \
	php7.3-common \
	php7.3-mbstring \
	php7.3-gd \
	php7.3-zip \
	php7.3-intl \
	php7.3-xml \
	php7.3-mysql
RUN apt-get install -y \
	nginx \
	default-mysql-server \
	wordpress
# Finalize set up
COPY srcs/* /tmp/
CMD bash /tmp/init.sh
