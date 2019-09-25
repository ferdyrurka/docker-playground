use actix_web::{HttpServer, web, App};
use crate::controller::home_controller::home_page;
use crate::controller::about_controller::about_me;

pub struct Server {
    pub address: String,
    pub port: i16
}

impl Server {
    pub fn run(&self) {
        HttpServer::new(|| {
            App::new()
                //First method route
                .route("/", web::get().to(home_page))
                //Second method route
                .service(about_me)
        })
            .bind(format!("{}:{}", self.address, self.port.to_string()))
            .unwrap()
            .run()
            .unwrap()
        ;
    }
}
