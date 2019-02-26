const express = require('express');
const app = express()
var path = require('path');


app.get('/',(request,response)  =>  {
   response.send("hello world");
})
app.get('/batman',(request,response)=> {
   response.send("i am batman !!")
})
app.get('/spiderman',(request,response)=> {
   response.send("<h1>i am spider man</h1>")
})
app.get('/runhtml',(request,response)=> {
  response.sendFile(path.join(__dirname, '../public', 'index.html'))
});

app.listen(3000);