drop database if exists s0122215777_1;

create database s0122215777_1 character set utf8 collate = utf8_general_ci;

use s0122215777_1;

create table operater(
sifra int not null primary key auto_increment,
ime varchar (50) not null,
prezime varchar(50) not null,
email varchar (50) not null,
lozinka varchar (50) not null)
engine=innodb;

create table novosti(
sifra int not null primary key auto_increment,
naslov varchar (100) not null,
datum date not null,
tekst varchar (5000) not null,
operater int)
engine=innodb;

create table koncert(
sifra int not null primary key auto_increment,
naziv varchar (200) not null,
datum datetime not null,
mjesto varchar (50) not null,
opis varchar (5000) not null,
operater int)
engine=innodb;

create table novosti_koncert(
koncert int,
novosti int)
engine=innodb;

create table zelje(
sifra int not null primary key auto_increment,
zelja varchar (1000) not null,
datum date null,
osoba varchar (50) not null,
email varchar (50) null,
koncert int)
engine=innodb;

create table slika(
sifra int not null primary key auto_increment,
putanja varchar (100) not null,
koncert int)
engine=innodb;





alter table novosti add foreign key (operater) references operater(sifra);
alter table koncert add foreign key (operater) references operater(sifra);
alter table novosti_koncert add foreign key (koncert) references koncert(sifra);
alter table novosti_koncert add foreign key (novosti) references novosti(sifra);
alter table zelje add foreign key (koncert) references koncert(sifra);
alter table slika add foreign key (koncert) references koncert(sifra);





insert into `operater` (`ime`, `prezime`, `email`, `lozinka`)
values ('Manuela', 'Mikulecki', 'mmikulecki@gmail.com', md5('baze'));

insert into `operater` (`ime`, `prezime`, `email`, `lozinka`)
values ('Ines', 'Stjepanović', 'psihoface@hotmail.com', md5('ines'));

insert into `operater` (`ime`, `prezime`, `email`, `lozinka`)
values ('Doris', 'Despot', 'ddespot@gmail.com', md5('doris'));





insert into `novosti` (`naslov`, `datum`, `tekst`, `operater`)
values ('Dan Žena - veliki koncert u Avenue Mall-u ', '2015-03-05', 'Povodom obilježavanja dana žena, u Avenue Mall-u u Osijeku će se održati nekoliko koncerata i izvedbi, između kojih će vas svojim prisustvom uveseliti i Ines i Doris. Izvodit će 3 pjesme, nakon kojih ćete moći pogledati izvrsne plesne točke, recitaciju poezije, zvukove afričkih bubnjeva i još mnogo toga. Dođite i poslušajte live izvedbu Baby Blue i uživajte u dobroj atmosferi i još boljoj glazbi.', 1);

insert into `novosti` (`naslov`, `datum`, `tekst`, `operater`)
values ('Baby Blue live na Gradskom radiju', '2014-02-24', 'U srijedu u 20:00h upalite svoje radio prijemnike i poslušajte Baby Blue u emisiji Sataraš. Poslušajte što Ines i Doris imaju za reći o svojim glazbenim počecima, kakvih još talenata kriju i još puno toga. Ne propustite ovaj intervju jer vas na kraju čeka i live izvedba nekoliko pjesama uz koje će vam raspoloženje garantirano skočiti!', 2);

insert into `novosti` (`naslov`, `datum`, `tekst`, `operater`)
values ('Baby Blue live u Voodoo', '2015-02-04', 'U subotu vas očekuje odlična atmosfera uz acoustic duo Baby Blue u caffe baru Voodo u Sunčanoj 8. Uz odličan repertoar, koji jako dobro poznajete, čut ćete i neke od novih pjesama u live izvedbi ovog dvojca. Dođite i zabavite se kao nikada do sad uz super cijene pića i još bolju glazbu!', 3);

insert into `novosti` (`naslov`, `datum`, `tekst`, `operater`)
values ('Baby Blue na Radio Osijeku', '2013-09-03', 'u petak u 19:30, poslušajte prvi radijski intervju dvojca Baby Blue za Radio Osijek. S obzirom na to da im je ovo prvi intervju, malo treme sigurno će biti prisutno zato ne propustite moguće pogreške, gafove i sve ostalo što se događa pod utjecajem treme! Čujemo se u petak!', 1);

