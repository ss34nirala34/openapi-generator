extern crate petstore_reqwest;
use petstore_reqwest::apis::pet_api::PetApi;
use petstore_reqwest::apis::pet_api::PetApiClient;
use petstore_reqwest::apis::configuration;
use petstore_reqwest::models::{Pet};
use std::option::Option;
use std::rc::Rc;

#[test]
fn test_pet() {
    let config = configuration::Configuration::new();
    let pet_api_client = PetApiClient::new(Rc::new(config));

    // create pet object
    let photo_urls = vec!["https://11".to_string(), "https://22".to_string()];
    let mut new_pet = Pet::new("Rust Pet".to_string(), photo_urls);
    new_pet.id = Option::Some(8787);

    // add pet
    let _add_result = pet_api_client.add_pet(new_pet);

    // get pet
    let pet_result = pet_api_client.get_pet_by_id(8787);

    match pet_result {
        Ok(resp) => {
            match resp.entity {
                Some(petstore_reqwest::apis::pet_api::GetPetByIdSuccess::Status200(pet)) => {
                    assert_eq!(pet.id, Option::Some(8787));
                    assert_eq!(pet.name, "Rust Pet");
                    assert_eq!(pet.photo_urls, vec!["https://11".to_string(), "https://22".to_string()]);
                },
                _ => {
                    panic!("Response should contain a pet entity");
                },
            };
        },
        Err(error) => {
            println!("error: {:?}", error);
            panic!("Query should succeed");
        },
    };
}
