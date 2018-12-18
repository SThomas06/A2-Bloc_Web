var getJSON = function(url, callback) {
 var xhr = new XMLHttpRequest();
 xhr.open('GET', url, true);
 xhr.responseType = 'json';
 xhr.onload = function() {
 var status = xhr.status;
 if (status === 200) {
 callback(null, xhr.response);
 } else {
 callback(status, xhr.response);
 }
 };
 xhr.send();
};
var rep = getJSON('http://geekpress.fr/wp-json/wp/v2/users',
 function(err, data) {
 if (err !== null) {
 alert('Something went wrong: ' + err);
 }
 else {
 console.log(data);
 for (var i = 0; i < data.length; i++) {
 console.log(data[i].name);
 }
 return data;
 }
 });
