var juego = new Phaser.Game(369, 557, Phaser.CANVAS, 'bloque_juego');

juego.state.add('Menu', Menu);
juego.state.add('Juego', Juego);
juego.state.add('Game_Over', Game_Over);

juego.state.start('Menu');