insert into `novosti` (`naslov`, `datum`, `tekst`, `operater`)
values ('Hypo Teen Music Stars', '2012-10-09', 'Hypo Teen Music Stars stiže u Avenue Mall! Radi se o prvom nacionalnom natjecanju teen glazbenika, koje je dio međunarodnog Fender i Roland natjecanja. Pobjednicima nacionalnog natjecanja osigurano je sudjelovanje na EastEurope Roland V Drumu, koje će se održati u studenom u Budimpešti. Organizatori su osigurali i druge vrlo vrijedne nagrade, zato dođite u subotu podržati acoustic duo Baby Blue u svojim izvedbama i naravno uživajte uz ostale izvođače i zajamčeno dobru atmosferu!', 2);

insert into `novosti` (`naslov`, `datum`, `tekst`, `operater`)
values ('Baby Blue u Cadillacu', '2014-07-02', 'Ove subote dođite u Cadillac jer će vas acoustic duo Baby Blue očarati svojim izuzetnim nastupom i pažljivo probranom set listom. Bit će za svakog ponešto pa dođite u što većem broju i otkrijte koja pjesma je baš vaša i naravno uz sve to dolaze i akcijske cijene pića. Vidimo se!', 3);

insert into `novosti` (`naslov`, `datum`, `tekst`, `operater`)
values ('Cookie + Baby Blue', '2014-12-09', 'Dođite u Cookie u subotu, kafić koji vam uz odlične ponude pića, muffina i ostalih poslastica, ovaj puta nudi i odličnu glazbu. Ines i Doris će izvesti nekoliko pjesama sa svoje poznate set liste, kako bi vaš boravak u kafiću učinile još boljim i ugodnijim. Pojavite se u što većem broju i uživajte u slasticama koje vam Cookie nudi i u odličnoj glazbi i druženju.', 1);

insert into `novosti` (`naslov`, `datum`, `tekst`, `operater`)
values ('Live svirka u caffe baru Smile', '2015-01-14', 'U ove hladne dane, pravi način da se zagrijete i opustite je da dođete u subotu u caffe bar Smile u Ulici Republike, gdje će Ines i Doris predstaviti svoj opsežni repertoar. Bit će za svakoga ponešto, a možda i nečija želja  bude ostvarena. Dođite i uživajte u super atmosferi!', 2);

insert into `novosti` (`naslov`, `datum`, `tekst`, `operater`)
values ('Acoustic jamm BB u Voodoo', '2015-06-05', 'Došlo je vrijeme za malo dobre akustične svirke, zato vas sve pozivamo da dođete na terasu caffe bara Voodoo sutra u 19:00h i da zapjevate s Baby Blue u unpluged verziji. Dobra atmosfera je zajamčena zato dođite u velikom broju i ne propustite ovu senzaciju!', 3);

insert into `novosti` (`naslov`, `datum`, `tekst`, `operater`)
values ('Ines vs. The Voice', '2015-02-03', 'Ines se prijavila za nastup u prvom hrvatskom izdanju The Voice-a. Svi ste već upoznati s njenim iznimnim pjevačkim talentom, stoga budite pred malim ekranima u subotu u 20:00 sati i poslušajte što će nam to Ines ovog puta izvesti i kakav će to dojam ostaviti na žiri i publiku.', 1);







insert into `koncert` (`naziv`, `datum`, `mjesto`, `opis`, `operater`)
values ('Kako je protekao dan žena u Avenue Mallu uz Baby Blue', '2015-03-08 16:00:00', 'Avenue Mall Osijek', 'Za početak bismo željele zahvaliti svima što su se odazvali u tako velikom broju. Uistinu ste pokazali da vam je važno biti dio nečega kao što je Dan žena i uljepšali ste nam provod u Avenue Mallu. Zahvaljujemo organizatorima i nadamo se kako će se ubuduće organizirati ovakvi događaji, koji osim obrazovnog imaju i izuzetno zabavni karakter. Hvala još jednom svima!', 1);

insert into `koncert` (`naziv`, `datum`, `mjesto`, `opis`, `operater`)
values ('Voodoo live rezime', '2015-02-07 10:00:00', 'Caffe bar Voodo', 'Hvala svima na dolasku, bilo je bolje od očekivanog, a kao što ste mogli i primjetiti, neke nove pjesme su se pojavile na popisu. Hvala Kruni i Voodoo što su nam još jednom omogućili da vas razveselimo,raspjevamo i rasplešemo i nadamo se da ovo nije posljednji put. Do iduće svirke vam želimo puno dobre glazbe, a obavijest o idučoj svirci slijedi uskoro!', 2);


