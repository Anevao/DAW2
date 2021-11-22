class ExtendedClock extends Clock {
  constructor(options) {
    super(options);
    let { precision = 1000 } = options; //si no existe no pasa nada si la pasas vacia le da valor 1000 si no usa la variable
    this.precision = precision;
  }

  start() {
    this.render();
    this.timer = setInterval(() => this.render(), this.precision);
  }
}
