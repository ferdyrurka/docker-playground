FROM nginx:latest

COPY ./.docker/proxy.conf /etc/nginx/nginx.conf

EXPOSE 80