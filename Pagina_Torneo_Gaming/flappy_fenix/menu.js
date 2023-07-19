var Menu = {
    
    preload: function(){
        juego.stage.backgroundColor = '#0e1018';
        juego.load.image('boton', 'flappy_fenix/img/btn.png');
    },
    
    create: function(){
        var boton = this.add.button(juego.width/2, juego.height/2, 'boton', this.iniciarJuego, this);
        boton.anchor.setTo(0.5);
        
        var txtIniciar = juego.add.text(juego.width/2, juego.height/2 -85, "Iniciar juego", {font: "bold 24px sans-serif", fill:"white", align:"center"});
        txtIniciar.anchor.setTo(0.5);
        var txtTitulo = juego.add.text(juego.width/2, juego.height/2 -125, "Flappy Bird", {font: "bold 30px sans-serif", fill:"white", align:"center"});
        txtTitulo.anchor.setTo(0.5);
    },
    
    iniciarJuego: function(){
        this.state.start('Juego');
    }
    
};