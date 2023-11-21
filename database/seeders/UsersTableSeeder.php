<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 8,
                'people_id' => 4,
                'lastname' => 'គី',
                'firstname' => 'គាងសេង',
                'phone' => '077788827',
                'username' => 'keangseng007@yahoo.com',
                'email' => 'keangseng007@yahoo.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$4pBVTdFFK09ROS8t439tzu9bEEdaMw27LhfGO4reLr.G9ft1Dqhye',
                'login_count' => 167,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'W2nQtFsj0iwfqXnB3y9Qt1qZvDg5oGruNzuJuZrh5QLuUvLzTsTtBQG3YkF0',
                'last_login' => '2022-06-06 15:55:34',
                'last_logout' => '2018-03-20 15:30:31',
                'active' => '1',
                'ip' => '192.168.61.37',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-08 08:48:31',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            1 => 
            array (
                'id' => 9,
                'people_id' => 5,
                'lastname' => 'ទូច',
                'firstname' => 'ធារិទ្ធិ',
                'phone' => '011888158',
                'username' => 'tearith_touch@yahoo.com',
                'email' => 'tearith_touch@yahoo.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$sVLG6FM1G36VCHbtjE6Ab.OmoFgghQ2GxZyAe8QgPy/9/Sa1Z54Fi',
                'login_count' => 111,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'Zt4IpGNkh3Vdntt0qSD6XrqKCFfEW3iw4x2eEONf8NWvf6xhXbxQ0ngbZHw3',
                'last_login' => '2023-04-28 15:45:46',
                'last_logout' => '2019-06-10 19:01:23',
                'active' => '1',
                'ip' => '192.168.52.113',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-08 08:52:14',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            2 => 
            array (
                'id' => 1,
                'people_id' => 3,
                'lastname' => 'OUM',
                'firstname' => 'Chamroeun',
                'phone' => '012557200',
                'username' => 'chamroeunoum',
                'email' => 'chamroeunoum@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$/0mbQhggaIV7qpp.vfSbbu4ffpN5zPEV..e1GjrTnfqivbbvKOR7m',
                'login_count' => NULL,
                'avatar_url' => NULL,
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => NULL,
                'last_login' => NULL,
                'last_logout' => NULL,
                'active' => '1',
                'ip' => NULL,
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2023-09-10 06:44:28',
                'updated_at' => '2023-09-13 14:59:07',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            3 => 
            array (
                'id' => 10,
                'people_id' => 6,
                'lastname' => 'ញ៉ែម',
                'firstname' => 'ម៉ាណេត',
                'phone' => '017300200',
                'username' => 'nmaneth@gmail.com',
                'email' => 'nmaneth@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$Ffz/FzxRYVjrHx2JKawc1ue1JyBvA5Nm52FIVAf1eeeRWvBm2XqHu',
                'login_count' => 48,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'oHY4yvMQyjJFNKkyPTGK2VMthim3j1XxD4cxeq6W2n9sS03x2xFB71yDOHL8',
                'last_login' => '2022-06-01 10:00:46',
                'last_logout' => '2020-01-06 17:12:05',
                'active' => '1',
                'ip' => '192.168.61.113',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-08 08:55:48',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            4 => 
            array (
                'id' => 11,
                'people_id' => 7,
                'lastname' => 'រស់',
                'firstname' => 'រតនា',
                'phone' => '089 709 666',
                'username' => 'ratanaros@gmail.com',
                'email' => 'ratanaros@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$Vk9v.MBVPgRCqhgrqijTmuD3BZnp4f6SJO3IIQ2ucPJ8rgwik1sxO',
                'login_count' => 170,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'W1tfUXbI3SuU5F9WF5s2s6e5hf4woFsRYX7hckc6jABoW2lLbksAX507zkGG',
                'last_login' => '2023-06-28 19:21:32',
                'last_logout' => '2019-12-05 10:13:51',
                'active' => '1',
                'ip' => '192.168.61.44',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-08 12:20:06',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            5 => 
            array (
                'id' => 14,
                'people_id' => 8,
                'lastname' => 'ហេង',
                'firstname' => 'នីវ៉ាដូ',
                'phone' => '076 6666449',
                'username' => 'vadocm@yahoo.com',
                'email' => 'vadocm@yahoo.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$tHD8UiYwr0yAviuxYDPPzuwNwR8xnFi3bA68H1hhX3nj7237eRVl.',
                'login_count' => 20,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'uZWxEK8MV46rnfzmJBKGRhp0Hl5wWYTg4AoFesOtznbpkJG4Fi9AyyrEWzN1',
                'last_login' => '2018-12-05 11:26:44',
                'last_logout' => '2018-12-05 10:11:08',
                'active' => '1',
                'ip' => '192.168.71.26',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-24 09:37:11',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            6 => 
            array (
                'id' => 18,
                'people_id' => 9,
                'lastname' => 'រិន',
                'firstname' => 'រដ្ឋា',
                'phone' => NULL,
                'username' => NULL,
                'email' => 'ratha.thk@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$lTWH2qVRzIaGkziV8EZjnuIAV1e/b409S0IIsIMA2j620sCKGS.y2',
                'login_count' => 25,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'Q4ORKLjjwAflkaosS7CPlkZbMkOf9Z5h6kcw7Pvssu1klFJm8UFyDDVBGw6N',
                'last_login' => '2023-06-15 10:52:39',
                'last_logout' => '2023-05-23 15:37:35',
                'active' => '1',
                'ip' => '192.168.62.3',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2019-01-23 10:25:33',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            7 => 
            array (
                'id' => 19,
                'people_id' => 10,
                'lastname' => 'សុទ្ធ',
                'firstname' => 'ធី',
                'phone' => '0964377155',
                'username' => NULL,
                'email' => 'sothynla@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$GiUDoBRD6ItCOGYj3ARQH.NYktLlng.KJA69Fq0jJo2JKpCkNhSMG',
                'login_count' => 123,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'M4LyKzfb5LZQt1LZKaEUiltu0G5rGGhxYKNGM1kxLUNnCVMOv8wwpxHokGG4',
                'last_login' => '2023-09-05 09:11:09',
                'last_logout' => '2019-09-12 08:51:14',
                'active' => '1',
                'ip' => '192.168.31.118',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2019-01-31 08:22:40',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            8 => 
            array (
                'id' => 21,
                'people_id' => 11,
                'lastname' => 'ហ៊ី',
                'firstname' => 'រដ្ឋា',
                'phone' => NULL,
                'username' => NULL,
                'email' => 'rathahy@yahoo.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$wL555zE05QEMvoVAi3oj1uWs1oi5mJbLUJbLfsWsh6CdzGdo49Moi',
                'login_count' => 6,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'AWtyyViEEgAbOr9PaDfjxT5WuqUKnhYNqFhj5s6xve2XRmkjrPAFE9m7WGtu',
                'last_login' => '2020-08-26 10:05:13',
                'last_logout' => '2020-08-06 15:12:26',
                'active' => '1',
                'ip' => '192.168.62.98',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2019-01-31 08:27:37',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            9 => 
            array (
                'id' => 22,
                'people_id' => 12,
                'lastname' => 'មុតខ្វាន់',
                'firstname' => 'សំអាតវាសនា',
                'phone' => '093777032',
                'username' => NULL,
                'email' => 'veasnamut1@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$WkjpRwnSLNxWP/yTqHBUguzNJLc44a7.Awluz6lMiyomXyPOu88Bu',
                'login_count' => 207,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'KkqHSpmH0P7R4sVw4YpPar9WMGVNASx1cpcfyb8AUPIsvaQHCZYN136R0y84',
                'last_login' => '2023-09-06 09:34:35',
                'last_logout' => '2019-03-14 09:28:45',
                'active' => '1',
                'ip' => '192.168.62.93',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2019-01-31 08:34:23',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            10 => 
            array (
                'id' => 24,
                'people_id' => 13,
                'lastname' => 'គុណ',
                'firstname' => 'ពេជ្រយ៉ាតសេន',
                'phone' => '077866889',
                'username' => NULL,
                'email' => 'pechyathsen_kun@yahoo.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$LtuODdrrI2KFN2HpeF2ZpuDXVItG.TmwgwQnv3LIgTPzFoGUZFUfO',
                'login_count' => 3,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'U5s6crGSBfH5DqrdgiFPnjvLG4IqlIGyuyuWJjHySk2kW852kc2zhqCTEMEg',
                'last_login' => '2019-06-10 14:40:56',
                'last_logout' => '2019-06-10 14:35:54',
                'active' => '1',
                'ip' => '10.10.11.86',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2019-06-10 14:34:57',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            11 => 
            array (
                'id' => 27,
                'people_id' => 14,
                'lastname' => 'uk',
                'firstname' => 'chamnan',
                'phone' => '012999999',
                'username' => NULL,
                'email' => 'ukchamnan007@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$BkkOto6My9raqkG8TpwxtecEd0qpJ..6bHOe1PR/.aKcFMMuqKNKW',
                'login_count' => 4,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'KPEcEhYyI1glcTUV28rDs0vxntrmbisyvHDuHwfGFUnLHjYtMLT5LHCp3lyb',
                'last_login' => '2020-06-15 09:12:04',
                'last_logout' => '2020-03-02 09:44:53',
                'active' => '1',
                'ip' => '10.10.11.105',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2019-08-26 16:45:29',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            12 => 
            array (
                'id' => 28,
                'people_id' => 15,
                'lastname' => 'song',
                'firstname' => 'sothun',
                'phone' => '016870818',
                'username' => NULL,
                'email' => 'songsothun@yahoo.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$Sa0Z0X15VVPg4qihKLl2ruc7P85hByL1x7o03.wawRXl16OPje3I6',
                'login_count' => 119,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'RRe0vBsqRYIT9ZqT2OaVMPGriBxADzz1YMgnUMyCyu8e7JsR4xinYarhdvv6',
                'last_login' => '2023-09-08 10:59:34',
                'last_logout' => '2023-08-30 20:34:22',
                'active' => '1',
                'ip' => '192.168.52.41',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2019-08-26 16:47:11',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            13 => 
            array (
                'id' => 30,
                'people_id' => 16,
                'lastname' => 'យោង',
                'firstname' => 'ចាន់អេណា',
                'phone' => NULL,
                'username' => NULL,
                'email' => 'enayaung@yahoo.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$YfSMhuHbZn1oezbOc1jqvuwCvX/VazPQgtkPJL7RwGrAm8HVgzmmG',
                'login_count' => 18,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'R3ReqfA3NkOVDWb5XQaM07HWsqf0LiQt5DaZgQEGKkq47hWlMvuRJ6PmV8zT',
                'last_login' => '2023-08-28 11:05:53',
                'last_logout' => '2020-08-05 10:58:53',
                'active' => '1',
                'ip' => '192.168.31.19',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2020-08-05 10:55:09',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            14 => 
            array (
                'id' => 31,
                'people_id' => 17,
                'lastname' => 'អ៊ី',
                'firstname' => 'សុខុន',
                'phone' => '012997027',
                'username' => NULL,
                'email' => 'isokhon@yahoo.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$HA5eG7AbCEj5WXOgNEqe8Oj8kqXhs9tT/XXrKjC7/pTshsd.mSS1K',
                'login_count' => 4,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'Fc9LfRrkpsReSREXBI7LHgeAVAn41CklPddZq5pzzNyy1shpMcZAMGhWqFYq',
                'last_login' => '2023-09-05 11:38:59',
                'last_logout' => '2020-08-06 11:34:29',
                'active' => '1',
                'ip' => '192.168.71.66',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2020-08-06 11:23:00',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            15 => 
            array (
                'id' => 32,
                'people_id' => 18,
                'lastname' => 'soth',
                'firstname' => 'vanra',
                'phone' => NULL,
                'username' => 'sothvaran@gmail.com',
                'email' => 'sothvaran@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$5vQRsfFDPJVZ/XTTQM66nOgsp8KFyWtoKmQuwbt96taHv7CZhq8rG',
                'login_count' => 1,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'gSEyiTQsPiQye9pFp0qxAkjJMUVMn9Ed9VxF7ErQw3ETZx9MpYaQtYKQt2UT',
                'last_login' => '2023-05-29 14:56:35',
                'last_logout' => '2023-05-29 15:25:06',
                'active' => '1',
                'ip' => '192.168.52.96',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2023-05-29 14:56:35',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            16 => 
            array (
                'id' => 33,
                'people_id' => 19,
                'lastname' => 'គង់',
                'firstname' => 'វុទ្ធី',
                'phone' => '077376376',
                'username' => NULL,
                'email' => 'vuthykong03@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$cuoYIVARl5EKj9wTaxQ6U.rB0LvHb1Gp9OGER9hmSt3skWqBKSHpu',
                'login_count' => 6,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'FpRrtooisl8nkSVKfY8uRpLhnqrLbKdrFUDsDQ56QCWbL4MzyEZ9IlcDOnwg',
                'last_login' => '2023-08-30 17:52:49',
                'last_logout' => '2023-08-29 09:37:50',
                'active' => '1',
                'ip' => '192.168.71.88',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2023-08-29 09:29:47',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            17 => 
            array (
                'id' => 34,
                'people_id' => 20,
                'lastname' => 'ស៊ន',
                'firstname' => 'ប៉ាថ្លាវី',
                'phone' => '095968008',
                'username' => NULL,
                'email' => 'sornpathlavy@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$S2br6j3T833Skp6ObjKM2edRfIGnoYpuS3lS1mYdf7LP3VMBW3eHe',
                'login_count' => 10,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => '3PjvzmEBcdnKjXQH5ThE3K7BJxfcJtyOoKsfolaE6L6vYraq8JiHVApTFQFe',
                'last_login' => '2023-09-06 12:14:10',
                'last_logout' => '2023-08-29 09:59:05',
                'active' => '1',
                'ip' => '192.168.71.126',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2023-08-29 09:34:27',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            18 => 
            array (
                'id' => 35,
                'people_id' => 21,
                'lastname' => 'អ៊ុច',
                'firstname' => 'និពន្ធ',
                'phone' => '011755069',
                'username' => NULL,
                'email' => 'ouchnipon@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$ptD62nuJ6SfZqnYMDVJgdOFpZQQiwc8lyyzw9Zm.MJYQoC/ukqWpy',
                'login_count' => 3,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => NULL,
                'last_login' => '2023-08-30 18:16:04',
                'last_logout' => NULL,
                'active' => '1',
                'ip' => '192.168.71.91',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2023-08-29 09:45:43',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            19 => 
            array (
                'id' => 36,
                'people_id' => 22,
                'lastname' => 'ឌុំ',
                'firstname' => 'ផាន់ណា',
                'phone' => '011375523',
                'username' => NULL,
                'email' => 'phanna@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$3G1mTRuLOv8p/tdhBd4XRO0.IF8UotKTynso8ZLLVq7IlyWw8qm1O',
                'login_count' => 12,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'HO4BgbKXkhX0I5fBhjb44oYShyJgcKaz51E828i2Mdr6p9EjuOwwUWFcgsA1',
                'last_login' => '2023-09-07 08:58:30',
                'last_logout' => NULL,
                'active' => '1',
                'ip' => '192.168.62.8',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2023-08-29 12:16:26',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            20 => 
            array (
                'id' => 7,
                'people_id' => 3,
                'lastname' => 'ណែត',
                'firstname' => 'ប៊ុនឈាង',
                'phone' => '081333609',
                'username' => 'nethbunchheang@gmail.com',
                'email' => 'nethbunchheang@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$0HSJO01LC340xTrVNkmmrOoYn9IL5s15EMjI9lcFHhUu36j2b07/e',
                'login_count' => 326,
                'avatar_url' => '',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'vEtFbpe6ukNvSabWp63Z2lHNhXIzLn9nmXgiY4N2S6jPnyg998rdBlPgzcQ0',
                'last_login' => '2023-08-31 09:38:21',
                'last_logout' => '2023-08-31 09:41:45',
                'active' => '1',
                'ip' => '192.168.62.122',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-02 10:50:01',
                'updated_at' => '2023-09-13 15:04:55',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            21 => 
            array (
                'id' => 38,
                'people_id' => 0,
                'lastname' => 'ម៉ៅ',
                'firstname' => 'វណ្ណរ៉ា',
                'phone' => '1234567890',
                'username' => 'mao_vannara',
                'email' => 'mao_vannara@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$aSOuueEzYTLuuVnsPmDAVOHTRuv0oxAZl0WBVps2zuJu3rx66HmMS',
                'login_count' => NULL,
                'avatar_url' => NULL,
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => NULL,
                'last_login' => NULL,
                'last_logout' => NULL,
                'active' => '1',
                'ip' => NULL,
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2023-09-20 07:26:29',
                'updated_at' => '2023-09-20 07:26:29',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            22 => 
            array (
                'id' => 5,
                'people_id' => 23,
                'lastname' => 'ធឿន',
                'firstname' => 'វណ្ណៈ',
                'phone' => NULL,
                'username' => 'vannak',
                'email' => 'vannak@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$JvBuzycqlB.nN46njf6nh.VAZE4Pu0/9Z8m5MRQlkLd6xMltfEQ7G',
                'login_count' => 1199,
                'avatar_url' => 'avatars/5/hrVQsErhJu7UGOxtVGHNRgS1jW8YWroxb5ibcTzj.jpg',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => 'D4B64mKvvlEyQWqfkdntWEecl2a4PcfJUagbALBLvtCyybBstyRszJWS56t4',
                'last_login' => '2023-09-07 14:14:31',
                'last_logout' => '2023-08-31 08:30:07',
                'active' => '1',
                'ip' => '192.168.62.27',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-07-27 11:19:37',
                'updated_at' => '2023-09-20 07:28:09',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            23 => 
            array (
                'id' => 2,
                'people_id' => 25,
                'lastname' => 'KONGCHAN',
                'firstname' => 'Puthireach',
                'phone' => '010517515',
                'username' => 'kcputhireach',
                'email' => 'kongchanputhireach@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$PScRQoEgvlh8R3TADsAk4ehimA2sGkz4Yjat.C20.u/IU7/fvYXBK',
                'login_count' => NULL,
                'avatar_url' => 'avatars/2/FbxipcCP5GUVVpWAtGNSZkNfZr8HtlWp659NJ1fk.jpg',
                'avatar' => NULL,
                'activation_token' => NULL,
                'forgot_password_token' => NULL,
                'remember_token' => NULL,
                'last_login' => NULL,
                'last_logout' => NULL,
                'active' => '1',
                'ip' => NULL,
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2023-09-10 06:44:28',
                'updated_at' => '2023-10-04 14:48:37',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            24 => 
            array (
                'id' => 40,
                'people_id' => 25,
                'lastname' => 'អ៊ុំ',
                'firstname' => 'ចំរើន',
                'phone' => '011553636',
                'username' => 'ictocm@gmail.com',
                'email' => 'ictocm@gmail.com',
                'role' => '0',
                'email_verified_at' => '',
                'password' => '$2y$10$H/0Dh0gKB1n.TjngDUweHOKXW6zw0sW3QRhJAHPM9MNcePy3mjtti',
                'login_count' => NULL,
                'avatar_url' => 'avatars/40/fAtHyNK9pQpJZAqgxqX4axF4lGwkt3rD7V0wvZjj.png',
                'avatar' => NULL,
                'activation_token' => '',
                'forgot_password_token' => '',
                'remember_token' => NULL,
                'last_login' => NULL,
                'last_logout' => NULL,
                'active' => '1',
                'ip' => NULL,
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2023-09-22 03:41:38',
                'updated_at' => '2023-09-22 03:49:43',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
        ));
        
        
    }
}