'use strict';

let dat = {
  data : {
    set: {

      'f_entry_date': '2017/9/28 20:45:21',
      'meal_ID': '123',
      //'u_ID': '3'

    },
    table: 'food_entries'
  },
  newRand: '5789086',
  randKey: '0',
  token: '1nltmpnJZD7zn28C2dKPJKEksB6wd68787q0BfXezXy1q+s+HPOS10rYWAf+znkGhxopIxo3U0tj6lMHzt9hIeCdjHrvrMxgeXBjAhW2Jv1Ikjx8='

};

let res;

//GET
$.ajax({
  type: 'POST',
  url: 'localhost/pregnancy/api/v1/access',
  contentType: 'application/json',
  dataType: 'json',
  data: JSON.stringify(dat),
  success: (result,status,xhr) => {
    console.log(result);
    console.log(`${JSON.stringify(xhr)} ${status}`);
  },
  error: (xhr, status, error) => {
    console.log('err');
    console.log (`${JSON.stringify(xhr)} ${status}`);
  }
});

/*
//POST
$.post("rest_practice.php/posts",
dat,
(data, status) => {
  console.log("GET"+data);
})
*/
//runs first b/c the callbacks (post and get) take a bit longer
console.log(res);
