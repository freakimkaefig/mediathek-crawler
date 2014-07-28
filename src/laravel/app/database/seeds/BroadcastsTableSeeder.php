<?php

class BroadcastsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('broadcasts')->truncate();
        
		\DB::table('broadcasts')->insert(array (
			0 => 
			array (
				'id' => 1,
				'title' => 'Test Broadcast',
				'subtitle' => '',
				'details' => '',
				'airtime' => '2014-07-23 04:37:00',
				'url' => 'http://mediathek-crawler',
				'duration' => '12:00:00',
				'image' => 'http://mediathek-crawler',
				'station' => 'ARD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'playlist_id' => NULL,
				'user_id' => NULL,
			),
			1 => 
			array (
				'id' => 5,
				'title' => 'tagesschau, 12:00 Uhr',
				'subtitle' => '',
				'details' => '',
				'airtime' => '2024-07-20 14:00:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0724\\/TV-20140724-1226-5002.webs.h264.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"1","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0724\\/TV-20140724-1226-5002.webm.h264.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0724\\/TV-20140724-1226-5002.webml.h264.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0724\\/TV-20140724-1226-5002.webs.h264.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"1","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0724\\/TV-20140724-1226-5002.webm.h264.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0724\\/TV-20140724-1226-5002.webml.h264.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0724\\/TV-20140724-1226-5002.webl.h264.mp4","_filesize":""}]',
				'duration' => '15:02:00',
				'image' => '[{"_resolution":"960x540","_url":"http:\\/\\/www.ardmediathek.de\\/image\\/00\\/22\\/55\\/11\\/78\\/2028247919\\/16x9\\/960"}]',
				'station' => 'ARD',
				'created_at' => '2014-07-25 09:14:54',
				'updated_at' => '2014-07-25 09:14:54',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			2 => 
			array (
				'id' => 6,
				'title' => 'Rennen und Religion',
				'subtitle' => '',
				'details' => '',
				'airtime' => '0000-00-00 00:00:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/02\\/140216_pfarrer_son_436k_p9v11.mp4","_filesize":"16510445"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/14\\/02\\/140216_pfarrer_son_436k_p9v11.mp4","_filesize":"16510445"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/02\\/140216_pfarrer_son_189k_p7v11.mp4","_filesize":"7610876"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/02\\/140216_pfarrer_son_1456k_p13v11.mp4","_filesize":"53087073"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/14\\/02\\/140216_pfarrer_son_1456k_p13v11.mp4","_filesize":"53087073"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/02\\/140216_pfarrer_son_776k_p17v11.webm","_filesize":"18344144"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/02\\/140216_pfarrer_son_282k_p16v11.webm","_filesize":"6886241"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/02\\/140216_pfarrer_son_1496k_p18v11.webm","_filesize":"34859725"}]',
				'duration' => '00:04:35',
				'image' => '[{"_resolution":"94x65","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg94x65blob\\/9241534"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg173x120blob\\/9241522"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg485x273blob\\/9241521"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg276x155blob\\/9241531"},{"_resolution":"116x54","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg116x54blob\\/9241528"},{"_resolution":"116x88","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg116x88blob\\/9241533"},{"_resolution":"72x54","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg72x54blob\\/9241536"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg476x176blob\\/9241525"},{"_resolution":"75x52","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg75x52blob\\/9241532"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg476x268blob\\/9241523"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg298x168blob\\/9241524"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg236x133blob\\/9241535"},{"_resolution":"144x81","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg144x81blob\\/9241530"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg644x363blob\\/9241527"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg672x378blob\\/9241526"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2088358\\/timg404x227blob\\/9241529"}]',
				'station' => 'ARD',
				'created_at' => '2014-07-25 09:30:21',
				'updated_at' => '2014-07-25 09:30:21',
				'playlist_id' => 3,
				'user_id' => NULL,
			),
			3 => 
			array (
				'id' => 7,
				'title' => 'Mehmet Scholl - "Das ist nicht mehr mein Sport"',
				'subtitle' => '',
				'details' => '',
				'airtime' => '2005-07-20 14:00:00',
				'url' => '[{"_basetype":"","_type":"video\\/f4m","_quality":"auto","_url":"http:\\/\\/adaptiv.wdr.de\\/z\\/medstdp\\/de\\/fsk0\\/46\\/468100\\/,468100_4832880,468100_4832881,468100_4832883,.mp4.csmil\\/manifest.f4m","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/ondemand-de.wdr.de\\/medstdp\\/fsk0\\/46\\/468100\\/468100_4832882.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"1","_url":"mp4:CMS2010\\/mdb\\/ondemand\\/de\\/fsk0\\/46\\/468100\\/468100_4832881.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"mp4:CMS2010\\/mdb\\/ondemand\\/de\\/fsk0\\/46\\/468100\\/468100_4832880.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/ondemand-de.wdr.de\\/medstdp\\/fsk0\\/46\\/468100\\/468100_4832882.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"1","_url":"http:\\/\\/ondemand-de.wdr.de\\/medstdp\\/fsk0\\/46\\/468100\\/468100_4832881.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/ondemand-de.wdr.de\\/medstdp\\/fsk0\\/46\\/468100\\/468100_4832883.mp4","_filesize":""}]',
				'duration' => '00:38:00',
				'image' => '[{"_resolution":"960x540","_url":"http:\\/\\/www.ardmediathek.de\\/image\\/00\\/22\\/22\\/67\\/24\\/861531312\\/16x9\\/960"}]',
				'station' => 'ARD',
				'created_at' => '2014-07-25 09:34:14',
				'updated_at' => '2014-07-25 09:34:14',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			4 => 
			array (
				'id' => 19,
				'title' => 'Leute heute vom 25.7.2014',
				'subtitle' => '',
				'details' => 'Mit dabei: Neue alte Bilder der Queen und ihrer Familie, Selfies und Fotobomben von und mit Promis, Petter Maffay beim Drehen eines neuen Musikvideos sowie Sandra Bullock, die 50 Jahre alt wird.',
				'airtime' => '0000-00-00 00:00:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140725_36850_lhe_436k_p9v11.mp4","_filesize":"37112080"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140725_36850_lhe_436k_p9v11.mp4","_filesize":"37112080"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140725_36850_lhe_189k_p7v11.mp4","_filesize":"17143722"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140725_36850_lhe_1456k_p13v11.mp4","_filesize":"119586845"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140725_36850_lhe_1456k_p13v11.mp4","_filesize":"119586845"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140725_36850_lhe_776k_p17v11.webm","_filesize":"42679683"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140725_36850_lhe_282k_p16v11.webm","_filesize":"16292576"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140725_36850_lhe_1496k_p18v11.webm","_filesize":"76159087"}]',
				'duration' => '00:00:10',
				'image' => '[{"_resolution":"94x65","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg94x65blob\\/10059870"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg173x120blob\\/10059871"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg485x273blob\\/10059872"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg276x155blob\\/10059873"},{"_resolution":"116x54","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg116x54blob\\/10059874"},{"_resolution":"116x88","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg116x88blob\\/10059875"},{"_resolution":"72x54","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg72x54blob\\/10059876"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg476x176blob\\/10059877"},{"_resolution":"75x52","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg75x52blob\\/10059878"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg476x268blob\\/10059879"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg298x168blob\\/10059880"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg236x133blob\\/10059881"},{"_resolution":"144x81","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg144x81blob\\/10059884"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg644x363blob\\/10059882"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg672x378blob\\/10059883"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2205438\\/timg404x227blob\\/10059885"}]',
				'station' => 'ZDF',
				'created_at' => '2014-07-28 10:56:30',
				'updated_at' => '2014-07-28 10:56:30',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			5 => 
			array (
				'id' => 20,
				'title' => 'ttt - titel thesen temperamente',
				'subtitle' => 'Schluss mit Moor: Butter, Kunst, Schnaps, Käse',
				'details' => '
Was ist Kunst? Und wie schmeckt sie? Max Moor über die Metamorphose der Fett-Ecke von Beuys.',
				'airtime' => '0000-00-00 00:00:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/mvideos.daserste.de\\/videoportal\\/Film\\/c_440000\\/449560\\/format545997.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4?sen=ttt+-+titel+thesen+temperamente&amp;clip=Schluss+mit+Moor+Butter%2C+Kunst%2C+Schnaps%2C+K%C3%A4se&amp;for=Web-M","_quality":"1","_url":"mp4:videoportal\\/mediathek\\/ttt+-+titel+thesen+temperamente\\/c_440000\\/449560\\/format545996.mp4?sen=ttt+-+titel+thesen+temperamente&amp;clip=Schluss+mit+Moor+Butter%2C+Kunst%2C+Schnaps%2C+K%C3%A4se&amp;for=Web-M","_filesize":""},{"_basetype":"","_type":"video\\/mp4?sen=ttt+-+titel+thesen+temperamente&amp;clip=Schluss+mit+Moor+Butter%2C+Kunst%2C+Schnaps%2C+K%C3%A4se&amp;for=Web-L","_quality":"2","_url":"mp4:videoportal\\/mediathek\\/ttt+-+titel+thesen+temperamente\\/c_440000\\/449560\\/format546004.mp4?sen=ttt+-+titel+thesen+temperamente&amp;clip=Schluss+mit+Moor+Butter%2C+Kunst%2C+Schnaps%2C+K%C3%A4se&amp;for=Web-L","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/mvideos.daserste.de\\/videoportal\\/Film\\/c_440000\\/449560\\/format545997.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"1","_url":"http:\\/\\/mvideos.daserste.de\\/videoportal\\/Film\\/c_440000\\/449560\\/format545996.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/mvideos.daserste.de\\/videoportal\\/Film\\/c_440000\\/449560\\/format546024.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/mvideos.daserste.de\\/videoportal\\/Film\\/c_440000\\/449560\\/format546004.mp4","_filesize":""}]',
				'duration' => '02:00:00',
				'image' => '[{"_resolution":"128x72","_url":"http:\\/\\/mediathek.daserste.de\\/daserste\\/servlet\\/scaled\\/22\\/62\\/68\\/76\\/22626876-bild-xs16x9"},{"_resolution":"960x540","_url":"http:\\/\\/mediathek.daserste.de\\/image\\/00\\/22\\/62\\/68\\/74\\/866839460\\/16x9\\/960"}]',
				'station' => 'Das Erste',
				'created_at' => '2014-07-28 10:59:01',
				'updated_at' => '2014-07-28 10:59:01',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			6 => 
			array (
				'id' => 21,
				'title' => 'Mittagsmagazin',
				'subtitle' => 'Wissen über Europa',
				'details' => '
Es ist schon eine verflixt komplizierte Sache mit diesem Europa ... Was wissen Sie über Europa?',
				'airtime' => '0000-00-00 00:00:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/mvideos.daserste.de\\/videoportal\\/Film\\/c_430000\\/430940\\/format527050.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4?sen=Mittagsmagazin&amp;clip=Wissen+%C3%BCber+Europa&amp;for=Web-M","_quality":"1","_url":"mp4:videoportal\\/mediathek\\/Mittagsmagazin\\/c_430000\\/430940\\/format527049.mp4?sen=Mittagsmagazin&amp;clip=Wissen+%C3%BCber+Europa&amp;for=Web-M","_filesize":""},{"_basetype":"","_type":"video\\/mp4?sen=Mittagsmagazin&amp;clip=Wissen+%C3%BCber+Europa&amp;for=Web-L","_quality":"2","_url":"mp4:videoportal\\/mediathek\\/Mittagsmagazin\\/c_430000\\/430940\\/format527048.mp4?sen=Mittagsmagazin&amp;clip=Wissen+%C3%BCber+Europa&amp;for=Web-L","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/mvideos.daserste.de\\/videoportal\\/Film\\/c_430000\\/430940\\/format527050.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"1","_url":"http:\\/\\/mvideos.daserste.de\\/videoportal\\/Film\\/c_430000\\/430940\\/format527049.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/mvideos.daserste.de\\/videoportal\\/Film\\/c_430000\\/430940\\/format527076.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/mvideos.daserste.de\\/videoportal\\/Film\\/c_430000\\/430940\\/format527048.mp4","_filesize":""}]',
				'duration' => '02:49:00',
				'image' => '[{"_resolution":"128x72","_url":"http:\\/\\/mediathek.daserste.de\\/daserste\\/servlet\\/scaled\\/21\\/47\\/73\\/20\\/21477320-bild-xs16x9"},{"_resolution":"960x540","_url":"http:\\/\\/mediathek.daserste.de\\/image\\/00\\/21\\/47\\/73\\/18\\/866839460\\/16x9\\/960"}]',
				'station' => 'Das Erste',
				'created_at' => '2014-07-28 11:04:31',
				'updated_at' => '2014-07-28 11:04:31',
				'playlist_id' => 3,
				'user_id' => NULL,
			),
			7 => 
			array (
				'id' => 23,
				'title' => 'Wildes Nairobi',
			'subtitle' => 'Wo Leoparden durch die Gärten schleichen (Dokumentation)',
				'details' => 'ARTE+7: Mit ihren mehr als drei Millionen Einwohnern gehört Nairobi zu den zwölf größten Städten Afrikas. Trotz des Großstadtcharakters reicht die Wildnis bis weit in die Metropole. Affen bevölkern die Parks, Marabus brüten in den Bäumen der Alleen und Raubkatzen spazieren entlang der Autobahn. Die Dokumentation führt durch den Großstadtdschungel der kenianischen Hauptstadt.',
				'airtime' => '0000-00-00 00:00:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/artestras.vo.llnwxd.net\\/o35\\/nogeo\\/HBBTV\\/046751-000-B_SQ_1_VOA_01394791_MP4-2200_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/artestras.vo.llnwxd.net\\/o35\\/nogeo\\/HBBTV\\/046751-000-B_HQ_1_VOA_01394787_MP4-800_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"1","_url":"http:\\/\\/artestras.vo.llnwxd.net\\/o35\\/nogeo\\/HBBTV\\/046751-000-B_EQ_1_VOA_01394789_MP4-1500_AMM-HBBTV.mp4","_filesize":"0"}]',
				'duration' => '07:15:00',
				'image' => '[{"_resolution":"0","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/897703\\/ORIGINAL\\/120828_wildesnairobi_10-1404618311478.jpg"},{"_resolution":"0","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/897703\\/W940H530\\/120828_wildesnairobi_10-1404618311478.jpg"},{"_resolution":"0","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/897703\\/ORIGINAL\\/120828_wildesnairobi_10-1404618311478.jpg"},{"_resolution":"0","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/897703\\/W940H530\\/120828_wildesnairobi_10-1404618311478.jpg"}]',
				'station' => 'ARTE',
				'created_at' => '2014-07-28 11:10:25',
				'updated_at' => '2014-07-28 11:10:25',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
			8 => 
			array (
				'id' => 24,
				'title' => 'Abendschau vom 26.07.2014',
				'subtitle' => '0',
				'details' => 'Sie verwenden eine veraltete Browser-Version. Bitte installieren Sie einen aktuellen Browser, um unser Angebot richtig darstellen zu können.+++ Demos +++ Noch offene Lehrstellen +++ Studiogast Ulrich Wiegand von der HWK +++ Nachrichten +++ Critical Mass +++ Gleich nebenan +++ Paddeln in Neu Venedig +++ Moderation: Sascha Hingst',
				'airtime' => '2026-07-20 14:00:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/http-stream.rbb-online.de\\/rbb\\/abendschau\\/sendung\\/abendschau_20140726_sdg_s_16_9_256x144.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"1","_url":"mp4:rbb\\/abendschau\\/sendung\\/abendschau_20140726_sdg_m_16_9_512x288.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"mp4:rbb\\/abendschau\\/sendung\\/abendschau_20140726_sdg_l_16_9_960x544.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/http-stream.rbb-online.de\\/rbb\\/abendschau\\/sendung\\/abendschau_20140726_sdg_s_16_9_256x144.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"1","_url":"http:\\/\\/http-stream.rbb-online.de\\/rbb\\/abendschau\\/sendung\\/abendschau_20140726_sdg_m_16_9_512x288.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/http-stream.rbb-online.de\\/rbb\\/abendschau\\/sendung\\/abendschau_20140726_sdg_l_16_9_960x544.mp4","_filesize":""}]',
				'duration' => '28:33:00',
				'image' => '[{"_resolution":"960x540","_url":"http:\\/\\/www.ardmediathek.de\\/image\\/00\\/22\\/61\\/01\\/66\\/-1958817668\\/16x9\\/960"}]',
				'station' => 'rbb Fernsehen',
				'created_at' => '2014-07-28 11:21:02',
				'updated_at' => '2014-07-28 11:21:02',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
			9 => 
			array (
				'id' => 25,
				'title' => 'Tagesschau',
				'subtitle' => 'tagesschau, 07:00 Uhr',
				'details' => '
Themen der Sendung: UN-Sicherheitsrat fordert bedingungslose Waffenruhe im Nahen Osten, Untersuchung der MH17-Absturzstelle in der Ostukraine, Debatte um das Betreuungsgeld, Waldbrände in Kalifornien, Sturmschäden in Kentucky',
				'airtime' => '2014-07-28 07:00:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0728\\/TV-20140728-0707-4001.webs.h264.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"1","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0728\\/TV-20140728-0707-4001.webm.h264.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0728\\/TV-20140728-0707-4001.webml.h264.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0728\\/TV-20140728-0707-4001.webs.h264.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"1","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0728\\/TV-20140728-0707-4001.webm.h264.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0728\\/TV-20140728-0707-4001.webml.h264.mp4","_filesize":""},{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/media.tagesschau.de\\/video\\/2014\\/0728\\/TV-20140728-0707-4001.webl.h264.mp4","_filesize":""}]',
				'duration' => '02:47:00',
				'image' => '[{"_resolution":"128x72","_url":"http:\\/\\/mediathek.daserste.de\\/daserste\\/servlet\\/scaled\\/22\\/62\\/56\\/32\\/22625632-bild-xs16x9"},{"_resolution":"960x540","_url":"http:\\/\\/mediathek.daserste.de\\/image\\/00\\/22\\/62\\/56\\/34\\/1067187042\\/16x9\\/960"}]',
				'station' => 'Das Erste',
				'created_at' => '2014-07-28 11:36:05',
				'updated_at' => '2014-07-28 11:36:05',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
			10 => 
			array (
				'id' => 27,
				'title' => 'Heiß & Fettig! Gast: Micaela Schäfer',
				'subtitle' => '0',
				'details' => 'Thilo Mischke begüßt in seinem Sexmagazin den "Nacktstar" Micaela Schäfer, außerdem ist Ariane beim Sex-Coaching, Ogel und Putin testen Kliniksex und es geht um Sex im Freien ab 22 h in der Mediathek',
				'airtime' => '2014-07-31 23:20:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/05\\/140522_neo_trailer_schaefer_huf_436k_p9v11.mp4","_filesize":"1245513"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/14\\/05\\/140522_neo_trailer_schaefer_huf_436k_p9v11.mp4","_filesize":"1245513"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/05\\/140522_neo_trailer_schaefer_huf_189k_p7v11.mp4","_filesize":"580365"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/05\\/140522_neo_trailer_schaefer_huf_1456k_p13v11.mp4","_filesize":"3991831"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/14\\/05\\/140522_neo_trailer_schaefer_huf_1456k_p13v11.mp4","_filesize":"3991831"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/05\\/140522_neo_trailer_schaefer_huf_776k_p17v11.webm","_filesize":"1381794"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/05\\/140522_neo_trailer_schaefer_huf_282k_p16v11.webm","_filesize":"529858"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/05\\/140522_neo_trailer_schaefer_huf_1496k_p18v11.webm","_filesize":"2582774"}]',
				'duration' => '00:00:28',
				'image' => '[{"_resolution":"75x52","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg75x52blob\\/10041400"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg476x268blob\\/10041401"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg298x168blob\\/10041402"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg404x227blob\\/10041407"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg276x155blob\\/10041395"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg644x363blob\\/10041404"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg476x176blob\\/10041399"},{"_resolution":"144x81","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg144x81blob\\/10041406"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg485x273blob\\/10041394"},{"_resolution":"94x65","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg94x65blob\\/10041392"},{"_resolution":"72x54","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg72x54blob\\/10041398"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg173x120blob\\/10041393"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg236x133blob\\/10041403"},{"_resolution":"116x88","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg116x88blob\\/10041397"},{"_resolution":"116x54","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg116x54blob\\/10041396"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg672x378blob\\/10041405"},{"_resolution":"946x532","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2144096\\/timg946x532blob\\/10041408"}]',
				'station' => 'ZDFneo',
				'created_at' => '2014-07-28 11:44:50',
				'updated_at' => '2014-07-28 11:44:50',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
			11 => 
			array (
				'id' => 28,
				'title' => 'Pump up the Jam',
			'subtitle' => 'Heroes of Eurodance (Dokumentation)',
				'details' => 'AUSSCHNITT: Dieses Musikgenre war stets genauso belächelt wie beliebt: „Pump up the Jam – Heroes of Eurodance“ geht der Entstehung des Genres Eurodance nach. Die Dokumentation zeigt die erfolgreichsten Protagonisten und greift in zahlreichen Interviews und Archivaufnahmen das Gefühl der Szene auf. Dabei wird die Geburt der letzten großen musikalischen Revolution, des Techno, und die Aufbruchstimmung Anfang der 90er Jahre in den Clubs bis hin zur Loveparade miterzählt. Von ihren Erfahrungen berichten unter anderem DJ Bobo, Westbam und H.P. Baxxter von Scooter.',
				'airtime' => '1970-01-01 00:00:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/artestras.vo.llnwxd.net\\/o35\\/nogeo\\/HBBTV\\/051604-000-A_EXT_HQ_1_VOA_01365953_MP4-800_AMM-HBBTV_EXTRAIT.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/artestras.vo.llnwxd.net\\/o35\\/nogeo\\/HBBTV\\/051604-000-A_EXT_SQ_1_VOA_01365954_MP4-2200_AMM-HBBTV_EXTRAIT.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"1","_url":"http:\\/\\/artestras.vo.llnwxd.net\\/o35\\/nogeo\\/HBBTV\\/051604-000-A_EXT_EQ_1_VOA_01365955_MP4-1500_AMM-HBBTV_EXTRAIT.mp4","_filesize":"0"}]',
				'duration' => '22:05:00',
				'image' => '[{"_resolution":"0","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/1227369\\/ORIGINAL\\/051604-000_eurodance_13-1404618311478.jpg"},{"_resolution":"0","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/1227369\\/W940H530\\/051604-000_eurodance_13-1404618311478.jpg"},{"_resolution":"0","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/1227369\\/ORIGINAL\\/051604-000_eurodance_13-1404618311478.jpg"},{"_resolution":"0","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/1227369\\/W940H530\\/051604-000_eurodance_13-1404618311478.jpg"}]',
				'station' => 'RBB',
				'created_at' => '2014-07-28 12:42:05',
				'updated_at' => '2014-07-28 12:42:05',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
		));
	}

}
