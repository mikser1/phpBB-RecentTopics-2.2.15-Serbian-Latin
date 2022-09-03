$lang = array_merge(
	$lang, array(
	//forum acp
	'RECENT_TOPICS_LIST'            => 'Prikaži u “Nedavne teme”',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Omogućite prikaz tema iz ovog foruma u dodatku “Nedavne teme”.',

	//acp title
	'RECENT_TOPICS'                 => 'Nedavne teme',
	'RT_CONFIG'                     => 'Podešavanja',
	'RECENT_TOPICS_EXPLAIN'         => 'Na ovoj stranici možete da promenite podešavanja specifična za ovaj dodatak.<br /><br />Određeni forumi se mogu obuhvatiti ili izuzeti uređivanjem odgovarajućih foruma u Administrativnoj kontrolnoj tabli.<br />Takođe proverite svoje korisničke dozvole, koje omogućavaju korisnicima da sami promene podešavanja koja se nalaze u nastavku.',

	//global settings
	'RT_GLOBAL_SETTINGS'            => 'Opšta podešavanja',
	'RT_DISPLAY_INDEX'              => 'Prikaži na Početnoj stranici',
	'RT_NUMBER'                     => 'Broj nedavnih tema za prikaz',
	'RT_NUMBER_EXP'                 => 'Maksimalan broj tema za prikaz po stranici.',
	'RT_PAGE_NUMBER'                => 'Prikaži sve stranice nedavnih tema.',
	'RT_PAGE_NUMBER_EXP'            => 'Označite da biste zamenili maksimalan broj prikazanih stranica',
	'RT_PAGE_NUMBERMAX'             => 'Maksimalan broj stranica',
	'RT_PAGE_NUMBERMAX_EXP'         => 'Podesite maksimum stranice (1-999) da se prikazuje u straničenju nedavnih tema osim ako se ne zameni.',
	'RT_MIN_TOPIC_LEVEL'            => 'Minimalni nivo tipa teme',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Određuje minimalni nivo tipa teme za prikaz. Prikazaće samo teme podešenog i većeg nivoa.',
	'RT_ANTI_TOPICS'                => 'Identifikacioni brojevi izuzetih tema',
	'RT_ANTI_TOPICS_EXP'            => 'Identifikacioni brojevi tema koje treba izuzeti moraju biti razdvojeni sa “,” - (Primer: 7,9)<br />Vrednost “0” onemogućava ovu karakteristiku.',
	'RT_PARENTS'                    => 'Prikaži roditeljske forume',
	'RT_PARENTS_EXP'                => 'Prikažite roditeljske forume unutar reda teme nedavnih tema.',

	//User Overridable settings. these apply for anon users and can be overridden by UCP
	'RT_OVERRIDABLE'                => 'Zamenjiva podešavanja unutar Korisničke kontrolne table',
	'RT_LOCATION'                   => 'Prikaži mesto',
	'RT_LOCATION_EXP'               => 'Izaberite mesto za prikaz nedavnih tema.',
	'RT_TOP'                        => 'Prikaži na vrhu',
	'RT_BOTTOM'                     => 'Prikaži na dnu',
	'RT_SIDE'                       => 'Prikaži sa strane',
	'RT_SORT_START_TIME'            => 'Razvrstaj prema vremenu početka teme',
	'RT_SORT_START_TIME_EXP'        => 'Omogućite razvrstavanje nedavnih tema prema vremenu početka teme umesto vremenu poslednjeg odgovora.',
	'RT_UNREAD_ONLY'                => 'Prikaži samo nepročitane teme',
	'RT_UNREAD_ONLY_EXP'            => 'Omogućite da biste prikazali nepročitane teme (bez obzira da li su “nedavne” ili ne). Ova karakteristika koristi ista podešavanja (sa izuzetkom foruma, tema i sl.) kao normalan režim. Napomena: ovo funkcioniše samo za prijavljene korisnike/ce. Gostima će se prikazivati podrazumevana lista.',
	'RT_RESET_DEFAULT'              => 'Vrati podrazumevana korisnička podešavanja.',
	'RT_RESET_DEFAULT_EXP'          => 'Vratite korisnička podešavanja na podrazumevana.',

	//Enable for extensions
	'RT_NICKVERGESSEN_NEWSPAGE'     => 'Podrška za NewsPage dodatak',
	'RT_VIEW_ON'                    => 'Prikaži nedavne teme na/sa:',

	//Donation
	'RT_DONATE_URL'             => 'http://www.avathar.be/bbdkp/app.php/page/donate',
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => 'Donirajte putem PayPala',
	'RT_DONATE'					=> 'RecentTopics donacija',
	'RT_DONATE_SHORT'			=> 'Donirajte za RecentTopics',
	'RT_DONATE_EXPLAIN'			=> 'RecentTopics, projekat koji radimm iz hobija, je besplatan dodatak na koji provodim svoje vreme i novac, samo iz zabave. Ako uživate koristeći RecentTopics, razmislite o davanju donacije. Zaista bih to cenio. Bez obaveze.',
	)
);
