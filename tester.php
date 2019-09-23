<head>
  <style type="text/css">
    .content{
 position: relative;
  margin: 30px 5%;
  width: 90%;
  height: auto;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
}

.card {
  float: left;
  position: relative;
  margin: 20px 1.5%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
  text-align: center;
  font-family: arial;
  max-height: inherit;
}

.card:hover {
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.c1{
  height: 40%;
  overflow: hidden;
}

.c2{
  height: 13ch;
  overflow: hidden;
}

.c3{
  height:30ch;
  overflow: hidden;
}

.c4{
  height: 10%;
}
.bio {
  display: block; 
  text-overflow: ellipsis;
  word-wrap: break-word;
  overflow: hidden;
  max-height: 8.6em;
  line-height: 1.8em;
  color: grey;
  font-size: 24px;
}

.card button {
  margin: 0px 5%;
  border: none;
  outline: 0;
  padding: 10px;
  color: white;
  background-color: #188224;
  text-align: center;
  cursor: pointer;
  width: 40%;
  font-size: 22px ;
  border-radius: 25px;
}

.card button:hover {
    background-color: 257543;
}

#viewbtn{
  float: left;
}

#donatebtn{
  float: left;
}
  </style>>
</head>
<body>
<div class="content">
  <div class="card">
       <div class="c1">
       <a href="#"><img src="145.jpg" alt="Avatar" style="width:100%"></a>
        </div>
        <div class="c2">
        <h1>Refugee Campaign</h1>
      </div>
      <div class="c3">
        <p class="bio">Help the refugees.</p>
         <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem  Super slim and cfy um v.uper slim and cfy um vuper slim and cfy um upanv</p>
       </div>
       <div class="c4">
        <a href="post.php"><button id="viewbtn">View</button></a>
        <a href="LoginForm.php"><button id="donatebtn">Donate</button></a>
      </div>
    </div>
    <div class="card">
       <div class="c1">
       <a href="#"><img src="anes-sabitovic-AyflGfRL9OA-unsplash.jpg" alt="Avatar" style="width:100%"></a>
        </div>
        <div class="c2">
        <h1>Refugee Campaign</h1>
      </div>
      <div class="c3">
        <p class="bio">Help the refugees.</p>
         <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem  Super slim and cfy um v.uper slim and cfy um vuper slim and cfy um upanv</p>
       </div>
       <div class="c4">
        <a href="post.php"><button id="viewbtn">View</button></a>
        <a href="LoginForm.php"><button id="donatebtn">Donate</button></a>
      </div>
    </div><div class="card">
       <div class="c1">
       <a href="#"><img src="124.jpg" alt="Avatar" style="width:100%"></a>
        </div>
        <div class="c2">
        <h1>Refugee Campaign</h1>
      </div>
      <div class="c3">
        <p class="bio">Help the refugees.</p>
         <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem  Super slim and cfy um v.uper slim and cfy um vuper slim and cfy um upanv</p>
       </div>
     </div>
   </div>