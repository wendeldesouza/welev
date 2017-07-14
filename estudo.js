
var imagens=["_img/colchao1/Colchao_ortobom_physical_mega_resistente.jpg","_img/colchao1/borda1.jpg",
"_img/colchao1/borda1.1.jpg","_img/colchao1/cima1.jpg"];
var num=0;
// script de apresentação dos produtos.
function next(){
var slider = document.getElementById('slider');
num++;
	if(num>=imagens.length){
	num=0;	
		}else{
		slider.src=imagens[num];
		}
}
function prev(){
 var slider= document.getElementById('slider');
 num--;
 if(num<0){

 	num=imagens.length-1;

 	}else{
	slider.src=imagens[num];
	}
}






