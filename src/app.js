//Progetto: minimal

 console.log('test js');
  var $ = require('jquery');
  import Handlebars from 'handlebars/dist/cjs/handlebars.js';
  var moment = require('moment');
  require("moment/min/locales.min");
  var Chart = require('chart.js');

 $(document).ready(function () {

   //test import
   console.log($);
   console.log(moment);
   console.log(Chart);
   console.log(moment().locale('it-IT').format());


});
