function Da(){
			
			document.getElementById('date').innerHTML=Date('Today');
		}
function M1(){

			document.getElementById('change').innerHTML="I am different ";

		}
function M2(){

			document.getElementById('change').innerHTML="I am different too";

		}
function Open1(){

			x=document.getElementById("o");
			
			x.style.display="block";


		}
function Remove1(){

			x=document.getElementById("o");

			x.style.display="none";
			

		}
function check() {
		
		var e0=document.getElementById("email0");
		var e1=document.getElementById("email1");
		if(e0.value!=e1.value){
			alert("Emails Dont Match Try Again");
		}
		return false;

		}
function Func(){

	var c=document.getElementById("nickname");
	var d=document.getElementById("nick");


	if(c.checked==true){
		d.style.display="block";
		d.setAttribute('required',true);

	}
	else{
		d.style.display="none";

	}


}				



