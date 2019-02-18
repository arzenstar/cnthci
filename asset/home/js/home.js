var ajaxku;
    function usernameguru(nama){
     ajaxku = buatajax();
     var url="<?php echo base_url();?>index.php/home/username/guru/"+nama;
     ajaxku.onreadystatechange=guru;
     ajaxku.open("GET",url,true);
     ajaxku.send(null);
    }

    function usernamesiswa(nama2){
     ajaxku = buatajax();
     var url="<?php echo base_url();?>index.php/home/username/siswa/"+nama2;
     ajaxku.onreadystatechange=user;
     ajaxku.open("GET",url,true);
     ajaxku.send(null);
    }

    function emailguru(email){
     ajaxku = buatajax();
     var url="<?php echo base_url();?>index.php/home/email/siswa/?email="+email;
     ajaxku.onreadystatechange=mailguru;
     ajaxku.open("GET",url,true);
     ajaxku.send(null);
    }

    function emailsiswa(email){
     ajaxku = buatajax();
     var url="<?php echo base_url();?>index.php/home/email/guru/?email="+email;
     ajaxku.onreadystatechange=mailsiswa;
     ajaxku.open("GET",url,true);
     ajaxku.send(null);
    }

    function passc(value)
    {
      if(value.length>5)
      {
        document.getElementById("passcount").innerHTML = "<label>STRONG</label>";
      }
      else
      {
       document.getElementById("passcount").innerHTML = "<label>WEAK</label>"; 
      }
    }

    function passck(value)
    {
      var pass1 = document.getElementById("pass1").value;
      if(value != pass1)
      {
        document.getElementById("passceck").innerHTML= "<label>TIDAK SAMA</label>";
      }
      else
      {
        document.getElementById("passceck").innerHTML= "<label>SAMA</label>";
      }
    }

    function passckgr(value)
    {
      var pass1 = document.getElementById("passguru").value;
      if(value != pass1)
      {
        document.getElementById("passceckgr").innerHTML= "<label>TIDAK SAMA</label>";
      }
      else
      {
        document.getElementById("passceckgr").innerHTML= "<label>SAMA</label>";
      }
    }

    function passcgr(value)
    {
      if(value.length>5)
      {
        document.getElementById("passcountgr").innerHTML = "<label>STRONG</label>";
      }
      else
      {
       document.getElementById("passcountgr").innerHTML = "<label>WEAK</label>"; 
      }
    }

    

    function buatajax(){ 
    if (window.XMLHttpRequest){ 
    return new XMLHttpRequest(); 
    } 
    if (window.ActiveXObject){ 
    return new ActiveXObject("Microsoft.XMLHTTP"); 
    } 
    return null; 
    } 

    function guru(){
    var data;
     if (ajaxku.readyState==4 && ajaxku.status==200){
     data=ajaxku.responseText;
     if(data.length>1){
       document.getElementById("gur1").style.visibility = "";
       document.getElementById("gur2").style.visibility = "hidden";
        if(document.getElementById("insert2").disabled==false)
        {
          document.getElementById("insert2").disabled="true";
        }
       
       }
       else
       {
       document.getElementById("gur1").style.visibility = "hidden";
       document.getElementById("gur2").style.visibility = "";
       if(document.getElementById("insert2").disabled==true)
        {
          document.getElementById("insert2").disabled="";
        }
       }
     }
    }

    function user(){
    var data;
     if (ajaxku.readyState==4 && ajaxku.status==200)
     {
      data=ajaxku.responseText;
       if(data.length >1)
       {
       document.getElementById("sis1").style.visibility = "";
       document.getElementById("sis2").style.visibility = "hidden";
       if(document.getElementById("insert1").disabled==false)
        {
          document.getElementById("insert1").disabled="true";
        }
       }
       else
       {
       document.getElementById("sis1").style.visibility = "hidden";
       document.getElementById("sis2").style.visibility = "";
       if(document.getElementById("insert1").disabled==true)
        {
          document.getElementById("insert1").disabled="";
        }
       }
       
     }
    }
    
function mailguru(){
    var data;
     if (ajaxku.readyState==4 && ajaxku.status==200)
     {
      data=ajaxku.responseText;
       if(data.length >1)
       {
       document.getElementById("mail").innerHTML = "<label><font color='red'>email is not valid</font></label>";
       if(document.getElementById("insert2").disabled==false)
        {
          document.getElementById("insert2").disabled="true";
        }
       }
       else
       {
       document.getElementById("mail").innerHTML = "<label><font color='green'>email valid</font></label>";
       if(document.getElementById("insert2").disabled==true)
        {
          document.getElementById("insert2").disabled="";
        }
       }
     }
    }

    function mailsiswa(){
    var data;
     if (ajaxku.readyState==4 && ajaxku.status==200)
     {
      data=ajaxku.responseText;
       if(data.length >1)
       {
       document.getElementById("mailsis").innerHTML = "<label><font color='red'>email is not valid</font></label>";
       if(document.getElementById("insert1").disabled==false)
        {
          document.getElementById("insert1").disabled="true";
        }
       }
       else
       {
       document.getElementById("mailsis").innerHTML = "<label><font color='green'>email valid</font></label>";
       if(document.getElementById("insert1").disabled==true)
        {
          document.getElementById("insert1").disabled="";
        }
       }
     }
    }

    function sub1()
    {
      var guru=$("#userguru");
      if (document.getElementById("gur1").style.visibility==false)
       {
        guru.focus();
       }
    }