insert into `koncert` (`naziv`, `datum`, `mjesto`, `opis`, `operater`)
values ('Just Smile!', '2015-10-10 00:00:00', 'Caffe bar Smile', 'Po prvi puta smo svirali u caffe baru Smile i bilo je odlično, hvala svima što su došli i što su nam dali zanimljive prijedloge koje smo naravno uvažili. Ispunili smo nekoliko glazbenih želja i nadamo se kako ste svi uživali. Set lista se iz dana u dan povećava, tako da se nadamo da ćete svaki puta biti u što većem broju. Uživajte i vidimo se na sljedećoj svirci!', 3);


insert into `koncert` (`naziv`, `datum`, `mjesto`, `opis`, `operater`)
values ('Baby Blue očarali Hypo Teen žiri!', '2012-10-13 23:00:00', 'Avenue Mall Osijek', 'Kao što već sigurno znate, Ines i Doris su očarale žiri i publiku na ovogodišnjem Hypo Teen Music Starsu. Naime, žiri  nije imao apslutno nijednu primjedbu na cure i njihov nastup pa je tako Ines proglašena najboljom pjevačicom i osvojila je mikrofon. Curama je omogućen i nastup u Zagrebu za nekoliko dana pa pozivamo sve koji budu u mogućnosti da dođu i podrže još jednom acoustic duo Baby Blue!', 1);


insert into `koncert` (`naziv`, `datum`, `mjesto`, `opis`, `operater`)
values ('Uspješni neuspjeh u The Voice-u', '2015-01-07 23:00:00', 'Zagreb', 'Svi oni koji su gledali četvrtu epizodu prvog hrvatskog The Voice-a, zasigurno su ostali razočarani kada su saznali da Ines nije prošla dalje. S obzirom na to da žiri nije imao negativnih komentara na njezinu izvedbu, krajnje je nepravedno što joj prolaz nije omogućen. No bez obzira na to, svirke se i dalje nastavljaju, Ines i dalje pjeva vaše omiljene pjesme i acoustic duo Baby Blue nastavlja sa svojim radom!', 2);


insert into `koncert` (`naziv`, `datum`, `mjesto`, `opis`, `operater`)
values ('Uspješni intervju Baby Blue', '2014-02-26 23:00:00', 'Osijek', 'Ines i Doris su dale intervju za Gradski radio koji je prošao izuzetno dobro. Govorile su o svojim počecima, ljubavi prema glazbi i drugim skrivenim talentima. Nadamo se da ste ih slušali, a za one koji nisu, a voljeli bi znati, intervju je moguće pronaći na službenim stranicama Gradskog radija. Do slušanja!', 3);


insert into `koncert` (`naziv`, `datum`, `mjesto`, `opis`, `operater`)
values ('Prvi uspješni intervju', '2013-09-06 23:00:00', 'Osijek', 'Uz izvrsno odrađen prvi intervju, Baby Blue su još jednom pokazale da im je glazba u srcu. Na samom kraju iscrpnog intervjua, slušatelje su oduševile sjajnim live izvedbama Janis Joplin, Jessie J i Pink. Naravno, to je samo kratki prikaz onoga što one sviraju, pa se nadamo da ćete ih i dalje slušati i pratiti kako biste vidjeli njihove prave talente!', 1);


insert into `koncert` (`naziv`, `datum`, `mjesto`, `opis`, `operater`)
values ('Super svirka i još bolja ekipa', '2014-07-05 23:00:00', 'Caffe bar Cadillac', 'Hvala svima koji su prisustvovali još jednom odlično odrađenom koncertu. Posebice hvala svima koji su podigli atmosferu svojim plesnim koracima i zavidnim glasovnim sposobnostima. Nadamo se kako ćemo imati prilike još nastupati u ovom kafiću i kako će atmosfera svaki puta biti sve bolja.', 2);


insert into `koncert` (`naziv`, `datum`, `mjesto`, `opis`, `operater`)
values ('kolač i cuga i još bolja svirka', '2013-11-13 23:00:00', 'Cookie caffe Osijek', 'Za sve one koji su bili u Cookie caffe-u u Osijeku, sigurno je da su se izrazito dobro proveli. Slušati super glazbu uz odlične slastice i dobru cugu bilo je neopisivo. Jedan od boljih intimnih koncerata uz relativno velik broj ljudi u malom prostoru, neprocjenjivo.', 3);


insert into `koncert` (`naziv`, `datum`, `mjesto`, `opis`, `operater`)
values ('Jammali smo i bilo nam je super!', '2015-06-06 22:00:00', 'Caffe bar Voodoo', 'Hvala svima što ste došli u Voodoo, atmosfera je bila odlična! Svi smo se super proveli i opustili, ekipa je bila raspjevana i super raspoložena, moglo bi se reći kako nam apsolutno ništa nije nedostajalo. Garantiramo vam da će ovakvih jammova biti još u budućnosti i naravno, obavijest o idućoj svirci slijedi ubrzo!', 1);






