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
                'id' => 1,
                'people_id' => 1,
                'lastname' => 'អ៊ុំ',
                'firstname' => 'ចំរើន',
                'phone' => '012 557200',
                'username' => 'chamroeunoum@gmail.com',
                'email' => 'chamroeunoum@gmail.com',
                'password' => '$2y$10$ihDMxKLuuKHPlIrydxkaCenvLeTaGWjtkznGaAxZw5DsraXmMoAVi',
                'remember_token' => 'VlYlZNzQkoFu2HQaVd490lSxKdT9keBXr0CQj23rsZT2m29cQsDt8v8ck3nY',
                'login_count' => 192,
                'last_login' => '2019-02-06 08:22:21',
                'last_logout' => '2019-01-31 08:22:44',
                'active' => '1',
                'ip' => '192.168.62.14',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => 'uploads/profiles/c4692c85d696b6428dbf9365bc76a91d.jpg',
                'created_at' => '2017-07-27 10:38:26',
                'updated_at' => '2019-02-06 08:22:21',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'people_id' => 0,
                'lastname' => 'សយ',
                'firstname' => 'សុខា',
                'phone' => '012 345678',
                'username' => 'saysoka',
                'email' => 'saysokha@gmail.com',
                'password' => '$2y$10$j/zUVcaXW.z5B4.nkRP8Gu7FlsE9ZFcuiw3uPlgvUi5h56D907otm',
                'remember_token' => 'OGkWRtKCZGHxe7LbM6wlJUFlgXBdYkmSAqUZleUYz96D047gr8Xr0lEz1cOI',
                'login_count' => 22,
                'last_login' => '2018-03-23 09:08:12',
                'last_logout' => '2018-03-23 09:26:57',
                'active' => '1',
                'ip' => '10.10.11.120',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-07-27 10:50:02',
                'updated_at' => '2018-03-23 09:26:57',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'people_id' => 0,
                'lastname' => 'សង់',
                'firstname' => 'ស៊ីណាវ៉ុង',
                'phone' => '012 525225',
                'username' => 'ssinawong',
                'email' => 'ssinawong@gmail.com',
                'password' => '$2y$10$ocD4J10TLYYLam8RTOVnlOsJRVgB78F2Q81VbWDpGsxkfSr1AoRtG',
                'remember_token' => 'UBqE98Dt2PvbzLuRnvjJjFTmRrq1PhgGHbm1Tfe0neZzpgbgEkvkIQvrAhz1',
                'login_count' => 94,
                'last_login' => '2018-06-06 16:22:36',
                'last_logout' => '2018-06-06 16:27:17',
                'active' => '8',
                'ip' => '10.10.11.107',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-07-27 10:53:09',
                'updated_at' => '2019-01-31 08:19:11',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'people_id' => 0,
                'lastname' => 'គង់ចាន់',
                'firstname' => 'ចំរើន',
                'phone' => '086274100',
                'username' => 'ictocm',
                'email' => 'ictocm@gmail.com',
                'password' => '$2y$10$7UmVq6YOl0dfcpAKvs1J/OL9wYX3sTIffohHc3V2A//mVeVM68A9W',
                'remember_token' => 'sHgEZFuUMHRsSzhUAUyEj4B5qR05CVzlP7NODOGlPWcA87DLCsOuwk8faxZI',
                'login_count' => 104,
                'last_login' => '2019-02-06 08:21:54',
                'last_logout' => '2019-02-06 08:22:02',
                'active' => '1',
                'ip' => '192.168.62.14',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-07-27 11:00:55',
                'updated_at' => '2019-02-06 08:22:02',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'people_id' => 0,
                'lastname' => 'ធឿន',
                'firstname' => 'វណ្ណៈ',
                'phone' => NULL,
                'username' => 'vannak',
                'email' => 'vannak@gmail.com',
                'password' => '$2y$10$JvBuzycqlB.nN46njf6nh.VAZE4Pu0/9Z8m5MRQlkLd6xMltfEQ7G',
                'remember_token' => 'rohrDF4xvtCVP4HrtI2Tg633mbORJIzXPDnsI87XvPJNK0JIMjxh8x5cgAZy',
                'login_count' => 436,
                'last_login' => '2019-02-26 14:44:34',
                'last_logout' => '2019-02-13 14:32:44',
                'active' => '1',
                'ip' => '192.168.62.17',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-07-27 11:19:37',
                'updated_at' => '2019-02-26 14:44:34',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'people_id' => 0,
                'lastname' => 'ចៅ',
                'firstname' => 'កំវ៉ាន់',
                'phone' => '092 565 792',
                'username' => 'chaokamvann',
                'email' => 'chaokamvann@gmail.com',
                'password' => '$2y$10$NpFFBUpSOECFQsKrC4bx0enXnFvocQQheQi9GhwcRpZnjhl1p3M.S',
                'remember_token' => 'oNnnGMrBI96OgJzmPDaK3lR5CncQ0yPbCL3xJufWT9GulPFnJMQxpVMSxq6a',
                'login_count' => 30,
                'last_login' => '2018-08-02 13:11:22',
                'last_logout' => '2018-08-02 13:16:00',
                'active' => '1',
                'ip' => '192.168.71.5',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-07-27 15:32:58',
                'updated_at' => '2018-08-02 13:16:00',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'people_id' => 0,
                'lastname' => 'ណែត',
                'firstname' => 'ប៊ុនឈាង',
                'phone' => '081333609',
                'username' => 'nethbunchheang@gmail.com',
                'email' => 'nethbunchheang@gmail.com',
                'password' => '$2y$10$0HSJO01LC340xTrVNkmmrOoYn9IL5s15EMjI9lcFHhUu36j2b07/e',
                'remember_token' => 'MHPK21S9ALNLlOS2SrDzBEZ7Za01gfa1dgS7qBmsd0s6PyRuzt801K3VkzIG',
                'login_count' => 202,
                'last_login' => '2019-02-20 11:56:26',
                'last_logout' => '2019-02-20 12:21:13',
                'active' => '1',
                'ip' => '192.168.62.2',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-02 10:50:01',
                'updated_at' => '2019-02-20 12:21:13',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'people_id' => 0,
                'lastname' => 'គី',
                'firstname' => 'គាងសេង',
                'phone' => '077788827',
                'username' => 'keangseng007@yahoo.com',
                'email' => 'keangseng007@yahoo.com',
                'password' => '$2y$10$tc/z5pebLMiRs2wcWj4upOhvRpBiBVxeXbBe8gVePYkXEfcfJtkG6',
                'remember_token' => 'W2nQtFsj0iwfqXnB3y9Qt1qZvDg5oGruNzuJuZrh5QLuUvLzTsTtBQG3YkF0',
                'login_count' => 69,
                'last_login' => '2019-02-12 14:09:03',
                'last_logout' => '2018-03-20 15:30:31',
                'active' => '1',
                'ip' => '192.168.62.74',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-08 08:48:31',
                'updated_at' => '2019-02-12 14:09:03',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'people_id' => 0,
                'lastname' => 'ទូច',
                'firstname' => 'ធារិទ្ធិ',
                'phone' => '011888158',
                'username' => 'tearith_touch@yahoo.com',
                'email' => 'tearith_touch@yahoo.com',
                'password' => '$2y$10$sVLG6FM1G36VCHbtjE6Ab.OmoFgghQ2GxZyAe8QgPy/9/Sa1Z54Fi',
                'remember_token' => 'kIvMvTTyL3ihffxJkFKvN9fUrHu5V8Q77wtns322Mny8zyPPW3KDxTEoLf3w',
                'login_count' => 17,
                'last_login' => '2019-02-20 11:34:30',
                'last_logout' => NULL,
                'active' => '1',
                'ip' => '192.168.52.4',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-08 08:52:14',
                'updated_at' => '2019-02-20 11:34:30',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'people_id' => 0,
                'lastname' => 'ញ៉ែម',
                'firstname' => 'ម៉ាណេត',
                'phone' => '017300200',
                'username' => 'nmaneth@gmail.com',
                'email' => 'nmaneth@gmail.com',
                'password' => '$2y$10$Ffz/FzxRYVjrHx2JKawc1ue1JyBvA5Nm52FIVAf1eeeRWvBm2XqHu',
                'remember_token' => 'yI2fAU5SzMRS6q1cAVflBXERttnolkYOilMnqADICTk2qhyKLcA0b9CLu4DT',
                'login_count' => 32,
                'last_login' => '2019-02-01 10:29:13',
                'last_logout' => '2019-02-01 10:31:37',
                'active' => '1',
                'ip' => '192.168.62.112',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-08 08:55:48',
                'updated_at' => '2019-02-01 10:31:37',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'people_id' => 0,
                'lastname' => 'រស់',
                'firstname' => 'រតនា',
                'phone' => '089 709 666',
                'username' => 'ratanaros@gmail.com',
                'email' => 'ratanaros@gmail.com',
                'password' => '$2y$10$Vk9v.MBVPgRCqhgrqijTmuD3BZnp4f6SJO3IIQ2ucPJ8rgwik1sxO',
                'remember_token' => 'QpmEzObRIVcvXPZqdzgMu70LytzXU830iWkbZW2vJBP6pREfvOAV5jb3shgO',
                'login_count' => 37,
                'last_login' => '2019-02-06 10:01:28',
                'last_logout' => '2019-01-23 15:37:43',
                'active' => '1',
                'ip' => '192.168.62.56',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-08 12:20:06',
                'updated_at' => '2019-02-06 10:01:28',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'people_id' => 0,
                'lastname' => 'គឺម',
                'firstname' => 'ម៉ារីយ៉ាន',
                'phone' => '092962505',
                'username' => 'k.maryan@yahoo.com',
                'email' => 'k.maryan@yahoo.com',
                'password' => '$2y$10$fDHLfaQycQFNuMxnMTuqjuq2RA.X4xC2gDH.SUXQy9aIzy.6xRhsO',
                'remember_token' => NULL,
                'login_count' => 65,
                'last_login' => '2019-01-09 18:10:38',
                'last_logout' => NULL,
                'active' => '1',
                'ip' => '192.168.52.8',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-08 12:23:57',
                'updated_at' => '2019-01-09 18:10:38',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'people_id' => 0,
                'lastname' => 'ម៉ាន់',
                'firstname' => 'កាលីន',
                'phone' => '085822209',
                'username' => 'mann.kalin@yahoo.com',
                'email' => 'mann.kalin@yahoo.com',
                'password' => '$2y$10$Q9cH4KFwKTBozSdWqTzH8eLlgNzkWLuVp/q/0y9ZQlVZEclALYuCK',
                'remember_token' => 'KmulUWLaqqASszaHZ0fqocwq065oR0FY10bsuA5TmmSUQhS8G8gKOAfdaEvD',
                'login_count' => 77,
                'last_login' => '2018-12-19 14:40:56',
                'last_logout' => '2018-02-27 17:12:33',
                'active' => '1',
                'ip' => '192.168.52.3',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-09 09:44:19',
                'updated_at' => '2018-12-19 14:40:56',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'people_id' => 0,
                'lastname' => 'ហេង',
                'firstname' => 'នីវ៉ាដូ',
                'phone' => '076 6666449',
                'username' => 'vadocm@yahoo.com',
                'email' => 'vadocm@yahoo.com',
                'password' => '$2y$10$tHD8UiYwr0yAviuxYDPPzuwNwR8xnFi3bA68H1hhX3nj7237eRVl.',
                'remember_token' => 'uZWxEK8MV46rnfzmJBKGRhp0Hl5wWYTg4AoFesOtznbpkJG4Fi9AyyrEWzN1',
                'login_count' => 20,
                'last_login' => '2018-12-05 11:26:44',
                'last_logout' => '2018-12-05 10:11:08',
                'active' => '1',
                'ip' => '192.168.71.26',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2017-08-24 09:37:11',
                'updated_at' => '2018-12-05 11:26:44',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'people_id' => 0,
                'lastname' => 'ទួន',
                'firstname' => 'ចាន់បញ្ញា',
                'phone' => '012937744',
                'username' => NULL,
                'email' => 'panha.nova@gmail.com',
                'password' => '$2y$10$m8JP.PziaVRYXpcuZdr5WO.G2ZAKDVoMKK7SauTPzYV5PHe0m.szC',
                'remember_token' => 'NyKNAaNWT0M5aC2k0LDYhUIBgiqSRF9JATdyIZ24F4IWHDisTTng2gIW9NkG',
                'login_count' => 13,
                'last_login' => '2018-11-26 16:57:16',
                'last_logout' => '2018-03-16 09:49:54',
                'active' => '1',
                'ip' => '192.168.52.9',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2018-03-16 09:48:45',
                'updated_at' => '2018-11-26 16:57:16',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'people_id' => 0,
                'lastname' => 'សង់',
                'firstname' => 'ស៊ីណាវ៉ុង',
                'phone' => '012525225',
                'username' => NULL,
                'email' => 'normal@gmail.com',
                'password' => '$2y$10$oEM6Tn6Hbx6xIhs4O12PHeU7rYbSZ6QlLkJBgZy75oRR9QKVhTbxO',
                'remember_token' => 'JHyLY8M5KyuT7PRQOTqo0xEnphurHDg7NAZplZrqgsG0vAa7oa4te5flrXiz',
                'login_count' => 21,
                'last_login' => '2018-06-04 09:54:51',
                'last_logout' => '2018-05-11 15:31:39',
                'active' => '8',
                'ip' => '192.168.71.17',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2018-03-19 08:27:49',
                'updated_at' => '2019-01-31 08:19:03',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'people_id' => 0,
                'lastname' => 'ទេស',
                'firstname' => 'សុខម៉េង',
                'phone' => '012937475',
                'username' => NULL,
                'email' => 'ocm.tessokmeng@gmail.com',
                'password' => '$2y$10$a1SwUP57.jl34SDXBMhY7e.jDpK/NHqoqFf9xOOt2GcV4J.AB0Fa6',
                'remember_token' => '7Lc1GRy8c5C5aaxK0J0yjHeDGUAEV9lL15nAoPrTI09uNpaJa7JMSfzVQYiw',
                'login_count' => 22,
                'last_login' => '2018-03-27 11:15:32',
                'last_logout' => '2018-03-27 11:15:43',
                'active' => '1',
                'ip' => '10.10.11.120',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => 'uploads/profiles/747bc4316d67781d804940888d7d4ac9.jpg',
                'created_at' => '2018-03-20 08:38:40',
                'updated_at' => '2018-03-27 11:15:43',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'people_id' => 0,
                'lastname' => 'រិន',
                'firstname' => 'រដ្ឋា',
                'phone' => NULL,
                'username' => NULL,
                'email' => 'ratha.thk@gmail.com',
                'password' => '$2y$10$lTWH2qVRzIaGkziV8EZjnuIAV1e/b409S0IIsIMA2j620sCKGS.y2',
                'remember_token' => 'eT280fXe3QWbWNekQPvyer5Ng1oreJ1NHcEJpQmnxCb2eNAaC61ey6hNfNWO',
                'login_count' => 1,
                'last_login' => '2019-01-23 10:26:22',
                'last_logout' => '2019-01-23 10:26:59',
                'active' => '1',
                'ip' => '192.168.62.2',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2019-01-23 10:25:33',
                'updated_at' => '2019-01-23 10:26:59',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'people_id' => 0,
                'lastname' => 'សុទ្ធ',
                'firstname' => 'ធី',
                'phone' => '0964377155',
                'username' => NULL,
                'email' => 'sothynla@gmail.com',
                'password' => '$2y$10$UNUVchqmKijlZ7eByCSYI.rzdtifJIRPBc2YeByXhHb/BZETriYBW',
                'remember_token' => 'STLySZqTGmmBfnOUrY7IeflLR63uO2ABgZ7j9TMvT6kcws1WWtRrHjiufjXO',
                'login_count' => 24,
                'last_login' => '2019-02-26 15:54:17',
                'last_logout' => '2019-02-05 14:46:56',
                'active' => '1',
                'ip' => '10.10.11.100',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2019-01-31 08:22:40',
                'updated_at' => '2019-02-26 15:54:17',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'people_id' => 0,
                'lastname' => 'Thoeun',
                'firstname' => 'Leehao',
                'phone' => '089538585',
                'username' => NULL,
                'email' => 'leeheo@gmail.com',
                'password' => '$2y$10$YSbh7JqmuLVQPbypPutjNOIPilWfjKpkHfUPNN/Q7eu3bcPu666my',
                'remember_token' => 'EWIhbhGmhlBgz69TndXlpGcv7GiegavpzliOrOngeffKaaoEmPRnzfaBjBQ0',
                'login_count' => 4,
                'last_login' => '2019-01-31 08:33:05',
                'last_logout' => '2019-01-31 08:36:00',
                'active' => '1',
                'ip' => '192.168.62.17',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2019-01-31 08:25:47',
                'updated_at' => '2019-01-31 08:36:00',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'people_id' => 0,
                'lastname' => 'ហ៊ី',
                'firstname' => 'រដ្ឋា',
                'phone' => NULL,
                'username' => NULL,
                'email' => 'rathahy@yahoo.com',
                'password' => '$2y$10$KDt1um/vl6ppsVWoMEX2EeQlkmemLAGa83C4cUW6A5tE064OWo1ky',
                'remember_token' => 'IudPTdf6KhihURCajU43qwc0b2kmyK7W3zsFIgJ5CvSMVWFjULpPThOzfcST',
                'login_count' => 1,
                'last_login' => '2019-01-31 08:29:16',
                'last_logout' => '2019-01-31 08:30:44',
                'active' => '1',
                'ip' => '192.168.62.2',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2019-01-31 08:27:37',
                'updated_at' => '2019-01-31 08:30:44',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'people_id' => 0,
                'lastname' => 'មុតខ្វាន់',
                'firstname' => 'សំអាតវាសនា',
                'phone' => NULL,
                'username' => NULL,
                'email' => 'veasnamut1@gmail.com',
                'password' => '$2y$10$tYIW.5WPnFQ1eSvRbfJRaOZJfPG3l3yF8gweshqGydIxXQrOiWm5u',
                'remember_token' => '9kK9cVoaojsrSnokJ6DTHF1u2ggXEgyTH2mrmKZ4I5HVprL0kPInXCz1FZTz',
                'login_count' => 1,
                'last_login' => '2019-01-31 08:34:51',
                'last_logout' => '2019-01-31 08:35:06',
                'active' => '1',
                'ip' => '192.168.62.2',
                'authenip' => NULL,
                'mac_address' => NULL,
                'image' => NULL,
                'created_at' => '2019-01-31 08:34:23',
                'updated_at' => '2019-01-31 08:35:06',
                'deleted_at' => NULL,
                'api_token' => NULL,
            ),
        ));
        
        
    }
}