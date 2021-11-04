import product from './data/data.js';

/*LAYOUT VARIABLES*/
let layoutList = document.getElementById('layoutList');
let spoon = '<i id="spoon" class="fas fa-utensils"></i>';
let title = document.getElementById('layoutTitle');
let content = document.getElementById('layoutContent');
let usage = document.getElementById('layoutUsage');
let fimage = document.getElementById('firstImage');
let simage= document.getElementById('secondImage');
let timage = document.getElementById('thirtImage');
/*LAYOUT VARIABLES*/

/*GET DATA VARIABLES*/
let dataTitle =product.title;
let dataContent =product.content;
let dataUsage =product.usage;
let dataaltList=product.list;
let datafimage =product.fimage
let datasimage =product.simage;
let datatimage =product.timage;
/*GET DATA VARIABLES*/

class Floor{
	constructor(layoutTitle,layoutContent,layoutAltList,layoutUsage,firstImage,secondImage,thirtImage){
		this.layoutTitle = layoutTitle;
		this.layoutContent = layoutContent;
		this.layoutAltList = layoutAltList;
		this.layoutUsage = layoutUsage;
		this.firstImage = firstImage;
		this.secondImage = secondImage;
		this.thirtImage = thirtImage;
	}
	setData(){
		{
			this.layoutTitle = spoon +' '+ dataTitle;
			title.innerHTML = this.layoutTitle;
			
			this.layoutContent = dataContent;
			content.innerHTML = this.layoutContent;
			
			this.layoutUsage = dataUsage;
			usage.innerHTML = this.layoutUsage;
			
			this.firstImage = datafimage;
			fimage.src=this.firstImage;
			
			this.secondImage = datasimage;
			simage.src=this.secondImage;
			
			this.thirtImage = datatimage;
			timage.src=this.thirtImage;

			this.layoutAltList = dataaltList;

			for(var i = 0; i< this.layoutAltList.length; i++){
				let sayi = i+1;
				this.layoutAltList[i];
				layoutList.innerHTML += `<li><span style="color:orangered; font-weight:bolder">${sayi}</span> - ${this.layoutAltList[i]}</li>`;

			}

		}
		
	}
}

var floor = new Floor();
floor.setData();

