FROM nginx:latest

WORKDIR /app

RUN mkdir -p /var/log/nginx/pixel \
    && mkdir -p /var/log/nginx/pixel-app \
    && mkdir -p /var/log/nginx/pixel-sdk

RUN chown -R www-data:www-data /var/log/nginx/
RUN chmod -R 777 /var/log/nginx/

RUN apt-get update

RUN apt-get -y install supervisor

RUN apt-get autoremove -y
RUN apt-get clean
RUN apt-get autoclean

CMD supervisord -c /app/supervisord.conf
