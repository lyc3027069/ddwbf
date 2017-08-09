function getVerCode() {
	var str = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	var sum = "";
	for(var j = 0; j < 4; j++) {
		sum = sum + str.substr(parseInt(Math.random() * 36), 1) + "";
	}
	return sum;
}

function getCookie(name) {
	var str = document.cookie;
	var arr = str.split("; ");
	for(var i = 0; i < arr.length; i++) {
		var arr1 = arr[i].split("=");
		if(arr1[0] == name) {
			return arr1[1];
		}
	}

}

function setCookie(name, value, n) {
	var oDate = new Date();
	oDate.setDate(oDate.getDate() + n);
	document.cookie = name + "=" + value + ";expires=" + oDate;
}

