var map = L.map('map').setView([64.143263, -21.945534], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 40,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var mapIcon = L.Icon.extend({
    options: {
        iconSize:     [35, 65],
        iconAnchor:   [22, 94],
        popupAnchor:  [-3, -76]
    }
});

var volcanoIcon = new mapIcon({iconUrl: '../src/assets/Image/markerVolcano.webp'}),
    scubaIcon = new mapIcon({iconUrl: '../src/assets/Image/markerScuba.webp'}),
    horseIcon = new mapIcon({iconUrl: '../src/assets/Image/markerHorse.webp'});
    lagoonIcon = new mapIcon({iconUrl: '../src/assets/Image/markerLagoon.webp'});
    cavesIcon = new mapIcon({iconUrl: '../src/assets/Image/markerCaves.webp'});

// VOLCANOES
var marker = L.marker([63.9662196364738, -22.285961039260442], {icon: volcanoIcon},
    {alt: 'Fagradalsfjall'}).addTo(map) 
    .bindPopup('Fagradalsfjall, Volcan 241, Iceland');

var marker = L.marker([63.67684950086934, -19.60683564103625], {icon: volcanoIcon},
    {alt: 'Eyjafjallajökull'}).addTo(map) 
    .bindPopup('Eyjafjallajökull, Volcan 861, Iceland');

var marker = L.marker([63.71369492098422, -19.10796401516002], {icon: volcanoIcon},
    {alt: 'Volcan Katla'}).addTo(map) 
    .bindPopup('Katla, Volcan 881, Iceland');

var marker = L.marker([64.0916342238642, -19.66226582168916], {icon: volcanoIcon},
    {alt: 'Hekla'}).addTo(map) 
    .bindPopup('Hekla, Volcan 851, Iceland');

var marker = L.marker([65.12153910109683, -16.78913479117977], {icon: volcanoIcon},
    {alt: 'Askja'}).addTo(map) 
    .bindPopup('Askja, Volcan 660, Iceland');

var marker = L.marker([64.48441475980124, -17.269529690171694], {icon: volcanoIcon},
    {alt: 'Grímsvötn'}).addTo(map) 
    .bindPopup('Grímsvötn, Volcan 881, Iceland');

var marker = L.marker([64.06740440057952, -16.539698978241656], {icon: volcanoIcon},
    {alt: 'Öræfajökull'}).addTo(map) 
    .bindPopup('Öræfajökull, Volcan 785, Iceland');

var marker = L.marker([63.693759747946736, -19.593741113765144], {icon: volcanoIcon},
    {alt: 'Snæfellsjökull'}).addTo(map) 
    .bindPopup('Snæfellsjökull, Volcan, Iceland');

var marker = L.marker([64.2720212052885, -21.296621881905356], {icon: volcanoIcon},
    {alt: 'Hengill'}).addTo(map) 
    .bindPopup('Hengill, Volcan, 805 Iceland');

var marker = L.marker([64.88042669424638, -23.79051823266558], {icon: volcanoIcon},
    {alt: 'Eldfell'}).addTo(map) 
    .bindPopup('Eldfell, Volcan, 900 Iceland');

var marker = L.marker([65.26932101162672, -16.289227521312455], {icon: volcanoIcon},
    {alt: 'Herðubreið'}).addTo(map) 
    .bindPopup('Herðubreið, Volcan, 660 Iceland');

var marker = L.marker([65.01076231893003, -22.594966158994403], {icon: volcanoIcon},
    {alt: 'Ljosufjoll'}).addTo(map) 
    .bindPopup('Ljosufjoll, Volcan, 342 Iceland');

var marker = L.marker([64.86649846770884, -23.693598912633266], {icon: volcanoIcon},
    {alt: 'Torfajokull'}).addTo(map) 
    .bindPopup('Torfajokull, Volcan, 851 Iceland');

var marker = L.marker([64.35096260288441, -16.5785891111669], {icon: volcanoIcon},
    {alt: 'Esjufjöll'}).addTo(map) 
    .bindPopup('Esjufjöll, Volcan, 785 Iceland');

var marker = L.marker([64.65833951471946, -20.665502954703424], {icon: volcanoIcon},
    {alt: 'Prestahnúkur'}).addTo(map) 
    .bindPopup('Prestahnúkur, Volcan, 311 Iceland');

var marker = L.marker([64.12174897841894, -20.907202160503974], {icon: volcanoIcon},
    {alt: 'Grímsnes'}).addTo(map) 
    .bindPopup('Grímsnes, Volcan, 805 Iceland');

var marker = L.marker([64.04972941309457, -18.58908705032597], {icon: volcanoIcon},
    {alt: 'Eldgjá'}).addTo(map) 
    .bindPopup('Eldgjá, Volcan, 881 Iceland');

var marker = L.marker([65.68689646742209, -16.864233627112952], {icon: volcanoIcon},
    {alt: 'Hverfjall'}).addTo(map) 
    .bindPopup('Hverfjall, Volcan, 660 Iceland');

var marker = L.marker([64.107359967622, -19.193335064827345], {icon: volcanoIcon},
    {alt: 'Brennisteinsalda'}).addTo(map) 
    .bindPopup('Brennisteinsalda, Volcan, 851 Iceland');

var marker = L.marker([64.10256197568225, -19.050512806854297], {icon: volcanoIcon},
    {alt: 'Bláhnjúkur'}).addTo(map) 
    .bindPopup('Bláhnjúkur, Volcan, 851 Iceland');


//SCUBA
var marker = L.marker([64.18207541656136, -21.941760318396017], {icon: scubaIcon},
    {alt: 'DIVE.IS'}).addTo(map) 
    .bindPopup('DIVE.IS - PADI 5 Star Dive Center Iceland, Hólmaslóð 2, 101 Reykjavík, Iceland');

var marker = L.marker([64.14684808432214, -21.914045228069558], {icon: scubaIcon},
    {alt: 'Diving Island'}).addTo(map) 
    .bindPopup('Diving Island - Dive Center, Hátún 15, 105 Reykjavík, Iceland');

var marker = L.marker([64.1196421367669, -21.796256094182116], {icon: scubaIcon},
    {alt: 'Freedive Iceland'}).addTo(map) 
    .bindPopup('Freedive Iceland, Keilufell, 111 Reykjavík, Iceland');

var marker = L.marker([64.27483006407812, -21.13166872042119], {icon: scubaIcon},
    {alt: 'Scuba Iceland'}).addTo(map) 
    .bindPopup('Scuba Iceland, 806, Iceland');
    
var marker = L.marker([66.11679119073888, -23.16951958577805], {icon: scubaIcon},
    {alt: 'Divewestfjords.is'}).addTo(map) 
    .bindPopup('Divewestfjords.is, 3V9C+4WQ, Suðurtangi, 400 Ísafjörður, Iceland');

var marker = L.marker([65.89720513404447, -18.19945302900239], {icon: scubaIcon},
    {alt: 'Strýtan Divecenter'}).addTo(map) 
    .bindPopup('Strýtan Divecenter, VR24+9QC, 604 Laufás, Iceland');


//HORSE RIDING

var marker = L.marker([64.87212764001839, -23.56374164026394], {icon: horseIcon},
    {alt: 'The Holy Ram Lodge'}).addTo(map) 
    .bindPopup('Horseback Riding Iceland & The Holy Ram Lodge @ Gröf Snæfellsnes, Gröf, 356, Iceland');

var marker = L.marker([64.65915344941506, -21.81258599977488], {icon: horseIcon},
    {alt: 'Hestaland'}).addTo(map) 
    .bindPopup('Hestaland, 311, Iceland');

var marker = L.marker([64.23741984377843, -21.59835259545127], {icon: horseIcon},
    {alt: 'Laxnes Horse Farm'}).addTo(map) 
    .bindPopup('Laxnes Horse Farm, Mosfellsbær, 271 Mosfellsbær, Iceland');

var marker = L.marker([64.1033925398411, -21.933435585311127], {icon: horseIcon},
    {alt: 'Ishestar Horse Riding Centre'}).addTo(map) 
    .bindPopup('Ishestar Horse Riding Centre, Sörlaskeið 26, 220 Hafnarfjörður, Iceland');

var marker = L.marker([63.89871749700181, -21.147913050502915], {icon: horseIcon},
    {alt: 'Bakkahestar Horse Riding Tours'}).addTo(map) 
    .bindPopup('Bakkahestar Horse Riding Tours, VV79+R5W, 820 Eyrarbakki, Iceland');

var marker = L.marker([63.67549246396186, -20.279993175128215], {icon: horseIcon},
    {alt: 'Mr Iceland - horseback riding tours in Iceland'}).addTo(map) 
    .bindPopup('Mr Iceland - horseback riding tours in Iceland, Efri-Úlfsstaðir-Úlfsstaðir IS, 861 Efri, Iceland');

var marker = L.marker([63.985586444768835, -16.87972469342853], {icon: horseIcon},
    {alt: 'Glacier Horses'}).addTo(map) 
    .bindPopup('Glacier Horses, Sel in Svínafell, 785 Öræfasveit, Iceland');

var marker = L.marker([65.74898654260595, -19.518695762550085], {icon: horseIcon},
    {alt: 'Icelandhorsetours'}).addTo(map) 
    .bindPopup('Icelandhorsetours, Helluland, 551 Sauðárkrókur, Iceland');

var marker = L.marker([65.98402465504098, -17.532812893698484], {icon: horseIcon},
    {alt: 'Lava Horses'}).addTo(map) 
    .bindPopup('Lava Horses, Hraunkot 1, 641 Húsavik, Iceland');

//LAGOON 

var marker = L.marker([64.12782693401121, -21.957070592805355], {icon: lagoonIcon},
    {alt: 'Sky Lagoon'}).addTo(map) 
    .bindPopup('Sky Lagoon, Vesturvör 44-48 200, 200 Kópavogur, Iceland');

var marker = L.marker([64.15419373914797, -21.899745045974523], {icon: lagoonIcon},
    {alt: 'Destination Blue Lagoon'}).addTo(map) 
    .bindPopup('Destination Blue Lagoon, Skógarhlíð 10, 105 Reykjavík, Iceland');

var marker = L.marker([64.16017996309232, -20.325953567378583], {icon: lagoonIcon},
    {alt: 'Secret Lagoon Iceland'}).addTo(map) 
    .bindPopup('Secret Lagoon Iceland, Hvammsvegur, 845 Flúðir, Iceland');

var marker = L.marker([63.87980356991118, -22.448638924290734], {icon: lagoonIcon},
    {alt: 'Blue Lagoon'}).addTo(map) 
    .bindPopup('Blue Lagoon, Norðurljósavegur 9, 240 Grindavík, Iceland');

// ICE CAVES 

var marker = L.marker([64.81166581530327, -23.78770961744696], {icon: cavesIcon},
    {alt: 'Vatnshellir Cave'}).addTo(map) 
    .bindPopup('Vatnshellir Cave, Road 574 Snæfellsjökull National Park - Snæfellsnes, 356 Snæfellsbær, Iceland');

var marker = L.marker([64.83479954673436, -20.757991862421594], {icon: cavesIcon},
    {alt: 'The Cave Vidgelmir'}).addTo(map) 
    .bindPopup('The Cave Vidgelmir, Fljótstunga, 320 Reykholt, Iceland');

var marker = L.marker([64.76533871025825, -21.511537012449335], {icon: cavesIcon},
    {alt: 'Into the Glacier - Langjökull Glacier'}).addTo(map) 
    .bindPopup('Into the Glacier - Langjökull Glacier, Húsafell, 320 Reykholt, Iceland');

var marker = L.marker([64.67909135354597, -20.509399647979453], {icon: cavesIcon},
    {alt: 'Glacier Tunnel'}).addTo(map) 
    .bindPopup('Glacier Tunnel, Western Region, Iceland');

var marker = L.marker([64.15671826178426, -21.94892491465648], {icon: cavesIcon},
    {alt: 'Hidden Iceland'}).addTo(map) 
    .bindPopup('Hidden Iceland, Fiskislóð 18, 101 Reykjavík, Iceland');

var marker = L.marker([64.00386486768163, -21.821199891190677], {icon: cavesIcon},
    {alt: 'Leiðarendi Lava Cave'}).addTo(map) 
    .bindPopup('Leiðarendi Lava Cave, X5M4+RRJ, 221 Hafnarfjordur, Iceland');

var marker = L.marker([63.94514291978277, -21.390279912763177], {icon: cavesIcon},
    {alt: 'Raufarhólshellir'}).addTo(map) 
    .bindPopup('Raufarhólshellir, 816, Iceland');    

var marker = L.marker([63.86739783928829, -20.39875698422796], {icon: cavesIcon},
    {alt: 'Caves of Hella'}).addTo(map) 
    .bindPopup('Caves of Hella, 851 Hella, Iceland');    
    
var marker = L.marker([63.43322845751993, -19.017899307846346], {icon: cavesIcon},
    {alt: 'Tröll Expeditions Katla Ice Cave'}).addTo(map) 
    .bindPopup('Tröll Expeditions Katla Ice Cave, Víkurbraut 5 870, 870 Vik, Iceland');     

var marker = L.marker([63.564951442452866, -18.825628766988753], {icon: cavesIcon},
    {alt: 'Katla Ice Cave'}).addTo(map) 
    .bindPopup('Katla Ice Cave, 871, Iceland');   