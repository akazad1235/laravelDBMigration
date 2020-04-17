
function SendData(){

	  var myName =document.getElementById("myName").value;
  var myClass =document.getElementById("myClass").value;
  var myRoll =document.getElementById("myRoll").value;
  var myDpt =document.getElementById("myDpt").value;

 

	var url = '/insert'; 
	var data = {name:myName,class:myClass, roll:myRoll, dpt:myDpt } 

	axios.post(url , data)

  .then(function (response) {
    alert(response.data);
  })
  .catch(function (error) {
    alert('errror');
  });

}



function SendDelete(){

	  var myId =document.getElementById("DeleteId").value;
 

 

	var url = '/dataDelete'; 
	var data = {id:myId } 

	axios.post(url , data)

  .then(function (response) {
    alert(response.data);
  })
  .catch(function (error) {
    alert('errror');
  });

}

function SendUpdate(){
  var myId =document.getElementById("myId").value;
  var myName =document.getElementById("myName").value;
  var myClass =document.getElementById("myClass").value;
  var myRoll =document.getElementById("myRoll").value;
  var myDpt =document.getElementById("myDpt").value;

  var url = '/update';

  var data = {id:myId,  name:myName, class:myClass, roll:myRoll, dpt:myDpt};

  axios.post(url, data)
  
  .then(function (response) {
    alert(response.data);
  })
  .catch(function (error) {
    alert('errror');
  });
}