<?php
include ("prodi.php");
/**
*
*/
class Member
{
  private $nama;
  private $warna;
  private $prod;

  private $data = [
      '51015001' => ['nama' => 'Agung Ashari', 'warna'=>'ddeeff','prod'=>'01'],
      '51015002' => ['nama' => 'Felisca Jieretno', 'warna'=>'ddffee','prod'=>'04'],
      '51015003' => ['nama' => 'Aprianto', 'warna'=>'eeffdd','prod'=>'01'],
      ];
  function Member ( $nim) {
      $this->nama =$this->data[$nim] ['nama'];
      $this->warna =$this->data[$nim] ['warna'];
      $this->prodi = new prodi ($this->data[$nim]['prod']);
  }
  function getNama() {
    return $this->nama;
  }
  function getWarna() {
    return $this->warna;
  }

  function getProdi(){
    return $this->prodi;
  }
}
 ?>
