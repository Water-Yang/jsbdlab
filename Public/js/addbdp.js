function check(){
	var info = '';
	var stats = true;
    var kk= document.getElementById('ff');
    var content = UE.getEditor('con').hasContents();
   
   if(kk.bname.value == ''||content== ''||kk.fpara.value ==''||kk.home.value==''||kk.email.value==''){
   	 if(kk.bname.value == ''){
   	 	info += 'Name';
   	 	stats = false;
   	 }
     if(kk.fpara.value==''){
      info +='  Description';
      stats = false;
     }
     if(kk.home.value==''){
      info += ' Home';
      stats = false;
     }
     if(kk.email.value==''){
      info +=' Email';
      stats = false;
     }
   	 if(content == ''){
   	 	info +=' Introduction';
   	 	stats = false;
   	 }
   	 info += ' cannot be empty!';
     alert(info);
     return stats;
   }else{
     return stats;   
   }
 }