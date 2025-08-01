{{-- Newsletter Form Section Starts Here --}}
<section class="newsletter-form-section">
    <div class="container">
        <div class="newslettersectionflexbox">
            <div class="newslettercontentbox">
                <h2>Ready to speak with a marketing expert?</h2>
                <p>Connect with us</p>
            </div>
            <div class="newsletterformbox">
                <div class="newsletterform">
                    <form action="/newsletter-form-submit" method="post">
                        @csrf
                        <div class="newsletterforminputbox">
                            <input type="email" name="newsletterforminput" id="newsletterforminput" placeholder="Enter your Email" required>
                        </div>
                        <div class="newsletterformsubmitbox">
                            <input type="hidden" name="ip_address" value="{{ request()->ip() }}" />
                            <input type="hidden" name="pageurl" value="{{ url()->current() }}" />
                            <input type="submit" value="Get a Quote" class="newsletterformsubmit button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Newsletter Form Section Ends Here   --}}

{{-- Footer Section Starts Here --}}

<footer class="footer">
    <div class="container">
        <div class="footerflexbox">
            <div class="footerflexitembox">
                <div class="footerlogobox">
                    <a href="/">
                        <img src="/assets/img/logo/vedeshra_logo_180w_tr.png" alt="Vedeshra Technologies Logo">
                    </a>
                </div>
                <div class="footercontentbox">
                    <p>
                        Elevating brands through innovative design and strategic marketing
                    </p>
                </div>
                <div class="footersocialbox">
                    <h3>Connect with us:</h3>
                    <div class="socialflexbox">
                        <div class="socialflexitembox">
                            <a href="https://www.instagram.com/vedeshratechnologies" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                        <div class="socialflexitembox">
                            <a href="https://www.youtube.com/@vedeshratechnologies" target="_blank">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                        <div class="socialflexitembox">
                            <a href="https://www.facebook.com/profile.php?id=61558433069572" target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </div>
                        <div class="socialflexitembox">
                            <a href="https://x.com/vedeshratech" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footerflexitembox">
                <div class="footermenutitle">
                    <h3>Services</h3>
                </div>
                <div class="footermenubox">
                    <ul>
                        <li>
                            <a href="/services/web-design-and-development/">Web Development</a>
                        </li>
                        <li>
                            <a href="/services/seo-services/">Search Engine Optimization</a>
                        </li>
                        <li>
                            <a href="/services/ppc-advertising/">Pay-Per-Click(PPC) Advertising</a>
                        </li>
                        <li>
                            <a href="">Conversion Rate Optimization</a>
                        </li>
                        <li>
                            <a href="/services/social-media-marketing/">Social Media Marketing</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footerflexitembox">
                <div class="footermenutitle">
                    <h3>Industries</h3>
                </div>
                <div class="footermenubox">
                    <ul>
                        <li>
                            <a href="">Ecommerce</a>
                        </li>
                        <li>
                            <a href="">Fashion</a>
                        </li>
                        <li>
                            <a href="">Finance</a>
                        </li>
                        <li>
                            <a href="">Gaming</a>
                        </li>
                        <li>
                            <a href="">Healthcare</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footerflexitembox">
                <div class="footermenutitle">
                    <h3>Explore Audit</h3>
                </div>
                <div class="footermenubox">
                    <ul>
                        <li>
                            <a href="">Shopify</a>
                        </li>
                        <li>
                            <a href="">Wix Studio</a>
                        </li>
                        <li>
                            <a href="">Bigcommerce</a>
                        </li>
                        <li>
                            <a href="">Webflow</a>
                        </li>
                        <li>
                            <a href="">Magento</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- Footer Section Ends Here --}}

