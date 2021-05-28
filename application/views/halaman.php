<div class="container p-5">

  <div class="input-group">
   <div class="input-group-append">
      <span class="input-group-text">Berat</span>
    </div>
    <input type="number" value="1" min="1" class="form-control" id="berat" name="berat"> 
    <div class="input-group-append">
      <span class="input-group-text">Kg</span>
    </div>
  </div>

<div class="form-group">  
  
</div>

<p>Lokasi Asal :</p>
<div class="form-group">  
  <select class="form-control" id="sel1">
    <option value=""> Pilih Provinsi</option>            
  </select>
</div>

<div class="form-group">  
  <select class="form-control" id="sel2" disabled>
    <option value=""> Pilih Kota</option>            
  </select>
</div>

<p>Lokasi Tujuan :</p>


<div class="form-group">  
  <select class="form-control" id="sel11">
    <option value=""> Pilih Provinsi</option>            
  </select>
</div>

<div class="form-group">  
  <select class="form-control" id="sel22" disabled>
    <option value=""> Pilih Kota</option>            
  </select>
</div>

<div class="form-group">  
  <select class="form-control" id="kurir" disabled>
    <option value=""> Pilih Kurir</option>
    <option value="jne">JNE</option>
    <option value="tiki">TIKI</option>
    <option value="pos">POS Indonesia</option>
  </select>
</div>

<div id="hasil"></div>

</div>

<script type="text/javascript">
  
function getLokasi() {
  var $op = $("#sel1"), $op1 = $("#sel11");
  
  $.getJSON("provinsi", function(data){  
    $.each(data, function(i,field){  
    
       $op.append('<option value="'+field.province_id+'">'+field.province+'</option>'); 
       $op1.append('<option value="'+field.province_id+'">'+field.province+'</option>'); 

    });
    
  });
 
}

getLokasi();

$("#sel11").on("change", function(e){
  e.preventDefault();
  var option = $('option:selected', this).val();    
  $('#sel22 option:gt(0)').remove();
  $('#kurir').val('');

  if(option==='')
  {
    alert('null');    
    $("#sel22").prop("disabled", true);
    $("#kurir").prop("disabled", true);
  }
  else
  {        
    $("#sel22").prop("disabled", false);
    getKota1(option);
  }
});


$("#sel1").on("change", function(e){
  e.preventDefault();
  var option = $('option:selected', this).val();    
  $('#sel2 option:gt(0)').remove();
  $('#kurir').val('');

  if(option==='')
  {
    alert('null');    
    $("#sel2").prop("disabled", true);
    $("#kurir").prop("disabled", true);
  }
  else
  {        
    $("#sel2").prop("disabled", false);
    getKota(option);
  }
});




$("#sel22").on("change", function(e){
  e.preventDefault();
  var option = $('option:selected', this).val();    
  $('#kurir').val('');

  if(option==='')
  {
    alert('null');    
    $("#kurir").prop("disabled", true);
  }
  else
  {        
    $("#kurir").prop("disabled", false);    
  }
});


$("#kurir").on("change", function(e){
  e.preventDefault();
  var option = $('option:selected', this).val();    
  var origin = $("#sel2").val();
  var des = $("#sel22").val();
  var qty = $("#berat").val();

  if(qty==='0' || qty==='')
  {
    alert('null');
  }
  else if(option==='')
  {
    alert('null');        
  }
  else
  {                
    getOrigin(origin,des,qty,option);
  }
});


function getOrigin(origin,des,qty,cour) {
  var $op = $("#hasil"); 
  var i, j, x = "";
  
  $.getJSON("tarif/"+origin+"/"+des+"/"+qty+"/"+cour, function(data){     
    $.each(data, function(i,field){  

      for(i in field.costs)
      {
          x += "<p class='mb-0'><b>" + field.costs[i].service + "</b> : "+field.costs[i].description+"</p>";

           for (j in field.costs[i].cost) {
                x += field.costs[i].cost[j].value +"<br>"+field.costs[i].cost[j].etd+"<br>"+field.costs[i].cost[j].note;
            }
         
      }

      $op.html(x);

    });
  });
 
}


function getKota1(idpro) {
  var $op = $("#sel22"); 
  
  $.getJSON("kota/"+idpro, function(data){      
    $.each(data, function(i,field){  
    

       $op.append('<option value="'+field.city_id+'">'+field.type+' '+field.city_name+'</option>'); 

    });
    
  });
 
}
  
function getKota(idpro) {
  var $op = $("#sel2"); 
  
  $.getJSON("kota/"+idpro, function(data){      
    $.each(data, function(i,field){  
    

       $op.append('<option value="'+field.city_id+'">'+field.type+' '+field.city_name+'</option>'); 

    });
    
  });
 
}

</script>