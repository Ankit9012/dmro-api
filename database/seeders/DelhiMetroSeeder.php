<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DelhiMetroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =
            [
                [
                    "stationName" => "Adarsh Nagar",
                    "line" => "Yellow Line",
                    "latitude" => 28.7144008,
                    "longitude" => 77.1672884
                ],
                [
                    "stationName" => "AIIMS",
                    "line" => "Yellow Line",
                    "latitude" => 28.5668602,
                    "longitude" => 77.2078058
                ],
                [
                    "stationName" => "Akshardham",
                    "line" => "Blue Line",
                    "latitude" => 28.61784195,
                    "longitude" => 77.2794881432539
                ],
                [
                    "stationName" => "Anand Vihar ISBT",
                    "line" => "Blue Line branch",
                    "latitude" => 28.6467533,
                    "longitude" => 77.3180037
                ],
                [
                    "stationName" => "Arjan Garh",
                    "line" => "Yellow Line",
                    "latitude" => 28.4807352,
                    "longitude" => 77.1257622
                ],
                [
                    "stationName" => "Arthala",
                    "line" => "Red Line",
                    "latitude" => 28.676999,
                    "longitude" => 77.3918919
                ],
                [
                    "stationName" => "Ashok Park Main",
                    "line" => "Green Line",
                    "latitude" => 28.6716045,
                    "longitude" => 77.155291
                ],
                [
                    "stationName" => "Ashram",
                    "line" => "Pink Line",
                    "latitude" => 28.5724231,
                    "longitude" => 77.2585979
                ],
                [
                    "stationName" => "Azadpur",
                    "line" => "Yellow Line",
                    "latitude" => 28.7076568,
                    "longitude" => 77.1755473
                ],
                [
                    "stationName" => "Badarpur Border",
                    "line" => "Violet Line",
                    "latitude" => 28.4904999,
                    "longitude" => 77.3040379
                ],
                [
                    "stationName" => "Badkhal Mor",
                    "line" => "Violet Line",
                    "latitude" => 0,
                    "longitude" => 0
                ],
                [
                    "stationName" => "Bahadurgarh City",
                    "line" => "Green Line",
                    "latitude" => 28.6907847,
                    "longitude" => 76.9354851
                ],
                [
                    "stationName" => "Barakhambha Road",
                    "line" => "Blue Line",
                    "latitude" => 28.6297676,
                    "longitude" => 77.2250046
                ],
                [
                    "stationName" => "Bata Chowk",
                    "line" => "Violet Line",
                    "latitude" => 28.3858361,
                    "longitude" => 77.313462
                ],
                [
                    "stationName" => "Bhikaji Cama Place",
                    "line" => "Pink Line",
                    "latitude" => 28.56790025,
                    "longitude" => 77.1870164835338
                ],
                [
                    "stationName" => "Botanical Garden",
                    "line" => "Blue Line",
                    "latitude" => 28.5638964,
                    "longitude" => 77.334332
                ],
                [
                    "stationName" => "Brigadier Hoshiyar Singh",
                    "line" => "Green Line",
                    "latitude" => 28.6974603,
                    "longitude" => 76.9192027
                ],
                [
                    "stationName" => "Central Secretariat",
                    "line" => "Yellow Line",
                    "latitude" => 28.6158794,
                    "longitude" => 77.2122822
                ],
                [
                    "stationName" => "Chandni Chowk",
                    "line" => "Yellow Line",
                    "latitude" => 28.6605039,
                    "longitude" => 77.2297797
                ],
                [
                    "stationName" => "Chawri Bazar",
                    "line" => "Yellow Line",
                    "latitude" => 28.6501605,
                    "longitude" => 77.2295008
                ],
                [
                    "stationName" => "Chhatarpur",
                    "line" => "Yellow Line",
                    "latitude" => 28.5067242,
                    "longitude" => 77.1750019
                ],
                [
                    "stationName" => "Chirag Delhi",
                    "line" => "Magenta Line",
                    "latitude" => 28.5381411,
                    "longitude" => 77.2280694
                ],
                [
                    "stationName" => "Civil Lines",
                    "line" => "Yellow Line",
                    "latitude" => 28.6768508,
                    "longitude" => 77.2250299
                ],
                [
                    "stationName" => "Dabri Mor-Janakpuri South",
                    "line" => "Magenta Line",
                    "latitude" => 28.6157555,
                    "longitude" => 77.085178
                ],
                [
                    "stationName" => "Dashrath Puri",
                    "line" => "Magenta Line",
                    "latitude" => 28.6018751,
                    "longitude" => 77.0823561
                ],
                [
                    "stationName" => "Delhi Aerocity",
                    "line" => "Orange Line",
                    "latitude" => 28.5487982,
                    "longitude" => 77.1208089
                ],
                [
                    "stationName" => "Delhi Cantonment",
                    "line" => "Pink Line",
                    "latitude" => 28.5938330999999,
                    "longitude" => 77.1349789145992
                ],
                [
                    "stationName" => "Delhi Gate",
                    "line" => "Violet Line",
                    "latitude" => 28.6392036,
                    "longitude" => 77.2407823
                ],
                [
                    "stationName" => "Dhaula Kuan",
                    "line" => "Orange Line",
                    "latitude" => 28.5918905,
                    "longitude" => 77.1617034
                ],
                [
                    "stationName" => "Dilshad Garden",
                    "line" => "Red Line",
                    "latitude" => 28.67588615,
                    "longitude" => 77.321439975866
                ],
                [
                    "stationName" => "Durgabai Deshmukh South Campus",
                    "line" => "Pink Line",
                    "latitude" => 28.5894384,
                    "longitude" => 77.1690817
                ],
                [
                    "stationName" => "Dwarka",
                    "line" => "Blue Line",
                    "latitude" => 28.5771915,
                    "longitude" => 77.0442935
                ],
                [
                    "stationName" => "Dwarka Mor",
                    "line" => "Blue Line",
                    "latitude" => 28.61931,
                    "longitude" => 77.0332792
                ],
                [
                    "stationName" => "Dwarka Sector 8",
                    "line" => "Blue Line",
                    "latitude" => 28.5656109,
                    "longitude" => 77.0670366
                ],
                [
                    "stationName" => "Dwarka Sector 9",
                    "line" => "Blue Line",
                    "latitude" => 28.574272,
                    "longitude" => 77.0653316
                ],
                [
                    "stationName" => "Dwarka Sector 10",
                    "line" => "Blue Line",
                    "latitude" => 28.5810577,
                    "longitude" => 77.0574996
                ],
                [
                    "stationName" => "Dwarka Sector 11",
                    "line" => "Blue Line",
                    "latitude" => 28.5864469,
                    "longitude" => 77.0494375
                ],
                [
                    "stationName" => "Dwarka Sector 12",
                    "line" => "Blue Line",
                    "latitude" => 28.5922362,
                    "longitude" => 77.0407315
                ],
                [
                    "stationName" => "Dwarka Sector 13",
                    "line" => "Blue Line",
                    "latitude" => 28.597009,
                    "longitude" => 77.0335407
                ],
                [
                    "stationName" => "Dwarka Sector 14",
                    "line" => "Blue Line",
                    "latitude" => 28.60225285,
                    "longitude" => 77.0259565649781
                ],
                [
                    "stationName" => "Dwarka Sector 21",
                    "line" => "Blue Line",
                    "latitude" => 28.5518376,
                    "longitude" => 77.0586489
                ],
                [
                    "stationName" => "East Azad Nagar",
                    "line" => "Pink Line",
                    "latitude" => 28.6646964,
                    "longitude" => 77.284881
                ],
                [
                    "stationName" => "East Vinod Nagar – Mayur Vihar-II",
                    "line" => "Pink Line",
                    "latitude" => 28.6200437,
                    "longitude" => 77.3054069
                ],
                [
                    "stationName" => "Escorts Mujesar",
                    "line" => "Violet Line",
                    "latitude" => 28.3702344,
                    "longitude" => 77.3149203
                ],
                [
                    "stationName" => "ESI Hospital",
                    "line" => "Pink Line",
                    "latitude" => 28.6580737,
                    "longitude" => 77.1272678
                ],
                [
                    "stationName" => "Ghevra",
                    "line" => "Green Line",
                    "latitude" => 28.6852384,
                    "longitude" => 76.9961591
                ],
                [
                    "stationName" => "Ghitorni",
                    "line" => "Yellow Line",
                    "latitude" => 28.493751,
                    "longitude" => 77.1491866
                ],
                [
                    "stationName" => "Gokulpuri",
                    "line" => "Pink Line",
                    "latitude" => 28.7024752,
                    "longitude" => 77.2861253
                ],
                [
                    "stationName" => "Golf Course",
                    "line" => "Blue Line",
                    "latitude" => 28.59778075,
                    "longitude" => 77.1598169314955
                ],
                [
                    "stationName" => "Govind Puri",
                    "line" => "Violet Line",
                    "latitude" => 28.5443766,
                    "longitude" => 77.264266
                ],
                [
                    "stationName" => "Greater Kailash",
                    "line" => "Magenta Line",
                    "latitude" => 28.5418777,
                    "longitude" => 77.2384553
                ],
                [
                    "stationName" => "Green Park",
                    "line" => "Yellow Line",
                    "latitude" => 28.5585815,
                    "longitude" => 77.2067183
                ],
                [
                    "stationName" => "GTB Nagar",
                    "line" => "Yellow Line",
                    "latitude" => 28.6981317,
                    "longitude" => 77.2064113
                ],
                [
                    "stationName" => "Guru Dronacharya",
                    "line" => "Yellow Line",
                    "latitude" => 28.4820212,
                    "longitude" => 77.1022685
                ],
                [
                    "stationName" => "Haiderpur",
                    "line" => "Yellow Line",
                    "latitude" => 28.7301214,
                    "longitude" => 77.149402896584
                ],
                [
                    "stationName" => "Harkesh Nagar Okhla",
                    "line" => "Violet Line",
                    "latitude" => 28.5431246,
                    "longitude" => 77.2755616
                ],
                [
                    "stationName" => "Hauz Khas",
                    "line" => "Yellow Line",
                    "latitude" => 28.5442564,
                    "longitude" => 77.2067072
                ],
                [
                    "stationName" => "Hazrat Nizamuddin",
                    "line" => "Pink Line",
                    "latitude" => 28.5887494,
                    "longitude" => 77.2572494
                ],
                [
                    "stationName" => "Hindon",
                    "line" => "Red Line",
                    "latitude" => 28.878965,
                    "longitude" => 77.4154832
                ],
                [
                    "stationName" => "HUDA City Centre",
                    "line" => "Yellow Line",
                    "latitude" => 28.4593429,
                    "longitude" => 77.0726571
                ],
                [
                    "stationName" => "IFFCO Chowk",
                    "line" => "Yellow Line",
                    "latitude" => 28.4723277,
                    "longitude" => 77.0724222
                ],
                [
                    "stationName" => "INA",
                    "line" => "Yellow Line",
                    "latitude" => 28.57440755,
                    "longitude" => 77.2102414818908
                ],
                [
                    "stationName" => "Inderlok",
                    "line" => "Red Line",
                    "latitude" => 28.6517178,
                    "longitude" => 77.2219388
                ],
                [
                    "stationName" => "Indira Gandhi International Airport",
                    "line" => "Orange Line",
                    "latitude" => 28.55489735,
                    "longitude" => 77.0846745826691
                ],
                [
                    "stationName" => "Indraprastha",
                    "line" => "Blue Line",
                    "latitude" => 28.6206019,
                    "longitude" => 77.249551
                ],
                [
                    "stationName" => "IP Extension",
                    "line" => "Pink Line",
                    "latitude" => 28.6288990999999,
                    "longitude" => 77.3101978791977
                ],
                [
                    "stationName" => "ITO",
                    "line" => "Violet Line",
                    "latitude" => 28.6305091,
                    "longitude" => 77.2414363
                ],
                [
                    "stationName" => "Jaffrabad",
                    "line" => "Pink Line",
                    "latitude" => 28.6826822,
                    "longitude" => 77.2748055
                ],
                [
                    "stationName" => "Jahangirpuri",
                    "line" => "Yellow Line",
                    "latitude" => 28.7259717,
                    "longitude" => 77.162658
                ],
                [
                    "stationName" => "Jama Masjid",
                    "line" => "Violet Line",
                    "latitude" => 28.65001015,
                    "longitude" => 77.2376761665906
                ],
                [
                    "stationName" => "Jamia Millia Islamia",
                    "line" => "Magenta Line",
                    "latitude" => 28.55849025,
                    "longitude" => 77.2811647355175
                ],
                [
                    "stationName" => "Janakpuri East",
                    "line" => "Blue Line",
                    "latitude" => 28.633021,
                    "longitude" => 77.086757
                ],
                [
                    "stationName" => "Janakpuri West",
                    "line" => "Blue Line",
                    "latitude" => 28.6289502,
                    "longitude" => 77.0779235
                ],
                [
                    "stationName" => "Jangpura",
                    "line" => "Violet Line",
                    "latitude" => 28.58245705,
                    "longitude" => 77.2415000727384
                ],
                [
                    "stationName" => "Janpath",
                    "line" => "Violet Line",
                    "latitude" => 28.6088598,
                    "longitude" => 77.2181649
                ],
                [
                    "stationName" => "Jasola Apollo",
                    "line" => "Violet Line",
                    "latitude" => 28.5384251,
                    "longitude" => 77.2830377
                ],
                [
                    "stationName" => "Jasola Vihar Shaheen Bagh",
                    "line" => "Magenta Line",
                    "latitude" => 28.5458279,
                    "longitude" => 77.2966578
                ],
                [
                    "stationName" => "Jawaharlal Nehru Stadium",
                    "line" => "Violet Line",
                    "latitude" => 28.58337705,
                    "longitude" => 77.2335404028773
                ],
                [
                    "stationName" => "Jhandewalan",
                    "line" => "Blue Line",
                    "latitude" => 28.6443188,
                    "longitude" => 77.1999165
                ],
                [
                    "stationName" => "Jhilmil",
                    "line" => "Red Line",
                    "latitude" => 28.6757033,
                    "longitude" => 77.3125045754973
                ],
                [
                    "stationName" => "Johari Enclave",
                    "line" => "Pink Line",
                    "latitude" => 0,
                    "longitude" => 0
                ],
                [
                    "stationName" => "Jor Bagh",
                    "line" => "Yellow Line",
                    "latitude" => 28.58823925,
                    "longitude" => 77.2165277418717
                ],
                [
                    "stationName" => "Kailash Colony",
                    "line" => "Violet Line",
                    "latitude" => 28.5530522,
                    "longitude" => 77.2429694
                ],
                [
                    "stationName" => "Kalindi Kunj",
                    "line" => "Magenta Line",
                    "latitude" => 28.5452187,
                    "longitude" => 77.3059891
                ],
                [
                    "stationName" => "Kalkaji Mandir",
                    "line" => "Violet Line",
                    "latitude" => 28.5497752,
                    "longitude" => 77.2606671
                ],
                [
                    "stationName" => "Kanhaiya Nagar",
                    "line" => "Red Line",
                    "latitude" => 28.6800635,
                    "longitude" => 77.1648445
                ],
                [
                    "stationName" => "Karkarduma",
                    "line" => "Blue Line branch",
                    "latitude" => 28.6491622,
                    "longitude" => 77.3062081096126
                ],
                [
                    "stationName" => "Karkarduma Court",
                    "line" => "Pink Line",
                    "latitude" => 28.6536001,
                    "longitude" => 77.2957877
                ],
                [
                    "stationName" => "Karol Bagh",
                    "line" => "Blue Line",
                    "latitude" => 28.6441866,
                    "longitude" => 77.189132
                ],
                [
                    "stationName" => "Kashmere Gate",
                    "line" => "Red Line",
                    "latitude" => 28.6517178,
                    "longitude" => 77.2219388
                ],
                [
                    "stationName" => "Kaushambi",
                    "line" => "Blue Line branch",
                    "latitude" => 28.6453286,
                    "longitude" => 77.3243485
                ],
                [
                    "stationName" => "Keshav Puram",
                    "line" => "Red Line",
                    "latitude" => 28.6889264,
                    "longitude" => 77.1616833
                ],
                [
                    "stationName" => "Khan Market",
                    "line" => "Violet Line",
                    "latitude" => 28.6001354,
                    "longitude" => 77.2264906408736
                ],
                [
                    "stationName" => "Kirti Nagar†",
                    "line" => "Blue Line",
                    "latitude" => 28.6532807,
                    "longitude" => 77.1417729
                ],
                [
                    "stationName" => "Krishna Nagar",
                    "line" => "Pink Line",
                    "latitude" => 28.6578461,
                    "longitude" => 77.2901853
                ],
                [
                    "stationName" => "Kohat Enclave",
                    "line" => "Red Line",
                    "latitude" => 28.6980415,
                    "longitude" => 77.1405393
                ],
                [
                    "stationName" => "Lajpat Nagar",
                    "line" => "Violet Line",
                    "latitude" => 28.57060215,
                    "longitude" => 77.2365302783804
                ],
                [
                    "stationName" => "Lal Qila",
                    "line" => "Violet Line",
                    "latitude" => 17.92086195,
                    "longitude" => 77.5285019119357
                ],
                [
                    "stationName" => "Laxmi Nagar",
                    "line" => "Blue Line branch",
                    "latitude" => 28.63055515,
                    "longitude" => 77.2776331681994
                ],
                [
                    "stationName" => "Lok Kalyan Marg",
                    "line" => "Yellow Line",
                    "latitude" => 28.598385,
                    "longitude" => 77.2029964
                ],
                [
                    "stationName" => "Madipur",
                    "line" => "Green Line",
                    "latitude" => 28.6764752,
                    "longitude" => 77.1193599
                ],
                [
                    "stationName" => "Maharaja Surajmal Stadium",
                    "line" => "Green Line",
                    "latitude" => 0,
                    "longitude" => 0
                ],
                [
                    "stationName" => "Majlis Park",
                    "line" => "Pink Line",
                    "latitude" => 28.7244312,
                    "longitude" => 77.181964
                ],
                [
                    "stationName" => "Major Mohit Sharma",
                    "line" => "Red Line",
                    "latitude" => 28.6776112,
                    "longitude" => 77.3581426
                ],
                [
                    "stationName" => "Malviya Nagar",
                    "line" => "Yellow Line",
                    "latitude" => 28.5339201,
                    "longitude" => 77.2124474
                ],
                [
                    "stationName" => "Mandawali – West Vinod Nagar",
                    "line" => "Pink Line",
                    "latitude" => 28.6249712,
                    "longitude" => 77.3044906
                ],
                [
                    "stationName" => "Mandi House",
                    "line" => "Blue Line",
                    "latitude" => 28.6255556,
                    "longitude" => 77.234195
                ],
                [
                    "stationName" => "Mansarovar Park",
                    "line" => "Red Line",
                    "latitude" => 28.6757386,
                    "longitude" => 77.300102
                ],
                [
                    "stationName" => "Maujpur-Babarpur",
                    "line" => "Pink Line",
                    "latitude" => 28.69197845,
                    "longitude" => 77.2796239680885
                ],
                [
                    "stationName" => "Mayapuri",
                    "line" => "Pink Line",
                    "latitude" => 28.6371795,
                    "longitude" => 77.1297333
                ],
                [
                    "stationName" => "Mayur Vihar -I",
                    "line" => "Blue Line",
                    "latitude" => 28.603133,
                    "longitude" => 77.2925892
                ],
                [
                    "stationName" => "Mayur Vihar Extension",
                    "line" => "Blue Line",
                    "latitude" => 28.59415815,
                    "longitude" => 77.29458935
                ],
                [
                    "stationName" => "Mayur Vihar Pocket I",
                    "line" => "Pink Line",
                    "latitude" => 28.6058619,
                    "longitude" => 77.2987023
                ],
                [
                    "stationName" => "Mewala Maharajpur",
                    "line" => "Violet Line",
                    "latitude" => 28.4418747,
                    "longitude" => 77.3023001
                ],
                [
                    "stationName" => "MG Road",
                    "line" => "Yellow Line",
                    "latitude" => 28.4794579,
                    "longitude" => 77.0804652
                ],
                [
                    "stationName" => "Model Town",
                    "line" => "Yellow Line",
                    "latitude" => 28.7027136,
                    "longitude" => 77.1939912
                ],
                [
                    "stationName" => "Mohan Estate",
                    "line" => "Violet Line",
                    "latitude" => 28.5195895,
                    "longitude" => 77.2945845503475
                ],
                [
                    "stationName" => "Mohan Nagar",
                    "line" => "Red Line",
                    "latitude" => 28.60631905,
                    "longitude" => 77.1060818486098
                ],
                [
                    "stationName" => "Moolchand",
                    "line" => "Violet Line",
                    "latitude" => 28.5644043,
                    "longitude" => 77.2342783
                ],
                [
                    "stationName" => "Moti Nagar",
                    "line" => "Blue Line",
                    "latitude" => 28.657859,
                    "longitude" => 77.1424288
                ],
                [
                    "stationName" => "Mundka",
                    "line" => "Green Line",
                    "latitude" => 28.6824341,
                    "longitude" => 77.0305741
                ],
                [
                    "stationName" => "Mundka Industrial Area",
                    "line" => "Green Line",
                    "latitude" => 28.6834491,
                    "longitude" => 77.0171333
                ],
                [
                    "stationName" => "Munirka",
                    "line" => "Magenta Line",
                    "latitude" => 28.554886,
                    "longitude" => 77.1710841
                ],
                [
                    "stationName" => "Najafgarh",
                    "line" => "Grey Line",
                    "latitude" => 28.612304,
                    "longitude" => 76.9823908
                ],
                [
                    "stationName" => "Nangli",
                    "line" => "Grey Line",
                    "latitude" => 28.6173003,
                    "longitude" => 77.0104375
                ],
                [
                    "stationName" => "Nangloi",
                    "line" => "Green Line",
                    "latitude" => 28.6824007,
                    "longitude" => 77.0647319
                ],
                [
                    "stationName" => "Nangloi Railway stationName",
                    "line" => "Green Line",
                    "latitude" => 28.6822009,
                    "longitude" => 77.0562463
                ],
                [
                    "stationName" => "Naraina Vihar",
                    "line" => "Pink Line",
                    "latitude" => 28.6273375,
                    "longitude" => 77.1403175
                ],
                [
                    "stationName" => "Nawada",
                    "line" => "Blue Line",
                    "latitude" => 28.6202758,
                    "longitude" => 77.0450787
                ],
                [
                    "stationName" => "Neelam Chowk Ajronda",
                    "line" => "Violet Line",
                    "latitude" => 28.3974824,
                    "longitude" => 77.3123599
                ],
                [
                    "stationName" => "Nehru Enclave",
                    "line" => "Magenta Line",
                    "latitude" => 28.5460584,
                    "longitude" => 77.2515057
                ],
                [
                    "stationName" => "Nehru Place",
                    "line" => "Violet Line",
                    "latitude" => 28.54925735,
                    "longitude" => 77.2529519950882
                ],
                [
                    "stationName" => "Netaji Subhash Place",
                    "line" => "Red Line",
                    "latitude" => 28.69605175,
                    "longitude" => 77.1526404202393
                ],
                [
                    "stationName" => "New Ashok Nagar",
                    "line" => "Blue Line",
                    "latitude" => 28.5890885,
                    "longitude" => 77.3015085
                ],
                [
                    "stationName" => "New Delhi",
                    "line" => "Yellow Line",
                    "latitude" => 28.6436415,
                    "longitude" => 77.2217373
                ],
                [
                    "stationName" => "NHPC Chowk",
                    "line" => "Violet Line",
                    "latitude" => 0,
                    "longitude" => 0
                ],
                [
                    "stationName" => "Nirman Vihar",
                    "line" => "Blue Line branch",
                    "latitude" => 28.63650605,
                    "longitude" => 77.2868348866455
                ],
                [
                    "stationName" => "Noida City Centre",
                    "line" => "Blue Line",
                    "latitude" => 0,
                    "longitude" => 0
                    
                ],
                [
                    "stationName" => "Noida Electronic City",
                    "line" => "Blue Line",
                    "latitude" => 28.5793538,
                    "longitude" => 77.293303
                ],
                [
                    "stationName" => "Noida Sector 15",
                    "line" => "Blue Line",
                    "latitude" => 28.4808629,
                    "longitude" => 77.0848883
                ],
                [
                    "stationName" => "Noida Sector 16",
                    "line" => "Blue Line",
                    "latitude" => 28.4808629,
                    "longitude" => 77.0848883
                ],
                [
                    "stationName" => "Noida Sector 18",
                    "line" => "Blue Line",
                    "latitude" => 28.4808629,
                    "longitude" => 77.0848883
                ],
                [
                    "stationName" => "Noida Sector 34",
                    "line" => "Blue Line",
                    "latitude" => 28.4808629,
                    "longitude" => 77.0848883
                ],
                [
                    "stationName" => "Noida Sector 52",
                    "line" => "Blue Line",
                    "latitude" => 28.4808629,
                    "longitude" => 77.0848883
                ],
                [
                    "stationName" => "Noida Sector 59",
                    "line" => "Blue Line",
                    "latitude" => 28.4808629,
                    "longitude" => 77.0848883
                ],
                [
                    "stationName" => "Noida Sector 61",
                    "line" => "Blue Line",
                    "latitude" => 28.4808629,
                    "longitude" => 77.0848883
                ],
                [
                    "stationName" => "Noida Sector 62",
                    "line" => "Blue Line",
                    "latitude" => 28.4808629,
                    "longitude" => 77.0848883
                ],
                [
                    "stationName" => "Okhla Bird Sanctuary",
                    "line" => "Magenta Line",
                    "latitude" => 28.5529418,
                    "longitude" => 77.321595
                ],
                [
                    "stationName" => "Okhla NSIC",
                    "line" => "Magenta Line",
                    "latitude" => 28.5544828,
                    "longitude" => 77.2648487
                ],
                [
                    "stationName" => "Okhla Vihar",
                    "line" => "Magenta Line",
                    "latitude" => 28.5613002,
                    "longitude" => 77.2919304
                ],
                [
                    "stationName" => "Old Faridabad",
                    "line" => "Violet Line",
                    "latitude" => 28.4808629,
                    "longitude" => 77.0848883
                ],
                [
                    "stationName" => "Palam",
                    "line" => "Magenta Line",
                    "latitude" => 28.5918933,
                    "longitude" => 77.0828242
                ],
                [
                    "stationName" => "Panchsheel Park",
                    "line" => "Magenta Line",
                    "latitude" => 28.5433525,
                    "longitude" => 77.2140757
                ],
                [
                    "stationName" => "Pandit Shree Ram Sharma",
                    "line" => "Green Line",
                    "latitude" => 28.689281,
                    "longitude" => 76.9511988
                ],
                [
                    "stationName" => "Paschim Vihar East",
                    "line" => "Green Line",
                    "latitude" => 28.6773985,
                    "longitude" => 77.1122953
                ],
                [
                    "stationName" => "Paschim Vihar West",
                    "line" => "Green Line",
                    "latitude" => 28.6786514,
                    "longitude" => 77.1022255
                ],
                [
                    "stationName" => "Patel Chowk",
                    "line" => "Yellow Line",
                    "latitude" => 28.6229664,
                    "longitude" => 77.214031
                ],
                [
                    "stationName" => "Patel Nagar",
                    "line" => "Blue Line",
                    "latitude" => 28.6455858,
                    "longitude" => 77.1686983
                ],
                [
                    "stationName" => "Peera Garhi",
                    "line" => "Green Line",
                    "latitude" => 28.6798074,
                    "longitude" => 77.0926793
                ],
                [
                    "stationName" => "Pitam Pura",
                    "line" => "Red Line",
                    "latitude" => 28.7032676,
                    "longitude" => 77.1322497
                ],
                [
                    "stationName" => "Pratap Nagar",
                    "line" => "Red Line",
                    "latitude" => 28.6664902,
                    "longitude" => 77.199335678495
                ],
                [
                    "stationName" => "Preet Vihar",
                    "line" => "Blue Line branch",
                    "latitude" => 28.6414952,
                    "longitude" => 77.2953744289202
                ],
                [
                    "stationName" => "Pul Bangash",
                    "line" => "Red Line",
                    "latitude" => 28.6663751,
                    "longitude" => 77.2075291189811
                ],
                [
                    "stationName" => "Punjabi Bagh",
                    "line" => "Green Line",
                    "latitude" => 28.668945,
                    "longitude" => 77.1324614
                ],
                [
                    "stationName" => "Punjabi Bagh West",
                    "line" => "Pink Line",
                    "latitude" => 28.6703201,
                    "longitude" => 77.1420875
                ],
                [
                    "stationName" => "Qutab Minar",
                    "line" => "Yellow Line",
                    "latitude" => 0,
                    "longitude" => 0
                ],
                [
                    "stationName" => "R.K.Puram",
                    "line" => "Magenta Line",
                    "latitude" => 28.5514261,
                    "longitude" => 77.1847012
                ],
                [
                    "stationName" => "Raja Nahar Singh",
                    "line" => "Violet Line",
                    "latitude" => 28.3400192,
                    "longitude" => 77.3164281
                ],
                [
                    "stationName" => "Raj Bagh",
                    "line" => "Red Line",
                    "latitude" => 28.6408602,
                    "longitude" => 77.2094999
                ],
                [
                    "stationName" => "Rajdhani Park",
                    "line" => "Green Line",
                    "latitude" => 28.6823085,
                    "longitude" => 77.0439437
                ],
                [
                    "stationName" => "Rajendra Place",
                    "line" => "Blue Line",
                    "latitude" => 28.6424955,
                    "longitude" => 77.1782756
                ],
                [
                    "stationName" => "Rajiv Chowk",
                    "line" => "Yellow Line",
                    "latitude" => 28.6327804,
                    "longitude" => 77.2196996
                ],
                [
                    "stationName" => "Rajouri Garden",
                    "line" => "Blue Line",
                    "latitude" => 28.6421518,
                    "longitude" => 77.1160603776926
                ],
                [
                    "stationName" => "Ramakrishna Ashram Marg",
                    "line" => "Blue Line",
                    "latitude" => 28.6392436,
                    "longitude" => 77.2085787
                ],
                [
                    "stationName" => "Ramesh Nagar",
                    "line" => "Blue Line",
                    "latitude" => 28.6527444,
                    "longitude" => 77.1316496
                ],
                [
                    "stationName" => "Rithala",
                    "line" => "Red Line",
                    "latitude" => 28.7208064,
                    "longitude" => 77.1071813
                ],
                [
                    "stationName" => "Rohini East",
                    "line" => "Red Line",
                    "latitude" => 28.7075901,
                    "longitude" => 77.1260386
                ],
                [
                    "stationName" => "Rohini Sector 18",
                    "line" => "Yellow Line",
                    "latitude" => 28.7383477,
                    "longitude" => 77.1398323
                ],
                [
                    "stationName" => "Rohini West",
                    "line" => "Red Line",
                    "latitude" => 28.7149569,
                    "longitude" => 77.115385
                ],
                [
                    "stationName" => "Sadar Bazaar Cantonment",
                    "line" => "Magenta Line",
                    "latitude" => 28.5771509,
                    "longitude" => 77.1111533
                ],
                [
                    "stationName" => "Saket",
                    "line" => "Yellow Line",
                    "latitude" => 28.5244107,
                    "longitude" => 77.2137253
                ],
                [
                    "stationName" => "Samaypur Badli",
                    "line" => "Yellow Line",
                    "latitude" => 28.7446158,
                    "longitude" => 77.1382654
                ],
                [
                    "stationName" => "Sant Surdas (Sihi)",
                    "line" => "Violet Line",
                    "latitude" => 28.3546513,
                    "longitude" => 77.3162264
                ],
                [
                    "stationName" => "Sarai",
                    "line" => "Violet Line",
                    "latitude" => 28.6517178,
                    "longitude" => 77.2219388
                ],
                [
                    "stationName" => "Sarita Vihar",
                    "line" => "Violet Line",
                    "latitude" => 28.5286597,
                    "longitude" => 77.2883965480607
                ],
                [
                    "stationName" => "Sarojini Nagar",
                    "line" => "Pink Line",
                    "latitude" => 28.5741575,
                    "longitude" => 77.1953703
                ],
                [
                    "stationName" => "Satguru Ramsingh Marg",
                    "line" => "Green Line branch",
                    "latitude" => 28.6619327,
                    "longitude" => 77.1574772
                ],
                [
                    "stationName" => "Sector 28",
                    "line" => "Violet Line",
                    "latitude" => 28.5452565499999,
                    "longitude" => 77.0325760877195
                ],
                [
                    "stationName" => "Seelampur",
                    "line" => "Red Line",
                    "latitude" => 28.6698302,
                    "longitude" => 77.2667540304014
                ],
                [
                    "stationName" => "Shadipur",
                    "line" => "Blue Line",
                    "latitude" => 28.6516362,
                    "longitude" => 77.1582947
                ],
                [
                    "stationName" => "Shahdara",
                    "line" => "Red Line",
                    "latitude" => 28.6734037,
                    "longitude" => 77.2897403600609
                ],
                [
                    "stationName" => "Shaheed Nagar",
                    "line" => "Red Line",
                    "latitude" => 28.5307795,
                    "longitude" => 77.2120573
                ],
                [
                    "stationName" => "Shaheed Sthal",
                    "line" => "Red Line",
                    "latitude" => 28.6706109,
                    "longitude" => 77.4155822
                ],
                [
                    "stationName" => "Shakurpur",
                    "line" => "Pink Line",
                    "latitude" => 28.6857668,
                    "longitude" => 77.1496094
                ],
                [
                    "stationName" => "Shalimar Bagh",
                    "line" => "Pink Line",
                    "latitude" => 28.71745265,
                    "longitude" => 77.150866546174
                ],
                [
                    "stationName" => "Shankar Vihar",
                    "line" => "Magenta Line",
                    "latitude" => 28.55743865,
                    "longitude" => 77.1396654899955
                ],
                [
                    "stationName" => "Shastri Nagar",
                    "line" => "Red Line",
                    "latitude" => 28.66997485,
                    "longitude" => 77.181999774747
                ],
                [
                    "stationName" => "Shastri Park",
                    "line" => "Red Line",
                    "latitude" => 28.6682776,
                    "longitude" => 77.2503987437357
                ],
                [
                    "stationName" => "Shiv Vihar",
                    "line" => "Pink Line",
                    "latitude" => 28.61753755,
                    "longitude" => 77.0354301698672
                ],
                [
                    "stationName" => "Shivaji Park",
                    "line" => "Green Line",
                    "latitude" => 28.6750317,
                    "longitude" => 77.1304722
                ],
                [
                    "stationName" => "Shivaji Stadium",
                    "line" => "Orange Line",
                    "latitude" => 28.6315087,
                    "longitude" => 77.2160589
                ],
                [
                    "stationName" => "Shyam Park",
                    "line" => "Red Line",
                    "latitude" => 28.6988071999999,
                    "longitude" => 77.2684641251648
                ],
                [
                    "stationName" => "Sikandarpur",
                    "line" => "Yellow Line",
                    "latitude" => 28.4812704,
                    "longitude" => 77.092999
                ],
                [
                    "stationName" => "Sir Vishweshwaraiah Moti Bagh",
                    "line" => "Pink Line",
                    "latitude" => 28.5785326,
                    "longitude" => 77.175741
                ],
                [
                    "stationName" => "South",
                    "line" => "Pink Line",
                    "latitude" => 28.6517178,
                    "longitude" => 77.2219388
                ],
                [
                    "stationName" => "Subhash Nagar",
                    "line" => "Blue Line",
                    "latitude" => 28.6418074,
                    "longitude" => 77.1087611
                ],
                [
                    "stationName" => "Sukhdev Vihar",
                    "line" => "Magenta Line",
                    "latitude" => 28.5597477,
                    "longitude" => 77.2749004
                ],
                [
                    "stationName" => "Sultanpur",
                    "line" => "Yellow Line",
                    "latitude" => 28.4616582,
                    "longitude" => 76.8700852
                ],
                [
                    "stationName" => "Supreme Court",
                    "line" => "Blue Line",
                    "latitude" => 28.6222879,
                    "longitude" => 77.2394339687213
                ],
                [
                    "stationName" => "Tagore Garden",
                    "line" => "Blue Line",
                    "latitude" => 28.6437639,
                    "longitude" => 77.1128454
                ],
                [
                    "stationName" => "Terminal 1-IGI Airport",
                    "line" => "Magenta Line",
                    "latitude" => 0,
                    "longitude" => 0
                ],
                [
                    "stationName" => "Tikri Border",
                    "line" => "Green Line",
                    "latitude" => 28.6880254,
                    "longitude" => 76.9640828
                ],
                [
                    "stationName" => "Tikri Kalan",
                    "line" => "Green Line",
                    "latitude" => 28.6868661,
                    "longitude" => 76.9772069
                ],
                [
                    "stationName" => "Tilak Nagar",
                    "line" => "Blue Line",
                    "latitude" => 28.6365482,
                    "longitude" => 77.0964961
                ],
                [
                    "stationName" => "Tis Hazari",
                    "line" => "Red Line",
                    "latitude" => 28.6671323,
                    "longitude" => 77.2166279638389
                ],
                [
                    "stationName" => "Trilokpuri Sanjay Lake",
                    "line" => "Pink Line",
                    "latitude" => 28.613453,
                    "longitude" => 77.3088549
                ],
                [
                    "stationName" => "Tughlakabad stationName",
                    "line" => "Violet Line",
                    "latitude" => 28.5023598,
                    "longitude" => 77.2992401
                ],
                [
                    "stationName" => "Udyog Bhawan",
                    "line" => "Yellow Line",
                    "latitude" => 28.6105302,
                    "longitude" => 77.2131076
                ],
                [
                    "stationName" => "Udyog Nagar",
                    "line" => "Green Line",
                    "latitude" => 28.681103,
                    "longitude" => 77.0808492
                ],
                [
                    "stationName" => "Uttam Nagar East",
                    "line" => "Blue Line",
                    "latitude" => 28.6248465,
                    "longitude" => 77.0652861
                ],
                [
                    "stationName" => "Uttam Nagar West",
                    "line" => "Blue Line",
                    "latitude" => 28.621757,
                    "longitude" => 77.0557122
                ],
                [
                    "stationName" => "Vaishali",
                    "line" => "Blue Line branch",
                    "latitude" => 28.6440912,
                    "longitude" => 77.0683855826679
                ],
                [
                    "stationName" => "Vasant Vihar",
                    "line" => "Magenta Line",
                    "latitude" => 28.56069055,
                    "longitude" => 77.1607907316856
                ],
                [
                    "stationName" => "Vidhan Sabha",
                    "line" => "Yellow Line",
                    "latitude" => 28.6863222,
                    "longitude" => 77.2217271
                ],
                [
                    "stationName" => "Vinobapuri",
                    "line" => "Pink Line",
                    "latitude" => 28.5669763,
                    "longitude" => 77.2491906
                ],
                [
                    "stationName" => "Vishwa Vidyalaya",
                    "line" => "Yellow Line",
                    "latitude" => 28.6950369,
                    "longitude" => 77.2147192
                ],
                [
                    "stationName" => "Welcome",
                    "line" => "Red Line",
                    "latitude" => 28.6517178,
                    "longitude" => 77.2219388
                ],
                [
                    "stationName" => "Yamuna Bank",
                    "line" => "Blue Line",
                    "latitude" => 28.6232784,
                    "longitude" => 77.2679240492505
                ]
            ];


        DB::table('station_names')->insert($data);
    }
}
