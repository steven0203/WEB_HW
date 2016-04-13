#!/usr/local/bin/node

var querystring = require('querystring');
var param = querystring.parse(process.env.QUERY_STRING);

/* return header to browser */
console.log('Content-type: text/html; charset=utf-8\n');

/* return normal HTML content */
console.log('<h1>Hello World!</h1>'); 


