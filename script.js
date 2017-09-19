'use strict';

let dat = {
  data : {
    where: {

      'usr': 'A4F2',
      'pass': 'helLo',
      //'u_ID': '3'

    },
    table: 'users'
  },
  newRand: '0',
  token: '{"uid":1,"exp":1604469500}',
  randKey: '0'
};

let res;

//GET
$.ajax({
  type: 'GET',
  url: 'localhost/pregnancy/api/v1/login',
  contentType: 'application/json',
  dataType: 'json',
  data: dat,
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
