<?php

class WP_49_Credits extends WP_Credits {

	function groups() {
		$groups = array(
			'project-leaders' => array(
				'name'    => 'Project Leaders',
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => array(
					'matt'        => array( 'Matt Mullenweg',  'Cofounder, Project Lead' ),
					'nacin'       => array( 'Andrew Nacin',    'Lead Developer' ),
					'markjaquith' => array( 'Mark Jaquith',    'Lead Developer', '097a87a525e317519b5ee124820012fb' ),
					'azaozz'      => array( 'Andrew Ozz',      'Lead Developer' ),
					'helen'       => array( 'Helen Hou-Sandí', 'Lead Developer' ),
					'dd32'        => array( 'Dion Hulse',      'Lead Developer' ),
				),
			),
			'core-developers' => array(
				'name'    => 'Noteworthy Contributors',
				'type'    => 'titles',
				'shuffle' => false,
				'data'    => array(
					'melchoyce'      => array( 'Mel Choyce',        'Release Lead' ),
					'westonruter'    => array( 'Weston Ruter',      'Release Lead', 'bb16e7904f2f335b6c9f524cc533d2d2' ),
					'aaroncampbell'  => array( 'Aaron D. Campbell', 'Core Developer' ),
					'jorbin'         => array( 'Aaron Jorbin',      'Core Developer' ),
					'afercia'        => array( 'Andrea Fercia',     'Core Developer' ),
					'boonebgorges'   => array( 'Boone B. Gorges',   'Core Developer' ),
					'ocean90'        => array( 'Dominik Schilling', 'Core Developer' ),
					'DrewAPicture'   => array( 'Drew Jaynes',       'Core Developer' ),
					'iseulde'        => array( 'Ella Iseulde Van Dorpe', 'Core Developer' ),
					'pento'          => array( 'Gary Pendergast',   'Core Developer' ),
					'jeremyfelt'     => array( 'Jeremy Felt',       'Core Developer' ),
					'joemcgill'      => array( 'Joe McGill',        'Core Developer' ),
					'johnbillion'    => array( 'John Blackbourn',   'Core Developer' ),
					'mikeschroder'   => array( 'Mike Schroder',     'Core Developer' ),
					'swissspidy'     => array( 'Pascal Birchler',   'Core Developer' ),
					'rachelbaker'    => array( 'Rachel Baker' ,     'Core Developer' ),
					'wonderboymusic' => array( 'Scott Taylor',      'Core Developer' ),
					'SergeyBiryukov' => array( 'Sergey Biryukov',   'Core Developer' ),
					'davidakennedy'  => 'David A. Kennedy',
					'flixos90'       => 'Felix Arntz',
				),
			),
			'contributing-developers' => array(
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => array(
					'adamsilverstein' => 'Adam Silverstein',
					'ericlewis'       => 'Eric Andrew Lewis',
					'iandunn'         => 'Ian Dunn',
					'jnylen0'         => 'James Nylen',
					'joehoyle'        => 'Joe Hoyle',
					'Joen'            => 'Joen Asmussen',
					'kadamwhite'      => 'K.Adam White',
					'kovshenin'       => 'Konstantin Kovshenin',
					'obenland'        => 'Konstantin Obenland',
					'matveb'          => 'Matias Ventura',
					'michaelarestad'  => 'Michael Arestad',
					'peterwilsoncc'   => 'Peter Wilson',
					'rmccue'          => array( 'Ryan McCue', '08818120f223035a0857c2a0ec417f93' ),
					'karmatosed'      => 'Tammie Lister',
				),
			),
			'recent-rockstars' => array(
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => array(
					'bpayton'          => 'Brandon Payton',
					'presskopp'        => array( 'Christian Herrmann', '669d8950273d9a2d82e39e0ddc679ce2' ),
					'jbpaul17'         => 'Jeffrey Paul',
					'JoshuaWold'       => 'Joshua Wold',
					'zoonini'          => 'Kathryn Presner',
					'wraithkenny'      => array( 'Ken Newman', 'f47c834c0b47b607df5e75394287b316' ),
					'kristastevens'    => array( 'Krista Stevens', '0d42d02679b6de3cafd51c0d5980bf22' ),
					'michelleweber'    => 'Michelle Weber',
					'celloexpressions' => 'Nick Halsey',
					'sayedwp'          => 'Sayed Taqui',
					'timmydcrawford'   => 'Timmy Crawford',
				),
			),
		);

		return $groups;
	}

