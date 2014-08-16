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
				'title' => 'Der kleine Blonde mit dem weißen Schaf',
			'subtitle' => 'undefined (Kurzfilm)',
				'details' => 'ARTE+7: Anhand der Zeichnungen von Gwendal Le Bec erzählt der französische Schauspieler Pierre Richard von seiner lustigen Kindheit, welche die Persönlichkeit des Komikers nachhaltig prägte.',
				'airtime' => '2014-10-08 05:01:36',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/044409-000-A_HQ_1_VOF-STA_01413750_MP4-800_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/044409-000-A_EQ_1_VOF-STA_01413752_MP4-1500_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/044409-000-A_SQ_1_VOF-STA_01413754_MP4-2200_AMM-HBBTV.mp4","_filesize":"0"}]',
				'duration' => '00:08:00',
				'image' => '[{"_resolution":"940x530","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/945721\\/W940H530\\/044409-000_kskleineblonde_01-1405655117882.jpg"},{"_resolution":"940x530","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/945721\\/W940H530\\/044409-000_kskleineblonde_01-1405655117882.jpg"}]',
				'station' => 'ARTE',
				'created_at' => '2014-08-12 07:06:18',
				'updated_at' => '2014-08-12 07:06:18',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			1 => 
			array (
				'id' => 11,
				'title' => 'Die Truman Show',
			'subtitle' => ' (spielfilm)',
				'details' => 'TRAILER: Das Leben des Versicherungsagenten Truman Burbank wird ohne dessen Wissen seit 30 Jahren weltweit live übertragen, in einer wahnsinnig erfolgreichen Fernseh-„Seifenoper“. Bis Truman Zweifel überkommen. Vor dem Hintergrund einer gigantischen "lebensechten" Fernsehkulisse wird der Zuschauer selbst zum Voyeur bei Trumans allmählicher Entdeckung einer alternativen Realität. Brillant inszeniert und gespielt, nimmt der Film Medienmanipulation, Konformismus und Kommerzialisierung aufs Korn, scheut aber auch vor existenziellen Fragestellungen nicht zurück. Furore machende, meisterhafte Satire aus den 90er Jahren.',
				'airtime' => '2014-08-05 13:49:18',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/artestras.vo.llnwxd.net\\/o35\\/nogeo\\/HBBTV\\/PWA10990_SQ_1_VA_01395698_MP4-2200_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/artestras.vo.llnwxd.net\\/o35\\/nogeo\\/HBBTV\\/PWA10990_EQ_1_VA_01395697_MP4-1500_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/artestras.vo.llnwxd.net\\/o35\\/nogeo\\/HBBTV\\/PWA10990_HQ_1_VA_01395694_MP4-800_AMM-HBBTV.mp4","_filesize":"0"}]',
				'duration' => '00:01:00',
				'image' => '[{"_resolution":"940x530","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/1225841\\/W940H530\\/052722-000_trumanshow_01-1405223121406.jpg"},{"_resolution":"940x530","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/1225841\\/W940H530\\/052722-000_trumanshow_01-1405223121406.jpg"}]',
				'station' => 'ARTE',
				'created_at' => '2014-08-14 09:48:02',
				'updated_at' => '2014-08-14 09:48:02',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
			2 => 
			array (
				'id' => 12,
				'title' => 'Nur die Besten kommen durch',
				'subtitle' => '0',
				'details' => 'Das Bundesland Hessen gilt als eines der Besten, wenn es um die Ausbildung von zukünftigen Polizisten geht. 6.000 Bewerber gibt es hier jährlich - 90 Prozent fallen direkt durch.',
				'airtime' => '2014-08-15 10:15:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_436k_p9v11.mp4","_filesize":"156931726"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_436k_p9v11.mp4","_filesize":"156931726"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_189k_p7v11.mp4","_filesize":"72386893"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_1456k_p13v11.mp4","_filesize":"504600904"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_1456k_p13v11.mp4","_filesize":"504600904"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_776k_p17v11.webm","_filesize":"170890616"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_282k_p16v11.webm","_filesize":"65013408"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_1496k_p18v11.webm","_filesize":"324483626"}]',
				'duration' => '00:43:00',
				'image' => '[{"_resolution":"946x532","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg946x532blob\\/10138983"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg672x378blob\\/10138980"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg644x363blob\\/10138979"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg485x273blob\\/10138969"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg476x268blob\\/10138976"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg476x176blob\\/10138974"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg404x227blob\\/10138982"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg298x168blob\\/10138977"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg276x155blob\\/10138970"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg236x133blob\\/10138978"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg173x120blob\\/10138968"}]',
				'station' => 'ZDFinfo',
				'created_at' => '2014-08-14 11:09:08',
				'updated_at' => '2014-08-14 11:09:08',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			3 => 
			array (
				'id' => 17,
				'title' => 'Der Weiße Hai',
			'subtitle' => 'Täter oder Opfer? (Dokumentation)',
				'details' => 'Der Weiße Hai gehört zu den meist gefürchteten Lebewesen unseres Planeten. Bis zu zwei Tonnen schwer jagt er mit seinem torpedoförmigen Körper an den Küsten nach Robben, Seelöwen und anderem Meeresgetier. Sind die Weißen Haie wirklich die gnadenlosen Killer, für die man sie hält? Unterwasserfilmer Mike Hoover entschlüsselt den Mythos des Raubfisches.',
				'airtime' => '2014-08-08 21:45:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/050530-000-A_SQ_1_VA_01413643_MP4-2200_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/050530-000-A_HQ_1_VA_01413639_MP4-800_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/050530-000-A_EQ_1_VA_01413641_MP4-1500_AMM-HBBTV.mp4","_filesize":"0"}]',
				'duration' => '00:52:00',
				'image' => '[{"_resolution":"940x530","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/1225854\\/W940H530\\/050530-000_weisserhai_03-1405655117882.jpg"}]',
				'station' => 'ARTE',
				'created_at' => '2014-08-15 12:29:48',
				'updated_at' => '2014-08-15 12:29:48',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			4 => 
			array (
				'id' => 43,
				'title' => 'Safari im Kiez',
				'subtitle' => '0',
				'details' => 'Sie sind unter uns: freilebende Tiere in der Großstadt. Auch für wilde Vierbeiner ist Berlin die Hauptstadt: Wildschweine durchwühlen Vorgärten und selbst vor Straßenbahnschienen machen sie nicht Halt',
				'airtime' => '2014-08-17 06:15:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/10\\/131027_safari_rpo_436k_p9v11.mp4","_filesize":"102748180"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/13\\/10\\/131027_safari_rpo_436k_p9v11.mp4","_filesize":"102748180"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/10\\/131027_safari_rpo_189k_p7v11.mp4","_filesize":"47422369"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/10\\/131027_safari_rpo_1456k_p13v11.mp4","_filesize":"330511335"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/13\\/10\\/131027_safari_rpo_1456k_p13v11.mp4","_filesize":"330511335"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/10\\/131027_safari_rpo_776k_p17v11.webm","_filesize":"116728254"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/10\\/131027_safari_rpo_282k_p16v11.webm","_filesize":"43650213"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/10\\/131027_safari_rpo_1496k_p18v11.webm","_filesize":"219249657"}]',
				'duration' => '00:28:00',
				'image' => '[{"_resolution":"946x532","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2011170\\/timg946x532blob\\/10136524"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2011170\\/timg672x378blob\\/10136521"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2011170\\/timg644x363blob\\/10136520"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2011170\\/timg485x273blob\\/10136510"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2011170\\/timg476x268blob\\/10136517"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2011170\\/timg476x176blob\\/10136515"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2011170\\/timg404x227blob\\/10136523"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2011170\\/timg298x168blob\\/10136518"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2011170\\/timg276x155blob\\/10136511"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2011170\\/timg236x133blob\\/10136519"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2011170\\/timg173x120blob\\/10136509"}]',
				'station' => 'ZDFinfo',
				'created_at' => '2014-08-15 13:49:01',
				'updated_at' => '2014-08-15 13:49:01',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
			5 => 
			array (
				'id' => 45,
				'title' => 'Jesus liebt mich',
				'subtitle' => '0',
				'details' => 'Die Kinokomödie nach Motiven des gleichnamigen Romans: Gerade als für Marie alles aussichtslos zu sein scheint, trifft sie einen echten Traummann - aber irgendetwas stimmt mit ihm nicht.',
				'airtime' => '2014-08-09 20:15:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_436k_p9v11.mp4","_filesize":"327420850"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/rodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_436k_p9v11.mp4","_filesize":"327420850"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_189k_p7v11.mp4","_filesize":"151174187"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_1456k_p13v11.mp4","_filesize":"1052861405"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/rodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_1456k_p13v11.mp4","_filesize":"1052861405"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_776k_p17v11.webm","_filesize":"344623919"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_282k_p16v11.webm","_filesize":"133953156"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_1496k_p18v11.webm","_filesize":"615706582"}]',
				'duration' => '01:31:00',
				'image' => '[{"_resolution":"946x532","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg946x532blob\\/10104666"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg672x378blob\\/10104663"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg644x363blob\\/10104662"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg485x273blob\\/10104652"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg476x268blob\\/10104659"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg476x176blob\\/10104657"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg404x227blob\\/10104665"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg298x168blob\\/10104660"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg276x155blob\\/10104653"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg236x133blob\\/10104661"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg173x120blob\\/10104651"}]',
				'station' => 'ZDFneo',
				'created_at' => '2014-08-16 09:31:42',
				'updated_at' => '2014-08-16 09:31:42',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			6 => 
			array (
				'id' => 46,
				'title' => 'Jesus liebt mich',
				'subtitle' => '0',
				'details' => 'Die Kinokomödie nach Motiven des gleichnamigen Romans: Gerade als für Marie alles aussichtslos zu sein scheint, trifft sie einen echten Traummann - aber irgendetwas stimmt mit ihm nicht.',
				'airtime' => '2014-08-09 20:15:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_436k_p9v11.mp4","_filesize":"327420850"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/rodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_436k_p9v11.mp4","_filesize":"327420850"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_189k_p7v11.mp4","_filesize":"151174187"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_1456k_p13v11.mp4","_filesize":"1052861405"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/rodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_1456k_p13v11.mp4","_filesize":"1052861405"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_776k_p17v11.webm","_filesize":"344623919"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_282k_p16v11.webm","_filesize":"133953156"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_1496k_p18v11.webm","_filesize":"615706582"}]',
				'duration' => '01:31:00',
				'image' => '[{"_resolution":"946x532","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg946x532blob\\/10104666"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg672x378blob\\/10104663"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg644x363blob\\/10104662"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg485x273blob\\/10104652"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg476x268blob\\/10104659"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg476x176blob\\/10104657"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg404x227blob\\/10104665"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg298x168blob\\/10104660"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg276x155blob\\/10104653"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg236x133blob\\/10104661"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg173x120blob\\/10104651"}]',
				'station' => 'ZDFneo',
				'created_at' => '2014-08-16 09:34:58',
				'updated_at' => '2014-08-16 09:34:58',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
			7 => 
			array (
				'id' => 63,
			'title' => 'The 90s in Music (4/6)',
			'subtitle' => 'Live, Clips & Unplugged (Dokumentationsreihe)',
				'details' => 'In den 90er Jahren führte kein Weg an "MTV Unplugged", der Referenz für akustische Live-Konzerte, vorbei; die Sendung ging in die Annalen der Fernsehgeschichte ein. "The 90s in Music" lässt die schönsten Live-Auftritte noch einmal Revue passieren.',
				'airtime' => '2014-08-10 23:35:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/051060-005-B_HQ_1_VA-STA_01417078_MP4-800_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/051060-005-B_EQ_1_VA-STA_01417080_MP4-1500_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/051060-005-B_SQ_1_VA-STA_01417082_MP4-2200_AMM-HBBTV.mp4","_filesize":"0"}]',
				'duration' => '00:25:00',
				'image' => '[{"_resolution":"940x530","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/1235024\\/W940H530\\/051060-005_90smusic4_01m-1405827911880.jpg"}]',
				'station' => 'ARTE',
				'created_at' => '2014-08-16 10:01:52',
				'updated_at' => '2014-08-16 10:01:52',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
			8 => 
			array (
				'id' => 67,
				'title' => 'Ratatat',
			'subtitle' => 'Affentheater (Kindersendung)',
				'details' => 'ARTE+7: „Ratatat“ ist eine actionreiche Zeichentrickserie aus Indien - voller rasanter Verfolgungsjagden, dynamitgeladener Explosionen und verrückter Situationen. Im Zentrum des Geschehens steht der liebenswürdige Hund Don, der einen erbitterten Krieg gegen die drei Mäuse Charly, Marly und Larry führt. Oder ist es vielmehr umgekehrt? Denn eigentlich wünscht sich Don nichts sehnlicher als ein ruhiges, friedliches Leben. Doch das Höllentrio sucht immer wieder Streit mit ihm. Don hat nur einen einzigen Verbündeten: seinen Bruder Colonel. Der ehemalige Armeehund ist zwar etwas gewiefter als Don, kann die teuflischen Pläne der Mäuse aber trotzdem nicht vereiteln … Ein Spaß für die ganze Familie!',
				'airtime' => '2014-08-14 05:10:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/051420-051-A_EQ_1_VO-STA_01421030_MP4-1500_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/051420-051-A_HQ_1_VO-STA_01421028_MP4-800_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/051420-051-A_SQ_1_VO-STA_01421032_MP4-2200_AMM-HBBTV.mp4","_filesize":"0"}]',
				'duration' => '00:09:00',
				'image' => '[{"_resolution":"940x530","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/TVGE2536\\/W940H530\\/TVGE2536-1407919840359.jpg"},{"_resolution":"940x530","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/TVGE2536\\/W940H530\\/TVGE2536-1407919840359.jpg"}]',
				'station' => 'ARTE',
				'created_at' => '2014-08-16 10:10:44',
				'updated_at' => '2014-08-16 10:10:44',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
			9 => 
			array (
				'id' => 68,
				'title' => '360° - Geo Reportage ',
			'subtitle' => 'Die scharfen Klingen der Auvergne (Reportage)',
				'details' => 'Das legendäre und unverkennbare Laguiole-Messer hat in Zentralfrankreich seine Wurzeln - und seine Meister. "360° - GEO Reportage" schaut in die Werkstätten der berühmten Messermeister in der Auvergne, einer der atemberaubendsten Regionen Frankreichs.',
				'airtime' => '2014-08-09 19:30:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/045794-000-B_HQ_1_VOA_01415099_MP4-800_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/045794-000-B_EQ_1_VOA_01415101_MP4-1500_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/045794-000-B_SQ_1_VOA_01415103_MP4-2200_AMM-HBBTV.mp4","_filesize":"0"}]',
				'duration' => '00:43:00',
				'image' => '[{"_resolution":"940x530","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/815019\\/W940H530\\/120128_geotaschenmesser_01-1405741512581.jpg"}]',
				'station' => 'ARTE',
				'created_at' => '2014-08-16 10:30:49',
				'updated_at' => '2014-08-16 10:30:49',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
		));
	}

}
