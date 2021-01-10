let burger = document.getElementById('burger'),
	 nav    = document.getElementById('main-nav'),
	 slowmo = document.getElementById('slowmo'),
	 close = document.getElementById('mobile-close'),
	 close1 = document.getElementById('mobile-close1'),
	 close2 = document.getElementById('mobile-close2'),
	 close3 = document.getElementById('mobile-close3');

burger.addEventListener('click', function(e){
	this.classList.toggle('is-open');
	nav.classList.toggle('is-open');
});

close.addEventListener('click', function(e) {
	this.classList.toggle('is-open');
	nav.classList.toggle('is-open');
	burger.classList.toggle('is-open');
});

close1.addEventListener('click', function(e) {
	this.classList.toggle('is-open');
	nav.classList.toggle('is-open');
	burger.classList.toggle('is-open');
});

close2.addEventListener('click', function(e) {
	this.classList.toggle('is-open');
	nav.classList.toggle('is-open');
	burger.classList.toggle('is-open');
});

close3.addEventListener('click', function(e) {
	this.classList.toggle('is-open');
	nav.classList.toggle('is-open');
	burger.classList.toggle('is-open');
});

