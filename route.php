<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {

         case 'home':
            include "home.php";
            break;

		case 'sejarah':
			include "sejarah.php";
			break;

		case 'struktur':
			include "struktur.php";
			break;

		case 'instlsi-bawean':
			include "instlsi-bawean.php";
			break;

		case 'instlsi-campurejo':
			include "instlsi-campurejo.php";
			break;

		case 'berita-zi':
			include "berita-zi.php";
			break;	

		case 'berita-umum':
			include "berita-umum.php";
			break;

		case 'dwp':
			include "dwp.php";
			break;
			
		case 'permohonan-bbm':
			include "permohonan-bbm.php";
			break;

		case 'daftar-tarif-retribusi':
			include "daftar-tarif-retribusi.php";
			break;

		case 'harga-ikan':
			include "harga-ikan.php";
			break;
		
		case 'produksi-purse-seine':
			include "produksi-purse-seine.php";
			break;

		case 'produksi-payang':
			include "produksi-payang.php";
			break;

		case 'hasil-penelitian':
			include "hasil-penelitian.php";
			break;

		case 'standar-pelayanan':
			include "standar-pelayanan.php";
			break;
			
		case 'standar-operasional-prosedur':
			include "standar-operasional-prosedur.php";
			break;

		case 'E-perpus':
			include "E-perpus.php";
			break;

		case 'hasil-SKM':
			include "hasil-SKM.php";
			break;

		case 'SIMPELPAS':
			include "SIMPELPAS.php";
			break;

		case 'SiAP-Grak':
			include "SiAP-Grak.php";
			break;

		case 'SILAYUR-MANTAP':
			include "SILAYUR-MANTAP.php";
			break;	

		case 'SIPARIMANTA':
			include "SIPARIMANTA.php";
			break;

		case 'MASDANIS':
			include "MASDANIS.php";
			break;

         //opsi route default
			default:
				include "home.php";
				break;

		}
}else{
        //opsi jika route tidak ditemukan
		include "home.php";
}

?>