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
				'id' => 5,
				'title' => 'Jesus liebt mich',
				'subtitle' => '0',
				'details' => 'Die Kinokomödie nach Motiven des gleichnamigen Romans: Gerade als für Marie alles aussichtslos zu sein scheint, trifft sie einen echten Traummann - aber irgendetwas stimmt mit ihm nicht.',
				'airtime' => '2014-08-09 20:15:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_436k_p9v11.mp4","_filesize":"327420850"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/rodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_436k_p9v11.mp4","_filesize":"327420850"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_189k_p7v11.mp4","_filesize":"151174187"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_1456k_p13v11.mp4","_filesize":"1052861405"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/rodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_1456k_p13v11.mp4","_filesize":"1052861405"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_776k_p17v11.webm","_filesize":"344623919"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_282k_p16v11.webm","_filesize":"133953156"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/dach\\/zdf\\/14\\/07\\/140725_jesus_liebt_mich_ps_fad_1496k_p18v11.webm","_filesize":"615706582"}]',
				'duration' => '01:31:00',
				'image' => '[{"_resolution":"946x532","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg946x532blob\\/10104666"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg672x378blob\\/10104663"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg644x363blob\\/10104662"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg485x273blob\\/10104652"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg476x268blob\\/10104659"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg476x176blob\\/10104657"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg404x227blob\\/10104665"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg298x168blob\\/10104660"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg276x155blob\\/10104653"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg236x133blob\\/10104661"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2213564\\/timg173x120blob\\/10104651"}]',
				'station' => 'ZDFneo',
				'created_at' => '2014-08-12 11:41:06',
				'updated_at' => '2014-08-12 11:41:06',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
			2 => 
			array (
				'id' => 10,
				'title' => 'Too Young To Die',
			'subtitle' => 'River Phoenix, der scheue Star (Dokumentationsreihe)',
				'details' => 'Ein früher Tod großer Stars bietet häufig Anlass, einen Mythos entstehen zu lassen. Die Dokureihe beschreibt das Leben früh verstorbener Hollywood-Schauspieler und Musiker hinter dem Bild, das im kollektiven Bewusstsein von ihnen fortbesteht. Diese Folge präsentiert die kurze Karriere des Schauspielers und Musikers River Phoenix, der zu den Jugendidolen der 80er Jahre gehörte.',
				'airtime' => '2014-08-09 22:45:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/048741-002-A_HQ_1_VA-STA_01415342_MP4-800_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/048741-002-A_EQ_1_VA-STA_01415344_MP4-1500_AMM-HBBTV.mp4","_filesize":"0"},{"_basetype":"","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/artestras.vo.llnwd.net\\/v2\\/am\\/HBBTV\\/048741-002-A_SQ_1_VA-STA_01415346_MP4-2200_AMM-HBBTV.mp4","_filesize":"0"}]',
				'duration' => '00:52:00',
				'image' => '[{"_resolution":"940x530","_url":"http:\\/\\/www.arte.tv\\/papi\\/tvguide\\/images\\/1235012\\/W940H530\\/048741-002_tytd-phoenix_01-1405741512581.jpg"}]',
				'station' => 'ARTE',
				'created_at' => '2014-08-12 14:32:53',
				'updated_at' => '2014-08-12 14:32:53',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			3 => 
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
			4 => 
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
			5 => 
			array (
				'id' => 13,
				'title' => 'Nur die Besten kommen durch',
				'subtitle' => '0',
				'details' => 'Das Bundesland Hessen gilt als eines der Besten, wenn es um die Ausbildung von zukünftigen Polizisten geht. 6.000 Bewerber gibt es hier jährlich - 90 Prozent fallen direkt durch.',
				'airtime' => '2014-08-15 10:15:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_436k_p9v11.mp4","_filesize":"156931726"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_436k_p9v11.mp4","_filesize":"156931726"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_189k_p7v11.mp4","_filesize":"72386893"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_1456k_p13v11.mp4","_filesize":"504600904"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_1456k_p13v11.mp4","_filesize":"504600904"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_776k_p17v11.webm","_filesize":"170890616"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_282k_p16v11.webm","_filesize":"65013408"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/07\\/140708_diebesten_inf_1496k_p18v11.webm","_filesize":"324483626"}]',
				'duration' => '00:43:00',
				'image' => '[{"_resolution":"946x532","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg946x532blob\\/10138983"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg672x378blob\\/10138980"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg644x363blob\\/10138979"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg485x273blob\\/10138969"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg476x268blob\\/10138976"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg476x176blob\\/10138974"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg404x227blob\\/10138982"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg298x168blob\\/10138977"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg276x155blob\\/10138970"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg236x133blob\\/10138978"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2193264\\/timg173x120blob\\/10138968"}]',
				'station' => 'ZDFinfo',
				'created_at' => '2014-08-14 11:09:10',
				'updated_at' => '2014-08-14 11:09:10',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
			6 => 
			array (
				'id' => 14,
				'title' => 'Der Chronist des Todes',
				'subtitle' => '0',
				'details' => 'Seit fast 30 Jahren filmt der Sozialarbeiter Curtis Mozie das Leben und das Sterben der schwarzen Jugendlichen in der US-Hauptstadt. Er ist ein Chronist des Todes.',
				'airtime' => '2014-08-21 17:30:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/01\\/140129_der_chronist_des_todes_dok_436k_p9v11.mp4","_filesize":"110022736"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/14\\/01\\/140129_der_chronist_des_todes_dok_436k_p9v11.mp4","_filesize":"110022736"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/01\\/140129_der_chronist_des_todes_dok_189k_p7v11.mp4","_filesize":"50820534"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/01\\/140129_der_chronist_des_todes_dok_1456k_p13v11.mp4","_filesize":"353777646"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/14\\/01\\/140129_der_chronist_des_todes_dok_1456k_p13v11.mp4","_filesize":"353777646"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/01\\/140129_der_chronist_des_todes_dok_776k_p17v11.webm","_filesize":"120932364"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/01\\/140129_der_chronist_des_todes_dok_282k_p16v11.webm","_filesize":"45983459"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/14\\/01\\/140129_der_chronist_des_todes_dok_1496k_p18v11.webm","_filesize":"226694445"}]',
				'duration' => '00:30:00',
				'image' => '[{"_resolution":"946x532","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2078198\\/timg946x532blob\\/10150380"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2078198\\/timg672x378blob\\/10150377"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2078198\\/timg644x363blob\\/10150376"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2078198\\/timg485x273blob\\/10150366"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2078198\\/timg476x268blob\\/10150373"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2078198\\/timg476x176blob\\/10150371"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2078198\\/timg404x227blob\\/10150379"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2078198\\/timg298x168blob\\/10150374"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2078198\\/timg276x155blob\\/10150367"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2078198\\/timg236x133blob\\/10150375"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/2078198\\/timg173x120blob\\/10150365"}]',
				'station' => 'ZDF',
				'created_at' => '2014-08-16 14:20:20',
				'updated_at' => '2014-08-16 14:20:20',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			7 => 
			array (
				'id' => 37,
				'title' => 'Wacken 2013: Anthrax',
				'subtitle' => '0',
				'details' => 'Thrash Metal aus New York: Anthrax. Beim Wacken Open Air 2013 sind sie mit bewährtem Line-up um Gründungsmitglied Scott Ian am Start und zeigen, was sie immer noch drauf haben.',
				'airtime' => '2014-08-17 02:10:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_436k_p9v11.mp4","_filesize":"208210607"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_436k_p9v11.mp4","_filesize":"208210607"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_189k_p7v11.mp4","_filesize":"96182088"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_1456k_p13v11.mp4","_filesize":"669463523"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_1456k_p13v11.mp4","_filesize":"669463523"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_776k_p17v11.webm","_filesize":"243447009"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_282k_p16v11.webm","_filesize":"88861737"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_1496k_p18v11.webm","_filesize":"452464901"}]',
				'duration' => '00:58:00',
				'image' => '[{"_resolution":"946x532","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg946x532blob\\/10093056"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg672x378blob\\/10093053"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg644x363blob\\/10093052"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg485x273blob\\/10093042"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg476x268blob\\/10093049"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg476x176blob\\/10093047"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg404x227blob\\/10093055"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg298x168blob\\/10093050"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg276x155blob\\/10093043"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg236x133blob\\/10093051"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg173x120blob\\/10093041"}]',
				'station' => 'ZDF.kultur',
				'created_at' => '2014-08-16 15:47:32',
				'updated_at' => '2014-08-16 15:47:32',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			8 => 
			array (
				'id' => 38,
				'title' => 'Wacken 2013: Anthrax',
				'subtitle' => '0',
				'details' => 'Thrash Metal aus New York: Anthrax. Beim Wacken Open Air 2013 sind sie mit bewährtem Line-up um Gründungsmitglied Scott Ian am Start und zeigen, was sie immer noch drauf haben.',
				'airtime' => '2014-08-17 02:10:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_436k_p9v11.mp4","_filesize":"208210607"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_436k_p9v11.mp4","_filesize":"208210607"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_189k_p7v11.mp4","_filesize":"96182088"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_1456k_p13v11.mp4","_filesize":"669463523"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_1456k_p13v11.mp4","_filesize":"669463523"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_776k_p17v11.webm","_filesize":"243447009"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_282k_p16v11.webm","_filesize":"88861737"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_1496k_p18v11.webm","_filesize":"452464901"}]',
				'duration' => '00:58:00',
				'image' => '[{"_resolution":"946x532","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg946x532blob\\/10093056"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg672x378blob\\/10093053"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg644x363blob\\/10093052"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg485x273blob\\/10093042"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg476x268blob\\/10093049"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg476x176blob\\/10093047"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg404x227blob\\/10093055"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg298x168blob\\/10093050"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg276x155blob\\/10093043"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg236x133blob\\/10093051"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg173x120blob\\/10093041"}]',
				'station' => 'ZDF.kultur',
				'created_at' => '2014-08-16 15:47:32',
				'updated_at' => '2014-08-16 15:47:32',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			9 => 
			array (
				'id' => 39,
				'title' => 'Wacken 2013: Anthrax',
				'subtitle' => '0',
				'details' => 'Thrash Metal aus New York: Anthrax. Beim Wacken Open Air 2013 sind sie mit bewährtem Line-up um Gründungsmitglied Scott Ian am Start und zeigen, was sie immer noch drauf haben.',
				'airtime' => '2014-08-17 02:10:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_436k_p9v11.mp4","_filesize":"208210607"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_436k_p9v11.mp4","_filesize":"208210607"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_189k_p7v11.mp4","_filesize":"96182088"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_1456k_p13v11.mp4","_filesize":"669463523"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_1456k_p13v11.mp4","_filesize":"669463523"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_776k_p17v11.webm","_filesize":"243447009"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_282k_p16v11.webm","_filesize":"88861737"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_1496k_p18v11.webm","_filesize":"452464901"}]',
				'duration' => '00:58:00',
				'image' => '[{"_resolution":"946x532","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg946x532blob\\/10093056"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg672x378blob\\/10093053"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg644x363blob\\/10093052"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg485x273blob\\/10093042"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg476x268blob\\/10093049"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg476x176blob\\/10093047"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg404x227blob\\/10093055"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg298x168blob\\/10093050"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg276x155blob\\/10093043"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg236x133blob\\/10093051"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg173x120blob\\/10093041"}]',
				'station' => 'ZDF.kultur',
				'created_at' => '2014-08-16 15:49:19',
				'updated_at' => '2014-08-16 15:49:19',
				'playlist_id' => NULL,
				'user_id' => 1,
			),
			10 => 
			array (
				'id' => 40,
				'title' => 'Wacken 2013: Anthrax',
				'subtitle' => '0',
				'details' => 'Thrash Metal aus New York: Anthrax. Beim Wacken Open Air 2013 sind sie mit bewährtem Line-up um Gründungsmitglied Scott Ian am Start und zeigen, was sie immer noch drauf haben.',
				'airtime' => '2014-08-17 02:10:00',
				'url' => '[{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_436k_p9v11.mp4","_filesize":"208210607"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"2","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_436k_p9v11.mp4","_filesize":"208210607"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_189k_p7v11.mp4","_filesize":"96182088"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_1456k_p13v11.mp4","_filesize":"669463523"},{"_basetype":"h264_aac_mp4_http_na_na","_type":"video\\/mp4","_quality":"3","_url":"http:\\/\\/rodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_1456k_p13v11.mp4","_filesize":"669463523"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"2","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_776k_p17v11.webm","_filesize":"243447009"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"0","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_282k_p16v11.webm","_filesize":"88861737"},{"_basetype":"vp8_vorbis_webm_http_na_na","_type":"video\\/webm","_quality":"3","_url":"http:\\/\\/nrodl.zdf.de\\/none\\/zdf\\/13\\/08\\/130807_wacken_anthrax_fes_1496k_p18v11.webm","_filesize":"452464901"}]',
				'duration' => '00:58:00',
				'image' => '[{"_resolution":"946x532","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg946x532blob\\/10093056"},{"_resolution":"672x378","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg672x378blob\\/10093053"},{"_resolution":"644x363","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg644x363blob\\/10093052"},{"_resolution":"485x273","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg485x273blob\\/10093042"},{"_resolution":"476x268","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg476x268blob\\/10093049"},{"_resolution":"476x176","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg476x176blob\\/10093047"},{"_resolution":"404x227","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg404x227blob\\/10093055"},{"_resolution":"298x168","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg298x168blob\\/10093050"},{"_resolution":"276x155","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg276x155blob\\/10093043"},{"_resolution":"236x133","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg236x133blob\\/10093051"},{"_resolution":"173x120","_url":"http:\\/\\/www.zdf.de\\/ZDFmediathek\\/contentblob\\/1959342\\/timg173x120blob\\/10093041"}]',
				'station' => 'ZDF.kultur',
				'created_at' => '2014-08-16 15:51:07',
				'updated_at' => '2014-08-16 15:51:07',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
		));
	}

}
