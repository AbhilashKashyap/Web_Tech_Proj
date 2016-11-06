document.getElementById("poke8").addEventListener("click",func2,false);
		function func2(){
		var x=document.getElementById("poke8");
		x.src="pokemon/pika.png";
		document.getElementById("poke8").removeEventListener("click",func2,false);
		document.getElementById("poke8").addEventListener("click",func1,false);
		}
document.getElementById("poke9").addEventListener("click",func3,false);
		function func3(){
		var x=document.getElementById("poke9");
		x.src="pokemon/bulb.png";
		document.getElementById("poke9").removeEventListener("click",func3,false);
		document.getElementById("poke9").addEventListener("click",func4,false);
		}
		function func1(e){
			e.target.src="pokemon/pokeball3.png";
			document.getElementById("poke8").removeEventListener("click",func1,false);
			document.getElementById("poke8").addEventListener("click",func2,false);
		}
		function func4(e){
			e.target.src="pokemon/pokeball3.png";
			document.getElementById("poke9").removeEventListener("click",func4,false);
			document.getElementById("poke9").addEventListener("click",func3,false);
		}
