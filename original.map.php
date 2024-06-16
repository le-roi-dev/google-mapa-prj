<!doctype html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<html>

<head>
    <title></title>
    <style>
        #map {
            height: 650px;
            width: 100%;
        }
    </style>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div id="map">
    </div>

    <script>
        var jsonData = {
  "type": "FeatureCollection",
  "features": [
        {
            "type": "Feature",
            "properties": {
                "id": "0",
                "Lat": -33.303586612690999,
                "long": -70.696219513557494,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "Roof Burger",
                "commune": "CHICUREO",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=RoofBurger&id=restofans_679af0fb-bd0b-41a0-b93a-e8af68fdf59e",
                "google_link": "http://maps.app.goo.gl/5amxAdUgZLDchSuk9",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.696219513557494,
                    -33.303586612690999
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "1",
                "Lat": -33.341526444737099,
                "long": -70.544443974703398,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "HELADERIAS LÄRRS",
                "commune": "LO BARNECHEA",
                "monday": "30%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/cafeterias/detalles/heladeria-larrs",
                "google_link": "http://maps.app.goo.gl/Bo38TFjGJoNTnxLSA",
                "Valid_until": "30/09/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.544443974703398,
                    -33.341526444737099
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "2",
                "Lat": -33.346799571063499,
                "long": -70.543396651602293,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "AL BOSQUE ",
                "commune": "LO BARNECHEA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/al-bosque-dcto",
                "google_link": "http://g.co/kgs/NmC4Yhq",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.543396651602293,
                    -33.346799571063499
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "3",
                "Lat": -33.347317636479303,
                "long": -70.5166237277367,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "Pizzeria Capri",
                "commune": "LO BARNECHEA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "",
                "saturday": "",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/descuento-capri",
                "google_link": "http://maps.app.goo.gl/a73bmMP9BwQ6rQpA9",
                "Valid_until": "30/11/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.5166237277367,
                    -33.347317636479303
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "4",
                "Lat": -33.351493711301401,
                "long": -70.512386989762902,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "KIARA",
                "commune": "LO BARNECHEA",
                "monday": "40%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/40-de-descuento-visa/detalles/kiara-40visa",
                "google_link": "http://g.co/kgs/22QBVBr",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.512386989762902,
                    -33.351493711301401
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "5",
                "Lat": -33.353572509262101,
                "long": -70.541287138998598,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "BAR TECLADOS",
                "commune": "LO BARNECHEA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=TecladosBar&id=restofans_098771a6-45cb-46c9-b381-82fd3af93af1",
                "google_link": "http://maps.app.goo.gl/Cnmi641xBMYiSPJc8",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.541287138998598,
                    -33.353572509262101
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "6",
                "Lat": -33.354310593198598,
                "long": -70.539339643408894,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "BAZA",
                "commune": "LO BARNECHEA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Baza&id=restofans_0a46d209-70c3-4171-8da5-5e7812a3297f",
                "google_link": "http://maps.app.goo.gl/5VHQGTe8ukBMRcCQ7",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.539339643408894,
                    -33.354310593198598
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "7",
                "Lat": -33.361929691282398,
                "long": -70.670222920500706,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "JUST BURGER",
                "commune": "HUECHURABA",
                "monday": "40%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=JustBurger&id=beneficio12_35e285b9-fe5b-4096-9e7f-fee3aee493e3",
                "google_link": "http://maps.app.goo.gl/yDatX8YVbmDbui3CA",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.670222920500706,
                    -33.361929691282398
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "8",
                "Lat": -33.363143065128099,
                "long": -70.493071215126605,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "ENRICCA PIZZERIA",
                "commune": "LO BARNECHEA",
                "monday": "",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/enrica-pizzeria",
                "google_link": "http://g.co/kgs/UKXUonu",
                "Valid_until": "31/03/2025"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.493071215126605,
                    -33.363143065128099
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "9",
                "Lat": -33.364621495961302,
                "long": -70.515635399979899,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "SABOR Y AROMA",
                "commune": "LO BARNECHEA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/sabor-aroma",
                "google_link": "http://g.co/kgs/sWtWvGE",
                "Valid_until": "30/06/2023"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.515635399979899,
                    -33.364621495961302
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "10",
                "Lat": -33.367993978930301,
                "long": -70.677840451513404,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "HUECHURABA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/FZrh6k9RpZZ9LdFw5",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.677840451513404,
                    -33.367993978930301
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "11",
                "Lat": -33.373280010748097,
                "long": -70.518263344969597,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "MALDITO ARROZ",
                "commune": "LAS CONDES",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/maldito-arroz",
                "google_link": "http://g.co/kgs/beKQasB",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.518263344969597,
                    -33.373280010748097
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "12",
                "Lat": -33.378791307416499,
                "long": -70.541204605642505,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "AUREA",
                "commune": "VITACURA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/20-dcto-en-restaurant-delivery-retiro-en-aurea",
                "google_link": "http://g.co/kgs/JdiFg5F",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.541204605642505,
                    -33.378791307416499
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "13",
                "Lat": -33.378971029750701,
                "long": -70.571598809204701,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "HELADERIAS LÄRRS",
                "commune": "VITACURA",
                "monday": "30%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/cafeterias/detalles/heladeria-larrs",
                "google_link": "http://maps.app.goo.gl/xK5DQetX18z7xBiv7",
                "Valid_until": "30/09/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.571598809204701,
                    -33.378971029750701
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "14",
                "Lat": -33.380107316602,
                "long": -70.563179160999297,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "BAR TECLADOS",
                "commune": "VITACURA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=TecladosBar&id=restofans_098771a6-45cb-46c9-b381-82fd3af93af1",
                "google_link": "http://maps.app.goo.gl/v2dPDpy5RNUcSnHK6",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.563179160999297,
                    -33.380107316602
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "15",
                "Lat": -33.381213452836199,
                "long": -70.578140103312506,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "BAR DE RIO",
                "commune": "VITACURA",
                "monday": "",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/bar-de-rio-dcto",
                "google_link": "http://g.co/kgs/uzCRP4e",
                "Valid_until": "31/10/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.578140103312506,
                    -33.381213452836199
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "16",
                "Lat": -33.381454375482498,
                "long": -70.535898955199201,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "Fuente Uruguaya",
                "commune": "VITACURA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/fuente-uruguaya",
                "google_link": "http://g.co/kgs/QLFTZfn",
                "Valid_until": "30/01/2025"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.535898955199201,
                    -33.381454375482498
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "17",
                "Lat": -33.385224578465497,
                "long": -70.5528676149614,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "HELADERIAS BOSA",
                "commune": "VITACURA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/cafeterias/detalles/heladerias-bosa",
                "google_link": "http://maps.app.goo.gl/UUFs2YJR9QgTaEsa6",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.5528676149614,
                    -33.385224578465497
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "18",
                "Lat": -33.385432271839001,
                "long": -70.555116165657793,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "PUNTO MX",
                "commune": "VITACURA",
                "monday": "25%",
                "tuesday": "25%",
                "wednesday": "25%",
                "thursday": "25%",
                "friday": "25%",
                "saturday": "25%",
                "sunday": "25%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/punto-mx",
                "google_link": "http://g.co/kgs/ApVLUnC",
                "Valid_until": "30/09/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.555116165657793,
                    -33.385432271839001
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "19",
                "Lat": -33.386058253435301,
                "long": -70.565001049242298,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "Pizzeria Capri",
                "commune": "VITACURA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/descuento-capri",
                "google_link": "http://maps.app.goo.gl/LMqQkfke2nrJhiTx6",
                "Valid_until": "30/10/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.565001049242298,
                    -33.386058253435301
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "20",
                "Lat": -33.386610678788301,
                "long": -70.564014903214698,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "El Café Rosa",
                "commune": "VITACURA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "40%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=ElCafeRosa&id=restofans_1f271c83-eaa6-4a21-8304-f01beaecc22d",
                "google_link": "http://maps.app.goo.gl/oSLXpdbRZVVbcgZs9",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.564014903214698,
                    -33.386610678788301
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "21",
                "Lat": -33.387528474168697,
                "long": -70.576746220551996,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "Papa Johns ",
                "commune": "VITACURA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=PapaJohns&id=beneficio12_691f3cff-a5c1-40f6-b077-d5468fcfd46f",
                "google_link": "http://maps.app.goo.gl/1qZC64QDNhCRDY7N8",
                "Valid_until": "31/12/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.576746220551996,
                    -33.387528474168697
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "22",
                "Lat": -33.388864768746501,
                "long": -70.618488835449199,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "FUKAI",
                "commune": "HUECHURABA",
                "monday": "",
                "tuesday": "40%",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Fukai&id=restofans_a80dd853-4612-4389-9697-ab0aa523dcc4",
                "google_link": "http://maps.app.goo.gl/iJPbX6oAgad1UavF7",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.618488835449199,
                    -33.388864768746501
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "23",
                "Lat": -33.388937263888401,
                "long": -70.6181234610236,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "HUECHURABA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/B5F5YBoFqraZgLjp6",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.6181234610236,
                    -33.388937263888401
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "24",
                "Lat": -33.389147872065898,
                "long": -70.545683026431107,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "BAZA",
                "commune": "LAS CONDES",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Baza&id=restofans_0a46d209-70c3-4171-8da5-5e7812a3297f",
                "google_link": "http://maps.app.goo.gl/mGT9wJgKFERjT3nM7",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.545683026431107,
                    -33.389147872065898
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "25",
                "Lat": -33.389502402791898,
                "long": -70.573898462509604,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "JUST BURGER",
                "commune": "VITACURA",
                "monday": "40%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=JustBurger&id=beneficio12_35e285b9-fe5b-4096-9e7f-fee3aee493e3",
                "google_link": "http://maps.app.goo.gl/wgT7qghdoFFFJVqH9",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.573898462509604,
                    -33.389502402791898
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "26",
                "Lat": -33.3905392560998,
                "long": -70.592699927150505,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "BAR TECLADOS",
                "commune": "VITACURA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=TecladosBar&id=restofans_098771a6-45cb-46c9-b381-82fd3af93af1",
                "google_link": "http://maps.app.goo.gl/7hXxr4ZUhuwTBPjb9",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.592699927150505,
                    -33.3905392560998
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "27",
                "Lat": -33.391462041115801,
                "long": -70.5763409491272,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "Infiltrados",
                "commune": "VITACURA",
                "monday": "",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "",
                "friday": "",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/infiltrados-dcto",
                "google_link": "http://g.co/kgs/ZojnuL2",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.5763409491272,
                    -33.391462041115801
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "28",
                "Lat": -33.394492520803801,
                "long": -70.579362060768901,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "REFUGIO 24.7",
                "commune": "VITACURA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/24-7",
                "google_link": "http://g.co/kgs/p9f7nQR",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.579362060768901,
                    -33.394492520803801
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "29",
                "Lat": -33.3954959816555,
                "long": -70.592521521079405,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "ROSITA MEXICANA",
                "commune": "VITACURA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Rosita&id=restofans_80e69d6d-6d35-4c40-aff6-5f8f778b2367",
                "google_link": "http://maps.app.goo.gl/nRR6gMfbwKup7j286",
                "Valid_until": "30/04/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.592521521079405,
                    -33.3954959816555
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "30",
                "Lat": -33.395895977007498,
                "long": -70.581316378785004,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "TARINGA",
                "commune": "VITACURA",
                "monday": "",
                "tuesday": "",
                "wednesday": "40%",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/40-de-descuento-visa/detalles/taringa-40visa",
                "google_link": "http://g.co/kgs/nr1Dr6B",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.581316378785004,
                    -33.395895977007498
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "31",
                "Lat": -33.399108977403998,
                "long": -70.575829119194196,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "MAJESTIC",
                "commune": "VITACURA",
                "monday": "25%",
                "tuesday": "25%",
                "wednesday": "25%",
                "thursday": "25%",
                "friday": "25%",
                "saturday": "25%",
                "sunday": "25%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/majestic",
                "google_link": "http://g.co/kgs/Mg3Tu7Z",
                "Valid_until": "31/05/2025"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.575829119194196,
                    -33.399108977403998
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "32",
                "Lat": -33.399146695549298,
                "long": -70.515221628466307,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "HELADERIAS LÄRRS",
                "commune": "LAS CONDES",
                "monday": "30%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/cafeterias/detalles/heladeria-larrs",
                "google_link": "http://maps.app.goo.gl/LxXH6iMVfmNQmjq36",
                "Valid_until": "30/09/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.515221628466307,
                    -33.399146695549298
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "33",
                "Lat": -33.400443088672901,
                "long": -70.592256729657294,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "FUKAI",
                "commune": "VITACURA",
                "monday": "",
                "tuesday": "40%",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Fukai&id=restofans_a80dd853-4612-4389-9697-ab0aa523dcc4",
                "google_link": "http://maps.app.goo.gl/E9jpePafzy8vQdqw5",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.592256729657294,
                    -33.400443088672901
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "34",
                "Lat": -33.402006860630998,
                "long": -70.592075103815802,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "OTAKI",
                "commune": "VITACURA",
                "monday": "",
                "tuesday": "40%",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/40-de-descuento-visa/detalles/otaki-40visa",
                "google_link": "http://g.co/kgs/cLxMeqv",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.592075103815802,
                    -33.402006860630998
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "35",
                "Lat": -33.4025170839856,
                "long": -70.590060155005901,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "CASAGIARDINO",
                "commune": "VITACURA",
                "monday": "",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/casagiardino-dcto",
                "google_link": "http://g.co/kgs/9rJyZFB",
                "Valid_until": "31/10/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.590060155005901,
                    -33.4025170839856
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "36",
                "Lat": -33.402752037850497,
                "long": -70.588312390220594,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "GREEN POKE",
                "commune": "VITACURA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/green-poke",
                "google_link": "http://maps.app.goo.gl/Rx6WcMiszHg3KbcX8",
                "Valid_until": "30/06/2023"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.588312390220594,
                    -33.402752037850497
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "37",
                "Lat": -33.404885273178898,
                "long": -70.573740345066,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "LAS CONDES",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/Tz3uZbMHefiLtcsw8",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.573740345066,
                    -33.404885273178898
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "38",
                "Lat": -33.405097529875597,
                "long": -70.574086554920498,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "YATAI",
                "commune": "LAS CONDES",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Yatai&id=restofans_3e525e23-6ded-43aa-a25e-46bc53a74290",
                "google_link": "http://maps.app.goo.gl/PViTTE8kJo3TGCM2A",
                "Valid_until": "30/04/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.574086554920498,
                    -33.405097529875597
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "39",
                "Lat": -33.405225681115297,
                "long": -70.569959730100294,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "ZAIKA COMIDA INDIA",
                "commune": "LAS CONDES",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/zaika",
                "google_link": "http://g.co/kgs/4emvXok",
                "Valid_until": "31/10/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.569959730100294,
                    -33.405225681115297
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "40",
                "Lat": -33.405528408282301,
                "long": -70.574390184982803,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "Rayo Burger",
                "commune": "LAS CONDES",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=RayoBurger&id=restofans_0e19f12b-2866-4ac0-885e-36de00fe76b7",
                "google_link": "http://g.co/kgs/Bp2GgKV",
                "Valid_until": "30/04/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.574390184982803,
                    -33.405528408282301
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "41",
                "Lat": -33.414295392667299,
                "long": -70.600550632155105,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "ICA",
                "commune": "LAS CONDES",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "40%",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/40-de-descuento-visa/detalles/ica-restaurante-40visa",
                "google_link": "http://g.co/kgs/sn28CMX",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.600550632155105,
                    -33.414295392667299
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "42",
                "Lat": -33.414627973425802,
                "long": -70.596503167177204,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "PALACIO DANUBIO AZUL",
                "commune": "LAS CONDES",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/20-dcto-consumo-presencial-y-delivery-danubio-azul",
                "google_link": "http://g.co/kgs/9jyY9rj",
                "Valid_until": "30/06/2023"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.596503167177204,
                    -33.414627973425802
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "43",
                "Lat": -33.414796098568303,
                "long": -70.603896100007205,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "QB Restaurant Bar",
                "commune": "VITACURA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "30%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/quotidien-bistro-2023",
                "google_link": "http://g.co/kgs/v5ArFKi",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.603896100007205,
                    -33.414796098568303
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "44",
                "Lat": -33.415620168530801,
                "long": -70.598773559935296,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "Nkiru",
                "commune": "LAS CONDES",
                "monday": "40%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Nkiru&id=restofans_b264b9b4-96fd-4121-b4cd-5e12e378718b",
                "google_link": "http://g.co/kgs/hLHurmc",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.598773559935296,
                    -33.415620168530801
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "45",
                "Lat": -33.416858031171103,
                "long": -70.602397556025906,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "THAI EXPRESS",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/thai-express",
                "google_link": "http://maps.app.goo.gl/Xh568xSQSTFP3xiM6",
                "Valid_until": "10/08/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.602397556025906,
                    -33.416858031171103
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "46",
                "Lat": -33.417443509091399,
                "long": -70.553832575638793,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "JUST BURGER",
                "commune": "LAS CONDES",
                "monday": "40%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=JustBurger&id=beneficio12_35e285b9-fe5b-4096-9e7f-fee3aee493e3",
                "google_link": "http://maps.app.goo.gl/abgxown8mwbAXy3e6",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.553832575638793,
                    -33.417443509091399
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "47",
                "Lat": -33.418898569678397,
                "long": -70.596435633725903,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "RUGENDAS",
                "commune": "LAS CONDES",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/rugendas-dcto",
                "google_link": "http://g.co/kgs/s4tBBex",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.596435633725903,
                    -33.418898569678397
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "48",
                "Lat": -33.419465490283301,
                "long": -70.610857336961203,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "JUST BURGER",
                "commune": "PROVIDENCIA",
                "monday": "40%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=JustBurger&id=beneficio12_35e285b9-fe5b-4096-9e7f-fee3aee493e3",
                "google_link": "http://maps.app.goo.gl/MFJkfWku6kPtLYWH8",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.610857336961203,
                    -33.419465490283301
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "49",
                "Lat": -33.4195983988783,
                "long": -70.602080328820307,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "Coppelia",
                "commune": "PROVIDENCIA",
                "monday": "30%",
                "tuesday": "30%",
                "wednesday": "30%",
                "thursday": "30%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Coppelia&id=beneficio12_c5e0fa11-0c4f-4c24-8ced-23c8b6c71d0f",
                "google_link": "http://maps.app.goo.gl/rvcRSPmYsfdKpe5j7",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.602080328820307,
                    -33.4195983988783
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "50",
                "Lat": -33.420220030110301,
                "long": -70.609598382277497,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "Coppelia",
                "commune": "PROVIDENCIA",
                "monday": "30%",
                "tuesday": "30%",
                "wednesday": "30%",
                "thursday": "30%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Coppelia&id=beneficio12_c5e0fa11-0c4f-4c24-8ced-23c8b6c71d0f",
                "google_link": "http://maps.app.goo.gl/WAR7GzjPtmq3fwqy9",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.609598382277497,
                    -33.420220030110301
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "51",
                "Lat": -33.420378308848399,
                "long": -70.603178655055203,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "LA MURTA",
                "commune": "PROVIDENCIA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/la-murta",
                "google_link": "http://maps.app.goo.gl/D9M1BgZ6DY7xRpTH9",
                "Valid_until": "01/04/2025"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.603178655055203,
                    -33.420378308848399
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "52",
                "Lat": -33.422332287057998,
                "long": -70.612112948675104,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "CALIFORNIA CANTINA",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/california-cantina",
                "google_link": "",
                "Valid_until": "01/03/2025"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.612112948675104,
                    -33.422332287057998
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "53",
                "Lat": -33.422857623739397,
                "long": -70.610492059505106,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "CHIAROSCURO PANORAMICO",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/chiaroscuro",
                "google_link": "http://g.co/kgs/3KhWZ66",
                "Valid_until": "31/10/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.610492059505106,
                    -33.422857623739397
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "54",
                "Lat": -33.422932873042697,
                "long": -70.611642846509,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "BAR ZERATTI",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=BarZeratti&id=restofans_2d56c324-5ab1-40e6-a37f-dd1d403eafdc",
                "google_link": "http://maps.app.goo.gl/57fM25eUbdZzywQFA",
                "Valid_until": "30/04/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.611642846509,
                    -33.422932873042697
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "55",
                "Lat": -33.423949307007902,
                "long": -70.610993584774405,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "PROVIDENCIA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/Ly4cBtpHpYfBTcHR8",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.610993584774405,
                    -33.423949307007902
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "56",
                "Lat": -33.424394886118797,
                "long": -70.612287113958899,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "LA BIFERIA",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/la-biferia-dcto",
                "google_link": "http://g.co/kgs/pFPhWY5",
                "Valid_until": "31/01/2025"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.612287113958899,
                    -33.424394886118797
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "57",
                "Lat": -33.425988256845102,
                "long": -70.618066025163202,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MISTER FISH",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=MisterFish&id=restofans_2ac5f3b9-f57d-43f7-ab00-fe98dc540b8b",
                "google_link": "http://maps.app.goo.gl/K2msJBGQAPbyAwMB8",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.618066025163202,
                    -33.425988256845102
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "58",
                "Lat": -33.426694078508802,
                "long": -70.610616199978395,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "SURISTA",
                "commune": "PROVIDENCIA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/surista-dcto",
                "google_link": "http://maps.app.goo.gl/F1cTKYQfM6TJNHMDA",
                "Valid_until": "30/06/2023"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.610616199978395,
                    -33.426694078508802
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "59",
                "Lat": -33.426912444766003,
                "long": -70.618713040558205,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "CEVICHAZO 102",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/cevichazo-102",
                "google_link": "NO EXISTE DESCRIPCION",
                "Valid_until": "30/09/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.618713040558205,
                    -33.426912444766003
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "60",
                "Lat": -33.426970936135199,
                "long": -70.619564605454798,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "BAR TECLADOS",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=TecladosBar&id=restofans_098771a6-45cb-46c9-b381-82fd3af93af1",
                "google_link": "http://maps.app.goo.gl/Gt3FnUhxs8Dvgdm27",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.619564605454798,
                    -33.426970936135199
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "61",
                "Lat": -33.427121781445699,
                "long": -70.617073819923604,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "BAR TECLADOS",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=TecladosBar&id=restofans_098771a6-45cb-46c9-b381-82fd3af93af1",
                "google_link": "http://maps.app.goo.gl/gvrAo2WrdhqosYCh9",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.617073819923604,
                    -33.427121781445699
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "62",
                "Lat": -33.428215679033201,
                "long": -70.635066969715595,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "ROSITA MEXICANA",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Rosita&id=restofans_80e69d6d-6d35-4c40-aff6-5f8f778b2367",
                "google_link": "http://maps.app.goo.gl/vPtzwZqwxEz4QCXu9",
                "Valid_until": "30/04/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.635066969715595,
                    -33.428215679033201
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "63",
                "Lat": -33.4299295565798,
                "long": -70.578381278790204,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MISTER FISH",
                "commune": "LA REINA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=MisterFish&id=restofans_2ac5f3b9-f57d-43f7-ab00-fe98dc540b8b",
                "google_link": "http://maps.app.goo.gl/GMxDnSvRTmVYAsQK7",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.578381278790204,
                    -33.4299295565798
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "64",
                "Lat": -33.430312641058698,
                "long": -70.578622569002206,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "Coppelia",
                "commune": "LAS CONDES",
                "monday": "30%",
                "tuesday": "30%",
                "wednesday": "30%",
                "thursday": "30%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Coppelia&id=beneficio12_c5e0fa11-0c4f-4c24-8ced-23c8b6c71d0f",
                "google_link": "http://maps.app.goo.gl/zatryLqka1sZ8y7k9",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.578622569002206,
                    -33.430312641058698
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "65",
                "Lat": -33.4304673583609,
                "long": -70.634287039909793,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "BAR TECLADOS",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=TecladosBar&id=restofans_098771a6-45cb-46c9-b381-82fd3af93af1",
                "google_link": "http://maps.app.goo.gl/Mp4pLeEje9gNrctW6",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.634287039909793,
                    -33.4304673583609
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "66",
                "Lat": -33.431041856854399,
                "long": -70.636238000025102,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "WARUNG",
                "commune": "RECOLETA",
                "monday": "25%",
                "tuesday": "25%",
                "wednesday": "25%",
                "thursday": "25%",
                "friday": "25%",
                "saturday": "25%",
                "sunday": "25%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/warung-dcto",
                "google_link": "http://maps.app.goo.gl/AG8zfUH8gYv5jam56",
                "Valid_until": "31/10/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.636238000025102,
                    -33.431041856854399
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "67",
                "Lat": -33.431647442962401,
                "long": -70.634532033988293,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "SELVADO",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/selvado-20-dcto",
                "google_link": "http://g.co/kgs/NfPsMfJ",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.634532033988293,
                    -33.431647442962401
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "68",
                "Lat": -33.432162207049601,
                "long": -70.635049238692702,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "VIVA LA VIDA",
                "commune": "PROVIDENCIA",
                "monday": "",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/viva-la-vida",
                "google_link": "http://g.co/kgs/z2qgNcL",
                "Valid_until": "30/06/2023"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.635049238692702,
                    -33.432162207049601
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "69",
                "Lat": -33.4323756874699,
                "long": -70.634714901967797,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "BAR EL RETIRO",
                "commune": "PROVIDENCIA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "40%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/40-de-descuento-visa/detalles/bar-el-retiro-visa",
                "google_link": "http://g.co/kgs/hpSm4Af",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.634714901967797,
                    -33.4323756874699
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "70",
                "Lat": -33.4323756874699,
                "long": -70.634714901967797,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "BAR EL RETIRO",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "0",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/bar-retiro",
                "google_link": "http://g.co/kgs/hpSm4Af",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.634714901967797,
                    -33.4323756874699
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "71",
                "Lat": -33.432409010536801,
                "long": -70.633821759936893,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "ABTAO",
                "commune": "PROVIDENCIA",
                "monday": "",
                "tuesday": "20%",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/abtao",
                "google_link": "http://maps.app.goo.gl/g63KYWBsc9XDs9518",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.633821759936893,
                    -33.432409010536801
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "72",
                "Lat": -33.433291218057597,
                "long": -70.624455155050796,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "EMPIRICO",
                "commune": "PROVIDENCIA",
                "monday": "",
                "tuesday": "20%",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/empirico",
                "google_link": "http://g.co/kgs/y9Y7D9N",
                "Valid_until": "30/09/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.624455155050796,
                    -33.433291218057597
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "73",
                "Lat": -33.433498976510101,
                "long": -70.635664924271595,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "FUKAI",
                "commune": "PROVIDENCIA",
                "monday": "",
                "tuesday": "40%",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Fukai&id=restofans_a80dd853-4612-4389-9697-ab0aa523dcc4",
                "google_link": "http://maps.app.goo.gl/xxUrpo4fnJ1VQdew7",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.635664924271595,
                    -33.433498976510101
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "74",
                "Lat": -33.434779517407001,
                "long": -70.643588596449206,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "THAI EXPRESS",
                "commune": "SANTIAGO",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/thai-express",
                "google_link": "http://maps.app.goo.gl/Uus2pJ36miUPAmcE7",
                "Valid_until": "10/08/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.643588596449206,
                    -33.434779517407001
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "75",
                "Lat": -33.434872408103502,
                "long": -70.850059019790905,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "TRATTORIA SANTTINO",
                "commune": "PUDAHUEL",
                "monday": "",
                "tuesday": "20%",
                "wednesday": "",
                "thursday": "20%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/trattoria-santtino-dcto",
                "google_link": "http://www.google.com/maps/place/Trattoria+Santtino/@-33.4497953,-70.8466827,15z/data=!4m2!3m1!1s0x0:0xc0af4138fa57c48d?sa=X&ved=1t:2428&ictx=111",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.850059019790905,
                    -33.434872408103502
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "76",
                "Lat": -33.435748151371001,
                "long": -70.616335185007898,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "BAO BAR",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=BaoBar&id=restofans_8769e480-861e-48f3-ab2b-1f89441f99cb",
                "google_link": "http://g.co/kgs/foYemsP",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.616335185007898,
                    -33.435748151371001
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "77",
                "Lat": -33.4377115091104,
                "long": -70.608596259658,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "511 The Hemingway Room",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/h511-dcto-20",
                "google_link": "http://g.co/kgs/zW39SNL",
                "Valid_until": "01/01/2025"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.608596259658,
                    -33.4377115091104
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "78",
                "Lat": -33.438432305050299,
                "long": -70.564734634259096,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "LA PIZARRA",
                "commune": "LA REINA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/la-pizzarra",
                "google_link": "http://g.co/kgs/cVpDvJ4",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.564734634259096,
                    -33.438432305050299
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "79",
                "Lat": -33.438770894659399,
                "long": -70.561164120251902,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "JUST BURGER",
                "commune": "LA REINA",
                "monday": "40%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=JustBurger&id=beneficio12_35e285b9-fe5b-4096-9e7f-fee3aee493e3",
                "google_link": "http://maps.app.goo.gl/kCCY8NCrThLESNRQ6",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.561164120251902,
                    -33.438770894659399
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "80",
                "Lat": -33.440237857421103,
                "long": -70.652349094438506,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "SANTIAGO",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/hyyk9ELbbAcc7GcK9",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.652349094438506,
                    -33.440237857421103
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "81",
                "Lat": -33.440727980124599,
                "long": -70.674103319031602,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "PELUQUERIA FRANCESA",
                "commune": "SANTIAGO",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/peluqueria-francesa",
                "google_link": "http://g.co/kgs/mb6u1PZ",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.674103319031602,
                    -33.440727980124599
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "82",
                "Lat": -33.441289089065002,
                "long": -70.651561498387693,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "Buffet Express",
                "commune": "SANTIAGO",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/buffet-express",
                "google_link": "http://www.instagram.com/buffetoficial/?hl=es",
                "Valid_until": "31/10/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.651561498387693,
                    -33.441289089065002
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "83",
                "Lat": -33.442442508148602,
                "long": -70.626361990466506,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "KANTU",
                "commune": "PROVIDENCIA",
                "monday": "25%",
                "tuesday": "25%",
                "wednesday": "25%",
                "thursday": "25%",
                "friday": "25%",
                "saturday": "25%",
                "sunday": "25%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/kantu",
                "google_link": "http://g.co/kgs/XHPNuCv",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.626361990466506,
                    -33.442442508148602
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "84",
                "Lat": -33.444694414505399,
                "long": -70.625792859928296,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "GALPON ITALIA",
                "commune": "PROVIDENCIA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/galpon-italia",
                "google_link": "http://g.co/kgs/HDsTbhF",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.625792859928296,
                    -33.444694414505399
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "85",
                "Lat": -33.445435512350201,
                "long": -70.616883640151599,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "VERDE SAZÓN",
                "commune": "PROVIDENCIA",
                "monday": "25%",
                "tuesday": "25%",
                "wednesday": "25%",
                "thursday": "25%",
                "friday": "25%",
                "saturday": "25%",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/verde-sazon",
                "google_link": "http://g.co/kgs/zZxmb5V",
                "Valid_until": "30/10/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.616883640151599,
                    -33.445435512350201
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "86",
                "Lat": -33.446254219655899,
                "long": -70.6259820551128,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "PECES DE CIUDAD",
                "commune": "PROVIDENCIA",
                "monday": "",
                "tuesday": "",
                "wednesday": "20%",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/peces-de-ciudad-20dcto",
                "google_link": "http://g.co/kgs/fbjfrWC",
                "Valid_until": "30/10/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.6259820551128,
                    -33.446254219655899
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "87",
                "Lat": -33.448248442974403,
                "long": -70.597242046238406,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "ROSITA MEXICANA",
                "commune": "ÑUÑOA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Rosita&id=restofans_80e69d6d-6d35-4c40-aff6-5f8f778b2367",
                "google_link": "http://maps.app.goo.gl/qYsiMaqjSxPCsyTG8",
                "Valid_until": "30/04/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.597242046238406,
                    -33.448248442974403
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "88",
                "Lat": -33.451075886672903,
                "long": -70.613294496589603,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "JUST BURGER",
                "commune": "ÑUÑOA",
                "monday": "40%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=JustBurger&id=beneficio12_35e285b9-fe5b-4096-9e7f-fee3aee493e3",
                "google_link": "http://maps.app.goo.gl/VNSG285M7M1HoNjN8",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.613294496589603,
                    -33.451075886672903
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "89",
                "Lat": -33.451605235397103,
                "long": -70.569990028335795,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "LA REINA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/5KQ1c4boE8Bb9PaZ7",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.569990028335795,
                    -33.451605235397103
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "90",
                "Lat": -33.452749225530297,
                "long": -70.594589565831797,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "BAR TECLADOS",
                "commune": "ÑUÑOA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=TecladosBar&id=restofans_098771a6-45cb-46c9-b381-82fd3af93af1",
                "google_link": "http://maps.app.goo.gl/XwRU6842dAwzR7eK6",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.594589565831797,
                    -33.452749225530297
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "91",
                "Lat": -33.453641839741898,
                "long": -70.596999902637904,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MISTER FISH",
                "commune": "ÑUÑOA ",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=MisterFish&id=restofans_2ac5f3b9-f57d-43f7-ab00-fe98dc540b8b",
                "google_link": "http://maps.app.goo.gl/aaFoig2MoJ58SyEX6",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.596999902637904,
                    -33.453641839741898
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "92",
                "Lat": -33.480935966764001,
                "long": -70.751061795394605,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "MAIPU ",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/2FMLLqPvYC6ihPvj9",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.751061795394605,
                    -33.480935966764001
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "93",
                "Lat": -33.482573635334901,
                "long": -70.650336614988007,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "HACIENDA EL LLANO",
                "commune": "SAN MIGUEL",
                "monday": "",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/hacienda-llano",
                "google_link": "http://g.co/kgs/QJdhD8y",
                "Valid_until": "01/03/2025"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.650336614988007,
                    -33.482573635334901
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "94",
                "Lat": -33.485531607324297,
                "long": -70.540140322507099,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "Roof Burger",
                "commune": "PEÑALOLEN",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=RoofBurger&id=restofans_679af0fb-bd0b-41a0-b93a-e8af68fdf59e",
                "google_link": "http://g.co/kgs/ugLWAjW",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.540140322507099,
                    -33.485531607324297
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "95",
                "Lat": -33.485693599257303,
                "long": -70.751396291976505,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "Coppelia",
                "commune": "MAIPU ",
                "monday": "30%",
                "tuesday": "30%",
                "wednesday": "30%",
                "thursday": "30%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Coppelia&id=beneficio12_c5e0fa11-0c4f-4c24-8ced-23c8b6c71d0f",
                "google_link": "http://maps.app.goo.gl/ekQMDuXiSgJTrepB9",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.751396291976505,
                    -33.485693599257303
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "96",
                "Lat": -33.487329260104403,
                "long": -70.578076749581896,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "PEÑALOLEN",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/NWEc4mY1sfyTLm7h8",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.578076749581896,
                    -33.487329260104403
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "97",
                "Lat": -33.488074547515602,
                "long": -70.577813679274399,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "JUST BURGER",
                "commune": "PEÑALOLEN",
                "monday": "40%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=JustBurger&id=beneficio12_35e285b9-fe5b-4096-9e7f-fee3aee493e3",
                "google_link": "http://maps.app.goo.gl/WwvxkGWvBuHDFDzM9",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.577813679274399,
                    -33.488074547515602
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "98",
                "Lat": -33.488321650354699,
                "long": -70.550202212188907,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "TRATTORIA SANTTINO",
                "commune": "PEÑALOLEN",
                "monday": "",
                "tuesday": "20%",
                "wednesday": "",
                "thursday": "20%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/trattoria-santtino-dcto",
                "google_link": "http://g.co/kgs/7HLYs33",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.550202212188907,
                    -33.488321650354699
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "99",
                "Lat": -33.491008590355897,
                "long": -70.540114147048897,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "WAYKU",
                "commune": "PEÑALOLEN",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "40%",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/40-de-descuento-visa/detalles/wayku-40visa",
                "google_link": "http://g.co/kgs/tdtCPuo",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.540114147048897,
                    -33.491008590355897
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "100",
                "Lat": -33.491075133293698,
                "long": -70.540116180458796,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "El Café Rosa",
                "commune": "PEÑALOLEN",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "40%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=ElCafeRosa&id=restofans_1f271c83-eaa6-4a21-8304-f01beaecc22d",
                "google_link": "http://maps.app.goo.gl/56cgPRSzKbXXDPAT6",
                "Valid_until": "31/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.540116180458796,
                    -33.491075133293698
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "101",
                "Lat": -33.499722566645303,
                "long": -70.7529582999952,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "SUSHI THAI",
                "commune": "MAIPU",
                "monday": "20%",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/sushi-thai",
                "google_link": "http://g.co/kgs/h8vzcZK",
                "Valid_until": "30/05/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.7529582999952,
                    -33.499722566645303
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "102",
                "Lat": -33.5066230719735,
                "long": -70.752713115053496,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "nB-BAR",
                "commune": "MAIPU",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/b-bar",
                "google_link": "http://g.co/kgs/fWJa5Em",
                "Valid_until": "01/03/2025"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.752713115053496,
                    -33.5066230719735
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "103",
                "Lat": -33.5101639268605,
                "long": -70.607853969977796,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "LA FLORIDA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/3N1XTH8nC9mWb3RAA",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.607853969977796,
                    -33.5101639268605
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "104",
                "Lat": -33.510345989059701,
                "long": -70.759715685034493,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "AJI SECO MAIPU",
                "commune": "MAIPÚ",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/aji-seco-maipu",
                "google_link": "http://g.co/kgs/Mta8rTC",
                "Valid_until": "31/10/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.759715685034493,
                    -33.510345989059701
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "105",
                "Lat": -33.5103883406249,
                "long": -70.608264832997506,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "Coppelia",
                "commune": "LA FLORIDA",
                "monday": "30%",
                "tuesday": "30%",
                "wednesday": "30%",
                "thursday": "30%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Coppelia&id=beneficio12_c5e0fa11-0c4f-4c24-8ced-23c8b6c71d0f",
                "google_link": "http://maps.app.goo.gl/JScCpPzDxQ5e6z6b7",
                "Valid_until": "30/06/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.608264832997506,
                    -33.5103883406249
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "106",
                "Lat": -33.511688024405501,
                "long": -70.597593180428902,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "ROSITA MEXICANA",
                "commune": "LA FLORIDA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Rosita&id=restofans_80e69d6d-6d35-4c40-aff6-5f8f778b2367",
                "google_link": "http://maps.app.goo.gl/7XoMhUKNicHSkbsX6",
                "Valid_until": "30/04/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.597593180428902,
                    -33.511688024405501
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "107",
                "Lat": -33.517020353993097,
                "long": -70.717406350305296,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "CERRILLOS",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/6sjV7eGFTCu3Jda36",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.717406350305296,
                    -33.517020353993097
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "108",
                "Lat": -33.5171567689356,
                "long": -70.596857780435002,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "LA FLORIDA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/yZEGahDgRCm8vzKa7",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.596857780435002,
                    -33.5171567689356
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "109",
                "Lat": -33.525754350873903,
                "long": -70.661719600003295,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "SABOR X2",
                "commune": "LA CISTERNA",
                "monday": "20%",
                "tuesday": "20%",
                "wednesday": "20%",
                "thursday": "20%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/delirio-restobar-2",
                "google_link": "http://maps.app.goo.gl/zuVYmuiGhMFr1vhM8",
                "Valid_until": "30/09/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.661719600003295,
                    -33.525754350873903
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "110",
                "Lat": -33.561322718713697,
                "long": -70.554860938902607,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "PUENTE ALTO",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/YpMNWT3D3Vg4ayS88",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.554860938902607,
                    -33.561322718713697
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "111",
                "Lat": -33.632777568621897,
                "long": -70.711078283121594,
                "benefits_club": "BANCO RIPLEY ",
                "Restaurant_name": "MAMUT ",
                "commune": "SAN BERNARDO",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "40%",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://www.bancoripley.cl/beneficio?name=Mamut&id=beneficio12_be97ec10-f19b-4aa8-bae7-7a87794722df",
                "google_link": "http://maps.app.goo.gl/tSeDDbEyWbwi3vGM8",
                "Valid_until": "31/07/2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.711078283121594,
                    -33.632777568621897
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "112",
                "Lat": -33.633299376127603,
                "long": -70.568205614995804,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "BAR TIRUA ",
                "commune": "PIRQUE",
                "monday": "",
                "tuesday": "20%",
                "wednesday": "",
                "thursday": "",
                "friday": "",
                "saturday": "",
                "sunday": "",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/bar-tirua-dcto",
                "google_link": "http://g.co/kgs/fUUf9yb",
                "Valid_until": "01/04/2025"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.568205614995804,
                    -33.633299376127603
                ]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "id": "113",
                "Lat": -33.633299376127603,
                "long": -70.568205614995804,
                "benefits_club": "BANCO DE CHILE ",
                "Restaurant_name": "Burger vs Pizza",
                "commune": "PROVIDENCIA",
                "monday": "",
                "tuesday": "",
                "wednesday": "",
                "thursday": "",
                "friday": "20%",
                "saturday": "20%",
                "sunday": "20%",
                "details_link": "http://portales.bancochile.cl/personas/beneficios/sabores/restaurantes-y-bares/detalles/burger-pizza",
                "google_link": "http://g.co/kgs/fUUf9yb",
                "Valid_until": "01/04/2025"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -70.568205614995804,
                    -33.633299376127603
                ]
            }
        }
    ]
};

        function initMap() {

            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 12,
                center: { lat: -33.441289089065002, lng: -70.651561498387693 },
                mapId: "DEMO_MAP_ID",
                mapTypeControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                scaleControl: false,
                zoomControl: false,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_TOP,
                }
            });

            var apiKey = 'AIzaSyDXvrWDGvMqJDVE1ruIMWM2fhqKYH4RFNM';
            infoWindow = new google.maps.InfoWindow();

            // Load the stores GeoJSON onto the map.
            map.data. map.data.addGeoJson(jsonData);
            // Define the custom marker icons.
            map.data.setStyle((feature) => {
                return {
                    icon: {
                        url: `https://lukdescuentos.cl/wp-content/uploads/2024/05/PinPoint_black.png`,
                        scaledSize: new google.maps.Size(40, 40),
                        fillColor: "black",
                    },
                };
            });

            // Show the information for a store when its marker is clicked.
            map.data.addListener('click', (event) => {
                var club_benefits = event.feature.getProperty('benefits_club');
                var restaurant_name = event.feature.getProperty('Restaurant_name');
                var commune = event.feature.getProperty('commune');
                var saturday = event.feature.getProperty('saturday');
                var sunday = event.feature.getProperty('sunday');
                var monday = event.feature.getProperty('monday');
                var tuesday = event.feature.getProperty('tuesday');
                var wednesday = event.feature.getProperty('wednesday');
                var thursday = event.feature.getProperty('thursday');
                var friday = event.feature.getProperty('friday');
                var details = event.feature.getProperty('details_link');
                var validationDate = event.feature.getProperty('Valid_until');
                var position = event.feature.getGeometry().get();
                //hide discounts with empty values
                mondayDisplay = tuesdayDisplay = wednesdayDisplay = thursdayDisplay = fridayDisplay = saturdayDisplay = sundayDisplay = "";
                if (monday === "") {
                    mondayDisplay = "none";
                } else { mondayDisplay = ""; }
                if (tuesday === "") {
                    tuesdayDisplay = "none";
                } else { tuesdayDisplay = ""; }
                if (wednesday === "") {
                    wednesdayDisplay = "none";
                } else { wednesdayDisplay = ""; }
                if (thursday === "") {
                    thursdayDisplay = "none";
                } else { thursdayDisplay = ""; }

                if (friday === "") {
                    fridayDisplay = "none";
                } else { fridayDisplay = ""; }
                if (saturday === "") {
                    saturdayDisplay = "none";
                } else { saturdayDisplay = ""; }
                if (sunday === "") {
                    sundayDisplay = "none";
                } else { sundayDisplay = ""; }
                var content = `
    <span style="font-weight: bold;">Nombre Restaurant: </span><span>${restaurant_name}</span> </br>
    <span style="font-weight: bold;"> Club de beneficos: </span><span>${club_benefits}</span></br>
    <span style="font-weight: bold;">Commune: </span><span> ${commune}</span> </br>
    <span style="font-weight: bold;">Link details: </span> <a href="${details}"> Here </a>
    <p style="font-weight: bold;text-align: center;">Descuentos durante la semana</p>
    <table id="tbl_discounts"; style=" border-collapse: collapse; margin-left: auto; margin-right: auto;border: 1px solid black;">
    <thead >
    <tr style=" background-color: #fe3e00;color: #ffffffff;text-align: center;">
    <td style= "border: 1px solid black;display:${mondayDisplay};">Lunes</td>
    <td style= "border: 1px solid black;display:${tuesdayDisplay};">Martes</td>
    <td style= "border: 1px solid black;display:${wednesdayDisplay};">Miercoles</td>
    <td style= "border: 1px solid black;display:${thursdayDisplay};">Jueves</td>
    <td style= "border: 1px solid black;display:${fridayDisplay};">Viernes</td>
    <td style= "border: 1px solid black;display:${saturdayDisplay};">Sabado</td>
    <td style= "border: 1px solid black;display:${sundayDisplay};">Domingo</td>
    <td style= "border: 1px solid black;">Promocion valida hasta</td>
    </tr>
    </thead>
    <tbody>
    <tr style="height: 18px;">
    <td style= "border: 1px solid black;text-align: center;display:${mondayDisplay};">${monday}</td>
    <td style= "border: 1px solid black;text-align: center;display:${tuesdayDisplay};">${tuesday}</td>
    <td style= "border: 1px solid black;text-align: center;display:${wednesdayDisplay};">${wednesday}</td>
    <td style= "border: 1px solid black;text-align: center;display:${thursdayDisplay};">${thursday}</td>
    <td style= "border: 1px solid black;text-align: center;display:${fridayDisplay};">${friday}</td>
    <td style= "border: 1px solid black;text-align: center;display:${saturdayDisplay};">${saturday}</td>
    <td style= "border: 1px solid black;text-align: center;display:${sundayDisplay};">${sunday}</td>
    <td colspan="3" ;style= "border: 1px solid black;">${validationDate}</td>
    </tr>
    </tbody>
    </table>
  `;

                infoWindow.setContent(content);
                infoWindow.setPosition(position);
                infoWindow.setOptions({ pixelOffset: new google.maps.Size(0, -30) });
                infoWindow.open(map);
            });


        };




    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXvrWDGvMqJDVE1ruIMWM2fhqKYH4RFNM&callback=initMap"></script>
</body>

</html>