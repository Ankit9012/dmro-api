<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DelhiMetroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //     line
    // latitude
    // longitude,
    public function run(): void
    {
        $data = [
            [
                'stationName' => 'AIIMS',
                'line' => 'AIIMS',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Adarsh Nagar',
                'line' => 'Adarsh Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Airport',
                'line' => 'Airport',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Akshardham',
                'line' => 'Akshardham',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Alpha 1',
                'line' => 'Alpha 1',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Anand Vihar',
                'line' => 'Anand Vihar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Arjan Garh',
                'line' => 'Arjan Garh',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Arthala',
                'line' => 'Arthala',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Ashok Park Main',
                'line' => 'Ashok Park Main',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Ashram',
                'line' => 'Ashram',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Azadpur',
                'line' => 'Azadpur',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Badarpur',
                'line' => 'Badarpur',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Badkhal Mor',
                'line' => 'Badkhal Mor',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Bahadurgarh City',
                'line' => 'Bahadurgarh City',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Barakhambha Road',
                'line' => 'Barakhambha Road',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Bata Chowk',
                'line' => 'Bata Chowk',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Bhikaji Cama Place',
                'line' => 'Bhikaji Cama Place',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Botanical Garden',
                'line' => 'Botanical Garden',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Brigadier Hoshiyar Singh',
                'line' => 'Brigadier Hoshiyar Singh',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Central Secretariat',
                'line' => 'Central Secretariat',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Chandni Chowk',
                'line' => 'Chandni Chowk',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Chawri Bazar',
                'line' => 'Chawri Bazar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Chhatarpur',
                'line' => 'Chhatarpur',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Chirag Delhi',
                'line' => 'Chirag Delhi',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Civil Lines',
                'line' => 'Civil Lines',
                'latitude' => '',
                'longitude' => ''
            ],
            [,

                'stationName' => 'Dabri Mor-Janakpuri South',
                'line' => 'Dabri Mor-Janakpuri South',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dashrath Puri',
                'line' => 'Dashrath Puri',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Delhi Aerocity',
                'line' => 'Delhi Aerocity',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Delhi Cantonment',
                'line' => 'Delhi Cantonment',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Delhi Gate',
                'line' => 'Delhi Gate',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Delta 1',
                'line' => 'Delta 1',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Depot',
                'line' => 'Depot',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dhaula Kuan',
                'line' => 'Dhaula Kuan',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dilshad Garden',
                'line' => 'Dilshad Garden',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Durgabai Deshmukh South Campus',
                'line' => 'Durgabai Deshmukh South Campus',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dwarka',
                'line' => 'Dwarka',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dwarka Mor',
                'line' => 'Dwarka Mor',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dwarka Sector 10',
                'line' => 'Dwarka Sector 10',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dwarka Sector 11',
                'line' => 'Dwarka Sector 11',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dwarka Sector 12',
                'line' => 'Dwarka Sector 12',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dwarka Sector 13',
                'line' => 'Dwarka Sector 13',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dwarka Sector 14',
                'line' => 'Dwarka Sector 14',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dwarka Sector 21',
                'line' => 'Dwarka Sector 21',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dwarka Sector 8',
                'line' => 'Dwarka Sector 8',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Dwarka Sector 9',
                'line' => 'Dwarka Sector 9',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'ESI Hospital',
                'line' => 'ESI Hospital',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'East Azad Nagar',
                'line' => 'East Azad Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'East Vinod Nagar - Mayur Vihar-II',
                'line' => 'East Vinod Nagar - Mayur Vihar-II',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Escorts Mujesar',
                'line' => 'Escorts Mujesar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Faridabad Old',
                'line' => 'Faridabad Old',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'GNIDA Office',
                'line' => 'GNIDA Office',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'GTB Nagar',
                'line' => 'GTB Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Ghevra Metro station',
                'line' => 'Ghevra Metro station',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Ghitorni',
                'line' => 'Ghitorni',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Gokulpuri',
                'line' => 'Gokulpuri',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Golf Course',
                'line' => 'Golf Course',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Govind Puri',
                'line' => 'Govind Puri',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Greater Kailash',
                'line' => 'Greater Kailash',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Green Park',
                'line' => 'Green Park',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Guru Dronacharya',
                'line' => 'Guru Dronacharya',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'HUDA City Centre',
                'line' => 'HUDA City Centre',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Haiderpur',
                'line' => 'Haiderpur',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Harkesh Nagar',
                'line' => 'Harkesh Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Hauz Khas',
                'line' => 'Hauz Khas',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Hazrat Nizamuddin',
                'line' => 'Hazrat Nizamuddin',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Hindon',
                'line' => 'Hindon',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'IFFCO Chowk',
                'line' => 'IFFCO Chowk',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'IIT Delhi',
                'line' => 'IIT Delhi',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'INA',
                'line' => 'INA',,
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'IP Extension',
                'line' => 'IP Extension',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'ITO',
                'line' => 'ITO',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Inderlok',
                'line' => 'Inderlok',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Indraprastha',
                'line' => 'Indraprastha',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'IndusInd Bank Cyber City',
                'line' => 'IndusInd Bank Cyber City',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Jaffrabad',
                'line' => 'Jaffrabad',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Jahangirpuri',
                'line' => 'Jahangirpuri',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Jama Masjid',
                'line' => 'Jama Masjid',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Jamia Millia Islamia',
                'line' => 'Jamia Millia Islamia',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Janakpuri East',
                'line' => 'Janakpuri East',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Janakpuri West',
                'line' => 'Janakpuri West',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Jangpura',
                'line' => 'Jangpura',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Janpath',
                'line' => 'Janpath',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Jasola Apollo',
                'line' => 'Jasola Apollo',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Jasola Vihar Shaheen Bagh',
                'line' => 'Jasola Vihar Shaheen Bagh',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Jawaharlal Nehru Stadium',
                'line' => 'Jawaharlal Nehru Stadium',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Jhandewalan',
                'line' => 'Jhandewalan',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Jhilmil',
                'line' => 'Jhilmil',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Johri Enclave',
                'line' => 'Johri Enclave',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Jor Bagh',
                'line' => 'Jor Bagh',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Kailash Colony',
                'line' => 'Kailash Colony',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Kalindi Kunj',
                'line' => 'Kalindi Kunj',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Kalkaji Mandir',
                'line' => 'Kalkaji Mandir',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Kanhiya Nagar',
                'line' => 'Kanhiya Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Karkarduma',
                'line' => 'Karkarduma',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Karkarduma Court',
                'line' => 'Karkarduma Court',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Karol Bagh',
                'line' => 'Karol Bagh',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Kashmere Gate',
                'line' => 'Kashmere Gate',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Kaushambi',
                'line' => 'Kaushambi',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Keshav Puram',
                'line' => 'Keshav Puram',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Khan Market',
                'line' => 'Khan Market',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Kirti Nagar',
                'line' => 'Kirti Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Knowledge Park II',
                'line' => 'Knowledge Park II',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Kohat Enclave',
                'line' => 'Kohat Enclave',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Krishna Nagar',
                'line' => 'Krishna Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Lajpat Nagar',
                'line' => 'Lajpat Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Lal Qila',
                'line' => 'Lal Qila',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Laxmi Nagar',
                'line' => 'Laxmi Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Lok Kalyan Marg',
                'line' => 'Lok Kalyan Marg',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'MG Road',
                'line' => 'MG Road',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Madipur',
                'line' => 'Madipur',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Majlis Park',
                'line' => 'Majlis Park',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Major Mohit Sharma',
                'line' => 'Major Mohit Sharma',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Malviya Nagar',
                'line' => 'Malviya Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Mandawali - West Vinod Nagar',
                'line' => 'Mandawali - West Vinod Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Mandi House',
                'line' => 'Mandi House',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Mansarovar Park',
                'line' => 'Mansarovar Park',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Maujpur-Babarpur',
                'line' => 'Maujpur-Babarpur',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Mayapuri',
                'line' => 'Mayapuri',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Mayur Vihar - I',
                'line' => 'Mayur Vihar - I',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Mayur Vihar Extension',
                'line' => 'Mayur Vihar Extension',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Mayur Vihar Pocket I',
                'line' => 'Mayur Vihar Pocket I',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Mewala Maharajpur',
                'line' => 'Mewala Maharajpur',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Micromax Moulsari Avenue',
                'line' => 'Micromax Moulsari Avenue',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Model Town',
                'line' => 'Model Town',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Mohan Estate',
                'line' => 'Mohan Estate',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Mohan Nagar',
                'line' => 'Mohan Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Moolchand',
                'line' => 'Moolchand',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Moti Nagar',
                'line' => 'Moti Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Mundka',
                'line' => 'Mundka',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Mundka Industrial Area',
                'line' => 'Mundka Industrial Area',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Munirka',
                'line' => 'Munirka',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'NHPC Chowk',
                'line' => 'NHPC Chowk',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'NSEZ',
                'line' => 'NSEZ',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Najafgrah',
                'line' => 'Najafgrah',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Nangli',
                'line' => 'Nangli',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Nangloi',
                'line' => 'Nangloi',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Nangloi Railway station',
                'line' => 'Nangloi Railway station',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Naraina Vihar',
                'line' => 'Naraina Vihar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Nawada',
                'line' => 'Nawada',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Neelam Chowk Ajronda',
                'line' => 'Neelam Chowk Ajronda',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Nehru Enclave',
                'line' => 'Nehru Enclave',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Nehru Place',
                'line' => 'Nehru Place',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Netaji Subhash Place',
                'line' => 'Netaji Subhash Place',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'New Ashok Nagar',
                'line' => 'New Ashok Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'New Delhi',
                'line' => 'New Delhi',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Nirman Vihar',
                'line' => 'Nirman Vihar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida City Centre',
                'line' => 'Noida City Centre',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Electronic City',
                'line' => 'Noida Electronic City',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 101',
                'line' => 'Noida Sector 101',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 137',
                'line' => 'Noida Sector 137',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 142',
                'line' => 'Noida Sector 142',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 143',
                'line' => 'Noida Sector 143',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 144',
                'line' => 'Noida Sector 144',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 145',
                'line' => 'Noida Sector 145',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 146',
                'line' => 'Noida Sector 146',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 147',
                'line' => 'Noida Sector 147',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 148',
                'line' => 'Noida Sector 148',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 15',
                'line' => 'Noida Sector 15',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 16',
                'line' => 'Noida Sector 16',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 18',
                'line' => 'Noida Sector 18',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 34',
                'line' => 'Noida Sector 34',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 50',
                'line' => 'Noida Sector 50',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 51',
                'line' => 'Noida Sector 51',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 52',
                'line' => 'Noida Sector 52',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 59',
                'line' => 'Noida Sector 59',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 61',
                'line' => 'Noida Sector 61',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 62',
                'line' => 'Noida Sector 62',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 76',
                'line' => 'Noida Sector 76',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 81',
                'line' => 'Noida Sector 81',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Noida Sector 83',
                'line' => 'Noida Sector 83',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Okhla Bird Sanctuary',
                'line' => 'Okhla Bird Sanctuary',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Okhla NSIC',
                'line' => 'Okhla NSIC',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Okhla Vihar',
                'line' => 'Okhla Vihar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Palam',
                'line' => 'Palam',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Panchsheel Park',
                'line' => 'Panchsheel Park',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Pandit Shree Ram Sharma',
                'line' => 'Pandit Shree Ram Sharma',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Pari Chowk',
                'line' => 'Pari Chowk',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Paschim Vihar East',
                'line' => 'Paschim Vihar East',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Paschim Vihar West',
                'line' => 'Paschim Vihar West',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Patel Chowk',
                'line' => 'Patel Chowk',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Patel Nagar',
                'line' => 'Patel Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Peera Garhi',
                'line' => 'Peera Garhi',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Phase 1',
                'line' => 'Phase 1',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Phase 2',
                'line' => 'Phase 2',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Phase 3',
                'line' => 'Phase 3',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Pitam Pura',
                'line' => 'Pitam Pura',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Pragati Maidan',
                'line' => 'Pragati Maidan',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Pratap Nagar',
                'line' => 'Pratap Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Preet Vihar',
                'line' => 'Preet Vihar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Pul Bangash',
                'line' => 'Pul Bangash',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Punjabi Bagh',
                'line' => 'Punjabi Bagh',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Punjabi Bagh West',
                'line' => 'Punjabi Bagh West',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Qutub Minar',
                'line' => 'Qutub Minar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'R.K.Puram',
                'line' => 'R.K.Puram',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Raj Bagh',
                'line' => 'Raj Bagh',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Raja Nahar Singh',
                'line' => 'Raja Nahar Singh',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Rajdhani Park',
                'line' => 'Rajdhani Park',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Rajendra Place',
                'line' => 'Rajendra Place',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Rajiv Chowk',
                'line' => 'Rajiv Chowk',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Rajouri Garden',
                'line' => 'Rajouri Garden',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Ramakrishna Ashram Marg',
                'line' => 'Ramakrishna Ashram Marg',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Ramesh Nagar',
                'line' => 'Ramesh Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Rithala',
                'line' => 'Rithala',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Rohini East',
                'line' => 'Rohini East',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Rohini Sector 18',
                'line' => 'Rohini Sector 18',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Rohini West',
                'line' => 'Rohini West',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sadar Bazaar Cantonment',
                'line' => 'Sadar Bazaar Cantonment',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Saket',
                'line' => 'Saket',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Samaypur Badli',
                'line' => 'Samaypur Badli',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sant Surdas',
                'line' => 'Sant Surdas',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sarai',
                'line' => 'Sarai',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sarita Vihar',
                'line' => 'Sarita Vihar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sarojini Nagar',
                'line' => 'Sarojini Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Satguru Ram Singh Marg',
                'line' => 'Satguru Ram Singh Marg',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sector 28',
                'line' => 'Sector 28',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sector 42-43',
                'line' => 'Sector 42-43',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sector 53-54',
                'line' => 'Sector 53-54',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sector 54 Chowk',
                'line' => 'Sector 54 Chowk',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sector 55–56',
                'line' => 'Sector 55–56',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Seelampur',
                'line' => 'Seelampur',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shadipur',
                'line' => 'Shadipur',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shahdara',
                'line' => 'Shahdara',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shaheed Nagar',
                'line' => 'Shaheed Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shaheed Sthal',
                'line' => 'Shaheed Sthal',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shakurpur',
                'line' => 'Shakurpur',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shalimar Bagh',
                'line' => 'Shalimar Bagh',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shankar Vihar',
                'line' => 'Shankar Vihar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shastri Nagar',
                'line' => 'Shastri Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shastri Park',
                'line' => 'Shastri Park',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shiv Vihar',
                'line' => 'Shiv Vihar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shivaji Park',
                'line' => 'Shivaji Park',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shivaji Stadium',
                'line' => 'Shivaji Stadium',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Shyam park',
                'line' => 'Shyam park',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sikandarpur',
                'line' => 'Sikandarpur',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sir Vishweshwaraiah Moti Bagh',
                'line' => 'Sir Vishweshwaraiah Moti Bagh',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'South Extension',
                'line' => 'South Extension',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Subhash Nagar',
                'line' => 'Subhash Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sukhdev Vihar',
                'line' => 'Sukhdev Vihar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Sultanpur',
                'line' => 'Sultanpur',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Surajmal Stadium',
                'line' => 'Surajmal Stadium',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Tagore Garden',
                'line' => 'Tagore Garden',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Terminal 1-IGI Airport',
                'line' => 'Terminal 1-IGI Airport',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Tikri Border',
                'line' => 'Tikri Border',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Tikri Kalan',
                'line' => 'Tikri Kalan',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Tilak Nagar',
                'line' => 'Tilak Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Tis Hazari',
                'line' => 'Tis Hazari',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Trilokpuri Sanjay Lake',
                'line' => 'Trilokpuri Sanjay Lake',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Tughlakabad',
                'line' => 'Tughlakabad',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Udyog Bhawan',
                'line' => 'Udyog Bhawan',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Udyog Nagar',
                'line' => 'Udyog Nagar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Uttam Nagar East',
                'line' => 'Uttam Nagar East',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Uttam Nagar West',
                'line' => 'Uttam Nagar West',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Vaishali',
                'line' => 'Vaishali',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Vasant Vihar',
                'line' => 'Vasant Vihar',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Vidhan Sabha',
                'line' => 'Vidhan Sabha',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Vinobapuri',
                'line' => 'Vinobapuri',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Vishwa Vidyalaya',
                'line' => 'Vishwa Vidyalaya',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Vodafone Belvedere Towers',
                'line' => 'Vodafone Belvedere Towers',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Welcome',
                'line' => 'Welcome',
                'latitude' => '',
                'longitude' => ''
            ],
            [
                'stationName' => 'Yamuna Bank',
                'line' => 'Yamuna Bank',
                'latitude' => '',
                'longitude' => ''
            ]
        ];


        DB::table('station_names')->insert($data);
    }
}
