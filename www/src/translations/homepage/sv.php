<?php
return [
    'topbar' => [
        'downloadPdf' => 'Ladda ned PDF'
    ],
    'sidebar' => [
        'header2' => 'Fullstack systemutvecklare<br/>specialiserad inom frontend, backend<br/>och Linux system.',
        'header3' => 'Kod som gör en sak, och en sak väl är konst.',
        'headerContact' => 'Kontakt',
        'headerAboutMe' => 'Kort om mig',
        'yes' => 'Ja',
        'aboutMe' => 'Hej!<br/>
                    Jag är en systemutvecklare som sedan tidig<br/>ålder drivits av nyfikenhet till allt inom<br/>programming, systemkunskap, hårdvara och nätverk-stacken.<br/>
                    Med tiden så har jag utforskat ett flertal<br/>språk och ramverk. Från C64 Basic/Asm och C/C++ till Php, Kotlin och Javascript.<br/><br/>
                    Min passion är att jobba med Modern <span class="text-style-underline">Javascript</span>/<span class="text-style-underline">Typescript</span> utveckling med <span class="text-style-underline">React</span>/<span class="text-style-underline">Node</span>, samt backend-fokus inom <span class="text-style-underline">Java</span>/<span class="text-style-underline">Kotlin</span> med <span class="text-style-underline">Spring</span>/<span class="text-style-underline">Micronaut</span>.<br/><br/>
                    Jag är som person väldigt lugn och metodisk med det jag gör, men också väldigt envis och persistent för att nå mina mål.
                    ',
        'lastUpdated' => 'Senast uppdaterad'
    ],
    'cvSections' => [
        'workExperience' => [
            'container' => [
                'header' => 'Arbetslivserfarenhet',
                'headerImg' => 'portfolio.svg',
                'anchor' => 'work-experience',
                'events' => [
                    'container' => [
                        'timeFrom'=> '2018-01',
                        'timeTo'=> '',
                        'title' => 'Systemutvecklare (Fullstack)',
                        'keywords' => ['Java', 'Kotlin', 'Javascript', 'Typescript', 'React', 'Spring', 'Micronaut', 'Maven', 'Gradle', 'Docker', 'Kubernetes'],
                        'workplace' => '<a href="https://www.mindville.com/" target="_blank">Mindville AB</a> / <a href="https://www.atlassian.com/" target="_blank">Atlassian</a>',
                        'description' => 'Utvecklare till <a href="https://marketplace.atlassian.com/plugins/com.riadalabs.jira.plugins.insight/server/overview" target="_blank">Insight Asset Management for Jira</a>.<br/>
                                          Insight är ett asset management system tätt integrerat med Jira för att skapa en fullständig överblick över företag och system.<br/>
                                          Det innehåller allt från komplexa relationer, frågespråk och flöden till grafer, importer, och automatiseringar.<br/>
                                          Jag har under min tid här arbetat med en mängd olika tekniker och miljöer.<br/>
                                          Från en stor Java monolit byggt mot Atlassians SDKer användades Spring med Active Objects med en äldre front-end lösning,<br/>
                                          till att bli mer av ett "cloud first" företag med moderna mikrotjänster skrivna i Kotlin mot Docker/Kubernetes/AWS med morderna React front-end verktyg.<br/>
                                          Där vi med tiden utforskat många koncept med Redux, Typescript, Flow och implementations tekniker.<br/>
                                          Mindville AB är sedan sommaren 2020 officiellt en del utav Atlassian.'
                    ],
                    [
                        'timeFrom'=> '2017-02',
                        'timeTo'=> '2017-12',
                        'title' => 'Utvecklare',
                        'keywords' => ['Php 7.1', 'MySql', 'Code Igniter', 'Slim', 'Laravel', 'Twig', 'Dbal', 'Redis'],
                        'workplace' => '<a href="https://www.shopello.se/" target="_blank">Shopello</a> / <a href="https://www.mytaste.se/" target="_blank">Mytaste</a>',
                        'description' => 'Shopello jobbar inom shopping/e-handeln där vi dels har våra egna sidor, och dels samarbetar med en mängd partners för att driva shoppingtrafik.<br/>
                                            Under min tid på shopello så har vi gjort väldigt stora prestandaförbättringar inom plattformen och utökat dess funktionalitet, vilket tillåtit oss att lansera i flera<br/>
                                            nya länder hantera mycket större volymer data och trafik. Utöver utvecklingen av plattformen så har mina uppdrag även varit att se till så att alla<br/>
                                            butikers/partners feeds fungerat korrekt, samt att hålla ett öga på trafiken för att hitta bottar etc.<br/>
                                            Positionen har haft en enormt växande roll för mig där jag har fått lära mig nya utvecklingskoncept och ramverk.<br/>
                                            Under min tid som anställd så tvingades bolagen gå ihop pga nedskärningar och SEO problem, där nedskrärningarna drabbade flera anställda inklusive mig.'
                    ],
                    [
                        'timeFrom'=> '2016-09',
                        'timeTo'=> '2017-01',
                        'title' => 'Junior utvecklare',
                        'keywords' => ['Php 5.4', 'MySql', 'jquery'],
                        'workplace' => '<a href="http://clinicbuddy.com/" target="_blank">Clinicbuddy</a>',
                        'description' => 'Clinicbuddy jobbar inom hälso och sjukvården med att hantera bokningar, journaler, filer, betalningar och generering av PDF dokument.<br/>
                                          Mina huvudsakliga uppgifer här var integrationer mot betlasystem/faktureringstjänster, externa system som hörseltest och import/konverting<br/>
                                          utav diverse data mellan olika databaser och programvaror som Lotusnotes och att skriva script som generarade pdf doukment.'
                    ],
                    [
                        'timeFrom'=> '2015-10',
                        'timeTo'=> '2016-05',
                        'title' => 'Android-utvecklare, Linux-utvecklare',
                        'keywords' => ['Java', 'Android', 'Linux'],
                        'workplace' => '<a href="http://www.stsolutions.se/" target="_blank">Scandinavian Technical Solutions AB (STSolutions)</a>',
                        'description' => 'Andorid utvecklare till projektet "Exqube", en IOT lösning för att mäta, logga och övervaka enheter.<br/>
                                          Applicationen använder sig utav en bakgrundstjänst som kommunicerar via bluetooth för att övervaka mätvärden i t.ex bilar.<br/>
                                          Gränsnittet presenterar den rapporterade datan i flera former i ett lättöverskådligt och anpassningsbart format som t.ex en bils instrumentbräda<br/>
                                          Linux utvecklare till ett antal mindre projekt där tjänster levererats som embeddedsystem primärt med Raspberry PIs (GPIO).'
                    ],
                    [
                        'timeFrom'=> '2015-08',
                        'timeTo'=> '2015-10',
                        'title' => 'IT Konsult',
                        'keywords' => [],
                        'workplace' => '<a href="https://www.academicwork.se/" target="_blank">Academic Work</a> / <a href="http://www.fujitsu.com/se/" target="_blank">Fujitsu Sweden</a>',
                        'description' => 'Tekniker åt Fujitsu Sweden AB.<br/>
                                          Utbyte/installation utav kassasystem/butiksutrustning nattetid.'
                    ],
                    [
                        'timeFrom'=> '2010-01',
                        'timeTo'=> '2015-08',
                        'title' => 'Simtränare och simlärare',
                        'keywords' => [],
                        'workplace' => '<a href="http://www.kanaan.se/" target="_blank">Kanaan SS</a>',
                        'description' => 'Tränare och lärare till både barngrupper och tävlingssimmare.'
                    ],
                    [
                        'timeFrom'=> '2014-06',
                        'timeTo'=> '2014-12',
                        'title' => 'IT Konsult',
                        'keywords' => [],
                        'workplace' => '<a href="https://www.academicwork.se/" target="_blank">Academic Work</a> / <a href="http://www.fujitsu.com/se/" target="_blank">Fujitsu Sweden</a>',
                        'description' => 'Tekniker åt Fujitsu Sweden AB.<br/>
                                          Tekniker åt Fujitsu Sweden AB. Utbyte/Refresh utav SEB datorutrustning.'
                    ],
                    [
                        'timeFrom'=> '2013-09',
                        'timeTo'=> '2013-11',
                        'title' => 'IT Konsult',
                        'keywords' => [],
                        'workplace' => '<a href="https://www.academicwork.se/" target="_blank">Academic Work</a> / <a href="http://www.fujitsu.com/se/" target="_blank">Fujitsu Sweden</a>',
                        'description' => 'Tekniker åt Fujitsu Sweden AB.<br/>
                                          Utbyte/installation utav ny butiksutrustning.'
                    ],
                    [
                        'timeFrom'=> '2012-12',
                        'timeTo'=> '2013-02',
                        'title' => 'Webbmaster',
                        'keywords' => [],
                        'workplace' => '<a href="http://www.knivkultur.se/" target="_blank">Knivkultur Sverige AB</a>',
                        'description' => 'Tillfällig hjälp med att utveckla en företags-sida.'
                    ],
                ],
            ],
        ],
        'education' => [
            'container' => [
                'header' => 'Utbildning',
                'headerImg' => 'university.svg',
                'anchor' => 'education',
                'events' => [
                    'container' => [
                        'timeFrom'=> '2014-08',
                        'timeTo'=> '2016-05',
                        'title' => 'Systemutvecklare 400YH',
                        'keywords' => [],
                        'workplace' => '<a href="http://yhc3l.se/" target="_blank">YHC3L (Centrum För Livslångt Lärande)</a>',
                        'description' => 'En praktiskt utbildning med stort fokus på kod-skrivande och projektarbeten, där inlärningen sker från andra utvecklare och talare.<br/>
                                          Utbildningen har ett stort fokus på backend tjänster med Java och Jersey/Jax-rs och element utav hibernate och spring.<br/>
                                          Utbilningen inkluderade kunskaper inom bland annat:
                                            <ul class="list-education-special">
                                                <li>Databaser</li>
                                                <li>Java JDBC/JPA/SPRING</li>
                                                <li>Webbutveckling med Javascript</li>
                                            </ul>
                                            <ul class="list-education-special">
                                                <li>Android-utveckling</li>
                                                <li>SCRUM gruppövningar</li>
                                                <li>Testning med Junit/mockito</li>
                                            </ul>
                                                Examen togs 2016-05
                                          '
                    ],
                    [
                        'timeFrom'=> '2012-09',
                        'timeTo'=> '2014-08',
                        'title' => 'Datorvetenskap 180HP',
                        'keywords' => [],
                        'workplace' => '<a href="http://www.su.se/" target="_blank">Stockholms universitet</a>',
                        'description' => 'Universitetsutbildning två år. Till stor del en teoretisk utbildning med fokus på logiskt tänkande, algoritmer och design.<br/>
                                          Inkluderar kunskaper inom:
                                            <ul class="list-education-special">
                                                <li>Java</li>
                                                <li>Python</li>
                                                <li>C++</li>
                                            </ul>
                                            <ul class="list-education-special">
                                                <li>Assembly</li>
                                                <li>Algoritmer</li>
                                                <li>Operativsystems design och trådning</li>
                                            </ul>
                                            <ul class="list-education-special">
                                                <li>Scrum</li>
                                            </ul>
                                          '
                    ],
                    [
                        'timeFrom'=> '2008-08',
                        'timeTo'=> '2012-06',
                        'title' => 'Teknik Programmering och Nätverk',
                        'keywords' => [],
                        'workplace' => '<a href="http://thorildsplansgymnasium.stockholm.se/" target="_blank">Teknik Programmering och Nätverk</a>',
                        'description' => 'Teknisk utbildning med fokus på programmering och nätverksteknik.<br/>
                                            <ul class="list-education-special">
                                                <li>Java</li>
                                                <li>C#</li>
                                                <li>C++</li>
                                            </ul>
                                            <ul class="list-education-special">
                                                <li>Webbdesign</li>
                                                <li>Nätverk CISCO CCNA 1-4</li>
                                            </ul>
                                          '
                    ]
                ],
            ],
        ],
        'activities' => [
            'container' => [
                'header' => 'Ideella verksamheter',
                'headerImg' => 'group.svg',
                'anchor' => 'activities',
                'events' => [
                    'container' => [
                        'timeFrom'=> '2012',
                        'timeTo'=> '',
                        'title' => 'Systemunderhållare / Styrelseledamot / Sekreterare',
                        'keywords' => [],
                        'workplace' => '<a href="https://ix.ufs.se/" target="_blank">IX</a> / <a href="https://ufs.se/" target="_blank">Unga forskare stockholm</a>',
                        'description' => 'IX ar en förening som erbjuder en plats för teknik och datorintresserade att umgås och utveckla sina kunskaper.<br/>
                                          Foreningen har sedan Commodore Amiga dagarna främjat att lära ut programmering, teknik och systemkunskap<br/>
                                          under antingen Unga Forskare Stockholm\'s tak eller Proxxi\'s.'
                    ],
                    [
                        'timeFrom'=> '2012',
                        'timeTo'=> '2015',
                        'title' => 'Systemunderhållare / Nyckelbärare',
                        'keywords' => [],
                        'workplace' => '<span class="text-style-italic">Proxxi</span>',
                        'description' => 'Proxxi är en lokalförening och mötesplats för ungdomar som erbjuder en mängd reguljära aktiviteter som annordnas utav olika föreningar.<br/>
                                          Lokalen har haft regel-bundna aktiviteter som har erbjudit allt fran karaoke, filmkvällar, pyssel och kortspel/datorspel till mjukvaruutveckling och hardvarubyggande<br/>
                                          På grund av ekonomiska skäl och rådande klimat så är föreningen tyvärr inte längre aktiv.'
                    ],
                    [
                        'timeFrom'=> '2010',
                        'timeTo'=> '2015',
                        'title' => 'Nätverksansvarig / serveransvarig JOTI',
                        'keywords' => [],
                        'workplace' => '<a href="https://malarscouterna.se/" target="_blank">Mälarscouterna</a> / <a href="https://jota-joti.scout.se/" target="_blank">Joti</a>',
                        'description' => 'JOTI (Jamboree on the Internet) är ett scout evenemang som sker i oktober varje år.<br/>
                                          Alla världens scouter är då välkommna att via internet kommunicera med andra scouter från olika länder via IRC protokollet.<br/>
                                          Festivalen firas utav Mälarscouterna med ett antal tävlingar och tunneringar i diverse spel och aktiviteter samtidigt som vi hjälper deltagarna att komma i kontakt med andra scouter.<br/>
                                          Envetet brukar ha runt ett 60-tal datorer på plats sammankopplade med ett antal företags switchar kopplade mot en egenkonfigurerad linuxserver som hanterar tjänster och filtrerar/hanterar all nätverkstrafik.<br/>
                                          Envetet har till största del sköts utav mig och en kompis och fram tills nu. Men i och med en överväldigande arbetsbörda, hårdvaruproblem samt brist på intresserade medarbetare så ar vi ej längre delaktiga.'
                    ],
                ],
            ],
        ],
    ],
];
