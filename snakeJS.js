

  var cvs = document.getElementById("canvas"); //inisialisasi canvas
  var ctx = cvs.getContext("2d"); //inisialisasi context 2d

  var img = new Image(); //membuat objek image
  img.src = "img/bg.jpg"; //mengambil source image

  var foodImg = new Image(); //membuat objek image
  foodImg.src = "img/food.png"; //mengambil source image

  // var ling = new Image(); //membuat objek image
  // ling.src = "img/lingkaran.png"; //mengambil source image

  var box = 15; //ukuran kotak ular
  var score = 0; //score
  var newScore = 0;

  var url  = "storeSnake.php";

  var snake = []; //variable snake array
  snake[0] = { //membuat snake index ke 0 berada di x 5 dan y 10
    x : 5 * box ,
    y : 10 * box
  }

  var food = { //variable makanan random
    x : Math.floor(Math.random()*17+1) * box,
    y : Math.floor(Math.random()*15+3) * box
  }

  var d;
  document.addEventListener("keydown", direction); //keydown

  //function untuk mengatur keydown
  function direction(event){
    var key = event.keyCode;
    if( key == 37 && d != "RIGHT" ){
      d = "LEFT";
    }else if( key == 38 && d != "DOWN" ){
      d = "UP";
    }else if( key == 39 && d != "LEFT" ){
      d = "RIGHT";
    }else if( key == 40 && d != "UP" ){
      d = "DOWN";
    }else if( key == 82 ){
        location.reload();
    }
  }

  //function untuk mencetak score
  function printScore(){
    ctx.fillStyle = "white";
    ctx.font = "15px Calibri";
    ctx.fillText("Score : " + score,25,35);
  }

  //function untuk mencetak game over
  function gameOver(){
    clearInterval(game);
    ctx.fillStyle = "white";
    ctx.font = "20px Calibri";
    ctx.fillText("GAME OVER",210,180);

    ctx.fillStyle = "white";
    ctx.font = "12px Calibri";
    ctx.fillText("Reload the page or press 'R' to play again",150,200);
  }

  //function ketika snake menabrak dirinya sendiri
  function collision(head,array){
    for( var i = 0; i < array.length; i++ ){
      if( head.x == array[i].x && head.y == array[i].y ){
        return true;
      }
    } return false;
  }

  //function untuk menggambar keseluruhan
  function draw(){
    ctx.drawImage(img, 13, 13, 530, 362); //gambar background
    for( var i = 0; i < snake.length; i++ ){ //perulangan untuk menggambar snake
        ctx.fillStyle = ( i == 0 )? "#6195FF" : "white"; //dengan kepala berwarna biru dan ekor berwarna putih
        ctx.fillRect(snake[i].x, snake[i].y,box,box);

        ctx.strokeStyle = "#6195FF"; //border snake
        ctx.strokeRect(snake[i].x, snake[i].y,box,box);
    }

    ctx.drawImage(foodImg, food.x, food.y, 20, 18); //gambar makanan

    var snakeX = snake[0].x; //variable untuk snakeX
    var snakeY = snake[0].y; //variable untuk snakeY

    if( d == "LEFT" ) snakeX -= box; //keydown left
    if( d == "UP" ) snakeY -= box; //keydown up
    if( d == "RIGHT" ) snakeX += box; //keydown right
    if( d == "DOWN" ) snakeY += box; //keydown down

    if( snakeX == food.x && snakeY == food.y ){ //kondisi jika snake memakan makanan
      score++; //score increment ++
      food = { //gambar makanan secara random
        x : Math.floor(Math.random()*17+1) * box,
        y : Math.floor(Math.random()*15+3) * box
      }
    }else{
        snake.pop(); //snake pop
    }

    var newHead = { //membuat kepala baru
      x : snakeX,
      y : snakeY
    }

    if(snakeX < box || snakeX > 35* box || snakeY < box || snakeY > 23*box
        || collision(newHead,snake)){ //kondisi ketika snake nabrak dinding dan dirinya sendiri
          newScore = score;

          $.ajax({
              url:url,
              type:"POST",
              data:{newScore:newScore},
              dataType:"json",
              success: function(res){
                  console.log(res.newScore);
              }
          });

          gameOver(); //memanggil function gameOver
    }

    snake.unshift(newHead); //snake unshift

    printScore(); //memanggil function printScore

  }

  var game = setInterval(draw, 60); //set interval function draw
