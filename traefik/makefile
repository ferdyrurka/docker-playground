.PHONY: run
run:
	mkcert -cert-file certs/local-cert.pem -key-file certs/local-key.pem app_1.localhost mailcatcher.localhost
	mkcert -cert-file certs/local-2-cert.pem -key-file certs/local-2-key.pem app_2.localhost
	docker-compose -f infrastructure/traefik.docker-compose.yml -f infrastructure/services.docker-compose.yml up -d