	function props() {
		return array(
			'aaroncampbell',
			'aaronrutley',
			'adamsilverstein',
			'adamwills',
			'adhun',
			'aduth',
			'aegis123',
			'afercia',
			'afragen',
			'afzalmultani',
			'ahortin',
			'ajayghaghretiya1',
			'ajoah',
			'akbarhusen',
			'alexvorn2',
			'alibasheer',
			'alpipego',
			'alxndr',
			'andizer',
			'andreagobetti',
			'andrewtaylor-1',
			'anhskohbo',
			'ankit-k-gupta',
			'antonrinas',
			'appchecker',
			'arena',
			'arena94',
			'arnaudban',
			'aryamaaru',
			'atachibana',
			'atanasangelovdev',
			'atimmer',
			'audrasjb',
			'avinapatel',
			'ayeshrajans',
			'azaozz',
			'barryceelen',
			'bcole808',
			'bduclos',
			'behzod',
			'benoitchantre',
			'bhargavbhandari90',
			'bhaveshkhadodara',
			'biranit',
			'birgire',
			'biskobe',
			'bjornw',
			'blackbam',
			'blobfolio',
			'bnap00',
			'bobbingwide',
			'boonebgorges',
			'bor0',
			'borgesbruno',
			'bpayton',
			'bplv',
			'bradparbs',
			'bradyvercher',
			'brentjettgmailcom',
			'brianlayman',
			'bseddon',
			'bsop',
			'buley',
			'caercam',
			'captainn',
			'carldanley',
			'carolinegeven',
			'celloexpressions',
			'chanthaboune',
			'chetanchauhan',
			'choongsavvii',
			'chouby',
			'chrishardie',
			'christian1012',
			'christophherr',
			'chrisvendiadvertisingcom',
			'chsxf',
			'circlecube',
			'cliffseal',
			'clorith',
			'code-monkey',
			'coffee2code',
			'collizo4sky',
			'corvidism',
			'crunnells',
			'csloisel',
			'daedalon',
			'danielbachhuber',
			'danieltj',
			'dany2217',
			'davefx',
			'davepullig',
			'davidakennedy',
			'davidanderson',
			'davidbinda',
			'davilera',
			'daymobrew',
			'dd32',
			'delawski',
			'dency',
			'designsimply',
			'desrosj',
			'diedeexterkate',
			'dimadin',
			'dingo_bastard',
			'dipeshkakadiya',
			'div33',
			'dixitadusara',
			'dlh',
			'dominikschwind-1',
			'donutz',
			'drewapicture',
			'dsawardekar',
			'dshanske',
			'dualcube_subrata',
			'eatonz',
			'eclev91',
			'eddhurst',
			'egregor',
			'elvishp2006',
			'empireoflight',
			'enricosorcinelli',
			'ericlewis',
			'euthelup',
			'eventualo',
			'fab1en',
			'felipeelia',
			'fergbrain',
			'flixos90',
			'folletto',
			'gcorne',
			'georgestephanis',
			'ghosttoast',
			'girishpanchal',
			'gitlost',
			'gkloveweb',
			'gmariani405',
			'grahamarmfield',
			'grapplerulrich',
			'gregross',
			'greuben',
			'grosbouff',
			'gungeekatx',
			'guzzilar',
			'hardeepasrani',
			'hazemnoor',
			'hazimayesh',
			'helen',
			'henrywright',
			'henrywright-1',
			'herregroen',
			'hlashbrooke',
			'hnle',
			'howdy_mcgee',
			'hugobaeta',
			'iandunn',
			'ibachal',
			'imath',
			'ippei-sumida',
			'ipstenu',
			'ireneyoast',
			'iseulde',
			'ivankristianto',
			'ixkaito',
			'ixmati',
			'jainnidhi',
			'jankimoradiya',
			'jbpaul17',
			'jcc9873',
			'jdgrimes',
			'jdtrower',
			'jeremyfelt',
			'jhoffmann',
			'jipmoors',
			'jjcomack',
			'jkhongusc',
			'jlambe',
			'jmdodd',
			'jnylen0',
			'joedolson',
			'joehoyle',
			'joemcgill',
			'joen',
			'johnbillion',
			'johneckman',
			'johnjamesjacoby',
			'johnpgreen',
			'johnregan3',
			'johnroper100',
			'jonathanbardo',
			'jontyravi',
			'joostdevalk',
			'jorbin',
			'joshuawold',
			'joyously',
			'jpry',
			'jrf',
			'jsepia',
			'jsonfry',
			'jtsternberg',
			'juhise',
			'justnorris',
			'kadamwhite',
			'karmatosed',
			'kawauso',
			'keesiemeijer',
			'kekkakokkers',
			'kelderic',
			'ketuchetan',
			'kiranpotphode',
			'kmgalanakis',
			'koopersmith',
			'kopepasah',
			'kpdesign',
			'kraftbj',
			'kristastevens',
			'kucrut',
			'la-geek',
			'lalitpendhare',
			'lancewillett',
			'lemacarl',
			'lessbloat',
			'llemurya',
			'lukecavanagh',
			'm1tk00',
			'maedahbatool',
			'mahvash-fatima',
			'mako09',
			'manchumahara',
			'manolis09',
			'manuelaugustin',
			'mariovalney',
			'mariusvetrici',
			'markcallen',
			'markjaquith',
			'markoheijnen',
			'matheusgimenez',
			'matthiasthiel',
			'mattyrob',
			'maximeculea',
			'mbootsman',
			'mdifelice',
			'megane9988',
			'melchoyce',
			'menakas',
			'metodiew',
			'mgibbs189',
			'michelleweber',
			'mihai2u',
			'mikehansenme',
			'mikeschinkel',
			'mikeschroder',
			'milana_cap',
			'milindmore22',
			'mirucon',
			'mista-flo',
			'mitraval192',
			'miyauchi',
			'mizejewski',
			'mkomar',
			'monikarao',
			'monopine',
			'mordauk',
			'morganestes',
			'mp518',
			'mrahmadawais',
			'mrasharirfan',
			'mrwweb',
			'msebel',
			'mt8biz',
			'mte90',
			'munyagu',
			'musus',
			'mythemeshop',
			'nacin',
			'nathanatmoz',
			'ndiego',
			'ndoublehwp',
			'nenad',
			'netweb',
			'nicbertino',
			'nicollle',
			'nikeo',
			'nikschavan',
			'nileshdudakiya94',
			'nishitlangaliya',
			'nomnom99',
			'norcross',
			'obenland',
			'obradovic',
			'obrienlabs',
			'ocean90',
			'octalmage',
			'ohryan',
			'otto42',
			'ov3rfly',
			'paaljoachim',
			'palmiak',
			'parthsanghvi',
			'pauldechov',
			'paulwilde',
			'pbearne',
			'pbiron',
			'pcarvalho',
			'pedromendonca',
			'pento',
			'pessoft',
			'petertoi',
			'peterwilsoncc',
			'philipjohn',
			'pixolin',
			'plastikschnitzer',
			'poena',
			'powerzilly',
			'pratikgandhi',
			'presskopp',
			'presslabs',
			'pross',
			'psiico',
			'punit5658',
			'purnendu',
			'r-a-y',
			'rabmalin',
			'rafa8626',
			'rahmohn',
			'ramiy',
			'ramon-fincken',
			'rclations',
			'rcutmore',
			'redrambles',
			'rfair404',
			'rianrietveld',
			'riddhiehta02',
			'rinkuyadav999',
			'rmarks',
			'rmccue',
			'rodrigosprimo',
			'ronakganatra',
			'rugved',
			'rushabh4486',
			'ryan',
			'ryanduff',
			'ryanplas',
			'ryanrolds',
			'ryelle',
			'ryotsun',
			'sa3idho',
			'sagarladani',
			'sagarprajapati',
			'samikeijonen',
			'samuelsidler',
			'sathyapulse',
			'sayedwp',
			'sboisvert',
			'sc0ttkclark',
			'schlessera',
			'scottdeluzio',
			'scottlee',
			'scribu',
			'sebastianpisula',
			'sebsz',
			'sergeybiryukov',
			'sgr33n',
			'shamim51',
			'shelob9',
			'shital-patel',
			'shooper',
			'shramee',
			'sixhours',
			'skostadinov',
			'slaffik',
			'soean',
			'someecards',
			'soniakash',
			'soulseekah',
			'spacedmonkey',
			'spencerfinnell',
			'spocke',
			'stephdau',
			'stephenharris',
			'stevegrunwell',
			'stevenlinx',
			'stevepuddick',
			'straussd',
			'stubgo',
			'studionashvegas',
			'stunnedbeast',
			'subrataemfluence',
			'sudar',
			'svrooij',
			'swissspidy',
			'takahashi_fumiki',
			'tejas5989',
			'terwdan',
			'tfirdaus',
			'tfrommen',
			'tharsheblows',
			'thekt12',
			'thingsym',
			'thulshof',
			'timmydcrawford',
			'timothyblynjacobs',
			'tinkerbelly',
			'tmatsuur',
			'tobi823',
			'tobifjellner',
			'toddnestor',
			'toru',
			'toscho',
			'transl8or',
			'travel_girl',
			'truongwp',
			'tuanmh',
			'turtlepod',
			'tv-productions',
			'uicestone',
			'umangvaghela123',
			'umeshnevase',
			'upadalavipul',
			'utkarshpatel',
			'valendesigns',
			'vhauri',
			'viralsampat',
			'voldemortensen',
			'welcher',
			'westi',
			'westonruter',
			'wido',
			'williampatton',
			'withinboredom',
			'wojtekszkutnik',
			'wonderboymusic',
			'wraithkenny',
			'xavortm',
			'xkon',
			'yahil',
			'yonivh',
			'youknowriad',
			'yrpwayne',
			'zachwtx',
			'zanematthew',
			'zodiac1978',
			'zoonini',
		);
	}

