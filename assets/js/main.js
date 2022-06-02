var waypoint = new Waypoint({
    element: document.getElementById('waypoint'),
    handler: function(direction) {
        anime({
            targets: '#target',
            translateX: path('x'),
            translateY: path('y'),
            rotate: path('angle'),
            easing: 'linear',
            duration: 8000,
          });

          setTimeout(function(){
            document.getElementById('point1').style.display = "block"
          }, 500)
          setTimeout(function(){
            document.getElementById('point2').style.display = "block"
          }, 1500)
          setTimeout(function(){
            document.getElementById('point3').style.display = "block"
          }, 3000)
          setTimeout(function(){
            document.getElementById('point4').style.display = "block"
          }, 4800)
          setTimeout(function(){
            document.getElementById('point5').style.display = "block"
          }, 6000)
          setTimeout(function(){
            document.getElementById('point6').style.display = "block"
          }, 8000)

          this.destroy();
    }
  })