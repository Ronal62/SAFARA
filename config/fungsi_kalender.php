<style type="text/css">
	#tbl_tgl{
		position:relative;
		float:left;
	}
</style>
<?php
function buatkalender($tanggal,$bulan,$tahun) {      
  $bulanan=array(1=>"Januari","Februari","Maret","April",
                    "Mei","Juni","Juli","Agustus","September", 
                    "Oktober","November","Desember");
  $bln=date("n");
  $thn=date("Y");

  $jmlhari = date("t",mktime(0,0,0,$bulan,1,$tahun));
  $haritglsatu = date("w",mktime(0,0,0,$bulan,1,$tahun));

  $kalender = "<table width='100%' cellspacing=1 cellpadding=4   id='tbl_tgl'>\n";
  $kalender .= "<tr>
               <th colspan='7' align='center'><strong>$bulanan[$bln], $thn</strong>
               </th></tr>\n";

  $kalender .= "<tr class=tr_judul>
                <th align='center'>M</th>
				<th align='center'>S</th>
				<th align='center'>S</th>
				<th align='center'>R</th>
                <th align='center'>K</th>
				<th align='center'>J</th>
				<th align='center'>S</th>
				</tr>\n";
  $a 	  = 1;
  $adabaris   = TRUE;
  $mulaicetak = 0;
  while ($adabaris) {
    $kalender .= "<tr align=center class=tr_terang>";
    for ($i = 0; $i < 7; $i++ ) {
      if ($mulaicetak < $haritglsatu) {
        $kalender .= "<td>&nbsp;</td>";
        $mulaicetak++;
      } 
      elseif ($a <= $jmlhari) {
        $tt = $a;
        if ($a == $tanggal) { 
          $tt = "<span style='color: blue; font-weight: bold; 
                 font-size: larger; text-decoration: blink;'>
                 $tt</span>"; 
        }
        if ($i == 0) { 
          $tt = "<font color=\"#FF0000\">$tt</font>"; 
        }
        $kalender .= "<td>$tt</td>";
        $a++;
      } 
      else {
        $kalender .= "<td>&nbsp;</td>";
      }
    }
    $kalender .= "</tr>\n";
    if ($a <= $jmlhari) { 
      $adabaris = TRUE; 
    } 
    else { 
      $adabaris = FALSE; 
    }
  }
  $kalender .= "</table>\n";
  return $kalender;
}
?>