{{-- Footer City Section Starts Here --}}
<section class="footer-city-section">
    <div class="container">
        <div class="footerotherlinkcontainerbox">
            <h3>Explore the Best SEO Agencies</h3>
            <p>A Coruña | Aachen | Aalborg | Aarhus | Abbotsford British Columbia | Aberdeen Scotland | Abidjan | Abilene | Abu Dhabi | Adelaide | Aix Marseille Provence | Akron | Albany | Albany Lebanon | Albany Schenectady Troy | Albuquerque | Alexandria | Alexandria | Alicante | Allentown Bethlehem Easton | Almaty | Altoona | Alxa League | Amarillo | Ames | Amiens | Amsterdam | Anápolis | Anchorage | Angers Loire Métropole | Ankara | Ann Arbor | Annecy | Anniston Oxford | Anshan | Antwerp | Appleton Wisconsin | Arnhem Nijmegen | Asheville | Astana | Asturias | Athens | Athens Clarke County | Atlanta Sandy Springs Alpharetta | Atlantic City Hammonton | Auburn Opelika | Auckland | Augusta Richmond County | Austin Round Rock San Marcos | Bakersfield | Balikpapan Samarinda | Ballarat | Baltimore Columbia Towson | Bandung | Bangkok | Bangor | Banjarmasin | Baotou | Barcelona | Bari | Barnstable Town | Barrie | Batam | Baton Rouge | Battle Creek | Bay City | Beaumont Port Arthur | Beckley | Beijing | Belfast | Belgrade | Belleville Ontario | Bellingham | Belo Horizonte | Bend | Bendigo | Bergamo | Berlin Brandenburg | Bielefeld | Bielsko Biała | Bilbao | Billings | Binghamton | Birmingham West Midlands | Bismarck | Blacksburg Christiansburg | Bloomington | Bocholt | Bogotá | Boise | Bologna | Bordeaux | Boston Cambridge Newton | Boulder | Bournemouth Poole | Bowling Green | Brantford | Brasília | Brașov | Bratislava | Breda | Bremen | Bremerton Silverdale Port Orchard | Brescia | Brest Métropole | Bridgeport Stamford Norwalk | Brighton & Hove | Brisbane | Bristol | Brno | Brownsville Harlingen | Brunswick | Brussels | Bucharest | Budapest | Buffalo Niagara Falls | Burlington South Burlington | Bursa | Busan Gyeongnam | Bydgoszcz Toruń | Cádiz Jerez | Caen | Cagliari | Cairns | Calgary | California Lexington Park | Campinas | Campo Grande | Campos dos Goytacazes | Canberra | Canton Massillon | Cape Coral Fort Myers | Cape Girardeau | Cape Town | Caracas | Carbondale Marion | Cardiff Vale of Glamorgan | Carson City | Casablanca | Casper | Catania | Cedar Rapids | Chambersburg Waynesboro | Champaign Urbana | Changchun | Changde | Changji Prefecture | Changsha | Changzhou | Charleroi | Charleston North Charleston | Charlotte Concord Gastonia | Charlottesville | Chattanooga | Chengdu | Cheyenne | Chicago-Naperville, IL-IN-WI CSA | Chico | Chittagong | Chongqing | Chuzhou | Cincinnati | Clarksville | Clermont Ferrand | Cleveland | Cleveland Elyria | Cluj Napoca | Cocos (Keeling) Islands | Coeur d'Alene | Coimbra | College Station-Bryan, TX MSA | Colorado Springs | Columbia</p>
        </div>
        <div class="footerotherlinkcontainerbox">
            <h3>Explore the Best Digital Marketing Agencies</h3>
            <p>Columbus | Communauté d'agglomération Nîmes | Constanța | Copenhagen | Córdoba | Corpus Christi | Corvallis | Coventry | Crestview Fort Walton Beach Destin | Cumberland | Curitiba | Daegu | Daejeon | Dalian | Dallas Fort Worth Arlington | Dalton | Danville | Daphne Fairhope Foley | Daqing | Dar es Salaam | Davenport Moline Rock Island | Dayton | Decatur | Deltona Daytona Beach Ormond Beach | Denpasar | Denver Aurora Lakewood | Derby | Des Moines West Des Moines | Detroit Warren Dearborn | Deyang | Dhaka | Dijon Métropole | Dongguan | Dongying | Dothan | Dover | Dresden | du Grand Nancy | Dubai Sharjah Ajman | Dubuque | Duluth | Durban | Durham Chapel Hill | East Stroudsburg | Eau Claire | Edinburgh | Edmonton | Eindhoven | El Centro | El Paso | Elizabethtown Fort Knox | Elkhart Goshen | Elmira | Enid | Enschede | Erfurt | Erie | Eugene Springfield | European Metropolis of Lille | Evansville | Ezhou | Fairbanks | Fangchenggang | Fargo | Farmington | Fayetteville Springdale Rogers | Flagstaff | Flensburg | Flint | Florence | Florence | Florence Muscle Shoals | Fond du Lac | Fort Collins | Fort de France | Fort Smith | Fort Wayne | Fortaleza | Foshan | Frankfurt Rhine Main | Freiburg im Breisgau | Fresno | Fukuoka Kitakyushu | Fuzhou | Gadsden | Gainesville | Gdansk | Geelong | Geneva | Genoa | George Town | German | Gettysburg | Ghent | Gibraltar | Gladstone | Glasgow | Glens Falls | Goiânia | Gold Coast | Goldsboro | Gothenburg | Granada | Grand Besançon Métropole | Grand Forks | Grand Island | Grand Junction | Grand Poitiers communauté urbaine | Grand Rapids Kentwood | Grand Reims | Grants Pass | Graz | Great Falls | Greater Buenos Aires | Greater Cairo | Greater Dublin Area | Greater Helsinki | Greater Manila | Greater Mexico | Greater Montreal | Greater São Paulo | Greater Sudbury | Greater Tokyo | Greater Toronto Hamilton | Greater Vancouver | Greeley | Green Bay | Greensboro High Point | Greenville Anderson | Grenoble | Groningen | Guadalajara | Guangzhou | Guelph | Guiyang | Gulfport Biloxi | Gwangju | Hagerstown Martinsburg | Haifa | Haixi Prefecture | Halifax Nova Scotia | Hamamatsu | Hamburg | Hami | Hammond | Hanford Corcoran | Hangzhou | Hannover Braunschweig Göttingen Wolfsburg | Hanoi | Harbin | Harrisburg Carlisle | Harrisonburg | Hartford East Hartford Middletown | Hattiesburg | Hefei | Heidelberg | Hickory Lenoir Morganton | Hilton Head Island Bluffton | Hinesville | Hiroshima | Ho Chi Minh City | Hobart | Hohhot | Homosassa Springs | Hong Kong | Hot Springs | Houma Thibodaux | Houston | Hsinchu | Huai'an | Huntington Ashland | Huntsville | Iași</p>
        </div>
        <div class="footerotherlinkcontainerbox">
            <h3>Explore the Best Social Media Marketing Agencies</h3>
            <p>Idaho Falls | Indianapolis Carmel Anderson | Innsbruck | Iowa City | Iserlohn | Istanbul | Ithaca | İzmir | Jackson | Jacksonville | Jakarta | Janesville-Beloit, WI MSA | Jeddah | Jefferson City | Jerusalem | Jiayuguan | Jinan | Jinchang | Jingmen | Jiujiang | Johannesburg | Johnson City | Johnstown, | Jonesboro | Joplin | Jundiaí | Kabul | Kagoshima | Kahului Wailuku Lahaina | Kaiserslautern | Kalamazoo Portage | Kankakee | Kansas City | Kaohsiung | Karamay | Karlsruhe | Kassel | Katowice | Kaunas | Kelowna | Kennewick Richland | Kiel | Kielce | Killeen Temple | Kingsport Bristol | Kingston | Kitchener | Knoxville | Koblenz | Kokomo | Konstanz | Košice | Kraków | Kuala Lumpur | Kumamoto | Kunming | Kuwait City | Kyiv | Kyoto Osaka Kobe | La Crosse Onalaska | Lafayette | Lagos | Lake Charles | Lake Havasu City-Kingman, AZ MSA | Lakeland Winter Haven | Lancaster | Lansing East Lansing | Laredo | Las Cruces | Las Palmas | Las Vegas Henderson Paradise | Launceston | Lawrence | Lawton | Le Mans | Lebanon | Leeds (West Yorkshire) | Leeuwarden | Leicester | Leiden | Les Abymes | Lethbridge | Lewiston | Lewiston Auburn | Lexington Fayette | Lhasa | Lianyungang | Liège | Lima | Limoges | Lincoln | Linz | Lisbon | Little Rock Conway | Liuzhou | Liverpool Merseyside | Ljubljana | Łódź | Logan | London | London | Longview | Longyan | Los Angeles | Louisville Jefferson County | Lubbock | Lublin | Luoyang | Luton | Luxembourg | Lynchburg | Lyon | Maanshan | Macao | Mackay | Macon Bibb County | Madera | Madison | Madrid | Magdeburg | Makassar | Málaga | Malmö | Manado | Manaus | Manchester | Manchester Nashua | Manhattan | Mankato | Mansfield | Mataram | McAllen Edinburg Mission | Medan | Medellín | Medford | Melbourne | Memphis | Merced | Messina | Metropolitan Cork | Miami Fort Lauderdale Pompano Beach | Michigan City La Porte | Midland | Milan | Milton Keynes | Milwaukee Waukesha | Minneapolis St. Paul Bloomington | Minsk | Missoula | Mobile | Modesto | Monaco | Moncton | Monroe | Monroe | Monterrey | Montevideo | Montgomery | Montpellier | Morgantown | Morristown | Moscow | Mount Vernon Anacortes | Mulhouse Alsace Agglomération | Muncie | Muskegon | Myrtle Beach Conway | Nagoya | Nairobi | Namur | Nanchang | Nanjing | Nanning</p>
        </div>
        <div class="footerotherlinkcontainerbox">
            <h3>Explore the Best Web Designing and Development Agencies</h3>
            <p>Nanping | Nantes | Nantong | Napa | Naples Marco Island | Nashville Davidson Murfreesboro Franklin | Neubrandenburg | New Bern | New Haven Milford | New Orleans Metairie | New York Newark | Newcastle | Nicosia | Niigata | Niles | Ningbo | Ningde | Northwest | Norwich New London | Nottingham | Nuremberg | Nyingchi | Ocala | Ocean City | Odense | Odessa | Offenburg | Ogden Clearfield | Okayama | Oklahoma City | Olympia Lacey Tumwater | Omaha Council Bluffs | Opole | Orange | Ordos | Orlando Kissimmee Sanford | Orléans | Oshawa | Oshkosh Neenah | Oslo | Osnabrück | Ostrava | Ottawa Gatineau | Owensboro | Oxnard Thousand Oaks Ventura | Padang | Paderborn | Padua Treviso Venice | Palembang | Palermo | Palm Bay Melbourne Titusville | Palma de Mallorca | Pamplona | Panama City | Panjin | Panzhihua | Paris | Parkersburg Vienna | Parma | Pau Béarn Pyrénées | Pekanbaru | Pensacola Ferry Pass Brent | Peoria | Perpignan Méditerranée | Perth | Perugia | Peterborough | Pforzheim | Philadelphia Camden Wilmington | Phoenix Mesa Chandler | Pine Bluff | Pittsburgh | Pittsfield | Ploiești | Plymouth | Plzeň | Pocatello | Port St. Lucie | Portland Vancouver Hillsboro | Porto Alegre | Portsmouth | Poznań | Prague | Prato | Prescott Valley Prescott | Pretoria | Providence Warwick | Provo Orem | Puebla | Punta Gorda | Putian | Qingdao | Quanzhou | Quebec City | Quzhou | Racine | Raleigh Cary | Rapid City | Reading | Recife | Redding | Regensburg | Reggio Emilia | Regina Saskatchewan | Rennes Métropole | Reno | Rhine Neckar | Rhine Ruhr | Richmond | Riga | Rio de Janeiro | Riverside San Bernardino | Riyadh | Roanoke | Rochester | Rockford | Rockhampton | Rocky Mount | Rome | Rostock | Rotterdam | Rouen Normandie | Rzeszów | Saarbrücken | Sacramento Roseville Folsom | Saginaw | Saguenay | Saint Étienne | Saint John New Brunswick | Saint Petersburg | Salem | Salinas | Salisbury | Salt Lake City | Salvador | Salzburg | San Angelo | San Antonio New Braunfels | San Diego Chula Vista Carlsbad | San Jose San Francisco Oakland | San Juan | San Luis Obispo Paso Robles | San Marino | San Sebastián | Sanmenxia | Sanming | Santa Cruz de Tenerife | Santa Fe | Santa Maria Santa Barbara | Santa Rosa Petaluma | Santander | Santiago | Santiago de Cali | Santiago de los Caballeros | Santo Domingo | Santos | São José dos Campos | São José dos Pinhais | Sapporo | Sarasota Bradenton | Saskatoon | Savannah | Schweinfurt | Scranton Wilkes Barre | Seattle Tacoma Bellevue | Sebastian Vero Beach | Sebring Avon Park | Semarang | Sendai | Seoul | Seville | Shanghai | Shantou</p>
        </div>
        <div class="footerotherlinkcontainerbox">
            <h3>Explore the Best PPC Agencies</h3>
            <p>Shaoxing | Sheboygan | Sheffield | Shenyang | Shenzhen | Sherbrooke | Sherman Denison | Shijiazhuang | Shizuishan | Shizuoka | Shreveport Bossier City | Shuozhou | Siegen | Sierra Vista Douglas | Singapore | Sioux City | Sioux Falls | Sofia | Sorocaba | South Bend Mishawaka | South Portland | Southampton | Spartanburg | Spokane Spokane Valley | Springfield | St. Catharines | St. Cloud | St. George | St. John Newfoundland Labrador | St. Joseph | St. Louis | State College | Staunton | Stockholm | Stockton | Stoke on Trent | Strasbourg | Stuttgart | Sumter | Sunderland | Sunshine Coast | Surabaya | Suzhou | Swansea | Sydney | Syracuse | Szczecin | Taichung | Tainan | Taipei Keelung | Taiyuan | Taizhou Jiangsu | Tallahassee | Tallinn | Tampa St. Petersburg Clearwater | Tampere | Tangshan | Taoyuan | Taranto | Tbilisi | Tel Aviv | Terre Haute | Texarkana | The Hague | The Villages | Thessaloniki | Thunder Bay | Tianjin | Tilburg | Timișoara | Tokelau | Toledo | Toowoomba | Topeka | Toulouse | Tours Métropole Val de Loire | Townsville | Trenton Princeton | Trois Rivières | Tucson | Tulsa | Turin | Turku | Tuscaloosa | Twin Falls | Tyler | Tyneside | Uberlandia | Ulm | Uppsala | Urban Honolulu | Ürümqi | Utica Rome | Utrecht | Valdosta | Valencia | Valladolid | Vallejo | Valletta | Verona | Victoria | Vienna | Vigo | Vilnius | Vineland Bridgeton | Virginia Beach Norfolk Newport News | Visalia | Vitória | Vitoria-Gasteiz | Waco | Wagga Wagga | Walla Walla | Warner Robins | Warsaw | Washington Arlington Alexandria | Waterloo Cedar Falls | Watertown Fort Drum | Watsonville | Wausau Weston | Weihai | Weirton Steubenville | Wellington | Wenatchee | Wenzhou | Wetzlar | Wheeling | Wichita Falls | Williamsport | Wilmington | Winchester | Windsor | Winnipeg | Winston Salem | Wollongong | Worcester | Wrocław | Wuhai | Wuhan | Wuhu | Xi'an | Xiamen | Xiangtan | Xiangyang | Xilingol League | Xinyu | Xuchang | Xuzhou | Yakima | Yan'an | Yancheng | Yangzhou | Yantai | Yerevan | Yichang | Yingtan | York | York-Hanover | Youngstown Warren Boardman | Yuba City | Yueyang | Yulin Shaanxi | Yuma | Yuxi | Zagreb | Zaragoza | Zhangzhou | Zhejiang | Zhengzhou | Zhenjiang | Zhuzhou | Zibo | Zürich | Zwolle</p>
        </div>
    </div>
</section>
{{-- Footer City Section Ends Here --}}

{{-- Copyright Section Starts Here --}}
<section class="copyright-section">
    <div class="container">
        <div class="copyrightflexbox">
            <div class="copyrightmenubox">
                <p>
                    <a href="/terms-of-use">Terms of Use</a> |
                    <a href="/privacy-policy">Privacy Policy</a> |
                    <a href="/terms-and-conditions">Terms & Conditions</a>
                </p>
            </div>
            <div class="copyrightcontentbox">
                <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> | <a href="/">Vedeshra Technologies</a> All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>
{{-- Copyright Section Ends Here --}}
