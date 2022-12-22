FROM debian:buster

RUN apt update && apt install nginx -y \
&& apt install apt-transport-https lsb-release ca-certificates wget -y \
&& wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg \
&& sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list' \
&& apt update \
&& apt install php8.2 -y \
&& apt install php8.2-fpm -y \
&& php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
&& php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
&& php composer-setup.php \
&& php -r "unlink('composer-setup.php');" \
&& mv composer.phar /usr/local/bin/composer

COPY ./conf/nginx/nginx.conf /etc/nginx/nginx.conf

COPY ./conf/nginx/default /etc/nginx/sites-available/default

COPY ./tools/entry.sh /usr/bin/entry

RUN chmod +x /usr/bin/entry

ENTRYPOINT [ "entry" ]

CMD [ "nginx" ]
