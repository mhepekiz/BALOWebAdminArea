function soopaSetup() {
	var resim, shxs, snxs;
	for (var ix = 0; (resim = document.images[ix]); ix++) {
		if (resim.getAttribute) {
			snxs = resim.getAttribute("src");shxs = resim.getAttribute("hsrc");
			if (snxs != "" && snxs != null) {
				resim.nx = new Image();resim.nx.src = resim.src;
				if (shxs != "" && shxs != null) { resim.hx = new Image();resim.hx.src = shxs;resim.onmouseover = soopaSwapOn;resim.onmouseout  = soopaSwapOff; }
			}
		}
	}
}

function soopaSwapOn() {this.src = this.hx.src;}
function soopaSwapOff() {this.src  = this.nx.src;}
function soopaSwapUp() {
	var ths = soopaSwapUp.resim;ths.src = ths.nx.src;
	if (ths.temp) document.onmouseup = ths.temp;
}