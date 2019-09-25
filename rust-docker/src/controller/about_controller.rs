use actix_web::{HttpResponse, Responder};
use actix_web::get;

#[get("/about-me")]
pub fn about_me() -> impl Responder {
    HttpResponse::Ok().body("My blog url is https://lukaszstaniszewski.pl")

    //Alternative return
    //return HttpResponse::Ok().body("My blog url is https://lukaszstaniszewski.pl");
}