var Game_Over = {
    
    preload: function(){
        juego.stage.backgroundColor = '#0e1018';
        juego.load.image('boton', 'flappy_fenix/img/btn.png');
    }, 
    
    create: function(){

        
        var boton = this.add.button(juego.width/2, juego.height/2, 'boton', this.iniciarJuego, this);
        boton.anchor.setTo(0.5);
        
        var txtPuntosEtiqueta = juego.add.text(juego.width/2 -50, juego.height/2 -85, "Puntos: ", {font: "bold 20px sans-serif", fill:"white", align:"center"});
        txtPuntosEtiqueta.anchor.setTo(0.5);
        if(puntos == -1)
            puntos = 0;
        var txtPuntosNumero = juego.add.text(juego.width/2 +50, juego.height/2 -85, puntos.toString(), {font: "bold 20px sans-serif", fill:"white", align:"center"});
        
        txtPuntosNumero.anchor.setTo(0.5);
        var txtTitulo = juego.add.text(juego.width/2, juego.height/2 -125, "Juego terminado", {font: "bold 30px sans-serif", fill:"white", align:"center"});
        txtTitulo.anchor.setTo(0.5);

    }, 
    
    iniciarJuego: function(){
        this.state.start('Juego');
    }
    
};

//intento de sacar score
function usuarios(records){
    this.records = records;
}

usuarios.prototype.añadirrecord = function(){
    console.log(this.records);
}

// Codigo para enviar el record a base de datos
function proceso()
{
    record = $('#record').val();

    $.post('recibir.php', { record: puntos}, function(data)
    {
        if(data!=null)
        {
            alert("Los datos se enviaron correctamente");

        }else{

            alert("Los datos no se enviaron");

        }
    });
}
