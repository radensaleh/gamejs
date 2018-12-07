function Snake(){
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

  var url  = "proses/storeSnake.php";

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
        ctx.fillStyle = ( i == 0 )? "#21ff94" : "#e8fff4"; //dengan kepala berwarna biru dan ekor berwarna putih
        ctx.fillRect(snake[i].x, snake[i].y,box,box);

        ctx.strokeStyle = "#21ff94"; //border snake
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
      score = score + 100; //score increment ++
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

          var username = document.getElementById("username").value;
          newScore = score;

          $.ajax({
              url:url,
              type:"POST",
              data:{username:username,newScore:newScore},
              dataType:"json",
              success: function(res){
                  console.log(res.username);
                  console.log(res.newScore);
              }
          });

          gameOver(); //memanggil function gameOver
    }

    snake.unshift(newHead); //snake unshift

    printScore(); //memanggil function printScore

  }

  var game = setInterval(draw, 60); //set interval function draw
}


function Tetris(){
  const canvas = document.getElementById('canvastetris');
  const context = canvas.getContext('2d');

  context.scale(20, 20);

  context.fillStyle = "white";
  context.font = "1px Calibri";
  context.fillText(" Press 'S' ", 4,10);

  function arenaSweep() {
      let rowCount = 1;
      outer: for (let y = arena.length -1; y > 0; --y) {
          for (let x = 0; x < arena[y].length; ++x) {
              if (arena[y][x] === 0) {
                  continue outer;
              }
          }

          const row = arena.splice(y, 1)[0].fill(0);
          arena.unshift(row);
          ++y;

          player.score += rowCount * 100;
          rowCount *= 2;

          if(dropInterval == 200){
            console.log("udah 200 wkwkw");
          }else{
            dropInterval = dropInterval - 100;
          }

      }
  }

  function collide(arena, player) {
      const m = player.matrix;
      const o = player.pos;
      for (let y = 0; y < m.length; ++y) {
          for (let x = 0; x < m[y].length; ++x) {
              if (m[y][x] !== 0 &&
                 (arena[y + o.y] &&
                  arena[y + o.y][x + o.x]) !== 0) {
                  return true;
              }
          }
      }
      return false;
  }

  function createMatrix(w, h) {
      const matrix = [];
      while (h--) {
          matrix.push(new Array(w).fill(0));
      }
      return matrix;
  }

  function createPiece(type)
  {
      if (type === 'I') {
          return [
              [0, 1, 0, 0],
              [0, 1, 0, 0],
              [0, 1, 0, 0],
              [0, 1, 0, 0],
          ];
      } else if (type === 'L') {
          return [
              [0, 2, 0],
              [0, 2, 0],
              [0, 2, 2],
          ];
      } else if (type === 'J') {
          return [
              [0, 3, 0],
              [0, 3, 0],
              [3, 3, 0],
          ];
      } else if (type === 'O') {
          return [
              [4, 4],
              [4, 4],
          ];
      } else if (type === 'Z') {
          return [
              [5, 5, 0],
              [0, 5, 5],
              [0, 0, 0],
          ];
      } else if (type === 'S') {
          return [
              [0, 6, 6],
              [6, 6, 0],
              [0, 0, 0],
          ];
      } else if (type === 'T') {
          return [
              [0, 7, 0],
              [7, 7, 7],
              [0, 0, 0],
          ];
      }
  }

  function drawMatrix(matrix, offset) {
      matrix.forEach((row, y) => {
          row.forEach((value, x) => {
              if (value !== 0) {
                  context.fillStyle = colors[value];
                  context.fillRect(x + offset.x,
                                   y + offset.y,
                                   1, 1);
              }
          });
      });
  }

  function draws() {
      context.fillStyle = '#000';
      context.fillRect(0, 0, canvas.width, canvas.height);

      drawMatrix(arena, {x: 0, y: 0});
      drawMatrix(player.matrix, player.pos);
      updateScore();
  }

  function merge(arena, player) {
      player.matrix.forEach((row, y) => {
          row.forEach((value, x) => {
              if (value !== 0) {
                  arena[y + player.pos.y][x + player.pos.x] = value;
              }
          });
      });
  }

  function rotate(matrix, dir) {
      for (let y = 0; y < matrix.length; ++y) {
          for (let x = 0; x < y; ++x) {
              [
                  matrix[x][y],
                  matrix[y][x],
              ] = [
                  matrix[y][x],
                  matrix[x][y],
              ];
          }
      }

      if (dir > 0) {
          matrix.forEach(row => row.reverse());
      } else {
          matrix.reverse();
      }
  }

  function playerDrop() {
      player.pos.y++;
      if (collide(arena, player)) {
          player.pos.y--;
          merge(arena, player);
          playerReset();
          arenaSweep();
          // updateScore();
      }
      dropCounter = 0;
  }

  function playerMove(offset) {
      player.pos.x += offset;
      if (collide(arena, player)) {
          player.pos.x -= offset;
      }
  }
  var animReq = null;
  function playerReset() {
      const pieces = 'TJLOSZI';
      player.matrix = createPiece(pieces[pieces.length * Math.random() | 0]);
      player.pos.y = 0;
      player.pos.x = (arena[0].length / 2 | 0) -
                     (player.matrix[0].length / 2 | 0);
  }

  function playerRotate(dir) {
      const pos = player.pos.x;
      let offset = 1;
      rotate(player.matrix, dir);
      while (collide(arena, player)) {
          player.pos.x += offset;
          offset = -(offset + (offset > 0 ? 1 : -1));
          if (offset > player.matrix[0].length) {
              rotate(player.matrix, -dir);
              player.pos.x = pos;
              return;
          }
      }
  }

  let dropCounter = 0;
  let dropInterval = 1000;

  let lastTime = 0;
  function update(time = 0) {
      const deltaTime = time - lastTime;

      dropCounter += deltaTime;
      if (dropCounter > dropInterval) {
          playerDrop();
      }

      lastTime = time;

      draws();

      if (collide(arena, player)) {
          gameOver();
          cancelAnimationFrame(animReq);

          var url = "proses/storeTetris.php";
          var username = document.getElementById("username").value;
          var newScore = 0;
          newScore = player.score;

          $.ajax({
              url:url,
              type:"POST",
              data:{username:username,newScore:newScore},
              dataType:"json",
              success: function(res){
                  console.log(res.username);
                  console.log(res.newScore);
              }
          });

      }else{
        animReq = requestAnimationFrame(update);
      }



  }

  function updateScore() {
      context.fillStyle = "white";
      context.font = "1px Calibri";
      context.fillText(" Score : " + player.score,0,1);
  }

  function gameOver(){
      context.fillStyle = "white";
      context.font = "1px Calibri";
      context.fillText("GAME OVER ",3,10);
  }

  document.addEventListener('keydown', event => {
      if (event.keyCode === 37) {
          playerMove(-1);
      } else if (event.keyCode === 39) {
          playerMove(1);
      } else if (event.keyCode === 40) {
          playerDrop();
      } else if (event.keyCode === 81) {
          playerRotate(-1);
      } else if (event.keyCode === 87) {
          playerRotate(1);
      } else if (event.keyCode === 83){
          update();
      }
  });

  const colors = [
      null,
      '#FF0D72',
      '#0DC2FF',
      '#0DFF72',
      '#F538FF',
      '#FF8E0D',
      '#FFE138',
      '#3877FF',
  ];

  const arena = createMatrix(12, 20);

  const player = {
      pos: {x: 0, y: 0},
      matrix: null,
      score: 0,
  };

  playerReset();
  // updateScore();
}
