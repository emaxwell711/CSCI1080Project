window.onload = function() {
	var article = document.createElement('article');
	var a = document.createElement('a');
	var img = document.createElement('img');
	var p = document.createElement('p');
	img.src = 'images/thumbs/02.jpg';
	a.class = 'thumbnail';
	a.href = 'images/fulls/02.jpg';
	a.dataset.position = 'top left';
	a.appendChild(img);
	article.appendChild(a);
	article.appendChild(p);
	document.getElementById("thumbnails").append(article);
}