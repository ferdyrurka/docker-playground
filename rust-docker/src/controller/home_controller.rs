use actix_web::{HttpResponse, Responder};

pub fn home_page() -> impl Responder {
    return HttpResponse::Ok().body("Hello docker!");

    //Alternative return
    //HttpResponse::Ok().body("Hello docker!")
}