<?php
    include "koneksi.php";
    session_start();

    $sql = "SELECT markers.lat, markers.lng, markers.name, COUNT(NAME) AS total, COUNT(CASE type WHEN 'negatif' then 1 else null end) AS negatif, COUNT(CASE type WHEN 'ODR' then 1 else null end) AS odr, COUNT(CASE type WHEN 'ODP' then 1 else null end) AS odp, COUNT(CASE type WHEN 'PDP' then 1 else null end) AS pdp, COUNT(CASE type WHEN 'POSITIF' then 1 else null end) AS positif FROM markers GROUP BY NAME";

  $a = $koneksi->query($sql);

   $items = [];
      while ($data = $a->fetch_object()) {
          $temp = [
              $data->lat,
              $data->lng,
              $data->name,
              [
                  'total' => $data->total,
                  'ODR' => $data->odr,
                  'ODP' => $data->odp,
                  'PDP' => $data->pdp,
                  'POSITIF' => $data->positif,
              ],
          ];
          array_push($items, $temp);
      }
      echo json_encode($items);
?>