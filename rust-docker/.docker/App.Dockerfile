FROM rust:1.37.0-slim-stretch

RUN mkdir -p /usr/src/app

WORKDIR /usr/src/app

COPY ./ /usr/src/app

RUN ls && rustc --version && cargo --version

RUN cargo build

EXPOSE 8080

# In prod version use --release args
# CMD cargo run --release

# Dev version
CMD cargo run