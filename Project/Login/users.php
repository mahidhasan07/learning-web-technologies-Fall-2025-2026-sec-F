<?php
$users = [
    [
        "id" => 1,
        "name" => "Admin User",
        "email" => "admin@gmail.com",
        "password" => password_hash("admin123", PASSWORD_DEFAULT),
        "role" => "admin"
    ],
    [
        "id" => 2,
        "name" => "Doctor User",
        "email" => "doctor@gmail.com",
        "password" => password_hash("doctor123", PASSWORD_DEFAULT),
        "role" => "doctor"
    ],
    [
        "id" => 3,
        "name" => "Patient User",
        "email" => "patient@gmail.com",
        "password" => password_hash("patient123", PASSWORD_DEFAULT),
        "role" => "patient"
    ]
];
