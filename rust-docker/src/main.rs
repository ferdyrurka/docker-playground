use rust_docker::util::server::Server;

fn main() {
    let server: Server = Server {
        address: String::from("0.0.0.0"),
        port: 8080
    };

    server.run();
}