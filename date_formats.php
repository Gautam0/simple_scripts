<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>

<script>
	var data = "May 26, 2018 - November 27, 2018";

	data = data.split(" ");
	data[1] = data[1].replace(/,/g, '');
	data[5] = data[5].replace(/,/g, '');
	var months = ["January", "February", "March", "April", "May", "June", "July" , "August", "September", "October", "November", "December"];
	for(var i = 0;i < months.length;i++) {
		if(data[0] == months[i]) {
			data[0] = i + 1;
			data[0] = '' + data[0];
			if (data[0].length == 1) {
				data[0] = '0'+data[0];
			}
		}

		if(data[4] == months[i]) {
			data[4] = i + 1;
			data[4] = '' + data[4];
			if (data[4].length == 1) {
				data[4] = '0'+data[4];
			}
		}
	}

	//check if day is 2 or 02

	var start_date = data[2] + "-" + data[0] + "-" + data[1] + " " + "00:00:01";
	var end_date = data[6] + "-" + data[4] + "-" + data[5] + " " + "23:59:59";

	console.log(start_date +"---------"+ end_date);
</script>