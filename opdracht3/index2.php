<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyCWpcwKHGlsRC0B1pCwUpDwIUKAZweC-_s'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([

          ['Country', 'Import', 'Export'],
          ['Oostenrijk', 499, 366],
          ['Andorra', 10, 6],
        ['Verenigde Arabische Emiraten', 956, 581],
        ['Afghanistan', 7, 17],
        ['Antigua en Barbuda', 3, 4],
        ['Anguilla', 2, 1],
        ['Albania', 15, 22],
        ['Armenia', 4, 11],
        ['Angola', 4, 20],
        ['Antarctica', 1, 0],
        ['Argentina', 97, 433],
        ['Amerikaans-Samoa', 3, 2],
        ['Oostenrijk', 499, 366],
        ['Australia', 3867, 2330],
        ['Aruba', 3, 28],
        ['land', 5, 7],
        ['Azerbeidzjan', 2, 13],
        ['Bosnië en Herzegovina', 4, 22],
        ['Barbados', 1, 25],
        ['Bangladesh', 5, 34],
        ['Belgium', 1465, 602],
        ['Burkina Faso', 1, 6],
        ['Bulgarije', 20, 102],
        ['Bahrein', 70, 47],
        ['Burundi', 0, 0],
        ['Benin', 3, 6],
        ['Saint-Bartholemy', 0, 0],
        ['Bermuda', 2, 22],
        ['Brunei', 2, 13],
        ['Bolivia', 5, 68],
        ['Bonaire, Sint Eustatius en Saba', 3, 19],
        ['Brasilia', 212, 466],
        ['Bahamas', 3, 19],
        ['Bhutan', 0, 3],
        ['BouvetIsland', 0, 0],
        ['Botswana', 5, 23],
        ['Belarus', 4, 7],
        ['Belize', 2, 44],
        ['Canada', 2471, 1512],
        ['Cocoseilanden', 1, 0],
        ['Congo-Kinshasa', 1, 21],
        ['Centraal-Afrikaanse Republiek', 0, 2],
        ['Congo-Brazzaville', 0, 6],
        ['Zwitserland', 1428, 831],
        ['Ivoorkust', 4, 28],
        ['Cook Eilanden', 0, 11],
        ['Chili', 67, 198],
        ['Kameroen', 3, 32],
        ['China', 205, 289],
        ['Colombia', 84, 287],
        ['Costa Rica', 22, 113],
        ['Cuba', 2, 103],
        ['Kaapverdië', 1, 10],
        ['Curaçao', 7, 72],
        ['Christmas eiland', 0, 0],
        ['Cyprus', 41, 185],
        ['Tsjechië', 28, 121],
        ['Duitsland', 3304, 2069],
        ['Djibouti', 5, 5],
        ['Denemarken', 898, 502],
        ['Dominica', 2, 6],
        ['Dominicaanse Republiek', 18, 134],
        ['Algerije', 15, 62],
        ['Ecuador', 20, 176],
        ['Estland', 3, 27],
        ['Egypte', 27, 132],
        ['Westelijke Sahara', 0, 0],
        ['Eritrea', 0, 1],
        ['Spanje', 1899, 2930],
        ['Ethiopië', 5, 24],
        ['Finland', 116, 117],
        ['Fiji', 4, 89],
        ['Falkland Islands', 0, 2],
        ['Micronesië', 0, 0],
        ['Faeröer', 1, 10],
        ['Frankrijk', 2233, 2205],
        ['Gabon', 0, 7],
        ['Verenigd Koninkrijk', 7256, 6281],
        ['Grenada', 0, 11],
        ['Georgia', 3, 13],
        ['Frans-Guyana', 3, 12],
        ['Guernsey', 6, 7],
        ['Ghana', 4, 48],
        ['Gibraltar', 3, 16],
        ['Groenland', 2, 2],
        ['Gambia', 0, 20],
        ['Guinee', 1, 12],
        ['Guadeloupe', 6, 29],
        ['Equatoriaal-Guinea', 0, 2],
        ['Griekenland', 149, 283],
        ['Zuid-Georgië', 1, 0],
        ['Guatemala', 13, 45],
        ['Guam', 1, 10],
        ['Guinee-Bissau', 0, 3],
        ['Guyana', 1, 6],
        ['Hongkong', 296, 193],
        ['Heard eiland', 0, 0],
        ['Honduras', 6, 44],
        ['Kroatië', 15, 107],
        ['Haïti', 4, 13],
        ['Hongarije', 59, 181],
        ['Indonesië', 72, 131],
        ['Ierland', 489, 1081],
        ['Israël', 56, 162],
        ['Isle of Man', 9, 20],
        ['India', 661, 940],
        ['Brits Indische Oceaanterritorium', 0, 2],
        ['Irak', 4, 28],
        ['Iran', 14, 94],
        ['IJsland', 1, 32],
        ['Italië', 2499, 2458],
        ['Jersey', 16, 11],
        ['Jamaica', 10, 76],
        ['Jordanië', 8, 50],
        ['Japan', 102, 175],
        ['Kenia', 14, 63],
        ['Kirgizië', 1, 2],
        ['Cambodja', 6, 41],
        ['Kiribati', 1, 1],
        ['Comoren', 0, 1],
        ['Saint Kitts en Nevis', 0, 3],
        ['Noord-Korea', 0, 2],
        ['Zuid-Korea', 74, 108],
        ['Koeweit', 62, 57],
        ['Kaaimaneilanden', 0, 11],
        ['Kazachstan', 6, 14],
        ['Laos', 2, 10],
        ['Libanon', 12, 93],
        ['Saint Lucia', 0, 5],
        ['Liechtenstein', 1, 1],
        ['Sri Lanka', 5, 54],
        ['Liberia', 0, 5],
        ['Lesotho', 0, 3],
        ['Litouwen', 5, 14],
        ['Luxemburg', 52, 74],
        ['Letland', 12, 27],
        ['Libië', 1, 10],
        ['Marokko', 31, 220],
        ['Monaco', 7, 6],
        ['Moldavië', 5, 3],
        ['Montenegro', 1, 13],
        ['Sint-Maarten (Franse Antillen)', 0, 4],
        ['Madagaskar', 3, 15],
        ['Marshalleilanden', 0, 1],
        ['Macedonië', 4, 10],
        ['Mali', 1, 7],
        ['Myanmar', 1, 42],
        ['Mongolië', 2, 10],
        ['Macao', 2, 6],
        ['Noordelijke Marianen', 1, 0],
        ['Martinique', 3, 25],
        ['Mauritanië', 0, 6],
        ['Montserrat', 1, 1],
        ['Malta', 56, 183],
        ['Mauritius', 11, 113],
        ['Maldiven', 0, 6],
        ['Malawi', 0, 13],
        ['Mexico', 182, 735],
        ['Maleisië', 104, 222],
        ['Mozambique', 0, 25],
        ['Namibië', 11, 48],
        ['Nieuw-Caledonië', 3, 30],
        ['Niger', 1, 7],
        ['Norfolk Island', 0, 0],
        ['Nigeria', 14, 81],
        ['Nicaragua', 7, 48],
        ['Nederland', 3808, 2838],
        ['Noorwegen', 177, 288],
        ['Nepal', 3, 18],
        ['Nauru', 0, 0],
        ['Niue', 0, 2],
        ['Nieuw-Zeeland', 765, 2117],
        ['Oman', 47, 51],
        ['Panama', 35, 100],
        ['Peru', 41, 159],
        ['Frans-Polynesië', 2, 18],
        ['Papoea Nieuw-Guinea', 2, 16],
        ['Filipijnen', 187, 312],
        ['Pakistan', 33, 120],
        ['Polen', 86, 141],
        ['St. Pierre en Miquelon', 0, 0],
        ['Pitcairneilanden', 0, 0],
        ['Puerto Rico', 122, 289],
        ['Palestina', 5, 5],
        ['Portugal', 165, 656],
        ['Palau', 0, 0],
        ['Paraguay', 5, 57],
        ['Qatar', 185, 92],
        ['Réunion', 8, 41],
        ['Roemenië', 37, 103],
        ['Servië', 5, 59],
        ['Rusland', 94, 158],
        ['Rwanda', 0, 3],
        ['Saudi-Arabië', 92, 137],
        ['Salomonseilanden', 0, 4],
        ['Seychellen', 0, 18],
        ['Soedan', 2, 11],
        ['Zweden', 305, 474],
        ['Singapore', 814, 343],
        ['St. Helena', 0, 0],
        ['Slovenië', 10, 20],
        ['Spitsbergen en Jan Mayen', 1, 1],
        ['Slowakije', 15, 48],
        ['Sierra Leone', 1, 11],
        ['San Marino', 2, 0],
        ['Senegal', 7, 43],
        ['Somalië', 1, 3],
        ['Suriname', 7, 20],
        ['Zuid-Soedan', 0, 1],
        ['Sao Toma en Principe', 0, 2],
        ['El Salvador', 16, 23],
        ['Sint Maarten', 2, 14],
        ['Syrië', 1, 9],
        ['Swaziland', 4, 4],
        ['Turks-en Caicoseilanden', 1, 4],
        ['Tsjaad', 0, 2],
        ['Franse Zuidelijke', 0, 4],
        ['Togo', 0, 5],
        ['Thailand', 65, 364],
        ['Tadzjikistan', 2, 3],
        ['Tokelau', 0, 0],
        ['Oost-Timor', 0, 6],
        ['Turkmenistan', 1, 1],
        ['Tunesië', 18, 68],
        ['Tonga', 0, 5],
        ['Turkije', 181, 313],
        ['Trinidad en Tobago', 3, 26],
        ['Tuvalu', 1, 0],
        ['Taiwan', 16, 72],
        ['Tanzania', 7, 55],
        ['Oekraïne', 23, 31],
        ['Oeganda', 3, 38],
        ['Kleine Pacifische eilanden van de VS', 0, 0],
        ['Verenigde Staten', 4575, 3849],
        ['Uruguay', 18, 82],
        ['Oezbekistan', 1, 5],
        ['Vaticaanstad', 0, 0],
        ['Saint Vincent en de Grenadines', 0, 2],
        ['Venezuela', 164, 59],
        ['Britse Maagdeneilanden', 1, 3],
        ['Maagdeneilanden', 2, 7],
        ['Vietnam', 30, 107],
        ['Vanuatu', 0, 9],
        ['Wallis en Futuna', 0, 0],
        ['Samoa', 0, 15],
        ['Jemen', 1, 1],
        ['Mayotte', 5, 17],
        ['Zuid-Afrika', 2523, 623],
        ['Zambia', 7, 32],
        ['Zimbabwe', 8, 22],
          

        ]);

        var options = {  };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="regions_div" style="width: 97vw; height: 90vh;"></div>
  </body>
</html>