//
// Dog.swift
//
// Generated by openapi-generator
// https://openapi-generator.tech
//

import Foundation


internal struct Dog: Codable { 


    internal var className: String
    internal var color: String? = "red"
    internal var breed: String?

    internal init(className: String, color: String?, breed: String?) {
        self.className = className
        self.color = color
        self.breed = breed
    }

}
