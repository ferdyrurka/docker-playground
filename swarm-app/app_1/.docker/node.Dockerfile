FROM node:12.16-alpine3.11

RUN mkdir -p /usr/app

WORKDIR /usr/app

EXPOSE 80

CMD npm start
