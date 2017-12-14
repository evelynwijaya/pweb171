<?php

/**
 *
 */
class Prodi
{
  private $prodi;
  private $sarjana;
  private $jurusan;

  private $data = [
    '01' => ['prodi'=>'Sistem Informasi','sarjana'=>'S1','jurusan'=>'Akuntansi Komputer'],
    '02' => ['prodi'=>'Sistem Informasi','sarjana'=>'S1','jurusan'=>'Manajemen'],
    '03' => ['prodi'=>'Sistem Informasi','sarjana'=>'D3','jurusan'=>'Akuntansi Komputer'],
    '04' => ['prodi'=>'Sistem Informasi','sarjana'=>'D3','jurusan'=>'Manajemen'],
  ]

  function prodi($kode)
  {
    $this->prodi = $this->data[$kode] ['prodi'];
    $this->sarjana = $this->data[$kode] ['sarjana'];
    $this->jurusan = $this->data[$kode] ['jurusan'];
  }

  function getProdi(){
      return $this->prodi;
  }

  function getSarjana(){
    return $this->sarjana;
  }

  function getJurusan(){
    return $this->jurusan;
  }
}


 ?>
