<!DOCTYPE html>
<html>
<head>
	<title>JS Calculator</title>
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<style>
	   html {
	     height: 100%;
	     background: radial-gradient(circle, #fff 20%, #ccc);
	     background-size: cover;
       }
       input[type=text]{
       	/*float: right;*/
       	font-family: 'Orbitron', sans-serif;
       	height: 50px;
	    width: 305px;
	    background: #d1e0e0;
	    border-radius: 3px;
	    box-shadow: inset 0px 4px rgba(0, 0, 0, 0.2);
	    text-align: right;
       	font-size: 30px;
       	/*color: white*/
       } 
       input[type=button]{
        /*float: left;*/
	    width: 66px;
	    height: 36px;
	    background: white;
	    border-radius: 3px;
	    box-shadow: 0px 4px rgba(0, 0, 0, 0.2);
	    /*margin: 2px 7px 11px 2px;*/
	    margin: 3px;
	    color: #888;
	    /*line-height: 36px;*/
	    text-align: center;
	    font-size: 25px
       } 
	</style>
</head>
<body>
   <?php
      include("head.php");  //#d9f8fc
   ?>
   <div style="width: 377px; height: auto; margin: 100px auto; padding: 20px 20px 9px; background: linear-gradient(#c0e2f2, #bde3f5); border-radius: 3px; box-shadow: 0px 4px #009de4, 0px 10px 15px rgba(0, 0, 0, 0.2);" >
     <form name="calc">
        <input type="text" name="display" placeholder="0" disabled><br><br>
        <input type="button" value="x!" onclick="btnfact()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="^3" onclick="btnsqr2()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="3&radic;" onclick="btncbrt()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="1/x" onclick="btninverse()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="BIN" onclick="btnbin()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="DEC" onclick="btndec()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <br>
        <input type="button" value="^2" onclick="btnsqr()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="&radic;" onclick="btnsqrt()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="log" onclick="btnlog()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="ln" onclick="btnln()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="exp" onclick="btnexp()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="OCT" onclick="btnoct()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <br>
        <input type="button" value="sin" onclick="btnsin()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="cos" onclick="btncos()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="tan" onclick="btntan()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="(" onclick="btnpr1()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value=")" onclick="btnpr2()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <input type="button" value="HEX" onclick="btnhex()" style="background-color: #33cccc; color: white; width: 53px; height: 26px; font-size: 20px">
        <br><br>
        <input type="button" value="7" onclick="document.calc.display.value += '7'">
        <input type="button" value="8" onclick="document.calc.display.value += '8'">
        <input type="button" value="9" onclick="document.calc.display.value += '9'">
        <input type="button" value="DEL" onclick="btnclear()" style="background-color: #ff66a3; color: white">
        <input type="button" value="AC" onclick="btnAC()" style="background-color: #ff66a3; color: white">
        <br>
        <input type="button" value="4" onclick="document.calc.display.value += '4'">
        <input type="button" value="5" onclick="document.calc.display.value += '5'">
        <input type="button" value="6" onclick="document.calc.display.value += '6'">
        <input type="button" value="X" onclick="btnmul()" style="background-color: #ff80d5; color: white">
        <input type="button" value="/" onclick="btndiv()" style="background-color: #ff80d5; color: white">
        <br>
        <input type="button" value="1" onclick="document.calc.display.value += '1'">
        <input type="button" value="2" onclick="document.calc.display.value += '2'">
        <input type="button" value="3" onclick="document.calc.display.value += '3'">
        <input type="button" value="+" onclick="btnadd()" style="background-color: #ff80d5; color: white">
        <input type="button" value="-" onclick="btnsub()" style="background-color: #ff80d5; color: white">
        <br>
        <input type="button" value="0" onclick="document.calc.display.value += '0'">
        <input type="button" value="." onclick="btndot()">
        <input type="button" value="PI" onclick="btnpi()">
        <input type="button" value="%" onclick="btnmod()" style="background-color: #ff80d5; color: white">
        <input type="button" value="=" onclick="btneql()" style="background-color: #99ff99;">
        <br>
     	
     </form>
   </div>
   <script>
     // var tmp = 0;
     // var flag = 0;
   	 function btnadd(){
   	 	document.calc.display.value += "+";
   	 }
   	 function btnsub(){
   	 	document.calc.display.value += "-";
   	 }
   	 function btnmul(){
   	 	document.calc.display.value += "*";
   	 }
   	 function btndiv(){
   	 	document.calc.display.value += "/";
   	 }
   	 function btnmod(){
   	 	document.calc.display.value += "%";
   	 }
   	 function btndot(){
   	 	document.calc.display.value += ".";
   	 }
   	 function btnAC(){
   	 	document.calc.display.value = "";
   	 }
   	 function btnsqrt(){
   	 	document.calc.display.value = Math.sqrt(document.calc.display.value);
   	 }
   	 function btncbrt(){
   	 	document.calc.display.value = Math.cbrt(document.calc.display.value);
   	 }
   	 function btnsqr(){
   	 	document.calc.display.value = document.calc.display.value * document.calc.display.value;
   	 }
   	 function btnsqr2(){
   	 	document.calc.display.value = document.calc.display.value * document.calc.display.value * document.calc.display.value;
   	 }
   	 function btnfact(){
   	 	document.calc.display.value = fact(document.calc.display.value);
   	 }
   	 function fact(num){
   	 	if (num === 0)
        { 
        	return 1; 
        } else { 
        	return num * fact( num - 1 ); 
        }
   	 }
   	 function btnpr1(){
   	 	 document.calc.display.value += "(";
   	 }
   	 function btnpr2(){
   	 	 document.calc.display.value += ")";
   	 }
   	 function btnclear(){
   	 	 document.calc.display.value = document.calc.display.value.slice(0, -1);
   	 }
   	 function btnpi(){
   	 	document.calc.display.value += Math.PI;
   	 }
   	 function btnsin(){
   	 	document.calc.display.value = Math.sin(document.calc.display.value * Math.PI / 180)
   	 }
   	 function btncos(){
   	 	document.calc.display.value = Math.cos(document.calc.display.value * Math.PI / 180)
   	 }
   	 function btntan(){
   	 	document.calc.display.value = Math.tan(document.calc.display.value * Math.PI / 180)
   	 }
   	 function btnlog(){
   	 	document.calc.display.value = (Math.log(document.calc.display.value)) / 2.303;
   	 }
   	 function btnln(){
   	 	document.calc.display.value = Math.log(document.calc.display.value);
   	 }
   	 function btnexp(){
   	 	document.calc.display.value = Math.exp(document.calc.display.value);
   	 }
   	 function btnexp(){
   	 	document.calc.display.value = Math.exp(document.calc.display.value);
   	 }
   	 function btneql(){
   	 	document.calc.display.value = eval(document.calc.display.value);
   	 }
   	 function btninverse(){
   	 	document.calc.display.value = 1 / document.calc.display.value;
   	 }
     function btnbin(){
     	document.calc.display.value = convertFromBaseToBase(document.calc.display.value, 10, 2);
     	// document.calc.display.value = convertBinary(document.calc.display.value);
     } 
   	 // function convertBinary(number) {
     //    var binaryArr = [];
     //    for (; number; number >>= 1) {
     //       binaryArr.push(number & 1);
     //    }
     //    return binaryArr.reverse().join('');
     // }
     function btnhex(){
     	document.calc.display.value = convertFromBaseToBase(document.calc.display.value, 10, 16);
     	// document.calc.display.value = decimalToHexString(document.calc.display.value);
     }
     // function decimalToHexString(number, padding) {
     //    var hex = Number(number).toString(16);
     //    padding = typeof (padding) === "undefined" || padding === null ? padding = 2 : padding;
     //    while (hex.length < padding) {
     //       hex = "0" + hex;
     //    }
     //    return hex;
     // }
     function btnoct(){
     	document.calc.display.value = convertFromBaseToBase(document.calc.display.value, 10, 8);
     }
     function btndec(){
     	document.calc.display.value = convertFromBaseToBase(document.calc.display.value, 2, 10);
     }
     function convertFromBaseToBase(str, fromBase, toBase){
	    var num = parseInt(str, fromBase);
        return num.toString(toBase);
     }
      
   </script>
</body>
</html>