	function external_libraries() {
		return array(
			array( 'Backbone.js', 'http://backbonejs.org/' ),
			array( 'Class POP3', 'https://squirrelmail.org/' ),
			array( 'CodeMirror', 'https://codemirror.net/' ),
			array( 'Color Animations', 'https://plugins.jquery.com/color/' ),
			array( 'getID3()', 'http://getid3.sourceforge.net/' ),
			array( 'Horde Text Diff', 'https://pear.horde.org/' ),
			array( 'hoverIntent', 'http://cherne.net/brian/resources/jquery.hoverIntent.html' ),
			array( 'imgAreaSelect', 'http://odyniec.net/projects/imgareaselect/' ),
			array( 'Iris', 'https://github.com/Automattic/Iris' ),
			array( 'jQuery', 'https://jquery.com/' ),
			array( 'jQuery UI', 'https://jqueryui.com/' ),
			array( 'jQuery Hotkeys', 'https://github.com/tzuryby/jquery.hotkeys' ),
			array( 'jQuery serializeObject', 'http://benalman.com/projects/jquery-misc-plugins/' ),
			array( 'jQuery.query', 'https://plugins.jquery.com/query-object/' ),
			array( 'jQuery.suggest', 'https://github.com/pvulgaris/jquery.suggest' ),
			array( 'jQuery UI Touch Punch', 'http://touchpunch.furf.com/' ),
			array( 'json2', 'https://github.com/douglascrockford/JSON-js' ),
			array( 'Masonry', 'http://masonry.desandro.com/' ),
			array( 'MediaElement.js', 'http://mediaelementjs.com/' ),
			array( 'PclZip', 'http://www.phpconcept.net/pclzip/' ),
			array( 'PemFTP', 'https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html' ),
			array( 'phpass', 'http://www.openwall.com/phpass/' ),
			array( 'PHPMailer', 'https://github.com/PHPMailer/PHPMailer' ),
			array( 'Plupload', 'http://www.plupload.com/' ),
			array( 'random_compat', 'https://github.com/paragonie/random_compat' ),
			array( 'Requests', 'http://requests.ryanmccue.info/' ),
			array( 'SimplePie', 'http://simplepie.org/' ),
			array( 'The Incutio XML-RPC Library', 'http://scripts.incutio.com/xmlrpc/' ),
			array( 'Thickbox', 'http://codylindley.com/thickbox/' ),
			array( 'TinyMCE', 'https://www.tinymce.com/' ),
			array( 'Twemoji', 'https://github.com/twitter/twemoji' ),
			array( 'Underscore.js', 'http://underscorejs.org/' ),
			array( 'zxcvbn', 'https://github.com/dropbox/zxcvbn' ),
		);
	}
}