insert into novosti_koncert (`koncert`, `novosti`)
values (1, 1);

insert into novosti_koncert (`koncert`, `novosti`)
values (2, 2);

insert into novosti_koncert (`koncert`, `novosti`)
values (3, 3);

insert into novosti_koncert (`koncert`, `novosti`)
values (4, 4);

insert into novosti_koncert (`koncert`, `novosti`)
values (5, 5);

insert into novosti_koncert (`koncert`, `novosti`)
values (6, 6);

insert into novosti_koncert (`koncert`, `novosti`)
values (7, 7);

insert into novosti_koncert (`koncert`, `novosti`)
values (8, 8);

insert into novosti_koncert (`koncert`, `novosti`)
values (9, 9);

insert into novosti_koncert (`koncert`, `novosti`)
values (10, 10);


insert into zelje (`zelja`, `datum`, `osoba`, `email`, `koncert`)
values ('super ste bile, da ste barem više pjesama svirali, al sve u svem bilo je super', '0000-00-00', 'andja', 'amihaljevic@ffos.hr', 1);


insert into zelje (`zelja`, `datum`, `osoba`, `email`, `koncert`)
values ('super ste, samo malo više da svirate indie bilo bi još bolje', '0000-00-00', 'luci', '', 2);


insert into zelje (`zelja`, `datum`, `osoba`, `email`, `koncert`)
values ('bilo je predobro, atmosfera odlična, glazba super, kolači odlični, stvarno pun pogodak', '0000-00-00', 'marti', '', 3);


insert into zelje (`zelja`, `datum`, `osoba`, `email`, `koncert`)
values ('bile ste super, zaslužena pobjeda, sam tak nastavite, nadam se da uskoro svirate negdje', '0000-00-00', 'barbi', 'barbarakujavec@yahoo.com', 4);


insert into zelje (`zelja`, `datum`, `osoba`, `email`, `koncert`)
values ('jao, baš mi je krivo što nisi prošla dalje, al bila si stvarno super tak da ono, sam ti nastavi pjevat, briga te za njih!', '0000-00-00', 'andrea', '', 5);


insert into zelje (`zelja`, `datum`, `osoba`, `email`, `koncert`)
values ('haha bile ste odlične, bilo vas je čudno slušat a ne gledat, al sve u svem super ste bile, i odabir pjesama na kraju super!', '0000-00-00', 'tena', 'tvilcek@ffos.hr', 6);


insert into zelje (`zelja`, `datum`, `osoba`, `email`, `koncert`)
values ('bile ste super, nadam se da vam ovo nije zadnji intervju i da će ih bit još, stvarno je bilo odlično', '0000-00-00', 'martina', '', 7);


insert into zelje (`zelja`, `datum`, `osoba`, `email`, `koncert`)	
values ('e bilo je predobro, nadam se da će bit više ovakvih svirki i još više pjesama definitivno', '0000-00-00', 'mic', '', 8);


insert into zelje (`zelja`, `datum`, `osoba`, `email`, `koncert`)	
values ('bilo je super, super mjesto, dovoljno ljudi je stalo i ozvučenje je bilo super stvarno, svaka čast', '0000-00-00', 'tina', '', 9);


insert into zelje (`zelja`, `datum`, `osoba`, `email`, `koncert`)	
values ('ovo vam je dosad najbolja ideja koju ste imali, bolje od svakog koncerta dosad, bilo je super i zanimljivo i stvarno mislim da su se svi super zabavili, nadam se da ćete to uskoro ponovit', '0000-00-00', 'mira', '', 10);





insert into slika (`putanja`, `koncert`)
values ('slike/danzena.jpg', 1);

insert into slika (`putanja`, `koncert`)
values ('slike/voodoo.jpg', 2);

insert into slika (`putanja`, `koncert`)
values ('slike/smile.jpg', 3);

insert into slika (`putanja`, `koncert`)
values ('slike/hypo.jpg', 4);

insert into slika (`putanja`, `koncert`)
values ('slike/voice.jpg', 5);

insert into slika (`putanja`, `koncert`)
values ('slike/gradski.jpg', 6);

insert into slika (`putanja`, `koncert`)
values ('slike/radio.jpg', 7);

insert into slika (`putanja`, `koncert`)
values ('slike/cadillac.jpg', 8);

insert into slika (`putanja`, `koncert`)
values ('slike/cookie.jpg', 9);

insert into slika (`putanja`, `koncert`)
values ('slike/jamm.jpg', 10);
