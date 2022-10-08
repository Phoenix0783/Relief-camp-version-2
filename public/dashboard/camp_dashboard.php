<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../../src/css/tailwind.css">
   <link rel="stylesheet" href="../../src/css/dashboard/camp_dashboard.css">
   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
   <script src="../../src/js/dashboard.js" defer></script>           
   <script src="../../src/js/progressbar.js" defer></script>           
   <script>
      var state_arr = new Array("Andaman & Nicobar", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra & Nagar Haveli", "Daman & Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttar Pradesh", "Uttaranchal", "West Bengal");
      var s_a = new Array();
      s_a[0]="";
      s_a[1]=" Alipur | Andaman Island | Anderson Island | Arainj-Laka-Punga | Austinabad | Bamboo Flat | Barren Island | Beadonabad | Betapur | Bindraban | Bonington | Brookesabad | Cadell Point | Calicut | Chetamale | Cinque Islands | Defence Island | Digilpur | Dolyganj | Flat Island | Geinyale | Great Coco Island | Haddo | Havelock Island | Henry Lawrence Island | Herbertabad | Hobdaypur | Ilichar | Ingoie | Inteview Island | Jangli Ghat | Jhon Lawrence Island | Karen | Kartara | KYD Islannd | Landfall Island | Little Andmand | Little Coco Island | Long Island | Maimyo | Malappuram | Manglutan | Manpur | Mitha Khari | Neill Island | Nicobar Island | North Brother Island | North Passage Island | North Sentinel Island | Nothen Reef Island | Outram Island | Pahlagaon | Palalankwe | Passage Island | Phaiapong | Phoenix Island | Port Blair | Preparis Island | Protheroepur | Rangachang | Rongat | Rutland Island | Sabari | Saddle Peak | Shadipur | Smith Island | Sound Island | South Sentinel Island | Spike Island | Tarmugli Island | Taylerabad | Titaije | Toibalawe | Tusonabad | West Island | Wimberleyganj | Yadita";
      s_a[2]=" Achampet | Adilabad | Adoni | Alampur | Allagadda | Alur | Amalapuram | Amangallu | Anakapalle | Anantapur | Andole | Araku | Armoor | Asifabad | Aswaraopet | Atmakur | B. Kothakota | Badvel | Banaganapalle | Bandar | Bangarupalem | Banswada | Bapatla | Bellampalli | Bhadrachalam | Bhainsa | Bheemunipatnam | Bhimadole | Bhimavaram | Bhongir | Bhooragamphad | Boath | Bobbili | Bodhan | Chandoor | Chavitidibbalu | Chejerla | Chepurupalli | Cherial | Chevella | Chinnor | Chintalapudi | Chintapalle | Chirala | Chittoor | Chodavaram | Cuddapah | Cumbum | Darsi | Devarakonda | Dharmavaram | Dichpalli | Divi | Donakonda | Dronachalam | East Godavari | Eluru | Eturnagaram | Gadwal | Gajapathinagaram | Gajwel | Garladinne | Giddalur | Godavari | Gooty | Gudivada | Gudur | Guntur | Hindupur | Hunsabad | Huzurabad | Huzurnagar | Hyderabad | Ibrahimpatnam | Jaggayyapet | Jagtial | Jammalamadugu | Jangaon | Jangareddygudem | Jannaram | Kadiri | Kaikaluru | Kakinada | Kalwakurthy | Kalyandurg | Kamalapuram | Kamareddy | Kambadur | Kanaganapalle | Kandukuru | Kanigiri | Karimnagar | Kavali | Khammam | Khanapur (AP) | Kodangal | Koduru | Koilkuntla | Kollapur | Kothagudem | Kovvur | Krishna | Krosuru | Kuppam | Kurnool | Lakkireddipalli | Madakasira | Madanapalli | Madhira | Madnur | Mahabubabad | Mahabubnagar | Mahadevapur | Makthal | Mancherial | Mandapeta | Mangalagiri | Manthani | Markapur | Marturu | Medachal | Medak | Medarmetla | Metpalli | Mriyalguda | Mulug | Mylavaram | Nagarkurnool | Nalgonda | Nallacheruvu | Nampalle | Nandigama | Nandikotkur | Nandyal | Narasampet | Narasaraopet | Narayanakhed | Narayanpet | Narsapur | Narsipatnam | Nazvidu | Nelloe | Nellore | Nidamanur | Nirmal | Nizamabad | Nuguru | Ongole | Outsarangapalle | Paderu | Pakala | Palakonda | Paland | Palmaneru | Pamuru | Pargi | Parkal | Parvathipuram | Pathapatnam | Pattikonda | Peapalle | Peddapalli | Peddapuram | Penukonda | Piduguralla | Piler | Pithapuram | Podili | Polavaram | Prakasam | Proddatur | Pulivendla | Punganur | Putturu | Rajahmundri | Rajampeta | Ramachandrapuram | Ramannapet | Rampachodavaram | Rangareddy | Rapur | Rayachoti | Rayadurg | Razole | Repalle | Saluru | Sangareddy | Sathupalli | Sattenapalle | Satyavedu | Shadnagar | Siddavattam | Siddipet | Sileru | Sircilla | Sirpur Kagaznagar | Sodam | Sompeta | Srikakulam | Srikalahasthi | Srisailam | Srungavarapukota | Sudhimalla | Sullarpet | Tadepalligudem | Tadipatri | Tanduru | Tanuku | Tekkali | Tenali | Thungaturthy | Tirivuru | Tirupathi | Tuni | Udaygiri | Ulvapadu | Uravakonda | Utnor | V.R. Puram | Vaimpalli | Vayalpad | Venkatgiri | Venkatgirikota | Vijayawada | Vikrabad | Vinjamuru | Vinukonda | Visakhapatnam | Vizayanagaram | Vizianagaram | Vuyyuru | Wanaparthy | Warangal | Wardhannapet | Yelamanchili | Yelavaram | Yeleswaram | Yellandu | Yellanuru | Yellareddy | Yerragondapalem | Zahirabad ";
      s_a[3]=" Along | Anini | Anjaw | Bameng | Basar | Changlang | Chowkhem | Daporizo | Dibang Valley | Dirang | Hayuliang | Huri | Itanagar | Jairampur | Kalaktung | Kameng | Khonsa | Kolaring | Kurung Kumey | Lohit | Lower Dibang Valley | Lower Subansiri | Mariyang | Mechuka | Miao | Nefra | Pakkekesang | Pangin | Papum Pare | Passighat | Roing | Sagalee | Seppa | Siang | Tali | Taliha | Tawang | Tezu | Tirap | Tuting | Upper Siang | Upper Subansiri | Yiang Kiag ";
      s_a[4]=" Abhayapuri | Baithalangshu | Barama | Barpeta Road | Bihupuria | Bijni | Bilasipara | Bokajan | Bokakhat | Boko | Bongaigaon | Cachar | Cachar Hills | Darrang | Dhakuakhana | Dhemaji | Dhubri | Dibrugarh | Digboi | Diphu | Goalpara | Gohpur | Golaghat | Guwahati | Hailakandi | Hajo | Halflong | Hojai | Howraghat | Jorhat | Kamrup | Karbi Anglong | Karimganj | Kokarajhar | Kokrajhar | Lakhimpur | Maibong | Majuli | Mangaldoi | Mariani | Marigaon | Moranhat | Morigaon | Nagaon | Nalbari | Rangapara | Sadiya | Sibsagar | Silchar | Sivasagar | Sonitpur | Tarabarihat | Tezpur | Tinsukia | Udalgiri | Udalguri | UdarbondhBarpeta";
      s_a[5]=" Adhaura | Amarpur | Araria | Areraj | Arrah | Arwal | Aurangabad | Bagaha | Banka | Banmankhi | Barachakia | Barauni | Barh | Barosi | Begusarai | Benipatti | Benipur | Bettiah | Bhabhua | Bhagalpur | Bhojpur | Bidupur | Biharsharif | Bikram | Bikramganj | Birpur | Buxar | Chakai | Champaran | Chapara | Dalsinghsarai | Danapur | Darbhanga | Daudnagar | Dhaka | Dhamdaha | Dumraon | Ekma | Forbesganj | Gaya | Gogri | Gopalganj | H.Kharagpur | Hajipur | Hathua | Hilsa | Imamganj | Jahanabad | Jainagar | Jamshedpur | Jamui | Jehanabad | Jhajha | Jhanjharpur | Kahalgaon | Kaimur (Bhabua) | Katihar | Katoria | Khagaria | Kishanganj | Korha | Lakhisarai | Madhepura | Madhubani | Maharajganj | Mahua | Mairwa | Mallehpur | Masrakh | Mohania | Monghyr | Motihari | Motipur | Munger | Muzaffarpur | Nabinagar | Nalanda | Narkatiaganj | Naugachia | Nawada | Pakribarwan | Pakridayal | Patna | Phulparas | Piro | Pupri | Purena | Purnia | Rafiganj | Rajauli | Ramnagar | Raniganj | Raxaul | Rohtas | Rosera | S.Bakhtiarpur | Saharsa | Samastipur | Saran | Sasaram | Seikhpura | Sheikhpura | Sheohar | Sherghati | Sidhawalia | Singhwara | Sitamarhi | Siwan | Sonepur | Supaul | Thakurganj | Triveniganj | Udakishanganj | Vaishali | Wazirganj";
      s_a[6]=" Chandigarh | Mani Marja";
      s_a[7]=" Ambikapur | Antagarh | Arang | Bacheli | Bagbahera | Bagicha | Baikunthpur | Balod | Balodabazar | Balrampur | Barpalli | Basana | Bastanar | Bastar | Bderajpur | Bemetara | Berla | Bhairongarh | Bhanupratappur | Bharathpur | Bhatapara | Bhilai | Bhilaigarh | Bhopalpatnam | Bijapur | Bilaspur | Bodla | Bokaband | Chandipara | Chhinagarh | Chhuriakala | Chingmut | Chuikhadan | Dabhara | Dallirajhara | Dantewada | Deobhog | Dhamda | Dhamtari | Dharamjaigarh | Dongargarh | Durg | Durgakondal | Fingeshwar | Gariaband | Garpa | Gharghoda | Gogunda | Ilamidi | Jagdalpur | Janjgir | Janjgir-Champa | Jarwa | Jashpur | Jashpurnagar | Kabirdham-Kawardha | Kanker | Kasdol | Kathdol | Kathghora | Kawardha | Keskal | Khairgarh | Kondagaon | Konta | Korba | Korea | Kota | Koyelibeda | Kuakunda | Kunkuri | Kurud | Lohadigundah | Lormi | Luckwada | Mahasamund | Makodi | Manendragarh | Manpur | Marwahi | Mohla | Mungeli | Nagri | Narainpur | Narayanpur | Neora | Netanar | Odgi | Padamkot | Pakhanjur | Pali | Pandaria | Pandishankar | Parasgaon | Pasan | Patan | Pathalgaon | Pendra | Pratappur | Premnagar | Raigarh | Raipur | Rajnandgaon | Rajpur | Ramchandrapur | Saraipali | Saranggarh | Sarona | Semaria | Shakti | Sitapur | Sukma | Surajpur | Surguja | Tapkara | Toynar | Udaipur | Uproda | Wadrainagar";
      s_a[8]=" Amal | Amli | Bedpa | Chikhli | Dadra & Nagar Haveli | Dahikhed | Dolara | Galonda | Kanadi | Karchond | Khadoli | Kharadpada | Kherabari | Kherdi | Kothar | Luari | Mashat | Rakholi | Rudana | Saili | Sili | Silvassa | Sindavni | Udva | Umbarkoi | Vansda | Vasona | Velugam ";
      s_a[9]=" Brancavare | Dagasi | Daman | Diu | Magarvara | Nagwa | Pariali | Passo Covo ";
      s_a[10]=" Central Delhi | East Delhi | New Delhi | North Delhi | North East Delhi | North West Delhi | South Delhi | South West Delhi | West Delhi ";
      s_a[11]=" Canacona | Candolim | Chinchinim | Cortalim | Goa | Jua | Madgaon | Mahem | Mapuca | Marmagao | Panji | Ponda | Sanvordem | Terekhol ";
      s_a[12]=" Ahmedabad | Ahwa | Amod | Amreli | Anand | Anjar | Ankaleshwar | Babra | Balasinor | Banaskantha | Bansada | Bardoli | Bareja | Baroda | Barwala | Bayad | Bhachav | Bhanvad | Bharuch | Bhavnagar | Bhiloda | Bhuj | Billimora | Borsad | Botad | Chanasma | Chhota Udaipur | Chotila | Dabhoi | Dahod | Damnagar | Dang | Danta | Dasada | Dediapada | Deesa | Dehgam | Deodar | Devgadhbaria | Dhandhuka | Dhanera | Dharampur | Dhari | Dholka | Dhoraji | Dhrangadhra | Dhrol | Dwarka | Fortsongadh | Gadhada | Gandhi Nagar | Gariadhar | Godhra | Gogodar | Gondal | Halol | Halvad | Harij | Himatnagar | Idar | Jambusar | Jamjodhpur | Jamkalyanpur | Jamnagar | Jasdan | Jetpur | Jhagadia | Jhalod | Jodia | Junagadh | Junagarh | Kalawad | Kalol | Kapad Wanj | Keshod | Khambat | Khambhalia | Khavda | Kheda | Khedbrahma | Kheralu | Kodinar | Kotdasanghani | Kunkawav | Kutch | Kutchmandvi | Kutiyana | Lakhpat | Lakhtar | Lalpur | Limbdi | Limkheda | Lunavada | M.M.Mangrol | Mahuva | Malia-Hatina | Maliya | Malpur | Manavadar | Mandvi | Mangrol | Mehmedabad | Mehsana | Miyagam | Modasa | Morvi | Muli | Mundra | Nadiad | Nakhatrana | Nalia | Narmada | Naswadi | Navasari | Nizar | Okha | Paddhari | Padra | Palanpur | Palitana | Panchmahals | Patan | Pavijetpur | Porbandar | Prantij | Radhanpur | Rahpar | Rajaula | Rajkot | Rajpipla | Ranavav | Sabarkantha | Sanand | Sankheda | Santalpur | Santrampur | Savarkundla | Savli | Sayan | Sayla | Shehra | Sidhpur | Sihor | Sojitra | Sumrasar | Surat | Surendranagar | Talaja | Thara | Tharad | Thasra | Una-Diu | Upleta | Vadgam | Vadodara | Valia | Vallabhipur | Valod | Valsad | Vanthali | Vapi | Vav | Veraval | Vijapur | Viramgam | Visavadar | Visnagar | Vyara | Waghodia | Wankaner ";
      s_a[13]=" Adampur Mandi | Ambala | Assandh | Bahadurgarh | Barara | Barwala | Bawal | Bawanikhera | Bhiwani | Charkhidadri | Cheeka | Chhachrauli | Dabwali | Ellenabad | Faridabad | Fatehabad | Ferojpur Jhirka | Gharaunda | Gohana | Gurgaon | Hansi | Hisar | Jagadhari | Jatusana | Jhajjar | Jind | Julana | Kaithal | Kalanaur | Kalanwali | Kalka | Karnal | Kosli | Kurukshetra | Loharu | Mahendragarh | Meham | Mewat | Mohindergarh | Naraingarh | Narnaul | Narwana | Nilokheri | Nuh | Palwal | Panchkula | Panipat | Pehowa | Ratia | Rewari | Rohtak | Safidon | Sirsa | Siwani | Sonipat | Tohana | Tohsam | Yamunanagar ";
      s_a[14]=" Amb | Arki | Banjar | Bharmour | Bilaspur | Chamba | Churah | Dalhousie | Dehra Gopipur | Hamirpur | Jogindernagar | Kalpa | Kangra | Kinnaur | Kullu | Lahaul | Mandi | Nahan | Nalagarh | Nirmand | Nurpur | Palampur | Pangi | Paonta | Pooh | Rajgarh | Rampur Bushahar | Rohru | Shimla | Sirmaur | Solan | Spiti | Sundernagar | Theog | Udaipur | Una";
      s_a[15]=" Akhnoor | Anantnag | Badgam | Bandipur | Baramulla | Basholi | Bedarwah | Budgam | Doda | Gulmarg | Jammu | Kalakot | Kargil | Karnah | Kathua | Kishtwar | Kulgam | Kupwara | Leh | Mahore | Nagrota | Nobra | Nowshera | Nyoma | Padam | Pahalgam | Patnitop | Poonch | Pulwama | Rajouri | Ramban | Ramnagar | Reasi | Samba | Srinagar | Udhampur | Vaishno Devi ";
      s_a[16]=" Bagodar | Baharagora | Balumath | Barhi | Barkagaon | Barwadih | Basia | Bermo | Bhandaria | Bhawanathpur | Bishrampur | Bokaro | Bolwa | Bundu | Chaibasa | Chainpur | Chakardharpur | Chandil | Chatra | Chavparan | Daltonganj | Deoghar | Dhanbad | Dumka | Dumri | Garhwa | Garu | Ghaghra | Ghatsila | Giridih | Godda | Gomia | Govindpur | Gumla | Hazaribagh | Hunterganj | Ichak | Itki | Jagarnathpur | Jamshedpur | Jamtara | Japla | Jharmundi | Jhinkpani | Jhumaritalaiya | Kathikund | Kharsawa | Khunti | Koderma | Kolebira | Latehar | Lohardaga | Madhupur | Mahagama | Maheshpur Raj | Mandar | Mandu | Manoharpur | Muri | Nagarutatri | Nala | Noamundi | Pakur | Palamu | Palkot | Patan | Rajdhanwar | Rajmahal | Ramgarh | Ranchi | Sahibganj | Saraikela | Simaria | Simdega | Singhbhum | Tisri | Torpa ";
      s_a[17]=" Afzalpur | Ainapur | Aland | Alur | Anekal | Ankola | Arsikere | Athani | Aurad | Bableshwar | Badami | Bagalkot | Bagepalli | Bailhongal | Bangalore | Bangalore Rural | Bangarpet | Bantwal | Basavakalyan | Basavanabagewadi | Basavapatna | Belgaum | Bellary | Belthangady | Belur | Bhadravati | Bhalki | Bhatkal | Bidar | Bijapur | Biligi | Chadchan | Challakere | Chamrajnagar | Channagiri | Channapatna | Channarayapatna | Chickmagalur | Chikballapur | Chikkaballapur | Chikkanayakanahalli | Chikkodi | Chikmagalur | Chincholi | Chintamani | Chitradurga | Chittapur | Cowdahalli | Davanagere | Deodurga | Devangere | Devarahippargi | Dharwad | Doddaballapur | Gadag | Gangavathi | Gokak | Gowribdanpur | Gubbi | Gulbarga | Gundlupet | H.B.Halli | H.D. Kote | Haliyal | Hampi | Hangal | Harapanahalli | Hassan | Haveri | Hebri | Hirekerur | Hiriyur | Holalkere | Holenarsipur | Honnali | Honnavar | Hosadurga | Hosakote | Hosanagara | Hospet | Hubli | Hukkeri | Humnabad | Hungund | Hunsagi | Hunsur | Huvinahadagali | Indi | Jagalur | Jamkhandi | Jewargi | Joida | K.R. Nagar | Kadur | Kalghatagi | Kamalapur | Kanakapura | Kannada | Kargal | Karkala | Karwar | Khanapur | Kodagu | Kolar | Kollegal | Koppa | Koppal | Koratageri | Krishnarajapet | Kudligi | Kumta | Kundapur | Kundgol | Kunigal | Kurugodu | Kustagi | Lingsugur | Madikeri | Madugiri | Malavalli | Malur | Mandya | Mangalore | Manipal | Manvi | Mashal | Molkalmuru | Mudalgi | Muddebihal | Mudhol | Mudigere | Mulbagal | Mundagod | Mundargi | Murugod | Mysore | Nagamangala | Nanjangud | Nargund | Narsimrajapur | Navalgund | Nelamangala | Nimburga | Pandavapura | Pavagada | Puttur | Raibag | Raichur | Ramdurg | Ranebennur | Ron | Sagar | Sakleshpur | Salkani | Sandur | Saundatti | Savanur | Sedam | Shahapur | Shankarnarayana | Shikaripura | Shimoga | Shirahatti | Shorapur | Siddapur | Sidlaghatta | Sindagi | Sindhanur | Sira | Sirsi | Siruguppa | Somwarpet | Sorab | Sringeri | Sriniwaspur | Srirangapatna | Sullia | T. Narsipur | Tallak | Tarikere | Telgi | Thirthahalli | Tiptur | Tumkur | Turuvekere | Udupi | Virajpet | Wadi | Yadgiri | Yelburga | Yellapur ";
      s_a[18]=" Adimaly | Adoor | Agathy | Alappuzha | Alathur | Alleppey | Alwaye | Amini | Androth | Attingal | Badagara | Bitra | Calicut | Cannanore | Chetlet | Ernakulam | Idukki | Irinjalakuda | Kadamath | Kalpeni | Kalpetta | Kanhangad | Kanjirapally | Kannur | Karungapally | Kasargode | Kavarathy | Kiltan | Kochi | Koduvayur | Kollam | Kottayam | Kovalam | Kozhikode | Kunnamkulam | Malappuram | Mananthodi | Manjeri | Mannarghat | Mavelikkara | Minicoy | Munnar | Muvattupuzha | Nedumandad | Nedumgandam | Nilambur | Palai | Palakkad | Palghat | Pathaanamthitta | Pathanamthitta | Payyanur | Peermedu | Perinthalmanna | Perumbavoor | Punalur | Quilon | Ranni | Shertallai | Shoranur | Taliparamba | Tellicherry | Thiruvananthapuram | Thodupuzha | Thrissur | Tirur | Tiruvalla | Trichur | Trivandrum | Uppala | Vadakkanchery | Vikom | Wayanad ";
      s_a[19]=" Agatti Island | Bingaram Island | Bitra Island | Chetlat Island | Kadmat Island | Kalpeni Island | Kavaratti Island | Kiltan Island | Lakshadweep Sea | Minicoy Island | North Island | South Island ";
      s_a[20]=" Agar | Ajaigarh | Alirajpur | Amarpatan | Amarwada | Ambah | Anuppur | Arone | Ashoknagar | Ashta | Atner | Babaichichli | Badamalhera | Badarwsas | Badnagar | Badnawar | Badwani | Bagli | Baihar | Balaghat | Baldeogarh | Baldi | Bamori | Banda | Bandhavgarh | Bareli | Baroda | Barwaha | Barwani | Batkakhapa | Begamganj | Beohari | Berasia | Berchha | Betul | Bhainsdehi | Bhander | Bhanpura | Bhikangaon | Bhimpur | Bhind | Bhitarwar | Bhopal | Biaora | Bijadandi | Bijawar | Bijaypur | Bina | Birsa | Birsinghpur | Budhni | Burhanpur | Buxwaha | Chachaura | Chanderi | Chaurai | Chhapara | Chhatarpur | Chhindwara | Chicholi | Chitrangi | Churhat | Dabra | Damoh | Datia | Deori | Deosar | Depalpur | Dewas | Dhar | Dharampuri | Dindori | Gadarwara | Gairatganj | Ganjbasoda | Garoth | Ghansour | Ghatia | Ghatigaon | Ghorandogri | Ghughari | Gogaon | Gohad | Goharganj | Gopalganj | Gotegaon | Gourihar | Guna | Gunnore | Gwalior | Gyraspur | Hanumana | Harda | Harrai | Harsud | Hatta | Hoshangabad | Ichhawar | Indore | Isagarh | Itarsi | Jabalpur | Jabera | Jagdalpur | Jaisinghnagar | Jaithari | Jaitpur | Jaitwara | Jamai | Jaora | Jatara | Jawad | Jhabua | Jobat | Jora | Kakaiya | Kannod | Kannodi | Karanjia | Kareli | Karera | Karhal | Karpa | Kasrawad | Katangi | Katni | Keolari | Khachrod | Khajuraho | Khakner | Khalwa | Khandwa | Khaniadhana | Khargone | Khategaon | Khetia | Khilchipur | Khirkiya | Khurai | Kolaras | Kotma | Kukshi | Kundam | Kurwai | Kusmi | Laher | Lakhnadon | Lamta | Lanji | Lateri | Laundi | Maheshwar | Mahidpurcity | Maihar | Majhagwan | Majholi | Malhargarh | Manasa | Manawar | Mandla | Mandsaur | Manpur | Mauganj | Mawai | Mehgaon | Mhow | Morena | Multai | Mungaoli | Nagod | Nainpur | Narsingarh | Narsinghpur | Narwar | Nasrullaganj | Nateran | Neemuch | Niwari | Niwas | Nowgaon | Pachmarhi | Pandhana | Pandhurna | Panna | Parasia | Patan | Patera | Patharia | Pawai | Petlawad | Pichhore | Piparia | Pohari | Prabhapattan | Punasa | Pushprajgarh | Raghogarh | Raghunathpur | Rahatgarh | Raisen | Rajgarh | Rajpur | Ratlam | Rehli | Rewa | Sabalgarh | Sagar | Sailana | Sanwer | Sarangpur | Sardarpur | Satna | Saunsar | Sehore | Sendhwa | Seondha | Seoni | Seonimalwa | Shahdol | Shahnagar | Shahpur | Shajapur | Sheopur | Sheopurkalan | Shivpuri | Shujalpur | Sidhi | Sihora | Silwani | Singrauli | Sirmour | Sironj | Sitamau | Sohagpur | Sondhwa | Sonkatch | Susner | Tamia | Tarana | Tendukheda | Teonthar | Thandla | Tikamgarh | Timarani | Udaipura | Ujjain | Umaria | Umariapan | Vidisha | Vijayraghogarh | Waraseoni | Zhirnia ";
      s_a[21]=" Achalpur | Aheri | Ahmednagar | Ahmedpur | Ajara | Akkalkot | Akola | Akole | Akot | Alibagh | Amagaon | Amalner | Ambad | Ambejogai | Amravati | Arjuni Merogaon | Arvi | Ashti | Atpadi | Aurangabad | Ausa | Babhulgaon | Balapur | Baramati | Barshi Takli | Barsi | Basmatnagar | Bassein | Beed | Bhadrawati | Bhamregadh | Bhandara | Bhir | Bhiwandi | Bhiwapur | Bhokar | Bhokardan | Bhoom | Bhor | Bhudargad | Bhusawal | Billoli | Brahmapuri | Buldhana | Butibori | Chalisgaon | Chamorshi | Chandgad | Chandrapur | Chandur | Chanwad | Chhikaldara | Chikhali | Chinchwad | Chiplun | Chopda | Chumur | Dahanu | Dapoli | Darwaha | Daryapur | Daund | Degloor | Delhi Tanda | Deogad | Deolgaonraja | Deori | Desaiganj | Dhadgaon | Dhanora | Dharani | Dhiwadi | Dhule | Dhulia | Digras | Dindori | Edalabad | Erandul | Etapalli | Gadhchiroli | Gadhinglaj | Gaganbavada | Gangakhed | Gangapur | Gevrai | Ghatanji | Golegaon | Gondia | Gondpipri | Goregaon | Guhagar | Hadgaon | Hatkangale | Hinganghat | Hingoli | Hingua | Igatpuri | Indapur | Islampur | Jalgaon | Jalna | Jamkhed | Jamner | Jath | Jawahar | Jintdor | Junnar | Kagal | Kaij | Kalamb | Kalamnuri | Kallam | Kalmeshwar | Kalwan | Kalyan | Kamptee | Kandhar | Kankavali | Kannad | Karad | Karjat | Karmala | Katol | Kavathemankal | Kedgaon | Khadakwasala | Khamgaon | Khed | Khopoli | Khultabad | Kinwat | Kolhapur | Kopargaon | Koregaon | Kudal | Kuhi | Kurkheda | Kusumba | Lakhandur | Langa | Latur | Lonar | Lonavala | Madangad | Madha | Mahabaleshwar | Mahad | Mahagaon | Mahasala | Mahaswad | Malegaon | Malgaon | Malgund | Malkapur | Malsuras | Malwan | Mancher | Mangalwedha | Mangaon | Mangrulpur | Manjalegaon | Manmad | Maregaon | Mehda | Mekhar | Mohadi | Mohol | Mokhada | Morshi | Mouda | Mukhed | Mul | Mumbai | Murbad | Murtizapur | Murud | Nagbhir | Nagpur | Nahavara | Nanded | Nandgaon | Nandnva | Nandurbar | Narkhed | Nashik | Navapur | Ner | Newasa | Nilanga | Niphad | Omerga | Osmanabad | Pachora | Paithan | Palghar | Pali | Pandharkawada | Pandharpur | Panhala | Paranda | Parbhani | Parner | Parola | Parseoni | Partur | Patan | Pathardi | Pathari | Patoda | Pauni | Peint | Pen | Phaltan | Pimpalner | Pirangut | Poladpur | Pune | Pusad | Pusegaon | Radhanagar | Rahuri | Raigad | Rajapur | Rajgurunagar | Rajura | Ralegaon | Ramtek | Ratnagiri | Raver | Risod | Roha | Sakarwadi | Sakoli | Sakri | Salekasa | Samudrapur | Sangamner | Sanganeshwar | Sangli | Sangola | Sanguem | Saoner | Saswad | Satana | Satara | Sawantwadi | Seloo | Shahada | Shahapur | Shahuwadi | Shevgaon | Shirala | Shirol | Shirpur | Shirur | Shirwal | Sholapur | Shri Rampur | Shrigonda | Shrivardhan | Sillod | Sinderwahi | Sindhudurg | Sindkheda | Sindkhedaraja | Sinnar | Sironcha | Soyegaon | Surgena | Talasari | Talegaon S.Ji Pant | Taloda | Tasgaon | Thane | Tirora | Tiwasa | Trimbak | Tuljapur | Tumsar | Udgir | Umarkhed | Umrane | Umrer | Urlikanchan | Vaduj | Velhe | Vengurla | Vijapur | Vita | Wada | Wai | Walchandnagar | Wani | Wardha | Warlydwarud | Warora | Washim | Wathar | Yavatmal | Yawal | Yeola | Yeotmal ";
      s_a[22]=" Bishnupur | Chakpikarong | Chandel | Chattrik | Churachandpur | Imphal | Jiribam | Kakching | Kalapahar | Mao | Mulam | Parbung | Sadarhills | Saibom | Sempang | Senapati | Sochumer | Taloulong | Tamenglong | Thinghat | Thoubal | Ukhrul ";
      s_a[23]=" Amlaren | Baghmara | Cherrapunjee | Dadengiri | Garo Hills | Jaintia Hills | Jowai | Khasi Hills | Khliehriat | Mariang | Mawkyrwat | Nongpoh | Nongstoin | Resubelpara | Ri Bhoi | Shillong | Tura | Williamnagar";
      s_a[24]=" Aizawl | Champhai | Demagiri | Kolasib | Lawngtlai | Lunglei | Mamit | Saiha | Serchhip";
      s_a[25]=" Dimapur | Jalukie | Kiphire | Kohima | Mokokchung | Mon | Phek | Tuensang | Wokha | Zunheboto ";
      s_a[26]=" Anandapur | Angul | Anugul | Aska | Athgarh | Athmallik | Attabira | Bagdihi | Balangir | Balasore | Baleswar | Baliguda | Balugaon | Banaigarh | Bangiriposi | Barbil | Bargarh | Baripada | Barkot | Basta | Berhampur | Betanati | Bhadrak | Bhanjanagar | Bhawanipatna | Bhubaneswar | Birmaharajpur | Bisam Cuttack | Boriguma | Boudh | Buguda | Chandbali | Chhatrapur | Chhendipada | Cuttack | Daringbadi | Daspalla | Deodgarh | Deogarh | Dhanmandal | Dharamgarh | Dhenkanal | Digapahandi | Dunguripali | G. Udayagiri | Gajapati | Ganjam | Ghatgaon | Gudari | Gunupur | Hemgiri | Hindol | Jagatsinghapur | Jajpur | Jamankira | Jashipur | Jayapatna | Jeypur | Jharigan | Jharsuguda | Jujumura | Kalahandi | Kalimela | Kamakhyanagar | Kandhamal | Kantabhanji | Kantamal | Karanjia | Kashipur | Kendrapara | Kendujhar | Keonjhar | Khalikote | Khordha | Khurda | Komana | Koraput | Kotagarh | Kuchinda | Lahunipara | Laxmipur | M. Rampur | Malkangiri | Mathili | Mayurbhanj | Mohana | Motu | Nabarangapur | Naktideul | Nandapur | Narlaroad | Narsinghpur | Nayagarh | Nimapara | Nowparatan | Nowrangapur | Nuapada | Padampur | Paikamal | Palla Hara | Papadhandi | Parajang | Pardip | Parlakhemundi | Patnagarh | Pattamundai | Phiringia | Phulbani | Puri | Puruna Katak | R. Udayigiri | Rairakhol | Rairangpur | Rajgangpur | Rajkhariar | Rayagada | Rourkela | Sambalpur | Sohela | Sonapur | Soro | Subarnapur | Sunabeda | Sundergarh | Surada | T. Rampur | Talcher | Telkoi | Titlagarh | Tumudibandha | Udala | Umerkote ";
      s_a[27]=" Bahur | Karaikal | Mahe | Pondicherry | Purnankuppam | Valudavur | Villianur | Yanam ";
      s_a[28]=" Abohar | Ajnala | Amritsar | Balachaur | Barnala | Batala | Bathinda | Chandigarh | Dasua | Dinanagar | Faridkot | Fatehgarh Sahib | Fazilka | Ferozepur | Garhashanker | Goindwal | Gurdaspur | Guruharsahai | Hoshiarpur | Jagraon | Jalandhar | Jugial | Kapurthala | Kharar | Kotkapura | Ludhiana | Malaut | Malerkotla | Mansa | Moga | Muktasar | Nabha | Nakodar | Nangal | Nawanshahar | Nawanshahr | Pathankot | Patiala | Patti | Phagwara | Phillaur | Phulmandi | Quadian | Rajpura | Raman | Rayya | Ropar | Rupnagar | Samana | Samrala | Sangrur | Sardulgarh | Sarhind | SAS Nagar | Sultanpur Lodhi | Sunam | Tanda Urmar | Tarn Taran | Zira ";
      s_a[29]=" Abu Road | Ahore | Ajmer | Aklera | Alwar | Amber | Amet | Anupgarh | Asind | Aspur | Atru | Bagidora | Bali | Bamanwas | Banera | Bansur | Banswara | Baran | Bari | Barisadri | Barmer | Baseri | Bassi | Baswa | Bayana | Beawar | Begun | Behror | Bhadra | Bharatpur | Bhilwara | Bhim | Bhinmal | Bikaner | Bilara | Bundi | Chhabra | Chhipaborad | Chirawa | Chittorgarh | Chohtan | Churu | Dantaramgarh | Dausa | Deedwana | Deeg | Degana | Deogarh | Deoli | Desuri | Dhariawad | Dholpur | Digod | Dudu | Dungarpur | Dungla | Fatehpur | Gangapur | Gangdhar | Gerhi | Ghatol | Girwa | Gogunda | Hanumangarh | Hindaun | Hindoli | Hurda | Jahazpur | Jaipur | Jaisalmer | Jalore | Jhalawar | Jhunjhunu | Jodhpur | Kaman | Kapasan | Karauli | Kekri | Keshoraipatan | Khandar | Kherwara | Khetri | Kishanganj | Kishangarh | Kishangarhbas | Kolayat | Kota | Kotputli | Kotra | Kotri | Kumbalgarh | Kushalgarh | Ladnun | Ladpura | Lalsot | Laxmangarh | Lunkaransar | Mahuwa | Malpura | Malvi | Mandal | Mandalgarh | Mandawar | Mangrol | Marwar-Jn | Merta | Nadbai | Nagaur | Nainwa | Nasirabad | Nathdwara | Nawa | Neem Ka Thana | Newai | Nimbahera | Nohar | Nokha | Onli | Osian | Pachpadara | Pachpahar | Padampur | Pali | Parbatsar | Phagi | Phalodi | Pilani | Pindwara | Pipalda | Pirawa | Pokaran | Pratapgarh | Raipur | Raisinghnagar | Rajgarh | Rajsamand | Ramganj Mandi | Ramgarh | Rashmi | Ratangarh | Reodar | Rupbas | Sadulshahar | Sagwara | Sahabad | Salumber | Sanchore | Sangaria | Sangod | Sapotra | Sarada | Sardarshahar | Sarwar | Sawai Madhopur | Shahapura | Sheo | Sheoganj | Shergarh | Sikar | Sirohi | Siwana | Sojat | Sri Dungargarh | Sri Ganganagar | Sri Karanpur | Sri Madhopur | Sujangarh | Taranagar | Thanaghazi | Tibbi | Tijara | Todaraisingh | Tonk | Udaipur | Udaipurwati | Uniayara | Vallabhnagar | Viratnagar ";
      s_a[30]=" Barmiak | Be | Bhurtuk | Chhubakha | Chidam | Chubha | Chumikteng | Dentam | Dikchu | Dzongri | Gangtok | Gauzing | Gyalshing | Hema | Kerung | Lachen | Lachung | Lema | Lingtam | Lungthu | Mangan | Namchi | Namthang | Nanga | Nantang | Naya Bazar | Padamachen | Pakhyong | Pemayangtse | Phensang | Rangli | Rinchingpong | Sakyong | Samdong | Singtam | Siniolchu | Sombari | Soreng | Sosing | Tekhug | Temi | Tsetang | Tsomgo | Tumlong | Yangang | Yumtang ";
      s_a[31]=" Ambasamudram | Anamali | Arakandanallur | Arantangi | Aravakurichi | Ariyalur | Arkonam | Arni | Aruppukottai | Attur | Avanashi | Batlagundu | Bhavani | Chengalpattu | Chengam | Chennai | Chidambaram | Chingleput | Coimbatore | Courtallam | Cuddalore | Cumbum | Denkanikoitah | Devakottai | Dharampuram | Dharmapuri | Dindigul | Erode | Gingee | Gobichettipalayam | Gudalur | Gudiyatham | Harur | Hosur | Jayamkondan | Kallkurichi | Kanchipuram | Kangayam | Kanyakumari | Karaikal | Karaikudi | Karur | Keeranur | Kodaikanal | Kodumudi | Kotagiri | Kovilpatti | Krishnagiri | Kulithalai | Kumbakonam | Kuzhithurai | Madurai | Madurantgam | Manamadurai | Manaparai | Mannargudi | Mayiladuthurai | Mayiladutjurai | Mettupalayam | Metturdam | Mudukulathur | Mulanur | Musiri | Nagapattinam | Nagarcoil | Namakkal | Nanguneri | Natham | Neyveli | Nilgiris | Oddanchatram | Omalpur | Ootacamund | Ooty | Orathanad | Palacode | Palani | Palladum | Papanasam | Paramakudi | Pattukottai | Perambalur | Perundurai | Pollachi | Polur | Pondicherry | Ponnamaravathi | Ponneri | Pudukkottai | Rajapalayam | Ramanathapuram | Rameshwaram | Ranipet | Rasipuram | Salem | Sankagiri | Sankaran | Sathiyamangalam | Sivaganga | Sivakasi | Sriperumpudur | Srivaikundam | Tenkasi | Thanjavur | Theni | Thirumanglam | Thiruraipoondi | Thoothukudi | Thuraiyure | Tindivanam | Tiruchendur | Tiruchengode | Tiruchirappalli | Tirunelvelli | Tirupathur | Tirupur | Tiruttani | Tiruvallur | Tiruvannamalai | Tiruvarur | Tiruvellore | Tiruvettipuram | Trichy | Tuticorin | Udumalpet | Ulundurpet | Usiliampatti | Uthangarai | Valapady | Valliyoor | Vaniyambadi | Vedasandur | Vellore | Velur | Vilathikulam | Villupuram | Virudhachalam | Virudhunagar | Wandiwash | Yercaud ";
      s_a[32]=" Agartala | Ambasa | Bampurbari | Belonia | Dhalai | Dharam Nagar | Kailashahar | Kamal Krishnabari | Khopaiyapara | Khowai | Phuldungsei | Radha Kishore Pur | Tripura ";
      s_a[33]=" Achhnera | Agra | Akbarpur | Aliganj | Aligarh | Allahabad | Ambedkar Nagar | Amethi | Amiliya | Amroha | Anola | Atrauli | Auraiya | Azamgarh | Baberu | Badaun | Baghpat | Bagpat | Baheri | Bahraich | Ballia | Balrampur | Banda | Bansdeeh | Bansgaon | Bansi | Barabanki | Bareilly | Basti | Bhadohi | Bharthana | Bharwari | Bhogaon | Bhognipur | Bidhuna | Bijnore | Bikapur | Bilari | Bilgram | Bilhaur | Bindki | Bisalpur | Bisauli | Biswan | Budaun | Budhana | Bulandshahar | Bulandshahr | Capianganj | Chakia | Chandauli | Charkhari | Chhata | Chhibramau | Chirgaon | Chitrakoot | Chunur | Dadri | Dalmau | Dataganj | Debai | Deoband | Deoria | Derapur | Dhampur | Domariyaganj | Dudhi | Etah | Etawah | Faizabad | Farrukhabad | Fatehpur | Firozabad | Garauth | Garhmukteshwar | Gautam Buddha Nagar | Ghatampur | Ghaziabad | Ghazipur | Ghosi | Gonda | Gorakhpur | Gunnaur | Haidergarh | Hamirpur | Hapur | Hardoi | Harraiya | Hasanganj | Hasanpur | Hathras | Jalalabad | Jalaun | Jalesar | Jansath | Jarar | Jasrana | Jaunpur | Jhansi | Jyotiba Phule Nagar | Kadipur | Kaimganj | Kairana | Kaisarganj | Kalpi | Kannauj | Kanpur | Karchhana | Karhal | Karvi | Kasganj | Kaushambi | Kerakat | Khaga | Khair | Khalilabad | Kheri | Konch | Kumaon | Kunda | Kushinagar | Lalganj | Lalitpur | Lucknow | Machlishahar | Maharajganj | Mahoba | Mainpuri | Malihabad | Mariyahu | Math | Mathura | Mau | Maudaha | Maunathbhanjan | Mauranipur | Mawana | Meerut | Mehraun | Meja | Mirzapur | Misrikh | Modinagar | Mohamdabad | Mohamdi | Moradabad | Musafirkhana | Muzaffarnagar | Nagina | Najibabad | Nakur | Nanpara | Naraini | Naugarh | Nawabganj | Nighasan | Noida | Orai | Padrauna | Pahasu | Patti | Pharenda | Phoolpur | Phulpur | Pilibhit | Pitamberpur | Powayan | Pratapgarh | Puranpur | Purwa | Raibareli | Rampur | Ramsanehi Ghat | Rasara | Rath | Robertsganj | Sadabad | Safipur | Sagri | Saharanpur | Sahaswan | Sahjahanpur | Saidpur | Salempur | Salon | Sambhal | Sandila | Sant Kabir Nagar | Sant Ravidas Nagar | Sardhana | Shahabad | Shahganj | Shahjahanpur | Shikohabad | Shravasti | Siddharthnagar | Sidhauli | Sikandra Rao | Sikandrabad | Sitapur | Siyana | Sonbhadra | Soraon | Sultanpur | Tanda | Tarabganj | Tilhar | Unnao | Utraula | Varanasi | Zamania ";
      s_a[34]=" Almora | Bageshwar | Bhatwari | Chakrata | Chamoli | Champawat | Dehradun | Deoprayag | Dharchula | Dunda | Haldwani | Haridwar | Joshimath | Karan Prayag | Kashipur | Khatima | Kichha | Lansdown | Munsiari | Mussoorie | Nainital | Pantnagar | Partapnagar | Pauri Garhwal | Pithoragarh | Purola | Rajgarh | Ranikhet | Roorkee | Rudraprayag | Tehri Garhwal | Udham Singh Nagar | Ukhimath | Uttarkashi ";
      s_a[35]=" Adra | Alipurduar | Amlagora | Arambagh | Asansol | Balurghat | Bankura | Bardhaman | Basirhat | Berhampur | Bethuadahari | Birbhum | Birpara | Bishanpur | Bolpur | Bongoan | Bulbulchandi | Burdwan | Calcutta | Canning | Champadanga | Contai | Cooch Behar | Daimond Harbour | Dalkhola | Dantan | Darjeeling | Dhaniakhali | Dhuliyan | Dinajpur | Dinhata | Durgapur | Gangajalghati | Gangarampur | Ghatal | Guskara | Habra | Haldia | Harirampur | Harishchandrapur | Hooghly | Howrah | Islampur | Jagatballavpur | Jalpaiguri | Jhalda | Jhargram | Kakdwip | Kalchini | Kalimpong | Kalna | Kandi | Karimpur | Katwa | Kharagpur | Khatra | Krishnanagar | Mal Bazar | Malda | Manbazar | Mathabhanga | Medinipur | Mekhliganj | Mirzapur | Murshidabad | Nadia | Nagarakata | Nalhati | Nayagarh | Parganas | Purulia | Raiganj | Rampur Hat | Ranaghat | Seharabazar | Siliguri | Suri | Takipur | Tamluk";
  
      function print_state(state_id){
          // given the id of the <select> tag as function argument, it inserts <option> tags
          var option_str = document.getElementById(state_id);
          option_str.length=0;
          option_str.options[0] = new Option('Select State','');
          option_str.selectedIndex = 0;
          for (var i=0; i<state_arr.length; i++) {
              option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
          }
      }
  
      function print_city(city_id, city_index){
          var option_str = document.getElementById(city_id);
          option_str.length=0;	// Fixed by Julian Woods
          option_str.options[0] = new Option('Select City','');
          option_str.selectedIndex = 0;
          var city_arr = s_a[city_index].split("|");
          for (var i=0; i<city_arr.length; i++) {
              option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
          }
      }
  </script>
</head>

<body class="bg-gray-100">
   <!-- This is an example component -->
   <div>
      <nav class="border-b border-gray-200 fixed z-30 w-full">
         <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
               <div class="flex items-center justify-start">
                  <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                     class="lg:hidden mr-2 text-gray-100 cursor-pointer p-2 rounded">
                     <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                           d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                           clip-rule="evenodd"></path>
                     </svg>
                     <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden text-gray-100" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                           d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                           clip-rule="evenodd"></path>
                     </svg>
                  </button>
                  <a href="https://demo.themesberg.com/windster/" class="text-xl font-bold flex items-center lg:ml-2.5">
                     <span class="self-center whitespace-nowrap">Relief Camp</span>
                  </a>
               </div>
               <div class="flex items-center justify-end">
                  <button id="toggleSidebarMobileSearch" type="button"
                     class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg">
                  </button>
                  <div x-data="{ dropdownOpen: false }" class="relative">
                     <button @click="dropdownOpen = ! dropdownOpen"
                        class="relative block h-7 w-7 rounded-full overflow-hidden shadow focus:outline-none">
                        <img class="h-full w-full object-cover"
                           src="https://thumbs.dreamstime.com/b/default-avatar-profile-vector-user-profile-default-avatar-profile-vector-user-profile-profile-179376714.jpg"
                           alt="Your avatar">
                     </button>

                     <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                        style="display: none;"></div>

                     <div x-show="dropdownOpen"
                        class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                        style="display: none;">
                        <p class="px-4 py-2 font-montserrat font-medium text-base text-gray-900">User Name</p>
                        <div class="bg-gray-500" style="padding: 0.5px 0px;"></div>
                        <a href=""
                           class="block px-4 py-2 font-montserrat text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                        <a href=""
                           class="block px-4 py-2 font-montserrat text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Delete Account</a>
                     </div>
                  </div>
               </div>
            </div>
      </nav>
      <div class="flex overflow-hidden bg-white pt-16">
         <aside id="sidebar"
         class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
         aria-label="Sidebar" style="background-color: #004e64;">
            <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
               <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto" style="background-color: #004e64;">
                  <div class="flex-1 px-3 divide-y space-y-1">
                     <ul class="space-y-2 pb-2">

                        <li>
                           <a id="dashboard_btn" class="text-base cursor-pointer text-gray-800 bg-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 hover:text-gray-800 group">
                              <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6 flex-shrink-0 transition duration-75"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                              </svg>
                              <span class="ml-3">Dashboard</span>
                           </a>
                        </li>
                        <li>
                           <a class="text-base cursor-default text-gray-100 font-normal rounded-lg flex items-center p-2 group">
                              <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6 flex-shrink-0"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                              </svg>
                              <span class="ml-3 flex-1 whitespace-nowrap">People</span>
                           </a>

                        <li>
                           <a id="waiting_btn" class="text-base cursor-pointer text-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 hover:text-gray-800 group">
                              <svg xmlns="http://www.w3.org/2000/svg"
                                 class="ml-7 h-6 w-6 flex-shrink-0 transition duration-75"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                              </svg>
                              <span class="pl-2">Booked This Camp</span>
                           </a>
                        </li>
                        <li>
                           <a id="arrived_btn" class="text-base cursor-pointer text-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 hover:text-gray-800 group">
                              <svg xmlns="http://www.w3.org/2000/svg"
                                 class="ml-7 h-6 w-6 flex-shrink-0"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                              </svg>
                              <span class="pl-2">Currently in Camp</span>
                           </a>
                        </li>

                        </li>
                        <li>
                           <a id="requirement_btn" class="text-base cursor-pointer text-gray-100 font-normal rounded-lg hover:bg-gray-100 hover:text-gray-800 flex items-center p-2 group ">
                              <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6 flex-shrink-0"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                              </svg>
                              <span class="ml-3 flex-1 whitespace-nowrap">Requirements</span>
                           </a>
                        </li>
                        <li>
                           <a id="edit_btn" class="text-base text-gray-100 font-normal rounded-lg hover:bg-gray-100 hover:text-gray-800 flex items-center p-2 group ">
                              <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6 flex-shrink-0"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                              </svg>
                              <span class="ml-3 flex-1 whitespace-nowrap">Edit Profile</span>
                           </a>
                        </li>
                        <li>
                           <a href=""
                              class="text-base text-gray-100 font-normal rounded-lg hover:bg-gray-100 hover:text-gray-800 flex items-center p-2 group ">
                              <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6 flex-shrink-0"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                              </svg>
                              <span class="ml-3 flex-1 whitespace-nowrap">Log Out</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </aside>
         <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
         <div id="main-content" class="h-full w-full relative overflow-y-auto lg:ml-64">
            <main class="min-h-screen">
               <!-- Statistics Cards -->
               <div id="statistics" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 p-4 gap-4">
                  <div
                     class="shadow-sm hover:shadow-lg rounded-md flex items-center justify-between p-3 font-medium group">
                     <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                           class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                           </path>
                        </svg>
                     </div>
                     <div class="text-right">
                        <p id="visitors" class="text-2xl">1,257</p>
                        <p>Visitors</p>
                     </div>
                  </div>
                  <div class="shadow-sm hover:shadow-lg rounded-md flex items-center justify-between p-3 font-medium group">
                     <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                         </svg>
                     </div>
                     <div class="text-right">
                        <p id="booking" class="text-2xl"></p>
                        <p>Total Booking</p>
                     </div>
                  </div>
                  <div
                     class="shadow-sm hover:shadow-lg rounded-md flex items-center justify-between p-3 font-medium group">
                     <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                         </svg>
                     </div>
                     <div class="text-right">
                        <p id="currently_in" class="text-2xl"></p>
                        <p>Currently in Camp</p>
                     </div>
                  </div>
               </div>
               <!-- ./Statistics Cards -->

            <!--main dashboard starts-->
            <div id="dashboard_div" class="">
               <div class="grid grid-cols-1 md:grid-cols-2 p-4 gap-4">
                  <div class="camp-box p-3 rounded shadow-sm hover:shadow-lg">
                     <h1 class="pb-4 font-semibold text-xl font-oswald">Camp Title: Camp xyz</h1>
                     <p class="camp-description font-montserrat">
                        (Description)Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos cum tempora,
                        alias nemo ad
                        consequuntur perferendis minima doloremque eaque pariatur at debitis ducimus cupiditate! A nihil
                        asperiores voluptas excepturi corporis.
                     </p>
                     <div class="flex justify-between mt-4">
                        <p class="text-gray-700 font-montserrat text-base font-semibold mb-2">Total Capacity : <f
                           id="total-capacity" class="font-normal">100</f>
                     </p>
                     <p class="text-gray-700 font-montserrat text-base font-semibold mb-4">Remaining space : <f
                           id="remaining-space" class="font-normal text-green-400">50</f>
                     </p>
                     </div>
                  </div>
                  <div class="camp-box p-3 rounded shadow-sm hover:shadow-lg">
                     <h1 class="pb-4 font-semibold text-xl font-oswald">Address</h1>
                     <p class="camp-description font-montserrat">
                        Address Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016
                     </p>
                     <p class="text-gray-700 font-montserrat text-base mt-5 font-semibold">Contact Number : <f
                           class="font-normal">9876543452</f>
                     </p>
                  </div>
               </div>

               <!-- Progress bar -->
               <div class="grid grid-cols-1 p-4 gap-4">
                  <div class="progress-bar rounded-lg w-full shadow-sm hover:shadow-lg block p-4 m-auto">
                     <div>
                        <span
                           class="text-sm font-semibold camp-capacity inline-block py-1 px-2 uppercase rounded-full text-black bg-white">
                           Camp Capacity
                        </span>
                     </div>
                     <div class="w-full h-4 bg-gray-200 rounded-full mt-3">
                        <div id="progress-bar" class="h-full text-center text-xs bg-black text-white rounded-full"
                           style="width:0">
                           <!-- this values will come through js -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Progress bar end -->

               <div class="block md:flex gap-4 p-4 md:mb-14">
                  <div class="camp-box w-full md:w-2/6 rounded p-3 mb-4 md:mb-0 col-span-2">
                     <iframe class="w-full h-full md:h-80"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889"
                        frameborder="0" style="border:0"></iframe>
                  </div>
                  <div class="camp-box p-3 w-full md:w-2/3 rounded col-span-3">
                     <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 md:gap-1">
                        <div>
                           <img alt="gallery" class="w-full object-cover object-center block rounded"
                              src="https://cdn.pixabay.com/photo/2016/02/19/20/57/iceland-1211171_960_720.jpg">
                        </div>
                        <div>
                           <img alt="gallery" class="w-full object-cover object-center block rounded"
                              src="https://cdn.pixabay.com/photo/2016/02/19/20/57/iceland-1211171_960_720.jpg">
                        </div>
                        <div>
                           <img alt="gallery" class="w-full object-cover object-center block rounded"
                              src="https://cdn.pixabay.com/photo/2016/02/19/20/57/iceland-1211171_960_720.jpg">
                        </div>
                        <div>
                           <img alt="gallery" class="w-full object-cover object-center block rounded"
                              src="https://cdn.pixabay.com/photo/2016/02/19/20/57/iceland-1211171_960_720.jpg">
                        </div>
                        <div>
                           <img alt="gallery" class="w-full object-cover object-center block rounded"
                              src="https://cdn.pixabay.com/photo/2016/02/19/20/57/iceland-1211171_960_720.jpg">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--main dashboard ends-->

            <!--user type 1-->
            <div id="waiting_div" class="hidden">
                <div class="flex justify-end items-center px-4 mt-4">
                   <div id="search_panding" class="w-full md:w-1/3 flex items-center bg-white rounded border border-solid border-gray-700">
                      <svg class="relative w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                      </svg>
                      <input id="search_panding_people" type="text" class="md:text-xs lg:text-base form-control font-montserrat w-full rounded pl-2 pr-1.5 py-1.5 outline-none"
                       onkeyup="search_panding()" placeholder="Search here..."/>
                   </div>
                </div>
                <div class="flex flex-col mb-14">
                   <div class="py-4 px-4 overflow-x-auto">
                      <div class="table-container align-middle max-h-screen overflow-y-auto inline-block min-w-full shadow sm:rounded-lg border-b border-gray-200" style="scrollbar-width: thin;">
                         <table class="min-w-full">
                            <thead class="sticky top-0 z-10 font-oswald">
                               <tr class="">
                                     <th
                                         class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                         Name</th>
                                     <th
                                         class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                         Age</th>
                                     <th
                                         class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                         Date</th>
                                     <th
                                         class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                         Status</th>
                                     <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                 </tr>
                             </thead>
 
                             <tbody class="font-montserrat">
                                 <tr class="data_panding">
                                     <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                      <div class="ml-2">
                                                 <div class="text-sm leading-5 font-medium text-gray-900">John Dude
                                                 </div>
                                                 <div class="text-sm leading-5 text-gray-500">9834562343</div>
                                             </div>
                                         </div>
                                     </td>
 
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                         <div class="text-sm leading-5 text-gray-900">21</div>
                                     </td>
 
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                         <div class="text-sm leading-5 text-gray-900">15-01-2021</div>
                                     </td>
 
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                         <span class="px-2 py-1.5 font-montserrat font-semibold text-sm leading-tight text-yellow-700 bg-yellow-100 rounded-full whitespace-nowrap">Not Arrived</span>
                                     </td>
 
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                         <button title="arrived" class="mr-2 text-green-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                           </svg></button>
                                         <button title="remove" class="text-red-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                           </svg>
                                         </button>
                                     </td>
                                 </tr>
                               </tbody>
                            </table>
                         <div class="px-4 py-3 bg-gray-50 sticky bottom-0 z-10">
                         <span class="flex text-gray-600 items-center text-sm font-montserrat font-semibold col-span-3">Total : <p id="total_panding" class="font-montserrat font-semibold text-gray-500">100</p></span>                                                                      
                      </div>
                   </div> 
                </div>
             </div></div>
             <!--user type 1 ends-->

             <!--user type 2-->
              <!--add people model-->
               <div id="add-model" aria-hidden="true" class="fixed right-0 left-0 z-50 justify-center items-center h-full inset-0" style="background-color:rgba(0, 0, 0, 0.3); display: none;">
                  <div class="relative px-5 w-full max-w-md h-auto">
                     <div class="relative bg-white rounded-lg cursor-default shadow">
                        <div class="flex justify-end p-2">
                                 <button id="close" type="button" class="text-gray-600 bg-transparent hover:bg-gray-400 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                                 <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"></path></svg>
                                 </button>
                        </div>
                        <div class="px-6 py-8 rounded w-fill">
                           <!--form starts-->
                           <form action="" method="POST" class="" onsubmit="return validate(this)">
                               <!--Name feild-->
                               <input 
                                   type="text"
                                   class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-5 outline-none focus:border-black"
                                   name="name"
                                   placeholder="Name" style="color: #535353;" required/>
                               <!--Age feild-->
                               <input 
                                   type="text"
                                   class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-5 outline-none focus:border-black"
                                   name="age"
                                   placeholder="Age" style="color: #535353;" required/> 
                               <!--phone feild-->
                               <input 
                                   type="text"
                                   id="phone" onkeyup="phone_no()"
                                   class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-2 outline-none focus:border-black"
                                   name="phone"
                                   placeholder="Valid 10 digit mobile number" style="color: #535353;" required/>
                                   <p id="phone_alert" class="mb-4 text-xs"></p>
                               <button
                                   type="submit"
                                   id="sub-btn"
                                   class="w-full text-center font-oswald py-3 rounded text-white focus:outline-none my-1 transition duration-150 ease-in-out uppercase">Submit</button>
                           </form>
                       </div>
                     </div>
                  </div>
               </div>
            <!--add people model ends-->
            <div id="arrived_div" class="hidden">
                <div class="flex justify-between items-center px-4 mt-4">
                  <div class="mr-3">
                     <button id="add-people" class="rounded px-3 py-1.5 text-white" style="background-color: #004e64;">+ ADD</button>
                 </div>
                   <div id="search_arrived" class="w-3/5 md:w-1/3 flex items-center bg-white rounded border border-solid border-gray-700">
                      <svg class="relative w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                      </svg>
                      <input id="search_arrived_people" type="text" class="md:text-xs lg:text-base form-control font-montserrat w-full rounded pl-2 pr-1.5 py-1.5 outline-none"
                       onkeyup="search_arrived()" placeholder="Search here..."/>
                   </div>
                </div>
                <div class="flex flex-col mb-14">
                 <div class="py-4 px-4 overflow-x-auto">
                     <div class="table-container align-middle max-h-screen overflow-y-auto inline-block min-w-full shadow sm:rounded-lg border-b border-gray-200" style="scrollbar-width: thin;">
                         <table class="min-w-full">
                             <thead class="sticky top-0 z-10 font-oswald">
                                 <tr class="">
                                     <th
                                         class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                         Name</th>
                                     <th
                                         class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                         Age</th>
                                     <th
                                         class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                         Date</th>
                                     <th
                                         class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                         Status</th>
                                     <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                 </tr>
                             </thead>
 
                             <tbody class="font-montserrat">
                                 <tr class="data_arrived">
                                     <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                      <div class="ml-2">
                                                 <div class="text-sm leading-5 font-medium text-gray-900">John Dude
                                                 </div>
                                                 <div class="text-sm leading-5 text-gray-500">9834562343</div>
                                             </div>
                                         </div>
                                     </td>
 
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                         <div class="text-sm leading-5 text-gray-900">21</div>
                                     </td>
 
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                         <div class="text-sm leading-5 text-gray-900">15-01-2021</div>
                                     </td>
 
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                        <span class="px-2 py-1.5 font-montserrat text-sm font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full">Arrived</span>
                                     </td>
 
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                        <button class="bg-red-500 text-white px-4 py-2 font-montserrat rounded">Remove</button>
                                     </td>
                                 </tr>
                                 
                             </tbody>
                         </table>
                         <div class="px-4 py-3 bg-gray-50 sticky bottom-0 z-10">
                         <span class="flex text-gray-600 items-center text-sm font-montserrat font-semibold col-span-3">Total : <p id="total_arrived" class="font-montserrat font-semibold text-gray-500">100</p></span>                                                                      
                     </div>
                     </div> 
                 </div>
             </div></div>
             <!--usertype 2 ends-->

              <!--requirements-->
            <div id="requirement_div" class="hidden">
                <div class="flex flex-col mt-8">
                 <div class="requirement m-4 p-4">
                  <h3 class="text-black font-normal text-lg md:text-xl font-oswald mb-4">Post Your Requirements Here</h3>
                    <form>
                     <div class="flex items-center justify-between mb-6">
                        <div class="w-fit">
                           <select class="form-select text-base font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                              <option selected disabled hidden>Select Catagory</option>
                              <option value="food">Food</option>
                              <option value="meds">Medicine</option>
                              <option value="other">Other</option>
                           </select>
                        </div>
                        <div class=""> 
                              <button type="submit" class="font-oswald font-normal px-3 py-1.5 rounded" style="background-color: #004e64; color: white;">Post</button>
                        </div>
                     </div>
                     <textarea class="mt-3 h-44 block font-montserrat w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mb-3" placeholder="Write your requirements..." required></textarea>
                  </form>
                 </div>   
                 <div class="py-4 px-4 overflow-x-auto mb-14">
                     <div class="table-container align-middle max-h-screen overflow-y-auto inline-block min-w-full shadow sm:rounded-lg border-b border-gray-200" style="scrollbar-width: thin;">
                         <table class="min-w-full">
                             <thead class="sticky top-0 z-10 font-oswald">
                                 <tr class="">
                                     <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                         Requirements</th>
                                     <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                         Date</th>
                                     <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                         </th>
                                    </tr>
                             </thead>
 
                             <tbody class="font-montserrat">
                                 <tr class="data_require">
                                     <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                      <div class="text-sm leading-5 font-medium text-gray-900 ml-2">Burger Burger Burger Burger Burger Burger Burger Burger Burger Burger
                                      </div>
                                     </td>
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                         <div class="text-sm leading-5 text-gray-900">15-01-2021</div>
                                     </td>
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                        <button class="px-4 py-2 font-montserrat rounded text-red-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                       </svg></button>
                                     </td>
                                 </tr>
                                 <tr class="data_require">
                                     <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                      <div class="text-sm leading-5 font-medium text-gray-900 ml-2">Burger Burger Burger Burger Burger Burger Burger Burger Burger Burger
                                      </div>
                                     </td>
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                         <div class="text-sm leading-5 text-gray-900">15-01-2021</div>
                                     </td>
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                        <button class="px-4 py-2 font-montserrat rounded text-red-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                       </svg></button>
                                     </td>
                                 </tr>
                                 <tr class="data_require">
                                     <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                      <div class="text-sm leading-5 font-medium text-gray-900 ml-2">Burger Burger Burger Burger Burger Burger Burger Burger Burger Burger
                                      </div>
                                     </td>
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                         <div class="text-sm leading-5 text-gray-900">15-01-2021</div>
                                     </td>
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                        <button class="px-4 py-2 font-montserrat rounded text-red-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                       </svg></button>
                                     </td>
                                 </tr>
                                 <tr class="data_require">
                                     <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                      <div class="text-sm leading-5 font-medium text-gray-900 ml-2">Burger Burger Burger Burger Burger Burger Burger Burger Burger Burger
                                      </div>
                                     </td>
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                         <div class="text-sm leading-5 text-gray-900">15-01-2021</div>
                                     </td>
                                     <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                        <button class="px-4 py-2 font-montserrat rounded text-red-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                       </svg></button>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                         <div class="px-4 py-3 bg-gray-50 sticky bottom-0 z-10">
                         <span class="flex text-gray-600 items-center text-sm font-montserrat font-semibold col-span-3"> Total : <p id="total_require" class="font-montserrat font-semibold text-gray-500">100</p></span>                                                                      
                     </div>
                     </div> 
                 </div>
             </div></div>
             <!--requirement ends-->

             <!--edit form-->
               <div id="editform_div" class="hidden container max-w-2xl mx-auto flex-1 flex flex-col items-center justify-center px-2 mt-10 mb-14">
                   <h3 class="mb-5 text-3xl font-oswald text-center font-medium mt-6" style="color: #202020;">Edit Profile</h3>
                   <div class="px-6 py-8 rounded w-full">
                       <!--form starts-->
                       <form action="crete.html" method="POST" class="">
                           <div class="flex flex-wrap mx-3 mb-6">
                               <div class="w-full">
                               <label class="text-black font-normal text-lg font-oswald">Title</label>
                                 <input class="max-w-sm appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mt-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Title of your camp" required>
                               </div>
                             </div>
                             <div class="bg-gray-600 mb-5" style="padding: 0.5px 0;"></div>
                             <h3 class="text-black font-normal text-lg font-oswald mx-3 mb-4">Location</h3>
                             <div class="flex flex-wrap mx-3 mb-2">
                               <div class="w-full sm:w-1/2 px-3 mb-6">
                                 <label class="block uppercase font-oswald tracking-wide text-gray-700 text-xs font-bold mb-2">
                                   Area/Region
                                 </label>
                                 <input class="appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="In which area" required>
                               </div>
                               <div class="w-full sm:w-1/2 px-3 mb-6">
                                 <label class="block uppercase font-oswald tracking-wide text-gray-700 text-xs font-bold mb-2">
                                   Pincode
                                 </label>
                                 <input class="appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="pincode" required>
                               </div>
                               <div class="w-full sm:w-1/2 px-3 mb-6">
                                   <label class="block uppercase font-oswald tracking-wide text-gray-700 text-xs font-bold mb-2">
                                       State
                                     </label>
                                     <div class="relative">
                                       <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="block font-montserrat appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                       </select>
                                       <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                         <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                       </div>
                                     </div>
                                 </div>
                                 <div class="w-full sm:w-1/2 px-3 mb-6">
                                   <label class="block uppercase font-oswald tracking-wide text-gray-700 text-xs font-bold mb-2">
                                     city
                                   </label>
                                   <div class="relative">
                                     <select id ="state" class="block font-montserrat appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                     </select>
                                     <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                       <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                     </div>
                                   </div>
                                 </div>
                             </div>
                             <div class="bg-gray-600 mb-5" style="padding: 0.5px 0;"></div>
                             <div class="flex flex-wrap mx-3 mb-6">
                               <div class="w-full">
                               <label class="text-black font-normal text-lg font-oswald">Discription</label>
                               <textarea class="max-w-lg mt-3 h-28 block font-montserrat w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mb-3" placeholder="Write something about your camp..." required></textarea>
                               </div>
                               <div class="w-full sm:w-1/2 px-3 my-6">
                                 <label class="block uppercase font-oswald tracking-wide text-gray-700 text-xs font-bold mb-2">
                                   CAPACITY
                                 </label>
                                 <input class="appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="capacity in numbers" required>
                               </div>
                             </div>
                             <div class="bg-gray-600 mb-5" style="padding: 0.5px 0;"></div>
                             <div class="flex flex-wrap mx-3 mb-6">
                               <div class="w-full">
                               <label class="text-black font-normal text-lg font-oswald">Upload Pictures</label>
                               <div class="upload_card my-4">
                                 <div class="card_top"> 
                                     <p class="font-oswald">Drag & drop image</p> 
                                     <button type="button" class="font-oswald font-normal">Upload</button>
                                 </div> 
                                 <div class="upload_form"> 
                                     <span class="inner font-montserrat">Drag & drop image here or <span class="select font-oswald">Browse</span></span> 
                                     <input name="file" type="file" class="file" multiple required/> 
                                 </div>
                                 <div class="img-container">
                                 </div>
                                 </div>
                             </div>
                           </div>
                           <div class="flex items-center justify-end my-4">
                             <button id="rst-btn" class="font-normal font-oswald py-2 px-5 rounded mr-2 outline-none" type="reset">
                               Reset
                             </button>
                             <button id="sub-btn" class="font-normal font-oswald py-2 px-4 rounded ml-2 outline-none" type="submit">
                               Submit
                             </button>
                           </div>
                         </form>
                   </div>
               </div>

             <!--edit form ends-->
               <footer class="absolute bottom-0 w-full lg:text-left cursor-default">
                  <div class="text-center p-3 footer-bottom" style="background-color: #004e64;">
                     <span class="text-white font-oswald">© 2022 Copyright:</span>
                     <a class="text-white font-montserrat" href="index.html">Relief Camp</a>
                  </div>
               </footer>
            </main>
         </div>

         <script>
            //edit form
            print_state("sts");
       
            let files = [], // will be store images 
            button = document.querySelector('.card_top button'), // uupload button 
            form = document.querySelector('.upload_form'), // form ( drag area ) 
            container = document.querySelector('.img-container'), // container in which image will be insert 
            text = document.querySelector('.inner'), // inner text of form 
            browse = document.querySelector('.select'), // text option fto run input 
            input = document.querySelector('.upload_form input'); // file input 

            browse.addEventListener('click', () => input.click()); 

            // input change event
            input.addEventListener('change', () => { 
                  let file = input.files; 
                  for (let i = 0; i < file.length; i++) { 
                     if (files.every(e => e.name !== file[i].name)) files.push(file[i])
                  } 
                  showImages();
            }) 

            const showImages = () => {
                  let images = ''; 
                  files.forEach((e, i) => { 
                     images += `<div class="image"> 
                        <img src="${URL.createObjectURL(e)}" alt="image"> 
                        <span onclick="delImage(${i})">×</span> 
                        </div>`
            }) 

                  container.innerHTML = images; 
            } 

            const delImage = index => {
                  files.splice(index, 1) 
                  showImages() 
            } 
            // drag and drop 
            form.addEventListener('dragover', e => { 
                  e.preventDefault() 
            
                  form.classList.add('dragover') 
                  text.innerHTML = 'Drop images here'
            })

            form.addEventListener('dragleave', e => { 
                  e.preventDefault() 
            
                  form.classList.remove('dragover') 
                  text.innerHTML = 'Drag & drop image here or <span class="select">Browse</span>' 
            })
            
            form.addEventListener('drop', e => {
                  e.preventDefault() 
                  
                  form.classList.remove('dragover')
                  text.innerHTML = 'Drag & drop image here or <span class="select">Browse</span>' 
                  let file = e.dataTransfer.files; 
                  for (let i = 0; i < file.length; i++) { 
                     if (files.every(e => e.name !== file[i].name)) files.push(file[i]) 
                  } 

                  showImages();
            }) 
            button.addEventListener('click', () => {
                  let form = new FormData(); 
                  files.forEach((e, i) => form.append(`file[${i}]`, e)) 
            
               // now you can send the image to server using AJAX or FETCH API 
            })
            //end of edit form


             //statastic card total bookings
            var c_booking = document.getElementsByClassName('data_panding').length;
            document.getElementById('booking').innerHTML = c_booking;

            var c_in = document.getElementsByClassName('data_arrived').length;
            document.getElementById('currently_in').innerHTML = c_in;


             //search for not apperared
            function search_panding() {
                var input = document.getElementById("search_panding_people");
                var filter = input.value.toLowerCase();
                var y = document.getElementsByClassName('data_panding');
                var count = 0;
                for(i = 0; i < y.length; i++){
                    if (y[i].innerText.toLowerCase().includes(filter)){
                        y[i].classList.remove('hidden');
                        count++;
                    }else{
                        y[i].classList.add('hidden');
                    }
                    document.getElementById('total_panding').innerHTML = count;
                }  
                }
                var c_wait = document.getElementsByClassName('data_panding').length;
                document.getElementById('total_panding').innerHTML = c_wait;
                
                //search for appeared
            function search_arrived() {
                var input = document.getElementById("search_arrived_people");
                var filter = input.value.toLowerCase();
                var y = document.getElementsByClassName('data_arrived');
                var count = 0;
                for(i = 0; i < y.length; i++){
                    if (y[i].innerText.toLowerCase().includes(filter)){
                        y[i].classList.remove('hidden');
                        count++;
                    }else{
                        y[i].classList.add('hidden');
                    }
                    document.getElementById('total_arrived').innerHTML = count;
                }  
                }
                var c_arrive = document.getElementsByClassName('data_arrived').length;
                document.getElementById('total_arrived').innerHTML = c_arrive;

                //total requirements
                var c_require = document.getElementsByClassName('data_require').length;
                document.getElementById('total_require').innerHTML = c_require;


                //hide and show
                var dashboard = document.getElementById('dashboard_div');
                var user1 = document.getElementById('waiting_div');
                var user2 = document.getElementById('arrived_div');
                var requirements = document.getElementById('requirement_div');
                var editform = document.getElementById('editform_div');
                var states = document.getElementById('statistics');
                
                var dash_btn = document.getElementById('dashboard_btn');
                var user1_btn = document.getElementById('waiting_btn');
                var user2_btn = document.getElementById('arrived_btn');
                var requirements_btn = document.getElementById('requirement_btn');
                var edit_btn = document.getElementById('edit_btn');

                dash_btn.onclick = function() {
                    dashboard.classList.remove('hidden');
                    states.classList.remove('hidden');
                    user1.classList.add('hidden');
                    user2.classList.add('hidden');
                    requirements.classList.add('hidden');
                    editform.classList.add('hidden');
                    dash_btn.classList.remove('text-gray-100','bg-transparent');
                    dash_btn.classList.add('text-gray-800','bg-gray-100');
                    user1_btn.classList.remove('text-gray-800','bg-gray-100');
                    user2_btn.classList.remove('text-gray-800','bg-gray-100');
                    requirements_btn.classList.remove('text-gray-800','bg-gray-100');
                    edit_btn.classList.remove('text-gray-800','bg-gray-100');
                }
                user1_btn.onclick = function() {
                    dashboard.classList.add('hidden');
                    states.classList.remove('hidden');
                    user1.classList.remove('hidden');
                    user2.classList.add('hidden');
                    requirements.classList.add('hidden');
                    editform.classList.add('hidden');
                    dash_btn.classList.remove('text-gray-800','bg-gray-100');
                    dash_btn.classList.add('text-gray-100','bg-transparent');
                    user1_btn.classList.add('text-gray-800','bg-gray-100');
                    user2_btn.classList.remove('text-gray-800','bg-gray-100');
                    requirements_btn.classList.remove('text-gray-800','bg-gray-100');
                    edit_btn.classList.remove('text-gray-800','bg-gray-100');
                }
                user2_btn.onclick = function() {
                    dashboard.classList.add('hidden');
                    states.classList.remove('hidden');
                    user1.classList.add('hidden');
                    user2.classList.remove('hidden');
                    requirements.classList.add('hidden');
                    editform.classList.add('hidden');
                    dash_btn.classList.remove('text-gray-800','bg-gray-100');
                    dash_btn.classList.add('text-gray-100','bg-transparent');
                    user1_btn.classList.remove('text-gray-800','bg-gray-100');
                    user2_btn.classList.add('text-gray-800','bg-gray-100');
                    requirements_btn.classList.remove('text-gray-800','bg-gray-100');
                    edit_btn.classList.remove('text-gray-800','bg-gray-100');
                }
                requirements_btn.onclick = function() {
                    dashboard.classList.add('hidden');
                    user1.classList.add('hidden');
                    states.classList.remove('hidden');
                    user2.classList.add('hidden');
                    requirements.classList.remove('hidden');
                    editform.classList.add('hidden');
                    dash_btn.classList.remove('text-gray-800','bg-gray-100');
                    dash_btn.classList.add('text-gray-100','bg-transparent');
                    user1_btn.classList.remove('text-gray-800','bg-gray-100');
                    user2_btn.classList.remove('text-gray-800','bg-gray-100');
                    requirements_btn.classList.add('text-gray-800','bg-gray-100');
                    edit_btn.classList.remove('text-gray-800','bg-gray-100');
                }
                edit_btn.onclick = function() {
                    dashboard.classList.add('hidden');
                    user1.classList.add('hidden');
                    states.classList.add('hidden');
                    user2.classList.add('hidden');
                    requirements.classList.add('hidden');
                    editform.classList.remove('hidden');
                    dash_btn.classList.remove('text-gray-800','bg-gray-100');
                    dash_btn.classList.add('text-gray-100','bg-transparent');
                    user1_btn.classList.remove('text-gray-800','bg-gray-100');
                    user2_btn.classList.remove('text-gray-800','bg-gray-100');
                    requirements_btn.classList.remove('text-gray-800','bg-gray-100');
                    edit_btn.classList.add('text-gray-800','bg-gray-100');
                }

                //add people popup
                document.getElementById('add-people').addEventListener('click', 
               function() {
                  document.getElementById('add-model').style.display = 'flex';  
               });
               document.getElementById('close').addEventListener('click',
               function(){
                  document.getElementById('add-model').style.display = 'none';
               });

               //phone validation in add people form
               var phone_val = 0;
               function phone_no(){
                  var phone = document.getElementById("phone");
                  var phoneno = /^\d{10}$/;
                     var filter = phone.value;
                     if (filter.match(phoneno) && filter.length == 10) {
                        document.getElementById('phone_alert').innerHTML = "phone number is valid";
                        document.getElementById('phone_alert').style.color = "green";
                        phone.classList.add('border-green-600');
                        phone.classList.remove('border-red-600');
                        phone_val = 0;
                     }
                     else if (!filter.match(phoneno)) {
                        document.getElementById('phone_alert').innerHTML = "invalid phone number";
                        document.getElementById('phone_alert').style.color = "red";
                        phone.classList.remove('border-green-600');
                        phone.classList.add('border-red-600');
                        phone_val = 1;
                     }
                     if (filter.length == 0) {
                        document.getElementById('phone_alert').innerHTML = "phone number must be 10 digits in length";
                        document.getElementById('phone_alert').style.color = "red";
                        phone.classList.remove('border-green-600');
                        phone.classList.add('border-red-600') ;
                        phone_val = 1;
                     }
               }
               function validate(form){
                     if (phone_val  == 1){
                        return false;
                     }
                     else if (phone_val  == 0){
                        return true;
                     }
               }
         </script>
    </body>
</html>