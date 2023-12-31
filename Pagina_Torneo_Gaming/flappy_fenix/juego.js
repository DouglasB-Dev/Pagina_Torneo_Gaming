var bg;
var tubos;
var flappy;
var salto;
var timer;
var puntos;
var txtPuntos;

var Juego = {
  
    preload: function(){
        juego.load.image('bg', 'flappy_fenix/img/bg.jpg');
        juego.load.spritesheet('pajaros', 'flappy_fenix/img/fenix.png', 46, 39);
        juego.load.image('tubo', 'flappy_fenix/img/tubo.png');
        
        juego.forceSingleUpdate = true;
    },
    
    create: function(){
        bg = juego.add.tileSprite(0, 0, 369, 557, 'bg');
        juego.physics.startSystem(Phaser.Physics.ARCADE);
        tubos = juego.add.group();
        tubos.enableBody = true;
        tubos.createMultiple(20, 'tubo');
        
        flappy = juego.add.sprite(100, 245, 'pajaros');
        flappy.frame = 1;

        flappy.animations.add('vuelo', [0,1,2], 10, true);
        
        juego.physics.arcade.enable(flappy);
        flappy.body.gravity.y = 1200;
        
        salto = juego.input.keyboard.addKey(Phaser.Keyboard.SPACEBAR);
        salto.onDown.add(this.saltar, this);
        
        timer = juego.time.events.loop(1500, this.crearColumna, this);
        
        puntos = -1;
        txtPuntos = juego.add.text(20, 20, "0", {font: "30px Arial", fill: "#FFF"});
 
    },
    
    update: function(){
        if(flappy.inWorld == false)
        {
            //Reiniciar = enviar a Game_Over
            this.state.start('Game_Over');
        }
        else if(flappy.position.y >460)
        {
            //Reiniciar = enviar a Game_Over
            flappy.alive = false;
            tubos.forEachAlive(function(t){
                   t.body.velocity.x = 0;
            }, this);
        }
        else
        {
            bg.tilePosition.x -= 1; 
        }
        
        juego.physics.arcade.overlap(flappy, tubos, this.tocoTubo, null, this);
        
        flappy.animations.play('vuelo');
        if(flappy.angle <20)
        {
            flappy.angle += 1;        
        }
    },
    
    saltar: function(){
        flappy.body.velocity.y = -350;
        juego.add.tween(flappy).to({angle:-20}, 100).start();
    },
    
    crearColumna: function(){
        var hueco = Math.floor(Math.random()*5)+1;
        for( var i = 0; i < 8; i++)
        {
            if(i != hueco && i != hueco+1)
            {
                this.crearUnTubo(370, i*55+20);
            }
        }
        
        puntos +=1;
        txtPuntos.text = puntos;
    }, 
    
    crearUnTubo: function(x, y){
        var tubo = tubos.getFirstDead();
        
        tubo.reset(x, y);
        tubo.body.velocity.x = -180;
        tubo.checkWorldBounds = true;
        tubo.outOfBoundsKill = true;
    },
    
    tocoTubo: function(){
        if(flappy.alive == false)
            return;
        flappy.alive = false;
        juego.time.events.remove(timer);
        
        tubos.forEachAlive(function(t){
            t.body.velocity.x = 0;
        }, this);
    }
    
};