counter = {
  'pelangi':0,
  'balon':0,
  'cicak':0,
  'kereta':0,
  'kebunku':0
}

  function tampillagu (id){
    $(".bloklagu").hide();
    $('#'+id).show();
    $('#info').hide();

counter[id ]++;
$('#c'+id).html(counter[id]);

  }
