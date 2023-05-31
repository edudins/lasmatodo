function Circle() {
    // svg element variables
    var svg = d3.select('svg');
    // calc screen screen width
    var windowWidth = document.documentElement.clientWidth;
    var windowHeight = document.documentElement.clientHeight;
    // movement speed in milliseconds
    var speed = 750;
    // position init
    var posX = windowWidth / 2;
    var posY = windowHeight / 2;
    // circle init
    var r = 50;
    var circle = svg.append('circle')
        .attr('cx', posX)
        .attr('cy', posY)
        .attr('r', r)
        .style('fill', 'green')
        .style('stroke', 'black');
    // Spiral variables
    var a = 5;
    var t = 0;

    function position() {
      console.log("X: " + posX + " " + "Y: " + posY);
    }

    function randomColour() {
      let randomColour = Math.floor(Math.random() * 16777215).toString(16);
      return "#" + randomColour;
    }

    function moveCircle(posX, posY) {
      circle.transition().duration(speed)
        .attr('cx', posX)
        .attr('cy', posY)
        .style('fill', randomColour());
    }

    function moveCircleInSpiral() {
      // Calculate next point on spiral
      posX = a * t * Math.cos(t);
      posY = a * t * Math.sin(t);
      // Move circle
      moveCircle(posX + 500, posY + 500);
      // Update 'time' variable
      if (t !== 100) {
        t += 1;
      } else {
        t = 0;
      }
    };

    var functionToRun = function moveCircleRandomly() {
      let min = 0 + r;
      let mX = windowWidth - r;
      let mY = windowHeight - r;
      // random number between min and max including max
      posX = Math.ceil(Math.random()*(mX-min) + min);
      posY = Math.ceil(Math.random()*(mY-min) + min);
      moveCircle(posX, posY);
      console.log(posX, posY);
    }

    setInterval(functionToRun, speed);

}
