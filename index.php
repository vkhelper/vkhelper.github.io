<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHPDAUN</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  
</head>


<div class="container mt-5">

 Что бы узнать токен - копируете 
 <a href='https://vk.com/away.php?utf=1&to=https%3A%2F%2Fvk.com%2Faway.php%3Futf%3D1%26to%3Dhttps%253A%252F%252Foauth.vk.com%252Fauthorize%253Fclient_id%253D2685278%2526display%253Dpage%2526scope%253Doffline%252Cmessages%2526redirect_uri%253Dhttps%253A%252F%252Fapi.vk.com%252Fblank.html%2526response_type%253Dtoken%2526v%253D5.80'>ссылку</a> 
 от = до &
  <form action=" " method="post"> 
  <textarea name= "token" class="form-control" placeholder="Введите токен"></textarea>
  <textarea name="id" class="form-control" placeholder="Введите id человека"></textarea>
  <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea>
  <button type="sumbit" name="send" class="btn btn-success">Отправить</button>
  </form>
 <?php
  $token = $_POST['token'];
  $id = $_POST['id'];
  $message = $_POST['message'];
  $info = file_get_contents('https://api.vk.com/method/messages.send?v=5.4&message='.$message.'&user_id='.$id.'&access_token='.$token)
   
  ?>
  
  
 
  </div>
 </body>
</html>
