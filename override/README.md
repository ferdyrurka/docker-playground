### Modify for base:

http://localhost:8080/test/contact.html

Command to generate result compose file

docker-compose -f y.yml -f d.yml config

example:

```yaml
services:
  backend:
    build:
      context: .docker
      dockerfile: node.Dockerfile
    command: node main.js
    image: node:12.16-web-server-alpine
    ports:
    - 8081:80/tcp
    volumes:
    - ./backend:/usr/app:rw
  frontend:
    image: nginx:alpine
    ports:
    - 8080:80/tcp
    volumes:
    - ./.docker/nginx.conf:/etc/nginx/nginx.conf:rw
    - ./frontend:/usr/app:rw
version: '3.0'
```