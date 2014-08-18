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
				'id' => 3,
				'title' => 'glanz & gloria',
				'subtitle' => '0',
				'details' => '0',
				'airtime' => '2014-08-01 18:43:00',
				'url' => '[{"_basetype":"","_type":"video\\/mp4","_quality":"0","_url":"http:\\/\\/podcastsource.sf.tv\\/nps\\/podcast\\/glanzundgloria\\/2014\\/08\\/glanzundgloria_20140811_184306_v_podcast_h264_q10.mp4","_filesize":"0"}]',
				'duration' => '00:00:00',
				'image' => '[{"_resolution":"288x166","_url":"http:\\/\\/www.srfcdn.ch\\/asset\\/image\\/audio\\/862dbbb2-cd4f-4098-881e-7c2da4dd7311\\/WEBVISUAL\\/1404293237000.jpg\\/scale\\/width\\/288"},{"_resolution":"144x83","_url":"http:\\/\\/www.srfcdn.ch\\/asset\\/image\\/audio\\/862dbbb2-cd4f-4098-881e-7c2da4dd7311\\/WEBVISUAL\\/1404293237000.jpg\\/scale\\/width\\/144"}]',
				'station' => 'SRF',
				'created_at' => '2014-08-12 07:07:25',
				'updated_at' => '2014-08-12 07:07:25',
				'playlist_id' => 1,
				'user_id' => NULL,
			),
			2 => 
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
		));
	}

}
