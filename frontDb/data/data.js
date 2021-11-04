import storage from './storage.js';

let path = window.location.href;
let pathString = String(path);
let splitUrl =pathString.split('#');
let lastUrl =splitUrl[1];
console.log(lastUrl);

var product = {};


if(lastUrl == 'adanakebap'){
	product.title = storage.adanakebap.title ;
	product.content = storage.adanakebap.content;
	product.usage = storage.adanakebap.usage;
	product.list = storage.adanakebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/adanaKebap/adanakebaplayout1.png`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/adanaKebap/adanakebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/adanaKebap/adanakebaplayout3.jpg`;
}
else if(lastUrl == 'urfakebap'){
	product.title = storage.urfakebap.title ;
	product.content = storage.urfakebap.content;
	product.usage = storage.urfakebap.usage;
	product.list = storage.urfakebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/urfaKebap/urfakebaplayout3.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/urfaKebap/urfakebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/urfaKebap/urfakebaplayout1.jpg`;
}
else if(lastUrl == 'orukkebap'){
	product.title = storage.orukkebap.title ;
	product.content = storage.orukkebap.content;
	product.usage = storage.orukkebap.usage;
	product.list = storage.orukkebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/orukkebap/orukkebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/orukkebap/orukkebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/orukkebap/orukkebaplayout3.jpg`;
}
else if(lastUrl == 'buryankebap'){
	product.title = storage.buryankebap.title ;
	product.content = storage.buryankebap.content;
	product.usage = storage.buryankebap.usage;
	product.list = storage.buryankebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/buryankebap/buryankebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/buryankebap/buryankebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/buryankebap/buryankebaplayout3.jpg`;
}
else if(lastUrl == 'bohcakebap'){
	product.title = storage.bohcakebap.title ;
	product.content = storage.bohcakebap.content;
	product.usage = storage.bohcakebap.usage;
	product.list = storage.bohcakebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/bohcakebap/bohcakebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/bohcakebap/bohcakebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/bohcakebap/bohcakebaplayout3.jpg`;
}
else if(lastUrl == 'cokertmekebap'){
	product.title = storage.cokertmekebap.title ;
	product.content = storage.cokertmekebap.content;
	product.usage = storage.cokertmekebap.usage;
	product.list = storage.cokertmekebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/cokertmekebap/cokertmekebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/cokertmekebap/cokertmekebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/cokertmekebap/cokertmekebaplayout3.jpg`;
}
else if(lastUrl == 'ormankebap'){
	product.title = storage.ormankebap.title ;
	product.content = storage.ormankebap.content;
	product.usage = storage.ormankebap.usage;
	product.list = storage.ormankebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/ormankebap/ormankebaplayout1.png`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/ormankebap/ormankebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/ormankebap/ormankebaplayout3.jpg`;
}
else if(lastUrl == 'patlicankebap'){
	product.title = storage.patlicankebap.title ;
	product.content = storage.patlicankebap.content;
	product.usage = storage.patlicankebap.usage;
	product.list = storage.patlicankebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/patlıcankebap/patlıcankebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/patlıcankebap/patlıcankebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/patlıcankebap/patlıcankebaplayout3.jpg`;
}
else if(lastUrl == 'cagkebap'){
	product.title = storage.cagkebap.title ;
	product.content = storage.cagkebap.content;
	product.usage = storage.cagkebap.usage;
	product.list = storage.cagkebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/cagkebap/cagkebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/cagkebap/cagkebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/cagkebap/cagkebaplayout3.jpg`;
}
else if(lastUrl == 'taskebap'){
	product.title = storage.taskebap.title ;
	product.content = storage.taskebap.content;
	product.usage = storage.taskebap.usage;
	product.list = storage.taskebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/taskebap/taskebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/taskebap/taskebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/taskebap/taskebaplayout3.jpg`;
}
else if(lastUrl == 'mercankebap'){
	product.title = storage.mercankebap.title ;
	product.content = storage.mercankebap.content;
	product.usage = storage.mercankebap.usage;
	product.list = storage.mercankebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/mercankebabı/mercankebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/mercankebabı/mercankebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/bohcakebap/bohcakebaplayout3.jpg`;
}
else if(lastUrl == 'beytikebap'){
	product.title = storage.beytikebap.title ;
	product.content = storage.beytikebap.content;
	product.usage = storage.beytikebap.usage;
	product.list = storage.beytikebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/beytikebap/beytikebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/beytikebap/beytikebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/mercankebabı/mercankebaplayout2.jpg`;
}
else if(lastUrl == 'kiliskebap'){
	product.title = storage.kiliskebap.title ;
	product.content = storage.kiliskebap.content;
	product.usage = storage.kiliskebap.usage;
	product.list = storage.kiliskebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/kiliskebap/kiliskebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/kiliskebap/kiliskebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/adanaKebap/adanakebaplayout2.jpg`;
}
else if(lastUrl == 'tepsikebap'){
	product.title = storage.tepsikebap.title ;
	product.content = storage.tepsikebap.content;
	product.usage = storage.tepsikebap.usage;
	product.list = storage.tepsikebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/tepsikebabı/tepsikebabilayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/tepsikebabı/tepsikebabilayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/tepsikebabı/tepsikebabilayout3.jpg`;
}
else if(lastUrl == 'sogankebap'){
	product.title = storage.sogankebap.title ;
	product.content = storage.sogankebap.content;
	product.usage = storage.sogankebap.usage;
	product.list = storage.sogankebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/sogankebabı/sogankebabılayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/sogankebabı/soğankebabılayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/bohcakebap/bohcakebaplayout2.jpg`;
}
else if(lastUrl == 'manisakebap'){
	product.title = storage.manisakebap.title ;
	product.content = storage.manisakebap.content;
	product.usage = storage.manisakebap.usage;
	product.list = storage.manisakebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/manisakebap/manisakebabilayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/urfaKebap/urfakebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/patlıcankebap/patlıcankebaplayout2.jpg`;
}
else if(lastUrl == 'balabankebap'){
	product.title = storage.balabankebap.title ;
	product.content = storage.balabankebap.content;
	product.usage = storage.balabankebap.usage;
	product.list = storage.balabankebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/balabankebap/balabankebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/balabankebap/balabankebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/balabankebap/balabankebaplayout3.jpg`;
}
else if(lastUrl == 'abantkebap'){
	product.title = storage.abantkebap.title ;
	product.content = storage.abantkebap.content;
	product.usage = storage.abantkebap.usage;
	product.list = storage.abantkebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/abantkebap/abantkebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/abantkebap/abantkebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/urfaKebap/urfakebaplayout2.jpg`;
}
else if(lastUrl == 'islimkebap'){
	product.title = storage.islimkebap.title ;
	product.content = storage.islimkebap.content;
	product.usage = storage.islimkebap.usage;
	product.list = storage.islimkebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/islimkebap/islimkebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/islimkebap/islimkebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/islimkebap/islimkebaplayout3.jpg`;
}
else if(lastUrl == 'alinazikkebap'){
	product.title = storage.alinazikkebap.title ;
	product.content = storage.alinazikkebap.content;
	product.usage = storage.alinazikkebap.usage;
	product.list = storage.alinazikkebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/alinazikkebap/alinazikkebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/alinazikkebap/alinazikkebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/alinazikkebap/alinazikkebaplayout3.jpg`;
}
else if(lastUrl == 'testikebap'){
	product.title = storage.testikebap.title ;
	product.content = storage.testikebap.content;
	product.usage = storage.testikebap.usage;
	product.list = storage.testikebap.list;
	product.fimage = `http://localhost/frontapp/assets/img/kebaplar/testikebap/testikebaplayout1.jpg`;
	product.simage = `http://localhost/frontapp/assets/img/kebaplar/testikebap/testikebaplayout2.jpg`;
	product.timage = `http://localhost/frontapp/assets/img/kebaplar/testikebap/testikebaplayout3.jpg`;
}

else{
	
		product.title = "Yanlış Yoldasın Buradan Ekmek Çıkmaz" ;
		product.content = "Yanlış Yoldasın Buradan Ekmek Çıkmaz";
		product.usage = "Yanlış Yoldasın Buradan Ekmek Çıkmaz";
		product.list = "Yanlış Yoldasın Buradan Ekmek Çıkmaz";
		product.fimage = `http://localhost/frontapp/assets/img/forbidden.png`;
		product.simage = `http://localhost/frontapp/assets/img/forbidden.png`;
		product.timage = `http://localhost/frontapp/assets/img/forbidden.png`;
	
}

export default product;