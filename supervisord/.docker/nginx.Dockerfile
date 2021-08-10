FROM nginx:latest

RUN mkdir -p /var/log/nginx/pixel \
    && mkdir -p /var/log/nginx/pixel-app \
    && mkdir -p /var/log/nginx/pixel-sdk

RUN chown -R www-data:www-data /var/log/nginx/
RUN chmod -R 777 /var/log/nginx/
