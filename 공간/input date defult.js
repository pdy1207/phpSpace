<input type = "date" name ="date_to"  />
<input type = "date" name ="date_from" style="margin-right: 10px;" />


var today = new Date().toISOString().substring(0, 10);
var thisday = new Date();
var tomorrow = new Date(thisday.setDate(thisday.getDate() + 1));

document.getElementById('date_to').value = today;
document.getElementById('date_from').value = tomorrow.toISOString().substring(0, 10);
